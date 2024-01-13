{{-- <nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="{{ route('user.index') }}"><img src="{{ asset(settings()->web_logo) }}"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar">
            <i class="fa-solid fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav">
                <li><a href="#">Advertise on wasetak</a></li>
                <li><a href="#">Search Listing</a></li>
                <li><a href="#">Stay Connected</a></li>
                <li><a href="{{route('checkout.index')}}">Start Checkout</a></li>
                <li><a href="#">Earn money</a></li>
                <li><a href="{{ route('user.how_it_work') }}">How it works</a></li>
               
                <li>
                    <a id="zh-CN" class="language_option" onclick="changeLanguageByButtonClick('ar')"
                    translate="no" href="javascript:void(0)">Arabic</a>
                </li>
                <li>
                    <a id="en" class="language_option" onclick="changeLanguageByButtonClick('en')"
                    translate="no" href="javascript:void(0)">English</a>
                </li>


            </ul>
        </div>
    </div>
</nav> --}}
<header>
    <div class="main-header">
        <div class="container">
            <div class="menu-Bar">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="row align-items-center">
                <div class="col-md-2 text-left">

                    {{-- Wasetak --}}
                    <a class="logo" href="{{ route('user.index') }}"><img src="{{ asset(settings()->web_logo) }}"></a>

                </div>
                <div class="col-md-9">
                    <div class="menuWrap">
                        <ul class="menu">
                            {{-- @php $i = 1; @endphp
                            @foreach (admin_pages() as $k => $admin_page)
                            <li class="dropdown{{$i}}">
                                <a href="{{ route('user.userPage',[$admin_page->slug]) }}">How it works</a>
                                @if (count(admin_inner_pages($admin_page->id)) > 0)
                                <ul class="dropdown-list">
                                    @foreach (admin_inner_pages($admin_page->id) as $admin_inner_page)
                                    <li><a href="{{ route('user.userPage' ,[$admin_inner_page->slug])}}">{{$admin_inner_page->name}}</a></li>
                                  
                                    @endforeach
                                </ul>
                                @endif
                            </li>
                            {{$i++}}
                            @endforeach --}}

                            <li class="dropdown1">
                                <a href="{{ route('user.how_it_work') }}">How it works</a>
                                <ul class="dropdown-list">
                                    <!-- <li><a href="">How it work</a></li> -->
                                    <li><a href="{{ route('user.quick_rule') }}">Quick Rule</a></li>
                                    <li><a href="{{ route('user.what_wasetak') }}">What Wasetak</a></li>
                                    <li><a href="{{ route('user.about') }}">About</a></li>
                                </ul>
                            </li>
                            <li class="dropdown2">
                                <a href="#">earn money</a>
                                <ul class="dropdown-list">
                                    <li><a href="{{ route('user.rewards_rules') }}">Rewards rules</a></li>
                                    <li><a href="{{ route('user.how_it_use') }}">How it Use</a></li>
                                    <li><a href="{{ route('user.rewards') }}">Rewards</a></li>
                                    <li><a href="{{ route('user.ways_to_earn') }}">Ways to earn</a></li>
                                    <li><a href="{{ route('user.top_earners') }}">Top Earners</a></li>
                                    <li><a href="{{ route('user.win_prizes') }}">Win Prizes</a></li>
                                    <li><a href="{{ route('user.frequently_asked_question') }}">Frequently Asked
                                            Question</a></li>
                                </ul>
                            </li>
                            <li class="dropdown3">
                                <a href="{{ route('user.start_checkout') }}">Start Checkout</a>
                                <ul class="dropdown-list">
                                    <li><a href="{{ route('user.fee_calculator') }}">Fee Calculator</a></li>
                                    <li><a href="{{ route('checkout.index') }}">Begin a Transaction</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('user.stay_connected') }}">Stay Connected</a></li>
                            <li><a href="{{ route('user.search_listing') }}">Search Listing</a></li>
                            <li><a href="{{ route('user.doc') }}">Advertise on wasetak</a></li>
                            <li>
                                <a id="zh-CN" class="language_option" onclick="changeLanguageByButtonClick('ar')"
                                    translate="no" href="javascript:void(0)">Arabic</a>
                            </li>
                            {{-- <li>
                                <a id="en" class="language_option" onclick="changeLanguageByButtonClick('en')"
                                translate="no" href="javascript:void(0)">English</a>
                            </li> --}}
                            <div id="google_translate_element" style="display:none"></div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="notice">
        <div class="container">
            <div class="row align-items-center">
              
                    <div class="col-md-6">
                        <form action="{{ route('user.search_listing') }}" method="get">
                        <div class="search">

                            <div class="form" lang="ar">

                                <img src="{{ asset('user_asset/img/card15.png') }}" alt="">
                                <input type="text" name="query" placeholder="يبحث">

                            </div>

                            <a href="#"><img src="{{ asset('user_asset/img/card2.png') }}" class="img1"
                                    alt=""></a>
                        </div>
                    </form>
                    </div>
                
                <div class="col-md-6 text-e">
                    @if (!Auth::check())
                        <a href="#" class="theme-btn1 modalButton" data-bs-toggle="modal"
                            data-bs-target="#signup"><img
                                src="{{ asset('user_asset/img/icon-login-rounded.png') }}">تسجيل الدخول</a>
                        <a href="#" class="theme-btn2 modalButton" data-bs-toggle="modal"
                            data-bs-target="#login"><img src="{{ asset('user_asset/img/icon-male-user.png') }}">
                            اشتراك</a>
                        {{-- <a href="#" class="theme-btn1 modalButton" data-popup="popupOne"><img src="{{ asset('user_asset/img/card3.png') }}" alt=""> تسجيل الدخول</a>
                    <a href="#" class="theme-btn2 modalButton" data-popup="popuplogin"><img src="{{ asset('user_asset/img/card4.png') }}" alt=""> اشتراك</a> --}}
                    @else
                        <a href="{{ route('user.logout') }}">Logout</a>
                    @endif

                </div>
            </div>
        </div>
    </div>
