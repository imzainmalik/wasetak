<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Stats Report</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .user-info {
            background-color: #f7f7f7;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .user-info h1 {
            color: #333;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .boxed-stat {
            border: 1px solid #ccc;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .boxed-stat h5 {
            color: #333;
            font-size: 16px;
            margin: 0;
        }

        .boxed-stat span {
            color: #0066cc;
            font-weight: bold;
            margin-left: 10px;
        }

        .rowgap {
            margin-top: 20px;
        }

        .boxed-wrap {
            background-color: #f7f7f7;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        h4 {
            color: #333;
            font-size: 20px;
            margin-bottom: 10px;
        }

        .links li {
            display: inline-block;
            margin-right: 10px;
        }

        .span {
            color: #333;
            font-weight: bold;
            font-size: 14px;
            margin-right: 5px;
        }

        .box1,
        .box2 {
            width: 10px;
            height: 10px;
            display: inline-block;
            background-color: #0066cc;
            border-radius: 50%;
            margin-left: 5px;
        }

        .cate {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .cate li {
            display: inline-block;
            margin-right: 10px;
        }

        .cate a {
            text-decoration: none;
            color: #0066cc;
            font-weight: bold;
        }

        .img1 {
            max-width: 100%;
            height: auto;
        }

        .rep h5 {
            color: #333;
            font-size: 16px;
            margin: 0;
        }

        .col-md-5 {
            padding-right: 0;
        }

        .col-md-3 {
            padding-left: 0;
            padding-right: 10px;
        }

        .col-md-4 {
            padding-left: 0;
            padding-right: 10px;
        }

        .col-md-2 {
            padding-left: 0;
        }

        .box-11 {
            margin-top: 20px;
        }

        .boxed {
            background-color: #f7f7f7;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        h5 {
            color: #333;
            font-size: 20px;
            margin: 0 0 10px;
        }

        img {
            max-width: 100%;
            height: auto;
            border-radius: 50%;
            margin-right: 20px;
        }

        span {
            color: #333;
            font-weight: bold;
            font-size: 14px;
        }

        .para {
            color: #666;
            font-size: 14px;
            margin: 10px 0;
        }

        .text-e {
            text-align: right;
        }

        @media (max-width: 768px) {
            .boxed-image {
                display: flex;
                align-items: center;
                margin-bottom: 10px;
            }

            img {
                margin-right: 10px;
            }

            .text-e {
                text-align: left;
                margin-top: 10px;
            }
        }

        img {
            width: 61px;
            height: 59px;
        }

        .replies {
            margin-top: 20px;
        }

        .boxed {
            background-color: #f7f7f7;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        h5 {
            color: #333;
            font-size: 24px;
            margin: 0 0 10px;
        }

        a {
            text-decoration: none;
            color: #333;
        }

        ul.links {
            list-style: none;
            padding: 0;
            margin: 10px 0;
        }

        ul.links li {
            display: inline-block;
            margin-right: 10px;
        }

        .span {
            color: #333;
            font-weight: bold;
        }

        .boxed-image {
            display: flex;
            align-items: center;
        }

        img.img1 {
            max-width: 100%;
            height: auto;
            border-radius: 50%;
            margin-right: 10px;
        }

        .text-e {
            text-align: right;
        }

        @media (max-width: 768px) {
            .boxed-image {
                flex-direction: column;
                align-items: flex-start;
            }

            .text-e {
                text-align: left;
                margin-top: 10px;
            }
        }

        .liks {
            margin-top: 20px;
        }

        .boxed {
            background-color: #f7f7f7;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        h5 {
            color: #333;
            font-size: 24px;
            margin: 0 0 10px;
        }

        a {
            text-decoration: none;
            color: #333;
        }

        .boxed-image {
            display: flex;
            align-items: center;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        .text-e {
            text-align: right;
        }

        ul.accordion {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .first {
            border-bottom: 1px solid #ddd;
            margin-bottom: 20px;
            padding-bottom: 20px;
        }

        .acc_title {
            cursor: pointer;
            padding: 10px;
        }

        .acc_desc {
            display: none;
            padding: 10px;
        }

        .acc_desc p {
            margin: 0;
        }

        .thum {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }

        .thum img {
            max-width: 48%;
        }

        @media (max-width: 768px) {
            .boxed-image {
                flex-direction: column;
                align-items: flex-start;
            }

            .text-e {
                text-align: left;
                margin-top: 10px;
            }
        }


        .tickets {
            margin-top: 20px;
        }

        .boxed-wrap {
            background-color: #f7f7f7;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        h4 {
            color: #333;
            font-size: 24px;
            margin: 0;
        }

        a {
            text-decoration: none;
            color: #333;
        }

        .locker {
            padding-left: 10px;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        .pe-0 {
            padding-right: 0;
        }

        .rowgap {
            margin: 0 -15px;
        }

        .col-md-12 {
            margin-bottom: 20px;
        }

        .col-md-5 {
            flex: 0 0 41.666667%;
            max-width: 41.666667%;
            padding: 0 15px;
        }

        .col-md-6 {
            flex: 0 0 50%;
            max-width: 50%;
            padding: 0 15px;
        }

        .col-md-3 {
            flex: 0 0 25%;
            max-width: 25%;
            padding: 0 15px;
        }

        @media (max-width: 768px) {
            .col-md-5 {
                flex: 0 0 100%;
                max-width: 100%;
            }

            .col-md-6 {
                flex: 0 0 100%;
                max-width: 100%;
            }

            .col-md-3 {
                flex: 0 0 100%;
                max-width: 100%;
            }
        }
    </style>
</head>

<body>
    <div class="user-info">
        <h1>User Stats Report</h1>

        <div class="boxed-stat">
            <h5>Days Visited<span>{{ $visited_days->days }}</span></h5>
        </div>

        <div class="boxed-stat">
            <h5>Read time<span>1h</span></h5>
        </div>

        <div class="boxed-stat">
            <h5>Recent read time<span>10m</span></h5>
        </div>

        <div class="boxed-stat">
            <h5>Topics Created<span>{{ $topic_created->count() }}</span></h5>
        </div>

        <div class="boxed-stat">
            <h5>Post Created<span>{{ $post_created->count() }}</span></h5>
        </div>

        <div class="boxed-stat">
            <h5>Given <img src="{{ asset('assets/images/card36.png') }}"
                    alt=""><span>{{ $likes_given->count() }}</span></h5>
        </div>

        <div class="boxed-stat">
            <h5>Received <img src="{{ asset('assets/images/card36.png') }}"
                    alt=""><span>{{ $like_received }}</span></h5>
        </div>

        <!-- Add more stats as needed -->
        <div class="row rowgap">
            <div class="box-11 showfirst all">
                <h1>All Activity Report</h1>
                @if ($all_activity->count() > 0)
                    @foreach ($all_activity as $all_activities)
                        <div class="boxed">
                            <div class="row align-items-center">
                                <div class="col-md-9">
                                    <div class="boxed-image">
                                        <img src="{{ Auth::user()->d_picture }}"
                                            alt=""style="width: 61px;height: 59px;">
                                        <div>
                                            <h5>
                                                <a
                                                    href="{{ route('user.post_detail', $all_activities->id) }}">{{ $all_activities->title }}</a>
                                            </h5>
                                            <span>{{ $all_activities->getCatInfo->name }}</span>
                                        </div>
                                    </div>
                                    <p class="para">is interested on
                                        {{ $all_activities->created_at->format('m-d-Y') }}
                                    </p>
                                </div>
                                <div class="col-md-3 text-e">
                                    <p class="para">{{ $all_activities->created_at->diffForHumans() }}</p>
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
            <div class="container">
                <h1>All My Read Post Report</h1>
                @if ($get_all_my_viewed_posts->count() > 0)
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
                                    </div>
                                    <div class="col-md-5 pe-0">
                                        {{-- 0 --}}
                                        <div class="row align-items-center">
                                            <div class="col-md-4">
                                                <a href="#" class="rep">
                                                    <h5>{{ $get_all_my_viewed_post->getPostReplies->count() }} Replies
                                                    </h5>
                                                </a>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="#" class="rep">
                                                    <h5>{{ $get_all_my_viewed_post->getPostViews->count() }} views</h5>
                                                </a>
                                            </div>
                                            <div class="col-md-2">
                                                <h5>{{ $get_all_my_viewed_post->created_at->diffForHumans() }}</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="md-12">
                        No data.
                    </div>
                @endif
            </div>

            <div class="container">
                <h1>All My Posts</h1>
                @if ($my_posts->count() > 0)
                    @foreach ($my_posts as $my_post)
                        <div class="col-md-12">
                            <div class="boxed-wrap">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <a href="{{ route('user.post_detail', $my_post->id) }}">
                                            <h4>{{ $my_post->title }}</h4>
                                        </a>
                                        <ul class="links">
                                            @if ($my_post->category_id != 0)
                                                <li><span class="span">{{ $my_post->getCatInfo->name }}</span><span
                                                        class="box1"></span></li>
                                            @endif
                                            @if ($my_post->sub_category_id != 0)
                                                <li><span
                                                        class="span">{{ $my_post->getSubCatInfo->name ?? '' }}</span><span
                                                        class="box2"></span></li>
                                            @endif
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row align-items-center">
                                            <div class="col-md-3 p-md-0">
                                                <img src="{{ Auth::user()->d_picture }}" class="img1" alt="">
                                            </div>
                                            <div class="col-md-4 text-center">
                                                <a href="#" class="rep">
                                                    {{-- <img src="assets/images/card14.png" alt=""> --}}
                                                    <h5>{{ $my_post->getPostReplies->count() }} Replies</h5>
                                                </a>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="#" class="rep">
                                                    {{-- <img src="assets/images/card12.png" alt=""> --}}
                                                    <h5>{{ $my_post->getPostViews->count() }} views</h5>
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
                @endif
            </div>

            <div class="container">
                <h1>All Posts where I Replied</h1>
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
                                                    href="{{ route('user.post_detail', $get_all_where_i_replies->id) }}">
                                                    {{ $get_all_where_i_replies->title }}
                                                </a>
                                            </h5>
                                            <span>{{ $get_all_where_i_replies->getCatInfo->name }}</span>
                                        </div>
                                    </div>
                                    {{-- <p class="para">is interested on Apr 11</p> --}}
                                </div>
                                <div class="col-md-3 text-e">
                                    <p class="para">
                                        {{ $get_all_where_i_replies->created_at->diffForHumans() }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="container">
                <h1>All Posts Which I Liked</h1>
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
                                                                    href="{{ route('user.post_detail', $get_all_my_liked_post->id) }}">
                                                                    {{ $get_all_my_liked_post->title }}
                                                                </a>
                                                            </h5>
                                                            <span><span class="cor-gr"></span>Auction</span>
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
                                        <div class="acc_desc" style="display: none;">
                                            <p class="para">{!! $get_all_my_liked_post->description !!}</p>
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
            </div>

            <div class="container">
                <h1>My Tickets</h1>
                <div class="box-25 showfirst tickets">
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
                        @endif
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>
