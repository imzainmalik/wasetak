@extends('User.layouts.master')
@section('content')

    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <style>
        #slider-vertical {
            height: 200px;
            width: 20px;
            /* Set a width for the vertical slider */
            margin: 0 auto;
        }

        .date-slider .ui-slider-vertical .ui-slider-range-min {
            bottom: 0;
            border: 0;
            background: #d9d9d9;
            width: 4px;
        }

        .date-slider #slider-vertical {
            height: 400px;
            width: 4px;
        }

        .date-slider span.ui-slider-handle.ui-corner-all.ui-state-default {
            width: 12px;
            height: 50px;
            background: #f26d85;
            border-radius: 10px;
            cursor: pointer;
        }

        .date-slider input#amount {
            position: absolute;
            top: 50px;
            left: -130px;
            font-size: 16px;
            font-weight: 400 !important;
            color: #000 !important;
        }

        .date-slider {
            width: 50px;
            margin-top: 50px;
        }
    </style>
    @if ($post->post_type != 2)
        <section class="sec4">
            <div class="container">
                <div class="row">
                    <div class="col-md-11">
                        <div class="boxed1">
                            <img src="{{ $post->getUserInfo ? ($post->getUserInfo->d_picture ? asset($post->getUserInfo->d_picture) : asset('user_asset/img/avatar.png')) : asset('user_asset/img/avatar.png') }}"
                                alt="">
                            <div>
                                <a href="{{ route('user.user_profile', $post->getUserInfo->username) }}">
                                    <h4>{{ $post->getUserInfo->name }}</h4>
                                </a><br>
                                <span><i class="fas fa-badge-check"></i> Verified Identity</span>
                            </div>
                        </div>
                        <h1>{{ $post->title }}</h1>
                        <div class="boxed2">
                            @if ($post->getCatInfo)
                                <div class="box1"><span
                                        style="background-color: {{ $post->getCatInfo->color }} !important"></span>{{ $post->getCatInfo->name }}
                                </div>
                            @endif

                            @if ($post->getSubCatInfo)
                                <div class="box2">
                                    <span
                                        style="background-color: {{ $post->getSubCatInfo->color }} !important"></span>{{ $post->getSubCatInfo->name }}
                                </div>
                            @endif

                            <div class="box2">
                                <span style="background-color: {{ $post->getCatInfo->color }} !important"></span>
                                @if ($post->post_type == 0)
                                    Discussion
                                @elseif ($post->post_type == 1)
                                    Trading
                                @else
                                    Auction
                                @endif
                            </div>
                            {{-- <div class="box1"><span></span>Unique services </div>
                            <div class="box2"><span></span>FB and IG Service</div>
                            <div class="box3">Featured</div> --}}

                            {{-- <div class="box4">Spotlight</div>
                            <div class="box5">Premium</div> --}}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-11">
                        <div class="boxed3">
                            <p class="para"> {!! $post->description !!}</p>
                            <div class="row mar-t align-items-center">
                                <div class="col-md-6">
                                    <div class="com">
                                        <a href="#"><img src="{{ asset('user_asset/img/card14.png') }}"
                                                alt=""><span>Reply</span> </a>
                                        <a href="#"><img src="{{ asset('user_asset/img/card18.png') }}"
                                                alt=""><span>PM User</span></a>

                                        @if (auth()->check())
                                            <a href="#" id="bookmark"><i
                                                    class="{{ $bookmark ? 'fa-solid' : 'fa-regular' }} fa-bookmark"
                                                    style="color: #7a7a7a;"></i></a>
                                            <a href="#" id="flag" data-toggle="modal"
                                                data-target="#exampleModal"><i class="fa-solid fa-flag"
                                                    style="color: #7a7a7a;"></i></a>
                                        @endif

                                        <a href="#" data-toggle="modal" data-target="#addtoany"><img
                                                src="{{ asset('user_asset/img/card21.png') }}" alt=""></a>

                                    </div>
                                </div>
                                <div class="col-md-6 text-e">

                                    @if ($post->getPostReplies->where('is_active', 1)->first())
                                        <span><span
                                                class="com2">{{ $post->getPostReplies->where('is_active', 1)->first()->created_at->diffForHumans() }}</span>
                                            Last Reply 1 </span>
                                    @endif
                                    <span><span
                                            class="com2">{{ Carbon\Carbon::create($post->created_at)->format('M j') }}</span>
                                        Created </span>
                                </div>
                            </div>
                        </div>
                        @if ($post->post_type == 2)
                            @if ($post->bid_end_date < \Carbon\Carbon::now()->format('Y-m-d'))
                                <div class="boxed5">
                                    <div class="container">
                                        @if (App\Models\Bid::where('post_id', $post->id)->count() > 0)
                                            <h2 class="text-center">Current bid: {{ $post->price }} USD</h2> <br>
                                        @else
                                            <h2 class="text-center">Bid starting at Price: {{ $post->price }} USD</h2>
                                            <br>
                                        @endif
                                        <form action="{{ route('user.place_bid', $post->id) }}" method="post">
                                            @csrf
                                            <div class="row d-flex justify-content-center">
                                                <div class="col-6">
                                                    <input type="number" name="bid_price" placeholder="Bid amount in USD"
                                                        class="form-control" style="background: white;">
                                                </div>
                                                <div class="col-2">
                                                    @if (auth()->check())
                                                        <button class="btn btn-primary">Place Bid</button>
                                                    @else
                                                        <button type="button" class="btn btn-primary login">Place
                                                            Bid</button>
                                                    @endif
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            @endif
                        @endif
                        @if ($post->post_type == 2)
                            <div class="row justify-content-center">
                                <div class="col-md-5">
                                    <div class="auction">
                                        <h6>Auction ends in</h6>
                                        <ul id="clock">
                                            <li class="first">
                                                <div>
                                                    <h5 id="sec_int">00</h5>
                                                    <span id="sec_str">Seconds</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <h5 id="min_int">00</h5>
                                                    <span id="min_str">Minutes</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <h5 id="hour_int">00</h5>
                                                    <span id="hour_str">Hours</span>
                                                </div>
                                            </li>
                                            <li class="last">
                                                <div>
                                                    <h5 id="days_int">00</h5>
                                                    <span id="days_str">Day</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class="boxed4">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <span dir="ltr"> {{ $post->getPostViews->count() }} Views <img
                                            src="{{ asset('user_asset/img/card12.png') }}" alt=""></span>
                                    {{-- <span dir="ltr"> 78 users <img src="{{asset('user_asset/img/card22.png')}}" alt=""></span> --}}
                                    @if (auth()->check())
                                        <span id="like" class="notranslate" dir="ltr">
                                            {{ $post->getPostlikes->count() }} Likes <i
                                                class="{{ $like_check ? 'fa-solid' : 'fa-regular' }} fa-thumbs-up fa-lg"
                                                style="color: #7a7a7a;"></i>
                                        @else
                                            <span class="notranslate" dir="ltr"> {{ $post->getPostlikes->count() }}
                                                Likes <i class="fa-regular fa-thumbs-up fa-lg login"
                                                    style="color: #7a7a7a;"></i>
                                    @endif
                                    {{-- <img src="{{asset('user_asset/img/card23.png')}}" alt=""> --}}
                                    </span>
                                    <span dir="ltr"> {{ $post->getPostReplies->where('is_active', 1)->count() }}
                                        replies
                                        <img src="{{ asset('user_asset/img/card14.png') }}" alt=""></span>
                                    {{-- <h4>Frequent Posters</h4>
                                    <div class="img-num">
                                        <div><img src="{{asset('user_asset/img/card24.png')}}" alt=""> <span>10</span></div>
                                        <div><img src="{{asset('user_asset/img/card25.png')}}" alt=""> <span>5</span></div>
                                        <div><img src="{{asset('user_asset/img/card26.png')}}" alt=""> <span>112</span></div>
                                        <div><img src="{{asset('user_asset/img/card27.png')}}" alt=""> <span>25</span></div>
                                        <div><img src="{{asset('user_asset/img/card28.png')}}" alt=""> <span>112</span></div>
                                        <div><img src="{{asset('user_asset/img/card24.png')}}" alt=""> <span>10</span></div>
                                        <div><img src="{{asset('user_asset/img/card25.png')}}" alt=""> <span>5</span></div>
                                        <div><img src="{{asset('user_asset/img/card26.png')}}" alt=""> <span>112</span></div>
                                        <div><img src="{{asset('user_asset/img/card27.png')}}" alt=""> <span>25</span></div>
                                        <div><img src="{{asset('user_asset/img/card28.png')}}" alt=""> <span>112</span></div>
                                    </div> --}}
                                    {{-- <p class="para">.There are 259 replies with an estimated read time of 18 minutes</p> --}}
                                </div>
                                {{-- <div class="col-md-4 text-e">
                                    <a href="#" class="theme-btn">Summarize This Topic</a>
                                </div> --}}
                            </div>
                        </div>
                        @if (auth()->check())
                            <div class="boxed4" id="fad">
                                <div class="row align-items-center">
                                    <div class="col-md-12">
                                        <div class="textarea">
                                            {{-- <form action="{{ route('user.create_comment', $post->id) }}" method="post"
                                        id="comment-form"> --}}
                                            @csrf
                                            <textarea class="form-control" placeholder="Message" name="comment" id="comment-text-area" cols="30"
                                                rows="10" required></textarea>
                                            <br>
                                            <button class="btn btn-primary theme-btn1" type="button"
                                                id="comment-btn">Create
                                                Comment
                                            </button>
                                            {{-- </form> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                        <div id="comment_append"></div>
                        @if ($post->getPostReplies)
                            @foreach ($post->getPostReplies as $post_comm)
                                <div class="boxed5">
                                    <div class="boxerd-img">
                                        <img src="{{ $post_comm->getPostedUserInfo->d_picture ? asset($post_comm->getPostedUserInfo->d_picture) : asset('user_asset/img/avatar.png') }}"
                                            alt="">
                                        <a
                                            href="{{ route('user.user_profile', $post_comm->getPostedUserInfo->username) }}">
                                            <h5>{{ $post_comm->getPostedUserInfo->name }}</h5>
                                        </a>
                                    </div>
                                    <p class="para">{{ $post_comm->reply }}</p>
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            <div class="com">
                                                {{-- <a href="#"><img src="{{asset('user_asset/img/card14.png')}}" alt=""><span>Reply</span> </a> --}}
                                                <a href="#"><img src="{{ asset('user_asset/img/card18.png') }}"
                                                        alt=""><span>PM User</span></a>

                                                @if (auth()->check())
                                                    @php
                                                        $comment_like_check = App\Models\LikedReply::where('user_id', auth()->user()->id)
                                                            ->where('reply_id', $post_comm->id)
                                                            ->first();
                                                    @endphp
                                                    <a href="#" class="comment_like notranslate"
                                                        data-replyId="{{ $post_comm->id }}">
                                                        {{-- <img src="{{asset('user_asset/img/card23.png')}}" alt=""> --}}
                                                        <i class="{{ $comment_like_check ? 'fa-solid' : 'fa-regular' }} fa-thumbs-up fa-lg"
                                                            style="color: #7a7a7a;"></i>
                                                        <span>{{ $post_comm->commentLikes->count() }}</span></a>
                                                @else
                                                    <a href="#" data-replyId="{{ $post_comm->id }}"
                                                        class="notranslate">
                                                        {{-- <img src="{{asset('user_asset/img/card23.png')}}" alt=""> --}}
                                                        <i class="fa-regular fa-thumbs-up fa-lg login"
                                                            style="color: #7a7a7a;"></i>
                                                        <span>{{ $post_comm->commentLikes->count() }}</span></a>
                                                @endif

                                                {{-- <a href="#"><img src="{{asset('user_asset/img/card19.png')}}" alt=""></a>
                                            <a href="#"><img src="{{asset('user_asset/img/card20.png')}}" alt=""></a>
                                            <a href="javascript:void(0);"  data-toggle="modal" data-target="#addtoany"><img src="{{asset('user_asset/img/card21.png')}}" alt=""></a> --}}
                                            </div>
                                        </div>
                                        <div class="col-md-6 text-e">
                                            <div class="com2">
                                                <span>{{ \Carbon\Carbon::parse($post_comm->created_at)->diffForHumans() }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                        {{-- <div class="boxed5">
                    <div class="boxerd-img">
                        <img src="{{asset('user_asset/img/card29.png')}}" alt="">
                        <h5>ii2Ahmed</h5>
                    </div>
                    <p class="para">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="com">
                                <a href="#"><img src="{{asset('user_asset/img/card14.png')}}" alt=""><span>Reply</span> </a>
                                <a href="#"><img src="{{asset('user_asset/img/card18.png')}}" alt=""><span>PM User</span></a>
                                <a href="#"><img src="{{asset('user_asset/img/card23.png')}}" alt=""><span>144</span></a>
                                <a href="#"><img src="{{asset('user_asset/img/card19.png')}}" alt=""></a>
                                <a href="#"><img src="{{asset('user_asset/img/card20.png')}}" alt=""></a>
                                 <a href="javascript:void(0);"  data-toggle="modal" data-target="#addtoany"><img src="{{asset('user_asset/img/card21.png')}}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-6 text-e">
                            <div class="com2"><span>Jan 22</span></div>
                        </div>
                    </div>
                </div>
                <div class="boxed5">
                    <div class="boxerd-img">
                        <img src="{{asset('user_asset/img/card29.png')}}" alt="">
                        <h5>ii2Ahmed</h5>
                    </div>
                    <p class="para">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="com">
                                <a href="#"><img src="{{asset('user_asset/img/card14.png')}}" alt=""><span>Reply</span> </a>
                                <a href="#"><img src="{{asset('user_asset/img/card18.png')}}" alt=""><span>PM User</span></a>
                                <a href="#"><img src="{{asset('user_asset/img/card23.png')}}" alt=""><span>144</span></a>
                                <a href="#"><img src="{{asset('user_asset/img/card19.png')}}" alt=""></a>
                                <a href="#"><img src="{{asset('user_asset/img/card20.png')}}" alt=""></a>
                                 <a href="javascript:void(0);"  data-toggle="modal" data-target="#addtoany"><img src="{{asset('user_asset/img/card21.png')}}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-6 text-e">
                            <div class="com2"><span>Jan 22</span></div>
                        </div>
                    </div>
                </div>
                <div class="boxed5">
                    <div class="boxerd-img">
                        <img src="{{asset('user_asset/img/card29.png')}}" alt="">
                        <h5>ii2Ahmed</h5>
                    </div>
                    <p class="para">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="com">
                                <a href="#"><img src="{{asset('user_asset/img/card14.png')}}" alt=""><span>Reply</span> </a>
                                <a href="#"><img src="{{asset('user_asset/img/card18.png')}}" alt=""><span>PM User</span></a>
                                <a href="#"><img src="{{asset('user_asset/img/card23.png')}}" alt=""><span>144</span></a>
                                <a href="#"><img src="{{asset('user_asset/img/card19.png')}}" alt=""></a>
                                <a href="#"><img src="{{asset('user_asset/img/card20.png')}}" alt=""></a>
                                 <a href="javascript:void(0);"  data-toggle="modal" data-target="#addtoany"><img src="{{asset('user_asset/img/card21.png')}}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-6 text-e">
                            <div class="com2"><span>Jan 22</span></div>
                        </div>
                    </div>
                </div> --}}
                    </div>
                    <div class="col-md-1 ps-0">
                        <div class="boxed6">
                            <div class="date-slider">
                                <div id="slider-vertical"></div>
                                <input type="text" id="amount" readonly
                                    style="border: 0; color: #f6931f; font-weight: bold;">
                            </div>
                            {{-- <a href="#"><img src="{{ asset('user_asset/img/card30.png') }}" alt=""></a>  --}}
                            @if (auth()->check())
                                <div class="dropdown2">
                                    @if ($user_notified)
                                        @if ($user_notified->notification_type == 1)
                                            <button class="dropbtn"><span><img
                                                        src="{{ asset('user_asset/img/card37.png') }}"
                                                        alt=""></span></button>
                                        @elseif($user_notified->notification_type == 2)
                                            <button class="dropbtn"><span><img
                                                        src="{{ asset('user_asset/img/card38.png') }}"
                                                        alt=""></span></button>
                                        @elseif($user_notified->notification_type == 4)
                                            <button class="dropbtn"><span><img
                                                        src="{{ asset('user_asset/img/card40.png') }}"
                                                        alt=""></span></button>
                                        @else
                                            <button class="dropbtn"><span><img
                                                        src="{{ asset('user_asset/img/card39.png') }}"
                                                        alt=""></span></button>
                                        @endif
                                    @else
                                        <button class="dropbtn"><span><img src="{{ asset('user_asset/img/card39.png') }}"
                                                    alt=""></span></button>
                                    @endif

                                    <div class="dropdown-content">
                                        <a href="#">
                                            <div class="list">
                                                <img src="{{ asset('user_asset/img/card37.png') }}" alt="">
                                                <div>
                                                    {{-- <h5>watching</h5> --}}
                                                    <h5>
                                                        <label>
                                                            <input type="radio" hidden name="status" value="1"
                                                                onchange="submitFormNotify()"> Watching
                                                        </label>
                                                    </h5>
                                                    <p class="para">you will be notified of every new reply in this topic
                                                        and a count of new replies will be shown</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="list">
                                                <img src="{{ asset('user_asset/img/card38.png') }}" alt="">
                                                <div>
                                                    <h5>
                                                        <label>
                                                            <input type="radio" hidden name="status" value="2"
                                                                onchange="submitFormNotify()"> Tracking
                                                        </label>
                                                    </h5>
                                                    <p class="para">A count of new replies will be shown for this
                                                        topic.you will be notifiedif someone mentions your @name or replies
                                                        to your</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="list">
                                                <img src="{{ asset('user_asset/img/card39.png') }}" alt="">
                                                <div>
                                                    <h5>
                                                        <label>
                                                            <input type="radio" hidden name="status" value="3"
                                                                onchange="submitFormNotify()"> Normal
                                                        </label>
                                                    </h5>
                                                    <p class="para">You will be notified if someone mentions your @name
                                                        or replies to you</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="list">
                                                <img src="{{ asset('user_asset/img/card40.png') }}" alt="">
                                                <div>
                                                    <h5>
                                                        <label>
                                                            <input type="radio" hidden name="status" value="4"
                                                                onchange="submitFormNotify()"> Muted
                                                        </label>
                                                    </h5>
                                                    <p class="para">you will never be notified of anything about this
                                                        topic, and it will not appear in latest</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <a href="#fad"><img src="{{ asset('user_asset/img/card31.png') }}"
                                        alt=""></a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            {{-- Flaged Start --}}
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header modal-header-css">
                            <h5 class="modal-title" id="exampleModalLongTitle">Reason</h5>
                        </div>
                        <div class="alert alert-success" role="alert" id="successMsg" style="display: block">
                            Flaged Successfully
                        </div>
                        <form id="SubmitForm">
                            <div class="modal-body">
                                <div class="form-group">
                                    <input type="text" hidden name="post_id" value="{{ $post->id }}"
                                        class="form-control" id="post_id">
                                    <label for="message-text" class="col-form-label">Reason:</label>
                                    <textarea class="form-control" name="reason" id="reason"></textarea>
                                </div>
                                <span class="text-danger" id="reasonErrorMsg"></span>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            {{-- Flaged End --}}
        </section>
    @else
        {{-- Auction --}}
        <section class="sec4 sect4 verfied">
            <div class="container">
                <div class="row">
                    <div class="col-md-11">
                        <h1>{{ $post->title }}</h1>
                        <div class="boxed2">
                            @if ($post->getCatInfo)
                                <div class="box1">
                                    <span
                                        style="background-color: {{ $post->getCatInfo->color }} !important"></span>{{ $post->getCatInfo->name }}
                                </div>
                            @endif

                            @if ($post->getSubCatInfo)
                                <div class="box2"><span
                                        style="background-color: {{ $post->getSubCatInfo->color }} !important"></span>{{ $post->getSubCatInfo->name }}
                                </div>
                            @endif

                            <div class="box2">
                                <span style="background-color: {{ $post->getCatInfo->color }} !important"></span>
                                @if ($post->post_type == 0)
                                    Discussion
                                @elseif ($post->post_type == 1)
                                    Trading
                                @else
                                    Auction
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1 p-md-0">
                        <div class="boxed-image">
                            <img src="{{ $post->getUserInfo ? ($post->getUserInfo->d_picture ? asset($post->getUserInfo->d_picture) : asset('user_asset/img/card16.png')) : asset('user_asset/img/card16.png') }}"
                                class="img" alt="">
                            <img src="{{ asset('assets/images/card34.png') }}" class="img1" alt="">
                        </div>
                    </div>
                    <div class="col-md-11">
                        <div class="boxed3">
                            <h4>
                                <a href="{{ route('user.user_profile', $post->getUserInfo->username) }}">{{ $post->getUserInfo->name }}</a>
                            </h4>
                            <!--<div class="boxed-user">-->
                            <!--    <div class="row">-->
                            <!--        <div class="col-md-6">-->
                            <!--            <h4>URL/@Handle: Privacy enabled. Please PM the user to view the URL/@handle</h4>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div> -->
                            {!! $post->description !!}
                            <br>

                            @php
                                $bid = App\Models\Bid::where('post_id', $post->id)
                                    ->orderBy('bid_amount', 'desc')
                                    ->first();
                            @endphp
                            @php
                                $all_bids = App\Models\Bid::where('post_id', $id)->where('status', 3)->first();
                            @endphp

                            @if ($bid != null)
                                <h3 class="head31"> <span>{{ $bid->bid_amount }} USD</span> <strong class="cr_bid">
                                        :Current Bid </strong> </h3>
                            @else
                                <h3 class="head31"><span>{{ $post->price }} USD</span><strong class="cr_bid"> :Current
                                        Bid </strong> </h3>
                            @endif
                            <br>
                            @if ($all_bids == null)
                                <div class="row justify-content-center" id="pt_auction" style="display:block">
                                    <div class="col-md-6">
                                        <form action="{{ route('user.place_bid', $post->id) }}" method="post"
                                            class="form">
                                            @csrf
                                            <div class="inpu">
                                                <input type="number" name="bid_price"
                                                    placeholder="Bid amount in USD only">
                                                <small class="form-text"><span class="bo"></span>Enter max bid <span
                                                        class="what">(What’s this)</span></small>
                                            </div>
                                            @if (auth()->check())
                                                <input type="submit" value="Place Bid" class="theme-btn">
                                            @else
                                                <input type="button" value="Place Bid" class="theme-btn login">
                                            @endif
                                        </form>
                                    </div>
                                </div>
                            @endif
                            {{-- <div class="row justify-content-center">
                                <div class="col-md-5">
                                    <div class="us">
                                        <a href="javascript:;" class="theme-btn">Buy Now</a>
                                        <span><span class="us-wr">350 USD</span> Buy it now for</span>
                                    </div>
                                </div>
                            </div> --}}
                            <br>
                            @if ($post->post_type == 2)
                                @if ($all_bids == null)
                                    <div class="row justify-content-center">
                                        <div class="col-md-5">
                                            <div class="auction">
                                                <h6>Auction ends in</h6>
                                                <ul id="clock">
                                                    <li class="first">
                                                        <div>
                                                            <h5 id="sec_int">00</h5>
                                                            <span id="sec_str">Seconds</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div>
                                                            <h5 id="min_int">00</h5>
                                                            <span id="min_str">Minutes</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div>
                                                            <h5 id="hour_int">00</h5>
                                                            <span id="hour_str">Hours</span>
                                                        </div>
                                                    </li>
                                                    <li class="last">
                                                        <div>
                                                            <h5 id="days_int">00</h5>
                                                            <span id="days_str">Day</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="row justify-content-center">
                                        <div class="alert alert-success"> This Auction is End. Win Bid Amount is
                                            ${{ $all_bids->bid_amount }}.00</div>
                                    </div>
                                @endif
                            @endif
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <ul class="mores">
                                        <li class="first"><a href="javascript:;">Learn more</a></li>
                                        <li><a href="javascript:;">Why Auctions</a></li>
                                        <li><a href="javascript:;">Before You Bid</a></li>
                                        <li class="last"><a href="javascript:;">Auction Rule</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row mar-t align-items-center">
                                <div class="col-md-6">
                                    <div class="com">
                                        <a href="#"><img src="{{ asset('user_asset/img/card14.png') }}"
                                                alt=""><span>Reply</span> </a>
                                        <a href="#"><img src="{{ asset('user_asset/img/card18.png') }}"
                                                alt=""><span>PM User</span></a>

                                        @if (auth()->check())
                                            <a href="#" id="bookmark"><i
                                                    class="{{ $bookmark ? 'fa-solid' : 'fa-regular' }} fa-bookmark"
                                                    style="color: #7a7a7a;"></i></a>
                                            <a href="#" id="flag" data-toggle="modal"
                                                data-target="#exampleModal"><i class="fa-solid fa-flag"
                                                    style="color: #7a7a7a;"></i></a>
                                        @endif

                                        <a href="#" data-toggle="modal" data-target="#addtoany">
                                            <img src="{{ asset('user_asset/img/card21.png') }}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6 text-e">

                                    @if ($post->getPostReplies->where('is_active', 1)->last())
                                        <span><span
                                                class="com2">{{ Carbon\Carbon::create($post->getPostReplies->where('is_active', 1)->last()->created_at->format('Y-m-d h:i:s'))->diffForHumans() }}</span>
                                            Last Reply </span>
                                    @endif
                                    <span>
                                        <span
                                            class="com2">{{ Carbon\Carbon::create($post->created_at)->format('M j') }}</span>
                                        Created </span>
                                </div>
                            </div>
                        </div>
                        {{-- <h3 class="close">.This topic will close 3 months after the last reply</h3> --}}
                    </div>
                    <div class="col-md-12">
                        <h1>Suggested Topics</h1>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Topic</th>
                                    <th>replies</th>
                                    <th>Views</th>
                                    <th>activity</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Thanks For Spending Time with us</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>1D</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        {{-- Auction end --}}
        {{-- Flaged Start --}}
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header modal-header-css">
                        <h5 class="modal-title" id="exampleModalLongTitle">Reason</h5>
                    </div>
                    <div class="alert alert-success" role="alert" id="successMsg" style="display: none">
                        Flaged Successfully
                    </div>
                    <form id="SubmitForm">
                        <div class="modal-body">
                            <div class="form-group">
                                <input type="text" hidden name="post_id" value="{{ $post->id }}"
                                    class="form-control" id="post_id">
                                <label for="message-text" class="col-form-label">Reason:</label>
                                <textarea class="form-control" name="reason" id="reason"></textarea>
                            </div>
                            <span class="text-danger" id="reasonErrorMsg"></span>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{-- Flaged End --}}
    @endif

    @push('js')
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        @if (Auth::check())
            <script>
                let post_id = {{ $post->id }}; // Change this to the actual post ID
                let read_time = 0; // Initialize read time
                let auth_id = {{ auth()->user()->id }};

                // Function to send AJAX request to update read time
                function updateReadTime(post_id, read_time) {
                    $.ajax({
                        type: "POST",
                        url: "{{ route('user.updates_readtimes') }}",
                        data: {
                            post_id: post_id,
                            read_time: read_time,
                            auth_id: auth_id,
                            _token: '{{ csrf_token() }}',
                        },
                        success: function(response) {
                            console.log("Read time updated successfully");
                        },
                        error: function(xhr, status, error) {
                            console.error("Error updating read time:", error);
                        }
                    });
                }

                // Track time spent on the page and update read time every minute
                let timer = setInterval(function() {
                    read_time += 1;
                }, 60000); // Update read time every minute (60000 milliseconds)

                // Update read time before leaving the page
                $(window).on('beforeunload', function() {
                    clearInterval(timer); // Stop the timer
                    updateReadTime(post_id, read_time); // Update read time
                });
            </script>
        @endif


        <script>
            // Set the date we're counting down to
            var countDownDate = new Date("{{ $post->bid_end_date }}").getTime();

            // Update the count down every 1 second
            var x = setInterval(function() {

                // Get today's date and time
                var start_time = '{{ $post->bid_start_date }}'
                var now = new Date().getTime(start_time);

                // Find the distance between now and the count down date
                var distance = countDownDate - now;
                // console.log(distance);
                // Time calculations for days, hours, minutes and seconds
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                // Output the result in an element with id="demo"
                document.getElementById("sec_int").innerHTML = seconds;
                document.getElementById("min_int").innerHTML = minutes;
                document.getElementById("days_int").innerHTML = days;
                document.getElementById("hour_int").innerHTML = hours;

                // If the count down is over, write some text 
                if (distance < 0) {
                    clearInterval(x);
                    document.getElementById("clock").innerHTML = "EXPIRED";
                    document.getElementById("pt_auction").style.display = 'none';
                    $('.cr_bid').html(' :Last Bid');
                }
            }, 1000);
        </script>
        <script>
            function submitFormNotify() {
                var selectedStatus = document.querySelector('input[name="status"]:checked');

                if (selectedStatus) {
                    var statusValue = selectedStatus.value;
                    var pageid = {{ $post->id }};

                    var data = {
                        "_token": '{{ csrf_token() }}',
                        notification_type: statusValue,
                        page_id: pageid,
                        type: 1
                    };
                    var url = '{{ route('user.user_notification_allow') }}';
                    var res = AjaxRequest(url, data);
                    if (res.status == 1) {
                        $('.dropbtn span').html(res.image);
                        Swal.fire({
                            position: "top-end",
                            icon: "success",
                            title: res.name + " Successfull",
                            showConfirmButton: false,
                            timer: 1500
                        });
                    } else {
                        $('.dropbtn span').html(res.image);
                        Swal.fire({
                            position: "top-end",
                            icon: "success",
                            title: "Some thing went wrong",
                            showConfirmButton: false,
                            timer: 1500
                        });
                    }
                } else {
                    alert("Please select a status.");
                }
            }


            // Post like
            var total = parseInt('{{ $post->getPostlikes->count() }}');
            $('#like').click(function() {
                var data = {
                    "_token": '{{ csrf_token() }}'
                };
                var url = '{{ route('user.user_like_post', [$post->id]) }}';
                var res = AjaxRequest(url, data);
                if (res.status == 1) {
                    total = total + 1;
                    $('#like').html('' + total +
                        ' Likes  <i class="fa-solid fa-thumbs-up fa-lg" style="color: #7a7a7a;"></i>');
                } else {
                    total = total - 1;
                    $('#like').html('' + total +
                        ' Likes  <i class="fa-regular fa-thumbs-up fa-lg" style="color: #7a7a7a;"></i>');
                }
            });


            // FLaged 

            $('#SubmitForm').on('submit', function(e) {
                e.preventDefault();

                let reason = $('#reason').val();
                let post_id = $('#post_id').val();

                $.ajax({
                    url: "{{ route('user.user_flag_post') }}",
                    type: "POST",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        reason: reason,
                        post_id: post_id
                    },
                    success: function(response) {
                        $('#successMsg').show();
                        $('#reason').val('');
                        $('#reasonErrorMsg').hide();
                    },
                    error: function(response) {
                        $('#reasonErrorMsg').text(response.responseJSON.errors.reason);

                    },
                });
            });

            //Comment Like 
            $(document).on("click", ".comment_like", function() {
                var $this = $(this);
                var total1 = $this.find('span').html();
                console.log('onclick' + total1);
                var reply_id = $this.attr('data-replyId');
                var data = {
                    "_token": '{{ csrf_token() }}'
                };
                var url = '{{ config('app.url') }}user-like-post-comment/' + reply_id;
                var res = AjaxRequest(url, data);
                if (res.status == 1) {


                    total1 = parseInt(total1) + 1;
                    console.log('like' + total1);
                    $this.html('<i class="fa-solid fa-thumbs-up fa-lg" style="color: #7a7a7a;"></i><span>' + total1 +
                        '</span>');
                } else {

                    total1 = parseInt(total1) - 1;
                    console.log('unlike' + total1);
                    $this.html('<i class="fa-regular fa-thumbs-up fa-lg" style="color: #7a7a7a;"></i><span>' + total1 +
                        '</span>');
                }
            });

            // Bookmark
            $('#bookmark').click(function() {
                var data = {
                    "_token": '{{ csrf_token() }}'
                };
                var url = '{{ route('user.user_bookmark_post', [$post->id]) }}';
                var res = AjaxRequest(url, data);
                if (res.status == 1) {
                    $('#bookmark').html('<i class="fa-solid fa-bookmark" style="color: #7a7a7a;">');
                    Swal.fire({
                        position: "top-end",
                        icon: "success",
                        title: "Book Mark Created Successfull",
                        showConfirmButton: false,
                        timer: 1500
                    });
                } else {
                    $('#bookmark').html('<i class="fa-regular fa-bookmark" style="color: #7a7a7a;">');
                    Swal.fire({
                        position: "top-end",
                        icon: "success",
                        title: "BookMark Deleted Successfull",
                        showConfirmButton: false,
                        timer: 1500
                    });
                }
            });

            $(document).ready(function() {
                $(".pop-trigger").click(function() {
                    $(".pop-content-hide").slideToggle();
                });

                $(".custom-date-trigger").click(function() {
                    $(".custom-time").slideDown();
                });
                $(".date_hide").click(function() {
                    $(".custom-time").slideUp();
                });
                $('#comment-text-area').atwho({
                    at: "@",
                    data: {!! json_encode(config('app.all_user_arr')) !!},

                });

            });


            // Comment
            $('#comment-btn').click(function() {
                var data = {
                    "_token": '{{ csrf_token() }}',
                    "type": 'post',
                    "comment": $('#comment-text-area').val()

                };
                var url = '{{ route('user.create_comment', [$post->id]) }}';
                var res = AjaxRequest(url, data);
                console.log(res.message, res.comment);
                if (res.message == 1) {
                    $('#comment_append').append(res.comment);
                    $('#comment-text-area').val('');
                } else {
                    $('#comment_append').append('<div class="alert alert-danger">Something went wrong!!!</div>');
                }
            });
        </script>
        <script>
            $(function() {
                $("#slider-vertical").slider({
                    orientation: "vertical",
                    range: "min",
                    min: new Date("2021-01-01").getTime() / 1000,
                    max: new Date().getTime() / 1000, // Set max to the current date
                    step: 86400,
                    value: new Date().getTime() / 1000, // Set initial value to the current date
                    slide: function(event, ui) {
                        $("#amount").val(
                            new Date(ui.value * 1000).toLocaleDateString()
                        );
                    }
                });

                $("#amount").val(
                    new Date($("#slider-vertical").slider("value") * 1000).toLocaleDateString()
                );
            });
        </script>
    @endpush
@endsection
