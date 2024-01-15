<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\AdminPage;
use App\Models\FAQ;
use App\Models\FlagedPage;
use App\Models\PageBookmark;
use App\Models\PageLike;
use App\Models\Post;
use App\Models\PostLike;
use App\Models\User;
use Carbon\Carbon;
use Egulias\EmailValidator\Result\Reason\Reason;
use Illuminate\Http\Request;

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
}
