
@extends('User.layouts.master')


@section('content')

<style>
   
</style>



@if(isset($error) && !empty($error))

<div class="inner_page_container after_registration @if(!isset($error) && empty($error)) d-none @endif" id="change_email_success_div">
  <div class="container">
      <div class="after_registration_box5">
        Sorry, this account confirmation link is no longer valid. Perhaps your account is already active?
      </div>
  </div>
</div>

@else

<div class="inner_page_container after_registration" >
    <div class="container mb-5" id="change_email_div">
       <div class="after_registration_box4">
          <p>Provide a new address and we'll resend your confirmation email.</p>
          <form class="needs-validation changeRegisterEmailForm" novalidate>
             @csrf
             <div class="mb-3">
                <input type="text" class="form-control" name="change_register_email" id="change_register_email">
                <label id="change-email-confirm-warning-label" style="position : inherit !important" class="error-warning d-none" for="email">We will email you to confirm.</label>
             </div>
             <div class="btn-group">
                <button class="button button-red" id="btn_change_register_email" type="submit">
                   <div class="spinner-border" role="status" style="display: none">
                      <span class="sr-only"></span>
                   </div>
                   Update Email Address
                </button>
                <button class="button" onclick="location.reload()">Cancel</button>
             </div>
          </form>
         
       </div>
   
    </div>
    <div class="container d-none mb-5" id="change_email_success_div">
      <div class="after_registration_box3">
         <p>We sent another activation email to you at <b id="email_b">.</b> It might take a few minutes for it to arrive; be sure to check your spam folder.</p>
      </div>
   </div>
</div>


@endif


@endsection

@push('js')
<script>

    $( document ).ready(function() {
        $('#change_register_email').on('keyup',function(){
            $('#email_b').text($(this).val());
            $('#change-email-confirm-warning-label').addClass('d-none');
        })
        var changeRegisterEmailForm = $(".changeRegisterEmailForm").validate({
            rules: {
               
                change_register_email: {
                    required: true,
                    email: true,
                    remote: {
                        url: "{{ route('user.check-email') }}",
                        type: "post",
                        data: {
                            email: function() {
                                return $("#change_register_email").val();
                            },
                            _token: $('meta[name="csrf-token"]').attr('content')
                        },
                        dataFilter: function(response) {
                            var jsonResponse = JSON.parse(response);
                            if (jsonResponse.valid == true) {
                                $('#change-email-confirm-warning-label').removeClass('d-none');
                                return true;
                            } else {
                                $('#change-email-confirm-warning-label').addClass('d-none');
                                var message = "This email is already registered.";
                                return "\"" + message + "\"";
                            }
                        }
                    }
                }
            },
            messages: {
                
                change_register_email: {
                    required: "Email is required",
                    remote: "This email is already registered"
                }
            },
            errorPlacement: function(error, element) {
                if(element.attr("name") == "change_register_email") {
                    $('#change-email-confirm-warning-label').addClass('d-none');
                }
                if (element.attr("name") == "terms") {
                    error.insertAfter("#termserror");
                } else {
                    error.insertAfter(element);
                }
            }, 
            submitHandler: function(form) {
                var formData = $('.registerForm').serialize();
                var element_id = 'btn_change_register_email';
                $.ajax({
                    url: "{{ route('user.changeRegisterEMail') }}",
                    type: "POST",
                    data: {verificationToken : "{{@$user->verification_token}}",newEmail:$("#change_register_email").val()},
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    beforeSend: function() {
                        $("#"+element_id+" .spinner-border").css('display', 'block');
                        $("#"+element_id).prop('disabled', true);
                    },
                    success: function(data) {
                        console.log(data)
                        if (data.status == true) {
                            // $("#"+element_id+" .spinner-border").css('display', 'none');
                            // $("#"+element_id).prop('disabled', false);
                            // toastr.options = {
                            //     "closeButton": true,
                            // }
                            // toastr.success(data.msg);
                            
                            $('#change_email_success_div').removeClass('d-none');
                            $('#change_email_div').addClass('d-none');
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

