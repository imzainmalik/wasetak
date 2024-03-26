<?php

namespace App\Http\Controllers;

use App\Models\BotCommentTemplate;
use Illuminate\Http\Request;
use App\Models\CheckoutTicket;
use App\Models\TicketComment;

class StaffController extends Controller
{
    //

    public function index(){
        // dd('ss');
        $recent_tickets = CheckoutTicket::whereDate('created_at', '>=', now()->subDays(10))->where('status', 0)->get();
        $pending_tickets = CheckoutTicket::where('status', 0)->get();
        $active_tickets = CheckoutTicket::where('status', 1)->get();
        // dd($recent_tickets);
        return view('staff.index',get_defined_vars());
    }

    public function change_status(Request $request, $ticket_id){ 

        $ticket_details = CheckoutTicket::where('id', $ticket_id)->first(); 

        CheckoutTicket::where('id', $ticket_id)->update(array(
            'status' => $request->status
        )); 

        $send_notification['user_id'] = [$ticket_details->user_id];
        $send_notification['title'] = asset('ticket-details/'.$ticket_details->ticket_no.'');
        $send_notification['body'] = 'Admin Changed the status of your ticket, click to view it.';
        $send_notification['url'] = route('checkout.ticket_details',$ticket_details->ticket_no);
        $send_notification['user_id_from'] = auth()->user()->id;
        $send_notification['type'] = 5;
        $send_notification['type_id'] = $ticket_details->ticket_no;
        like_notification($send_notification); 

        $bot_comment_temp = BotCommentTemplate::find(1);

        $post_reply = new TicketComment;
        $post_reply->user_id = $request->auth_id;
        $post_reply->post_id = $ticket_id;
        $post_reply->reply = $bot_comment_temp->comment ?? 'This comment is come from bot';
        $post_reply->is_bot = 1;
        $post_reply->save();
         
        return response()->json([
            'status' => $request->status,
            'id' => $ticket_id  
        ]);
    }

    public function view_ticket($id){
        $ticket_details = CheckoutTicket::where('ticket_no', $id)->first();
        return view('Staff.tickets_show',compact('ticket_details'));
    }
}
