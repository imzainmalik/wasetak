<?php

namespace App\Http\Controllers\User;
use Carbon\Carbon;
use App\Models\FAQ;
use App\Models\Post;
use App\Models\User;
use App\Models\Admin;
use App\Models\PageLike;
use App\Models\PostLike;
use App\Models\AdminPage;
use App\Models\PageReply;
use App\Models\PostReply;
use App\Models\FlagedPage;
use App\Models\SubCategory;
use App\Models\PageBookmark;
use Illuminate\Http\Request;
use App\Models\ForumCategory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;
use Egulias\EmailValidator\Result\Reason\Reason;

class UserPageController extends Controller
{

    public function about()
    {   
        $faqs = FAQ::where('is_active',1)->orderBy('sort','Asc')->get();
        $admins = Admin::get();
        //Post Data
        $Postlast24HoursData = Post::where('is_active',1)->where('created_at', '>=', now()->subDay())->count();
        $PostlastWeekData = Post::where('is_active',1)->where('created_at', '>=', now()->subWeek())->count();
        $PostlastMonthData = Post::where('is_active',1)->where('created_at', '>=', now()->subMonth())->count();
        $PostAll = Post::where('is_active',1)->count();
       
        //SingUps
        $SignUplast24HoursData = User::where('created_at', '>=', now()->subDay())->count();
        $SignUplastWeekData = User::where('created_at', '>=', now()->subWeek())->count();
        $SignUplastMonthData = User::where('created_at', '>=', now()->subMonth())->count();
        $SignUpAll = User::count();

        //Active Users
        $Userlast24HoursData = User::where('is_active',1)->where('created_at', '>=', now()->subDay())->count();
        $UserlastWeekData = User::where('is_active',1)->where('created_at', '>=', now()->subWeek())->count();
        $UserlastMonthData = User::where('is_active',1)->where('created_at', '>=', now()->subMonth())->count();
        $UserAll = User::where('is_active',1)->count();

        //Likes
        $PostLikelast24HoursData = PostLike::where('created_at', '>=', now()->subDay())->count();
        $PostLikelastWeekData = PostLike::where('created_at', '>=', now()->subWeek())->count();
        $PostLikelastMonthData = PostLike::where('created_at', '>=', now()->subMonth())->count();
        $PostLikeAll = PostLike::count();
       
        // dd($Postlast24HoursData, $PostlastWeekData, $PostlastMonthData, $PostAll);
        return view('User.about' , get_defined_vars());
    }




    public function userPage($slug)
    {   

        $page = AdminPage::where('is_active',1)->where('slug',$slug)->first();
        $page_replies = PageReply::where('is_active',1)->get();
        $like_check = null;
        $book_check = null;
        if(auth()->check()){
            $like_check = PageLike::where('user_id' , auth()->user()->id)->where('page_id', $page->id)->first();
            $book_check = PageBookmark::where('user_id' , auth()->user()->id)->where('page_id', $page->id)->first();
        }
        if(!$page){
            abort(403);
        }
        
        return view('User.pages' , get_defined_vars());
    }


    public function user_like_page($page_id){

        $like = PageLike::where('user_id', auth()->user()->id)->where('page_id', $page_id)->first();
        if($like){
            $like->delete();
            return response()->json(['status'=>0]);
        }else{
            $like = new PageLike();
            $like->user_id = auth()->user()->id;
            $like->page_id = $page_id;
            $like->save();
         }
        
        return response()->json(['status'=>1]);
    }

    public function user_flag_page(Request $request){

        $request->validate([
            'reason' => 'required',
            'reveal' => 'required',
        ]);

        $flag = new FlagedPage();
        $flag->user_id = auth()->user()->id;
        $flag->page_id = $request->page_id;
        $flag->reason = $request->reason;
        if($request->reveal == 'reveal'){
            $flag->reveal = 1;
        }
        if($request->reveal == 'inappropriate'){
            $flag->inappropriate = 1;
        }
        if($request->reveal == 'its_spam'){
            $flag->its_spam = 1;
        }
        if($request->reveal == 'something_else'){
            $flag->something_else = 1;
        }
        $flag->save();

        return response()->json(['success'=>'Successfully']);
        
    }

