{{-- <div class="sub_header">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="sub_header_col">
                    <!--<div class="sub_header_menu"><a href="#"><i class="ri-menu-2-line"></i></a></div>-->
                    <div class="sub_header_search">
                        <img class="search_setting" src="{{ asset('user_asset/img/tune.png') }}" class="img-fluid">
                        <input type="search" placeholder="Search" class="form-control">
                        <img src="{{ asset('user_asset/img/icon-search.png') }}" class="img-fluid">
                       
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="sub_header_col">
                    @if(!Auth::check())
                        <!-- <button class="button" data-bs-toggle="modal" data-bs-target="#login-with-username"><img src="{{ asset('user_asset/img/icon-login-rounded.png') }}"> Login With UserName</button> -->
                        <button class="button" data-bs-toggle="modal" data-bs-target="#login"><img src="{{ asset('user_asset/img/icon-login-rounded.png') }}"> Login</button>
                        <button class="button button-red" data-bs-toggle="modal" data-bs-target="#signup"><img src="{{ asset('user_asset/img/icon-male-user.png') }}"> Sign up</button>
                    @else
                        <a href="{{route('user.logout')}}" >Logout</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div> --}}
