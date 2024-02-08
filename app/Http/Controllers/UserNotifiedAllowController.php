<?php

namespace App\Http\Controllers;

use App\Models\UserNotifiedAllow;
use Illuminate\Http\Request;

class UserNotifiedAllowController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function user_notification_allow(Request $request){

        // user_id - notifictoion_type |1 = Watching | 4 = Muted -	type |0 Page | 1 Post - type_id
    
            $user_noti = UserNotifiedAllow::where('user_id',auth()->user()->id)->where('type',$request->type)->where('type_id',$request->page_id)->first();

           if($user_noti){
            $user_noti->user_id = auth()->user()->id;
            $user_noti->notification_type = $request->notification_type;
            $user_noti->type = $request->type;
            $user_noti->type_id = $request->page_id;
           }else{
               $user_noti = new  UserNotifiedAllow();
               $user_noti->user_id = auth()->user()->id;
               $user_noti->notification_type = $request->notification_type;
               $user_noti->type =  $request->type;
               $user_noti->type_id = $request->page_id;
           }
            $user_noti->save();
        
            if($request->notification_type == 1){
                $name =  "Watching";
                $img = '<img src="' . asset('user_asset/img/card37.png'). '" alt="">';
            }elseif($request->notification_type == 2){
                $name =  "Tracking";
                $img =  '<img src="' . asset('user_asset/img/card38.png'). '" alt="">'; 
            }elseif($request->notification_type == 4){
                $img =  '<img src="' . asset('user_asset/img/card40.png'). '" alt="">';
                $name =  "Muted";
                
            }else{
                $img =  '<img src="' . asset('user_asset/img/card39.png'). '" alt="">'; 
                $name =  "Normal";
            }

        return response()->json(['status'=>1, 'image' => $img, 'name'=> $name ]);

}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(UserNotifiedAllow $userNotifiedAllow)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserNotifiedAllow $userNotifiedAllow)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UserNotifiedAllow $userNotifiedAllow)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserNotifiedAllow $userNotifiedAllow)
    {
        //
    }
}
