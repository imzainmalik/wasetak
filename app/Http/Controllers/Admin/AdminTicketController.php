<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CheckoutTicket;
use Yajra\DataTables\Facades\DataTables;

use function PHPSTORM_META\map;

class AdminTicketController extends Controller
{
    //

    public function index(Request $request){
        if ($request->ajax()) {
            $data = CheckoutTicket::all();

            return DataTables::of($data)
                    
                    ->addColumn('buyer_info', function($row){
                        $buyer_info = $row->buyer_data ? $row->buyer_data->name . '<br/><small>' . $row->buyer_data->email . '</small>' : '';
                            return $buyer_info;
                    })

                    ->addColumn('seller_info', function($row){
                        $seller_info =  $row->seller_data ? $row->seller_data->name : '';
                        return $seller_info;
                    })
                    
                    ->addColumn('ticket_no', function($row){ 
                        return $row->ticket_no;
                    })

                    ->addColumn('service_rate', function($row){
                        $service_rate = $row->service_rate;

                        return $service_rate;
                    })

                    ->addColumn('transaction_amount', function($row){
                        $transaction_amount = $row->transaction_amount;
                        return '$'.$transaction_amount.'.00';
                    })

                    ->addColumn('status', function($row){
                        if($row->status == 0){
                            $status = "<div class='badge rounded-pill bg-warning'>Pending</div>";

                        }elseif($row->status == 1){
                            $status = "<div class='badge rounded-pill bg-primary'>Active</div>";

                        }elseif($row->status == 2){
                            $status = "<div class='badge rounded-pill bg-danger'>Rejected</div>";

                        }elseif($row->status == 3){
                            $status = "<div class='badge rounded-pill bg-danger'>Closed</div>";

                        }else{
                            $status = "<div class='badge rounded-pill bg-success'>Completed</div>";
                        }
                        return  $status;
                    })
                    
                    ->addColumn('date_created', function($row){
                        return $row->created_at->diffForHumans();
                    })
 
                    ->addIndexColumn()
                    ->addColumn('action', function($row){ 
                    $btn = '<a href="'.route("admin.ticket.view_ticket",["$row->id"]).'" class="edit btn btn-primary btn-sm">View</a>'; 
                    if($row->status == 0){
                        $btn .= '|<a href="javascript:void(0)" onclick="ticket_approval_confirmation('.$row->id.',\'1\')" data-id="approve" class="edit btn btn-success btn-sm">Approve</a>';
                        $btn .= '|<a href="javascript:void(0)" onclick="ticket_approval_confirmation('.$row->id.',\'2\')" class="edit btn btn-warning btn-sm">Reject</a>';
                        $btn .= '|<a href="javascript:void(0)" onclick="ticket_approval_confirmation('.$row->id.',\'3\')" class="edit btn btn-danger btn-sm">Close</a>';
                    }
                    if($row->status == 1){
                        $btn .= '|<a href="javascript:void(0)" onclick="ticket_approval_confirmation('.$row->id.',\'2\')" class="edit btn btn-warning btn-sm">Reject</a>';
                        $btn .= '|<a href="javascript:void(0)" onclick="ticket_approval_confirmation('.$row->id.',\'3\')" class="edit btn btn-danger btn-sm">Close</a>';
                    }
                    if($row->status == 2){
                        $btn .= '| <a href="javascript:void(0)" onclick="ticket_approval_confirmation('.$row->id.',\'1\')" data-id="approve" class="edit btn btn-success btn-sm">Approve</a>';
                        $btn .= '|<a href="javascript:void(0)" onclick="ticket_approval_confirmation('.$row->id.',\'3\')" class="edit btn btn-danger btn-sm">Close</a>';
                    } 
                    // if($row->status == 1){nnnnnnn nnnnnnnn nnnnnnnnn nnnnnnnn
                    //     $btn .= '| <a href="javascript:void(0)" class="edit btn btn-warning btn-sm">pending</a>';
                    // }
                        return $btn;
                    })
                    ->rawColumns([
                        'action',
                        'buyer_info', 
                        'seller_info',
                        'ticket_no',
                        'service_rate',
                        'transaction_amount', 
                        'status',
                        'date_created',
                    ])
                    ->make(true);
        }
        return view('Admin.post.tickets');
    }

    public function change_status(Request $request, $ticket_id){

        $ticket_details = CheckoutTicket::where('id', $ticket_id)->first();

        CheckoutTicket::where('id', $ticket_id)->update(array(
            'status' => $request->status
        ));

        $send_notification['user_id'] = [$ticket_details->user_id];
        $send_notification['title'] = asset('ticket-details/'.$ticket_details->ticket_no.'');
        $send_notification['body'] =  'Admin Changed the status of your ticket, click to view it.';
        $send_notification['url'] = route('checkout.ticket_details',$ticket_details->ticket_no);
        $send_notification['user_id_from'] = auth()->user()->id;
        $send_notification['type'] = 5;
        $send_notification['type_id'] = $ticket_details->ticket_no;
        like_notification($send_notification); 
    }

    public function view_ticket($id){
        $ticket_details = CheckoutTicket::where('id', $id)->first();
        return view('Admin.post.tickets_show',compact('ticket_details'));
    }
}
