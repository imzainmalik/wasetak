
@extends('User.layouts.master')


@section('content')

<style>
    
</style>

@if(isset($error) && !empty($error))
<div class="inner_page_container after_registration">
  <div class="container">
      <div class="after_registration_box5">
        Sorry, this account confirmation link is no longer valid. Perhaps your account is already active?
      </div>
  </div>
</div>

@else



<div class="inner_page_container after_registration" >
  <div class="container" id="resend_div">
      <div >
        <h1>Welcome to Wasetak <img src="{{asset('user_asset/img/hand.png')}}"></h1>
        <div class="after_registration_box">
            <img src="{{asset('user_asset/img/email-lg.png')}}">
            <p>You’re almost done! We sent an activation mail to <b>{{$user->email}}.</b> Please follow the instructions in the mail to activate your account. <br> <br> If it doesn’t arrive, check your spam folder</p>
            <div class="btn-group">
            <button class="button button-red" id="btn_resend_activation_email" onclick="resendActivationMail(this)"><img src="{{asset('user_asset/img/email.png')}}" >
                    <div class="spinner-border" role="status" style="display: none">
                        <span class="sr-only"></span>
                    </div>Resend Activation Email
                </button>
            <button class="button" onclick="location.href = '<?php echo route('user.changeRegisterEmail',[$user->verification_token]) ?>'"><img src="{{asset('user_asset/img/pencil.png')}}" > Change Email Address</button>
            </div>
        </div>
      </div>
      
  </div>
  <div class="container d-none" id="resend_success_div">
      <div class="after_registration_box3">
        <p>We sent another activation email to you at <b>{{$user->email}}.</b> It might take a few minutes for it to arrive; be sure to check your spam folder.</p>
      </div>
  </div>
</div>

@endif


@endsection

@push('js')
<script>
    
    function resendActivationMail(event){
        var element_id = $(event).attr('id');
        $.ajax({
            url: "{{ route('user.resendVerificationMail') }}",
            type: "POST",
            data: {verificationToken : "{{@$user->verification_token}}"},
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
                    toastr.options = {
                        "closeButton": true,
                    }
                    // toastr.success(data.msg);
                   $('#resend_success_div').removeClass('d-none');
                   $('#resend_div').addClass('d-none');
                } else {
                    console.log("false");
                }
            }
        });
    }

    
</script>
@endpush

