<?php

namespace App\Http\Controllers\User;

use Auth;
use Hash;
use Mail; 
use Carbon\Carbon;
use App\Models\Post;
use App\Models\User; 
use App\Models\Follow;
use App\Models\Rating;
use App\Models\Bookmark;
use App\Models\PostLike;
use App\Mail\VerifyEmail;
use App\Models\DaysVisit;
use App\Models\PostReply;
use App\Models\PostViews;

use App\Models\LikedReply;
use App\Models\SubCategory;
use App\Models\UserDetails;
use Illuminate\Support\Str;

use App\Mail\TFAVerifyEmail;
use Illuminate\Http\Request;
use App\Models\ForumCategory;
use App\Models\PasswordReset;
use App\Mail\LoginWithUserName;
use App\Mail\ResetPasswordMail;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;
use App\Models\CheckoutTicket;
use App\Models\TwoFactorAuthentication;
use Barryvdh\DomPDF\Facade as PDF;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use App\Jobs\UserInfoCsvJob;
use App\Models\Subscribe;
use App\Models\PushNotification;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(Request $req)
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


        // $new = Post::where('is_active', 1)
        // ->withCount('getPostReplies as getPostReplies_count')
        // ->orderBy('getPostReplies_count', 'desc')
        // ->having('getPostReplies_count',  '!=' , auth()->user()->id)
        // ->get();
        // dd($new);

        return view('User.index' , get_defined_vars());
    }

    public function subscribe(Request $request){
        $check_already_exist = Subscribe::where('email',$request->subs_email)->first();
        if($check_already_exist == NULL){
            $subscribe = new Subscribe();
            $subscribe->email = $request->subs_email;
            $subscribe->save();
            return response()->json([
                'code' => 200,
                'message' => 'success'
            ]);
        }else{
            return response()->json([
                'code' => 403,
                'message' => 'This email is already exist in our subscriber list'
            ]);
        }
    }

    public function register(Request $request)
    {
        $user = $this->user;
        $user->name = $request->name;
        // $user->first_name = $request->first_name;
        // $user->last_name = $request->last_name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->verification_token = Str::random(60);
        $user->save();
 
            $DaysVisit = new DaysVisit;
            $DaysVisit->user_id = $user->id;
            $DaysVisit->days = 1;
            $DaysVisit->save();
 

        Mail::to($request->email)->send(new VerifyEmail($user));
        $data = $user->id;
        return response()->json([
            'status' => true,
            'msg' => 'Register successfully. Please check your email to verify your account',
            'token' =>$user->verification_token 
        ]);
        // Auth::loginUsingId($data);
        // if(Auth::check() == true){
        //     return true;
        // }
    } 

    public function search_user(Request $request){
       
        $remove_at = str_replace('@','',$request->name);
        $exlpode = explode(' ',$remove_at);
        $get_users = User::whereIn(DB::raw('LOWER(name)'), array_map('strtolower', $exlpode))
        ->get();
        // dd($get_users);
        return response()->json([
            'code' => 200,
            'users' => $get_users
        ]);
    }
    
    public function checkMail(Request $request)
    {
        $email = $this->user::where('email',$request->email)->first();
        if($email){
            return response()->json(['valid' => false]);
        }else{
            return response()->json(['valid' => true]);
        }
    }

    public function checkUsername(Request $request)
    {
        $username = $this->user::where('username',$request->username)->first();
        if($username){
            return response()->json(['valid' => false]);
        }
        return response()->json(['valid' => true]);
    }

    public function login(Request $request)
    {
        $input = $request->all();
        $fieldType = filter_var($request->email_or_username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        if(Auth::attempt(array($fieldType => $input['email_or_username'], 'password' => $input['loginPassword'])))
        { 

                $DaysVisit = new DaysVisit;
                $DaysVisit->user_id = Auth::user()->id;
                $DaysVisit->days = 1;
                $DaysVisit->save(); 

            if(empty(Auth::user()->email_verified_at)){
                Auth::logout();
                return response()->json([
                    'status' => false,
                    'message' => 'Your Account is not verify, Please Check your email to verify account',
                    'is_verify'=> false
                ]);
            }
            return true;
        }
        return false;
    }

    public function checkUserExist(Request $request){
        $input = $request->all();
        $findUserName = $this->user::where('username',$input['email_or_username'])->first();
        if(empty($findUserName)){
            return response()->json(['valid' => false]);
        }
        return response()->json(['valid' => true]);
    }

    public function profile(Request $request)
    {
        if(!Auth::check()){
            return redirect()->back()->with('error','Login required');
        }
            $data = Auth::user();
            $last_post_created = Post::where('user_id',Auth::user()->id)->latest()->first();
            $visited_days = DaysVisit::where('user_id',Auth::user()->id)->first();
            $topic_created = PostReply::where('user_id',Auth::user()->id)->where('is_active',1)->get();
            $post_created = Post::where('user_id',Auth::user()->id)->where('is_active', 1)->get(); 
            $likes_given = PostLike::where('user_id',Auth::user()->id)->get();
            $bookmarks = Bookmark::where('user_id',Auth::user()->id)->get(); 
            $my_posts = Post::where('user_id',Auth::user()->id)->get();

            if($my_posts->count() > 0){
                foreach($my_posts as $my_post){
                    $like_received = PostLike::where('post_id', $my_post->id)->count();
                }
            }else{
                $like_received = 0;
            }

            if($my_posts->count() > 0){
                foreach($my_posts as $my_post){
                    $my_posts_views = PostViews::where('post_id', $my_post->id)->count();
                }
            }else{
                $my_posts_views = 0;
            }
            $my_top_replies = LikedReply::where('user_id', Auth::user()->id)->get();
            if($my_top_replies->count() > 50 ){
                foreach($my_top_replies as $my_top_reply){
                    $get_top_replies = PostReply::where('id',$my_top_reply->reply_id)->limit(8)->get();
                 }
            }else{
                $get_top_replies = NULL;
                $my_top_replies = 0;
            }

             $my_top_topics = Post::where('is_active', 1)
             ->withCount('getPostReplies as getPostReplie_count')
             ->having('getPostReplie_count', '>', 20)
             ->orderBy('getPostReplie_count', 'desc')
             ->get();  
             $my_posts_ids = Post::where('user_id', Auth::user()->id)->pluck('id');
             if($my_posts_ids->count() > 0){
                 $my_post_likes = PostLike::whereIn('post_id',$my_posts_ids)
                 ->withCount('likedByUserDetails as likedByUserDetails_count')
                 ->having('likedByUserDetails_count', '>', 5)->orderBy('likedByUserDetails_count', 'desc')->get();
             }
             $most_liked_by = User::has('likes', '>=', 10)
             ->with(['likes', 'posts','replies'])
             ->get();
             //dd($most_liked_by);
             $most_replies_to = PostReply::select('post_id')
                ->selectRaw('COUNT(post_id) as post_count')
                ->where('user_id', Auth::user()->id)
                ->groupBy('post_id')
                ->having('post_count', '>=', 10)
                ->orderByDesc('post_count')
                ->pluck('post_id'); 
            //  dd($most_replies_to);
                // dd($most_liked_by);  
            $top_categories = ForumCategory::withCount(['get_posts as posts_count' => function($query){ 
                $query->where('user_id',Auth::user()->id);
            }])->having('posts_count', '>=', 10)
                ->orderByDesc('posts_count')
                ->get(); 
            $userId = Auth::user()->id; 
            $all_activity = Post::whereHas('likes', function ($query) use ($userId) {
                $query->where('user_id', $userId);
            })
            ->orWhereHas('replies', function ($query) use ($userId) {
                $query->where('user_id', $userId);
            })
            ->orWhereHas('getUserInfo', function ($query) use ($userId) {
                $query->where('user_id', $userId);
            }) 
            ->Where('user_id', $userId)
            ->orderBy('id','DESC')
            ->take(5)
            ->get();
            // dd($all_activity); 
            $get_all_where_i_replied = Post::whereHas('replies', function ($query) use ($userId) {
                $query->where('user_id', $userId);
            })->get();
            
            $get_all_my_viewed_posts = Post::whereHas('getPostViews', function ($query) use ($userId) {
                $query->where('user_id', $userId);
            })->get();

            $get_all_my_liked_posts = Post::whereHas('likes', function ($query) use ($userId) {
                $query->where('user_id', $userId);
            })->get();
            // dd($get_all_where_i_replied);
            $my_bookmark_posts = Bookmark::with('bookmarksPostDetails')->where('user_id',Auth::user()->id)->get();

            $following_list = Follow::with('followByUserInfo')->where('follow_by', Auth::user()->id)->get(); 

            $followers = Follow::with('followByUserInfo')->where('follow_to', Auth::user()->id)->get();

            $feedbacks = Rating::with('givenFeedBackUserInfo')->where('review_to',Auth::user()->id)->where('is_active', 1)->get();
            // dd($feedbacks);
            $user_details = UserDetails::where('user_id',Auth::user()->id)->first();
            // dd($user_details);
            $tickets = CheckoutTicket::where('user_id',Auth::user()->id)->get();
            // dd($tickets);
            $notifications = PushNotification::where('user_id_to',Auth::user()->id)->get(); 
            if($request->has('download_pdf')){
                ini_set('max_execution_time', 500); 
                // return view('User.pdf.user_info', get_defined_vars());
                $pdf = FacadePdf::loadView('User.pdf.user_info',get_defined_vars()); 
                // dd(public_path('user_assets/pdf/sam'.rand().'ple.pdf'));
                $pdf->save(public_path('user_asset/pdf/sam'.rand().'ple.pdf'));
                //  return view('User.pdf.user_info',get_defined_vars());
                return $pdf->stream('user_asset/pdf/sam'.rand().'ple.pdf');
 
            }else{
                return view('User.profile', get_defined_vars());
            }
    } 

    public function create_feedback(Request $request, $id){
        // dd($request->all());
        $rating = new Rating;
        $rating->review_to = $id;
        $rating->review_by = Auth::user()->id;
        $rating->stars = $request->rate;
        if($request->buyer == "on"){
            $rating->feedback_as = 0;
        }else{
            $rating->feedback_as = 1;
        }
        $rating->feedback = $request->feedback;
        $rating->save();
        return redirect()->back()->with('Success','Feedback has been published');
    }
    
    public function user_profile($user_name)
    {
        $data = Auth::user();
        $user = User::where('username',$user_name)->first();
        // dd($user);
        if(!$user){
            abort(404);
        }
        $last_post_created = Post::where('user_id',$user->id)->latest()->first();
        $visited_days = DaysVisit::where('user_id',$user->id)->first();
         $topic_created = PostReply::where('user_id',$user->id)->where('is_active',1)->get();
         $post_created = Post::where('user_id',$user->id)->where('is_active', 1)->get();

        $likes_given = PostLike::where('user_id',$user->id)->get();
        $bookmarks = Bookmark::where('user_id',$user->id)->get();

        $my_posts = Post::where('user_id',$user->id)->get();
            if($my_posts->count() > 0){
                foreach($my_posts as $my_post){
                    $like_received = PostLike::where('post_id', $my_post->id)->count();
                }
            }else{
                $like_received = 0;
            } 
            if($my_posts->count() > 0){
                foreach($my_posts as $my_post){
                    $my_posts_views = PostViews::where('post_id', $my_post->id)->count();
                }
            }else{
                $my_posts_views = 0;
            }
  
            $my_top_replies = LikedReply::where('user_id',$user->id)->get();
            if($my_top_replies->count() > 50 ){
                foreach($my_top_replies as $my_top_reply){
                    $get_top_replies = PostReply::where('id',$my_top_reply->reply_id)->limit(8)->get();
                 }
            }else{
                $get_top_replies = NULL;
                $my_top_replies = 0;
            } 
             $my_top_topics = Post::where('is_active',1)
             ->withCount('getPostReplies as getPostReplie_count')
             ->having('getPostReplie_count', '>', 20)
             ->orderBy('getPostReplie_count', 'desc') 
             ->get();
             $my_posts_ids = Post::where('user_id', $user->id)->pluck('id');
             if($my_posts_ids->count() > 0){
                 $my_post_likes = PostLike::whereIn('post_id',$my_posts_ids)->withCount('likedByUserDetails as likedByUserDetails_count')
                 ->having('likedByUserDetails_count', '>', 5)->orderBy('likedByUserDetails_count', 'desc')->get();
             } 
             $most_liked_by = User::has('likes', '>=', 10)
             ->with(['likes', 'posts','replies'])
             ->get();
             
            //   dd($most_liked_by);
             $most_replies_to = PostReply::select('post_id')
                ->selectRaw('COUNT(post_id) as post_count')
                ->where('user_id', $user->id)
                ->groupBy('post_id')
                ->having('post_count', '>=', 10)
                ->orderByDesc('post_count')
                ->pluck('post_id'); 
            //  dd($most_replies_to);
                // dd($most_liked_by);  
            $top_categories = ForumCategory::withCount(['get_posts as posts_count' => function($query) use ($user) { 
                $query->where('user_id',$user->id);
            }])->having('posts_count', '>=', 10)
                ->orderByDesc('posts_count')
                ->get();
            
            $userId = $user->id;
            
            $all_activity = Post::whereHas('likes', function ($query) use ($userId) {
                $query->where('user_id', $userId);
            })
            ->orWhereHas('replies', function ($query) use ($userId) {
                $query->where('user_id', $userId);
            })

            ->orWhereHas('getUserInfo', function ($query) use ($userId) {
                $query->where('user_id', $userId);
            }) 
            ->Where('user_id', $userId)
            ->orderBy('id','DESC')
            ->take(5)
            ->get();
            // dd($all_activity); 
            $get_all_where_i_replied = Post::whereHas('replies', function ($query) use ($userId) {
                $query->where('user_id', $userId);
            })->get();

            $get_all_my_viewed_posts = Post::whereHas('getPostViews', function ($query) use ($userId) {
                $query->where('user_id', $userId);
            })->get();

            $get_all_my_liked_posts = Post::whereHas('likes', function ($query) use ($userId) {
                $query->where('user_id', $userId);
            })->get();
            // dd($get_all_where_i_replied);
            $my_bookmark_posts = Bookmark::with('bookmarksPostDetails')->where('user_id',$user->id)->get();

            $following_list = Follow::with('followByUserInfo')->where('follow_by', $user->id)->get();
            
            $followers = Follow::with('followByUserInfo')->where('follow_to', $user->id)->get();
            // dd($followers);
            $feedbacks = Rating::with('givenFeedBackUserInfo')->where('review_to',$user->id)->where('is_active', 1);
            // dd($feedbacks);
            $user_details = UserDetails::where('user_id',$user->id)->first();
            // dd($user_details);
            $tickets = CheckoutTicket::where('user_id',$user->id)->get();
            // dd($tickets);
            $check_if_already_follow = Follow::where('follow_to', $user->id)->where('follow_by',Auth::user()->id)->count();
            
            return view('User.user_profile', get_defined_vars());
             
    }

    public function follow($id){
        $create_follow = new Follow;
        $create_follow->follow_to = $id;
        $create_follow->follow_by = Auth::user()->id;
        $create_follow->save();
        return response()->json([
            'code' => 200,
            'message' => 'success'
        ]);
    }

    public function unfollow($id){
        Follow::where('follow_to', $id)->where('follow_by',Auth::user()->id)->delete();
        return response()->json([
            'code' => 200,
            'message' => 'success'
        ]);
    }
    public function profile_update(Request $request){
        // dd($request->all());
        $user_details = UserDetails::where('user_id',Auth::user()->id)->first();
        if($request->hasFile('d_picture')){
            $attechment = $request->file('d_picture');
            $img_2 = time() . $attechment->getClientOriginalName();
            $attechment->move(public_path('assets/images/users'), $img_2);
        }else{
            $img_2 = $user_details->d_picture;
        }
        
        if($request->hasFile('id_card_photo')){
            $attechment = $request->file('id_card_photo');
            $id_card_photo = time() . $attechment->getClientOriginalName();
            $attechment->move(public_path('assets/images/IDCard'), $id_card_photo);
        }else{
            $id_card_photo = $user_details->id_card_photo;
        }

        if($request->hasFile('cover_photo')){
            $attechment = $request->file('cover_photo');
            $cover_photo = time() . $attechment->getClientOriginalName();
            $attechment->move(public_path('assets/images/cover_photo'), $cover_photo);
        }else{
            $cover_photo = $user_details->cover_photo;
        } 
        User::where('id',Auth::user()->id)->update(array(
            'name' => $request->name,
            'd_picture' => 'assets/images/users/'.$img_2
        )); 

        if($user_details == NULL){
            $create_user_details = new UserDetails;
            $create_user_details->user_id = Auth::user()->id;
            $create_user_details->id_card_photo = 'assets/images/IDCard/'.$id_card_photo;
            $create_user_details->cover_photo = 'assets/images/cover_photo/'.$cover_photo;
            $create_user_details->save();
        }else{
            UserDetails::where('user_id',Auth::user()->id)->update(array(
                'id_card_photo' => 'assets/images/users/'.$id_card_photo,
                'cover_photo' => 'assets/images/cover_photo/'.$cover_photo
            ));
        }
        return redirect()->back()->with('Success','Profile has been updated!');
    }
    

    public function turnon2fa(Request $request){
        if($request->password != NULL){
            // dd($request->password);
            if(Hash::check($request->password, Auth::user()->password) == TRUE){
                session()->put('is_allowed', 'password_verified');
                return response()->json([
                    'message' => 'Password has been verified'
                ]);
            }else{
                return response()->json([
                    'error_code' => 403,
                    'message' => 'Password didn\'t match with our records'
                ]); 
            }
        }

        if(session()->get('is_allowed')){
            $check_already_updated = TwoFactorAuthentication::where('user_id',Auth::user()->id)->first();
            if($check_already_updated != NULL){
                $verification = md5($request->secondary_email);
                TwoFactorAuthentication::where('user_id',Auth::user()->id)->update(array(
                    'email' => $request->secondary_email,
                    'verification_link' => $verification,
                    'is_verified' => 0
                ));
                session()->forget('is_allowed');

                Mail::to($request->secondary_email)->send(new TFAVerifyEmail($verification));

                return response()->json([
                    'message' => 'Verification link has been sent to your email',
                    'is_email_sent' => 1
                ]);
            }else{
                // dd($request->all()); 
                $verification = md5($request->secondary_email);  
                $TwoFactorAuthentication = new TwoFactorAuthentication;
                $TwoFactorAuthentication->user_id = Auth::user()->id;
                $TwoFactorAuthentication->email = $request->secondary_email;
                $TwoFactorAuthentication->verification_link = $verification;
                $TwoFactorAuthentication->is_verified = 0;
                $TwoFactorAuthentication->save();
                session()->forget('is_allowed');
                Mail::to($request->email)->send(new TFAVerifyEmail($verification));

                return response()->json([
                    'message' => 'Verification link has been sent to your email',
                    'is_email_sent' => 1
                ]);
            }
        }else{
            return response()->json([
                'message' => 'First verify your current password'
            ]);
        }
    }

    public function verify2fa($token){
        $check_toekn_exist = TwoFactorAuthentication::where('user_id',Auth::user()->id)->where('verification_link', $token)->first();
         if($check_toekn_exist != null){
                UserDetails::where('user_id',Auth::user()->id)->update(array(
                    'tfa_is_on' => 1
                ));
                TwoFactorAuthentication::where('user_id',Auth::user()->id)->update(array(
                    'is_verified' => 1,
                    'verification_link' => NULL
                ));
                return redirect('/')->with('Success','2FA is now activated');
         }else{
            return redirect('/')->with('error','Something went wrong.');
        } 
    } 

    public function verify_login_code(){
        return view('User.verify2fa');
    }

    public function verify_login_code_check(Request $request)
    {
        $check_code_exists = User::where('id', Auth::user()->id)
            ->where('two_fa_code', $request->two_fa_code)
            ->first();
    
        if ($check_code_exists != null) {
            User::where('id', Auth::user()->id)
                ->update(['two_fa_code' => null]);
    
            return redirect('/');
        } else {
            return redirect()->back()->with('error', 'Wrong code, double-check your email.');
        }
    }
 
    public function userLogout()
    {
        Auth::logout();
        return redirect()->route('user.index');
    }

    // Forgot Password Releted Function
    /**
    * Write code on Method
    *
    * @return response()
    */
    public function showForgetPasswordForm()
    {
       return view('User.auth.forgetPassword');
    }

    public function submitForgetPasswordForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
        ]);
        try {
            $token = Str::random(64);
            $postData['email'] = $request->email;
            $postData['token'] = $token;
            $postData['created_at'] = Carbon::now(); 
            PasswordReset::where('email',$request->email)->delete();
            $createResetToken = PasswordReset::create($postData);

            $user_email = $request->email;
            Mail::to($user_email)->send(new ResetPasswordMail($user_email,$token));
            
            $mesage = "If an account matches " . $request->email . ", you should receive an email with instructions on how to reset your password shortly.";
            return response()->json(['status' => true,'msg' => $mesage]);
            // return back()->with('message', $mesage);
        } catch (\Exception $e) {
            return response()->json(['status' => false,'msg' =>  $e->getMessage()]);
            //throw $th;
        }
    }
    /**
    * Write code on Method
    *
    * @return response()
    */
    public function showResetPasswordForm($token) { 
        $getEmail = PasswordReset::where('token',$token)->first();
        if(empty($getEmail)){
            return redirect('/index');
        }
        return view('User.auth.forgetPasswordLink', ['token' => $token,'emailData' => $getEmail]);
    }
  
    /**
    * Write code on Method
    *
    * @return response()
    */
    public function submitResetPasswordForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required|string|min:12',
            // 'password_confirmation' => 'required'
        ]);
        try {
            $updatePassword = PasswordReset::where([
                'email' => $request->email, 
                'token' => $request->token
                ])->first();

            if(!$updatePassword){
                return response()->json(['status' => false ,'msg' => 'Failed! Please try again']);
            }

            $user = User::where('email', $request->email)->update([
                'password' => Hash::make($request->password)
            ]);
            
            PasswordReset::where(['email'=> $request->email])->delete();
            return response()->json(['status' => true,'msg' => 'Your password changed successfully!']);
           
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    // New Signin User Email Verify
    public function verify($token)
    {
        $user = User::where('verification_token', $token)->first();

        if (!$user) {
            return view('User.auth.verify-account')->with('error', 'Invalid verification token');
        }
        return view('User.auth.verify-account',compact('user'));
    }
    
    public function activateAccount(Request $request){
        $token = $request->verificationToken;
        $user = User::where('verification_token', $token)->first();

        if (!$user) {
            return response()->json(['status' => false,'msg' => 'Sorry, this account confirmation link is no longer valid. Perhaps your account is already active?']);
        }

        $user->email_verified_at = now();
        $user->verification_token = null;
        $user->save();
        return response()->json(['status' => true,'msg' => 'Activation activated successfully.']);
    }

    public function getLoginLink($userName){
        $userData = User::where('username', $userName)->first();
        if(empty($userData)){
            return response()->json(['status' => false,'msg' => "Please Enter Registered Username"]);
        }
        $signedUrl = URL::temporarySignedRoute(
            'loginWithUsername', // Replace with your route name
            now()->addHours(1), // The URL will expire after 1 hour
            ['username' => $userName]
        );
        Mail::to($userData->email)->send(new LoginWithUserName($signedUrl));

        return response()->json(['status' => true,'msg' => 'Login link generated successfully. Please check your registred email to login via link']);
    }

    public function loginWithUsername(Request $request, $username){
        // Find the user by the provided username
        $user = User::where('username', $username)->first(); 
        if ($user) {
            Auth::login($user);
            return redirect('/profile'); // Redirect to the desired page after successful login
        } else {
            return redirect('/index')->with('error', 'Invalid username');
        }
    }

    public function registerVerification($token){
        // Find the user b y the provided token
        $user = User::where('verification_token', $token)->first();

        if (!$user) {
            $error = "Invalid token";
            return view('User.auth.register-verification',compact('error'));
        }

        return view('User.auth.register-verification',compact('user'));
    }

    public function resendVerificationMail(Request $request){
        $token = $request->verificationToken;
        $user = User::where('verification_token', $token)->orwhere('email',$token)->first();

        if (!$user) {
            return response()->json(['status' => false,'msg' => 'Sorry, this account confirmation link is no longer valid. Perhaps your account is already active?']);
        }

        Mail::to($user->email)->send(new VerifyEmail($user));
        return response()->json(['status' => true,'msg' => 'Activation email sent successfully. Please check your email to verify your account']);

    }

    public function changeVerificationEmail($token){

        $user = User::where('verification_token', $token)->orwhere('email',$token)->first();

        if (!$user) {
            $error = "Invalid token";
            return view('User.auth.change-register-email',compact('error'));
        }

        return view('User.auth.change-register-email',compact('user'));


    }

    public function changeRegisterEMail(Request $request){

        $token = $request->verificationToken;
        $user = User::where('verification_token', $token)->orwhere('email',$token)->first();

        if (!$user) {
            return response()->json(['status' => false,'msg' => 'Sorry, this account confirmation link is no longer valid. Perhaps your account is already active?']);
        }

        $user->email = $request->newEmail;
        $user->save();
        Mail::to($request->newEmail)->send(new VerifyEmail($user));
        return response()->json(['status' => true,'msg' => 'Updated successfully. Please check your email to verify your account']);
    }

}
