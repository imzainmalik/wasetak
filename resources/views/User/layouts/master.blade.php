<!DOCTYPE html>
<html lang="en" dir="rtl">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" href="img/fav.png" sizes="16x16" type="image/png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
        <title>Wasetak | Homepage</title>
        <link rel="stylesheet" href="{{ asset('user_asset/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('user_asset/fonts/remix/remixicon.css') }}" type="text/css">
        @stack('text_editor_css')
        <link rel="stylesheet" href="{{ asset('user_asset/css/style.css') }}" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

        <style>
            .error-message{
                color:#F26D85;
            }
            
           
        </style>
        @stack('css')
    </head>


    <body>
        @include('User.layouts.nav')

        @include('User.layouts.sub-header')

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong>{{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong>{{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        @yield('content')
        @if(!Auth::check())
            <!-- Reset Popup -->
            <div class="modal fade" id="reset_password" tabindex="-1" data-bs-backdrop='static'>
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="modal-body">
                            <h4>Password Reset</h4>
                            <p>.Enter your email address, and we'll send you a password reset email</p>
                            <form class="needs-validation resetForm">
                                @csrf
                                <span class="error-message"></span>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" id="reset_email" class="form-control" name="email" placeholder="Enter Your Email"
                                        required="">
                                        @if ($errors->has('email'))
                                            <span class="text-danger"><i class="fa-solid fa-triangle-exclamation"></i> An error occurred. You supplied invalid parameters to the request login.. </span>
                                        @endif
                                </div>
                                <div class="mb-3 d-grid">
                                    <button type="submit" class="resetButton button" style="color: white;background: #f26d85;">
                                        Reset Password
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Reset SuccessMsg Modal -->
            <div class="modal fade" id="reset_msg" tabindex="-1" data-bs-backdrop='static'>
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="modal-body">
                            <h4>Password Reset</h4>
                            <p class="resetMsg"></p>
                            <div class="mb-3 d-grid">
                                <button type="button" class="button closeResetInfoModal" style="color: white;background: #f26d85;max-width: 70px;" data-bs-dismiss="modal">Ok</button>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        
            <!-- Login Popup -->
            <div class="modal fade" id="login" tabindex="-1" data-bs-backdrop='static'>
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="modal-body">
                            <h4>Welcome Back</h4>
                            <p>Login to your account</p>
                            <form class="needs-validation loginForm">
                                @csrf
                                <span class="login-error-message error-message"></span>
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="Email / Username"
                                        name="email_or_username" required id="login_email_or_username">
                                        <label class="input_label"></label>
                                </div>
                                <div class="show_direct_login_link mb-3 error-message"></div>
                                <div class="mb-3">
                                    <div class="abs_input">
                                        <input type="password" class="form-control" placeholder="Password" name="loginPassword"
                                            id="loginPassword" required>
                                        <div class="abs_icon"><a href="#" id="loginTogglePassword"><img src="{{ asset('user_asset/img/eye.png') }}"><img src="{{ asset('user_asset/img/eye-fill.png') }}" class="eye_fill_show"></a></div>
                                    </div>
                                    <label class="input_label"></label>
                                </div> 
                                <div class="d-flex links">
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#reset_password">I forgot my Password</a>
                                    {{-- {{ route('forget.password.get') }} --}}
                                    <!-- <a href="" >I forgot my Password</a> -->
                                   
                                </div>
                                <div class="d-flex align-items-center">
                                    
                                    <button class="button loginpButton"><div class="spinner-border spinner-border-login" role="status" style="display: none">
                                        <span class="sr-only"></span>
                                    </div> Login</button>
                                    <span>Don’t have an account ? <a href="#" class="dontHaveAccount">Sign up</a></span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

             <!-- Login with username Popup -->
             <!-- <div class="modal fade" id="login-with-username" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="modal-body">
                            <h4>Login</h4>
                            <p> You have requested us to send a link to automatically login base on username </p>
                            <form class="needs-validation loginpWithUserNameForm">
                                @csrf
                                <span class="error-message"></span>
                                <div class="mb-3">
                                    <input type="text" class="form-control username" placeholder="Username"
                                        name="username" required>
                                        <label class="input_label"></label>
                                </div>
                                <div class="d-flex align-items-center">
                                    <button class="button loginpWithUserNameButton" type="submit"><div class="spinner-border spinner-border-login" role="status" style="display: none">
                                        <span class="sr-only"></span>
                                    </div> Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- Signup Popup -->
            <div class="modal fade" id="signup" tabindex="-1" data-bs-backdrop='static'>
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="modal-body">
                            <h4>! HELLO</h4>
                            <p>Welcome to wasetak</p>
                            <form class="needs-validation registerForm" novalidate>
                                @csrf
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="Email" name="email"
                                        id="email" required>
                                        <label id="email-confirm-warning-label" class="error-warning d-none" for="email">We will email you to confirm.</label>
                                        <label class="input_label">Never shown to the public.</label>
                                        
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="Username" id="username"
                                        name="username" required>
                                        <label id="signup-username-other-error" class="label-error d-none" for="username"></label>
                                        <label class="input_label">unique, no spaces, short</label>
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="First name and Last name" name="name"
                                        required>
                                        <label class="input_label">Your Full name</label>
                                </div>
                                <!-- <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="First name" name="first_name"
                                        required>
                                        <label class="input_label">Your first name</label>
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="Last name" name="last_name"
                                        required>
                                        <label class="input_label">Your Last name</label>
                                </div> -->
                                
                                
                                <div class="mb-3">
                                    <div class="abs_input">
                                        <input type="password" class="form-control password" placeholder="Password" name="password"
                                            id="password" required>
                                        <div class="abs_icon"><a href="#" id="togglePassword"><img src="{{ asset('user_asset/img/eye.png') }}"><img src="{{ asset('user_asset/img/eye-fill.png') }}" class="eye_fill_show"></a></div>
                                    </div>
                                    <label class="input_label">at least 12 characters</label>
                                </div>
                                <div class="terms form-check" id="termserror">
                                    <label class="input_label"><span class="required">*</span> Privacy Confirmation</label>
                                    <span id="checkbox-error" class="error"></span>
                                    <label for="terms" class="form-check-label"> I agree to Wasetak <a href="#">Privacy Policy</a> and  <a href="#">Terms of Service</a></label>
                                    <input id="terms" class="form-check-input" type="checkbox" name="terms" />
                                </div>
                                
                                
                                <div class="d-flex align-items-center mt-4">
                                    <button class="button signUpButton" type="submit">Sign up <span class="spinner-border spinner-border-signup" role="status" style="display:none"></span></button>
                                    <span>Already have an account ? <a href="#" class="alreadyAccount">Login</a></span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        @include('User.layouts.footer')

        <script src="{{ asset('user_asset/js/jquery.min.js') }}"></script>
        <script src="{{ asset('user_asset/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('user_asset/js/main.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        @if(!Auth::check())
            <script>
                $( document ).ready(function() {
                    $(document).on('click', '.alreadyAccount', function() {
                        $("#signup").modal('hide');
                        $("#login").modal('show');
                    });
                    
                    $(document).on('keyup', '#email', function() {
                        $('#email-confirm-warning-label').addClass('d-none');
                    });
                    

                    $(document).on('click', '.dontHaveAccount', function() {
                        $("#login").modal('hide');
                        $("#signup").modal('show');
                    });

                    $(document).on('click', '#togglePassword', function() {
                        var passwordField = $('#password');
                        var passwordFieldType = passwordField.attr('type');
                        if (passwordFieldType === 'password') {
                            passwordField.attr('type', 'text');
                            $('#togglePassword').removeClass('eye').addClass('eye-fill');
                        } else {
                            passwordField.attr('type', 'password');
                            $('#togglePassword').removeClass('eye-fill').addClass('eye');
                        }
                        return false;
                    });
                    
                    $(document).on('keyup', '#login_email_or_username', function() {
                        
                        var txt_value = $('#login_email_or_username').val();
                        if(txt_value.trim().length > 0){
                            $('.show_direct_login_link').html(`<a href="javascript:sendLoginLink()" style="color: #F26D85 !important;"> <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Skip the password email me a login link</a>`)
                        }else{
                            $('.show_direct_login_link').html();
                        }
                        
                        return false;
                    });
                    
                    $(document).on('click', '#loginTogglePassword', function() {
                        var passwordField = $('#loginPassword');
                        var passwordFieldType = passwordField.attr('type');
                        if (passwordFieldType === 'password') {
                            passwordField.attr('type', 'text');
                            $('#loginTogglePassword').removeClass('eye').addClass('eye-fill');
                        } else {
                            passwordField.attr('type', 'password');
                            $('#loginTogglePassword').removeClass('eye-fill').addClass('eye');
                        }
                        return false;
                    });
                    
                    var registerForm = $(".registerForm").validate({
                        rules: {
                            first_name: {
                                required: true,
                            },
                            last_name: {
                                required: true,
                            },
                            username: {
                                required: true,
                                remote: {
                                    
                                    url: "{{ route('user.check-username') }}",
                                    type: "post",
                                    data: {
                                        username: function() {
                                            return $("#username").val();
                                        },
                                        _token: $('meta[name="csrf-token"]').attr('content')
                                    },
                                    beforeSend: function() {
                                        $('#signup-username-other-error').text('Checking username availability...');
                                        $('#signup-username-other-error').removeClass('d-none');
                                    },
                                    dataFilter: function(response) {
                                        var jsonResponse = JSON.parse(response);
                                        if (jsonResponse.valid == true) {
                                            $('#signup-username-other-error').text('Not available. Try '+$("#username").val()+'?');
                                            $('#signup-username-other-error').removeClass('d-none');
                                            return true;
                                        } else {
                                            $('#signup-username-other-error').text('')
                                            $('#signup-username-other-error').addClass('d-none');
                                            var message = "This username is already registered.";
                                            return "\"" + message + "\"";
                                        }
                                    }
                                }
                            },
                            email: {
                                required: true,
                                email: true,
                                remote: {
                                    url: "{{ route('user.check-email') }}",
                                    type: "post",
                                    data: {
                                        email: function() {
                                            return $("#email").val();
                                        },
                                        _token: $('meta[name="csrf-token"]').attr('content')
                                    },
                                    dataFilter: function(response) {
                                        var jsonResponse = JSON.parse(response);
                                        if (jsonResponse.valid == true) {
                                            $('#email-confirm-warning-label').removeClass('d-none');
                                            return true;
                                        } else {
                                            $('#email-confirm-warning-label').addClass('d-none');
                                            var message = "This email is already registered.";
                                            return "\"" + message + "\"";
                                        }
                                    }
                                }
                            },
                            password: {
                                required: true,
                                minlength: 12
                            },
                            terms: {
                                required: true
                            },
                        },
                        messages: {
                            first_name:{
                                required: "First name is required"
                            },
                            last_name:{
                                required: "Last name is required"
                            },
                            username:{
                                required: "Username is required"
                            },
                            name:{
                                required: "First name and last name is required"
                            },
                            password:{
                                required: "Password is required"
                            },
                            email: {
                                required: "Email is required",
                                remote: "This email is already registered"
                            },
                            terms: {
                                required: "Please accept the terms and conditions"
                            }
                        },
                        errorPlacement: function(error, element) {
                            if (element.attr("name") == "email") {
                                $('#email-confirm-warning-label').addClass('d-none');
                            }
                            if (element.attr("name") == "terms") {
                                error.insertAfter("#termserror");
                            } else {
                                error.insertAfter(element);
                            }
                        }, 
                        submitHandler: function(form) {
                            var formData = $('.registerForm').serialize();
                            $.ajax({
                                url: "{{ route('user.register') }}",
                                type: "POST",
                                data: formData,
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                                beforeSend: function() {
                                    $(".spinner-border-signup").css('display', 'block');
                                    $(".signUpButton").prop('disabled', true);
                                },
                                success: function(data) {
                                    console.log(data)
                                    if (data.status == true) {
                                        // $("#spinner-border-signup").css('display', 'none');
                                        // $(".signUpButton").prop('disabled', false);
                                        // toastr.options = {
                                        //     "closeButton": true,
                                        // }
                                        // toastr.success(data.msg);
                                        // setTimeout(function () {
                                            window.location.href = "{{ url('register-verification') }}/"+data.token;
                                        // }, 500);
                                        
                                    } else {
                                        console.log("false");
                                    }
                                }
                            });
                            return false;
                        },
                    });

                    var loginForm = $(".loginForm").validate({
                        rules: {
                            email_or_username: {
                                required: true,
                                remote: {
                                    url: "{{ route('user.username-exist') }}",
                                    type: "post",
                                    data: {
                                        username: function() {
                                            return $(".email_or_username").val();
                                        },
                                        _token: $('meta[name="csrf-token"]').attr('content')
                                    },
                                    dataFilter: function(response) {
                                        var jsonResponse = JSON.parse(response);
                                        if (jsonResponse.valid == true) {
                                            return true;
                                            // $('.show_direct_login_link').html(`<a href="javascript:sendLoginLink()" style="color: #F26D85 !important;"> <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Skip the password email me a login link</a>`)
                                        } else {
                                            return true;
                                            
                                        }
                                    }
                                }
                            },
                            loginPassword: {
                                required: true,
                            },
                        },
                        messages: {
                            email_or_username:{
                                required: "Email or Username is required"
                            },
                            loginPassword:{
                                required: "Password is required"
                            }
                        },
                        errorPlacement: function(error, element) {
                            if (element.attr("name") == "email_or_username") {
                               $('.show_direct_login_link').html('');
                            }
                            if (element.attr("name") == "terms") {
                                error.insertAfter("#termserror");
                            } else {
                                error.insertAfter(element);
                            }
                        }, 
                        submitHandler: function(form) {
                            var formData = $('.loginForm').serialize();
                                console.log(formData);
                                $.ajax({
                                    url: "{{ route('user.login') }}",
                                type: "POST",
                                data: formData,
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                                beforeSend: function() {
                                    $(".spinner-border-login").css('display', 'block');
                                    $(".loginpButton").prop('disabled', true);
                                },
                                success: function(response) {
                                    if (response == true) {
                                        $(".spinner-border-login").css('display', 'none');
                                        $(".loginpButton").prop('disabled', false);
                                        window.location.href = "{{ route('user.profile') }}";
                                    } else {
                                        $(".spinner-border-login").css('display', 'none');
                                        $(".loginpButton").prop('disabled', false);
                                        
                                        if(response.is_verify == false){
                                            $('.login-error-message').text(response.message);
                                            setTimeout(function () {
                                                location.reload(true);
                                            }, 7000);
                                        }else{
                                            $('.login-error-message').text("you have entered invalid credentials");
                                        }
                                    }
                                },
                                // error: function(jqXHR, textStatus, errorThrown) {
                                    //     var errors = jqXHR.responseJSON.error;
                                    //     $('.error-message').text(errors);
                                    // }
                            });
                            return false;
                        },
                    });

                    // $(".loginpWithUserNameForm").validate({
                    //     rules: {
                    //         username: {
                    //             required: true,
                    //         }
                    //     },
                    //     messages: {
                    //         username:{
                    //             required: "Username is required"
                    //         }
                    //     },
                    //     submitHandler: function(form) {
                    //         getUserName = $('.username').val().trim();    
                    //         url = "{{ route('getLoginLink',[':username']) }}";
                    //         url = url.replaceAll(':username',getUserName)
                    //         console.log(url)
                    //         $.ajax({
                    //             url: url,
                    //             type: "GET",
                    //             headers: {
                    //                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    //             },
                    //             beforeSend: function() {
                    //                 $(".spinner-border-login").css('display', 'block');
                    //                 $(".loginpWithUserNameButton").prop('disabled', true);
                    //             },
                    //             success: function(response) {
                    //                 if (response.status == true) {
                    //                     $(".spinner-border-login").css('display', 'none');
                    //                     $(".loginpWithUserNameButton").prop('disabled', false);
                    //                     toastr.options = {
                    //                         "closeButton": true,
                    //                     }
                    //                     toastr.success(response.msg);
                    //                     setTimeout(function () {
                    //                         location.reload(true);
                    //                     }, 7000);
                    //                 } else {
                    //                     $(".spinner-border-login").css('display', 'none');
                    //                     $(".loginpWithUserNameButton").prop('disabled', false);
                    //                     toastr.error(response.msg);
                    //                     // $('.error-message').text("you have entered invalid credentials");
                    //                 }
                    //             },
                    //             error: function(jqXHR, textStatus, errorThrown) {
                    //                     var errors = jqXHR.responseJSON.error;
                    //                     $('.error-message').text(errors);
                    //             }
                    //         });        
                    //         return false;
                    //     },
                    // });

                    $(".resetForm").validate({
                        rules: {
                            email: {
                                required: true,
                                email: true,
                                remote: {
                                    url: "{{ route('user.check-email') }}",
                                    type: "post",
                                    data: {
                                        email: function() {
                                            return $("#reset_email").val();
                                        },
                                        _token: $('meta[name="csrf-token"]').attr('content')
                                    },
                                    dataFilter: function(response) {
                                        console.log(response)
                                        var jsonResponse = JSON.parse(response);
                                        if (jsonResponse.valid == false) {
                                            return true;
                                        } else {
                                            var message = "An error occur: You supplied invalid parameters to the request: login";
                                            return "\"" + message + "\"";
                                        }
                                    }
                                }
                            }
                        },
                        messages: {
                            email:{
                                required: "Email is required",
                                email: "An error occur: You supplied invalid parameters to the request: login"
                            }
                        },
                        submitHandler: function(form) {
                            var formData = $('.resetForm').serialize();
                            url = "{{ route('forget.password.post') }}";
                            $.ajax({
                                url: url,
                                type: "POST",
                                data: formData,
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                                beforeSend: function() {
                                    $(".spinner-border-login").css('display', 'block');
                                    $(".resetButton").prop('disabled', true);
                                },
                                success: function(response) {
                                    console.log(response);
                                    if (response.status == true) {
                                        $(".spinner-border-login").css('display', 'none');
                                        $(".resetButton").prop('disabled', false);
                                        toastr.options = {
                                            "closeButton": true,
                                        }
                                        // toastr.success(response.msg);
                                        $('.resetMsg').text(response.msg)
                                        $('#reset_password').modal('toggle');
                                        $('#reset_msg').modal('toggle');
                                    } else {
                                        console.log(response);
                                        $(".spinner-border-login").css('display', 'none');
                                        $(".resetButton").prop('disabled', false);
                                        $('.error-message').text('Somethig went wrong');
                                    }
                                },
                                error: function(jqXHR, textStatus, errorThrown) {
                                    errorObj = JSON.parse(jqXHR.responseText)
                                    toastr.error(errorObj.message);
                                    var errors = jqXHR.responseJSON.error;
                                    $('.error-message').text(errors);
                                }
                            });        
                            return false;
                        },
                    });

                    $('#signup').on('hidden.bs.modal', function () {
                        $(".registerForm")[0].reset();
                        $('.error-message').text('');
                        registerForm.resetForm();
                    });

                    $('#login').on('hidden.bs.modal', function () {
                        $(".loginForm")[0].reset();
                        $('.error-message,.login-error-message').text('');
                        loginForm.resetForm();
                    });

                });
            function sendLoginLink(){  
                getUserName = $("input[name=email_or_username]").val();
                url = "{{ route('getLoginLink',[':username']) }}";
                url = url.replaceAll(':username',getUserName)
                console.log(url)
                $.ajax({
                    url: url,
                    type: "GET",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        if (response.status == true) {
                            toastr.options = {
                                "closeButton": true,
                            }
                            toastr.success(response.msg);
                            // setTimeout(function () {
                            //     location.reload(true);
                            // }, 7000);
                            
                            $('.show_direct_login_link').html(`<a href="javascript:;" style="color: #F26D85 !important;"> <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> If an account matches the username ${getUserName}. you should receive an email with a login link shortly.</a>`)
                        } else {
                            toastr.error(response.msg);
                            // $('.error-message').text("you have entered invalid credentials");
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                            var errors = jqXHR.responseJSON.error;
                            $('.error-message').text(errors);
                    }
                });      
            } 
            
        
            </script>
        @endif
        @stack('js')
    </body>

</html>
