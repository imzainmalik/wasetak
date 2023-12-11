
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
  <div class="container" id="activate_account_div">
      
        <h1>Welcome to Wasetak <img src="{{asset('user_asset/img/hand.png')}}"></h1>
        <div class="after_registration_box2">
            <div class="btn-group">
              <button class="button button-red" id="btn_activate_account" onclick=activateAccount(this)><div class="spinner-border" role="status" style="display: none">
                        <span class="sr-only"></span>
                    </div>Click here to activate your account</button>
            </div>
         </div>
      
      
  </div>
  <div class="container d-none" id="activate_account_success_div">
      <h1>Welcome to Wasetak <img src="{{asset('user_asset/img/hand.png')}}"></h1>
        <div class="after_registration_box">
            <img src="{{asset('user_asset/img/Group.png')}}">
            <p>You’re new account is confirmed, you will be redirected to the home page.</p>
            <div class="btn-group" style="margin: 0 0 0 auto;display: table;">
            
            <button class="button" onclick="location.href = '<?php echo url('/') ?>'">Continue to {{config('app.name')}}</button>
            </div>
        </div>
  </div>
</div>

@endif


@endsection

@push('js')
<script>
    
    function activateAccount(event){
        var element_id = $(event).attr('id');
        $.ajax({
            url: "{{ route('user.activateAccount') }}",
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
                   $('#activate_account_success_div').removeClass('d-none');
                   $('#activate_account_div').addClass('d-none');
                } else {
                    console.log("false");
                }
            }
        });
    }

    
</script>
@endpush

