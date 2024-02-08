<?php

namespace App\Http\Controllers;

// use App\Models\Notification;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\PushNotification;
use App\Notifications\SendNotificationQueue;
use Illuminate\Support\Facades\Notification;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Auth;
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
        // $data = PushNotification::whereNotNull('admin_id_from')->orderBy('id','Desc')->first(); 
        // dd($data->getAdminInfo);
        if ($request->ajax()) {
            $data = PushNotification::whereNotNull('admin_id_from')->get(); 
            return DataTables::of($data)
                    ->addIndexColumn() 
                    ->addColumn('to', function($row){
                           $to = $row->getAdminInfo ? $row->getAdminInfo->first_name .'<br/> <small>Admin</small>': ''; 
                            return $to;
                    })
                    ->addColumn('from', function($row){
                           $from = $row->getUserInfo ? $row->getUserInfo->name : ''; 
                            return $from;
                    })
                    ->addColumn('status', function($row){
                           $status = $row->un_read == 1 ? '<div class="badge rounded-pill bg-success">Read</div>' : '<div class="badge rounded-pill bg-danger">Un Read</div>';
                            return $status;
                    })
                    ->rawColumns(['status', 'to','from'])
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
        $request->validate([
            "user.*" => 'required',
            "title" => 'required',
            "body" => 'required',
        ]);

        if (in_array(0, $request['user'])) {
            
            $users = User::where('is_active',1)->whereNotNull('device_token')->pluck('id')->toArray();
        } else {
            $users = User::where('is_active',1)->WhereIn('id', $request['user'])->whereNotNull('device_token')->pluck('id')->toArray();
        } 
        $send_notification = [];
        $send_notification['user_id'] = $users;
        $send_notification['title'] = $request->title;
        $send_notification['body'] = $request->body;
        $send_notification['url'] = $request->url;
        $send_notification['admin_id_from'] = auth()->user()->id;
        $send_notification['type'] = 0;
        $send_notification['type_id'] = 0; 
        // if ($users) {
        //     foreach ($users as $user) {
        //         PushNotification::create([
        //             'title' => $request->title,
        //             'body' => $request->body,
        //             'admin_id_from' => auth()->user()->id,
        //             'user_id_to' => $user->id,
        //             'url' => $request->url,
        //         ]);
        //     }
        // }
        // Notification::send($firebaseToken, new SendNotificationQueue($request->title, $request->body, 'https://www.google.com/'));
            like_notification($send_notification);
        

        // $response = curl_exec($ch);
        return redirect()->route('admin.notifications.create')->with('Success', 'Notification Successfully send');
    }

    public function get_all_notifications(){
        $notifications = PushNotification::where('user_id_to',Auth::user()->id)->where('un_read',0)->limit(10)->orderBy('id','DESC')->get();
        return response()->json([
            'code' => 200,
            'notifications' => $notifications
        ]);
    }

    public function dissmiss_all_notifications(){
        PushNotification::where('user_id_to',Auth::user()->id)->where('un_read',0)->update(array(
            'un_read' => 1
        ));
        return response()->json([
            'code' => 200,
            'message' => 'success'
        ]);
    }
}
