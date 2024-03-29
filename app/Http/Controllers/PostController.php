<?php

namespace App\Http\Controllers;

use App\Models\Bid;
use App\Models\Bookmark;
use App\Models\FlagedPost;
use App\Models\LikedReply;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\PostView;
use App\Models\PostLike;
use App\Models\PostReply;
use App\Models\PushNotification;
use Auth;
use App\Models\SubCategory;
use App\Models\UserNotifiedAllow;
use App\Models\ForumCategory;
use App\Models\ReadTime;
class PostController extends Controller
{
    
    public function updates_readtimes(Request $request){
        $check_readtime_already_exist = ReadTime::where('user_id',auth()->user()->id)->first();
        
        if($check_readtime_already_exist == null){
             $ReadTime = new ReadTime;
            $ReadTime->user_id = auth()->user()->id;
            $ReadTime->post_id = $request->post_id;
            $ReadTime->time_minutes = $request->read_time;
            $ReadTime->save();
        }else{
            ReadTime::where('user_id',auth()->user()->id)->update(array(
                'user_id' => auth()->user()->id,
                'post_id' => $request->post_id,
                'time_minutes' => $request->read_time,
            ));
        }
    }
    public function post_detail($id){
        $post = Post::with(['getPostReplies' => function($query) {
            $query->orderBy('id', 'desc');
        }])->where('id',$id)->where('status',1)->first();
        
        if(!$post){
            return abort(404);
        }
        $like_check = null;
        $bookmark = null;
        $comment_like_check = null;
        $user_notified = null;
        if(auth()->check()){
            $user_notified = UserNotifiedAllow::where('user_id',auth()->user()->id)->where('type',1)->where('type_id',$post->id)->first();
              
            $post_view = PostView::updateOrCreate([
                'user_id' => auth()->user()->id,
                'post_id' => $post->id,
            ]);
            $like_check = PostLike::where('user_id', auth()->user()->id)->where('post_id', $post->id)->first();
            $bookmark = Bookmark::where('user_id', auth()->user()->id)->where('post_id', $post->id)->first(); 
        }
        // $related_topics = Post::whereIn('title','LIKE','%'..'%')->get();
        // @dd($comment_like_check);
        return view('User.post_detail', get_defined_vars());
    }
    
    public function user_like_post($post_id){
        if(!Auth::check()){
            return redirect()->back()->with('error','Login Required');
        }
        $like = PostLike::where('user_id', auth()->user()->id)->where('post_id', $post_id)->first();
        $post = Post::find($post_id);
        $send_notification = [];
        if($like){
            $old_notified = PushNotification::where('user_id_from', auth()->user()->id)->where('type', 1)->where('type_id',$post->id)->first();
            if($old_notified){
                   $old_notified->delete();
                }
           $like->delete();
           return response()->json(['status'=> 0]);
        
        }else{
            $like = new PostLike();
            $like->user_id = auth()->user()->id;
            $like->post_id = $post_id;
            $like->save();
           
            if($post->getUserInfo->notification_status == 1){
                $send_notification['user_id'] = [$post->getUserInfo->id];
                $send_notification['title'] = auth()->user()->name;
                $send_notification['body'] = "Liked your ". $post->title;
                $send_notification['url'] = route('user.post_detail',[$post_id]);
                $send_notification['user_id_from'] = auth()->user()->id;
                $send_notification['type'] = 1;
                $send_notification['type_id'] = $post->id; 
                // PushNotification::create([
                //     'title' => $send_notification['title'],
                //     'body' => $send_notification['body'],
                //     'user_id_from' => auth()->user()->id,
                //     'user_id_to' => $post->getUserInfo->id,
                //     'url' => $send_notification['url'],
                //     'type' => 1,
                //     'type_id' => $post->id,
                // ]);
                like_notification($send_notification);
            }
         }
        return response()->json(['status'=>1]);
    }

