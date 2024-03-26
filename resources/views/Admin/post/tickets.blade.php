@extends('Admin.layouts.master')
@section('content')


<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-10">
                            <h3>All Tickets</h3>
                        </div>
                        <div class="col-2 d-flex justify-content-end">
                            <a href="{{ route('admin.post.tickets') }}" class="btn btn-primary"><i class="fa fa-eye"></i>
                                View all</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered data-table">
                        <thead>
                            <tr>
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
                        </tbody>
                    </table>
                </div>
            </div>
        </div> 
    </div>
</div>

    @section('custom_scripts')
        <script type="text/javascript"> 
            $(function() {

                var table = $('.data-table').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('admin.post.tickets') }}",
                    columns: [
                        
                        {
                            data: 'buyer_info',
                            name: 'buyer_info'
                        },
                        {
                            data: 'seller_info',
                            name: 'seller_info'
                        },
                        {
                            data: 'ticket_no',
                            name: 'ticket_no'
                        },
                        {
                            data: 'service_rate',
                            name: 'service_rate'
                        },
                        {
                            data: 'transaction_amount',
                            name: 'transaction_amount'
                        }, 
                        {
                            data: 'status',
                            name: 'status'
                        },
                        {
                            data: 'date_created',
                            name: 'date_created'
                        },
                        {
                            data: 'action',
                            name: 'action',
                            orderable: false,
                            searchable: false
                        },
                    ]
                });

            });
        </script>
    @endsection
@endsection