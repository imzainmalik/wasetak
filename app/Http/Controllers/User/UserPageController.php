<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\Models\AdminPage;
use App\Models\FlagedPage;
use App\Models\PageLike;
use Egulias\EmailValidator\Result\Reason\Reason;
use Illuminate\Http\Request;

class UserPageController extends Controller
{
    public function userPage($slug)
    {   

        $page = AdminPage::where('is_active',1)->where('slug',$slug)->first();
        $like_check = null;
        if(auth()->check()){
            $like_check = PageLike::where('user_id' , auth()->user()->id)->where('page_id', $page->id)->first();
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

    public function user_bookmark_page(Request $request){


        dd($request->all());
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
}
