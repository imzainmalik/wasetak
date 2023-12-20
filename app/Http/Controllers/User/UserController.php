<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Mail\ResetPasswordMail;
use App\Mail\VerifyEmail;
use App\Mail\LoginWithUserName;
use Illuminate\Http\Request;
use Hash;
use Auth;
use Illuminate\Validation\Rule;
use Carbon\Carbon;
use App\Models\User; 
use App\Models\PasswordReset;
use Mail; 
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;

use App\Models\Bookmark;
use App\Models\DaysVisit;
use App\Models\LikedReply;

use App\Models\Post;
use App\Models\PostLike;
use App\Models\PostReply;
use App\Models\PostViews;  



class UserController extends Controller
{
    public function index()
    {  

        
        $posts = Post::where('is_active',1)->orderBy('id','Desc')->paginate(30 , ['*'], 'latest_page' );
        $posts->setPageName('latest_page');
        
        $top_posts = Post::where('is_active',1)->withCount('getPostViews as post_views_count')->orderBy('post_views_count', 'desc')->paginate(30 , ['*'],'top_page');
        $top_posts->setPageName('top_page');

        $featureds = Post::where('is_active',1)->Where('is_featured',1)->paginate(30 , ['*'],'featured_page');
        $featureds->setPageName('featured_page');


        if(auth()->check()){
            $unviewed_posts = Post::where('is_active',1)->whereDoesntHave('getPostViews', function ($query) {
                $query->where('user_id', auth()->user()->id);
            })->paginate(30 , ['*'],'new_topic');
        }


        // $new = Post::where('is_active', 1)
        // ->withCount('getPostReplies as getPostReplies_count')
        // ->orderBy('getPostReplies_count', 'desc')
        // ->having('getPostReplies_count',  '!=' , auth()->user()->id)
        // ->get();
        // dd($new);

        return view('User.index' , get_defined_vars());
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
            $check_created_visited_days = DaysVisit::where('user_id',Auth::user()->id)->first();
            $count_days = 0;
            if($check_created_visited_days != NULL){
               
                $get_visited_days = DaysVisit::where('user_id',Auth::user()->id)->first();
                $count_days = $get_visited_days->days + 1;
                // dd($count_days);
                DaysVisit::where('user_id',Auth::user()->id)->update(array(
                    'days' => $count_days
                ));
            }else{
                $DaysVisit = new DaysVisit;
                $DaysVisit->user_id = Auth::user()->id;
                $DaysVisit->days = 1;
                $DaysVisit->save();
            }

            if(empty(Auth::user()->email_verified_at)){
                Auth::logout();
                return response()->json([
                    'status' => false,
                    'message' => 'Your Account is not verify, Please Check your email to verify account',
                    'is_verify'=>false
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

   public function profile()
    {
        $data = Auth::user();
        $last_post_created = Post::where('user_id',Auth::user()->id)->latest()->first();
        $visited_days = DaysVisit::where('user_id',Auth::user()->id)->first();
        // dd($last_post_created->created_at);
        $topic_created = PostReply::where('user_id',Auth::user()->id)->where('is_active',1)->get();
        // dd($topic_created->count());
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
                    $get_top_replies = PostReply::where('id',$my_top_reply->reply_id)->get();
                    $my_top_replies = $my_top_replies->count();
                }
            }else{
                $get_top_replies = NULL;
                $my_top_replies = 0;
            }
            // dd($get_top_replies);
            
        return view('User.profile',compact('data','my_top_replies','get_top_replies','my_posts_views','like_received','my_posts','bookmarks','last_post_created','likes_given','post_created','visited_days','topic_created'));
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

        // $user->email_verified_at = now();
        // $user->verification_token = null;
        // $user->save();

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
        // Find the user by the provided token
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
