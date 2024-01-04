@extends('User.layouts.master')
@section('content')

<section class="sec4 sect4">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>?How Does Wasetak work </h3>
                <span class="base">wasetak knowledge base</span>
            </div>
        </div>
        <div class="row mar-t">
            <div class="col-md-1 pe-md-0">
                <p class="par">W</p>
            </div>
            <div class="col-md-10">
                <div class="boxed3">
                    <h4>Wasetak Admin</h4>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="boxed-co">
                                <div class="boxed-co1">
                                    <h3>01</h3>
                                </div>
                                <h6>Start a checkout Ticket</h6>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="boxed-co">
                                <div class="boxed-co2">
                                    <h3>02</h3>
                                </div>
                                <h6>Buyer Deposit The
                                    fund</h6>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="boxed-co">
                                <div class="boxed-co1">
                                    <h3>03</h3>
                                </div>
                                <h6>We audit and secure
                                    the property from
                                    the seller</h6>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="boxed-co">
                                <div class="boxed-co2">
                                    <h3>04</h3>
                                </div>
                                <h6>Upon verification we
                                    release the payment
                                    to the seller and then
                                    the property to the buyer</h6>
                            </div>
                        </div>
                    </div>
                    <h3 class="head3">Buyer/seller protection</h3>
                    <p class="para">many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
                    <h3 class="head3">High ticket items</h3>
                    <p class="para">many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
                    <h3 class="head3">Income Opportunities</h3>
                    <p class="para">many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
                    <div class="row mar-t align-items-center">
                        <div class="col-md-6">
                            <div class="com">
                                <a href="#"><img src="{{ asset('user_asset/img/card14.png') }}" alt=""><span>Reply</span> </a>
                                <a href="#"><img src="{{ asset('user_asset/img/card18.png') }}" alt=""><span>PM User</span></a>
                                <a href="#"><img src="{{  asset('user_asset/img/card23.png') }}" alt=""><span>144</span></a>
                                <a href="#"><img src="{{  asset('user_asset/img/card19.png') }}" alt=""></a>
                                <a href="#"><img src="{{  asset('user_asset/img/card20.png') }}" alt=""></a>
                                 <a href="javascript:void(0);"  data-toggle="modal" data-target="#addtoany"><img src="{{asset('user_asset/img/card21.png')}}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-6 text-e">
                            <span><span class="com2">7 days</span> Last Reply </span>
                            <span><span class="com2">Jan 22</span> Created </span>
                        </div>
                    </div>
                </div>
                <div class="boxed7">
                    <ul class="categ">
                        <li><a href="#" class="modalButton" data-popup="popupTwo"><img src="{{ asset('user_asset/img/card21.png') }}" alt=""> share </a></li>
                        <li><a href="#" class="modalButton" data-popup="popupTwelve"><img src="{{ asset('user_asset/img/card19.png')}}" alt=""> Bookmark </a></li>
                        <li><a href="#" class="modalButton" data-popup="popupThree"><img src="{{ asset('user_asset/img/card20.png') }}" alt=""> Flag </a></li>
                        <!-- <li><a href="#"><img src="user_asset/img/card32.png" alt=""> Tracking <i class="fas fa-sort-down"></i></a></li> -->
                        <li>
                            <div class="dropdown2">
                                <a href="#" class="dropbtn"><img src="{{ asset('user_asset/img/card32.png') }}" alt=""> Tracking <i class="fas fa-sort-down"></i></a>
                                <div class="dropdown-content">
                                    <a href="#">
                                        <div class="list">
                                            <img src="{{ asset('user_asset/img/card37.png') }}" alt="">
                                            <div>
                                                <h5>watching</h5>
                                                <p class="para">you will be notified of every new reply in this topic and a count of new replies will be shown</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="list">
                                            <img src="{{ asset('user_asset/img/card38.png') }}" alt="">
                                            <div>
                                                <h5>Tracking</h5>
                                                <p class="para">A count of new replies will be shown for this topic.you will be notifiedif someone mentions your @name or replies to your</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="list">
                                            <img src="{{ asset('user_asset/img/card39.png') }}" alt="">
                                            <div>
                                                <h5>Normal</h5>
                                                <p class="para">You will be notified if someone mentions your @name or replies to you</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="list">
                                            <img src="{{ asset('user_asset/img/card40.png') }}" alt="">
                                            <div>
                                                <h5>Muted</h5>
                                                <p class="para">you will never be notified of anything about this topic, and it will not appear in latest</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-1 ps-0">
                <div class="boxed6">
                    <span>Jan 2021</span>
                    <div class="bor-line">
                        <h6>1/254</h6>
                        <span>Jan 2021</span>
                    </div>
                    <span>13h ago</span>
                    <div class="dropdown2">
                        <button class="dropbtn">
                            <img src="{{ asset('user_asset/img/card30.png') }}" alt="">
                        </button>
                        <div class="dropdown-content">
                            <a href="#">
                                <div class="list">
                                    <img src="{{ asset('user_asset/img/card37.png') }}" alt="">
                                    <div>
                                        <h5>watching</h5>
                                        <p class="para">you will be notified of every new reply in this topic and a count of new replies will be shown</p>
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="list">
                                    <img src="{{ asset('user_asset/img/card38.png') }}" alt="">
                                    <div>
                                        <h5>Tracking</h5>
                                        <p class="para">A count of new replies will be shown for this topic.you will be notifiedif someone mentions your @name or replies to your</p>
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="list">
                                    <img src="{{ asset('user_asset/img/card39.png') }}" alt="">
                                    <div>
                                        <h5>Normal</h5>
                                        <p class="para">You will be notified if someone mentions your @name or replies to you</p>
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="list">
                                    <img src="{{ asset('user_asset/img/card40.png') }}" alt="">
                                    <div>
                                        <h5>Muted</h5>
                                        <p class="para">you will never be notified of anything about this topic, and it will not appear in latest</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <a href="#"><img src="{{ asset('user_asset/img/card31.png') }}" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection