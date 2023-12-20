@extends('Admin.layouts.master')
@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-10">
                                <h4>All Category</h4>
                            </div>
                            <div class="col-2 d-flex justify-content-end">
                                <a href="{{ route('admin.category.create') }}" class="btn btn-primary"><i
                                        class="fa fa-plus"></i>
                                    Create Category</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">

                        <br />
                        <table class="table table-bordered data-table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Color</th>
                                    <th>Status</th>
                                    <th width="100px">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{-- <div class="container">
            <div class="row">
                <div class="col-sm-12">  
                <a href="{{ route('admin.category.create') }}" class="btn btn-primary"> Create Category</a> 
                </div>
            </div>
            <br/>
        </div>
         <div class="row">
            <div class="col-sm-12">
                <table class="table table-bordered data-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>    
                            <th>Description</th>    
                            <th>Color</th>    
                            <th>Status</th>    
                            <th width="100px">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div> --}}
        </div>
    </div>

@section('custom_scripts')
    <script type="text/javascript">
        $(function() {
            var table = $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('admin.category.index') }}",
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'description',
                        name: 'description'
                    },
                    {
                        data: 'color',
                        name: 'color'
                    },
                    {
                        data: 'status',
                        name: 'status'
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
