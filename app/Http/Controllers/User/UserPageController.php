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
use App\Models\UserNotifiedAllow;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;
use Egulias\EmailValidator\Result\Reason\Reason;
use League\CommonMark\Extension\Mention\Mention as MentionMention;
use League\CommonMark\Extension\Mention\MentionParser;
use Mention\Mention;

use function PHPSTORM_META\type;

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
        $user_notified = null;
        if(auth()->check()){
            $user_notified = UserNotifiedAllow::where('user_id',auth()->user()->id)->where('type',0)->where('type_id',$page->id)->first();
          
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
        
        $request->validate([
            'comment' => 'required',
        ]);

      

        $page_reply = new PageReply();
        $page_reply->user_id = Auth::user()->id;
        $page_reply->page_id = $page_id;
        $page_reply->reply = $request->comment;
        $page_reply->is_active = 0;
        $page_reply->save();


        
        
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
