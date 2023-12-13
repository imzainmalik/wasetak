<?php

namespace App\Http\Controllers\Admin;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminSettingController extends Controller
{
    //

    public function index()
    {
        $setting =  Setting::find(1);
        return view('Admin.Setting.index',get_defined_vars());
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            "web_name" => "required",
            "web_logo" => 'sometimes|image',
            "web_slogan" => "sometimes",
            "log_fav_icon" => 'sometimes|image',
            "web_email" => "sometimes",
            "web_address" => "sometimes",
            "web_phone" => "sometimes",
            "facebook_link" => "sometimes",
            "insta_link" => "sometimes",
            "twitter_link" => "sometimes",
            "youtube_link" => "sometimes"
        ],
        [
            'web_logo.image' => 'The Logo field must be a file of type: jpeg, png, jpg, gif.',
            'log_fav_icon.image' => 'The Favicon field must be a file of type: jpeg, png, jpg, gif.'
        ]);
            $setting = Setting::find(1);
            $setting->web_name = $validated['web_name'];
             if($request->hasFile('web_logo')){
                    $attechment1 = $request->file('web_logo');
                    $img_1 = time() . $attechment1->getClientOriginalName();
                    $attechment1->move(public_path('assets/images/settings'), $img_1);
                    $setting->web_logo = 'assets/images/settings/'.$img_1;
                }
            $setting->web_slogan = $validated['web_slogan'];

             if($request->hasFile('log_fav_icon')){
                    $attechment = $request->file('log_fav_icon');
                    $img_2 = time() . $attechment->getClientOriginalName();
                    $attechment->move(public_path('assets/images/settings'), $img_2);
                    $setting->log_fav_icon = 'assets/images/settings/' .$img_2;
                }
          
            $setting->web_email = $validated['web_email'];  
            $setting->web_address = $validated['web_address'];
            $setting->web_phone = $validated['web_phone'];
            $setting->facebook_link = $validated['facebook_link'];
            $setting->insta_link = $validated['insta_link'];
            $setting->twitter_link = $validated['twitter_link'];
            $setting->youtube_link = $validated['youtube_link'];
            $setting->save();
            $notification = "Setting Update Successfully";
           
        return redirect()->back()->with('Success', $notification);
    }
}
