@extends('User.layouts.master')
@section('content')
    <section class="mainBanner" style="background-image:url({{asset('user_asset/img/banner/bg-banner.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="boxed">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h2>!Join and get 20 USD</h2>
                            <p class="para">From PR campaigns and influence deals, to incredible social properties that will help your business grow, this is what SWAPD is all about. SWAPD is a simple community forum that facilitates buyers and sellers in a safe and moderated marketplace. SWAPD features some of the most unique service providers on the web. They can make you famous, launch your venture into success, or provide the tools you need to make serious money.</p>
                        </div>
                        <div class="col-md-6 text-e">
                            <div class="row justify-content-end">
                                <div class="col-md-10">
                                    <div class="row rowgap">

                                        <div class="col-md-4 col-6">
                                            <div class="boexd-wrap">
                                                <img src="{{asset('user_asset/img/card5.png')}}" alt="">
                                                <h5>Buy/Sell</h5>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-6">
                                            <div class="boexd-wrap">
                                                <img src="{{asset('user_asset/img/card6.png')}}" alt="">
                                                <h5>Fees Calculator</h5>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-6">
                                            <div class="boexd-wrap">
                                                <img src="{{asset('user_asset/img/card7.png')}}" alt="">
                                                <h5>About Wasetak</h5>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-6">
                                            <div class="boexd-wrap">
                                                <img src="{{asset('user_asset/img/card9.png')}}" alt="">
                                                <h5>Contact Support</h5>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-6">
                                            <div class="boexd-wrap">
                                                <img src="{{asset('user_asset/img/card8.png')}}" alt="">
                                                <h5>How it works</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec2">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="{{asset('user_asset/img/card1.png')}}" class="img1" alt="">
                </div>
                <div class="col-md-6">
                    <h2>Buy, Sell, & Trade Virtual Properties</h2>
                    <p class="para">wasetak is a trusted middleman service dedicated to offering our users the safest way to buy, sell, or trade items and services of virtual nature.</p>
                    <a href="#" class="theme-btn1"><img src="{{asset('user_asset/img/card11.png')}}" alt=""> Free Calculator </a>
                    <a href="#" class="theme-btn2"><img src="{{asset('user_asset/img/card10.png')}}" alt=""> Start ticket</a>
                </div>
            </div>
        </div>
    </section>

    <section class="sec3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="boxed">
                        <div class="row align-items-center">
                            <div class="col-md-7">
                                <ul class="list">
                                    <li data-targetit="box-1">latest</li>
                                    <li data-targetit="box-2">New</li>
                                    <li data-targetit="box-3">Top</li>
                                    <li data-targetit="box-4">Categories</li>
                                    <li data-targetit="box-5">My Post</li>
                                    <li data-targetit="box-6">Hot</li>
                                </ul>
                            </div>
                            <div class="col-md-5 text-e">
                                <ul class="drop">
                                    <li class="dropdown drop1">
                                        <a href="#" class="dropbtn1"><i class="fas fa-sort-down"></i> All Categories</a>
                                        <div class="dropdown-content">
                                            <input type="text" placeholder="Search">
                                            <div class="cate-list">
                                                <a href="create-topics.php">
                                                    <h5><span class="box1"></span> Buyer Request </h5>
                                                    <p class="para">Are you looking to buy a Facebook/Twitter/Youtube/Pintrest,
                                                        or any other peoperty we don’t have listed on Wasetak ? Quite
                                                        often, many of wasetak seller’s don’t list everything they have</p>
                                                </a>
                                            </div>
                                            <div class="bor-line"></div>
                                            <div class="cate-list">
                                                <a href="create-topics.php">
                                                    <h5><span class="box1"></span> Social media </h5>
                                                    <p class="para">Are you looking to buy a Facebook/Twitter/Youtube/Pintrest,
                                                        or any other peoperty we don’t have listed on Wasetak ? Quite
                                                        often, many of wasetak seller’s don’t list everything they have</p>
                                                </a>
                                            </div>
                                            <div class="bor-line"></div>
                                            <div class="cate-list">
                                                <a href="create-topics.php">
                                                    <h5><span class="box2"></span> Social media </h5>
                                                    <h5><span class="box3"></span> instagram </h5>
                                                    <p class="para">Are you looking to buy a Facebook/Twitter/Youtube/Pintrest,
                                                        or any other peoperty we don’t have listed on Wasetak ? Quite
                                                        often, many of wasetak seller’s don’t list everything they have</p>
                                                </a>
                                            </div>
                                            <div class="bor-line"></div>
                                            <div class="cate-list">
                                                <a href="create-topics.php">
                                                    <h5><span class="box2"></span> Social media </h5>
                                                    <h5><span class="box4"></span> Fanpages </h5>
                                                    <p class="para">Are you looking to buy a Facebook/Twitter/Youtube/Pintrest,
                                                        or any other peoperty we don’t have listed on Wasetak ? Quite
                                                        often, many of wasetak seller’s don’t list everything they have</p>
                                                </a>
                                            </div>
                                            <div class="bor-line"></div>
                                            <div class="cate-list">
                                                <a href="create-topics.php">
                                                    <h5><span class="box1"></span> Social media </h5>
                                                    <h5><span class="box5"></span> Tiktok </h5>
                                                    <p class="para">Are you looking to buy a Facebook/Twitter/Youtube/Pintrest,
                                                        or any other peoperty we don’t have listed on Wasetak ? Quite
                                                        often, many of wasetak seller’s don’t list everything they have</p>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropbtn2"><i class="fas fa-sort-down"></i> All Tags</a>
                                        <div class="dropdown-content">
                                            <a href="#">Tags</a>
                                        </div>
                                    </li>
                                    <li><a href="#" class="dropbtn3"><i class="fas fa-plus-circle"></i> New Topic</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-1 showfirst">
                    <div class="col-md-12 mar">
                        <div class="row">
                            <div class="col-md-8 col-3">
                                <h5>Topic</h5>
                            </div>
                            <div class="col-md-4 col-9 text-e">
                                <h5>Replies</h5>
                                <h5>Views</h5>
                                <h5>Activity</h5>
                            </div>
                        </div>
                    </div>
                    <div class="row rowgap">
                        <div class="col-md-12">
                            <div class="boxed-wrap">
                                <div class="row align-items-center">
                                    <div class="col-md-7">
                                        <h4>New Fresh Panels -Musician $1000 Public Figure $5000 Entrepreneur $5500New Fresh Panels -Musician $1000 Public Figure $5000 Entrepreneur $5500</h4>
                                        <ul class="links">
                                            <li><span class="span">Tiktok Service</span><span class="box1"></span></li>
                                            <li><span class="span">Social Media</span><span class="box2"></span></li>
                                        </ul>
                                        <ul class="cate">
                                            <li class="active"><a href="#">Featured</a></li>
                                            <li><a href="#">Name-Change</a></li>
                                            <li><a href="#">Urban-Service</a></li>
                                            <li><a href="#">Username-Claim</a></li>
                                            <li><a href="#">Verification</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-5 pe-md-0">
                                        <div class="row align-items-center">
                                            <div class="col-md-3 p-md-0">
                                                <img src="{{asset('user_asset/img/card13.png')}}" class="img1" alt="">
                                            </div>
                                            <div class="col-md-4">
                                                <a href="#" class="rep">
                                                    <img src="{{asset('user_asset/img/card14.png')}}" alt="">
                                                    <h5>123 Replies</h5>
                                                </a>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="#" class="rep">
                                                    <img src="{{asset('user_asset/img/card12.png')}}" alt="">
                                                    <h5>163 views</h5>
                                                </a>
                                            </div>
                                            <div class="col-md-2">
                                                <h5>2h</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="boxed-wrap">
                                <div class="row align-items-center">
                                    <div class="col-md-7">
                                        <h3>Category</h3>
                                        <h4>New Fresh Panels -Musician $1000 Public Figure $5000 Entrepreneur $5500New Fresh Panels -Musician $1000 Public Figure $5000 Entrepreneur $5500</h4>
                                        <ul class="links">
                                            <li><span class="span">IG Services</span><span class="box3"></span></li>
                                            <li><span class="span">Social Media</span><span class="box2"></span></li>
                                        </ul>
                                        <ul class="cate">
                                            <li class="active"><a href="#">Featured</a></li>
                                            <li><a href="#">Name-Change</a></li>
                                            <li><a href="#">Urban-Service</a></li>
                                            <li><a href="#">Username-Claim</a></li>
                                            <li><a href="#">Verification</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-5 pe-md-0">
                                        <div class="row align-items-center">
                                            <div class="col-md-3 p-md-0">
                                                <img src="{{asset('user_asset/img/card13.png')}}" class="img1" alt="">
                                            </div>
                                            <div class="col-md-4">
                                                <a href="#" class="rep">
                                                    <img src="{{asset('user_asset/img/card14.png')}}" alt="">
                                                    <h5>123 Replies</h5>
                                                </a>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="#" class="rep">
                                                    <img src="{{asset('user_asset/img/card12.png')}}" alt="">
                                                    <h5>163 views</h5>
                                                </a>
                                            </div>
                                            <div class="col-md-2">
                                                <h5>2h</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="boxed-wrap">
                                <div class="row align-items-center">
                                    <div class="col-md-7">
                                        <h4>New Fresh Panels -Musician $1000 Public Figure $5000 Entrepreneur $5500New Fresh Panels -Musician $1000 Public Figure $5000 Entrepreneur $5500</h4>
                                        <ul class="links">
                                            <li><span class="span">Facebook services</span><span class="box5"></span></li>
                                            <li><span class="span">Social Media</span><span class="box2"></span></li>
                                        </ul>
                                        <ul class="cate">
                                            <li class="active"><a href="#">Featured</a></li>
                                            <li><a href="#">Name-Change</a></li>
                                            <li><a href="#">Urban-Service</a></li>
                                            <li><a href="#">Username-Claim</a></li>
                                            <li><a href="#">Verification</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-5 pe-md-0">
                                        <div class="row align-items-center">
                                            <div class="col-md-3 p-md-0">
                                                <img src="{{asset('user_asset/img/card13.png')}}" class="img1" alt="">
                                            </div>
                                            <div class="col-md-4">
                                                <a href="#" class="rep">
                                                    <img src="{{asset('user_asset/img/card14.png')}}" alt="">
                                                    <h5>123 Replies</h5>
                                                </a>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="#" class="rep">
                                                    <img src="{{asset('user_asset/img/card12.png')}}" alt="">
                                                    <h5>163 views</h5>
                                                </a>
                                            </div>
                                            <div class="col-md-2">
                                                <h5>2h</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="boxed-wrap">
                                <div class="row align-items-center">
                                    <div class="col-md-7">
                                        <h4>New Fresh Panels -Musician $1000 Public Figure $5000 Entrepreneur $5500New Fresh Panels -Musician $1000 Public Figure $5000 Entrepreneur $5500</h4>
                                        <ul class="links">
                                            <li><span class="span">Youtube</span><span class="box2"></span></li>
                                            <li><span class="span">Social Media</span><span class="box2"></span></li>
                                        </ul>
                                        <ul class="cate">
                                            <li class="active"><a href="#">Featured</a></li>
                                            <li><a href="#">Name-Change</a></li>
                                            <li><a href="#">Urban-Service</a></li>
                                            <li><a href="#">Username-Claim</a></li>
                                            <li><a href="#">Verification</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-5 pe-md-0">
                                        <div class="row align-items-center">
                                            <div class="col-md-3 p-md-0">
                                                <img src="{{asset('user_asset/img/card13.png')}}" class="img1" alt="">
                                            </div>
                                            <div class="col-md-4">
                                                <a href="#" class="rep">
                                                    <img src="{{asset('user_asset/img/card14.png')}}" alt="">
                                                    <h5>123 Replies</h5>
                                                </a>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="#" class="rep">
                                                    <img src="{{asset('user_asset/img/card12.png')}}" alt="">
                                                    <h5>163 views</h5>
                                                </a>
                                            </div>
                                            <div class="col-md-2">
                                                <h5>2h</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="boxed-wrap">
                                <div class="row align-items-center">
                                    <div class="col-md-7">
                                        <h3>Category</h3>
                                        <h4>New Fresh Panels -Musician $1000 Public Figure $5000 Entrepreneur $5500New Fresh Panels -Musician $1000 Public Figure $5000 Entrepreneur $5500</h4>
                                        <ul class="links">
                                            <li><span class="span">Twitter</span><span class="box5"></span></li>
                                            <li><span class="span">Social Media</span><span class="box2"></span></li>
                                        </ul>
                                        <ul class="cate">
                                            <li class="active"><a href="#">Featured</a></li>
                                            <li><a href="#">Name-Change</a></li>
                                            <li><a href="#">Urban-Service</a></li>
                                            <li><a href="#">Username-Claim</a></li>
                                            <li><a href="#">Verification</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-5 pe-md-0">
                                        <div class="row align-items-center">
                                            <div class="col-md-3 p-md-0">
                                                <img src="{{asset('user_asset/img/card13.png')}}" class="img1" alt="">
                                            </div>
                                            <div class="col-md-4">
                                                <a href="#" class="rep">
                                                    <img src="{{asset('user_asset/img/card14.png')}}" alt="">
                                                    <h5>123 Replies</h5>
                                                </a>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="#" class="rep">
                                                    <img src="{{asset('user_asset/img/card12.png')}}" alt="">
                                                    <h5>163 views</h5>
                                                </a>
                                            </div>
                                            <div class="col-md-2">
                                                <h5>2h</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="boxed-wrap">
                                <div class="row align-items-center">
                                    <div class="col-md-7">
                                        <h4>New Fresh Panels -Musician $1000 Public Figure $5000 Entrepreneur $5500New Fresh Panels -Musician $1000 Public Figure $5000 Entrepreneur $5500</h4>
                                        <ul class="links">
                                            <li><span class="span">Fanpages</span><span class="box4"></span></li>
                                            <li><span class="span">Social Media</span><span class="box2"></span></li>
                                        </ul>
                                        <ul class="cate">
                                            <li class="active"><a href="#">Featured</a></li>
                                            <li><a href="#">Name-Change</a></li>
                                            <li><a href="#">Urban-Service</a></li>
                                            <li><a href="#">Username-Claim</a></li>
                                            <li><a href="#">Verification</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-5 pe-md-0">
                                        <div class="row align-items-center">
                                            <div class="col-md-3 p-md-0">
                                                <img src="{{asset('user_asset/img/card13.png')}}" class="img1" alt="">
                                            </div>
                                            <div class="col-md-4">
                                                <a href="#" class="rep">
                                                    <img src="{{asset('user_asset/img/card14.png')}}" alt="">
                                                    <h5>123 Replies</h5>
                                                </a>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="#" class="rep">
                                                    <img src="{{asset('user_asset/img/card12.png')}}" alt="">
                                                    <h5>163 views</h5>
                                                </a>
                                            </div>
                                            <div class="col-md-2">
                                                <h5>2h</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="boxed-wrap">
                                <div class="row align-items-center">
                                    <div class="col-md-7">
                                        <h4>New Fresh Panels -Musician $1000 Public Figure $5000 Entrepreneur $5500New Fresh Panels -Musician $1000 Public Figure $5000 Entrepreneur $5500</h4>
                                        <ul class="links">
                                            <li><span class="span">IG Services</span><span class="box3"></span></li>
                                            <li><span class="span">Social Media</span><span class="box2"></span></li>
                                        </ul>
                                        <ul class="cate">
                                            <li class="active"><a href="#">Featured</a></li>
                                            <li><a href="#">Name-Change</a></li>
                                            <li><a href="#">Urban-Service</a></li>
                                            <li><a href="#">Username-Claim</a></li>
                                            <li><a href="#">Verification</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-5 pe-md-0">
                                        <div class="row align-items-center">
                                            <div class="col-md-3 p-md-0">
                                                <img src="{{asset('user_asset/img/card13.png')}}" class="img1" alt="">
                                            </div>
                                            <div class="col-md-4">
                                                <a href="#" class="rep">
                                                    <img src="{{asset('user_asset/img/card14.png')}}" alt="">
                                                    <h5>123 Replies</h5>
                                                </a>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="#" class="rep">
                                                    <img src="{{asset('user_asset/img/card12.png')}}" alt="">
                                                    <h5>163 views</h5>
                                                </a>
                                            </div>
                                            <div class="col-md-2">
                                                <h5>2h</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-2">
                    <div class="col-md-12 mar">
                        <div class="row">
                            <div class="col-md-8">
                                <h5>Topic</h5>
                            </div>
                            <div class="col-md-4 text-e">
                                <h5>Replies</h5>
                                <h5>Views</h5>
                                <h5>Activity</h5>
                            </div>
                        </div>
                    </div>
                    <div class="row rowgap">
                        <div class="col-md-12">
                            <div class="boxed-wrap">
                                <div class="row align-items-center">
                                    <div class="col-md-7">
                                        <h4>New Fresh Panels -Musician $1000 Public Figure $5000 Entrepreneur $5500New Fresh Panels -Musician $1000 Public Figure $5000 Entrepreneur $5500</h4>
                                        <ul class="links">
                                            <li><span class="span">Tiktok Service</span><span class="box1"></span></li>
                                            <li><span class="span">Social Media</span><span class="box2"></span></li>
                                        </ul>
                                        <ul class="cate">
                                            <li class="active"><a href="#">Featured</a></li>
                                            <li><a href="#">Name-Change</a></li>
                                            <li><a href="#">Urban-Service</a></li>
                                            <li><a href="#">Username-Claim</a></li>
                                            <li><a href="#">Verification</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-5 pe-md-0">
                                        <div class="row align-items-center">
                                            <div class="col-md-3 p-md-0">
                                                <img src="{{asset('user_asset/img/card13.png')}}" class="img1" alt="">
                                            </div>
                                            <div class="col-md-4">
                                                <a href="#" class="rep">
                                                    <img src="{{asset('user_asset/img/card14.png')}}" alt="">
                                                    <h5>123 Replies</h5>
                                                </a>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="#" class="rep">
                                                    <img src="{{asset('user_asset/img/card12.png')}}" alt="">
                                                    <h5>163 views</h5>
                                                </a>
                                            </div>
                                            <div class="col-md-2">
                                                <h5>2h</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="boxed-wrap">
                                <div class="row align-items-center">
                                    <div class="col-md-7">
                                        <h3>Category</h3>
                                        <h4>New Fresh Panels -Musician $1000 Public Figure $5000 Entrepreneur $5500New Fresh Panels -Musician $1000 Public Figure $5000 Entrepreneur $5500</h4>
                                        <ul class="links">
                                            <li><span class="span">IG Services</span><span class="box3"></span></li>
                                            <li><span class="span">Social Media</span><span class="box2"></span></li>
                                        </ul>
                                        <ul class="cate">
                                            <li class="active"><a href="#">Featured</a></li>
                                            <li><a href="#">Name-Change</a></li>
                                            <li><a href="#">Urban-Service</a></li>
                                            <li><a href="#">Username-Claim</a></li>
                                            <li><a href="#">Verification</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-5 pe-md-0">
                                        <div class="row align-items-center">
                                            <div class="col-md-3 p-md-0">
                                                <img src="{{asset('user_asset/img/card13.png')}}" class="img1" alt="">
                                            </div>
                                            <div class="col-md-4">
                                                <a href="#" class="rep">
                                                    <img src="{{asset('user_asset/img/card14.png')}}" alt="">
                                                    <h5>123 Replies</h5>
                                                </a>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="#" class="rep">
                                                    <img src="{{asset('user_asset/img/card12.png')}}" alt="">
                                                    <h5>163 views</h5>
                                                </a>
                                            </div>
                                            <div class="col-md-2">
                                                <h5>2h</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="boxed-wrap">
                                <div class="row align-items-center">
                                    <div class="col-md-7">
                                        <h4>New Fresh Panels -Musician $1000 Public Figure $5000 Entrepreneur $5500New Fresh Panels -Musician $1000 Public Figure $5000 Entrepreneur $5500</h4>
                                        <ul class="links">
                                            <li><span class="span">Facebook services</span><span class="box5"></span></li>
                                            <li><span class="span">Social Media</span><span class="box2"></span></li>
                                        </ul>
                                        <ul class="cate">
                                            <li class="active"><a href="#">Featured</a></li>
                                            <li><a href="#">Name-Change</a></li>
                                            <li><a href="#">Urban-Service</a></li>
                                            <li><a href="#">Username-Claim</a></li>
                                            <li><a href="#">Verification</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-5 pe-md-0">
                                        <div class="row align-items-center">
                                            <div class="col-md-3 p-md-0">
                                                <img src="{{asset('user_asset/img/card13.png')}}" class="img1" alt="">
                                            </div>
                                            <div class="col-md-4">
                                                <a href="#" class="rep">
                                                    <img src="{{asset('user_asset/img/card14.png')}}" alt="">
                                                    <h5>123 Replies</h5>
                                                </a>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="#" class="rep">
                                                    <img src="{{asset('user_asset/img/card12.png')}}" alt="">
                                                    <h5>163 views</h5>
                                                </a>
                                            </div>
                                            <div class="col-md-2">
                                                <h5>2h</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="boxed-wrap">
                                <div class="row align-items-center">
                                    <div class="col-md-7">
                                        <h4>New Fresh Panels -Musician $1000 Public Figure $5000 Entrepreneur $5500New Fresh Panels -Musician $1000 Public Figure $5000 Entrepreneur $5500</h4>
                                        <ul class="links">
                                            <li><span class="span">Youtube</span><span class="box2"></span></li>
                                            <li><span class="span">Social Media</span><span class="box2"></span></li>
                                        </ul>
                                        <ul class="cate">
                                            <li class="active"><a href="#">Featured</a></li>
                                            <li><a href="#">Name-Change</a></li>
                                            <li><a href="#">Urban-Service</a></li>
                                            <li><a href="#">Username-Claim</a></li>
                                            <li><a href="#">Verification</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-5 pe-md-0">
                                        <div class="row align-items-center">
                                            <div class="col-md-3 p-md-0">
                                                <img src="{{asset('user_asset/img/card13.png')}}" class="img1" alt="">
                                            </div>
                                            <div class="col-md-4">
                                                <a href="#" class="rep">
                                                    <img src="{{asset('user_asset/img/card14.png')}}" alt="">
                                                    <h5>123 Replies</h5>
                                                </a>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="#" class="rep">
                                                    <img src="{{asset('user_asset/img/card12.png')}}" alt="">
                                                    <h5>163 views</h5>
                                                </a>
                                            </div>
                                            <div class="col-md-2">
                                                <h5>2h</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="boxed-wrap">
                                <div class="row align-items-center">
                                    <div class="col-md-7">
                                        <h3>Category</h3>
                                        <h4>New Fresh Panels -Musician $1000 Public Figure $5000 Entrepreneur $5500New Fresh Panels -Musician $1000 Public Figure $5000 Entrepreneur $5500</h4>
                                        <ul class="links">
                                            <li><span class="span">Twitter</span><span class="box5"></span></li>
                                            <li><span class="span">Social Media</span><span class="box2"></span></li>
                                        </ul>
                                        <ul class="cate">
                                            <li class="active"><a href="#">Featured</a></li>
                                            <li><a href="#">Name-Change</a></li>
                                            <li><a href="#">Urban-Service</a></li>
                                            <li><a href="#">Username-Claim</a></li>
                                            <li><a href="#">Verification</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-5 pe-md-0">
                                        <div class="row align-items-center">
                                            <div class="col-md-3 p-md-0">
                                                <img src="{{asset('user_asset/img/card13.png')}}" class="img1" alt="">
                                            </div>
                                            <div class="col-md-4">
                                                <a href="#" class="rep">
                                                    <img src="{{asset('user_asset/img/card14.png')}}" alt="">
                                                    <h5>123 Replies</h5>
                                                </a>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="#" class="rep">
                                                    <img src="{{asset('user_asset/img/card12.png')}}" alt="">
                                                    <h5>163 views</h5>
                                                </a>
                                            </div>
                                            <div class="col-md-2">
                                                <h5>2h</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="boxed-wrap">
                                <div class="row align-items-center">
                                    <div class="col-md-7">
                                        <h4>New Fresh Panels -Musician $1000 Public Figure $5000 Entrepreneur $5500New Fresh Panels -Musician $1000 Public Figure $5000 Entrepreneur $5500</h4>
                                        <ul class="links">
                                            <li><span class="span">Fanpages</span><span class="box4"></span></li>
                                            <li><span class="span">Social Media</span><span class="box2"></span></li>
                                        </ul>
                                        <ul class="cate">
                                            <li class="active"><a href="#">Featured</a></li>
                                            <li><a href="#">Name-Change</a></li>
                                            <li><a href="#">Urban-Service</a></li>
                                            <li><a href="#">Username-Claim</a></li>
                                            <li><a href="#">Verification</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-5 pe-md-0">
                                        <div class="row align-items-center">
                                            <div class="col-md-3 p-md-0">
                                                <img src="{{asset('user_asset/img/card13.png')}}" class="img1" alt="">
                                            </div>
                                            <div class="col-md-4">
                                                <a href="#" class="rep">
                                                    <img src="{{asset('user_asset/img/card14.png')}}" alt="">
                                                    <h5>123 Replies</h5>
                                                </a>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="#" class="rep">
                                                    <img src="{{asset('user_asset/img/card12.png')}}" alt="">
                                                    <h5>163 views</h5>
                                                </a>
                                            </div>
                                            <div class="col-md-2">
                                                <h5>2h</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="boxed-wrap">
                                <div class="row align-items-center">
                                    <div class="col-md-7">
                                        <h4>New Fresh Panels -Musician $1000 Public Figure $5000 Entrepreneur $5500New Fresh Panels -Musician $1000 Public Figure $5000 Entrepreneur $5500</h4>
                                        <ul class="links">
                                            <li><span class="span">IG Services</span><span class="box3"></span></li>
                                            <li><span class="span">Social Media</span><span class="box2"></span></li>
                                        </ul>
                                        <ul class="cate">
                                            <li class="active"><a href="#">Featured</a></li>
                                            <li><a href="#">Name-Change</a></li>
                                            <li><a href="#">Urban-Service</a></li>
                                            <li><a href="#">Username-Claim</a></li>
                                            <li><a href="#">Verification</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-5 pe-md-0">
                                        <div class="row align-items-center">
                                            <div class="col-md-3 p-md-0">
                                                <img src="{{asset('user_asset/img/card13.png')}}" class="img1" alt="">
                                            </div>
                                            <div class="col-md-4">
                                                <a href="#" class="rep">
                                                    <img src="{{asset('user_asset/img/card14.png')}}" alt="">
                                                    <h5>123 Replies</h5>
                                                </a>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="#" class="rep">
                                                    <img src="{{asset('user_asset/img/card12.png')}}" alt="">
                                                    <h5>163 views</h5>
                                                </a>
                                            </div>
                                            <div class="col-md-2">
                                                <h5>2h</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection
