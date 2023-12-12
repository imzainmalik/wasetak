@extends('Admin.layouts.master')
@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

               <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-10">
                            All Users
                        </div>
                        <div class="col-2 d-flex justify-content-end">
                            <a href="{{ route('admin.users.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i>  Create Users</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table table-bordered data-table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>isEmailVerified?</th> 
                                <th>CreatedAt</th>
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
    $(function () {
        
      var table = $('.data-table').DataTable({
          processing: true,
          serverSide: true,
          ajax: "{{ route('admin.users.index') }}",
          columns: [
            {data: 'id', name: 'id'},
               {data: 'name', name: 'name'},
              {data: 'username', name: 'username'},
              {data: 'email', name: 'email'},
              {data: 'isEmail_Verified', name: 'isEmail_Verified'}, 
              {data: 'date_created', name: 'date_created'},
           ]
      });
        
    });
  </script>

@endsection