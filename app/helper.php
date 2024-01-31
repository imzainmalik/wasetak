<?php

use App\Models\AdminPage;
use App\Models\Setting;
use App\Models\User;
use App\Notifications\SendNotificationQueue;
use Illuminate\Support\Facades\Notification;

function settings()
{
   $setting =  Setting::find(1);
    return $setting;
}

function admin_pages()
{
   $adminPages =  AdminPage::where('is_active',1)->whereNull('parent_id')->get();
    return $adminPages;
}
function admin_inner_pages($id)
{
  
   $adminInnerPages =  AdminPage::where('is_active',1)->where('parent_id', $id)->get();
    return $adminInnerPages;
}


function like_notification($send_notification = [])
{


    
    $firebaseToken = User::WhereIn('id', $send_notification['user_id'])->whereNotNull('device_token')->get()->pluck('device_token');

    if(count($firebaseToken) > 0){
        Notification::send($firebaseToken, new SendNotificationQueue($send_notification['title'], $send_notification['body'], $send_notification['url'] , $send_notification));
    }
}