    public function user_flag_post(Request $request){
        if(!Auth::check()){
            return redirect()->back()->with('error','Login Required');
        }
        $request->validate([
            'reason' => 'required',
        ]);

        $flag = new FlagedPost();
        $flag->user_id = auth()->user()->id;
        $flag->post_id = $request->post_id;
        $flag->reason = $request->reason;
        $flag->save();

        return response()->json([
            'success'=>'Successfully'
        ]);
        
    } 
    public function user_like_post_comment($reply_id){
    
        if(!Auth::check()){
            return redirect()->back()->with('error','Login Required');
        }
        $reply_like = LikedReply::where('user_id', auth()->user()->id)->where('reply_id', $reply_id)->first();

        $reply = PostReply::find($reply_id);
        // $post = Post::find($post_id);
        $send_notification = [];
        if($reply_like){
             $old_notifieds = PushNotification::where('user_id_from', auth()->user()->id)->where('type', 3)->where('type_id',$reply->id)->get();
            if(count($old_notifieds) > 0){
                    foreach($old_notifieds as $old_notified)
                    $old_notified->delete();
                }
            $reply_like->delete();
            return response()->json([
                'status'=> 0
            ]); 
        }else{
             $reply_like = new LikedReply();
             $reply_like->user_id = auth()->user()->id;
             $reply_like->reply_id = $reply_id;
             $reply_like->save();
             $p = Post::find($reply->post_id);
             if($p->getUserInfo->notification_status == 1){
                $send_notification['user_id'] = [$reply->user_id];
                $send_notification['title'] = auth()->user()->name;
                $send_notification['body'] = "Liked your Comment - ". $reply->reply;
                $send_notification['url'] = route('user.post_detail',[$reply->post_id]);
                $send_notification['user_id_from'] = auth()->user()->id;
                $send_notification['type'] = 3;
                $send_notification['type_id'] = $reply->id;

                // PushNotification::create([
                //     'title' => $send_notification['title'],
                //     'body' => $send_notification['body'],
                //     'user_id_from' => auth()->user()->id,
                //     'user_id_to' => $reply->getCommentedByUserInfo->id,
                //     'url' => $send_notification['url'],
                //     'type' => 3,
                //     'type_id' => $reply->id,
                // ]); 
                like_notification($send_notification);
            }
         }
        
        return response()->json(['status'=>1]);
    }
    
    public function user_bookmark_post($post_id){
        if(!Auth::check()){
            return redirect()->back()->with('error','Login Required');
        }
        $bookmark = Bookmark::where('user_id', auth()->user()->id)->where('post_id', $post_id)->first();
        if($bookmark){
            $bookmark->delete();
            return response()->json(['status'=>0]);
        }else{
             $bookmark = new Bookmark();
             $bookmark->user_id = auth()->user()->id;
             $bookmark->post_id = $post_id;
             $bookmark->save();
         }
        
        return response()->json(['status'=>1]);
    }

