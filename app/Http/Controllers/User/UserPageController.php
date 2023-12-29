<?php

namespace App\Http\Controllers\User;
use App\Models\Post;
use App\Http\Controllers\Controller;
use App\Models\AdminPage;

class UserPageController extends Controller
{
    public function userPage($slug)
    {   

        $page = AdminPage::where('slug',$slug)->first();
        if(!$page){
            abort(403);
        }

        return view('User.pages' , get_defined_vars());
    }

}
