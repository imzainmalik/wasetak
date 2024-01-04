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
        {{-- <link rel="stylesheet" href="{{ asset('user_asset/css/style.css') }}" type="text/css"> --}}
        <link rel="stylesheet" href="{{ asset('user_asset/css/layout.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('user_asset/css/custom.css') }}" type="text/css">
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
         {{-- Addto Any Start --}}
      
     
         <div class="modal fade" id="addtoany" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header  modal-header-css">
                  <h5 class="modal-title" id="exampleModalLongTitle">Share with Freinds</h5>
                </div>
                <div class="modal-body">
                   <!-- AddToAny BEGIN -->
                   <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                    <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
                    <a class="a2a_button_facebook"></a>
                    <a class="a2a_button_whatsapp"></a>
                    <a class="a2a_button_linkedin"></a>
                    <a class="a2a_button_threads"></a>
                </div>
                <script async src="https://static.addtoany.com/menu/page.js"></script>
                    <!-- AddToAny END -->
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
          
    {{-- AddToAny --}}
        @include('User.layouts.footer')
        @include('User.layouts.sweetalert')
        <script src="{{ asset('user_asset/js/jquery.min.js') }}"></script>
        <script src="{{ asset('user_asset/js/bootstrap.bundle.min.js') }}"></script>
        {{-- <script src="{{ asset('user_asset/js/main.js') }}"></script> --}}
        <script src="{{ asset('user_asset/js/custom.js') }}"></script>
        <script src="{{ asset('user_asset/js/jquery.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        @if(!Auth::check())
            <script>
                $( document ).ready(function() {
                   
                    $(".pop-trigger").click(function () {
                        $(".pop-content-hide").slideToggle();
                    });

                    $(".custom-date-trigger").click(function () {
                        $(".custom-time").slideDown();
                    });
                    $(".date_hide").click(function () {
                        $(".custom-time").slideUp();
                    });

                    $(document).on('click', '.login', function() {
                        $("#login").modal('show');
                    });

                
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
                                    if(response == "verify_code"){
                                        window.location.href = "/verify-login-code";
                                    }
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
