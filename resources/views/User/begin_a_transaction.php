@extends('User.layouts.master')
@section('content')


<section class="sec9">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Safely Buy/Sell/Trade Virtual Anything</h2>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-4 mari">
                    <input type="text" placeholder="Typr Username">
                    <small><span>Send Him Invite</span> ? Can’t Find the user </small>
                    <div class="boxed">
                        <ul>
                            <li class="mb-3"><a href="#"><img src="{{asset('user_asset/img/card24.png')}}" alt="">Starbucks</a></li>
                            <li class="mb-3"><a href="#"><img src="{{asset('user_asset/img/card25.png')}}" alt="">Social media king</a></li>
                            <li class="mb-3"><a href="#"><img src="{{asset('user_asset/img/card26.png')}}" alt="">Smmpro</a></li>
                            <li><a href="#"><img src="{{asset('user_asset/img/card28.png')}}" alt="">Selfiefanpage</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <button>
                        <img src="{{asset('user_asset/img/card35.png')}}" alt="">
                    </button>
                </div>
                <div class="col-md-4">
                    <input type="text" placeholder="Mohfj5">
                </div>
                <div class="col-md-12 text-center">
                    <a class="theme-btn" href="transaction.php">Begin Transaction</a>
                </div>
            </div>
            <div class="row mar-t">
                <div class="col-md-8 text-center">
                    <ul>
                        <li><a href="#">Our Fees</a></li>
                        <li><a href="#">? What is Wasetak</a></li>
                        <li><a href="#">Knowledge Base</a></li>
                        <li><a href="#">Terms of service</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </section>


@endsection