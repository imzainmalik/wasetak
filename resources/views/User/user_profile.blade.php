@extends('User.layouts.master')
@section('content')
    <style>
        .hide {
            display: none;
        }
        *{
    margin: 0;
    padding: 0;
}
.rate {
    float: left;
    height: 46px;
    padding: 0 10px;
}
.rate:not(:checked) > input {
    position:absolute;
    top:-9999px;
}
.rate:not(:checked) > label {
    float:right;
    width:1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:30px;
    color:#ccc;
}
.rate:not(:checked) > label:before {
    content: '★ ';
}
.rate > input:checked ~ label {
    color: #ffc700;    
}
.rate:not(:checked) > label:hover,
.rate:not(:checked) > label:hover ~ label {
    color: #deb217;  
}
.rate > input:checked + label:hover,
.rate > input:checked + label:hover ~ label,
.rate > input:checked ~ label:hover,
.rate > input:checked ~ label:hover ~ label,
.rate > label:hover ~ input:checked ~ label {
    color: #c59b08;
}

/* Modified from: https://github.com/mukulkant/Star-rating-using-pure-css */
    </style>
     
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
                                    <i class="fal fa-star"></i>
                                    <i class="fal fa-star"></i>
                                    <i class="fal fa-star"></i>
                                    <i class="fal fa-star"></i>
                                    <i class="fal fa-star"></i>
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
                        <img src="/{{ $user->d_picture }}" class="img1" alt="">
                        {{-- <img src="{{ asset('assets/images/card47.png')}}" class="img2" alt=""> --}}
                    </div>
                </div>
                @if($feedbacks->count() > 0)
                @php
                    $rating_avg = $feedbacks->avg('stars');
                    // dd($rating_avg);
                @endphp
                @endif
                <div class="col-md-10">
                    <div class="padd-r">
                        <h2 class="mt-4">{{ $user->username }}</h2>
                        <span class="vi">Basic User</span> | <span class="sm">{{ $user->name }}</span>
                        <div class="star">
                         @if($feedbacks->count() >0)
                        @foreach(range(1,5) as $i)
                           @if($rating_avg >0)
                             @if($rating_avg > 0)
                                <i class="fal fa-star"></i>
                              @else
                                <i class="fal fa-star"></i>
                              @endif 
                            @endif
                        @endforeach
                        @else
                        <i class="fal fa-star"></i>
                        <i class="fal fa-star"></i>
                        <i class="fal fa-star"></i>
                        <i class="fal fa-star"></i>
                        <i class="fal fa-star"></i>
                        @endif
                        </div>
                        <div class="row py-4">
                            <div class="col-2">
                                <div id="append_btn">
                                    @if($check_if_already_follow > 0)
                                        <button type="button"onclick="do_unfollow({{ $user->id }})" class="theme-btn1">UnFollow</button>
                                    @else
                                        <button type="button" onclick="do_follow('{{ $user->id }}')" class="theme-btn1">Follow</button>
                                    @endif
                                </div>
                            </div>
                            <div class="col-6">
                                <button type="button" class="theme-btn2">Message</button>
                            </div>
                        </div>
                        <div class="boxe-lined"></div>
                        <ul class="prof">
                            <li><a href="mailto:{{ $user->email }}">{{ $user->email }} : <span>Email
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
                                <p>{{ $user->created_at->diffForHumans() ?? 'Not created yet' }} : <span>Joined
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
                      
                        <li data-targetit="box-2" class="active first">
                            <span>Activity</span>
                            <img src="assets/images/card50.png" alt="">
                        </li>
                          
                        <li data-targetit="box-5">
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
                        <li data-targetit="box-8">
                            <span>Ticket</span>
                            <img src="assets/images/card56.png" alt="">
                        </li>
                        <li data-targetit="box-9">
                            <span>Feedback</span>
                            <img src="assets/images/card53.png" alt="">
                        </li>
                       
                    </ul>
                  
                    <div class="box-2 activity showfirst">
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
                                     <li data-targetit="box-16">Likes</li>
                                    <li data-targetit="box-17">Bookmarks</li>
                                    <li data-targetit="box-18">Solve</li>
                                      
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
                                                            <img src="/{{ $user->d_picture }}" alt="">
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
                                        @if($my_posts != NULL)
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
                                                                    <img src="/{{ $user->d_picture }}"
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
                                        @else
                                        <div class="boxed">
                                            <div class="row align-items-center">
                                                No data found.
                                            </div>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="box-13 replies">
                                    @if($get_all_where_i_replied != NULL)
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
                                                        <img src="/{{ $pick_last_interaction->getPostedUserInfo->d_picture }}"
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
                                    @else
                                        <div class="boxed">
                                            <div class="row align-items-center">
                                                No data found.
                                            </div>
                                        </div>
                                    @endif
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
                                        @if($get_all_my_viewed_posts != null)
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
                                        @else
                                        <div class="boxed">
                                            <div class="row align-items-center">
                                                No data found.
                                            </div>
                                        </div>
                                        @endif
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
                                                                        <img src="/{{ $get_all_my_liked_post->getUserInfo->d_picture }}"
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
                                                                <img src="/assets/images/card23.png" alt="">
                                                            </a>
                                                            <img src="/assets/images/card48.png" alt="">
                                                        </div>
                                                    </li>
                                                </ul>
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
                                    @if($my_bookmark_posts != null)
                                    @foreach ($my_bookmark_posts as $my_bookmark_post)
                                        <div class="boxed">
                                            <div class="row align-items-center">
                                                <div class="col-md-8">
                                                    <div class="time"><span> 
                                                        <img src="/assets/images/card64.png"
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
                                                                        src="/assets/images/card62.png" alt=""></a>
                                                                <span>{{ $my_bookmark_post->bookmarksPostDetails->created_at->diffForHumans() }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="doted">
                                                                <span>{{ $my_bookmark_post->created_at->diffForHumans() }}</span>
                                                                <div class="dropdown2">
                                                                    <a href="#" class="dropbtn">
                                                                        <img src="/assets/images/card63.png"
                                                                            alt="">
                                                                    </a>
                                                                    <div class="dropdown-content">
                                                                        <a href="#">
                                                                            <div class="list">
                                                                                <img src="/assets/images/card87.png"
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
                                                                                <img src="/assets/images/card88.png"
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
                                                                                <img src="/assets/images/card89.png"
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
                                                                                <img src="/assets/images/card90.png"
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
                                    @else
                                        <div class="boxed">
                                            <div class="row align-items-center">
                                                No data found.
                                            </div>
                                        </div>
                                    @endif
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
                                            @else
                                            <div class="boxed">
                                                <div class="row align-items-center">
                                                    No data found.
                                                </div>
                                            </div>
                                        @endif
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
                                        @if($followers != null)
                                        @foreach ($followers as $follower)
                                            <li>
                                                <div class="boxed">
                                                    <img src="assets/images/card48.png" alt="">
                                                    <span>{{ $follower->followeUserInfo->name }}</span>
                                                </div>
                                            </li>
                                        @endforeach
                                        @else
                                        <div class="boxed">
                                            <div class="row align-items-center">
                                                No data found.
                                            </div>
                                        </div>
                                    @endif
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
                                        @else
                                            <div class="boxed">
                                                <div class="row align-items-center">
                                                    No data found.
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-9 activity ticket feedback">
                        <div class="col-md-12">
                            <form method="post" action="{{route('user.create_feedback',$user->id)}}" id="feedback_form">
                                 @csrf
                                <div class="rating">
                                    <span>Add your ratings</span>
                                    <div class="rate">
                                        <input type="radio" required id="star5" name="rate" value="5" />
                                        <label for="star5" title="5">5 stars</label>
                                        <input type="radio" required id="star4" name="rate" value="4" />
                                        <label for="star4" title="4">4 stars</label>
                                        <input type="radio" required id="star3" name="rate" value="3" />
                                        <label for="star3" title="3">3 stars</label>
                                        <input type="radio" required id="star2" name="rate" value="2" />
                                        <label for="star2" title="2">2 stars</label>
                                        <input type="radio" required id="star1" name="rate" value="1" />
                                        <label for="star1" title="1">1 star</label>
                                    </div>
                                </div>
                                <textarea cols="30" rows="7" required name="feedback" class="text-feed"></textarea>
                                <div class="tick-num">
                                    <h5>! Were you the buyer or seller? Don't forget the ticket number</h5>
                                    <div class="che">
                                        <div class="sel">
                                            <input type="checkbox" id="seller_checkbox" value="on" name="seller">
                                            <label>Seller</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="buyer_checkbox" value="on" name="buyer">
                                            <label>Buyer</label>
                                        </div>
                                    </div>
                                </div> 
                            
                                <div class="row">
                                    <div class="col-md-6">
                                        <button type="submit" class="submit">Submit</button>
                                    </div>
                                    <div class="col-md-6 text-e">
                                        <ul class="filter">
                                            <li data-targetit="box-30">Seller</li>
                                            <li data-targetit="box-31" class="active">Buyer</li>
                                        </ul>
                                        <span class="post">Filter feedback posted by</span>
                                    </div>
                                </div>
                            </form>
                             
                            <div class="box-31 showfirst">
                                <div class="row mar-t">
                                    @if ($feedbacks->get() != null)
                                        @foreach ($feedbacks->get() as $feedback)
                                            <div class="col-md-12">
                                                <div class="boxed">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="boxed-ver">
                                                                <div class="boxed-img">
                                                                    <img src="{{$feedback->givenFeedBackUserInfo->d_picture}}" class="img1"
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
                                                        <div class="col-md-2 text-e">
                                                            <span class="ago"
                                                                dir="ltr">{{ $feedback->created_at->diffForHumans() }}</span>
                                                        </div>
                                                        <div class="col-md-2 text-e">
                                                            <span class="ago" dir="ltr">
                                                                @if($feedback->feedback_as == 0)
                                                                    <div class="alert alert-primary">Buyer</div>
                                                                @else
                                                                    <div class="alert alert-primary">Seller</div>
                                                                @endif
                                                            </span>
                                                        </div>
                                                        <div class="col-md-2 text-e">
                                                            <span class="ago" dir="ltr">
                                                                @if($feedback->stars == 1)
                                                                    <i class="fas fa-star" style="color:yellow;">
                                                                    <i class="fal fa-star" style="color:yellow;"></i>
                                                                @endif
                                                                @if($feedback->stars == 2)
                                                                    <i class="fas fa-star" style="color:yellow;"></i>
                                                                    <i class="fas fa-star" style="color:yellow;"></i>
                                                                    <i class="fal fa-star" style="color:yellow;"></i>
                                                                    <i class="fal fa-star" style="color:yellow;"></i>
                                                                    <i class="fal fa-star" style="color:yellow;"></i>
                                                                @endif
                                                                @if($feedback->stars == 3)
                                                                    <i class="fas fa-star" style="color:yellow;"></i>
                                                                    <i class="fas fa-star" style="color:yellow;"></i>
                                                                    <i class="fas fa-star" style="color:yellow;"></i>
                                                                    <i class="fal fa-star" style="color:yellow;"></i>
                                                                    <i class="fal fa-star" style="color:yellow;"></i>
                                                                @endif
                                                                @if($feedback->stars == 4)
                                                                    <i class="fas fa-star" style="color:yellow;"></i>
                                                                    <i class="fas fa-star" style="color:yellow;"></i>
                                                                    <i class="fas fa-star" style="color:yellow;"></i>
                                                                    <i class="fas fa-star" style="color:yellow;"></i>
                                                                    <<i class="fal fa-star" style="color:yellow;"></i>
                                                                @endif
                                                                @if($feedback->stars == 5)
                                                                    <i class="fas fa-star" style="color:yellow;"></i>
                                                                    <i class="fas fa-star" style="color:yellow;"></i>
                                                                    <i class="fas fa-star" style="color:yellow;"></i>
                                                                    <i class="fas fa-star" style="color:yellow;"></i>
                                                                    <i class="fas fa-star" style="color:yellow;"></i>
                                                                @endif
                                                                
                                                            </span> 
                                                        </div>
                                                    </div>
                                                    <p class="para">{{ $feedback->feedback }}</p>
                                                </div>
                                            </div>
                                        @endforeach
                                        @else
                                        <div class="col-md-12">
                                            <div class="boxed">
                                                <div class="row align-items-center">
                                                    No data found.
                                                </div>
                                            </div>
                                        </div>
                                    @endif
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
{{-- <script>
                                function submit_feedback(){
                                    
                                     var seller = $('#seller_checkbox').val();
                                     var buyer = $('#buyer_checkbox').val();
                                      console.log(seller,buyer);

                                     if(seller == null && buyer == null){
                                        $("#feedback_form").submit(function(e){
                                            console.log('both fail');
                                            e.preventDefault();
                                        });
                                     }

                                     if(buyer == 'on' && seller == null){
                                        console.log('buyer on');
                                         $("#feedback_form").submit();
                                     }

                                     if(seller == 'on' && buyer == null){
                                        console.log('seller_on');
                                         $("#feedback_form").submit();
                                     }
                                }

                            </script> --}}
    <script>
        function do_follow(user_id){
            $.ajax({
                'type' : 'get',
                'url' : '{{ route('user.follow',$user->id) }}',

               success :function(response){
                    if(response.code == 200){
                        $('#append_btn').empty();
                        $('#append_btn').append('<button type="button" onclick="do_unfollow({{ $user->id }})" class="theme-btn1">UnFollow</button>')
                    }
               }
            })
        }

        function do_unfollow(user_id){
            $.ajax({
                'type' : 'get',
                'url' : '{{ route('user.unfollow',$user->id) }}',

               success :function(response){
                    if(response.code == 200){
                        $('#append_btn').empty();
                        $('#append_btn').append('<button type="button" onclick="do_follow({{ $user->id }})" class="theme-btn1">Follow</button>')
                    }
               }
            })
        }
    </script>
@endpush
 
