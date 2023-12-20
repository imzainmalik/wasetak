@extends('User.layouts.master')
@section('content')
<section class="sec17">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <div class="search">
                        <div class="form" lang="ar">
                            <input type="text" placeholder="Search for topics">
                        </div>
                        <a href="#"><img src="{{asset('user_asset/img/card95.png')}}" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="boxed1">
                        <div class="categ-header">
                            <h4>Categories</h4>
                            <div>
                                <a href="#"><img src="{{asset('user_asset/img/card96.png')}}" alt=""></a>
                                <a href="#"><img src="{{asset('user_asset/img/card97.png')}}" alt=""></a>
                            </div>
                        </div>
                        <ul id="navMenus">
                            <li>
                                <p><span><i class="fal fa-times"></i></span> Wasetak Knowledge Base </p>
                                <span class="val">10</span>
                            </li>
                            <li>
                                <p><span><i class="fal fa-times"></i></span> Checkout Tickets</p>
                                <span class="val">74</span>
                            </li>
                            <li>
                                <p><span><i class="fal fa-times"></i></span> Auctions </p>
                                <span class="val">2</span>
                            </li>
                            <li>
                                <p><span><i class="fal fa-times"></i></span>Wasetak Policies </p>
                                <span class="val">1</span>
                            </li>
                        </ul>
                        <div class="categ-header">
                            <h4>Tags</h4>
                            <div>
                                <a href="#"><img src="{{asset('user_asset/img/card96.png')}}" alt=""></a>
                                <a href="#"><img src="{{asset('user_asset/img/card97.png')}}" alt=""></a>
                            </div>
                        </div>
                        <div class="tags-inp">
                            <input type="text">
                        </div>
                        <ul class="tags-list">
                            <li>
                                <p><img src="{{asset('user_asset/img/card98.png')}}" alt=""> Whispers</p>
                                <span class="val">1</span>
                            </li>
                            <li>
                                <p><img src="{{asset('user_asset/img/card98.png')}}" alt=""> Status</p>
                                <span class="val">5</span>
                            </li>
                            <li>
                                <p><img src="{{asset('user_asset/img/card98.png')}}" alt=""> selling </p>
                                <span class="val">58</span>
                            </li>
                            <li>
                                <p><img src="{{asset('user_asset/img/card98.png')}}" alt=""> search </p>
                                <span class="val">45</span>
                            </li>
                            <li>
                                <p><img src="{{asset('user_asset/img/card98.png')}}" alt=""> rules </p>
                                <span class="val">5</span>
                            </li>
                            <li>
                                <p><img src="{{asset('user_asset/img/card98.png')}}" alt=""> rewards </p>
                                <span class="val">5</span>
                            </li>
                            <li>
                                <p><img src="{{asset('user_asset/img/card98.png')}}" alt=""> reserve - price </p>
                                <span class="val">8</span>
                            </li>
                            <li>
                                <p><img src="{{asset('user_asset/img/card98.png')}}" alt=""> payments </p>
                                <span class="val">7</span>
                            </li>
                            <li>
                                <p><img src="{{asset('user_asset/img/card98.png')}}" alt=""> notifications </p>
                                <span class="val">9</span>
                            </li>
                            <li>
                                <p><img src="{{asset('user_asset/img/card98.png')}}" alt=""> mute </p>
                                <span class="val">23</span>
                            </li>
                            <li>
                                <p><img src="{{asset('user_asset/img/card98.png')}}" alt=""> membership- levels </p>
                                <span class="val">5</span>
                            </li>
                            <li>
                                <p><img src="{{asset('user_asset/img/card98.png')}}" alt=""> max - bid </p>
                                <span class="val">45</span>
                            </li>
                            <li>
                                <p><img src="{{asset('user_asset/img/card98.png')}}" alt=""> invoices </p>
                                <span class="val">5</span>
                            </li>
                            <li>
                                <p><img src="{{asset('user_asset/img/card98.png')}}" alt=""> id- verification </p>
                                <span class="val">1</span>
                            </li>
                            <li>
                                <p><img src="{{asset('user_asset/img/card98.png')}}" alt=""> how to </p>
                                <span class="val">3</span>
                            </li>
                            <li>
                                <p><img src="{{asset('user_asset/img/card98.png')}}" alt=""> grace - period </p>
                                <span class="val">3</span>
                            </li>
                            <li>
                                <p><img src="{{asset('user_asset/img/card98.png')}}" alt=""> fees </p>
                                <span class="val">5</span>
                            </li>
                            <li>
                                <p><img src="{{asset('user_asset/img/card98.png')}}" alt=""> feedback </p>
                                <span class="val">3</span>
                            </li>
                            <li>
                                <p><img src="{{asset('user_asset/img/card98.png')}}" alt=""> checkout </p>
                                <span class="val">5</span>
                            </li>
                            <li>
                                <p><img src="{{asset('user_asset/img/card98.png')}}" alt=""> chat </p>
                                <span class="val">4</span>
                            </li>
                            <li>
                                <p><img src="{{asset('user_asset/img/card98.png')}}" alt=""> buying </p>
                                <span class="val">6</span>
                            </li>
                            <li>
                                <p><img src="{{asset('user_asset/img/card98.png')}}" alt=""> auctions </p>
                                <span class="val">6</span>
                            </li>
                            <li>
                                <p><img src="{{asset('user_asset/img/card98.png')}}" alt=""> advertising </p>
                                <span class="val">3</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="topic">
                        <h5>Topic</h5>
                        <div>
                            <h6><a href="#">Tips and guidelines for increasing sales on wasetak</a></h6>
                            <p class="para"> <span></span> wasetak Knowledge base</p>
                        </div>
                        <div>
                            <h6><a href="#">Tips and guidelines for increasing sales on wasetak</a></h6>
                            <p class="para"> <span></span> wasetak Knowledge base</p>
                        </div>
                        <div>
                            <h6><a href="#">Tips and guidelines for increasing sales on wasetak</a></h6>
                            <p class="para"> <span></span> wasetak Knowledge base</p>
                        </div>
                        <div>
                            <h6><a href="#">Tips and guidelines for increasing sales on wasetak</a></h6>
                            <p class="para"> <span></span> wasetak Knowledge base</p>
                        </div>
                        <div>
                            <h6><a href="#">Tips and guidelines for increasing sales on wasetak</a></h6>
                            <p class="para"> <span></span> wasetak Knowledge base</p>
                        </div>
                        <div>
                            <h6><a href="#">Tips and guidelines for increasing sales on wasetak</a></h6>
                            <p class="para"> <span></span> wasetak Knowledge base</p>
                        </div>
                        <div>
                            <h6><a href="#">Tips and guidelines for increasing sales on wasetak</a></h6>
                            <p class="para"> <span></span> wasetak Knowledge base</p>
                        </div>
                        <div>
                            <h6><a href="#">Tips and guidelines for increasing sales on wasetak</a></h6>
                            <p class="para"> <span></span> wasetak Knowledge base</p>
                        </div>
                        <div>
                            <h6><a href="#">Tips and guidelines for increasing sales on wasetak</a></h6>
                            <p class="para"> <span></span> wasetak Knowledge base</p>
                        </div>
                        <div>
                            <h6><a href="#">Tips and guidelines for increasing sales on wasetak</a></h6>
                            <p class="para"> <span></span> wasetak Knowledge base</p>
                        </div>
                        <div>
                            <h6><a href="#">Tips and guidelines for increasing sales on wasetak</a></h6>
                            <p class="para"> <span></span> wasetak Knowledge base</p>
                        </div>
                        <div>
                            <h6><a href="#">Tips and guidelines for increasing sales on wasetak</a></h6>
                            <p class="para"> <span></span> wasetak Knowledge base</p>
                        </div>
                        <div>
                            <h6><a href="#">Tips and guidelines for increasing sales on wasetak</a></h6>
                            <p class="para"> <span></span> wasetak Knowledge base</p>
                        </div>
                        <div>
                            <h6><a href="#">Tips and guidelines for increasing sales on wasetak</a></h6>
                            <p class="para"> <span></span> wasetak Knowledge base</p>
                        </div>
                        <div>
                            <h6><a href="#">Tips and guidelines for increasing sales on wasetak</a></h6>
                            <p class="para"> <span></span> wasetak Knowledge base</p>
                        </div>
                        <div>
                            <h6><a href="#">Tips and guidelines for increasing sales on wasetak</a></h6>
                            <p class="para"> <span></span> wasetak Knowledge base</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-1 text-center">
                    <h5>Activity</h5>
                    <div class="activ">
                        <h6>2h</h6>
                        <h6>2h</h6>
                        <h6>2h</h6>
                        <h6>2h</h6>
                        <h6>2h</h6>
                        <h6>2h</h6>
                        <h6>2h</h6>
                        <h6>2h</h6>
                        <h6>2h</h6>
                        <h6>2h</h6>
                        <h6>2h</h6>
                        <h6>2h</h6>
                        <h6>2h</h6>
                        <h6>2h</h6>
                        <h6>2h</h6>
                        <h6>2h</h6>
                        <h6>2h</h6>
                        <h6>2h</h6>
                        <h6>2h</h6>
                        <h6>2h</h6>
                        <h6>2h</h6>
                        <h6>2h</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection