@extends('User.layouts.master')
@section('content')
    <style>
        .hide {
            display: none;
        }
    </style>
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
                        <img src="assets/images/card127.png" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="boxed-imaged modalButton" data-popup="popupTen">
                                    <img src="assets/images/card16.png" class="img1" alt="">
                                    <img src="assets/images/card47.png" class="img2" alt="">
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
                        <a href="#" class="theme-btn1">Message <img src="assets/images/card91.png"
                                alt=""></a>
                        <div class="normal">
                            <a href="#" class=" dropbtn-normal"><i class="fas fa-sort-down"></i> Normal <img
                                    src="assets/images/card128.png" alt=""></a>
                            <div class="dropdown-content-normal">
                                <a href="#" class="pb-0">
                                    <div class="nomral-change">
                                        <img src="assets/images/card128.png" alt="">
                                        <h6>Normal</h6>
                                    </div>
                                    <p class="para mb-3">You will be notified if this user replies to you, quotes you, or
                                        mentions you</p>
                                </a>
                                <a href="#" class="pt-0">
                                    <div class="nomral-change">
                                        <img src="assets/images/card129.png" alt="">
                                        <h6>Muted</h6>
                                    </div>
                                    <p class="para">You will not receive any notifications related to this user</p>
                                </a>
                            </div>
                        </div>

                        <a href="#" class="theme-btn2">Follow <img src="assets/images/card93.png"
                                alt=""></a>
                        <a href="#" class="theme-btn2">Chat <img src="assets/images/card92.png"
                                alt=""></a>
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
                    <div class="boxed-img">
                        <img src="{{ Auth::user()->d_picture }}" class="img1" alt="">
                        {{-- <img src="{{ asset('assets/images/card47.png')}}" class="img2" alt=""> --}}
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="padd-r">
                        <h2 class="mt-4">{{ Auth::user()->username }}</h2>
                        <span class="vi">Basic User</span> | <span class="sm">{{ Auth::user()->name }}</span>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fal fa-star"></i>
                            <i class="fal fa-star"></i>
                        </div>
                        <div class="boxe-lined"></div>
                        <ul class="prof">
                            <li><a href="mailto:{{ Auth::user()->email }}">{{ Auth::user()->email }} : <span>Email
                                    </span></a></li>
                            <li>
                                <p> Basic User :<span>Trust Level</span></p>
                            </li>
                            <li>
                                <p> {{ $my_posts_views }} :<span>Views</span></p>
                            </li>
                            <li>
                                <p>8 Mins :<span>Seen </span></p>
                            </li>
                            <li>

                                <p>
                                    @if ($last_post_created != null)
                                        {{ $last_post_created->created_at->diffForHumans() ?? 'Not created yet' }} :
                                    @else
                                        0
                                        <span>Last Post </span>
                                    @endif
                                </p>
                            </li>
                            <li>
                                <p>{{ Auth::user()->created_at->diffForHumans() ?? 'Not created yet' }} : <span>Joined
                                    </span></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1>Activity</h1>
                    <ul class="lists">
                        <li data-targetit="box-1" class="@if(!$request->value) active @endif">
                            <span>summary</span>
                            <img src="assets/images/card49.png" alt="">
                        </li>
                        <li data-targetit="box-2">
                            <span>Activity</span>
                            <img src="assets/images/card50.png" alt="">
                        </li>
                        <li data-targetit="box-3">
                            <span>Notifications</span>
                            <img src="assets/images/card54.png" alt="">
                        </li>
                        <li data-targetit="box-4">
                            <span>Message</span>
                            <img src="assets/images/card55.png" alt="">
                        </li>
                        <li data-targetit="box-5" class="@if($request->value == "invites") active @endif">
                            <span>Invites</span>
                            <img src="assets/images/card58.png" alt="">
                        </li>
                        <li data-targetit="box-6">
                            <span>Badges </span>
                            <img src="assets/images/card51.png" alt="">
                        </li>
                        <li data-targetit="box-7">
                            <span>Follows</span>
                            <img src="assets/images/card52.png" alt="">
                        </li>
                        <li data-targetit="box-8" class="@if($request->value == "my_tickets") active @endif">
                            <span>Ticket</span>
                            <img src="assets/images/card56.png" alt="">
                        </li>
                        <li data-targetit="box-9">
                            <span>Feedback</span>
                            <img src="assets/images/card53.png" alt="">
                        </li>
                        <li data-targetit="box-10">
                            <span>Preferences</span>
                            <img src="assets/images/card57.png" alt="">
                        </li>
                    </ul>
                    <div class="box-1 showfirst summary">
                        <h1>Stats</h1>
                        <ul>
                            <li>
                                <div class="boxed-stat">
                                    <h5>Days Visited<span>{{ $visited_days ? $visited_days->days : 0 }}</span></h5>
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
                                    <h5>Topics Created<span>{{ $topic_created->count() }}</span></h5>
                                </div>
                            </li>
                            <li>
                                <div class="boxed-stat">
                                    <h5>Post Created<span>{{ $post_created->count() }}</span></h5>
                                </div>
                            </li>
                            <li>
                                <div class="boxed-stat">
                                    <h5>Given <img src="{{ asset('assets/images/card36.png') }}"
                                            alt=""><span>{{ $likes_given->count() }}</span></h5>
                                </div>
                            </li>
                            <li>
                                <div class="boxed-stat">
                                    <h5>Received <img src="{{ asset('assets/images/card36.png') }}"
                                            alt=""><span>{{ $like_received }}</span></h5>
                                </div>
                            </li>
                            <li>
                                <div class="boxed-stat">
                                    <h5>Bookmarks<span>{{ $bookmarks->count() }}</span></h5>
                                </div>
                            </li>
                            <li>
                                <div class="boxed-stat">
                                    <h5>Topics Viewed<span>{{ $topic_created->count() }}</span></h5>
                                </div>
                            </li>
                            <li>
                                <div class="boxed-stat">
                                    <h5>Post Viewed<span>{{ $post_created->count() }}</span></h5>
                                </div>
                            </li>
                        </ul>
                        <div class="summary-wrap">
                            <div class="row rowgap">
                                <div class="col-md-6">
                                    <div class="boxed-summary">
                                        <h4>My Top Replies</h4>
                                        @if ($get_top_replies != null)
                                            @foreach ($get_top_replies as $get_top_reply)
                                                <div class="boxed-wrap">
                                                    <p class="para">{{ $get_top_reply->reply }}</p>
                                                    <span>{{ $get_top_reply->created_at->diffForHumans() }}</span> <span>
                                                        <img src="assets/images/card36.png" alt="">
                                                        {{ $my_top_replies->count() }}</span>
                                                </div>
                                            @endforeach
                                        @else
                                            <div class="boxed-wrap">
                                                <p class="para">No data found.</p>
                                            </div>
                                        @endif

                                    </div>
                                    {{-- <a href="#" class="reply">More Replies</a> --}}
                                </div>
                                <div class="col-md-6">
                                    <div class="boxed-summary">
                                        <h4>My Top Topics</h4>
                                        {{-- {{ dd($my_top_topics) }} --}}
                                        @if ($my_top_topics->count())
                                            @foreach ($my_top_topics as $my_top_topic)
                                                <div class="boxed-wrap">
                                                    <a href="{{ route('user.post_detail', $my_top_topic->id) }}">
                                                        <p class="para">{{ $my_top_topic->title }}</p>
                                                    </a><br>
                                                    <span>{{ $my_top_topic->created_at->diffForHumans() }}</span>
                                                    <span><img src="assets/images/card36.png" alt=""> 52</span>
                                                </div>
                                            @endforeach
                                        @else
                                            <div class="boxed-wrap">
                                                <p class="para">No data found.</p>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="boxed-summary">
                                        <h4>Most Replied to</h4>

                                        @if ($most_replies_to->count() > 0)
                                            @foreach ($most_replies_to as $get_all_post_against_reply)
                                                @php
                                                    $post_details = App\Models\Post::find($get_all_post_against_reply);
                                                @endphp
                                                <div class="boxed-wrap">
                                                    <div class="m-repl">
                                                        <div class="repl-img">
                                                            <img src="{{ $post_details->getUserInfo->d_picture }}"
                                                                alt="">
                                                            {{-- <img src="assets/images/card134.png" class="img2"
                                                                alt=""> --}}
                                                        </div>
                                                        <span>
                                                            <h5>{{ $post_details->getUserInfo->name }}</h5>
                                                            <span class="val"><img src="assets/images/card138.png"
                                                                    alt=""> 5</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @else
                                            <div class="boxed-wrap">
                                                <p class="para">No data found.</p>
                                            </div>
                                        @endif

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="boxed-summary">
                                        <h4>Most Liked by</h4>
                                        @if ($most_liked_by != null)
                                            @foreach ($most_liked_by as $most_liked_by_user_details)
                                                <div class="boxed-wrap">
                                                    <div class="m-repl">
                                                        <div class="repl-img">
                                                            <img src="{{ $most_liked_by_user_details->d_picture }}"
                                                                alt="">
                                                            {{-- <img src="assets/images/card134.png" class="img2"
                                                                alt=""> --}}
                                                        </div>
                                                        <span>
                                                            <h5>{{ $most_liked_by_user_details->name }}</h5>
                                                            <span class="val">
                                                                <img src="assets/images/card138.png"
                                                                    alt="">{{ $most_liked_by_user_details->replies->count() }}</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @else
                                            <div class="boxed-wrap">
                                                <p class="para">No data found.</p>
                                            </div>
                                        @endif
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
                                                @foreach ($top_categories as $top_category)
                                                    @php
                                                        $post = App\Models\Post::where('category_id', $top_category->id)->first();
                                                    @endphp
                                                    <tr>
                                                        <td>
                                                            <span class="boxed-1"
                                                                style="background: {{ $top_category->color }}"></span>{{ $top_category->name }}
                                                        </td>
                                                        <td>{{ $post->title }}</td>
                                                        <td>{{ $post->getPostDetailsFromReply->count() }}</td>
                                                    </tr>
                                                @endforeach
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
                                                    <img src="assets/images/card139.png" alt="">
                                                    <h4>Identity verified</h4>
                                                    <p class="para">This badge is awarded to members who have verified
                                                        their status Full of their identity by presenting an identity card
                                                        Issued by a government agency.</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="boxed-wrap">
                                                    <img src="assets/images/card139.png" alt="">
                                                    <h4>Identity verified</h4>
                                                    <p class="para">This badge is awarded to members who have verified
                                                        their status Full of their identity by presenting an identity card
                                                        Issued by a government agency.</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="boxed-wrap">
                                                    <img src="assets/images/card139.png" alt="">
                                                    <h4>Identity verified</h4>
                                                    <p class="para">This badge is awarded to members who have verified
                                                        their status Full of their identity by presenting an identity card
                                                        Issued by a government agency.</p>
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
                            <p class="para">There are many variations of passages of Lorem Ipsum available, but the
                                majority have suffered alteration in some form, by injected humour, or randomised words
                                which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum,
                                you need to be sure there isn't anything embarrassing hidden in the middle of text. All the
                                Lorem Ipsum generators on the Internet tend to</p>
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
                                    <li data-targetit="box-20" class="end-co"><a
                                            href="{{ route('user.create_pdf', ['download_pdf']) }}"><img
                                                src="assets/images/card59.png" alt=""> Download All</a> </li>
                                </ul>
                            </div>
                            <div class="col-md-10">
                                <div class="box-11 showfirst all">
                                    @if ($all_activity->count() > 0)
                                        @foreach ($all_activity as $all_activities)
                                            <div class="boxed">
                                                <div class="row align-items-center">
                                                    <div class="col-md-9">
                                                        <div class="boxed-image">
                                                            <img src="{{ Auth::user()->d_picture }}" alt="">
                                                            <div>
                                                                <h5><a
                                                                        href="{{ route('user.post_detail', $all_activities->id) }}">{{ $all_activities->title }}</a>
                                                                </h5>
                                                                <span>{{ $all_activities->getCatInfo->name }}</span>
                                                            </div>
                                                        </div>
                                                        <p class="para">is interested on
                                                            {{ $all_activities->created_at->format('m-d-Y') }}</p>
                                                    </div>
                                                    <div class="col-md-3 text-e">
                                                        <p class="para">
                                                            {{ $all_activities->created_at->diffForHumans() }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                        <div class="boxed">
                                            <div class="row align-items-center">
                                                No data found.
                                            </div>
                                        </div>
                                    @endif
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
                                        @foreach ($my_posts as $my_post)
                                            <div class="col-md-12">
                                                <div class="boxed-wrap">
                                                    <div class="row align-items-center">
                                                        <div class="col-md-6">
                                                            <a href="{{ route('user.post_detail', $my_post->id) }}">
                                                                <h4> {{ $my_post->title }}</h4>
                                                            </a>
                                                            <ul class="links">
                                                                @if ($my_post->category_id != 0)
                                                                    <li><span
                                                                            class="span">{{ $my_post->getCatInfo->name }}</span><span
                                                                            class="box1"></span></li>
                                                                @endif
                                                                @if ($my_post->sub_category_id != 0)
                                                                    <li><span
                                                                            class="span">{{ $my_post->getSubCatInfo->name ?? '' }}</span><span
                                                                            class="box2"></span></li>
                                                                @endif
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
                                                                    <img src="{{ Auth::user()->d_picture }}"
                                                                        class="img1" alt="">
                                                                </div>
                                                                <div class="col-md-4 text-center">
                                                                    <a href="#" class="rep">
                                                                        <img src="assets/images/card14.png"
                                                                            alt="">
                                                                        <h5>{{ $my_post->getPostReplies->count() }} Replies
                                                                        </h5>
                                                                    </a>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <a href="#" class="rep">
                                                                        <img src="assets/images/card12.png"
                                                                            alt="">
                                                                        <h5>{{ $my_post->getPostViews->count() }} views
                                                                        </h5>
                                                                    </a>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <h5>{{ $my_post->created_at->diffForHumans() }}</h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="box-13 replies">
                                    @foreach ($get_all_where_i_replied as $get_all_where_i_replies)
                                        @php
                                            $pick_last_interaction = App\Models\PostReply::where('post_id', $get_all_where_i_replies->id)
                                                ->orderBy('id', 'DESC')
                                                ->first();
                                        @endphp
                                        <div class="boxed">
                                            <div class="row align-items-center">
                                                <div class="col-md-9">
                                                    <div class="boxed-image">
                                                        <img src="{{ $pick_last_interaction->getPostedUserInfo->d_picture }}"
                                                            alt="">
                                                        <div>
                                                            <h5>
                                                                <a
                                                                    href="{{ route('user.post_detail', $get_all_where_i_replies->id) }}">{{ $get_all_where_i_replies->title }}</a>
                                                            </h5>
                                                            <span>{{ $get_all_where_i_replies->getCatInfo->name }}</span>
                                                        </div>
                                                    </div>
                                                    {{-- <p class="para">is interested on Apr 11</p> --}}
                                                </div>
                                                <div class="col-md-3 text-e">
                                                    <p class="para">
                                                        {{ $get_all_where_i_replies->created_at->diffForHumans() }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
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
                                        @foreach ($get_all_my_viewed_posts as $get_all_my_viewed_post)
                                            <div class="col-md-12">
                                                <div class="boxed-wrap">
                                                    <div class="row align-items-center">
                                                        <div class="col-md-7">
                                                            <h4>{{ $get_all_my_viewed_post->title }}</h4>
                                                            <ul class="links">
                                                                @if ($get_all_my_viewed_post->category_id != 0)
                                                                    <li><span
                                                                            class="span">{{ $get_all_my_viewed_post->getCategoryInfo->name ?? '' }}</span><span
                                                                            class="box1"></span></li>
                                                                @endif
                                                                @if ($get_all_my_viewed_post->sub_category_id != 0)
                                                                    <li><span
                                                                            class="span">{{ $get_all_my_viewed_post->getSubCategoryInfo->name ?? '' }}</span><span
                                                                            class="box2"></span></li>
                                                                @endif
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
                                                                    <img src="assets/images/card13.png" class="img1"
                                                                        alt="">
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <a href="#" class="rep">
                                                                        <h5>{{ $get_all_my_viewed_post->getPostReplies->count() }}
                                                                            Replies</h5>
                                                                    </a>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <a href="#" class="rep">
                                                                        <h5>{{ $get_all_my_viewed_post->getPostViews->count() }}
                                                                            views</h5>
                                                                    </a>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <h5>{{ $get_all_my_viewed_post->created_at->diffForHumans() }}
                                                                    </h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="box-15 draft">
                                    <div class="boxed">
                                        <div class="row align-items-start">
                                            <div class="col-md-9">
                                                <div class="boxed-image align-items-start">
                                                    <img src="assets/images/card48.png" alt="">
                                                    <div>
                                                        <span><span class="cor-pi"></span>Buyer Request</span>
                                                        <p class="para">Country of followers (majority): Amount of
                                                            followers: Topic/Niche: Promotion methods used?
                                                            (Organic/S4S/Follow Unfollow/Engagement Networks): Description:
                                                            List item</p>
                                                    </div>
                                                </div>
                                                <a href="#" class="theme-gr">Resume <img
                                                        src="assets/images/card60.png" alt=""></a>
                                            </div>
                                            <div class="col-md-3 text-e">
                                                <p class="para">New topic draft Apr 19</p>
                                                <a href="#" class="del">
                                                    <img src="assets/images/card61.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="boxed">
                                        <div class="row align-items-start">
                                            <div class="col-md-9">
                                                <div class="boxed-image align-items-start">
                                                    <img src="assets/images/card48.png" alt="">
                                                    <div>
                                                        <span><span class="cor-pi"></span>Buyer Request</span>
                                                        <p class="para">Country of followers (majority): Amount of
                                                            followers: Topic/Niche: Promotion methods used?
                                                            (Organic/S4S/Follow Unfollow/Engagement Networks): Description:
                                                            List item</p>
                                                    </div>
                                                </div>
                                                <a href="#" class="theme-gr">Resume <img
                                                        src="assets/images/card60.png" alt=""></a>
                                            </div>
                                            <div class="col-md-3 text-e">
                                                <p class="para">New topic draft Apr 19</p>
                                                <a href="#" class="del">
                                                    <img src="assets/images/card61.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="boxed">
                                        <div class="row align-items-start">
                                            <div class="col-md-9">
                                                <div class="boxed-image align-items-start">
                                                    <img src="assets/images/card48.png" alt="">
                                                    <div>
                                                        <span><span class="cor-pi"></span>Buyer Request</span>
                                                        <p class="para">Country of followers (majority): Amount of
                                                            followers: Topic/Niche: Promotion methods used?
                                                            (Organic/S4S/Follow Unfollow/Engagement Networks): Description:
                                                            List item</p>
                                                    </div>
                                                </div>
                                                <a href="#" class="theme-gr">Resume <img
                                                        src="assets/images/card60.png" alt=""></a>
                                            </div>
                                            <div class="col-md-3 text-e">
                                                <p class="para">New topic draft Apr 19</p>
                                                <a href="#" class="del">
                                                    <img src="assets/images/card61.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="boxed">
                                        <div class="row align-items-start">
                                            <div class="col-md-9">
                                                <div class="boxed-image align-items-start">
                                                    <img src="assets/images/card48.png" alt="">
                                                    <div>
                                                        <span><span class="cor-pi"></span>Buyer Request</span>
                                                        <p class="para">Country of followers (majority): Amount of
                                                            followers: Topic/Niche: Promotion methods used?
                                                            (Organic/S4S/Follow Unfollow/Engagement Networks): Description:
                                                            List item</p>
                                                    </div>
                                                </div>
                                                <a href="#" class="theme-gr">Resume <img
                                                        src="assets/images/card60.png" alt=""></a>
                                            </div>
                                            <div class="col-md-3 text-e">
                                                <p class="para">New topic draft Apr 19</p>
                                                <a href="#" class="del">
                                                    <img src="assets/images/card61.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="boxed">
                                        <div class="row align-items-start">
                                            <div class="col-md-9">
                                                <div class="boxed-image align-items-start">
                                                    <img src="assets/images/card48.png" alt="">
                                                    <div>
                                                        <span><span class="cor-pi"></span>Buyer Request</span>
                                                        <p class="para">Country of followers (majority): Amount of
                                                            followers: Topic/Niche: Promotion methods used?
                                                            (Organic/S4S/Follow Unfollow/Engagement Networks): Description:
                                                            List item</p>
                                                    </div>
                                                </div>
                                                <a href="#" class="theme-gr">Resume <img
                                                        src="assets/images/card60.png" alt=""></a>
                                            </div>
                                            <div class="col-md-3 text-e">
                                                <p class="para">New topic draft Apr 19</p>
                                                <a href="#" class="del">
                                                    <img src="assets/images/card61.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-16 liks">
                                    @if ($get_all_my_liked_posts->count() > 0)
                                        @foreach ($get_all_my_liked_posts as $get_all_my_liked_post)
                                            <div class="boxed">
                                                <ul class="accordion">
                                                    <li class="first">
                                                        <div class="acc_title">
                                                            <div class="row">
                                                                <div class="col-md-9">
                                                                    <div class="boxed-image align-items-start">
                                                                        <img src="{{ $get_all_my_liked_post->getUserInfo->d_picture }}"
                                                                            alt="">
                                                                        <div>
                                                                            <h5><a
                                                                                    href=" {{ route('user.post_detail', $get_all_my_liked_post->id) }} ">{{ $get_all_my_liked_post->title }}</a>
                                                                            </h5>
                                                                            <span><span
                                                                                    class="cor-gr"></span>Auction</span>
                                                                            <p class="para">
                                                                                {{ substr($get_all_my_liked_post->description, 0, 100) }}
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 text-e">
                                                                    <h6 class="">
                                                                        {{ $get_all_my_liked_post->created_at->diffForHumans() }}
                                                                        <i class="fas fa-sort-down"></i>
                                                                    </h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        {{-- {}@if (substr_count($get_all_my_liked_post->description)) --}}
                                                        <div class="acc_desc" style="display: none;">
                                                            {{-- <h5>:To participate in our auctions you</h5> --}}
                                                            <p class="para">{!! $get_all_my_liked_post->description !!}</p>
                                                        </div>
                                                        <div class="thum">
                                                            <a href="#">
                                                                <img src="assets/images/card23.png" alt="">
                                                            </a>
                                                            <img src="assets/images/card48.png" alt="">
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        @endforeach
                                    @else
                                        No data found.
                                    @endif
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
                                    @foreach ($my_bookmark_posts as $my_bookmark_post)
                                        <div class="boxed">
                                            <div class="row align-items-center">
                                                <div class="col-md-8">
                                                    <div class="time"><span> <img src="assets/images/card64.png"
                                                                alt=""> At
                                                            {{ $my_bookmark_post->created_at->diffForHumans() }}</span>
                                                    </div>
                                                    <h5 class="than">
                                                        {{ $my_bookmark_post->bookmarksPostDetails->title }}</h5>
                                                    <p class="para mb-4">{!! $my_bookmark_post->bookmarksPostDetails->description !!}</p>
                                                </div>
                                                <div class="col-md-4 text-e">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="conta">
                                                                <a href="#" class="modalButton"
                                                                    data-popup="popupFifteen_{{ $my_bookmark_post->id }}"><img
                                                                        src="assets/images/card62.png" alt=""></a>
                                                                <span>{{ $my_bookmark_post->bookmarksPostDetails->created_at->diffForHumans() }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="doted">
                                                                <span>{{ $my_bookmark_post->created_at->diffForHumans() }}</span>
                                                                <div class="dropdown2">
                                                                    <a href="#" class="dropbtn">
                                                                        <img src="assets/images/card63.png"
                                                                            alt="">
                                                                    </a>
                                                                    <div class="dropdown-content">
                                                                        <a href="#">
                                                                            <div class="list">
                                                                                <img src="assets/images/card87.png"
                                                                                    alt="">
                                                                                <div>
                                                                                    <h5
                                                                                        onclick="delete_bookmark({{ $my_bookmark_post->id }})">
                                                                                        Delete bookmark</h5>
                                                                                    <p class="para"
                                                                                        onclick="delete_bookmark({{ $my_bookmark_post->id }})">
                                                                                        Removes the bookmark
                                                                                        from your profile and stops all
                                                                                        reminders fro the bookmark</p>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                        <a href="#">
                                                                            <div class="list">
                                                                                <img src="assets/images/card88.png"
                                                                                    alt="">
                                                                                <div>
                                                                                    <h5>Edit bookmark</h5>
                                                                                    <p class="para">Edit the bookmark
                                                                                        name
                                                                                        or change the reminder date and time
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                        <a href="#">
                                                                            <div class="list">
                                                                                <img src="assets/images/card89.png"
                                                                                    alt="">
                                                                                <div>
                                                                                    <h5>Clear reminder</h5>
                                                                                    <p class="para">Clear the reminder
                                                                                        date
                                                                                        and time</p>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                        <a href="#">
                                                                            <div class="list">
                                                                                <img src="assets/images/card90.png"
                                                                                    alt="">
                                                                                <div>
                                                                                    @if ($my_bookmark_post->is_pinned == 0)
                                                                                        <h5
                                                                                            onclick="pin_bookmark({{ $my_bookmark_post->id }})">
                                                                                            Pin bookmark</h5>
                                                                                        <p class="para"
                                                                                            onclick="pin_bookmark({{ $my_bookmark_post->id }})">
                                                                                            Pin the bookmark on top
                                                                                        </p>
                                                                                    @else
                                                                                        <h5
                                                                                            onclick="unpin_bookmark({{ $my_bookmark_post->id }})">
                                                                                            Unpin bookmark</h5>
                                                                                        <p class="para"
                                                                                            onclick="pin_bookmark({{ $my_bookmark_post->id }})">
                                                                                            Unpin this bookmark from top
                                                                                        </p>
                                                                                    @endif
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
                                    @endforeach
                                </div>
                                <div class="box-18 solve">
                                    <h3 class="abst">Abstract has not solved any topics yet</h3>
                                </div>
                                <div class="box-19 reports">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="boxed report">
                                                <h3>Earning and Purchase report</h3>
                                                <p class="para">SWAPD tracks and reports purchases/sales data since
                                                    we've begun collecting the information (March 2020).</p>
                                                <h5>. 0 purchase(s) and 0 sold items/services</h5>
                                                <p class="para">Data is updated every 24 hours. Earnings/purchases may
                                                    still show 0 USD even if a member has successful tickets. This is due to
                                                    data missing which we're unable to recover. Successful tickets are still
                                                    counted, but wasetak didn't track amounts until March 2020.</p>
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
                                                <p class="para" dir="ltr"><span>Note:</span> SWAPD fees are paid
                                                    by sellers only. If you're not an active seller your balance will show
                                                    zero.</p>
                                            </div>
                                            <label><input type="checkbox"> Show this data to public</label>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-md-9 text-center">
                                            <h4>Last updated: Wed May 03 2023 17:22:43 GMT-0700</h4>
                                            <div class="dis">
                                                <h3>DISCLAIMER</h3>
                                                <p class="para">This is an approximate estimation of user's earnings,
                                                    purchases, and paid SWAPD fees. User data is updated every 24 hours. The
                                                    exact numbers may not reflect the true earnings due to things such as
                                                    user level, fee rate, and missing data (prior to March 2020).</p>
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
                            @if($notifications->count() > 0)
                                @foreach($notifications as $notification)
                                    <div class="col-md-10">
                                        <div class="box-46 showfirst">
                                            <div class="boxed">
                                                <div class="boxed-noti">
                                                    <img src="assets/images/card84.png" alt="">
                                                    <h5><a href="message-notifications.php">{{$notification->title}}</a></h5>
                                                    <br><br>
                                                    <p><a href="">{{$notification->body}}</a></p>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="col-md-10">
                                    <div class="box-46 showfirst">
                                        No new updates found.
                                    </div>
                                </div>
                            @endif 
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
                                    <li data-targetit="box-25" class="inbox active"><img src="assets/images/card65.png"
                                            alt=""> Inbox <i class="far fa-chevron-down"></i></li>
                                    <div class="panel">
                                        <ul>
                                            <li data-targetit="box-26"><img src="assets/images/card70.png"
                                                    alt="">Sent</li>
                                            <li data-targetit="box-27"><img src="assets/images/card71.png"
                                                    alt="">New</li>
                                            <li data-targetit="box-28"><img src="assets/images/card72.png"
                                                    alt="">Unread</li>
                                            <li data-targetit="box-29"><img src="assets/images/card73.png"
                                                    alt="">Archive</li>
                                        </ul>
                                    </div>
                                    <li data-targetit="box-24"><i class="fas fa-shopping-cart"></i> Tickets</li>
                                    <li class="end-co">New Message <img src="assets/images/card67.png" alt="">
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-10">
                                <div class="box-25 showfirst tickets">
                                    <div class="row rowgap">
                                        {{-- @dd($tickets); --}}
                                        @if ($tickets->count() > 0)
                                            @foreach ($tickets as $ticket)
                                                <div class="col-md-12">
                                                    <div class="boxed-wrap">
                                                        <div class="row align-items-center justify-content-between">
                                                            <div class="col-md-5">
                                                                <div class="locker">
                                                                    <h4>
                                                                        <a
                                                                            href="{{ route('checkout.ticket_details', $ticket->ticket_no) }}">
                                                                            [Ticket# {{ $ticket->ticket_no }}]
                                                                            {{ url('checkout/ticket-details/' . $ticket->ticket_no . ' ') }}
                                                                        </a>
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 pe-0">
                                                                <div class="row align-items-center">
                                                                    <div class="col-md-3 p-md-0">
                                                                        <img src="assets/images/card13.png" class="img1"
                                                                            alt="">
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
                                            @endforeach
                                        @endif
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="box-5 activity invites" @if($request->value == "invites") style="display:block;" @endif>
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
                        <p class="para">There are many variations of passages of Lorem Ipsum available, but the majority
                            have suffered alteration in some form, by injected humour, or randomised words which don't look
                            even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure
                            there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators
                            on the Internet tend to</p>
                        <p class="para">There are many variations of passages of Lorem Ipsum available, but the majority
                            have suffered alteration in some form, by injected humour, or randomised words which don't look
                            even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure
                            there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators
                            on the Internet tend to</p>
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
                                    <p class="para">There are many variations of passages of Lorem Ipsum available, but
                                        the majority have suffered alteration in some form, by injected humour, or
                                        randomised words which don't look even slightly believable. If you are going to use
                                        a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing
                                        hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to
                                    </p>
                                    <p class="para">There are many variations of passages of Lorem Ipsum available, but
                                        the majority have suffered alteration in some form, by injected humour, or
                                        randomised words which don't look even slightly believable. If you are going to use
                                        a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing
                                        hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to
                                    </p>
                                    <p class="para">There are many variations of passages of Lorem Ipsum available, but
                                        the majority have suffered alteration in some form, by injected humour, or
                                        randomised words which don't look even slightly believable. If you are going to use
                                        a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing
                                        hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to
                                    </p>
                                    <p class="para">There are many variations of passages of Lorem Ipsum available, but
                                        the majority have suffered alteration in some form, by injected humour, or
                                        randomised words which don't look even slightly believable. If you are going to use
                                        a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing
                                        hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to
                                    </p>
                                    <p class="para">There are many variations of passages of Lorem Ipsum available, but
                                        the majority have suffered alteration in some form, by injected humour, or
                                        randomised words which don't look even slightly believable. If you are going to use
                                        a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing
                                        hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to
                                    </p>
                                    <p class="para">There are many variations of passages of Lorem Ipsum available, but
                                        the majority have suffered alteration in some form, by injected humour, or
                                        randomised words which don't look even slightly believable. If you are going to use
                                        a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing
                                        hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to
                                    </p>
                                </div>
                                <div class="box-42 showfirst">
                                    <h3>Wasetak Rewars Rules</h3>
                                    <p class="para">There are many variations of passages of Lorem Ipsum available, but
                                        the majority have suffered alteration in some form, by injected humour, or
                                        randomised words which don't look even slightly believable. If you are going to use
                                        a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing
                                        hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to
                                    </p>
                                    <p class="para">There are many variations of passages of Lorem Ipsum available, but
                                        the majority have suffered alteration in some form, by injected humour, or
                                        randomised words which don't look even slightly believable. If you are going to use
                                        a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing
                                        hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to
                                    </p>
                                    <p class="para">There are many variations of passages of Lorem Ipsum available, but
                                        the majority have suffered alteration in some form, by injected humour, or
                                        randomised words which don't look even slightly believable. If you are going to use
                                        a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing
                                        hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to
                                    </p>
                                    <p class="para">There are many variations of passages of Lorem Ipsum available, but
                                        the majority have suffered alteration in some form, by injected humour, or
                                        randomised words which don't look even slightly believable. If you are going to use
                                        a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing
                                        hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to
                                    </p>
                                    <p class="para">There are many variations of passages of Lorem Ipsum available, but
                                        the majority have suffered alteration in some form, by injected humour, or
                                        randomised words which don't look even slightly believable. If you are going to use
                                        a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing
                                        hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to
                                    </p>
                                    <p class="para">There are many variations of passages of Lorem Ipsum available, but
                                        the majority have suffered alteration in some form, by injected humour, or
                                        randomised words which don't look even slightly believable. If you are going to use
                                        a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing
                                        hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to
                                    </p>
                                </div>
                                <div class="box-43 showfirst">
                                    <h3>How to use</h3>
                                    <p class="para">There are many variations of passages of Lorem Ipsum available, but
                                        the majority have suffered alteration in some form, by injected humour, or
                                        randomised words which don't look even slightly believable. If you are going to use
                                        a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing
                                        hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to
                                    </p>
                                    <p class="para">There are many variations of passages of Lorem Ipsum available, but
                                        the majority have suffered alteration in some form, by injected humour, or
                                        randomised words which don't look even slightly believable. If you are going to use
                                        a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing
                                        hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to
                                    </p>
                                    <p class="para">There are many variations of passages of Lorem Ipsum available, but
                                        the majority have suffered alteration in some form, by injected humour, or
                                        randomised words which don't look even slightly believable. If you are going to use
                                        a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing
                                        hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to
                                    </p>
                                    <p class="para">There are many variations of passages of Lorem Ipsum available, but
                                        the majority have suffered alteration in some form, by injected humour, or
                                        randomised words which don't look even slightly believable. If you are going to use
                                        a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing
                                        hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to
                                    </p>
                                    <p class="para">There are many variations of passages of Lorem Ipsum available, but
                                        the majority have suffered alteration in some form, by injected humour, or
                                        randomised words which don't look even slightly believable. If you are going to use
                                        a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing
                                        hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to
                                    </p>
                                    <p class="para">There are many variations of passages of Lorem Ipsum available, but
                                        the majority have suffered alteration in some form, by injected humour, or
                                        randomised words which don't look even slightly believable. If you are going to use
                                        a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing
                                        hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to
                                    </p>
                                </div>
                                <div class="box-44 showfirst">
                                    <h3>Rewards Faqs </h3>
                                    <p class="para">There are many variations of passages of Lorem Ipsum available, but
                                        the majority have suffered alteration in some form, by injected humour, or
                                        randomised words which don't look even slightly believable. If you are going to use
                                        a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing
                                        hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to
                                    </p>
                                    <p class="para">There are many variations of passages of Lorem Ipsum available, but
                                        the majority have suffered alteration in some form, by injected humour, or
                                        randomised words which don't look even slightly believable. If you are going to use
                                        a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing
                                        hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to
                                    </p>
                                    <p class="para">There are many variations of passages of Lorem Ipsum available, but
                                        the majority have suffered alteration in some form, by injected humour, or
                                        randomised words which don't look even slightly believable. If you are going to use
                                        a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing
                                        hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to
                                    </p>
                                    <p class="para">There are many variations of passages of Lorem Ipsum available, but
                                        the majority have suffered alteration in some form, by injected humour, or
                                        randomised words which don't look even slightly believable. If you are going to use
                                        a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing
                                        hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to
                                    </p>
                                    <p class="para">There are many variations of passages of Lorem Ipsum available, but
                                        the majority have suffered alteration in some form, by injected humour, or
                                        randomised words which don't look even slightly believable. If you are going to use
                                        a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing
                                        hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to
                                    </p>
                                    <p class="para">There are many variations of passages of Lorem Ipsum available, but
                                        the majority have suffered alteration in some form, by injected humour, or
                                        randomised words which don't look even slightly believable. If you are going to use
                                        a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing
                                        hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to
                                    </p>
                                </div>
                                <div class="box-45 showfirst">
                                    <h3>Terms of Service</h3>
                                    <p class="para">There are many variations of passages of Lorem Ipsum available, but
                                        the majority have suffered alteration in some form, by injected humour, or
                                        randomised words which don't look even slightly believable. If you are going to use
                                        a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing
                                        hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to
                                    </p>
                                    <p class="para">There are many variations of passages of Lorem Ipsum available, but
                                        the majority have suffered alteration in some form, by injected humour, or
                                        randomised words which don't look even slightly believable. If you are going to use
                                        a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing
                                        hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to
                                    </p>
                                    <p class="para">There are many variations of passages of Lorem Ipsum available, but
                                        the majority have suffered alteration in some form, by injected humour, or
                                        randomised words which don't look even slightly believable. If you are going to use
                                        a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing
                                        hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to
                                    </p>
                                    <p class="para">There are many variations of passages of Lorem Ipsum available, but
                                        the majority have suffered alteration in some form, by injected humour, or
                                        randomised words which don't look even slightly believable. If you are going to use
                                        a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing
                                        hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to
                                    </p>
                                    <p class="para">There are many variations of passages of Lorem Ipsum available, but
                                        the majority have suffered alteration in some form, by injected humour, or
                                        randomised words which don't look even slightly believable. If you are going to use
                                        a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing
                                        hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to
                                    </p>
                                    <p class="para">There are many variations of passages of Lorem Ipsum available, but
                                        the majority have suffered alteration in some form, by injected humour, or
                                        randomised words which don't look even slightly believable. If you are going to use
                                        a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing
                                        hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-6 activity badge">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="boxed">
                                    <img src="assets/images/card79.png" alt="">
                                    <h4>Identity verified</h4>
                                    <p class="para">This badge is awarded to members who have <br> verified their status
                                        Full of their identity by <br> presenting an identity card Issued by a <br>
                                        .government agency</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-7 follows activity">
                        <div class="row">
                            <div class="col-md-2 px-0">
                                <ul class="list">
                                    {{-- <li data-targetit="box-21" class="active">Feed</li> --}}
                                    <li data-targetit="box-22" class="active">Following</li>
                                    <li data-targetit="box-23">Followers</li>
                                </ul>
                            </div>
                            <div class="col-md-10">
                                {{-- <div class="box-21 showfirst feed">
                                    <div class="boxed">
                                        <div class="row align-items-start">
                                            <div class="col-md-10">
                                                <div class="boxed-image align-items-start">
                                                    <img src="assets/images/card48.png" alt="">
                                                    <div>
                                                        <h5><a href="#">New Fresh Panels -Musician $1000 Public
                                                                Figure $5000 Entrepreneur $5500</a></h5>
                                                        <span>FB & IG Services</span>
                                                        <p class="para">hahahahahaaah okay boss first ticket on site for
                                                            this service, for musician launched … wish me luck guys</p>
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
                                                    <img src="assets/images/card48.png" alt="">
                                                    <div>
                                                        <h5><a href="#">New Fresh Panels -Musician $1000 Public
                                                                Figure $5000 Entrepreneur $5500</a></h5>
                                                        <span>FB & IG Services</span>
                                                        <p class="para">hahahahahaaah okay boss first ticket on site for
                                                            this service, for musician launched … wish me luck guys</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 text-e">
                                                <p class="para">hours ago 22</p>
                                            </div>
                                        </div>
                                    </div>
                                  
                                </div> --}}
                                <div class="box-22 showfirst following">
                                    <ul>
                                        @foreach ($following_list as $following_lists)
                                            <li>
                                                <div class="boxed">
                                                    <img src="assets/images/card48.png" alt="">
                                                    <span>{{ $following_lists->followByUserInfo->name }}</span>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="box-23 following">
                                    <ul>
                                        @foreach ($followers as $follower)
                                            <li>
                                                <div class="boxed">
                                                    <img src="assets/images/card48.png" alt="">
                                                    <span>{{ $follower->followeUserInfo->name }}</span>
                                                </div>
                                            </li>
                                        @endforeach
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
                                    <li><img src="assets/images/card65.png" alt=""> Inbox <i
                                            class="far fa-chevron-down"></i></li>
                                    <li data-targetit="box-24" class="active"><i class="fas fa-shopping-cart"></i>
                                        Tickets</li>
                                    <li class="end-co">New Message <img src="assets/images/card67.png" alt="">
                                    </li>
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
                                                            <h4><a href="#">[Ticket# 3672451]
                                                                    https://wasetak.net/t/tiktok-account-verified-with-the-name-you-need/886488</a>
                                                            </h4>
                                                            <img src="assets/images/card68.png" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 pe-0">
                                                        <div class="row align-items-center">
                                                            <div class="col-md-3 p-md-0">
                                                                <img src="assets/images/card13.png" class="img1"
                                                                    alt="">
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
                                                            <h4><a href="#">[Ticket# 3672451]
                                                                    https://wasetak.net/t/tiktok-account-verified-with-the-name-you-need/886488</a>
                                                            </h4>
                                                            <img src="assets/images/card69.png" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 pe-0">
                                                        <div class="row align-items-center">
                                                            <div class="col-md-3 p-md-0">
                                                                <img src="assets/images/card13.png" class="img1"
                                                                    alt="">
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
                                                            <h4><a href="#">[Ticket# 3672451]
                                                                    https://wasetak.net/t/tiktok-account-verified-with-the-name-you-need/886488</a>
                                                            </h4>
                                                            <img src="assets/images/card69.png" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 pe-0">
                                                        <div class="row align-items-center">
                                                            <div class="col-md-3 p-md-0">
                                                                <img src="assets/images/card13.png" class="img1"
                                                                    alt="">
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
                                                            <h4><a href="#">[Ticket# 3672451]
                                                                    https://wasetak.net/t/tiktok-account-verified-with-the-name-you-need/886488</a>
                                                            </h4>
                                                            <img src="assets/images/card69.png" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 pe-0">
                                                        <div class="row align-items-center">
                                                            <div class="col-md-3 p-md-0">
                                                                <img src="assets/images/card13.png" class="img1"
                                                                    alt="">
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
                                                            <h4><a href="#">[Ticket# 3672451]
                                                                    https://wasetak.net/t/tiktok-account-verified-with-the-name-you-need/886488</a>
                                                            </h4>
                                                            <img src="assets/images/card68.png" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 pe-0">
                                                        <div class="row align-items-center">
                                                            <div class="col-md-3 p-md-0">
                                                                <img src="assets/images/card13.png" class="img1"
                                                                    alt="">
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
                    <div class="box-9 activity ticket feedback" @if($request->value == "my_tickets") style="display:block;" @endif>
                        <div class="col-md-12">
                            {{-- <div class="rating">
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
                            </div> --}}
                            {{-- <div class="row">
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
                            </div> --}}
                            <div class="box-31 showfirst">
                                <div class="row mar-t">
                                    @if ($feedbacks != null)
                                        @foreach ($feedbacks as $feedback)
                                            <div class="col-md-12">
                                                <div class="boxed">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="boxed-ver">
                                                                <div class="boxed-img">
                                                                    <img src="assets/images/card48.png" class="img1"
                                                                        alt="">
                                                                    <img src="assets/images/card74.png" class="img2"
                                                                        alt="">
                                                                </div>
                                                                <div>
                                                                    <h6>{{ $feedback->givenFeedBackUserInfo->name }}</span>
                                                                    </h6>
                                                                    <h5> <img src="assets/images/card34.png"
                                                                            class="img2" alt=""> Verified user
                                                                    </h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 text-e">
                                                            <span class="ago"
                                                                dir="ltr">{{ $feedback->created_at->diffForHumans() }}</span>
                                                        </div>
                                                    </div>
                                                    <p class="para">{{ $feedback->feedback }}</p>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
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
                                    {{-- <li data-targetit="box-36">Inter Face</li> --}}
                                </ul>
                            </div>
                            <div class="col-md-10">
                                <div class="box-32 showfirst prefer">
                                    <div class="row">
                                        <form method="post" action="{{ route('user.profile_update') }}"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="col-md-5">
                                                <h5>Upload a copy of your ID or Passport or Driving License</h5>
                                                <div class="file">
                                                    <!-- <input type="file"> -->
                                                    <label>
                                                        <input type="file" name="id_card_photo" hidden
                                                            class="custom-file-input" />
                                                        <i class="fas fa-file-plus"></i>
                                                        <div class="btn-up">Upload File</div>
                                                    </label>
                                                </div>
                                                <div class="usern">
                                                    <label>Username</label>
                                                    <input type="text" readonly value="{{ Auth::user()->username }}"
                                                        placeholder="mohd5">
                                                    <small>People can mention you as @mohd5</small>
                                                </div>
                                                <div class="profiled">
                                                    <label>Profile Picture</label>
                                                    <div class="profile-upload">
                                                        <label>
                                                            <input type="file" name="d_picture" accept='image/*'
                                                                onchange='openFile(event)' hidden
                                                                class="custom-file-input" />
                                                            <i class="fas fa-pencil"></i>
                                                            <div class="btn-up">
                                                                @if ($user_details != null)
                                                                    @if (Auth::user()->d_picture == '')
                                                                        <img id="cover_output"
                                                                            src="assets/images/card75.png" alt="">
                                                                    @else
                                                                        <img id="cover_output"
                                                                            src="{{ Auth::user()->d_picture }}"
                                                                            alt="">
                                                                    @endif
                                                                @else
                                                                    <img id="cover_output" src="assets/images/card75.png"
                                                                        alt="">
                                                                @endif
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="profiled">
                                                    <label>Add Cover photo</label>
                                                    <div class="profile-upload cover-pro">
                                                        <label>
                                                            <input type="file" name="cover_photo" accept='image/*'
                                                                onchange='openCoverFile(event)' hidden
                                                                class="custom-file-input" />
                                                            <i class="fas fa-pencil"></i>
                                                            <div class="btn-up">
                                                                @if ($user_details != null)
                                                                    @if ($user_details->cover_photo == '')
                                                                        <img id="cover_output"
                                                                            src="assets/images/card75.png" alt="">
                                                                    @else
                                                                        <img id="cover_output"
                                                                            src="{{ $user_details->cover_photo }}"
                                                                            alt="">
                                                                    @endif
                                                                @else
                                                                    <img id="cover_output" src="assets/images/card75.png"
                                                                        alt="">
                                                                @endif
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="emailed">
                                                    <label>Email</label>
                                                    <input type="text" readonly value="{{ Auth::user()->email }}"
                                                        readonly name="email" placeholder="mohd125@gmail.com">
                                                    <small>Never shown to the public</small>
                                                </div>
                                                <div class="usern">
                                                    <label>Name</label>
                                                    <input type="text" value="{{ Auth::user()->name }}"
                                                        name="name" placeholder="Mohammad ahsan">
                                                    <small>Your full name</small>
                                                </div>
                                                <div class="status">
                                                    <label>Custom Status</label>
                                                    <span><i class="fas fa-pencil"></i> Not Set</span>
                                                </div>
                                                <button type="submit" class="theme-save">Save Changes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="box-33 inter-face security">
                                    <div class="row">
                                        <div class="col-md-4">

                                            <a href="#" class="theme-save" data-toggle="modal"
                                                data-target="#exampleModal">Turn On
                                                2FA </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Turn on 2FA</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form method="post" id="twofa">
                                                <input type="hidden" id="token" value="{{ csrf_token() }}">
                                                <div class="modal-body">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="row align-items-center">
                                                                <div class="password">
                                                                    <div class="inter-face-w">
                                                                        {{-- <label>Password</label> --}}
                                                                        <input type="password" autocomplete="off"
                                                                            name="password"
                                                                            placeholder="Please enter your current password"
                                                                            id="password" class="form-control">

                                                                        <div class="alert alert-danger hide py-4"
                                                                            id="error-msg"></div>
                                                                    </div>
                                                                </div>

                                                                <div class="secondary_email py-4">
                                                                    <div class="inter-face-w hide">
                                                                        {{-- <label>Password</label> --}}
                                                                        <input type="email" autocomplete="off"
                                                                            name="secondary_email"
                                                                            placeholder="Please enter your Secondary email address"
                                                                            id="secondary_email" class="form-control">

                                                                    </div>
                                                                </div>
                                                                <div class="alert alert-success hide py-4"
                                                                    id="success-msg"></div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Next</button>
                                                </div>
                                            </form>
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
                                                        <img src="assets/images/card78.png" alt="">
                                                    </div>
                                                    <textarea cols="30" rows="8">{{ $user_details->about_me ?? '' }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="inter-face-w">
                                                <label>Timezone</label>
                                                <select>
                                                    <option value="America/Kentucky/Louisville">
                                                        America/Kentucky/Louisville</option>
                                                    <option value="America/Kentucky/Monticello">
                                                        America/Kentucky/Monticello</option>
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
                                                <input type="text" value="{{ $user_details->location ?? '' }}">
                                            </div>
                                            <div class="inter-face-w">
                                                <label>Web Site</label>
                                                <input type="text" value="{{ $user_details->website ?? '' }}">
                                            </div>
                                            <div class="inter-face-w">
                                                <label>Profile Header</label>
                                                <textarea cols="30" rows="8">{{ $user_details->profile_header ?? '' }}</textarea>
                                            </div>
                                            <div class="inter-face-w">
                                                <label>User Card Background</label>
                                                <textarea cols="30" rows="8">{{ $user_details->user_card_background ?? '' }}</textarea>
                                            </div>
                                            <div class="inter-face-w">
                                                <label>Featured Topic</label> 
                                                <select name="featured_topic" id="">
                                                    @foreach ($my_posts as $my_post)
                                                        <option value="{{ $my_post->id }}">{{ $my_post->title }}
                                                        </option>
                                                    @endforeach
                                                </select>
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
                                                <label class="dark"> <input type="checkbox"> Only allow specific users
                                                    to send me personal messages or chat direct messages</label>
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
                                                <label class="dark"><input type="checkbox"> Enable automatic dark mode
                                                    color scheme</label>
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
                                                <label class="small-ti">:After a bookmark reminder notification is
                                                    sent</label>
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

@push('js')
<script src="https://www.gstatic.com/firebasejs/7.23.0/firebase.js"></script>
<script>

    var firebaseConfig = {
        apiKey: "AIzaSyCCOF82t3Jbmr9ZzYQJ0JzkhjSJRa8LGoM",
        authDomain: "wasetak-104d1.firebaseapp.com",
        projectId: "wasetak-104d1",
        storageBucket: "wasetak-104d1.appspot.com",
        messagingSenderId: "730519712816",
        appId: "1:730519712816:web:025a8227863fdfe8de29f5",
        measurementId: "G-LX1EV3969R"
    };
    
    firebase.initializeApp(firebaseConfig);
    const messaging = firebase.messaging();

    initFirebaseMessagingRegistration();

    function initFirebaseMessagingRegistration() {

            messaging
            .requestPermission()
            .then(function () {
                return messaging.getToken()
            })
            .then(function(token) {
           
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    url: '{{ route("save-token") }}',
                    type: 'POST',
                    data: {
                        token: token
                    },
                    dataType: 'JSON',
                    success: function (response) {
                        console.warn('Token saved successfully.');
                    },
                    error: function (err) {
                        console.log('User Chat Token Error'+ err);
                    },
                });

            }).catch(function (err) {
                console.log('User Chat Token Error'+ err);
            });
    }  
    
    messaging.onMessage(function(payload) {
        const noteTitle = payload.notification.title;
        const noteOptions = {
            body: payload.notification.body,
            icon: payload.notification.icon,
        };
        new Notification(noteTitle, noteOptions);
    });

</script>
    <script>
        var openFile = function(file) {
            var input = file.target;
            var reader = new FileReader();
            reader.onload = function() {
                var dataURL = reader.result;
                var output = document.getElementById('output');
                output.src = dataURL;
            };
            reader.readAsDataURL(input.files[0]);
        };


        var openCoverFile = function(file) {
            var input = file.target;
            var reader = new FileReader();
            reader.onload = function() {
                var dataURL = reader.result;
                var output = document.getElementById('cover_output');
                output.src = dataURL;
            };
            reader.readAsDataURL(input.files[0]);
        };
    </script>
    <script>
        // Add record
        $('#twofa').submit(function(e) {
            e.preventDefault();
            var form = new FormData(document.getElementById('twofa'));
            var token = $('#token').val();
            form.append('_token', token);
            $.ajax({
                url: '{{ route('user.turnon2fa') }}',
                type: 'post',
                data: form,
                cache: false,
                contentType: false, //must, tell jQuery not to process the data
                processData: false,
                success: function(response) {
                    if (response.error_code == 403) {
                        $('#error-msg').html(response.message);
                        $('.alert-danger').removeClass('hide');
                        $('.alert-success').addClass('hide');
                    } else {
                        $('#success-msg').html(response.message);
                        $('.alert-danger').addClass('hide')
                        $('.secondary_email .inter-face-w').removeClass('hide');
                        $('.alert-success').removeClass('hide');
                        $('#password').val('');

                        if (response.is_email_sent == 1) {
                            $('.modal-footer').addClass('hide')
                        }
                    }
                }
            });
        });
    </script>

    

@endpush
