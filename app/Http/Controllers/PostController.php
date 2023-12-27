<?php

namespace App\Http\Controllers;

use App\Models\Bookmark;
use App\Models\LikedReply;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\PostView;
use App\Models\PostLike;
use App\Models\PostReply;

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


    public function user_like_post_comment($reply_id){

        $reply_like = LikedReply::where('user_id', auth()->user()->id)->where('reply_id', $reply_id)->first();
        if($reply_like){
            $reply_like->delete();
            return response()->json(['status'=>0]);
        }else{
             $reply_like = new likedReply();
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

    
}