    public function create_comment(Request $request, $post_id){
        // dd($request->all());
        if(!Auth::check()){
            return redirect()->back()->with('error','Login Required');
        }
        $post_reply = new PostReply;
        $post_reply->user_id = Auth::user()->id;
        $post_reply->post_id = $post_id;
        $post_reply->reply = $request->comment;
        $post_reply->save();
        
        $comment = $request->comment;;
        preg_match_all('/@(\w+)/', $comment, $matches);
        $mentionedUsers = $matches[1];
        
        $post = Post::find($post_id); 
        // if($request->status == 1){
            foreach ($mentionedUsers as $user) {
                $userid = User::where('username', $user)->first();
                if ($userid && $userid->notification_status == 1) {
                    $user_notified = UserNotifiedAllow::where('user_id',$userid->id)->where('type',1)->where('type_id',$post->id)->first();
                    if($user_notified && $user_notified->notification_type == 4){
                    }else{
                        $send_notification['user_id'] = [$userid->id];
                        $send_notification['title'] = $post_reply->getCommentedByUserInfo ? $post_reply->getCommentedByUserInfo->name : '';
                        $send_notification['body'] = "Mention on his Post - @". $userid->username;
                        $send_notification['url'] = route('user.post_detail',[$post_id]);
                        $send_notification['user_id_from'] = $post_reply->user_id;
                        $send_notification['type'] = 2;
                        $send_notification['type_id'] = $post_reply->id;
                        like_notification($send_notification);
                    }
                }
            }
            $user_notified_watching = UserNotifiedAllow::where('notification_type', 1)->where('type',1)->where('type_id',$post->id)->get()
            ->pluck('user_id')->toArray();
        
            if(count($user_notified_watching) > 0){
                $send_notification['user_id'] = $user_notified_watching;
                $send_notification['title'] = $post_reply->getPosts ? $post_reply->getPosts->title : '';
                $send_notification['body'] = "SomeOne Reply to this Post";
                $send_notification['url'] = route('user.post_detail',[$post_id]);
                $send_notification['user_id_from'] = $post_reply->user_id;
                $send_notification['type'] = 4;
                $send_notification['type_id'] = $post_reply->id;
                like_notification($send_notification);
            } 
        // }else{
        //     foreach ($mentionedUsers as $user) {
        //         $userid = User::where('username', $user)->first();
        //         if ($userid) {
        //             $notifications = PushNotification::where('user_id_to', $userid->id)
        //                                                 ->where('user_id_from', $page_reply->user_id)
        //                                                 ->where('type',4)->where('type_id',$page_reply->id)
        //                                                 ->get();
        //             if(count($notifications) > 0){
        //                 foreach($notifications as $noti){
        //                     $noti->delete(); 
        //                 }
        //             }
        //         }
        //     }
        // }
 
            //TEst
            $user_notified_post = UserNotifiedAllow::where('user_id',$post->getUserInfo->id)->where('notification_type', 4)->where('type',1)->where('type_id',$post->id)->first();
            
        if($post->getUserInfo->notification_status == 1  && isset($user_notified_post->notification_type) != 4){
                // if($user_notified_post->notification_type != 4 ){
                    $send_notification['user_id'] = [$post->getUserInfo->id];
                    $send_notification['title'] = auth()->user()->name;
                    $send_notification['body'] = "Commented on his Post - ". $request->comment;
                    $send_notification['url'] = route('user.post_detail',[$post_id]);
                    $send_notification['user_id_from'] = auth()->user()->id;
                    $send_notification['type'] = 2;
                    $send_notification['type_id'] = $post_reply->id;
                    like_notification($send_notification);
                // }
        }
        $last_comment = PostReply::find($post_reply->id); 

        $d_picture = $last_comment->getCommentedByUserInfo->d_picture ?  asset($last_comment->getCommentedByUserInfo->d_picture) : asset("user_asset/img/avatar.png");

        $html = '
        <div class="boxed5">
            <div class="boxerd-img">
                <img src="'. $d_picture .'" alt="">
                  <a href=" '. route("user.user_profile",$last_comment->getCommentedByUserInfo->username) . '"> <h5>'.$last_comment->getCommentedByUserInfo->name.'</h5></a>
            </div>
            <p class="para">'.$last_comment->reply.'</p>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="com">
                        <a href="javascript:;">
                             <img src="'.asset('user_asset/img/card18.png').'" alt=""><span>PM User</span>
                        </a> 
                        <a href="javascript:;" class="comment_like notranslate" data-replyid="'.$last_comment->id.'">
                            <svg class="svg-inline--fa fa-thumbs-up fa-lg" style="color: #7a7a7a;" aria-hidden="true"
                                focusable="false" data-prefix="far" data-icon="thumbs-up" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M323.8 34.8c-38.2-10.9-78.1 11.2-89 49.4l-5.7 20c-3.7 13-10.4 25-19.5 35l-51.3 56.4c-8.9 9.8-8.2 25 1.6 33.9s25 8.2 33.9-1.6l51.3-56.4c14.1-15.5 24.4-34 30.1-54.1l5.7-20c3.6-12.7 16.9-20.1 29.7-16.5s20.1 16.9 16.5 29.7l-5.7 20c-5.7 19.9-14.7 38.7-26.6 55.5c-5.2 7.3-5.8 16.9-1.7 24.9s12.3 13 21.3 13L448 224c8.8 0 16 7.2 16 16c0 6.8-4.3 12.7-10.4 15c-7.4 2.8-13 9-14.9 16.7s.1 15.8 5.3 21.7c2.5 2.8 4 6.5 4 10.6c0 7.8-5.6 14.3-13 15.7c-8.2 1.6-15.1 7.3-18 15.1s-1.6 16.7 3.6 23.3c2.1 2.7 3.4 6.1 3.4 9.9c0 6.7-4.2 12.6-10.2 14.9c-11.5 4.5-17.7 16.9-14.4 28.8c.4 1.3 .6 2.8 .6 4.3c0 8.8-7.2 16-16 16H286.5c-12.6 0-25-3.7-35.5-10.7l-61.7-41.1c-11-7.4-25.9-4.4-33.3 6.7s-4.4 25.9 6.7 33.3l61.7 41.1c18.4 12.3 40 18.8 62.1 18.8H384c34.7 0 62.9-27.6 64-62c14.6-11.7 24-29.7 24-50c0-4.5-.5-8.8-1.3-13c15.4-11.7 25.3-30.2 25.3-51c0-6.5-1-12.8-2.8-18.7C504.8 273.7 512 257.7 512 240c0-35.3-28.6-64-64-64l-92.3 0c4.7-10.4 8.7-21.2 11.8-32.2l5.7-20c10.9-38.2-11.2-78.1-49.4-89zM32 192c-17.7 0-32 14.3-32 32V448c0 17.7 14.3 32 32 32H96c17.7 0 32-14.3 32-32V224c0-17.7-14.3-32-32-32H32z">
                                </path>
                            </svg>
                            <span>0</span>
                        </a> 
                    </div>
                </div>
                <div class="col-md-6 text-e">
                    <div class="com2"><span>'.$last_comment->created_at->diffForHumans().'</span></div>
                </div>
            </div>
        </div>'; 
        return response()->json([
            'message' => 1,
            'comment' => $html
        ]);
    }


