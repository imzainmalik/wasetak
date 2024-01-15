<?php

namespace App\Http\Controllers;

use App\Models\Bookmark;
use App\Models\FlagedPost;
use App\Models\LikedReply;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\PostView;
use App\Models\PostLike;
use App\Models\PostReply;
use Auth;
use App\Models\SubCategory;
class PostController extends Controller
{
    public function post_detail($id){
        $post = Post::find($id);
        if(!$post){
            return abort(404);
        }
        $like_check = null;
        $bookmark = null;
        $comment_like_check = null;
        if(auth()->check()){
            $post_view = PostView::updateOrCreate([
                'user_id'   => auth()->user()->id,
                'post_id'     => $post->id,
            ]);
            $like_check = PostLike::where('user_id' , auth()->user()->id)->where('post_id', $post->id)->first();
            $bookmark = Bookmark::where('user_id' , auth()->user()->id)->where('post_id', $post->id)->first();
          
        }

        // @dd($comment_like_check);
        return view('User.post_detail', get_defined_vars());
    }




    public function user_like_post($post_id){

        $like = PostLike::where('user_id', auth()->user()->id)->where('post_id', $post_id)->first();
        if($like){
            $like->delete();
            return response()->json(['status'=>0]);
        }else{
            $like = new PostLike();
             $like->user_id = auth()->user()->id;
             $like->post_id = $post_id;
             $like->save();
         }
        
        return response()->json(['status'=>1]);
    }

    public function user_flag_post(Request $request){
        
        $request->validate([
            'reason' => 'required',
        ]);

        $flag = new FlagedPost();
        $flag->user_id = auth()->user()->id;
        $flag->post_id = $request->post_id;
        $flag->reason = $request->reason;
        $flag->save();

        return response()->json(['success'=>'Successfully']);
        
    }


    public function user_like_post_comment($reply_id){
        $reply_like = LikedReply::where('user_id', auth()->user()->id)->where('reply_id', $reply_id)->first();
        if($reply_like){
            $reply_like->delete();
            return response()->json(['status'=>0]);
        }else{
             $reply_like = new LikedReply();
             $reply_like->user_id = auth()->user()->id;
             $reply_like->reply_id = $reply_id;
             $reply_like->save();
         }
        
        return response()->json(['status'=>1]);
    }
    
    public function user_bookmark_post($post_id){

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
        $post_reply = new PostReply;
        $post_reply->user_id = Auth::user()->id;
        $post_reply->post_id = $post_id;
        $post_reply->reply = $request->comment;
        $post_reply->save();

        $last_comment = PostReply::find($post_reply->id);

        $html = '
        <div class="boxed5">
            <div class="boxerd-img">
                <img src="'.$last_comment->getCommentedByUserInfo->d_picture.'" alt="">
                <h5>'.$last_comment->getCommentedByUserInfo->name.'</h5>
            </div>
            <p class="para">'.$last_comment->reply.'</p>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="com">
                        <a href="javascript:;">
                             <img src="'.asset('user_asset/img/card18.png').'" alt=""><span>PM User</span>
                        </a> 
                        <a href="javascript:;" class="comment_like" data-replyid="'.$last_comment->id.'">
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
        
        $sub_caategory = SubCategory::find($request->category); 
        $post = new Post;
        $post->user_id = Auth::user()->id;
        $post->category_id = $sub_caategory->forum_category_id;
        $post->sub_category_id = $sub_caategory->id;
        $post->title = $request->title; 
        $post->description = $request->post_describe;
        $post->price = $request->price;
        $post->handle_url = $request->handle_url;
        $post->post_type = 0;
        $post->save();

        return redirect()->back()->with('success','Post is under review, it will be published when Wasetak team approve it.');
    }


    
}
