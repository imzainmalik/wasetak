<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AdminLoginForm;
use App\Http\Requests\forgotPassword;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Mail;
use Auth;
use URL;
use Exception;
use Hash;

class adminLoginController extends Controller
{
    public function loginForm()
    {
        return view('Admin.login');
    }
    
    public function login(AdminLoginForm $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::guard('admin')->attempt($credentials)) {
            // dd($credentials);
            return redirect()->route('dashboard');

        }elseif(Auth::guard('staff')->attempt($credentials)){
            // Auth::guard('staff')->attempt($credentials);
            // dd(Auth::check(), $credentials);

            return redirect()->route('staff.dashboard');
            
        }else{
            return redirect()->back()->with('error','you have entered invalid credentials');
        }
    }

    public function forgotPasswordForm()
    {
        return view('Admin.forgotPassword');
    }

    public function showLinkRequestForm()
    {
        return view('auth.passwords.email')->with('user_type', request()->user_type);
    }

    public function forgotPassword(forgotPassword $request)
    {
        $email = $request->email;
        $emailCheck = $this->admin::where('email',$email)->first();
        if($emailCheck){
            $token = Str::random(64);
            $this->passwordReset::updateOrCreate(
                ['email' => $email],
                [
                    'email' => $email,
                    'token' => $token,
                    'created_at' => Carbon::now()
                ],
            );
            $data = array();
            $data['token'] = Crypt::encryptString($token);
            $data['name'] = $emailCheck->first_name .' '.$emailCheck->first_name;
            $data['link'] = URL::to('/admin/reset-password/').'/'. Crypt::encryptString($token);
            Mail::send('Admin.forgotPasswordMail', ['data' => $data], function($message) use($email){
                $message->to($email);
                $message->subject('Reset Password');
            });

            return redirect()->back()->with("success","We have e-mailed your password reset link!");
        }else{
            return redirect()->back()->with("error","Sorry, we couldn't find a email");
        }
    }

    public function resetPassword($token)
    {
        return view('Admin.resetPassword',compact('token'));
    }
    public function resetPasswordSave(Request $request)
    {
        try{
            $token = Crypt::decryptString($request->resetToken);
            $password = $request->password;
            $email = $this->passwordReset::where('token',$token)->first();
            $admin = $this->admin::where('email',$email->email)->first();
            $resetPassword = $this->admin::where('id',$admin->id)->update(['password'=>Hash::make($password)]);
            return redirect('admin/login')->with('passwordChange','Password Reset Succesfully');
        }catch(Exception $exception){
            return response()->json(['tokenError'=>$exception->getMessage()]);
        }
    }

    public function adminLogout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('loginForm');
    }

}