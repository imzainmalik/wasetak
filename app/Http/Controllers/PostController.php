<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\PostView;

class PostController extends Controller
{
    public function post_detail($id){
        $post = Post::find($id);
        if(!$post){
            return abort(404);
        }

        if(auth()->check()){
            $post_view = PostView::updateOrCreate([
                'user_id'   => auth()->user()->id,
                'post_id'     => $post->id,
            ]);
            
        }
        return view('User.post_detail', get_defined_vars());
    }

    
}
