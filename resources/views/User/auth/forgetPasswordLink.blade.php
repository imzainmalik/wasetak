
@extends('User.layouts.master')


@section('content')

<style>
    .after_registration_box4 h1 {
        font-size: 24px;
        text-align: right;
        margin-bottom: 15px;
    }

    .after_registration_box4 {
        display: flex;
    }

    .after_registration_box4 .form {
        flex: 0 0 330px;
        width: 100%;
    }
</style>

<div class="inner_page_container after_registration">
  <div class="container">
      <div class="after_registration_box4" style="align-items:center">
        <div class="icon">
            <img src="{{asset('user_asset/img/lock.png')}}" />
        </div>
        <div class="form" id="reset_password_form_div">
            <h1>Choose a password</h1>
            <form class="needs-validation resetPasswordForm" novalidate>
                <input type="hidden" id="email_address" class="form-control" name="email" value="{{$emailData->email}}" readonly autofocus>
                <input type="hidden" id="token" class="form-control" name="token" value="{{$emailData->token}}" readonly autofocus>
                <div class="abs_input">
                    <input type="password" id="reset_password" class="form-control" name="password" required autofocus>
                    <div class="abs_icon" style="transform: none;top: 18px;"><a href="#" id="resetTogglePassword"><img src="{{ asset('user_asset/img/eye.png') }}"><img src="{{ asset('user_asset/img/eye-fill.png') }}" class="eye_fill_show"></a></div>
                </div>
                <label class="input_label"></label>
                <div class="btn-group">
                    <button class="button button-red resetPasswordButton" type="submit">Set Password <span class="spinner-border spinner-border-reset-password" role="status" style="display:none"></span></button>
                </div>
            </form>
        </div>
        <div class="form d-none" id="reset_password_form_success_div">
            <p style="margin:0px;position: relative;top: 32px;">your password successfully Changed.</p>
        </div>
        
      </div>
  </div>
</div>



@endsection

@push('js')
<script>
    

    $( document ).ready(function() {

        $(document).on('click', '#resetTogglePassword', function() {
            var passwordField = $('#reset_password');
            var passwordFieldType = passwordField.attr('type');
            if (passwordFieldType === 'password') {
                passwordField.attr('type', 'text');
                $('#resetTogglePassword').removeClass('eye').addClass('eye-fill');
            } else {
                passwordField.attr('type', 'password');
                $('#resetTogglePassword').removeClass('eye-fill').addClass('eye');
            }
            return false;
        });

        var resetPasswordForm = $(".resetPasswordForm").validate({
            rules: {
                
                password: {
                    required: true,
                    minlength: 12
                }
            },
            messages: {
                
                password:{
                    required: "Password is required"
                }
            },
            errorPlacement: function(error, element) {
                if (element.attr("name") == "terms") {
                    error.insertAfter("#termserror");
                } else {
                    error.insertAfter(element);
                }
            }, 
            submitHandler: function(form) {
                var formData = $('.resetPasswordForm').serialize();
                $.ajax({
                    url: "{{ route('reset.password.post') }}",
                    type: "POST",
                    data: formData,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    beforeSend: function() {
                        $(".spinner-border-reset-password").css('display', 'block');
                        $(".resetPasswordButton").prop('disabled', true);
                    },
                    success: function(data) {
                        console.log(data)
                        if (data.status == true) {
                            $("#spinner-border-reset-password").css('display', 'none');
                            $(".resetPasswordButton").prop('disabled', false);
                            toastr.options = {
                                "closeButton": true,
                            }
                            setTimeout(function () {
                                window.location.href = "{{ url('/') }}";
                            }, 1000);
                            $('#reset_password_form_div').addClass('d-none')
                            $('#reset_password_form_success_div').removeClass('d-none')
                            //
                        } else {
                            console.log("false");
                        }
                    }
                });
                return false;
            },
        });

    });
</script>
@endpush