    public function userList(Request $request)
    {
        $now = Carbon::now();
        $start = $now->toDateString();
        // dd($request->all());
        if(isset($request['filter']) && $request['filter'] == 'year'){
            $end = $now->subYear();
        }
        elseif(isset($request['filter']) && $request['filter'] == 'quarter'){
            $end = $now->subQuarter();
        }
        elseif(isset($request['filter']) && $request['filter'] == 'month'){
            $end = $now->subMonth();
        }
        elseif(isset($request['filter']) && $request['filter'] == 'today'){
            $end = $now;
        }else{
            $end = $now->subWeek();
        }
        $user_count = User::where('is_active', 1)->count();             
        if ($request->ajax()) {
            if(isset($request['filter']) && $request['filter'] == 'all'){
                $data = User::where('is_active', 1)->with(['all_posts' => function ($query) use ($start, $end) {  
                    $query->where('is_active',1)->withCount('likes');
                }])->get()
                ->map(function ($row){
                    $likesCount = 0;

                    if ($row->all_posts) {
                        foreach ($row->all_posts as $post) {
                            $likesCount += $post->likes ? $post->likes->count() : 0;
                        }
                    }
                    return [
                        'id'=> $row->id,
                        'name' => $row->name,
                        'd_picture' => isset($row->d_picture) ? asset($row->d_picture) : asset('user_asset/img/card24.png') ,
                        'given' => isset($row->likes) ? $row->likes->count() : 0, 
                        'received' =>  $likesCount, 
                        'topic_created' => isset($row->all_posts) ? $row->all_posts->count() : 0, 
                        'replies_posted' => isset($row->replies) ? $row->replies->count(): 0,
                        'topics_viewed' =>  isset($row->post_views) ? $row->post_views->count(): 0,
                        'days_visited' => isset($row->day_visits) ? $row->day_visits->count() : 0 ,
                    ];
                });
            }
            else{
             $data = User::where('is_active', 1)->with(['all_posts' => function ($query) use ($start, $end) {  
                    $query->where('is_active',1)->with(['likes' => function ($likeQuery) use ($start, $end) {
                        $likeQuery->where('created_at', '<=' , $start .' 23:59:59')->where('created_at','>=', $end->toDateString().' 00:00:00');
                    }]);
                }])->get()
                ->map(function ($row) use ($start , $end){
                    $likesCount = 0;

                    if ($row->all_posts) {
                        foreach ($row->all_posts as $post) {
                            $likesCount += $post->likes ? $post->likes->count() : 0;
                        }
                    }
                    return [
                        'id'=> $row->id,
                        'name' => $row->name,
                        'd_picture' => isset($row->d_picture) ? asset($row->d_picture) : asset('user_asset/img/card24.png') ,
                        'received' =>  $likesCount, 
                        'given' => isset($row->likes) ? $row->likes->where('created_at', '<=' , $start .' 23:59:59')->where('created_at','>=', $end->toDateString().' 00:00:00')->count() : 0, 
                        'topic_created' => isset($row->all_posts) ? $row->all_posts->where('created_at', '<=' , $start .' 23:59:59')->where('created_at','>=', $end->toDateString().' 00:00:00')->count() : 0, 
                        'replies_posted' => isset($row->replies) ? $row->replies->where('created_at', '<=' , $start .' 23:59:59')->where('created_at','>=', $end->toDateString().' 00:00:00')->count(): 0,
                        'topics_viewed' =>  isset($row->post_views) ? $row->post_views->where('created_at', '<=' , $start .' 23:59:59')->where('created_at','>=', $end->toDateString().' 00:00:00')->count(): 0,
                        'days_visited' => isset($row->day_visits) ? $row->day_visits->where('created_at', '<=' , $start .' 23:59:59')->where('created_at','>=', $end->toDateString().' 00:00:00')->count() : 0 ,
                    ];
                });
            }
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('username', function($row){
                        $btn = '<div class="meta"><img src="'.($row['d_picture']).'" alt=""> <h5><span>'.$row['name']. '</span></h5></div>';
                         return $btn;
                 })
                    
                    ->rawColumns(['username'])
                    ->make(true);
        }
        


     
        return view('User.users', get_defined_vars());    
    }

