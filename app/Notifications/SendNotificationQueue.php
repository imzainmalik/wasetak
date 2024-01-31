<?php

namespace App\Notifications;

use App\Models\PushNotification;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Notifications\FirebaseChannel;
use Illuminate\Notifications\Notification;

class SendNotificationQueue extends Notification
 implements ShouldQueue
{
    use Queueable;

    public $title = '';
    public $body = '';
    public $action = '';
    public $icon = 'http://localhost:8000/assets/images/logo-light.png';
    public $data = [];



    public function __construct($title, $body, $action ,$data = [])
    {
        $this->title = $title;
        $this->body = $body;
        $this->action = $action;
        $this->data = $data;

    }


    public function via($notifiable)
    {   
        
        return [FirebaseChannel::class];
    }
    
    /**
     * Get the mail representation of the notification.
     */
    public function toFirebase($notifiable)
    {    

        $users = User::where('device_token',$notifiable)->where('is_active', 1)->get();
        
        if($users){
            if(isset($this->data['admin_id_from'])){
                foreach( $users as $k => $item){
                    PushNotification::create([
                        'title' => $this->data['title'], 
                        'body' => $this->data['body'] ,
                        'admin_id_from' => isset($this->data['admin_id_from']) ? $this->data['admin_id_from'] : null, 
                        'user_id_to' => $item->id ,
                        'url' => $this->data['url'] ,
                        'type' => $this->data['type'] ,
                        'type_id' => $this->data['type_id'],
        
                    ]);
                }
            }else{
                foreach( $users as $k => $item){
                    PushNotification::create([
                        'title' => $this->data['title'], 
                        'body' => $this->data['body'] ,
                        'user_id_from' => isset($this->data['user_id_from']) ? $this->data['user_id_from'] : null  ,
                        'user_id_to' => $item->id ,
                        'url' => $this->data['url'] ,
                        'type' => $this->data['type'] ,
                        'type_id' => $this->data['type_id'],
                    ]);
        
                }
            }
        }
        

        // $SERVER_API_KEY = 'AAAAqhZeNDA:APA91bEuqjdYxLUNpChCMX2EeNallTx8uWbzF5WaYfxx-o6SVuh3qVCZ_EXiT087OFJWri-8PPT_nEzuoO6_sbCH4dMmx7_bDafPKRFodtzjPlHkOhZalTObI_8TS7MD6JdKj5K2-E68';
  
        // $data = [
        //     "registration_ids" => [$notifiable],
        //     "notification" => [
        //         "title" => $this->title,
        //         "body" => $this->body,  
        //         "icon" => $this->logo,  
        //         "click_action" => $this->action,  
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

        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://fcm.googleapis.com/fcm/send',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS =>'{
            "registration_ids":["'.$notifiable.'"],
            "data":{
                "title":"'.$this->title.'",
                "body":"'.$this->body.'",
                "LinkUrl": "https://www.google.com",
                "icon": "'.$this->icon.'",
            }
        }',
        
          CURLOPT_HTTPHEADER => array(
            'Authorization: key=AAAAqhZeNDA:APA91bEuqjdYxLUNpChCMX2EeNallTx8uWbzF5WaYfxx-o6SVuh3qVCZ_EXiT087OFJWri-8PPT_nEzuoO6_sbCH4dMmx7_bDafPKRFodtzjPlHkOhZalTObI_8TS7MD6JdKj5K2-E68',
            'Content-Type: application/json'
          ),
        ));

        $response = curl_exec($curl);
        // echo $response;
        curl_close($curl);

       
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
