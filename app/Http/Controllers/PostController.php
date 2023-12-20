<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;


class PostController extends Controller
{
    public function post_detail($id){
        $post = Post::find($id);
        if(!$post){
            return abort(404);
        }
        return view('User.post_detail', get_defined_vars());
    }

    
}