    public function create_post(Request $request){

       
        if(!Auth::check()){
            return redirect()->back()->with('error','Login Required');
        }
        
        $request->validate([
            'category' => 'required'
        ]);
        
        $post = new Post;
        if(substr($request->category, 0 , 2 ) == 'p_'){
            // dd('if',$request->all());
            $category = ForumCategory::find(substr($request->category, 2)); 
            $post->category_id = $category->id;
            $post->sub_category_id = null;
        }
        if(substr($request->category, 0 , 2 ) == 'c_'){

            $sub_caategory = SubCategory::find(substr($request->category, 2)); 
            $post->category_id = $sub_caategory->forum_category_id;
            $post->sub_category_id = $sub_caategory->id;
        }

   
        $post->user_id = Auth::user()->id;

        $post->title = $request->title; 
        $post->description = $request->post_describe;
        $post->price = $request->price;
        $post->handle_url = $request->handle_url;
        $post->post_type = $request->post_type;

        if($request->has('post_type')){
            $post->bid_start_date = $request->bid_start_date;
            $post->bid_end_date = $request->bid_end_date;
        }
      
        $post->save();

        // if($request->has('post_type')){
        //     $bids = new Bid;
        //     $bids->user_id = Auth::user()->id;
        //     $bids->post_id = $post->id;
        //     $bids->bid_amount = $request->price;

        // }

        return redirect()->back()->with('Success','Post is under review, it will be published when Wasetak team approve it.');
    } 

    public function place_bid(Request $request, $post_id){
        $get_bids = Bid::where('post_id', $post_id)->orderBy('bid_amount','desc')->first();
            $postDetails = Post::find($post_id);
               
            if($get_bids != null){
                 if($request->bid_price <= $get_bids->bid_amount){
                    // dd($get_bids);
                    return redirect()->back()->with('error','New bid can\'t be Equal or Less than Older Bids');
                 }   
                }

                if($request->bid_price <= $postDetails->price){
                     return redirect()->back()->with('error','New bid can\'t be Equal or Less than from Actual Price');
                } 
                // dd('sd');
            $bids = new Bid;
            $bids->user_id = Auth::user()->id;
            $bids->post_id = $post_id;
            $bids->bid_amount = $request->bid_price;
            $bids->save();
            return redirect()->back()->with('Success','Bid has been placed');
    }
}
