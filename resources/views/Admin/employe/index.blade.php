@extends('Admin.layouts.master')
@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-2">
                                <h3>All Employes</h3>
                            </div>
                            <div class="col-10 d-flex justify-content-end">
                                <a href="{{ route('admin.employes.add') }}" class="btn btn-primary">Create Staff members</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered data-table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Display Picture</th>
                                    <th>Username</th>
                                    <th>Account Lable</th>
                                    <th>Current Status</th>
                                    <th>Created At</th>
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
@endsection
@section('custom_scripts')
    <script type="text/javascript">
        $(function() {

            var table = $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('admin.employes.index') }}",
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'd_picture',
                        name: 'd_picture'
                    },
                    {
                        data: 'username',
                        name: 'username'
                    },
                    {
                        data: 'acc_lable',
                        name: 'acc_lable'
                    },

                    {
                        data: 'acc_status',
                        name: 'acc_status'
                    },
                    {
                        data: 'created_at',
                        name: 'created_at'
                    },
                    {
                        data: 'action',
                        name: 'action'
                    },
                ]
            });

        });
    </script>
@endsection
