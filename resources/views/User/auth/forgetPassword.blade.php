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

        @stack('css')
    </head>


    <body>
        @include('User.layouts.nav')


        @yield('content')
            <!-- Reset Popup -->
            <main>
                @if (Session::has('message'))
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="ResetInfoModal modal fade show" style="display:block;" tabindex="-1">
                                    <div class="modal-dialog modal-dialog-centered" style="width: 500px;">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <h4>Password Reset</h4>
                                                <p> {{ Session::get('message') }}</p>
                                            </div>
                                            <div class="modal-footer" style="display: block;">
                                                <button type="button" class="btn btn-sm rounded closeResetInfoModal" style="color: white;background: #f26d85;" data-dismiss="modal">Ok</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                <div class="container">
                    <div class="row my-5">
                        <div class="col d-flex justify-content-center">
                            <div class="card shadow-sm" style="width: 700px;">
                                <div class="card-body">
                                    <div class="mb-4">
                                        
                                        <h4>Password Reset</h4>
                                        <p class="mb-2">Enter your email address, and we'll send you a password reset email</p>
                                    </div>
                                    <form action="{{ route('forget.password.post') }}" method="POST">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" id="email" class="form-control" name="email" placeholder="Enter Your Email"
                                                required="">
                                                @if ($errors->has('email'))
                                                    <span class="text-danger"><i class="fa-solid fa-triangle-exclamation"></i> An error occurred. You supplied invalid parameters to the request login.. </span>
                                                @endif
                                        </div>
                                        <div class="mb-3 d-grid">
                                            <button type="submit" class="btn btn-sm rounded" style="color: white;background: #f26d85;">
                                                Reset Password
                                            </button>
                                        </div>
                                        <span>Don't have an account? <a href="{{ route('user.index') }}">sign in</a></span>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        
        @include('User.layouts.footer')

        <script src="{{ asset('user_asset/js/jquery.min.js') }}"></script>
        <script src="{{ asset('user_asset/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('user_asset/js/main.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        @if(!Auth::check())
            <script>
                $( document ).on('click','.closeResetInfoModal',function() {
                    $('.ResetInfoModal').removeClass('show');
                    $('.ResetInfoModal').css('display:none');
                    window.location.href = "{{ url('/index') }}";
                });
            
        
            </script>
        @endif
        @stack('js')
    </body>

</html>
