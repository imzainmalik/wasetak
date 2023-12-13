@extends('Admin.layouts.master')
@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-10">
                                <h3>All Flaged Post By Users</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered data-table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Reported By</th>
                                    <th>Post Details</th>
                                    <th>Posted By</th>
                                    <th>Reason</th>
                                     <th>CreatedAt</th>
                                    <th width="100px">Actions</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('custom_scripts')
    <script type="text/javascript">
        $(function() {

            var table = $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('admin.flagged.post.index') }}",
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'reported_by',
                        name: 'reported_by'
                    }, 
                    {
                        data: 'post_details',
                        name: 'post_details'
                    }, 
                    {
                        data: 'posted_by',
                        name: 'posted_by'
                    },
                    {
                        data: 'reason',
                        name: 'reason'
                    },
                    {
                        data: 'created_at',
                        name: 'created_at'
                    },
                    {
                        data: 'actions',
                        name: 'actions'
                    },
                ]
            });

        });
    </script>
@endsection