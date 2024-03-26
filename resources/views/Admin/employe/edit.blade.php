@extends('Admin.layouts.master')
@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <h3>Edit staff member details</h3>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <form action="{{ route('admin.employes.update', [encrypt($details->email)]) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="col-12">
                                    <label for="">Name</label>
                                    <input type="text" name="name"
                                        value="{{ $details->name ?? $details->first_name . ' ' . $details->last_name }}"
                                        class="form-control" placeholder="Name" required id="">
                                </div>

                                <div class="col-12 py-4">
                                    <label for="">Email</label>
                                    <input type="email" name="email" value="{{ $details->email }}" class="form-control"
                                        placeholder="Email" required id="">
                                </div>
                                <div class="col-12 py-4">
                                    <label for="">Username</label>
                                    <input type="text" onkeyup="checkusername()" id="username" name="username"
                                        value="{{ $details->username }}" class="form-control" placeholder="Username"
                                        required id="">
                                    <div class="row"> 
                                        <div class="col-1" id="loader"
                                            style="margin-top: 26px; margin-right: -108px; display: none; ">
                                            <img src="{{ asset('assets/images/loading_2.gif') }}"
                                                alt=""style="width: 20px;" srcset="">
                                        </div>
                                        <div class="col-3">
                                            <div id="message"></div>
                                        </div> 
                                    </div>
                                </div>
                                <div class="col-12 py-4">
                                    <label for="">Display picture</label>
                                    <input type="file" name="d_picture" class="form-control" id="">
                                    <div class="container py-4">
                                        <img src="{{ asset($details->d_picture) }}" style="width: 50px;" alt="" class="img-thumbnail">
                                    </div>
                                </div>
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
                                <div class="col-12 py-4">
                                    <label for="">Select Label</label>
                                    <select name="acc_lable" id="" class="form-control" required>
                                        <option value="">Select Label</option>
                                        <option value="1" @if ($details->acc_lable == 1) selected @endif>Staff
                                            Member</option>
                                        <option value="2" @if ($details->acc_lable == 2) selected @endif>Moderator
                                        </option>
                                        <option value="3" @if ($details->acc_lable == 3) selected @endif>Admin
                                        </option>
                                        <option value="4" @if ($details->acc_lable == 4) selected @endif>Staff
                                            Leader</option>
                                    </select>
                                </div>
                                <div class="col-12 py-4">
                                    <button class="btn btn-primary" id="sbt_btn">Create User</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom_scripts')
    <script>
        function checkusername() {
            var username = $('#username').val();
            document.getElementById('loader').style.display = 'block';
            $.ajax({
                'type': 'get',
                'url': '/admin/employes/findusername?username=' + username + '&&user_id={{ $details->id }} ',
                success: function(response) {
                    if (response.code == 403) {
                        $('#message').html(response.message);
                        $('#sbt_btn').prop('disabled', true);
                        document.getElementById('loader').style.display = 'none';
                    } else {
                        $('#sbt_btn').prop('disabled', false);
                        $('#message').html(response.message)
                        document.getElementById('loader').style.display = 'none';
                    }
                }
            })
        }
    </script>
@endsection
