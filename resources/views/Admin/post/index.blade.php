@extends('Admin.layouts.master')
@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-10">
                                <h3>All posts </h3>
                            </div>
                            <div class="col-2 d-flex justify-content-end">
                                <a href="{{ route('admin.post.index') }}" class="btn btn-primary"><i class="fa fa-eye"></i>
                                    View all</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered data-table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>User</th>
                                    <th>Category</th>
                                    <th>Sub Category</th>
                                    <th>Title</th>
                                    <th>Post Type</th>
                                    <th>Price</th>
                                    <th>Post Views of All time</th>
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
@endsection

@section('custom_scripts')
    <script type="text/javascript">
        $(function() {

            var table = $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('admin.post.index') }}",
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'user_info',
                        name: 'user_info'
                    },
                    {
                        data: 'Category',
                        name: 'Category'
                    },
                    {
                        data: 'sub_category_id',
                        name: 'sub_category_id'
                    },
                    {
                        data: 'Title',
                        name: 'Title'
                    },
                    {
                        data: 'Post_type',
                        name: 'Post_type'
                    },
                    {
                        data: 'Price',
                        name: 'Price'
                    },
                    {
                        data: 'total_views',
                        name: 'total_views'
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
