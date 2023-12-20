<?php

namespace App\Http\Controllers;

use App\Mail\BuyerSenderInvitationMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\CheckoutTicket;
use Auth;
use Config;

class CheckoutController extends Controller
{
    public function index(){
        $payment_method_list = Config::get('common.payment_method');
        $original_email_included = Config::get('common.original_email_included');
        return view('User.checkout.index', compact('payment_method_list','original_email_included'));
    }

    public function beginTransaction(Request $request){
       
        $validator =  Validator::make($request->all(),[
           'buyer_email' => 'required|email',
           'seller_email' => 'required|email'
        ]);
       
        if ($validator->fails()){
            $msg = $validator->errors()->first();
            return response()->json([
                'status' => false,
                'msg' => $msg
            ]);
        }else{
            $seller_check_email = User::where('email',$request->seller_email)->first();
            if(empty($seller_check_email)){
                return response()->json([
                    'status' => true,
                    'msg' => 'notExist'
                ]);
            }else{
                return response()->json([
                    'status' => true,
                    'msg' => 'exist'
                ]);
            }
        }
    }

    public function sendInvites(Request $request){
        $validator =  Validator::make($request->all(),[
            'buyer_email' => 'email',
            'seller_email' => 'email'
         ]);
        
         if ($validator->fails()){
             $msg = $validator->errors()->first();
             return response()->json(['status' => false,'msg' => $msg]);
         }else{
            $buyer_email = $request->buyer_email;
            $seller_email = $request->seller_email;
            if(Auth::check()){
                Mail::to($buyer_email)->send(new BuyerSenderInvitationMail($buyer_email,Auth::user()->email));
            }else{
                Mail::to($buyer_email)->send(new BuyerSenderInvitationMail($buyer_email,$seller_email));
                Mail::to($seller_email)->send(new BuyerSenderInvitationMail($buyer_email,$seller_email));
            }
             
            return response()->json([
                'status' => true,
                'msg' => 'Invites sent successfully!'
            ]);
         }
    }

    public function findUsernameList(Request $request){
        $username = $request->username;
        $list = User::select('username','id')->where('id','!=',Auth::user()->id)->where('username','like',"%$username%")->get();
        return response()->json([
            'status' => true,
            'msg' => 'Fetch successfully!',
            'list'=>$list
        ]);
    }

    public function createTicket(Request $request){
        $validator =   ::make($request->all(),[
            'buyer_username' => 'required|exists:users,username',
            'buyer_seller_type' => 'required',
            'ticket_for' => 'required',
            'service_describe' => 'required_if:ticket_for,==,Service',
            'long_service_take' => 'required_if:ticket_for,==,Service',
            'service_rate' => 'required_if:ticket_for,==,Service',
            'payment_method' => 'required',
            'transaction_amount' => 'required',
            'additional_comment' => 'required',
            'original_email_included' => 'required_if:ticket_for,==,Item',
            'handle_url' => 'required_if:ticket_for,==,Item',
            'ticket_no' => 'required|unique:checkout_tickets'
         ]);
        
         if ($validator->fails()){
             $msg = $validator->errors()->first();
             return response()->json(['status' => false,'msg' => $msg]);
         }else{
            $input = $request->all();
            $buyer_data = User::select('id')->where('username',$input['buyer_username'])->first();

            $input['other_user_id'] = $buyer_data->id; 
            $input['user_id'] = \Auth::user()->id; 
            $input['is_seller'] = ($input['buyer_seller_type'] == 'Seller') ? true : false;

            $createTicket = CheckoutTicket::create($input);

            return response()->json([
                'status' => true,
                'msg' => 'Ticket created successfully!', 
                'data' => $createTicket
            ]);
         }
    }

    public function ticketDetails($ticketId){
        $getTicketDetail = CheckoutTicket::where('ticket_no',$ticketId)->with('seller_data','buyer_data')->first();
        return view('User.checkout.ticket-details', compact('getTicketDetail'));

    }
}
