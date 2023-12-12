@extends('Admin.layouts.master')
@section('content')


    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <table class="table table-bordered data-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>User</th>
                            <th>Category</th>
                            <th>Title</th>
                            <th>Post Type</th>
                            <th>Price</th>
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

@endsection

@section('custom_scripts')

<script type="text/javascript">
    $(function () {
        
      var table = $('.data-table').DataTable({
          processing: true,
          serverSide: true,
          ajax: "{{ route('admin.post.index') }}",
          columns: [
              {data: 'id', name: 'id'},
              {data: 'user_info', name: 'user_info'},
              {data: 'Category', name: 'Category'},
              {data: 'Title', name: 'Title'},
              {data: 'Post_type', name: 'Post_type'},
              {data: 'Price', name: 'Price'},
              {data: 'status', name: 'status'},
              {data: 'date_created', name: 'date_created'},
              {data: 'action', name: 'action', orderable: false, searchable: false},
          ]
      });
        
    });
  </script>

@endsection