    public function user_bookmark_page(Request $request){

        // "bookmark_for" => null
        // "page_id" => "1"
        // "custum_date" => null
        // "custum_time" => null
        // "remind_me" => "tomorrow"
        // "notifieds" => "0"


        // $request->validate([
        //     'reason' => 'required',
        //     'reveal' => 'required',
        // ]);

        $page_bookmark = PageBookmark::where('user_id', auth()->user()->id)->where('page_id',$request->page_id)->first();

        $notification = null;
        if($page_bookmark){
            if($request->bookmark_for != null){
                $page_bookmark->bookmark_for = $request->bookmark_for;
            }
            $page_bookmark->notified = $request->notifieds;
            $notification = 'BookMark Successfully';
            if(isset($request->remind_me)){
                if($request->remind_me == "tomorrow"){
                    $page_bookmark->reminder_me = $request->remind_me;
                    $page_bookmark->date_and_Time =  Carbon::now()->tomorrow()->toDateTimeString();
                    $notification = 'You have a reminder set for this bookmark which will be sent '.  Carbon::now()->tomorrow()->format('D') .', 08:00 PM';
                }
                if($request->remind_me == "monday"){
                    $page_bookmark->reminder_me = $request->remind_me;
                    $page_bookmark->date_and_Time =  Carbon::now()->endOfWeek(Carbon::MONDAY)->toDateTimeString();
                    $notification = 'You have a reminder set for this bookmark which will be sent ' .Carbon::now()->endOfWeek(Carbon::MONDAY)->format('D j'). ', 08:00';
                }
                if($request->remind_me == "next_month"){
                    $page_bookmark->reminder_me = $request->remind_me;
                    $page_bookmark->date_and_Time =  Carbon::now()->addMonth(1)->startofMonth()->toDateTimeString();
                    $notification = 'You have a reminder set for this bookmark which will be sent ' .Carbon::now()->addMonth(1)->startofMonth()->format('M j'). ', 08:00';
              }
                
                if($request->remind_me == 'none_needed'){
                    $page_bookmark->status = 2;
                    $notification = 'BookMark Successfully';
                }else{
                    $page_bookmark->status = 0;
                }
                if($request->remind_me == 'custom_date_selected' ){
                    $page_bookmark->date_and_Time = Carbon::now()->toDateTimeString();
                    $notification = 'You have a reminder set for this bookmark which will be sent ' .Carbon::now()->format('D H:i:s');

                }
                if($request->custum_date != null &&  $request->custum_time != null){
                    $page_bookmark->date_and_Time = $request->custum_date. ' '. $request->custum_time;    
                    $notification = 'You have a reminder set for this bookmark which will be sent ' . Carbon::create($request->custum_date)->format('F j Y'). ' '. $request->custum_time;
                } 
            }else{
                $page_bookmark->status = 2;
            }
        }else{
            $page_bookmark = new PageBookmark();
            if($request->bookmark_for != null){
                $page_bookmark->bookmark_for = $request->bookmark_for;
            }
            $page_bookmark->notified = $request->notifieds;
            $notification = 'BookMark Successfully';
            if(isset($request->remind_me)){
                if($request->remind_me == "tomorrow"){
                    $page_bookmark->reminder_me = $request->remind_me;
                    $page_bookmark->date_and_Time =  Carbon::now()->tomorrow()->toDateTimeString();
                    $notification = 'You have a reminder set for this bookmark which will be sent '.  Carbon::now()->tomorrow()->format('D') .', 08:00 PM';
                }
                if($request->remind_me == "monday"){
                    $page_bookmark->reminder_me = $request->remind_me;
                    $page_bookmark->date_and_Time =  Carbon::now()->endOfWeek(Carbon::MONDAY)->toDateTimeString();
                    $notification = 'You have a reminder set for this bookmark which will be sent ' .Carbon::now()->endOfWeek(Carbon::MONDAY)->format('D j'). ', 08:00';
                }
                if($request->remind_me == "next_month"){
                    $page_bookmark->reminder_me = $request->remind_me;
                    $page_bookmark->date_and_Time =  Carbon::now()->addMonth(1)->startofMonth()->toDateTimeString();
                    $notification = 'You have a reminder set for this bookmark which will be sent ' .Carbon::now()->addMonth(1)->startofMonth()->format('M j'). ', 08:00';
              }
                
                if($request->remind_me == 'none_needed'){
                    $page_bookmark->status = 2;
                    $notification = 'BookMark Successfully';
                }else{
                    $page_bookmark->status = 0;
                }
                if($request->remind_me == 'custom_date_selected' ){
                    $page_bookmark->date_and_Time = Carbon::now()->toDateTimeString();
                    $notification = 'You have a reminder set for this bookmark which will be sent ' .Carbon::now()->format('D H:i:s');

                }
                if($request->custum_date != null &&  $request->custum_time != null){
                    $page_bookmark->date_and_Time = $request->custum_date. ' '. $request->custum_time;    
                    $notification = 'You have a reminder set for this bookmark which will be sent ' . Carbon::create($request->custum_date)->format('F j Y'). ' '. $request->custum_time;
                } 
            }else{
                $page_bookmark->status = 2;
            }

            $page_bookmark->user_id = auth()->user()->id;
            $page_bookmark->page_id = $request->page_id;
        }
        $page_bookmark->save();
        return response()->json(['success'=>'Successfully', 'notif' => $notification , 'page_bookmark' => $page_bookmark]);
        
    }