</header>


@if (!Auth::check())
    <!-- Login Popup Bootstrap -->
    <div class="modal fade  modalWindow login" id="login" tabindex="-1" data-bs-backdrop='static'>
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
                                <div class="abs_icon"><a href="#" id="loginTogglePassword"><img
                                            src="{{ asset('user_asset/img/eye.png') }}"><img
                                            src="{{ asset('user_asset/img/eye-fill.png') }}"
                                            class="eye_fill_show"></a></div>
                            </div>
                            <label class="input_label"></label>
                        </div>
                        <div class="d-flex links">
                            {{-- <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#reset_password">I forgot my Password</a>
                        {{ route('forget.password.get') }}
                        <a href="" >I forgot my Password</a> --}}
                        </div>
                        <div class="d-flex align-items-center">

                            <button class="button loginpButton">
                                <div class="spinner-border spinner-border-login" role="status"
                                    style="display: none">
                                    <span class="sr-only"></span>
                                </div> Login
                            </button>
                            <span>Don’t have an account ? <a href="#" class="dontHaveAccount">Sign up</a></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Signup Popup Bootstrap -->
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
                            <label id="email-confirm-warning-label" class="error-warning d-none" for="email">We
                                will email you to confirm.</label>
                            <label class="input_label">Never shown to the public.</label>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Username" id="username"
                                name="username" required>
                            <label id="signup-username-other-error" class="label-error d-none"
                                for="username"></label>
                            <label class="input_label">unique, no spaces, short</label>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="First name and Last name"
                                name="name" required>
                            <label class="input_label">Your Full name</label>
                        </div>
                        <div class="mb-3">
                            <div class="abs_input">
                                <input type="password" class="form-control password" placeholder="Password"
                                    name="password" id="password" required>
                                <div class="abs_icon"><a href="#" id="togglePassword"><img
                                            src="{{ asset('user_asset/img/eye.png') }}"><img
                                            src="{{ asset('user_asset/img/eye-fill.png') }}"
                                            class="eye_fill_show"></a></div>
                            </div>
                            <label class="input_label">at least 12 characters</label>
                        </div>
                        <div class="terms form-check" id="termserror">
                            <label class="input_label"><span class="required">*</span> Privacy Confirmation</label>
                            <span id="checkbox-error" class="error"></span>
                            <label for="terms" class="form-check-label"> I agree to Wasetak <a
                                    href="#">Privacy Policy</a> and <a href="#">Terms of
                                    Service</a></label>
                            <input id="terms" class="form-check-input" type="checkbox" name="terms" />
                        </div>


                        <div class="d-flex align-items-center mt-4">
                            <button class="button signUpButton" type="submit">Sign up <span
                                    class="spinner-border spinner-border-signup" role="status"
                                    style="display:none"></span></button>
                            <span>Already have an account ? <a href="#" class="alreadyAccount">Login</a></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- password -->
    {{--
<section dir="rtl" class="modal modalWindow password" id="popupFive">
    <section class="modalWrapper">
        <h2>Password Reset</h2>
        <div class="password-mail">
            <span class="base">If an account matches ha097216@gmail.com, you should receive an email with instructions on how to reset your password shortly</span>
            <button class="theme-btn">Ok</button>
        </div>
        <span class="base">.Enter your email address, and we'll send you a password reset email</span>
        <form class="form">
            <div class="row">
                <div class="col-md-12">
                    <div class="ey">
                        <input type="text" placeholder="abcd@gmail">
                        <i class="far fa-eye"></i>
                    </div>
                    <div class="invalid">
                        <small class="inval">If an account matches the username mohdj5, you should receive an email with a login link shortly. <i class="fas fa-exclamation-triangle"></i></small>
                    </div>
                </div>
                <div class="col-md-12">
                    <button class="theme-btn">Reset Password</button>
                </div>
            </div>
        </form>
    </section>
    <a class="closeBtn"><i class="fal fa-times"></i></a>
</section> --}}


    <!-- Reset Popup -->
    {{-- <div class="modal fade" id="reset_password" tabindex="-1" data-bs-backdrop='static'>
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
</div> --}}

    <!-- Reset SuccessMsg Modal -->
    {{-- <div class="modal fade" id="reset_msg" tabindex="-1" data-bs-backdrop='static'>
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
</div> --}}
@endif



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: "en"
        }, 'google_translate_element');
    }

    function changeLanguageByButtonClick(lang) {

        var selectField = document.querySelector("#google_translate_element select");
        console.warn(selectField);
        for (var i = 0; i < selectField.children.length; i++) {
            var option = selectField.children[i];
            if (option.value == lang) {
                selectField.selectedIndex = i;
                selectField.dispatchEvent(new Event('change'));
            }
        }
    }

    // $(window).on('load', function(){
    //     setTimeout(
    //         function() 
    //         {
    //             $('.language_option').trigger('click');
    //         }, 1500);

    // });
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
</script>
