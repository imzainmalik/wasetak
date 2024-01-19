<?php

namespace App\Http\Controllers;

// use App\Models\Notification;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\PushNotification;
use App\Notifications\SendNotificationQueue;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Notification;
use Yajra\DataTables\Facades\DataTables;

class PushNotificationController  implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function saveToken(Request $request)
    {
        auth()->user()->update(['device_token' => $request->token]);
        return response()->json(['token saved successfully.']);
    }

    function index(Request $request)
    {   
      
        if ($request->ajax()) {
            $data = PushNotification::orderBy('id','Desc')->get();
            return DataTables::of($data)
                    ->addIndexColumn()
                    // ->addColumn('action', function($row){
                    //        $btn = '<a href="'.route('admin.pages.edit', [$row->id]).'" class="edit btn btn-primary m-1 btn-sm">Edit</a>';
                    //         return $btn;
                    // })
                    // ->addColumn('to', function($row){
                    //         if($row->user_id_from != null){
                                
                    //         }else{

                    //         }
                    //        $to = '<a href="'.route('admin.pages.edit', [$row->id]).'" class="edit btn btn-primary m-1 btn-sm">Edit</a>';
                    //         return $btn;
                    // })
                    ->addColumn('status', function($row){
                           $status = $row->is_active == 1 ? '<div class="badge rounded-pill bg-success">Read</div>' : '<div class="badge rounded-pill bg-danger">Un Read</div>';
                            return $status;
                    })
                    ->rawColumns(['action', 'status'])
                    ->make(true);
        }
        return view('admin.notification.index', get_defined_vars());
    }

    public function notifications_create()
    {
        $users = User::where('is_active', 1)->get();
        return view('admin.notification.create', get_defined_vars());
    }


    public function sendNotification(Request $request)
    {
        dd($request->all());
        $request->vildate([
            "user.*" => 'required',
            "title" => 'required',
            "body" => 'required',
        ]);

        if (in_array(0, $request['user'])) {
            $users = User::whereNotNull('device_token')->get();
            $firebaseToken = $users->pluck('device_token');
        } else {
            $users = User::WhereIn('id', $request['user'])->whereNotNull('device_token')->get();
            $firebaseToken = $users->pluck('device_token');
        }


        if ($users) {
            foreach ($users as $user) {
                PushNotification::create([
                    'title' => $request->title,
                    'body' => $request->body,
                    'admin_id_from' => auth()->user()->id,
                    'user_id_to' => $user->id,
                    'url' => $request->url,
                ]);
            }
        }
        Notification::send($firebaseToken, new SendNotificationQueue($request->title, $request->body, 'https://www.google.com/'));

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
