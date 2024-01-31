@extends('Admin.layouts.master')
@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-10">
                                <h3>Edit User</h3>
                            </div>
                            <div class="col-2 d-flex justify-content-end">
                                <a href="{{ route('admin.users.index') }}" class="btn btn-primary"><i class="fa fa-plus"></i>
                                    View all Users</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="container">
                            <form action="{{ route('admin.users.update', [$details->email]) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @if ($type == 'user')
                                <div class="col-12">
                                    <label for="">Name</label>
                                    <input type="text" name="name" value="{{ $details->name ?? $details->first_name.' '.$details->last_name}}" class="form-control"
                                        placeholder="Name" required id="">
                                </div>
                                @else
                                <div class="col-12">
                                    <label for="">First name</label>
                                    <input type="text" name="first_name" value="{{ $details->first_name }}" class="form-control"
                                        placeholder="First name" required id="">
                                </div>

                                <div class="col-12 py-4">
                                    <label for="">Last name</label>
                                    <input type="text" name="last_name" value="{{$details->last_name}}" class="form-control"
                                        placeholder="Last name" required id="">
                                </div>

                                @endif
                                <div class="col-12 py-4">
                                    <label for="">Email</label>
                                    <input type="email" name="email" value="{{ $details->email }}" class="form-control"
                                        placeholder="Email" required id="">
                                </div>
                                @if ($type == 'user')
                                    <div class="col-12 py-4">
                                        <label for="">Username</label>
                                        <input type="text" name="username" value="{{ $details->username }}"
                                            class="form-control" placeholder="Username" required id="">
                                    </div>
                                @endif
                                @if ($type == 'user')
                                <div class="col-12 py-4">
                                    <label for="">Display picture</label>
                                    <input type="file" name="d_picture" class="form-control" id="">
                                    <div class="container py-4">
                                        <img src="{{ asset('assets/images/users/' . $details->d_picture . ' ') }}"
                                            style="width: 50px;" alt="" class="img-thumbnail">
                                    </div>
                                </div>
                                @endif
                                <div class="col-12 py-4">
                                    <label for="">Account password</label>
                                    <input type="text" name="password" class="form-control" value="12345678" required
                                        id="">
                                </div>

                                <div class="col-12 py-4">
                                    <label for="">Account status</label>
                                    <select name="status" id="" class="form-control" required>
                                        <option value="">Account status</option>
                                        <option value="1" @if ($details->is_active == 1) selected @endif>Activate
                                        </option>
                                        <option value="0" @if ($details->is_active == 0) selected @endif>DeActive
                                        </option>

                                    </select>
                                </div>
                                {{-- <div class="col-12 py-4">
                                    <label for="">Select role</label>
                                    <select name="role" id="" class="form-control" required>
                                        <option value="">Select role</option>
                                        <option value="admin" @if ($type == 'admin') selected @endif>Admin</option>
                                        <option value="user" @if ($type == 'user') selected @endif>User</option>

                                    </select>
                                </div> --}}



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
