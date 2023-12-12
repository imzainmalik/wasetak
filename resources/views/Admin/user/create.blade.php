@extends('Admin.layouts.master')
@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

               <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-10">
                            Create Users
                        </div>
                        <div class="col-2 d-flex justify-content-end">
                            <a href="{{ route('admin.users.index') }}" class="btn btn-primary"><i class="fa fa-plus"></i>  View all Users</a>
                        </div>
                    </div>
                </div>

                    <div class="card-body">
                        
                        
                        
                    </div>
               </div>
 
            </div>
        </div>
    </div>
@endsection