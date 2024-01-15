<?php

namespace App\Http\Controllers;

// use App\Models\Notification;
use Illuminate\Http\Request;
use App\Models\User;
use App\Notifications\SendNotificationQueue;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Notification;

class PushNotificationController  implements ShouldQueue
{ 
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
   


    public function saveToken(Request $request)
    {
        auth()->user()->update(['device_token'=>$request->token]);
        return response()->json(['token saved successfully.']);
    }

    public function notifications_create()
    {
        $users = User::where('is_active', 1)->get();
       return view('admin.notification.create', get_defined_vars());
    }


    public function sendNotification(Request $request)
    {
            // $request->vildate([
            //     'user' => 'required',
            //     'title' => 'required',
            //     'body' => 'required',
            // ]); 

        if (in_array(0, $request['user'])) {
           $users = User::whereNotNull('device_token')->get();
           $firebaseToken = $users->pluck('device_token');
        } else {
            $users = User::WhereIn('id',$request['user'])->whereNotNull('device_token')->get();
            $firebaseToken = $users->pluck('device_token');
        }   

   
        // if($users){
        //     foreach($users as $user){
        //         Notification::create([
        //             'title' => $request->title,
        //             'body' => $request->body,
        //             'admin_id_from' => auth()->user()->id,
        //             'user_id_to' => $user->id,
        //         ]);

        //     }
        // }
       Notification::send($firebaseToken, new SendNotificationQueue($request->title, $request->body ));
 

          
        // $SERVER_API_KEY = 'AAAAqhZeNDA:APA91bEuqjdYxLUNpChCMX2EeNallTx8uWbzF5WaYfxx-o6SVuh3qVCZ_EXiT087OFJWri-8PPT_nEzuoO6_sbCH4dMmx7_bDafPKRFodtzjPlHkOhZalTObI_8TS7MD6JdKj5K2-E68';
  
        // $data = [
        //     "registration_ids" => $firebaseToken,
        //     "notification" => [
        //         "title" => $request->title,
        //         "body" => $request->body,  
        //     ]
        // ];
        // $dataString = json_encode($data);
    
        // $headers = [
        //     'Authorization: key=' . $SERVER_API_KEY,
        //     'Content-Type: application/json',
        // ];
    
        // $ch = curl_init();
      
        // curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
        // curl_setopt($ch, CURLOPT_POST, true);
        // curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        // curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);
               
        // $response = curl_exec($ch);
        return redirect()->route('admin.notifications.create')->with('Success', 'Notification Successfully send');
    }
    
}
