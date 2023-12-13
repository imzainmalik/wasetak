@extends('Admin.layouts.master')
@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-10">
                                <h3>Create Users</h3>
                            </div>
                            <div class="col-2 d-flex justify-content-end">
                                <a href="{{ route('admin.users.index') }}" class="btn btn-primary"><i class="fa fa-plus"></i>
                                    View all Users</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="container">
                            <form action="{{ route('admin.users.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="col-12">
                                    <label for="">Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Name" required
                                        id="">
                                </div>
                                <div class="col-12 py-4">
                                    <label for="">Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Email" required
                                        id="">
                                </div>
                                <div class="col-12 py-4">
                                    <label for="">Username</label>
                                    <input type="text" name="username" class="form-control" placeholder="Username"
                                        required id="">
                                </div>

                                <div class="col-12 py-4">
                                    <label for="">Display picture</label>
                                    <input type="file" name="d_picture" class="form-control" required id="">
                                </div>
                                <div class="col-12 py-4">
                                    <label for="">Account password</label>
                                    <input type="text" name="password" class="form-control" value="12345678" required
                                        id="">
                                </div>
                                <div class="col-12 py-4">
                                    <label for="">Select role</label>
                                    <select name="role" id="" class="form-control" required>
                                        <option value="">Select role</option>
                                        <option value="admin">Admin</option>
                                        <option value="user">User</option>

                                    </select>
                                </div>

                                <div class="col-12 py-4">
                                    <div class="row">
                                        <div class="col-4">
                                            <input class="form-check-input" type="checkbox" name="credentials"
                                                id="credentials">
                                            <label class="form-check-label" for="credentials">
                                                Send credentials in Email
                                            </label>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-12 py-4">
                                    <button class="btn btn-primary">Create User</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
