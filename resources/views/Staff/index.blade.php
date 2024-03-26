@extends('Staff.layouts.master')
@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="item">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Dashboard</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                                    <li class="breadcrumb-item active">Dashboard</li>
                                </ol>
                            </div>
                        </div>  
                    </div>
                </div>


                <div class="col-sm-12">
                    <div class="card overflow-hidden">
                        <div class="bg-primary-subtle">
                         
                            <div class="text-primary p-5">
                                <p>Welcome back to Dashboard <h2 class="text-center">{{auth()->user()->name}}!</h2></p>
                            </div>
                        </div> 
                    </div>
                 
                </div>

                <div class="item">
                    <div class="card col-12">
                        <div class="card-header">
                            <h2>Recent Pending Tickets</h2>
                            <p>Action required</p>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th>#</th>
                                    <th>Buyer Info</th>
                                    <th>Seller Info</th>
                                    <th>Ticket No</th>
                                    <th>Service Rate</th>
                                    <th>Transaction Amount</th> 
                                    <th>Current Status</th>
                                    <th>CreatedAt</th>
                                    <th width="100px">Actions</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  @if ($recent_tickets->count() > 0) 
                                    @php
                                        $count = 1;
                                    @endphp
                                    @foreach ($recent_tickets as $item) 
                                        <tr>
                                            <th scope="item">{{$count ++}}</th>
                                            <td>{{$item->buyer_data->name}} <br>{{$item->buyer_data->email}}  </td>
                                            <td>{{$item->seller_data->name}} <br> {{$item->seller_data->email}}</td>
                                            <td>{{$item->ticket_no}}</td>
                                            <td>{{$item->service_rate}}</td>
                                            <td>${{$item->transaction_amount}}.00</td>
                                            <td>
                                                @if($item->status == 0)
                                                     <div class='badge rounded-pill bg-warning'>Pending</div>  
                                                @elseif($item->status == 1)
                                                     <div class='badge rounded-pill bg-primary'>Active</div>  
                                                @elseif($item->status == 2)
                                                     <div class='badge rounded-pill bg-danger'>Rejected</div>  
                                                @elseif($item->status == 3) 
                                                     <div class='badge rounded-pill bg-danger'>Closed</div>  
                                                @else 
                                                     <div class='badge rounded-pill bg-success'>Completed</div> 
                                                @endif
                                            </td> 
                                            <td>{{$item->created_at->diffForHumans()}}</td>
                                            <td>
                                                <a href="{{route("staff.ticket.view_ticket",$item->ticket_no)}}" class="edit btn btn-primary btn-sm">View</a>
                                                @if($item->status == 0)
                                                    |<a href="javascript:void(0)" onclick="ticket_approval_confirmation('{{$item->id}}','1')" data-id="approve" class="edit btn btn-success btn-sm">Approve</a> 
                                                    |<a href="javascript:void(0)" onclick="ticket_approval_confirmation('{{$item->id}}','2')" class="edit btn btn-warning btn-sm">Reject</a> 
                                                    |<a href="javascript:void(0)" onclick="ticket_approval_confirmation('{{$item->id}}','3')" class="edit btn btn-danger btn-sm">Close</a> 
                                                @endif

                                                @if($item->status == 1)
                                                    |<a href="javascript:void(0)" onclick="ticket_approval_confirmation('{{$item->id}}','2')" class="edit btn btn-warning btn-sm">Reject</a> 
                                                    |<a href="javascript:void(0)" onclick="ticket_approval_confirmation('{{$item->id}}','3')" class="edit btn btn-danger btn-sm">Close</a> 
                                                @endif

                                                @if($item->status == 2)
                                                    | <a href="javascript:void(0)" onclick="ticket_approval_confirmation('{{$item->id}}','1')" data-id="approve" class="edit btn btn-success btn-sm">Approve</a> 
                                                    |<a href="javascript:void(0)" onclick="ticket_approval_confirmation('{{$item->id}}','3')" class="edit btn btn-danger btn-sm">Close</a> 
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                    @else
                                        <tr>No data found.</tr> 
                                  @endif
                                </tbody>
                              </table>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="item">
                                    <div class="col-2">
                                        <h2>Pending Tickets</h2>
                                        <p>Action required</p>
                                    </div>
                                    <div class="col-10 d-flex justify-content-end">
                                        <a href="">View all</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                      <tr>
                                        <th>#</th>
                                        <th>Buyer Info</th>
                                        <th>Seller Info</th>
                                        <th>Ticket No</th>
                                        <th>Service Rate</th>
                                        <th>Transaction Amount</th> 
                                        <th>Current Status</th>
                                        <th>CreatedAt</th>
                                        <th width="100px">Actions</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                        @if ($pending_tickets->count() > 0) 
                                        @php
                                            $count = 1;
                                        @endphp
                                        @foreach ($pending_tickets as $item) 
                                            <tr>
                                                <th scope="item">{{$count ++}}</th>
                                                <td>{{$item->buyer_data->name}} <br>{{$item->buyer_data->email}}  </td>
                                                <td>{{$item->seller_data->name}} <br> {{$item->seller_data->email}}</td>
                                                <td>{{$item->ticket_no}}</td>
                                                <td>{{$item->service_rate}}</td>
                                                <td>${{$item->transaction_amount}}.00</td>
                                                <td>
                                                    @if($item->status == 0)
                                                         <div class='badge rounded-pill bg-warning'>Pending</div> 
                            
                                                    @elseif($item->status == 1)
                                                         <div class='badge rounded-pill bg-primary'>Active</div>
                            
                                                    @elseif($item->status == 2)
                                                         <div class='badge rounded-pill bg-danger'>Rejected</div> 
                            
                                                    @elseif($item->status == 3) 
                                                         <div class='badge rounded-pill bg-danger'>Closed</div> 
                            
                                                    @else 
                                                         <div class='badge rounded-pill bg-success'>Completed</div> 
                                                    @endif
                                                </td> 
                                                <td>{{$item->created_at->diffForHumans()}}</td>
                                                <td>
                                                    <a href="{{route("staff.ticket.view_ticket",$item->ticket_no)}}" class="edit btn btn-primary btn-sm">View</a>
                                                    @if($item->status == 0)
                                                        |<a href="javascript:void(0)" onclick="ticket_approval_confirmation('{{$item->id}}','1')" data-id="approve" class="edit btn btn-success btn-sm">Approve</a> 
                                                        |<a href="javascript:void(0)" onclick="ticket_approval_confirmation('{{$item->id}}','2')" class="edit btn btn-warning btn-sm">Reject</a> 
                                                        |<a href="javascript:void(0)" onclick="ticket_approval_confirmation('{{$item->id}}','3')" class="edit btn btn-danger btn-sm">Close</a> 
                                                    @endif
                                                    @if($item->status == 1)
                                                        |<a href="javascript:void(0)" onclick="ticket_approval_confirmation('{{$item->id}}','2')" class="edit btn btn-warning btn-sm">Reject</a> 
                                                        |<a href="javascript:void(0)" onclick="ticket_approval_confirmation('{{$item->id}}','3')" class="edit btn btn-danger btn-sm">Close</a> 
                                                        @endif
                                                    @if($item->status == 2)
                                                        | <a href="javascript:void(0)" onclick="ticket_approval_confirmation('{{$item->id}}','1')" data-id="approve" class="edit btn btn-success btn-sm">Approve</a> 
                                                        |<a href="javascript:void(0)" onclick="ticket_approval_confirmation('{{$item->id}}','3')" class="edit btn btn-danger btn-sm">Close</a> 
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                        @else
                                            <tr>No data found.</tr> 
                                      @endif
                                    </tbody>
                                  </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="item">
                                    <div class="col-4">
                                        <h2>Active Tickets</h2>
                                        <p>No action required</p>
                                    </div>
                                    <div class="col-8 d-flex justify-content-end">
                                        <a href="">View all</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                      <tr>
                                        <th>#</th>
                                        <th>Buyer Info</th>
                                        <th>Seller Info</th>
                                        <th>Ticket No</th>
                                        <th>Service Rate</th>
                                        <th>Transaction Amount</th> 
                                        <th>Current Status</th>
                                        <th>CreatedAt</th>
                                        <th width="100px">Actions</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                        @if ($active_tickets->count() > 0) 
                                        @php
                                            $count = 1;
                                        @endphp
                                        @foreach ($active_tickets as $item) 
                                            <tr>
                                                <th scope="item">{{$count ++}}</th>
                                                <td>{{$item->buyer_data->name}} <br>{{$item->buyer_data->email}}  </td>
                                                <td>{{$item->seller_data->name}} <br> {{$item->seller_data->email}}</td>
                                                <td>{{$item->ticket_no}}</td>
                                                <td>{{$item->service_rate}}</td>
                                                <td>${{$item->transaction_amount}}.00</td>
                                                <td>
                                                    @if($item->status == 0)
                                                         <div class='badge rounded-pill bg-warning'>Pending</div> 
                            
                                                    @elseif($item->status == 1)
                                                         <div class='badge rounded-pill bg-primary'>Active</div>
                            
                                                    @elseif($item->status == 2)
                                                         <div class='badge rounded-pill bg-danger'>Rejected</div> 
                            
                                                    @elseif($item->status == 3) 
                                                         <div class='badge rounded-pill bg-danger'>Closed</div> 
                            
                                                    @else 
                                                         <div class='badge rounded-pill bg-success'>Completed</div> 
                                                    @endif
                                                </td> 
                                                <td>{{$item->created_at->diffForHumans()}}</td>
                                                <td>
                                                    <a href="{{route("staff.ticket.view_ticket",$item->ticket_no)}}" class="edit btn btn-primary btn-sm">View</a>
                                                    @if($item->status == 0)
                                                        |<a href="javascript:void(0)" onclick="ticket_approval_confirmation('{{$item->id}}','1')" data-id="approve" class="edit btn btn-success btn-sm">Approve</a> 
                                                        |<a href="javascript:void(0)" onclick="ticket_approval_confirmation('{{$item->id}}','2')" class="edit btn btn-warning btn-sm">Reject</a> 
                                                        |<a href="javascript:void(0)" onclick="ticket_approval_confirmation('{{$item->id}}','3')" class="edit btn btn-danger btn-sm">Close</a> 
                                                    @endif
                                                    @if($item->status == 1)
                                                        |<a href="javascript:void(0)" onclick="ticket_approval_confirmation('{{$item->id}}','2')" class="edit btn btn-warning btn-sm">Reject</a> 
                                                        |<a href="javascript:void(0)" onclick="ticket_approval_confirmation('{{$item->id}}','3')" class="edit btn btn-danger btn-sm">Close</a> 
                                                        @endif
                                                    @if($item->status == 2)
                                                        | <a href="javascript:void(0)" onclick="ticket_approval_confirmation('{{$item->id}}','1')" data-id="approve" class="edit btn btn-success btn-sm">Approve</a> 
                                                        |<a href="javascript:void(0)" onclick="ticket_approval_confirmation('{{$item->id}}','3')" class="edit btn btn-danger btn-sm">Close</a> 
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                        @else
                                            <tr>No data found.</tr> 
                                      @endif
                                    </tbody>
                                  </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
