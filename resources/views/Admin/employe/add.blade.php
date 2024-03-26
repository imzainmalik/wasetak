@extends('Admin.layouts.master')
@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <h3>Create Staff members</h3>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <form action="{{ route('admin.employes.store') }}" method="post" enctype="multipart/form-data">
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
                                    <input type="text" name="username" onkeyup="checkusername()" id="username" class="form-control" placeholder="Username"
                                        required id="">
                                        <div id="message"></div>
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
                                    <label for="">Select Label</label>
                                    <select name="acc_lable" id="" class="form-control" required>
                                        <option value="">Select Label</option>
                                        <option value="1">Staff Member</option>
                                        <option value="2">Moderator</option>
                                        <option value="3">Admin</option>
                                        <option value="4">Staff Leader</option>
                                    </select>
                                </div>

                                <div class="col-12 py-4">
                                    <div class="row">
                                        <div class="col-4">
                                            <input class="form-check-input" type="checkbox" name="credentials" id="credentials">
                                            <label class="form-check-label" for="credentials">
                                                Send credentials in Email
                                            </label>
                                        </div> 
                                    </div>
                                </div>

                                <div class="col-12 py-4">
                                    <button class="btn btn-primary"id="sbt_btn">Create User</button>
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
        function checkusername(){
            var username = $('#username').val();
            $.ajax({
                'type': 'get',
                'url': '/admin/employes/findusername?username='+username+'', 
                success:function(response){ 
                    if(response.code == 403){
                        $('#message').html(response.message);
                        $('#sbt_btn').prop('disabled', true);
                    }else{
                        $('#sbt_btn').prop('disabled', false);
                        $('#message').html(response.message)
                    }
                }
            })
        }
    </script>
@endsection