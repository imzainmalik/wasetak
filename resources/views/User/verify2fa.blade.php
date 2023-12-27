<!DOCTYPE html>
<html lang="en" dir="rtl">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" href="img/fav.png" sizes="16x16" type="image/png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
        <title>Wasetak | 2Fa Verification</title>
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
      
        <div class="notice">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="search">
                            <div class="form" lang="ar">
                                <img src="http://127.0.0.1:8000/user_asset/img/card15.png" alt="">
                                <input type="text" placeholder="يبحث">
                            </div>
                            <a href="javascript:;"><img src="http://127.0.0.1:8000/user_asset/img/card2.png" class="img1" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-6 text-e">
                                            <a href="javascript:;" class="theme-btn1 modalButton" data-bs-toggle="modal" data-bs-target="#signup"><img src="http://127.0.0.1:8000/user_asset/img/icon-login-rounded.png">تسجيل الدخول</a>
                        <a href="javascript:;" class="theme-btn2 modalButton" data-bs-toggle="modal" data-bs-target="#login"><img src="http://127.0.0.1:8000/user_asset/img/icon-male-user.png"> اشتراك</a>
                        
                        
                    </div>
                </div>
            </div>
        </div>


        <div class="container py-4">
            {{-- <h1>2FA Verification</h1?> --}}
            <div class="card">
                <div class="card-header">
                    <h5>2FA Verification</h5>
                </div>
                <div class="card-body">
                    <form method="post" action="{{route('user.verify_login_code_check')}}">
                        @csrf
                        <input type="number" placeholder="Verification code" name="two_fa_code" class="form-control" required/> <br>
                        <button class="btn btn-primary">Verify Code</button>
                    </form>
                </div>
            </div>
        </div>
    
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>        

    @include('User.layouts.footer')
    @include('User.layouts.sweetalert')