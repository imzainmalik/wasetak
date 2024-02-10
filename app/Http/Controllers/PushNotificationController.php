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
        
        like_notification($send_notification);
        

        // $response = curl_exec($ch);
        return redirect()->route('admin.notifications.create')->with('Success', 'Notification Successfully send');
    }

    public function get_all_notifications(Request $request){
        $notifications = PushNotification::where('user_id_to',Auth::user()->id)->where('un_read',0)->orderBy('id','DESC')->limit(10);
       

        if($notifications->count() > 0){

            if($request->has('all_notification') != null){ 
                // $notifications = 'No notifications found.';
                // $notification_1_count = $notifications->where('type','3')->count();
                return response()->json([
                    'code' => 200,
                    'notifications' => $notifications->get(),
                    'all_unread_count' => $notifications->count(),
                    'notitfication_count' => $notifications->where('type','3')->count(),
                    
                ]);
           
            }

            if($request->has('get_replies_noti') != null){
                return response()->json([
                    'code' => 200,
                    'notifications' => $notifications->where('type','2')->get(),
                    'notitfication_count' => $notifications->where('type','2')->count(),
                ]);
            }

            if($request->has('get_likes_noti') != null){
                return response()->json([
                    'code' => 200,
                    'notifications' => $notifications->where('type','3')->get(),
                    'notitfication_count' => $notifications->where('type','3')->count(),
                ]);
            }

            if($request->has('get_other_noti') != null){
                return response()->json([
                    'code' => 200,
                    'notifications' => $notifications->where('type','5')->get(),
                    'notitfication_count' => $notifications->where('type','5')->count(),
                ]);
            }

            if($request->has('get_post_noti') != null){
                return response()->json([
                    'code' => 200,
                    'notifications' => $notifications->where('type','1')->get(),
                    'notitfication_count' => $notifications->where('type','1')->count(),
                ]);
            }

            if($request->has('get_admin_noti') != null){
                return response()->json([
                    'code' => 200,
                    'notifications' => $notifications->where('type','0')->get(),
                    'notitfication_count' => $notifications->where('type','0')->count(),
                ]);
            }
        }else{
            $notifications = 'No notifications found.';
            return response()->json([
                'code' => 404,
                'notifications' => $notifications
            ]);
        }

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

    public function get_replies_notifications(){
        // PushNotification::where('user_id_to',Auth::user()->id)->where('un_read',0)->where('')
    }
}
