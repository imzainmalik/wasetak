@extends('User.layouts.master')
@section('content')
    <!-- <div class="sub_header">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="sub_header_col">
                            <div class="sub_header_menu"><a href="#"><i class="ri-menu-2-line"></i></a></div>
                        <div class="sub_header_search">
                                <input type="search" placeholder="Search" class="form-control">
                            <i class="ri-search-line"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="inner_page_container profile_page">
            <div class="container">
                <div class="profile_overview">
                    <div class="profile_img">
                        <img src="{{ asset('user_asset/img/profile.png') }}">
                </div>
                <div class="profile_info">
                        <div class="profile_name">{{ $data->name }}</div>
                    <div class="identity"><img src="{{ asset('user_asset/img/verified-badge.png') }}"> Verified Identity
                    </div>
                </div>
            </div>
            <div class="profile_sub_info">
                    <h1>summary</h1>
                <div class="prifile_menubar">
                        <div class="profile_menu">
                            <a href="#" class="active">Summary</a>
                        <a href="#">Activity</a>
                        <a href="#">Notifications</a>
                        <a href="#">Message</a>
                        <a href="#">Invites</a>
                        <a href="#">Badges</a>
                        <a href="#">Follows</a>
                        <a href="#">Ticket</a>
                        <a href="#">Feedback</a>
                        <a href="#">Preferences</a>
                    </div>
                </div>
                <div class="profile_summary_count">
                        <div class="profile_summary_count_box">
                            <b>0</b>
                        <span>Topics Created</span>
                    </div>
                    <div class="profile_summary_count_box">
                            <b>0</b>
                        <span>Bookmarks</span>
                    </div>
                    <div class="profile_summary_count_box">
                            <b>25</b>
                        <i class="ri-thumb-up-fill"></i>
                        <span>Received</span>
                    </div>
                    <div class="profile_summary_count_box">
                            <b>2</b>
                        <i class="ri-thumb-up-fill"></i>
                        <span>Given</span>
                    </div>
                    <div class="profile_summary_count_box">
                            <b>56</b>
                        <span>Post Read</span>
                    </div>
                    <div class="profile_summary_count_box">
                            <b>6</b>
                        <span>Topics Viewed</span>
                    </div>
                    <div class="profile_summary_count_box">
                            <b>10</b>
                        <span>Read Time</span>
                    </div>
                    <div class="profile_summary_count_box">
                            <b>5</b>
                        <span>Days Visited</span>
                    </div>
                    <div class="profile_summary_count_box">
                            <b>0</b>
                        <span>Post Created</span>
                    </div>
                </div>
                <div class="profile_summary_dash">
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="profile_summary_dash_box">
                                    <h4>Top Replies</h4>
                                <span>0</span>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="profile_summary_dash_box">
                                    <h4>Top Topics</h4>
                                <span class="fill">25</span>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="profile_summary_dash_box">
                                    <h4>Top Links</h4>
                                <span>0</span>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="profile_summary_dash_box">
                                    <h4>Most replied to</h4>
                                <span>0</span>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="profile_summary_dash_box">
                                    <h4>Most liked by</h4>
                                <span class="fill">100</span>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="profile_summary_dash_box">
                                    <h4>Most liked</h4>
                                <span class="fill">115</span>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="profile_summary_dash_box">
                                    <h4>أعلى شارات</h4>
                                <span>0</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <section class="sec14">
        <div class="container">
            <div class="profile-icon-wrap">
                <div class="row mb-4">
                    <div class="col-md-12">
                        <img src="{{asset('user_asset/img/card127.png')}}" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="boxed-imaged modalButton" data-popup="popupTen">
                                    <img src="{{asset('user_asset/img/card16.png')}}" class="img1" alt="">
                                    <img src="{{asset('user_asset/img/card47.png')}}" class="img2" alt="">
                                </div>
                            </div>
                            <div class="col-md-9">
                                <h3>Hooper123@</h3>
                                <h5> <span>VIP Member</span> | Hooper Smith</h5>
                                <h6>BIO</h6>
                                <p class="para">Vouched-for Member🏅 | Organic PR and IG Services</p>
                                <p class="para">Diamond Club</p>
                                <p class="para"> Featured Topic</p>
                            </div>
                            <div class="col-md12">
                                <p class="located"><i class="fas fa-map-marker-alt"></i> Ajman United Arab Emirates </p>
                                <p class="truted">Trusted by 1000+ Clients. Exceptional Service. Proven Results</p>
                                <div class="review-star">
                                    <span dir="ltr">(152 reviews)</span>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <a href="#" class="theme-btn1">Message <img src="{{asset('user_asset/img/card91.png')}}" alt=""></a>
                        <div class="normal">
                            <a href="#" class=" dropbtn-normal"><i class="fas fa-sort-down"></i> Normal <img src="{{asset('user_asset/img/card128.png')}}" alt=""></a>
                            <div class="dropdown-content-normal">
                                <a href="#" class="pb-0">
                                    <div class="nomral-change">
                                        <img src="{{asset('user_asset/img/card128.png')}}" alt="">
                                        <h6>Normal</h6>
                                    </div>
                                    <p class="para mb-3">You will be notified if this user replies to you, quotes you, or mentions you</p>
                                </a>
                                <a href="#" class="pt-0">
                                    <div class="nomral-change">
                                        <img src="{{asset('user_asset/img/card129.png')}}" alt="">
                                        <h6>Muted</h6>
                                    </div>
                                    <p class="para">You will not receive any notifications related to this user</p>
                                </a>
                            </div>
                        </div>

                        <a href="#" class="theme-btn2">Follow <img src="{{asset('user_asset/img/card93.png')}}" alt=""></a>
                        <a href="#" class="theme-btn2">Chat <img src="{{asset('user_asset/img/card92.png')}}" alt=""></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="bored-lines">
                            <ul class="categ">
                                <li> 154 <span>Followers</span></li>
                                <li> 40 <span>Following</span></li>
                                <li> April 13, 2023 <span>Joined</span></li>
                                <li> 5 hours ago <span>Last post</span></li>
                                <li> 3 hours <span>Seen</span></li>
                                <li> 5484 <span>Views</span></li>
                                <li> Regular <span>Views </span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 pe-md-0 ps-md-0">
                    <div class="boxed-img modalButton" data-popup="popupEleven">
                        <img src="{{asset('user_asset/img/card16.png')}}" class="img1" alt="">
                        <img src="{{asset('user_asset/img/card47.png')}}" class="img2" alt="">
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="padd-r">
                        <h2 class="mt-4">@Hooper123</h2>
                        <span class="vi">VIP Member</span> | <span class="sm">Hooper Smith</span>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fal fa-star"></i>
                            <i class="fal fa-star"></i>
                        </div>
                        <div class="boxe-lined"></div>
                        <ul class="prof">
                            <li><a href="mailto:mohd125@gmail.com">mohd125@gmail.com : <span>Email </span></a></li>
                            <li>
                                <p> Basic User :<span>Trust Level</span></p>
                            </li>
                            <li>
                                <p> 20 :<span>Views </span></p>
                            </li>
                            <li>
                                <p>8 Mins :<span>Seen </span></p>
                            </li>
                            <li>
                                <p>March 12 : <span>Last Post </span></p>
                            </li>
                            <li>
                                <p>March 12 : <span>Joined </span></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1>Activity</h1>
                    <ul class="lists">
                        <li data-targetit="box-1" class="active"><span>summary</span> <img src="{{asset('user_asset/img/card49.png')}}" alt=""></li>
                        <li data-targetit="box-2"><span>Activity</span> <img src="{{asset('user_asset/img/card50.png')}}" alt=""></li>
                        <li data-targetit="box-3"><span>Notifications</span> <img src="{{asset('user_asset/img/card54.png')}}" alt=""></li>
                        <li data-targetit="box-4"><span>Message</span> <img src="{{asset('user_asset/img/card55.png')}}" alt=""></li>
                        <li data-targetit="box-5"><span>Invites</span> <img src="{{asset('user_asset/img/card58.png')}}" alt=""></li>
                        <li data-targetit="box-6"><span>Badges </span><img src="{{asset('user_asset/img/card51.png')}}" alt=""></li>
                        <li data-targetit="box-7"><span>Follows</span><img src="{{asset('user_asset/img/card52.png')}}" alt=""></li>
                        <li data-targetit="box-8"><span>Ticket</span> <img src="{{asset('user_asset/img/card56.png')}}" alt=""></li>
                        <li data-targetit="box-9"><span>Feedback</span><img src="{{asset('user_asset/img/card53.png')}}" alt=""></li>
                        <li data-targetit="box-10"><span>Preferences</span> <img src="{{asset('user_asset/img/card57.png')}}" alt=""></li>
                    </ul>
                    <div class="box-1 showfirst summary">
                        <h1>Stats</h1>
                        <ul>
                            <li>
                                <div class="boxed-stat">
                                    <h5>Days Visited<span>25</span></h5>
                                </div>
                            </li>
                            <li>
                                <div class="boxed-stat">
                                    <h5>Read time<span>1h</span></h5>
                                </div>
                            </li>
                            <li>
                                <div class="boxed-stat">
                                    <h5>Recent read time<span>10m</span></h5>
                                </div>
                            </li>
                            <li>
                                <div class="boxed-stat">
                                    <h5>Topics viewed<span>32</span></h5>
                                </div>
                            </li>
                            <li>
                                <div class="boxed-stat">
                                    <h5>Post read<span>123</span></h5>
                                </div>
                            </li>
                            <li>
                                <div class="boxed-stat">
                                    <h5>Given <img src="{{asset('user_asset/img/card36.png')}}" alt=""><span>100</span></h5>
                                </div>
                            </li>
                            <li>
                                <div class="boxed-stat">
                                    <h5>Received <img src="{{asset('user_asset/img/card36.png')}}" alt=""><span>72</span></h5>
                                </div>
                            </li>
                            <li>
                                <div class="boxed-stat">
                                    <h5>Bookmarks<span>3</span></h5>
                                </div>
                            </li>
                            <li>
                                <div class="boxed-stat">
                                    <h5>Topics created<span>57</span></h5>
                                </div>
                            </li>
                            <li>
                                <div class="boxed-stat">
                                    <h5>Post created<span>35</span></h5>
                                </div>
                            </li>
                        </ul>
                        <div class="summary-wrap">
                            <div class="row rowgap">
                                <div class="col-md-6">
                                    <div class="boxed-summary">
                                        <h4>Top Replies</h4>
                                        <div class="boxed-wrap">
                                            <p class="para">Showoff time! What did your social media income allow you to buy in the past 12 months? Show us what you bought, no matter how big or small!</p>
                                            <span>January 2023</span> <span><img src="{{asset('user_asset/img/card36.png')}}" alt=""> 52</span>
                                        </div>
                                        <div class="boxed-wrap">
                                            <p class="para">Showoff time! What did your social media income allow you to buy in the past 12 months? Show us what you bought, no matter how big or small!</p>
                                            <span>January 2023</span> <span><img src="{{asset('user_asset/img/card36.png')}}" alt=""> 52</span>
                                        </div>
                                        <div class="boxed-wrap">
                                            <p class="para">Showoff time! What did your social media income allow you to buy in the past 12 months? Show us what you bought, no matter how big or small!</p>
                                            <span>January 2023</span> <span><img src="{{asset('user_asset/img/card36.png')}}" alt=""> 52</span>
                                        </div>
                                        <div class="boxed-wrap">
                                            <p class="para">Showoff time! What did your social media income allow you to buy in the past 12 months? Show us what you bought, no matter how big or small!</p>
                                            <span>January 2023</span> <span><img src="{{asset('user_asset/img/card36.png')}}" alt=""> 52</span>
                                        </div>
                                    </div>
                                    <a href="#" class="reply">More Replies</a>
                                </div>
                                <div class="col-md-6">
                                    <div class="boxed-summary">
                                        <h4>Top Topics</h4>
                                        <div class="boxed-wrap">
                                            <p class="para">Get published on NY Post, BBC, Daily Express, Daily Star, Forbes (ORGANIC/NON SPONSORED) - Tier 1 U.K</p>
                                            <span>January 2023</span> <span><img src="{{asset('user_asset/img/card36.png')}}" alt=""> 52</span>
                                        </div>
                                        <div class="boxed-wrap">
                                            <p class="para">Get published on NY Post, BBC, Daily Express, Daily Star, Forbes (ORGANIC/NON SPONSORED) - Tier 1 U.K</p>
                                            <span>January 2023</span> <span><img src="{{asset('user_asset/img/card36.png')}}" alt=""> 52</span>
                                        </div>
                                        <div class="boxed-wrap">
                                            <p class="para">Get published on NY Post, BBC, Daily Express, Daily Star, Forbes (ORGANIC/NON SPONSORED) - Tier 1 U.K</p>
                                            <span>January 2023</span> <span><img src="{{asset('user_asset/img/card36.png')}}" alt=""> 52</span>
                                        </div>
                                        <div class="boxed-wrap">
                                            <p class="para">Get published on NY Post, BBC, Daily Express, Daily Star, Forbes (ORGANIC/NON SPONSORED) - Tier 1 U.K</p>
                                            <span>January 2023</span> <span><img src="{{asset('user_asset/img/card36.png')}}" alt=""> 52</span>
                                        </div>
                                    </div>
                                    <a href="#" class="reply">More Replies</a>
                                </div>
                                <div class="col-md-6">
                                    <div class="boxed-summary">
                                        <h4>Top Replies</h4>
                                        <div class="boxed-wrap">
                                            <p class="org">forbes.com.mx/la-expansion-de-roger-argenis-con-su-estudio-para-el-desarrollo-de</p>
                                            <span class="number">132</span>
                                            <p class="para">FORBES Mexico - Full Feature posted by FORBES STAFF | Exclusive | Verification Worthy | 100% Organic</p>
                                        </div>
                                        <div class="boxed-wrap">
                                            <p class="org">forbes.com.mx/la-expansion-de-roger-argenis-con-su-estudio-para-el-desarrollo-de</p>
                                            <span class="number">132</span>
                                            <p class="para">FORBES Mexico - Full Feature posted by FORBES STAFF | Exclusive | Verification Worthy | 100% Organic</p>
                                        </div>
                                        <div class="boxed-wrap">
                                            <p class="org">forbes.com.mx/la-expansion-de-roger-argenis-con-su-estudio-para-el-desarrollo-de</p>
                                            <span class="number">132</span>
                                            <p class="para">FORBES Mexico - Full Feature posted by FORBES STAFF | Exclusive | Verification Worthy | 100% Organic</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="boxed-summary">
                                        <h4>Most Replied to</h4>
                                        <div class="boxed-wrap">
                                            <div class="m-repl">
                                                <div class="repl-img">
                                                    <img src="{{asset('user_asset/img/card131.png')}}" alt="">
                                                    <img src="{{asset('user_asset/img/card134.png')}}" class="img2" alt="">
                                                </div>
                                                <span>
                                                    <h5>Master | <span>Comfy</span></h5>
                                                    <span class="val"><img src="{{asset('user_asset/img/card138.png')}}" alt=""> 5</span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="boxed-wrap">
                                            <div class="m-repl">
                                                <div class="repl-img">
                                                    <img src="{{asset('user_asset/img/card130.png')}}" alt="">
                                                    <img src="{{asset('user_asset/img/card135.png')}}" class="img2" alt="">
                                                </div>
                                                <span>
                                                    <h5> VIP | <span>Steven Edward</span></h5>
                                                    <span class="val"><img src="{{asset('user_asset/img/card138.png')}}" alt=""> 8</span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="boxed-wrap">
                                            <div class="m-repl">
                                                <div class="repl-img">
                                                    <img src="{{asset('user_asset/img/card132.png')}}" alt="">
                                                    <img src="{{asset('user_asset/img/card136.png')}}" class="img2" alt="">
                                                </div>
                                                <span>
                                                    <h5>Basic | <span>Mike andreson</span></h5>
                                                    <span class="val"><img src="{{asset('user_asset/img/card138.png')}}" alt=""> 15</span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="boxed-wrap">
                                            <div class="m-repl">
                                                <div class="repl-img">
                                                    <img src="{{asset('user_asset/img/card133.png')}}" alt="">
                                                    <img src="{{asset('user_asset/img/card137.png')}}" class="img2" alt="">
                                                </div>
                                                <span>
                                                    <h5>Frequent | <span>Jerry Williams</span></h5>
                                                    <span class="val"><img src="{{asset('user_asset/img/card138.png')}}" alt=""> 52</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="boxed-summary">
                                        <h4>Most Liked by</h4>
                                        <div class="boxed-wrap">
                                            <div class="m-repl">
                                                <div class="repl-img">
                                                    <img src="{{asset('user_asset/img/card131.png')}}" alt="">
                                                    <img src="{{asset('user_asset/img/card134.png')}}" class="img2" alt="">
                                                </div>
                                                <span>
                                                    <h5>Master | <span>Comfy</span></h5>
                                                    <span class="val"><img src="{{asset('user_asset/img/card138.png')}}" alt=""> 5</span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="boxed-wrap">
                                            <div class="m-repl">
                                                <div class="repl-img">
                                                    <img src="{{asset('user_asset/img/card130.png')}}" alt="">
                                                    <img src="{{asset('user_asset/img/card135.png')}}" class="img2" alt="">
                                                </div>
                                                <span>
                                                    <h5> VIP | <span>Steven Edward</span></h5>
                                                    <span class="val"><img src="{{asset('user_asset/img/card138.png')}}" alt=""> 8</span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="boxed-wrap">
                                            <div class="m-repl">
                                                <div class="repl-img">
                                                    <img src="{{asset('user_asset/img/card132.png')}}" alt="">
                                                    <img src="{{asset('user_asset/img/card136.png')}}" class="img2" alt="">
                                                </div>
                                                <span>
                                                    <h5>Basic | <span>Mike andreson</span></h5>
                                                    <span class="val"><img src="{{asset('user_asset/img/card138.png')}}" alt=""> 15</span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="boxed-wrap">
                                            <div class="m-repl">
                                                <div class="repl-img">
                                                    <img src="{{asset('user_asset/img/card133.png')}}" alt="">
                                                    <img src="{{asset('user_asset/img/card137.png')}}" class="img2" alt="">
                                                </div>
                                                <span>
                                                    <h5>Frequent | <span>Jerry Williams</span></h5>
                                                    <span class="val"><img src="{{asset('user_asset/img/card138.png')}}" alt=""> 52</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="boxed-summary">
                                        <h4>Most Liked</h4>
                                        <div class="boxed-wrap">
                                            <div class="m-repl">
                                                <div class="repl-img">
                                                    <img src="{{asset('user_asset/img/card131.png')}}" alt="">
                                                    <img src="{{asset('user_asset/img/card134.png')}}" class="img2" alt="">
                                                </div>
                                                <span>
                                                    <h5>Master | <span>Comfy</span></h5>
                                                    <span class="val"><img src="{{asset('user_asset/img/card138.png')}}" alt=""> 5</span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="boxed-wrap">
                                            <div class="m-repl">
                                                <div class="repl-img">
                                                    <img src="{{asset('user_asset/img/card130.png')}}" alt="">
                                                    <img src="{{asset('user_asset/img/card135.png')}}" class="img2" alt="">
                                                </div>
                                                <span>
                                                    <h5> VIP | <span>Steven Edward</span></h5>
                                                    <span class="val"><img src="{{asset('user_asset/img/card138.png')}}" alt=""> 8</span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="boxed-wrap">
                                            <div class="m-repl">
                                                <div class="repl-img">
                                                    <img src="{{asset('user_asset/img/card132.png')}}" alt="">
                                                    <img src="{{asset('user_asset/img/card136.png')}}" class="img2" alt="">
                                                </div>
                                                <span>
                                                    <h5>Basic | <span>Mike andreson</span></h5>
                                                    <span class="val"><img src="{{asset('user_asset/img/card138.png')}}" alt=""> 15</span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="boxed-wrap">
                                            <div class="m-repl">
                                                <div class="repl-img">
                                                    <img src="{{asset('user_asset/img/card133.png')}}" alt="">
                                                    <img src="{{asset('user_asset/img/card137.png')}}" class="img2" alt="">
                                                </div>
                                                <span>
                                                    <h5>Frequent | <span>Jerry Williams</span></h5>
                                                    <span class="val"><img src="{{asset('user_asset/img/card138.png')}}" alt=""> 52</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="boxed-summary top-categ">
                                        <h4>Top Categories</h4>
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Categories</th>
                                                    <th>Topics</th>
                                                    <th>Replies</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><span class="boxed-1"></span>FB & IG Services</td>
                                                    <td>20</td>
                                                    <td>31</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="boxed-2"></span>PR Services</td>
                                                    <td>20</td>
                                                    <td>31</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="boxed-3"></span>Buyer request</td>
                                                    <td>20</td>
                                                    <td>31</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="boxed-4"></span>wasteak content rewards and Merch !</td>
                                                    <td>20</td>
                                                    <td>31</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="boxed-5"></span>Other</td>
                                                    <td>20</td>
                                                    <td>31</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="boxed-6"></span>Site new & Feedback</td>
                                                    <td>20</td>
                                                    <td>31</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="boxed-summary bages">
                                        <h4>Top Badges</h4>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="boxed-wrap">
                                                    <img src="{{asset('user_asset/img/card139.png')}}" alt="">
                                                    <h4>Identity verified</h4>
                                                    <p class="para">This badge is awarded to members who have verified their status Full of their identity by presenting an identity card Issued by a government agency.</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="boxed-wrap">
                                                    <img src="{{asset('user_asset/img/card139.png')}}" alt="">
                                                    <h4>Identity verified</h4>
                                                    <p class="para">This badge is awarded to members who have verified their status Full of their identity by presenting an identity card Issued by a government agency.</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="boxed-wrap">
                                                    <img src="{{asset('user_asset/img/card139.png')}}" alt="">
                                                    <h4>Identity verified</h4>
                                                    <p class="para">This badge is awarded to members who have verified their status Full of their identity by presenting an identity card Issued by a government agency.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#" class="reply">More Replies</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-2 activity">
                        <div class="boxed-acti">
                            <h1>No activity yet</h1>
                            <p class="para">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to</p>
                        </div>
                        <div class="row">
                            <div class="col-md-2 px-md-0">
                                <ul class="list">
                                    <li data-targetit="box-11" class="active">All</li>
                                    <li data-targetit="box-12">Topics</li>
                                    <li data-targetit="box-13">Replies</li>
                                    <li data-targetit="box-14">Read</li>
                                    <li data-targetit="box-15">Drafts</li>
                                    <li data-targetit="box-16">Likes</li>
                                    <li data-targetit="box-17">Bookmarks</li>
                                    <li data-targetit="box-18">Solve</li>
                                    <li data-targetit="box-19">Report</li>
                                    <li data-targetit="box-20" class="end-co"><img src="{{asset('user_asset/img/card59.png')}}" alt=""> Download All</li>
                                </ul>
                            </div>
                            <div class="col-md-10">
                                <div class="box-11 showfirst all">
                                    <div class="boxed">
                                        <div class="row align-items-center">
                                            <div class="col-md-9">
                                                <div class="boxed-image">
                                                    <img src="{{asset('user_asset/img/card48.png')}}" alt="">
                                                    <div>
                                                        <h5><a href="#">New Fresh Panels -Musician $1000 Public Figure $5000 Entrepreneur $5500</a></h5>
                                                        <span>FB & IG Services</span>
                                                    </div>
                                                </div>
                                                <p class="para">is interested on Apr 11</p>
                                            </div>
                                            <div class="col-md-3 text-e">
                                                <p class="para">Apr 11</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="boxed">
                                        <div class="row align-items-center">
                                            <div class="col-md-9">
                                                <div class="boxed-image">
                                                    <img src="{{asset('user_asset/img/card48.png')}}" alt="">
                                                    <div>
                                                        <h5><a href="#">New Fresh Panels -Musician $1000 Public Figure $5000 Entrepreneur $5500</a></h5>
                                                        <span>FB & IG Services</span>
                                                    </div>
                                                </div>
                                                <p class="para">is interested on Apr 11</p>
                                            </div>
                                            <div class="col-md-3 text-e">
                                                <p class="para">Apr 11</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="boxed">
                                        <div class="row align-items-center">
                                            <div class="col-md-9">
                                                <div class="boxed-image">
                                                    <img src="{{asset('user_asset/img/card48.png')}}" alt="">
                                                    <div>
                                                        <h5><a href="#">New Fresh Panels -Musician $1000 Public Figure $5000 Entrepreneur $5500</a></h5>
                                                        <span>FB & IG Services</span>
                                                    </div>
                                                </div>
                                                <p class="para">is interested on Apr 11</p>
                                            </div>
                                            <div class="col-md-3 text-e">
                                                <p class="para">Apr 11</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="boxed">
                                        <div class="row align-items-center">
                                            <div class="col-md-9">
                                                <div class="boxed-image">
                                                    <img src="{{asset('user_asset/img/card48.png')}}" alt="">
                                                    <div>
                                                        <h5><a href="#">New Fresh Panels -Musician $1000 Public Figure $5000 Entrepreneur $5500</a></h5>
                                                        <span>FB & IG Services</span>
                                                    </div>
                                                </div>
                                                <p class="para">is interested on Apr 11</p>
                                            </div>
                                            <div class="col-md-3 text-e">
                                                <p class="para">Apr 11</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="boxed">
                                        <div class="row align-items-center">
                                            <div class="col-md-9">
                                                <div class="boxed-image">
                                                    <img src="{{asset('user_asset/img/card48.png')}}" alt="">
                                                    <div>
                                                        <h5><a href="#">New Fresh Panels -Musician $1000 Public Figure $5000 Entrepreneur $5500</a></h5>
                                                        <span>FB & IG Services</span>
                                                    </div>
                                                </div>
                                                <p class="para">is interested on Apr 11</p>
                                            </div>
                                            <div class="col-md-3 text-e">
                                                <p class="para">Apr 11</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="boxed">
                                        <div class="row align-items-center">
                                            <div class="col-md-9">
                                                <div class="boxed-image">
                                                    <img src="{{asset('user_asset/img/card48.png')}}" alt="">
                                                    <div>
                                                        <h5><a href="#">New Fresh Panels -Musician $1000 Public Figure $5000 Entrepreneur $5500</a></h5>
                                                        <span>FB & IG Services</span>
                                                    </div>
                                                </div>
                                                <p class="para">is interested on Apr 11</p>
                                            </div>
                                            <div class="col-md-3 text-e">
                                                <p class="para">Apr 11</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="boxed">
                                        <div class="row align-items-center">
                                            <div class="col-md-9">
                                                <div class="boxed-image">
                                                    <img src="{{asset('user_asset/img/card48.png')}}" alt="">
                                                    <div>
                                                        <h5><a href="#">New Fresh Panels -Musician $1000 Public Figure $5000 Entrepreneur $5500</a></h5>
                                                        <span>FB & IG Services</span>
                                                    </div>
                                                </div>
                                                <p class="para">is interested on Apr 11</p>
                                            </div>
                                            <div class="col-md-3 text-e">
                                                <p class="para">Apr 11</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-12 topics">
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
                                                    <div class="col-md-6">
                                                        <h4>New Fresh Panels -Musician $1000 Public Figure $5000 Entrepreneur $5500New</h4>
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
                                                    <div class="col-md-6">
                                                        <div class="row align-items-center">
                                                            <div class="col-md-3 p-md-0">
                                                                <img src="{{asset('user_asset/img/card13.png')}}" class="img1" alt="">
                                                            </div>
                                                            <div class="col-md-4 text-center">
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
                                                    <div class="col-md-6">
                                                        <h4>New Fresh Panels -Musician $1000 Public Figure $5000 Entrepreneur $5500New</h4>
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
                                                    <div class="col-md-6">
                                                        <div class="row align-items-center">
                                                            <div class="col-md-3 p-md-0">
                                                                <img src="{{asset('user_asset/img/card13.png')}}" class="img1" alt="">
                                                            </div>
                                                            <div class="col-md-4 text-center">
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
                                                    <div class="col-md-6">
                                                        <h4>New Fresh Panels -Musician $1000 Public Figure $5000 Entrepreneur $5500New</h4>
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
                                                    <div class="col-md-6">
                                                        <div class="row align-items-center">
                                                            <div class="col-md-3 p-md-0">
                                                                <img src="{{asset('user_asset/img/card13.png')}}" class="img1" alt="">
                                                            </div>
                                                            <div class="col-md-4 text-center">
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
                                                    <div class="col-md-6">
                                                        <h4>New Fresh Panels -Musician $1000 Public Figure $5000 Entrepreneur $5500New</h4>
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
                                                    <div class="col-md-6">
                                                        <div class="row align-items-center">
                                                            <div class="col-md-3 p-md-0">
                                                                <img src="{{asset('user_asset/img/card13.png')}}" class="img1" alt="">
                                                            </div>
                                                            <div class="col-md-4 text-center">
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
                                                    <div class="col-md-6">
                                                        <h4>New Fresh Panels -Musician $1000 Public Figure $5000 Entrepreneur $5500New</h4>
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
                                                    <div class="col-md-6">
                                                        <div class="row align-items-center">
                                                            <div class="col-md-3 p-md-0">
                                                                <img src="{{asset('user_asset/img/card13.png')}}" class="img1" alt="">
                                                            </div>
                                                            <div class="col-md-4 text-center">
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
                                <div class="box-13 replies">
                                    <div class="boxed">
                                        <div class="row align-items-center">
                                            <div class="col-md-9">
                                                <div class="boxed-image">
                                                    <img src="{{asset('user_asset/img/card48.png')}}" alt="">
                                                    <div>
                                                        <h5><a href="#">New Fresh Panels -Musician $1000 Public Figure $5000 Entrepreneur $5500</a></h5>
                                                        <span>FB & IG Services</span>
                                                    </div>
                                                </div>
                                                <p class="para">is interested on Apr 11</p>
                                            </div>
                                            <div class="col-md-3 text-e">
                                                <p class="para">Apr 11</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="boxed">
                                        <div class="row align-items-center">
                                            <div class="col-md-9">
                                                <div class="boxed-image">
                                                    <img src="{{asset('user_asset/img/card48.png')}}" alt="">
                                                    <div>
                                                        <h5><a href="#">New Fresh Panels -Musician $1000 Public Figure $5000 Entrepreneur $5500</a></h5>
                                                        <span>FB & IG Services</span>
                                                    </div>
                                                </div>
                                                <p class="para">is interested on Apr 11</p>
                                            </div>
                                            <div class="col-md-3 text-e">
                                                <p class="para">Apr 11</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="boxed">
                                        <div class="row align-items-center">
                                            <div class="col-md-9">
                                                <div class="boxed-image">
                                                    <img src="{{asset('user_asset/img/card48.png')}}" alt="">
                                                    <div>
                                                        <h5><a href="#">New Fresh Panels -Musician $1000 Public Figure $5000 Entrepreneur $5500</a></h5>
                                                        <span>FB & IG Services</span>
                                                    </div>
                                                </div>
                                                <p class="para">is interested on Apr 11</p>
                                            </div>
                                            <div class="col-md-3 text-e">
                                                <p class="para">Apr 11</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="boxed">
                                        <div class="row align-items-center">
                                            <div class="col-md-9">
                                                <div class="boxed-image">
                                                    <img src="{{asset('user_asset/img/card48.png')}}" alt="">
                                                    <div>
                                                        <h5><a href="#">New Fresh Panels -Musician $1000 Public Figure $5000 Entrepreneur $5500</a></h5>
                                                        <span>FB & IG Services</span>
                                                    </div>
                                                </div>
                                                <p class="para">is interested on Apr 11</p>
                                            </div>
                                            <div class="col-md-3 text-e">
                                                <p class="para">Apr 11</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="boxed">
                                        <div class="row align-items-center">
                                            <div class="col-md-9">
                                                <div class="boxed-image">
                                                    <img src="{{asset('user_asset/img/card48.png')}}" alt="">
                                                    <div>
                                                        <h5><a href="#">New Fresh Panels -Musician $1000 Public Figure $5000 Entrepreneur $5500</a></h5>
                                                        <span>FB & IG Services</span>
                                                    </div>
                                                </div>
                                                <p class="para">is interested on Apr 11</p>
                                            </div>
                                            <div class="col-md-3 text-e">
                                                <p class="para">Apr 11</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="boxed">
                                        <div class="row align-items-center">
                                            <div class="col-md-9">
                                                <div class="boxed-image">
                                                    <img src="{{asset('user_asset/img/card48.png')}}" alt="">
                                                    <div>
                                                        <h5><a href="#">New Fresh Panels -Musician $1000 Public Figure $5000 Entrepreneur $5500</a></h5>
                                                        <span>FB & IG Services</span>
                                                    </div>
                                                </div>
                                                <p class="para">is interested on Apr 11</p>
                                            </div>
                                            <div class="col-md-3 text-e">
                                                <p class="para">Apr 11</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="boxed">
                                        <div class="row align-items-center">
                                            <div class="col-md-9">
                                                <div class="boxed-image">
                                                    <img src="{{asset('user_asset/img/card48.png')}}" alt="">
                                                    <div>
                                                        <h5><a href="#">New Fresh Panels -Musician $1000 Public Figure $5000 Entrepreneur $5500</a></h5>
                                                        <span>FB & IG Services</span>
                                                    </div>
                                                </div>
                                                <p class="para">is interested on Apr 11</p>
                                            </div>
                                            <div class="col-md-3 text-e">
                                                <p class="para">Apr 11</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-14 read">
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
                                                        <h4>New Fresh Panels -Musician $1000 Public Figure $5000 Entrepreneur $5500New</h4>
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
                                                    <div class="col-md-5 pe-0">
                                                        <div class="row align-items-center">
                                                            <div class="col-md-3 p-md-0">
                                                                <img src="{{asset('user_asset/img/card13.png')}}" class="img1" alt="">
                                                            </div>
                                                            <div class="col-md-4">
                                                                <a href="#" class="rep">
                                                                    <h5>123 Replies</h5>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <a href="#" class="rep">
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
                                                        <h4>New Fresh Panels -Musician $1000 Public Figure $5000 Entrepreneur $5500New</h4>
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
                                                    <div class="col-md-5 pe-0">
                                                        <div class="row align-items-center">
                                                            <div class="col-md-3 p-md-0">
                                                                <img src="{{asset('user_asset/img/card13.png')}}" class="img1" alt="">
                                                            </div>
                                                            <div class="col-md-4">
                                                                <a href="#" class="rep">
                                                                    <h5>123 Replies</h5>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <a href="#" class="rep">
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
                                                        <h4>New Fresh Panels -Musician $1000 Public Figure $5000 Entrepreneur $5500New</h4>
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
                                                    <div class="col-md-5 pe-0">
                                                        <div class="row align-items-center">
                                                            <div class="col-md-3 p-md-0">
                                                                <img src="{{asset('user_asset/img/card13.png')}}" class="img1" alt="">
                                                            </div>
                                                            <div class="col-md-4">
                                                                <a href="#" class="rep">
                                                                    <h5>123 Replies</h5>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <a href="#" class="rep">
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
                                                        <h4>New Fresh Panels -Musician $1000 Public Figure $5000 Entrepreneur $5500New</h4>
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
                                                    <div class="col-md-5 pe-0">
                                                        <div class="row align-items-center">
                                                            <div class="col-md-3 p-md-0">
                                                                <img src="{{asset('user_asset/img/card13.png')}}" class="img1" alt="">
                                                            </div>
                                                            <div class="col-md-4">
                                                                <a href="#" class="rep">
                                                                    <h5>123 Replies</h5>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <a href="#" class="rep">
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
                                <div class="box-15 draft">
                                    <div class="boxed">
                                        <div class="row align-items-start">
                                            <div class="col-md-9">
                                                <div class="boxed-image align-items-start">
                                                    <img src="{{asset('user_asset/img/card48.png')}}" alt="">
                                                    <div>
                                                        <span><span class="cor-pi"></span>Buyer Request</span>
                                                        <p class="para">Country of followers (majority): Amount of followers: Topic/Niche: Promotion methods used? (Organic/S4S/Follow Unfollow/Engagement Networks): Description: List item</p>
                                                    </div>
                                                </div>
                                                <a href="#" class="theme-gr">Resume <img src="{{asset('user_asset/img/card60.png')}}" alt=""></a>
                                            </div>
                                            <div class="col-md-3 text-e">
                                                <p class="para">New topic draft Apr 19</p>
                                                <a href="#" class="del">
                                                    <img src="{{asset('user_asset/img/card61.png')}}" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="boxed">
                                        <div class="row align-items-start">
                                            <div class="col-md-9">
                                                <div class="boxed-image align-items-start">
                                                    <img src="{{asset('user_asset/img/card48.png')}}" alt="">
                                                    <div>
                                                        <span><span class="cor-pi"></span>Buyer Request</span>
                                                        <p class="para">Country of followers (majority): Amount of followers: Topic/Niche: Promotion methods used? (Organic/S4S/Follow Unfollow/Engagement Networks): Description: List item</p>
                                                    </div>
                                                </div>
                                                <a href="#" class="theme-gr">Resume <img src="{{asset('user_asset/img/card60.png')}}" alt=""></a>
                                            </div>
                                            <div class="col-md-3 text-e">
                                                <p class="para">New topic draft Apr 19</p>
                                                <a href="#" class="del">
                                                    <img src="{{asset('user_asset/img/card61.png')}}" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="boxed">
                                        <div class="row align-items-start">
                                            <div class="col-md-9">
                                                <div class="boxed-image align-items-start">
                                                    <img src="{{asset('user_asset/img/card48.png')}}" alt="">
                                                    <div>
                                                        <span><span class="cor-pi"></span>Buyer Request</span>
                                                        <p class="para">Country of followers (majority): Amount of followers: Topic/Niche: Promotion methods used? (Organic/S4S/Follow Unfollow/Engagement Networks): Description: List item</p>
                                                    </div>
                                                </div>
                                                <a href="#" class="theme-gr">Resume <img src="{{asset('user_asset/img/card60.png')}}" alt=""></a>
                                            </div>
                                            <div class="col-md-3 text-e">
                                                <p class="para">New topic draft Apr 19</p>
                                                <a href="#" class="del">
                                                    <img src="{{asset('user_asset/img/card61.png')}}" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="boxed">
                                        <div class="row align-items-start">
                                            <div class="col-md-9">
                                                <div class="boxed-image align-items-start">
                                                    <img src="{{asset('user_asset/img/card48.png')}}" alt="">
                                                    <div>
                                                        <span><span class="cor-pi"></span>Buyer Request</span>
                                                        <p class="para">Country of followers (majority): Amount of followers: Topic/Niche: Promotion methods used? (Organic/S4S/Follow Unfollow/Engagement Networks): Description: List item</p>
                                                    </div>
                                                </div>
                                                <a href="#" class="theme-gr">Resume <img src="{{asset('user_asset/img/card60.png')}}" alt=""></a>
                                            </div>
                                            <div class="col-md-3 text-e">
                                                <p class="para">New topic draft Apr 19</p>
                                                <a href="#" class="del">
                                                    <img src="{{asset('user_asset/img/card61.png')}}" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="boxed">
                                        <div class="row align-items-start">
                                            <div class="col-md-9">
                                                <div class="boxed-image align-items-start">
                                                    <img src="{{asset('user_asset/img/card48.png')}}" alt="">
                                                    <div>
                                                        <span><span class="cor-pi"></span>Buyer Request</span>
                                                        <p class="para">Country of followers (majority): Amount of followers: Topic/Niche: Promotion methods used? (Organic/S4S/Follow Unfollow/Engagement Networks): Description: List item</p>
                                                    </div>
                                                </div>
                                                <a href="#" class="theme-gr">Resume <img src="{{asset('user_asset/img/card60.png')}}" alt=""></a>
                                            </div>
                                            <div class="col-md-3 text-e">
                                                <p class="para">New topic draft Apr 19</p>
                                                <a href="#" class="del">
                                                    <img src="{{asset('user_asset/img/card61.png')}}" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-16 liks">
                                    <div class="boxed">
                                        <ul class="accordion">
                                            <li class="first">
                                                <div class="acc_title">
                                                    <div class="row">
                                                        <div class="col-md-9">
                                                            <div class="boxed-image align-items-start">
                                                                <img src="{{asset('user_asset/img/card48.png')}}" alt="">
                                                                <div>
                                                                    <h5><a href="#">Auctions - General rules and code of conduct</a></h5>
                                                                    <span><span class="cor-gr"></span>Auction</span>
                                                                    <p class="para">Country of followers (majority): Amount of followers: Topic/Niche: Promotion methods used? (Organic/S4S/Follow Unfollow/Engagement Networks): Description: List item</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 text-e">
                                                            <h6 class="">March 25 <i class="fas fa-sort-down"></i></h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="acc_desc" style="display: none;">
                                                    <h5>:To participate in our auctions you</h5>
                                                    <p class="para">must have a registered and ID Verified SWAPD account. must never bid if you don’t intend to pay. Unpaid balances can result in SWAPD account termination. have to make sure your computer time is set to synchronize with ‘time.windows.com’ automatically. Otherwise, the auction time countdown may show an incorrect time. SWAPD will not be responsible for lost auctions. For more information, click here. must agree to our Terms of Service, Transaction Contract, and learn about taxes and invoices policies. need to learn about the SWAPD auctions seller guidelines. must get acquainted with our pre-auction checklist. must agree to the SWAPD auction fees. must agree to buyers and sellers responsibilities.</p>
                                                    <h5>:Wasetak auction rules and code of conduct</h5>
                                                    <p class="para">must have a registered and ID Verified SWAPD account. must never bid if you don’t intend to pay. Unpaid balances can result in SWAPD account termination. have to make sure your computer time is set to synchronize with ‘time.windows.com’ automatically. Otherwise, the auction time countdown may show an incorrect time. SWAPD will not be responsible for lost auctions. For more information, click here. must agree to our Terms of Service, Transaction Contract, and learn about taxes and invoices policies. need to learn about the SWAPD auctions seller guidelines. must get acquainted with our pre-auction checklist. must agree to the SWAPD auction fees. must agree to buyers and sellers responsibilities.</p>
                                                </div>
                                                <div class="thum">
                                                    <a href="#"> <img src="{{asset('user_asset/img/card23.png')}}" alt=""></a>
                                                    <img src="{{asset('user_asset/img/card48.png')}}" alt="">
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box-17 bookmarks">
                                    <div class="col-md-12 mar">
                                        <div class="row">
                                            <div class="col-md-8 col-3">
                                                <h5>Topic</h5>
                                            </div>
                                            <div class="col-md-4 col-9 text-e">
                                                <h5>Update</h5>
                                                <h5>Activity</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="boxed">
                                        <div class="row align-items-center">
                                            <div class="col-md-8">
                                                <div class="time"><span> <img src="{{asset('user_asset/img/card64.png')}}" alt=""> At May 1, 2023 8:00 am</span></div>
                                                <h5 class="than">Thanks for spending time with us</h5>
                                                <p class="para mb-4">Country of followers (majority): Amount of followers: Topic/Niche: Promotion methods used? (Organic/S4S/Follow Unfollow/Engagement Networks): Description: List item</p>
                                            </div>
                                            <div class="col-md-4 text-e">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="conta">
                                                            <a href="#" class="modalButton" data-popup="popupFifteen"><img src="{{asset('user_asset/img/card62.png')}}" alt=""></a>
                                                            <span>4d</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="doted">
                                                            <span>Apr 12</span>
                                                            <div class="dropdown2">
                                                                <a href="#" class="dropbtn"><img src="{{asset('user_asset/img/card63.png')}}" alt=""></a>
                                                                <div class="dropdown-content">
                                                                    <a href="#">
                                                                        <div class="list">
                                                                            <img src="{{asset('user_asset/img/card87.png')}}" alt="">
                                                                            <div>
                                                                                <h5>Delete bookmark</h5>
                                                                                <p class="para">Removes the bookmark from your profile and stops all reminders fro the bookmark</p>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                    <a href="#">
                                                                        <div class="list">
                                                                            <img src="{{asset('user_asset/img/card88.png')}}" alt="">
                                                                            <div>
                                                                                <h5>Edit bookmark</h5>
                                                                                <p class="para">Edit the bookmark name or change the reminder date and time</p>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                    <a href="#">
                                                                        <div class="list">
                                                                            <img src="{{asset('user_asset/img/card89.png')}}" alt="">
                                                                            <div>
                                                                                <h5>Clear reminder</h5>
                                                                                <p class="para">Clear the reminder date and time</p>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                    <a href="#">
                                                                        <div class="list">
                                                                            <img src="{{asset('user_asset/img/card90.png')}}" alt="">
                                                                            <div>
                                                                                <h5>Pin bookmark</h5>
                                                                                <p class="para">you will never be notified of anything about this topic, and it will not appear in latest </p>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-18 solve">
                                    <h3 class="abst">Abstract has not solved any topics yet</h3>
                                </div>
                                <div class="box-19 reports">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="boxed report">
                                                <h3>Earning and Purchase report</h3>
                                                <p class="para">SWAPD tracks and reports purchases/sales data since we've begun collecting the information (March 2020).</p>
                                                <h5>. 0 purchase(s) and 0 sold items/services</h5>
                                                <p class="para">Data is updated every 24 hours. Earnings/purchases may still show 0 USD even if a member has successful tickets. This is due to data missing which we're unable to recover. Successful tickets are still counted, but wasetak didn't track amounts until March 2020.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="boxed report text-center">
                                                <h5>TOTAL SALES</h5>
                                                <p class="para">This is the total amount of sales made by you:</p>
                                                <h6>$0</h6>
                                                <h5>PURCHASES</h5>
                                                <p class="para">This is the total amount of purchases made by you:</p>
                                                <h6>$0</h6>
                                                <h5>WASETAK FEES</h5>
                                                <p class="para">SWAPD fees you paid so far:</p>
                                                <h6 class="mb-0">$0</h6>
                                                <p class="para" dir="ltr"><span>Note:</span> SWAPD fees are paid by sellers only. If you're not an active seller your balance will show zero.</p>
                                            </div>
                                            <label><input type="checkbox"> Show this data to public</label>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-md-9 text-center">
                                            <h4>Last updated: Wed May 03 2023 17:22:43 GMT-0700</h4>
                                            <div class="dis">
                                                <h3>DISCLAIMER</h3>
                                                <p class="para">This is an approximate estimation of user's earnings, purchases, and paid SWAPD fees. User data is updated every 24 hours. The exact numbers may not reflect the true earnings due to things such as user level, fee rate, and missing data (prior to March 2020).</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-3 activity notifications">
                        <div class="col-md-12">
                            <div class="bored-line">
                                <p><i class="fas fa-sort-down"></i> <span>All</span> Filter By </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 px-md-0">
                                <ul class="list">
                                    <li data-targetit="box-46" class="active">All</li>
                                    <li data-targetit="box-47">Responses</li>
                                    <li data-targetit="box-48">Likes</li>
                                    <li data-targetit="box-49">Mentions</li>
                                    <li data-targetit="box-50" class="mb-0">Edits</li>
                                </ul>
                            </div>
                            <div class="col-md-10">
                                <div class="box-46 showfirst">
                                    <div class="boxed">
                                        <div class="boxed-noti">
                                            <img src="{{asset('user_asset/img/card84.png')}}" alt="">
                                            <h5><a href="message-notifications.php">Thanks For Spending Time with us</a></h5>
                                        </div>
                                        <div class="boxed-noti">
                                            <img src="{{asset('user_asset/img/card85.png')}}" alt="">
                                            <h5><a href="message-notifications.php">! Greetins</a></h5>
                                        </div>
                                        <div class="boxed-noti">
                                            <img src="{{asset('user_asset/img/card86.png')}}" alt="">
                                            <h5><a href="message-notifications.php">Welcome to Wasetak - we have credited your account with 20 USD</a></h5>
                                        </div>
                                        <div class="boxed-noti">
                                            <img src="{{asset('user_asset/img/card84.png')}}" alt="">
                                            <h5><a href="message-notifications.php">Thanks For Spending Time with us</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-4 activity message ticket">
                        <div class="col-md-12 mar">
                            <div class="row">
                                <div class="col-md-8 col-5">
                                    <div class="row">
                                        <div class="col-md-3 col-6">
                                            <h5>Inbox</h5>
                                        </div>
                                        <div class="col-md-9 col-6">
                                            <h5>Topic</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-7 text-e">
                                    <h5>Replies</h5>
                                    <h5>Views</h5>
                                    <h5>Activity</h5>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 px-md-0">
                                <ul class="list">
                                    <li data-targetit="box-25" class="inbox active"><img src="{{asset('user_asset/img/card65.png')}}" alt=""> Inbox <i class="far fa-chevron-down"></i></li>
                                    <div class="panel">
                                        <ul>
                                            <li data-targetit="box-26"><img src="{{asset('user_asset/img/card70.png')}}" alt="">Sent</li>
                                            <li data-targetit="box-27"><img src="{{asset('user_asset/img/card71.png')}}" alt="">New</li>
                                            <li data-targetit="box-28"><img src="{{asset('user_asset/img/card72.png')}}" alt="">Unread</li>
                                            <li data-targetit="box-29"><img src="{{asset('user_asset/img/card73.png')}}" alt="">Archive</li>
                                        </ul>
                                    </div>
                                    <li data-targetit="box-24"><i class="fas fa-shopping-cart"></i> Tickets</li>
                                    <li class="end-co">New Message <img src="{{asset('user_asset/img/card67.png')}}" alt=""></li>
                                </ul>
                            </div>
                            <div class="col-md-10">
                                <div class="box-25 showfirst tickets">
                                    <div class="row rowgap">
                                        <div class="col-md-12">
                                            <div class="boxed-wrap">
                                                <div class="row align-items-center justify-content-between">
                                                    <div class="col-md-5">
                                                        <div class="locker">
                                                            <h4><a href="message-body.php">Thanks For Spending Time with us</a></h4>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 pe-0">
                                                        <div class="row align-items-center">
                                                            <div class="col-md-3 p-md-0">
                                                                <img src="{{asset('user_asset/img/card13.png')}}" class="img1" alt="">
                                                            </div>
                                                            <div class="col-md-3 col-4 text-center">
                                                                <a href="#" class="rep">
                                                                    <h5>0</h5>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-3 col-4 text-center">
                                                                <a href="#" class="rep">
                                                                    <h5>0</h5>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-3 col-4">
                                                                <h5>10 June</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="boxed-wrap">
                                                <div class="row align-items-center justify-content-between">
                                                    <div class="col-md-5">
                                                        <div class="locker">
                                                            <h4><a href="message-body.php">Checkout Denied - Please verify your wasetak account</a></h4>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 pe-0">
                                                        <div class="row align-items-center">
                                                            <div class="col-md-3 p-md-0">
                                                                <img src="{{asset('user_asset/img/card13.png')}}" class="img1" alt="">
                                                            </div>
                                                            <div class="col-md-3 col-4 text-center">
                                                                <a href="#" class="rep">
                                                                    <h5>0</h5>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-3 col-4 text-center">
                                                                <a href="#" class="rep">
                                                                    <h5>0</h5>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-3 col-4">
                                                                <h5>10 June</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="boxed-wrap">
                                                <div class="row align-items-center justify-content-between">
                                                    <div class="col-md-5">
                                                        <div class="locker">
                                                            <h4><a href="message-body.php">Checkout Denied - Please verify your wasetak account</a></h4>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 pe-0">
                                                        <div class="row align-items-center">
                                                            <div class="col-md-3 p-md-0">
                                                                <img src="{{asset('user_asset/img/card13.png')}}" class="img1" alt="">
                                                            </div>
                                                            <div class="col-md-3 col-4 text-center">
                                                                <a href="#" class="rep">
                                                                    <h5>0</h5>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-3 col-4 text-center">
                                                                <a href="#" class="rep">
                                                                    <h5>0</h5>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-3 col-4">
                                                                <h5>10 June</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="boxed-wrap">
                                                <div class="row align-items-center justify-content-between">
                                                    <div class="col-md-5">
                                                        <div class="locker">
                                                            <h4><a href="message-body.php">Thanks For Spending Time with us</a></h4>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 pe-0">
                                                        <div class="row align-items-center">
                                                            <div class="col-md-3 p-md-0">
                                                                <img src="{{asset('user_asset/img/card13.png')}}" class="img1" alt="">
                                                            </div>
                                                            <div class="col-md-3 col-4 text-center">
                                                                <a href="#" class="rep">
                                                                    <h5>0</h5>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-3 col-4 text-center">
                                                                <a href="#" class="rep">
                                                                    <h5>0</h5>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-3 col-4">
                                                                <h5>10 June</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="boxed-wrap">
                                                <div class="row align-items-center justify-content-between">
                                                    <div class="col-md-5">
                                                        <div class="locker">
                                                            <h4><a href="message-body.php">! Greetings</a></h4>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 pe-0">
                                                        <div class="row align-items-center">
                                                            <div class="col-md-3 p-md-0">
                                                                <img src="{{asset('user_asset/img/card13.png')}}" class="img1" alt="">
                                                            </div>
                                                            <div class="col-md-3 col-4 text-center">
                                                                <a href="#" class="rep">
                                                                    <h5>0</h5>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-3 col-4 text-center">
                                                                <a href="#" class="rep">
                                                                    <h5>0</h5>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-3 col-4">
                                                                <h5>10 June</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-26 tickets">
                                    <div class="row rowgap">
                                        <div class="col-md-12">
                                            <div class="boxed-wrap">
                                                <div class="row align-items-center justify-content-between">
                                                    <div class="col-md-5">
                                                        <div class="locker">
                                                            <h4><a href="#">Thanks For Spending Time with us</a></h4>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 pe-0">
                                                        <div class="row align-items-center">
                                                            <div class="col-md-3 p-md-0">
                                                                <img src="{{asset('user_asset/img/card13.png')}}" class="img1" alt="">
                                                            </div>
                                                            <div class="col-md-3 col-4 text-center">
                                                                <a href="#" class="rep">
                                                                    <h5>0</h5>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-3 col-4 text-center">
                                                                <a href="#" class="rep">
                                                                    <h5>0</h5>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-3 col-4">
                                                                <h5>10 June</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="boxed-wrap">
                                                <div class="row align-items-center justify-content-between">
                                                    <div class="col-md-5">
                                                        <div class="locker">
                                                            <h4><a href="#">Checkout Denied - Please verify your wasetak account</a></h4>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 pe-0">
                                                        <div class="row align-items-center">
                                                            <div class="col-md-3 p-md-0">
                                                                <img src="{{asset('user_asset/img/card13.png')}}" class="img1" alt="">
                                                            </div>
                                                            <div class="col-md-3 col-4 text-center">
                                                                <a href="#" class="rep">
                                                                    <h5>0</h5>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-3 col-4 text-center">
                                                                <a href="#" class="rep">
                                                                    <h5>0</h5>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-3 col-4">
                                                                <h5>1 Day</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="boxed-wrap">
                                                <div class="row align-items-center justify-content-between">
                                                    <div class="col-md-5">
                                                        <div class="locker">
                                                            <h4><a href="#">Checkout Denied - Please verify your wasetak account</a></h4>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 pe-0">
                                                        <div class="row align-items-center">
                                                            <div class="col-md-3 p-md-0">
                                                                <img src="{{asset('user_asset/img/card13.png')}}" class="img1" alt="">
                                                            </div>
                                                            <div class="col-md-3 col-4 text-center">
                                                                <a href="#" class="rep">
                                                                    <h5>0</h5>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-3 col-4 text-center">
                                                                <a href="#" class="rep">
                                                                    <h5>0</h5>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-3 col-4">
                                                                <h5>3 Hours</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="boxed-wrap">
                                                <div class="row align-items-center justify-content-between">
                                                    <div class="col-md-5">
                                                        <div class="locker">
                                                            <h4><a href="#">Thanks For Spending Time with us</a></h4>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 pe-0">
                                                        <div class="row align-items-center">
                                                            <div class="col-md-3 p-md-0">
                                                                <img src="{{asset('user_asset/img/card13.png')}}" class="img1" alt="">
                                                            </div>
                                                            <div class="col-md-3 col-4 text-center">
                                                                <a href="#" class="rep">
                                                                    <h5>0</h5>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-3 col-4 text-center">
                                                                <a href="#" class="rep">
                                                                    <h5>0</h5>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-3 col-4">
                                                                <h5>29 Sec</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="boxed-wrap">
                                                <div class="row align-items-center justify-content-between">
                                                    <div class="col-md-5">
                                                        <div class="locker">
                                                            <h4><a href="#">! Greetings</a></h4>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 pe-0">
                                                        <div class="row align-items-center">
                                                            <div class="col-md-3 p-md-0">
                                                                <img src="{{asset('user_asset/img/card13.png')}}" class="img1" alt="">
                                                            </div>
                                                            <div class="col-md-3 col-4 text-center">
                                                                <a href="#" class="rep">
                                                                    <h5>0</h5>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-3 col-4 text-center">
                                                                <a href="#" class="rep">
                                                                    <h5>0</h5>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-3 col-4">
                                                                <h5>2 Dec</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-27 tickets">
                                    <div class="row rowgap">
                                        <div class="col-md-12">
                                            <div class="boxed-wrap">
                                                <div class="row align-items-center justify-content-between">
                                                    <div class="col-md-5">
                                                        <div class="locker">
                                                            <h4><a href="#">Thanks For Spending Time with us</a></h4>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 pe-0">
                                                        <div class="row align-items-center">
                                                            <div class="col-md-3 p-md-0">
                                                                <img src="{{asset('user_asset/img/card13.png')}}" class="img1" alt="">
                                                            </div>
                                                            <div class="col-md-3 col-4 text-center">
                                                                <a href="#" class="rep">
                                                                    <h5>0</h5>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-3 col-4 text-center">
                                                                <a href="#" class="rep">
                                                                    <h5>0</h5>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-3 col-4">
                                                                <h5>10 June</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="boxed-wrap">
                                                <div class="row align-items-center justify-content-between">
                                                    <div class="col-md-5">
                                                        <div class="locker">
                                                            <h4><a href="#">Checkout Denied - Please verify your wasetak account</a></h4>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 pe-0">
                                                        <div class="row align-items-center">
                                                            <div class="col-md-3 p-md-0">
                                                                <img src="{{asset('user_asset/img/card13.png')}}" class="img1" alt="">
                                                            </div>
                                                            <div class="col-md-3 col-4 text-center">
                                                                <a href="#" class="rep">
                                                                    <h5>0</h5>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-3 col-4 text-center">
                                                                <a href="#" class="rep">
                                                                    <h5>0</h5>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-3 col-4">
                                                                <h5>1 Day</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="boxed-wrap">
                                                <div class="row align-items-center justify-content-between">
                                                    <div class="col-md-5">
                                                        <div class="locker">
                                                            <h4><a href="#">Checkout Denied - Please verify your wasetak account</a></h4>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 pe-0">
                                                        <div class="row align-items-center">
                                                            <div class="col-md-3 p-md-0">
                                                                <img src="{{asset('user_asset/img/card13.png')}}" class="img1" alt="">
                                                            </div>
                                                            <div class="col-md-3 col-4 text-center">
                                                                <a href="#" class="rep">
                                                                    <h5>0</h5>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-3 col-4 text-center">
                                                                <a href="#" class="rep">
                                                                    <h5>0</h5>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-3 col-4">
                                                                <h5>3 Hours</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="boxed-wrap">
                                                <div class="row align-items-center justify-content-between">
                                                    <div class="col-md-5">
                                                        <div class="locker">
                                                            <h4><a href="#">Thanks For Spending Time with us</a></h4>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 pe-0">
                                                        <div class="row align-items-center">
                                                            <div class="col-md-3 p-md-0">
                                                                <img src="{{asset('user_asset/img/card13.png')}}" class="img1" alt="">
                                                            </div>
                                                            <div class="col-md-3 col-4 text-center">
                                                                <a href="#" class="rep">
                                                                    <h5>0</h5>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-3 col-4 text-center">
                                                                <a href="#" class="rep">
                                                                    <h5>0</h5>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-3 col-4">
                                                                <h5>29 Sec</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="boxed-wrap">
                                                <div class="row align-items-center justify-content-between">
                                                    <div class="col-md-5">
                                                        <div class="locker">
                                                            <h4><a href="#">! Greetings</a></h4>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 pe-0">
                                                        <div class="row align-items-center">
                                                            <div class="col-md-3 p-md-0">
                                                                <img src="{{asset('user_asset/img/card13.png')}}" class="img1" alt="">
                                                            </div>
                                                            <div class="col-md-3 col-4 text-center">
                                                                <a href="#" class="rep">
                                                                    <h5>0</h5>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-3 col-4 text-center">
                                                                <a href="#" class="rep">
                                                                    <h5>0</h5>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-3 col-4">
                                                                <h5>2 Dec</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-28  tickets">
                                    <div class="row rowgap">
                                        <div class="col-md-12">
                                            <div class="boxed-wrap">
                                                <div class="row align-items-center justify-content-between">
                                                    <div class="col-md-5">
                                                        <div class="locker">
                                                            <h4><a href="#">Thanks For Spending Time with us</a></h4>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 pe-0">
                                                        <div class="row align-items-center">
                                                            <div class="col-md-3 p-md-0">
                                                                <img src="{{asset('user_asset/img/card13.png')}}" class="img1" alt="">
                                                            </div>
                                                            <div class="col-md-3 col-4 text-center">
                                                                <a href="#" class="rep">
                                                                    <h5>0</h5>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-3 col-4 text-center">
                                                                <a href="#" class="rep">
                                                                    <h5>0</h5>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-3 col-4">
                                                                <h5>10 June</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="boxed-wrap">
                                                <div class="row align-items-center justify-content-between">
                                                    <div class="col-md-5">
                                                        <div class="locker">
                                                            <h4><a href="#">Checkout Denied - Please verify your wasetak account</a></h4>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 pe-0">
                                                        <div class="row align-items-center">
                                                            <div class="col-md-3 p-md-0">
                                                                <img src="{{asset('user_asset/img/card13.png')}}" class="img1" alt="">
                                                            </div>
                                                            <div class="col-md-3 col-4 text-center">
                                                                <a href="#" class="rep">
                                                                    <h5>0</h5>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-3 col-4 text-center">
                                                                <a href="#" class="rep">
                                                                    <h5>0</h5>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-3 col-4">
                                                                <h5>1 Day</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="boxed-wrap">
                                                <div class="row align-items-center justify-content-between">
                                                    <div class="col-md-5">
                                                        <div class="locker">
                                                            <h4><a href="#">Checkout Denied - Please verify your wasetak account</a></h4>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 pe-0">
                                                        <div class="row align-items-center">
                                                            <div class="col-md-3 p-md-0">
                                                                <img src="{{asset('user_asset/img/card13.png')}}" class="img1" alt="">
                                                            </div>
                                                            <div class="col-md-3 text-center">
                                                                <a href="#" class="rep">
                                                                    <h5>0</h5>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-3 text-center">
                                                                <a href="#" class="rep">
                                                                    <h5>0</h5>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-3 col-4">
                                                                <h5>3 Hours</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="boxed-wrap">
                                                <div class="row align-items-center justify-content-between">
                                                    <div class="col-md-5">
                                                        <div class="locker">
                                                            <h4><a href="#">Thanks For Spending Time with us</a></h4>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 pe-0">
                                                        <div class="row align-items-center">
                                                            <div class="col-md-3 p-md-0">
                                                                <img src="{{asset('user_asset/img/card13.png')}}" class="img1" alt="">
                                                            </div>
                                                            <div class="col-md-3 col-4 text-center">
                                                                <a href="#" class="rep">
                                                                    <h5>0</h5>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-3 col-4 text-center">
                                                                <a href="#" class="rep">
                                                                    <h5>0</h5>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-3 col-4">
                                                                <h5>29 Sec</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="boxed-wrap">
                                                <div class="row align-items-center justify-content-between">
                                                    <div class="col-md-5">
                                                        <div class="locker">
                                                            <h4><a href="#">! Greetings</a></h4>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 pe-0">
                                                        <div class="row align-items-center">
                                                            <div class="col-md-3 p-md-0">
                                                                <img src="{{asset('user_asset/img/card13.png')}}" class="img1" alt="">
                                                            </div>
                                                            <div class="col-md-3 col-4 text-center">
                                                                <a href="#" class="rep">
                                                                    <h5>0</h5>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-3 col-4 text-center">
                                                                <a href="#" class="rep">
                                                                    <h5>0</h5>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-3 col-4">
                                                                <h5>2 Dec</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <a href="#" class="dismiss modalButton" data-popup="popupEight">Dismiss</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-29 tickets">
                                    <div class="row rowgap">
                                        <div class="col-md-12">
                                            <div class="boxed-wrap">
                                                <div class="row align-items-center justify-content-between">
                                                    <div class="col-md-5">
                                                        <div class="locker">
                                                            <h4><a href="#">Thanks For Spending Time with us</a></h4>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 pe-0">
                                                        <div class="row align-items-center">
                                                            <div class="col-md-3 p-md-0">
                                                                <img src="{{asset('user_asset/img/card13.png')}}" class="img1" alt="">
                                                            </div>
                                                            <div class="col-md-3 col-4 text-center">
                                                                <a href="#" class="rep">
                                                                    <h5>0</h5>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-3 col-4 text-center">
                                                                <a href="#" class="rep">
                                                                    <h5>0</h5>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-3 col-4">
                                                                <h5>10 June</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="#" class="inboxed">Move to inbox</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-5 activity invites">
                        <div class="boxed">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <a href="#" class="link">https//:wasetak.com/invite</a>
                                </div>
                                <div class="col-md-6 text-e">
                                    <a href="#" class="copy-link">Copy Link</a>
                                </div>
                            </div>
                        </div>
                        <p class="para">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to</p>
                        <p class="para">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to</p>
                        <div class="row mar-to">
                            <div class="col-md-3">
                                <ul>
                                    <li data-targetit="box-37" class="active">Pending</li>
                                    <li data-targetit="box-38">Expired</li>
                                    <li data-targetit="box-39">Redeemed</li>
                                    <li data-targetit="box-40" class="mb-0">Earnings</li>
                                </ul>
                            </div>
                            <div class="col-md-9">
                                <div class="box-37 showfirst">
                                    <div class="boxed-white">No Invites to display</div>
                                </div>
                                <div class="box-38">
                                    <div class="boxed-white">No Invites to display</div>
                                </div>
                                <div class="box-39">
                                    <div class="boxed-white">No Invites to display</div>
                                </div>
                                <div class="box-40">
                                    <div class="boxed-white">No Invites to display</div>
                                </div>
                            </div>
                            <div class="col-md-12 text-e">
                                <a href="#" class="invite modalButton" data-popup="popupNine">Invite</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="invite-ul">
                                    <li data-targetit="box-41" class="active">Wasetak Reward info</li>
                                    <li data-targetit="box-42">Wasetak Rewars Rules</li>
                                    <li data-targetit="box-43">How to use</li>
                                    <li data-targetit="box-44">Rewards Faqs</li>
                                    <li data-targetit="box-45">Terms of Service</li>
                                </ul>
                                <div class="box-41 showfirst">
                                    <h3>Wasetak Rewrds Info</h3>
                                    <p class="para">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to</p>
                                    <p class="para">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to</p>
                                    <p class="para">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to</p>
                                    <p class="para">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to</p>
                                    <p class="para">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to</p>
                                    <p class="para">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to</p>
                                </div>
                                <div class="box-42 showfirst">
                                    <h3>Wasetak Rewars Rules</h3>
                                    <p class="para">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to</p>
                                    <p class="para">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to</p>
                                    <p class="para">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to</p>
                                    <p class="para">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to</p>
                                    <p class="para">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to</p>
                                    <p class="para">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to</p>
                                </div>
                                <div class="box-43 showfirst">
                                    <h3>How to use</h3>
                                    <p class="para">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to</p>
                                    <p class="para">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to</p>
                                    <p class="para">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to</p>
                                    <p class="para">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to</p>
                                    <p class="para">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to</p>
                                    <p class="para">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to</p>
                                </div>
                                <div class="box-44 showfirst">
                                    <h3>Rewards Faqs </h3>
                                    <p class="para">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to</p>
                                    <p class="para">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to</p>
                                    <p class="para">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to</p>
                                    <p class="para">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to</p>
                                    <p class="para">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to</p>
                                    <p class="para">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to</p>
                                </div>
                                <div class="box-45 showfirst">
                                    <h3>Terms of Service</h3>
                                    <p class="para">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to</p>
                                    <p class="para">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to</p>
                                    <p class="para">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to</p>
                                    <p class="para">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to</p>
                                    <p class="para">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to</p>
                                    <p class="para">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-6 activity badge">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="boxed">
                                    <img src="{{asset('user_asset/img/card79.png')}}" alt="">
                                    <h4>Identity verified</h4>
                                    <p class="para">This badge is awarded to members who have <br> verified their status Full of their identity by <br> presenting an identity card Issued by a <br> .government agency</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-7 follows activity">
                        <div class="row">
                            <div class="col-md-2 px-0">
                                <ul class="list">
                                    <li data-targetit="box-21" class="active">Feed</li>
                                    <li data-targetit="box-22">Following</li>
                                    <li data-targetit="box-23">Followers</li>
                                </ul>
                            </div>
                            <div class="col-md-10">
                                <div class="box-21 showfirst feed">
                                    <div class="boxed">
                                        <div class="row align-items-start">
                                            <div class="col-md-10">
                                                <div class="boxed-image align-items-start">
                                                    <img src="{{asset('user_asset/img/card48.png')}}" alt="">
                                                    <div>
                                                        <h5><a href="#">New Fresh Panels -Musician $1000 Public Figure $5000 Entrepreneur $5500</a></h5>
                                                        <span>FB & IG Services</span>
                                                        <p class="para">hahahahahaaah okay boss first ticket on site for this service, for musician launched … wish me luck guys</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 text-e">
                                                <p class="para">hours ago 22</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="boxed">
                                        <div class="row align-items-start">
                                            <div class="col-md-10">
                                                <div class="boxed-image align-items-start">
                                                    <img src="{{asset('user_asset/img/card48.png')}}" alt="">
                                                    <div>
                                                        <h5><a href="#">New Fresh Panels -Musician $1000 Public Figure $5000 Entrepreneur $5500</a></h5>
                                                        <span>FB & IG Services</span>
                                                        <p class="para">hahahahahaaah okay boss first ticket on site for this service, for musician launched … wish me luck guys</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 text-e">
                                                <p class="para">hours ago 22</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="boxed">
                                        <div class="row align-items-start">
                                            <div class="col-md-10">
                                                <div class="boxed-image align-items-start">
                                                    <img src="{{asset('user_asset/img/card48.png')}}" alt="">
                                                    <div>
                                                        <h5><a href="#">New Fresh Panels -Musician $1000 Public Figure $5000 Entrepreneur $5500</a></h5>
                                                        <span>FB & IG Services</span>
                                                        <p class="para">hahahahahaaah okay boss first ticket on site for this service, for musician launched … wish me luck guys</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 text-e">
                                                <p class="para">hours ago 22</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-22 following">
                                    <ul>
                                        <li>
                                            <div class="boxed">
                                                <img src="{{asset('user_asset/img/card48.png')}}" alt="">
                                                <span>عابان</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="boxed">
                                                <img src="{{asset('user_asset/img/card48.png')}}" alt="">
                                                <span>عابان</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="boxed">
                                                <img src="{{asset('user_asset/img/card48.png')}}" alt="">
                                                <span>عابان</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="boxed">
                                                <img src="{{asset('user_asset/img/card48.png')}}" alt="">
                                                <span>عابان</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="boxed">
                                                <img src="{{asset('user_asset/img/card48.png')}}" alt="">
                                                <span>عابان</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="boxed">
                                                <img src="{{asset('user_asset/img/card48.png')}}" alt="">
                                                <span>عابان</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="boxed">
                                                <img src="{{asset('user_asset/img/card48.png')}}" alt="">
                                                <span>عابان</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="boxed">
                                                <img src="{{asset('user_asset/img/card48.png')}}" alt="">
                                                <span>عابان</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="boxed">
                                                <img src="{{asset('user_asset/img/card48.png')}}" alt="">
                                                <span>عابان</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="boxed">
                                                <img src="{{asset('user_asset/img/card48.png')}}" alt="">
                                                <span>عابان</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="box-23 following">
                                    <ul>
                                        <li>
                                            <div class="boxed">
                                                <img src="{{asset('user_asset/img/card48.png')}}" alt="">
                                                <span>عابان</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="boxed">
                                                <img src="{{asset('user_asset/img/card48.png')}}" alt="">
                                                <span>عابان</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="boxed">
                                                <img src="{{asset('user_asset/img/card48.png')}}" alt="">
                                                <span>عابان</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="boxed">
                                                <img src="{{asset('user_asset/img/card48.png')}}" alt="">
                                                <span>عابان</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="boxed">
                                                <img src="{{asset('user_asset/img/card48.png')}}" alt="">
                                                <span>عابان</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="boxed">
                                                <img src="{{asset('user_asset/img/card48.png')}}" alt="">
                                                <span>عابان</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="boxed">
                                                <img src="{{asset('user_asset/img/card48.png')}}" alt="">
                                                <span>عابان</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="boxed">
                                                <img src="{{asset('user_asset/img/card48.png')}}" alt="">
                                                <span>عابان</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="boxed">
                                                <img src="{{asset('user_asset/img/card48.png')}}" alt="">
                                                <span>عابان</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="boxed">
                                                <img src="{{asset('user_asset/img/card48.png')}}" alt="">
                                                <span>عابان</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-8 activity ticket">
                        <div class="col-md-12 mar">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h5>Inbox</h5>
                                        </div>
                                        <div class="col-md-9">
                                            <h5>Topic</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 text-e">
                                    <h5>Replies</h5>
                                    <h5>Views</h5>
                                    <h5>Activity</h5>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 px-0">
                                <ul class="list">
                                    <li><img src="{{asset('user_asset/img/card65.png')}}" alt=""> Inbox <i class="far fa-chevron-down"></i></li>
                                    <li data-targetit="box-24" class="active"><i class="fas fa-shopping-cart"></i> Tickets</li>
                                    <li class="end-co">New Message <img src="{{asset('user_asset/img/card67.png')}}" alt=""></li>
                                </ul>
                            </div>
                            <div class="col-md-10">
                                <div class="box-24 showfirst tickets">
                                    <div class="row rowgap">
                                        <div class="col-md-12">
                                            <div class="boxed-wrap">
                                                <div class="row align-items-center justify-content-between">
                                                    <div class="col-md-5">
                                                        <div class="locker">
                                                            <h4><a href="#">[Ticket# 3672451] https://wasetak.net/t/tiktok-account-verified-with-the-name-you-need/886488</a></h4>
                                                            <img src="{{asset('user_asset/img/card68.png')}}" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 pe-0">
                                                        <div class="row align-items-center">
                                                            <div class="col-md-3 p-md-0">
                                                                <img src="{{asset('user_asset/img/card13.png')}}" class="img1" alt="">
                                                            </div>
                                                            <div class="col-md-3 text-center">
                                                                <a href="#" class="rep">
                                                                    <h5>0</h5>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-3 text-center">
                                                                <a href="#" class="rep">
                                                                    <h5>0</h5>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <h5>10 June</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="boxed-wrap">
                                                <div class="row align-items-center justify-content-between">
                                                    <div class="col-md-5">
                                                        <div class="locker">
                                                            <h4><a href="#">[Ticket# 3672451] https://wasetak.net/t/tiktok-account-verified-with-the-name-you-need/886488</a></h4>
                                                            <img src="{{asset('user_asset/img/card69.png')}}" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 pe-0">
                                                        <div class="row align-items-center">
                                                            <div class="col-md-3 p-md-0">
                                                                <img src="{{asset('user_asset/img/card13.png')}}" class="img1" alt="">
                                                            </div>
                                                            <div class="col-md-3 text-center">
                                                                <a href="#" class="rep">
                                                                    <h5>0</h5>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-3 text-center">
                                                                <a href="#" class="rep">
                                                                    <h5>0</h5>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <h5>1 Day</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="boxed-wrap">
                                                <div class="row align-items-center justify-content-between">
                                                    <div class="col-md-5">
                                                        <div class="locker">
                                                            <h4><a href="#">[Ticket# 3672451] https://wasetak.net/t/tiktok-account-verified-with-the-name-you-need/886488</a></h4>
                                                            <img src="{{asset('user_asset/img/card69.png')}}" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 pe-0">
                                                        <div class="row align-items-center">
                                                            <div class="col-md-3 p-md-0">
                                                                <img src="{{asset('user_asset/img/card13.png')}}" class="img1" alt="">
                                                            </div>
                                                            <div class="col-md-3 text-center">
                                                                <a href="#" class="rep">
                                                                    <h5>0</h5>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-3 text-center">
                                                                <a href="#" class="rep">
                                                                    <h5>0</h5>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <h5>1 Day</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="boxed-wrap">
                                                <div class="row align-items-center justify-content-between">
                                                    <div class="col-md-5">
                                                        <div class="locker">
                                                            <h4><a href="#">[Ticket# 3672451] https://wasetak.net/t/tiktok-account-verified-with-the-name-you-need/886488</a></h4>
                                                            <img src="{{asset('user_asset/img/card69.png')}}" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 pe-0">
                                                        <div class="row align-items-center">
                                                            <div class="col-md-3 p-md-0">
                                                                <img src="{{asset('user_asset/img/card13.png')}}" class="img1" alt="">
                                                            </div>
                                                            <div class="col-md-3 text-center">
                                                                <a href="#" class="rep">
                                                                    <h5>0</h5>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-3 text-center">
                                                                <a href="#" class="rep">
                                                                    <h5>0</h5>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <h5>1 Day</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="boxed-wrap">
                                                <div class="row align-items-center justify-content-between">
                                                    <div class="col-md-5">
                                                        <div class="locker">
                                                            <h4><a href="#">[Ticket# 3672451] https://wasetak.net/t/tiktok-account-verified-with-the-name-you-need/886488</a></h4>
                                                            <img src="{{asset('user_asset/img/card68.png')}}" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 pe-0">
                                                        <div class="row align-items-center">
                                                            <div class="col-md-3 p-md-0">
                                                                <img src="{{asset('user_asset/img/card13.png')}}" class="img1" alt="">
                                                            </div>
                                                            <div class="col-md-3 text-center">
                                                                <a href="#" class="rep">
                                                                    <h5>0</h5>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-3 text-center">
                                                                <a href="#" class="rep">
                                                                    <h5>0</h5>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <h5>10 June</h5>
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
                    </div>
                    <div class="box-9 activity ticket feedback">
                        <div class="col-md-12">
                            <div class="rating">
                                <span>Add your ratings</span>
                                <i class="fal fa-star"></i>
                                <i class="fal fa-star"></i>
                                <i class="fal fa-star"></i>
                                <i class="fal fa-star"></i>
                                <i class="fal fa-star"></i>
                            </div>
                            <textarea cols="30" rows="7" class="text-feed"></textarea>
                            <div class="tick-num">
                                <h5>! Were you the buyer or seller? Don't forget the ticket number</h5>
                                <div class="che">
                                    <div class="sel">
                                        <input type="checkbox">
                                        <label>Seller</label>
                                    </div>
                                    <div>
                                        <input type="checkbox">
                                        <label>Buyer</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="#" class="submit">Submit</a>
                                </div>
                                <div class="col-md-6 text-e">
                                    <ul class="filter">
                                        <li data-targetit="box-30">Seller</li>
                                        <li data-targetit="box-31" class="active">Buyer</li>
                                    </ul>
                                    <span class="post">Filter feedback posted by</span>
                                </div>
                            </div>
                            <div class="box-30">
                                <div class="row mar-t">
                                    <div class="col-md-12">
                                        <div class="boxed">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="boxed-ver">
                                                        <div class="boxed-img">
                                                            <img src="{{asset('user_asset/img/card48.png')}}" class="img1" alt="">
                                                            <img src="{{asset('user_asset/img/card74.png')}}" class="img2" alt="">
                                                        </div>
                                                        <div>
                                                            <h6>Seller | <span>ii2ahmed</span></h6>
                                                            <h5> <img src="{{asset('user_asset/img/card34.png')}}" class="img2" alt=""> Verified user</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 text-e">
                                                    <span class="ago" dir="ltr">22 hours ago</span>
                                                </div>
                                            </div>
                                            <p class="para">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or ised words which don't look even slightly believableden in the middle of text. All the Lorem Ipsum generators on the Internet tend to</p>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="boxed">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="boxed-ver">
                                                        <div class="boxed-img">
                                                            <img src="{{asset('user_asset/img/card48.png')}}" class="img1" alt="">
                                                            <img src="{{asset('user_asset/img/card74.png')}}" class="img2" alt="">
                                                        </div>
                                                        <div>
                                                            <h6>Seller | <span>ii2ahmed</span></h6>
                                                            <h5> <img src="{{asset('user_asset/img/card34.png')}}" class="img2" alt=""> Verified user</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 text-e">
                                                    <span class="ago" dir="ltr">22 hours ago</span>
                                                </div>
                                            </div>
                                            <p class="para">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or ised words which don't look even slightly believableden in the middle of text. All the Lorem Ipsum generators on the Internet tend to</p>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="boxed">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="boxed-ver">
                                                        <div class="boxed-img">
                                                            <img src="{{asset('user_asset/img/card48.png')}}" class="img1" alt="">
                                                            <img src="{{asset('user_asset/img/card74.png')}}" class="img2" alt="">
                                                        </div>
                                                        <div>
                                                            <h6>Seller | <span>ii2ahmed</span></h6>
                                                            <h5> <img src="{{asset('user_asset/img/card34.png')}}" class="img2" alt=""> Verified user</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 text-e">
                                                    <span class="ago" dir="ltr">22 hours ago</span>
                                                </div>
                                            </div>
                                            <p class="para">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or ised words which don't look even slightly believableden in the middle of text. All the Lorem Ipsum generators on the Internet tend to</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-31 showfirst">
                                <div class="row mar-t">
                                    <div class="col-md-12">
                                        <div class="boxed">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="boxed-ver">
                                                        <div class="boxed-img">
                                                            <img src="{{asset('user_asset/img/card48.png')}}" class="img1" alt="">
                                                            <img src="{{asset('user_asset/img/card74.png')}}" class="img2" alt="">
                                                        </div>
                                                        <div>
                                                            <h6>Buyer | <span>ii2ahmed</span></h6>
                                                            <h5> <img src="{{asset('user_asset/img/card34.png')}}" class="img2" alt=""> Verified user</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 text-e">
                                                    <span class="ago" dir="ltr">22 hours ago</span>
                                                </div>
                                            </div>
                                            <p class="para">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or ised words which don't look even slightly believableden in the middle of text. All the Lorem Ipsum generators on the Internet tend to</p>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="boxed">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="boxed-ver">
                                                        <div class="boxed-img">
                                                            <img src="{{asset('user_asset/img/card48.png')}}" class="img1" alt="">
                                                            <img src="{{asset('user_asset/img/card74.png')}}" class="img2" alt="">
                                                        </div>
                                                        <div>
                                                            <h6>Buyer | <span>ii2ahmed</span></h6>
                                                            <h5> <img src="{{asset('user_asset/img/card34.png')}}" class="img2" alt=""> Verified user</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 text-e">
                                                    <span class="ago" dir="ltr">22 hours ago</span>
                                                </div>
                                            </div>
                                            <p class="para">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or ised words which don't look even slightly believableden in the middle of text. All the Lorem Ipsum generators on the Internet tend to</p>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="boxed">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="boxed-ver">
                                                        <div class="boxed-img">
                                                            <img src="{{asset('user_asset/img/card48.png')}}" class="img1" alt="">
                                                            <img src="{{asset('user_asset/img/card74.png')}}" class="img2" alt="">
                                                        </div>
                                                        <div>
                                                            <h6>Buyer | <span>ii2ahmed</span></h6>
                                                            <h5> <img src="{{asset('user_asset/img/card34.png')}}" class="img2" alt=""> Verified user</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 text-e">
                                                    <span class="ago" dir="ltr">22 hours ago</span>
                                                </div>
                                            </div>
                                            <p class="para">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or ised words which don't look even slightly believableden in the middle of text. All the Lorem Ipsum generators on the Internet tend to</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="feedback-pos">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="boxed">
                                            <div class="row align-items-center">
                                                <div class="col-md-6">
                                                    <div class="boxed-ver">
                                                        <div class="boxed-img">
                                                            <img src="{{asset('user_asset/img/card83.png')}}" class="img1" alt="">
                                                            <img src="{{asset('user_asset/img/card74.png')}}" class="img2" alt="">
                                                        </div>
                                                        <div>
                                                            <h6><span>Master</span> | <small>Buyer</small> Speed</h6>
                                                            <div class="star">
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 text-e">
                                                    <span class="ago" dir="ltr">2 days</span>
                                                </div>
                                            </div>
                                            <p class="para">! One of my favorite sellers on SWAPD. Always responsive. Rapid name claim</p>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="boxed">
                                            <div class="row align-items-center">
                                                <div class="col-md-6">
                                                    <div class="boxed-ver">
                                                        <div class="boxed-img">
                                                            <img src="{{asset('user_asset/img/card83.png')}}" class="img1" alt="">
                                                            <img src="{{asset('user_asset/img/card74.png')}}" class="img2" alt="">
                                                        </div>
                                                        <div>
                                                            <h6><span>Master</span> | <small>Buyer</small> Speed</h6>
                                                            <div class="star">
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 text-e">
                                                    <span class="ago" dir="ltr">2 days</span>
                                                </div>
                                            </div>
                                            <p class="para">! One of my favorite sellers on SWAPD. Always responsive. Rapid name claim</p>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="boxed">
                                            <div class="row align-items-center">
                                                <div class="col-md-6">
                                                    <div class="boxed-ver">
                                                        <div class="boxed-img">
                                                            <img src="{{asset('user_asset/img/card83.png')}}" class="img1" alt="">
                                                            <img src="{{asset('user_asset/img/card74.png')}}" class="img2" alt="">
                                                        </div>
                                                        <div>
                                                            <h6><span>Master</span> | <small>Buyer</small> Speed</h6>
                                                            <div class="star">
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 text-e">
                                                    <span class="ago" dir="ltr">2 days</span>
                                                </div>
                                            </div>
                                            <p class="para">! One of my favorite sellers on SWAPD. Always responsive. Rapid name claim</p>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="boxed">
                                            <div class="row align-items-center">
                                                <div class="col-md-6">
                                                    <div class="boxed-ver">
                                                        <div class="boxed-img">
                                                            <img src="{{asset('user_asset/img/card83.png')}}" class="img1" alt="">
                                                            <img src="{{asset('user_asset/img/card74.png')}}" class="img2" alt="">
                                                        </div>
                                                        <div>
                                                            <h6><span>Master</span> | <small>Buyer</small> Speed</h6>
                                                            <div class="star">
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 text-e">
                                                    <span class="ago" dir="ltr">2 days</span>
                                                </div>
                                            </div>
                                            <p class="para">! One of my favorite sellers on SWAPD. Always responsive. Rapid name claim</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-10 follows activity preferences">
                        <div class="row">
                            <div class="col-md-2 px-0">
                                <ul class="list">
                                    <li data-targetit="box-32" class="active">Account</li>
                                    <li data-targetit="box-33">Security</li>
                                    <li data-targetit="box-34">Profile</li>
                                    <li data-targetit="box-35">Users</li>
                                    <li data-targetit="box-36">Inter Face</li>
                                </ul>
                            </div>
                            <div class="col-md-10">
                                <div class="box-32 showfirst prefer">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <h5>Upload a copy of your ID or Passport or Driving License</h5>
                                            <div class="file">
                                                <!-- <input type="file"> -->
                                                <label>
                                                    <input type="file" hidden class="custom-file-input" />
                                                    <i class="fas fa-file-plus"></i>
                                                    <div class="btn-up">Upload File</div>
                                                </label>
                                            </div>
                                            <div class="usern">
                                                <label>Username</label>
                                                <input type="text" placeholder="mohd5">
                                                <small>People can mention you as @mohd5</small>
                                            </div>
                                            <div class="profiled">
                                                <label>Profile Picture</label>
                                                <div class="profile-upload">
                                                    <label>
                                                        <input type="file" hidden class="custom-file-input" />
                                                        <i class="fas fa-pencil"></i>
                                                        <div class="btn-up">
                                                            <img src="{{asset('user_asset/img/card75.png')}}" alt="">
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="profiled">
                                                <label>Add Cover photo</label>
                                                <div class="profile-upload cover-pro">
                                                    <label>
                                                        <input type="file" hidden class="custom-file-input" />
                                                        <i class="fas fa-pencil"></i>
                                                        <div class="btn-up">
                                                            <img src="{{asset('user_asset/img/card75.png')}}" alt="">
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="emailed">
                                                <label>Email</label>
                                                <input type="text" placeholder="mohd125@gmail.com">
                                                <small>Never shown to the public</small>
                                            </div>
                                            <div class="usern">
                                                <label>Name</label>
                                                <input type="text" placeholder="Mohammad ahsan">
                                                <small>Your full name</small>
                                            </div>
                                            <div class="status">
                                                <label>Custom Status</label>
                                                <span><i class="fas fa-pencil"></i> Not Set</span>
                                            </div>
                                            <a href="#" class="theme-save">Save Changes</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-33 inter-face security">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="inter-face-w">
                                                <label>Password</label>
                                                <input type="text" placeholder="Send Password Reset Email">
                                            </div>
                                            <div class="inter-face-w">
                                                <label>Two-Factor Authentication</label>
                                                <input type="text" placeholder="Manage Two-Factor Authentication">
                                            </div>
                                            <div class="inter-face-w">
                                                <label>Recently Used Devices</label>
                                                <input type="text" placeholder="Windows Computer - Dubai">
                                            </div>
                                            <a href="#" class="theme-save">Save Changes</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-34 inter-face profile">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="inter-face-w">
                                                <label>About me</label>
                                                <div class="text-edi">
                                                    <div class="img">
                                                        <img src="{{asset('user_asset/img/card78.png')}}" alt="">
                                                    </div>
                                                    <textarea cols="30" rows="8"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="inter-face-w">
                                                <label>Timezone</label>
                                                <select>
                                                    <option value="America/Kentucky/Louisville">America/Kentucky/Louisville</option>
                                                    <option value="America/Kentucky/Monticello"> America/Kentucky/Monticello</option>
                                                    <option value="America/Knox_IN"> America/Knox_IN</option>
                                                    <option value="America/Kralendijk"> America/Kralendijk</option>
                                                    <option value=" America/La_Paz"> America/La_Paz</option>
                                                    <option value="America/Lima"> America/Lima</option>
                                                    <option value="America/Los_Angeles"> America/Los_Angeles</option>
                                                </select>
                                                <a href="#" class="timezone">Use current timezone</a>
                                            </div>
                                            <div class="inter-face-w">
                                                <label>Location</label>
                                                <input type="text">
                                            </div>
                                            <div class="inter-face-w">
                                                <label>Web Site</label>
                                                <input type="text">
                                            </div>
                                            <div class="inter-face-w">
                                                <label>Profile Header</label>
                                                <textarea cols="30" rows="8"></textarea>
                                            </div>
                                            <div class="inter-face-w">
                                                <label>User Card Background</label>
                                                <textarea cols="30" rows="8"></textarea>
                                            </div>
                                            <div class="inter-face-w">
                                                <label>Featured Topic</label>
                                                <a href="#" class="timezone">Select a new topic</a>
                                            </div>
                                            <a href="#" class="theme-save">Save Changes</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-35 inter-face user">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="inter-face-w">
                                                <label>Users</label>
                                                <small>Muted</small>
                                                <select>
                                                    <option value="Light">Select</option>
                                                </select>
                                                <label class="dark"> <input type="checkbox"> Only allow specific users to send me personal messages or chat direct messages</label>
                                                <select>
                                                    <option value="Light">Select</option>
                                                </select>
                                            </div>
                                            <a href="#" class="theme-save">Save Changes</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-36 inter-face">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="inter-face-w">
                                                <label>Color Scheme</label>
                                                <select>
                                                    <option value="Light">Light</option>
                                                </select>
                                            </div>
                                            <div class="inter-face-w">
                                                <label>Dark Mode</label>
                                                <label class="dark"><input type="checkbox"> Enable automatic dark mode color scheme</label>
                                            </div>
                                            <div class="inter-face-w">
                                                <label>Text Size</label>
                                                <select>
                                                    <option value="Light">Normal</option>
                                                </select>
                                            </div>
                                            <div class="inter-face-w">
                                                <label>Default Home Page</label>
                                                <select>
                                                    <option value="Light">Latest</option>
                                                </select>
                                            </div>
                                            <div class="inter-face-w">
                                                <label class="small-ti">:Background page title displays count of</label>
                                                <select>
                                                    <option value="Light">New Notification</option>
                                                </select>
                                            </div>
                                            <div class="inter-face-w">
                                                <label class="small-ti">:After a bookmark reminder notification is sent</label>
                                                <select>
                                                    <option value="Light">Keep bookmark and clear reminder</option>
                                                </select>
                                            </div>
                                            <a href="#" class="theme-save">Save Changes</a>
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