    function delete_bookmark($bookmark_id){
        
        $book_mark = PageBookmark::find($bookmark_id);
        if($book_mark){
            $book_mark->delete();
        }  
        
        
        return response()->json([
            'message' => 'success'
        ]);

    } 

    function create_comment_page($page_id, Request $request){
        
   
        $page_reply = new PageReply();
        $page_reply->user_id = Auth::user()->id;
        $page_reply->page_id = $page_id;
        $page_reply->reply = $request->comment;
        $page_reply->is_active = 0;
        $page_reply->save();



        // $html = '
        // <div class="boxed5">
        //     <div class="boxerd-img">
        //         <img src="'.$last_comment->getCommentedByUserInfo->d_picture.'" alt="">
        //         <h5>'.$last_comment->getCommentedByUserInfo->name.'</h5>
        //     </div>
        //     <p class="para">'.$last_comment->reply.'</p>
        //     <div class="row align-items-center">
        //         <div class="col-md-6">
        //             <div class="com">
        //                 <a href="javascript:;">
        //                      <img src="'.asset('user_asset/img/card18.png').'" alt=""><span>PM User</span>
        //                 </a> 
        //                 <a href="javascript:;" class="comment_like" data-replyid="'.$last_comment->id.'">
        //                     <svg class="svg-inline--fa fa-thumbs-up fa-lg" style="color: #7a7a7a;" aria-hidden="true"
        //                         focusable="false" data-prefix="far" data-icon="thumbs-up" role="img"
        //                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
        //                         <path fill="currentColor"
        //                             d="M323.8 34.8c-38.2-10.9-78.1 11.2-89 49.4l-5.7 20c-3.7 13-10.4 25-19.5 35l-51.3 56.4c-8.9 9.8-8.2 25 1.6 33.9s25 8.2 33.9-1.6l51.3-56.4c14.1-15.5 24.4-34 30.1-54.1l5.7-20c3.6-12.7 16.9-20.1 29.7-16.5s20.1 16.9 16.5 29.7l-5.7 20c-5.7 19.9-14.7 38.7-26.6 55.5c-5.2 7.3-5.8 16.9-1.7 24.9s12.3 13 21.3 13L448 224c8.8 0 16 7.2 16 16c0 6.8-4.3 12.7-10.4 15c-7.4 2.8-13 9-14.9 16.7s.1 15.8 5.3 21.7c2.5 2.8 4 6.5 4 10.6c0 7.8-5.6 14.3-13 15.7c-8.2 1.6-15.1 7.3-18 15.1s-1.6 16.7 3.6 23.3c2.1 2.7 3.4 6.1 3.4 9.9c0 6.7-4.2 12.6-10.2 14.9c-11.5 4.5-17.7 16.9-14.4 28.8c.4 1.3 .6 2.8 .6 4.3c0 8.8-7.2 16-16 16H286.5c-12.6 0-25-3.7-35.5-10.7l-61.7-41.1c-11-7.4-25.9-4.4-33.3 6.7s-4.4 25.9 6.7 33.3l61.7 41.1c18.4 12.3 40 18.8 62.1 18.8H384c34.7 0 62.9-27.6 64-62c14.6-11.7 24-29.7 24-50c0-4.5-.5-8.8-1.3-13c15.4-11.7 25.3-30.2 25.3-51c0-6.5-1-12.8-2.8-18.7C504.8 273.7 512 257.7 512 240c0-35.3-28.6-64-64-64l-92.3 0c4.7-10.4 8.7-21.2 11.8-32.2l5.7-20c10.9-38.2-11.2-78.1-49.4-89zM32 192c-17.7 0-32 14.3-32 32V448c0 17.7 14.3 32 32 32H96c17.7 0 32-14.3 32-32V224c0-17.7-14.3-32-32-32H32z">
        //                         </path>
        //                     </svg>
        //                     <span>0</span>
        //                 </a> 
        //             </div>
        //         </div>
        //         <div class="col-md-6 text-e">
        //             <div class="com2"><span>'.$last_comment->created_at->diffForHumans().'</span></div>
        //         </div>
        //     </div>
        // </div>'; 
        return response()->json([
            'status' => 1,
            // 'comment' => $html
        ]);

    } 


    public function win_prizes(Request $req)
    {   
        // dd($req->all());
        $all_categories = [];
        $c_name = '';
        $p_name = '';
        if(isset($req->p_id)){
            $p_name = ForumCategory::where('is_active', 1)->where('id', $req->p_id)->first()->name;
            if(isset($req->p_id) && isset($req->c_id)){
                $c_name = SubCategory::where('is_active', 1)->where('id', $req->c_id)->where('forum_category_id', $req->p_id)->first()->name;
            }
        }
        $categories = ForumCategory::where('is_active', 1)->get();
        foreach ($categories as $key => $value) {
            $all_categories[$key]['id'] =  $value->id;
            $all_categories[$key]['name'] =  $value->name;
            $all_categories[$key]['description'] =  $value->description;
            $all_categories[$key]['color'] =  $value->color;
            $all_categories[$key]['count'] =  $value->get_posts->where('is_active',1)->count();
            $all_categories[$key]['posts'] =  $value->get_posts()->orderBy('id','Desc')->where('is_active',1)->take(5)->get();
            $sub_cats = SubCategory::where('forum_category_id',$value->id)->get();
            foreach ($sub_cats as $k => $val) {
                $all_categories[$key][$k]['child_id'] = $val->id;
                $all_categories[$key][$k]['child_name'] = $val->name ;
                $all_categories[$key][$k]['child_color'] = $val->color; 
                $all_categories[$key][$k]['child_description'] = $val->description; 
            } 
        }
        $posts = Post::where('is_active',1)->orderBy('id','Desc');
        if(isset($req->p_id)){
            $posts = $posts->where('category_id',$req->p_id);
        }
        if(isset($req->c_id)){
            $posts = $posts->where('sub_category_id',$req->c_id);
        }
        $posts = $posts->paginate(15 , ['*'], 'latest_page' );
        $posts->setPageName('latest_page');

        
        $top_posts = Post::where('is_active',1);
        if(isset($req->p_id)){
            $top_posts = $top_posts->where('category_id',$req->p_id);
        }
        if(isset($req->c_id)){
            $top_posts = $top_posts->where('sub_category_id',$req->c_id);
        }
        $top_posts = $top_posts->withCount('getPostViews as post_views_count')->orderBy('post_views_count', 'desc')->paginate(15 , ['*'],'top_page');
        $top_posts->setPageName('top_page');

        $featureds = Post::where('is_active',1)->Where('is_featured',1);
        if(isset($req->p_id)){
            $featureds = $featureds->where('category_id',$req->p_id);
        }
        if(isset($req->c_id)){
            $featureds = $featureds->where('sub_category_id',$req->c_id);
        }
        $featureds = $featureds->paginate(15 , ['*'],'featured_page');
        $featureds->setPageName('featured_page');


        if(auth()->check()){
            $unviewed_posts = Post::where('is_active',1);
            if(isset($req->p_id)){
                $unviewed_posts = $unviewed_posts->where('category_id',$req->p_id);
            }
            if(isset($req->c_id)){
                $unviewed_posts = $unviewed_posts->where('sub_category_id',$req->c_id);
            }

            $unviewed_posts = $unviewed_posts->whereDoesntHave('getPostViews', function ($query) {
                $query->where('user_id', auth()->user()->id);
            })->paginate(15 , ['*'],'new_topic');
        }
        if(auth()->check()){
            $my_post = Post::where('is_active',1);
            if(isset($req->p_id)){
                $my_post = $my_post->where('category_id',$req->p_id);
            }
            if(isset($req->c_id)){
                $my_post = $my_post->where('sub_category_id',$req->c_id);
            }

            $my_post = $my_post->wherehas('getPostReplies', function ($query) {
                $query->where('user_id', auth()->user()->id)->where('is_active',1);
            })->paginate(15 , ['*'],'my_post');
          
        }

        return view('User.win_prizes' , get_defined_vars());
    }

}
