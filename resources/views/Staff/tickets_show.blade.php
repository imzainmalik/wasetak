@extends('Staff.layouts.master')
@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <div class="ticket_details">
                            <div class="row">
                                <div class="col-10">
                                    <h5>{{ asset('ticket-details/' . $ticket_details->ticket_no . ' ') }}</h5>
                                </div>
                                <div class="col-2 d-flex justify-content-end">
                                    <a href="{{ route('admin.post.tickets') }}" class="btn btn-primary"><i class="fa fa-eye"></i>
                                        View all</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover table-bordered">
                                <tbody>

                                    <tr>
                                        <th class="col-3">Seller</th>
                                        <td>
                                            {{ $ticket_details->seller_data->name }}
                                            <br>
                                            <small>{{ $ticket_details->seller_data->email }}</small>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="col-3">Buyer</th>
                                        <td>
                                            {{ $ticket_details->buyer_data->name }} 
                                        <br>
                                         {{ $ticket_details->buyer_data->email }}</td>
                                    </tr>
                                    <tr>
                                        <th>Service Describe</th>
                                        <td>{{$ticket_details->service_describe}}</td>
                                    </tr>
                                    <tr>
                                        <th>Payment Method</th>
                                        <td> {{$ticket_details->payment_method}} </td>
                                    </tr>
                                    <tr>
                                        <th>Transaction Amount</th>
                                        <td> {{$ticket_details->transaction_amount}}</td>
                                    </tr>
                                    <tr>
                                        <th>Additional Comment</th>
                                        <td>{{$ticket_details->additional_comment}}</td>
                                    </tr>
                                    <tr>
                                        <th>HandleUrl</th>
                                        <td>{{$ticket_details->handle_url ?? 'No url Provided'}}</td>
                                    </tr>
                                    <tr>
                                        <th>Ticket For?</th>
                                        <td>{{$ticket_details->ticket_for}} </td>
                                    </tr>
                                    
                                    <tr>
                                        <th>Status</th>
                                        <td>
                                            @if($ticket_details->status == 0) 
                                                <div class="badge rounded-pill bg-warning">Pending</div>
                                            @elseif($ticket_details->status == 1)
                                                 <div class="badge rounded-pill bg-primary">Active</div>
                                            @elseif($ticket_details->status == 2)
                                                 <div class="badge rounded-pill bg-danger">Rejected</div>
                                            @elseif($ticket_details->status == 3)
                                                 <div class="badge rounded-pill bg-danger">Closed</div>
                                            @elseif($ticket_details->status == 4)
                                                 <div class="badge rounded-pill bg-danger">Completed</div>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Actions</th>
                                        <td> 
                                            @if($ticket_details->status == 0)
                                                <a href="javascript:void(0)" onclick="ticket_approval_confirmation('{{ $ticket_details->id }}','1')" data-id="approve" class="edit btn btn-success btn-sm">Approve</a>
                                                <a href="javascript:void(0)" onclick="ticket_approval_confirmation('{{ $ticket_details->id }}','2')" class="edit btn btn-warning btn-sm">Reject</a>
                                                <a href="javascript:void(0)" onclick="ticket_approval_confirmation('{{ $ticket_details->id }}','3')" class="edit btn btn-danger btn-sm">Close</a>
                                            @endif
                                            @if($ticket_details->status == 1)
                                                <a href="javascript:void(0)" onclick="ticket_approval_confirmation('{{ $ticket_details->id }}','2')" class="edit btn btn-warning btn-sm">Reject</a>
                                                <a href="javascript:void(0)" onclick="ticket_approval_confirmation('{{ $ticket_details->id }}','3')" class="edit btn btn-danger btn-sm">Close</a>
                                            @endif
                                            @if($ticket_details->status == 2)
                                                <a href="javascript:void(0)" onclick="ticket_approval_confirmation('{{ $ticket_details->id }}','1')" data-id="approve" class="edit btn btn-success btn-sm">Approve</a>
                                                <a href="javascript:void(0)" onclick="ticket_approval_confirmation('{{ $ticket_details->id }}','3')" class="edit btn btn-danger btn-sm">Close</a>
                                            @endif
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
