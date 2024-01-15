@extends('User.layouts.master')
@section('content')
@push('text_editor_css')
<link rel="stylesheet" href="{{ asset('user_asset/css/jquery-te-1.4.0.css') }}">
<link rel="stylesheet" href="{{ asset('user_asset/css/style.css') }}">

<style>
    .hidden_div{
        display:none;
    }
    </style>
@endpush
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
                    <a href="{{route('user.fee_calculator')}}" class="theme-btn1"><img src="{{asset('user_asset/img/card11.png')}}" alt=""> Free Calculator </a>
                    <a href="{{route('user.start_checkout')}}" class="theme-btn2"><img src="{{asset('user_asset/img/card10.png')}}" alt=""> Start ticket</a>
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
                                    @if(auth()->check())
                                        @if(count($unviewed_posts) > 0)
                                            <li data-targetit="box-2">New ({{count($unviewed_posts)}})</li>
                                        @endif
                                    @endif
                                    <li data-targetit="box-3">Top</li>
                                    <li data-targetit="box-4">Categories</li>
                                    @if(auth()->check())
                                    <li data-targetit="box-5">My Post</li>
                                    @endif
                                    <li data-targetit="box-6">Hot</li>
                                </ul>
                            </div>
                            <div class="col-md-5 text-e">
                                <ul class="drop">
                                    <li class="dropdown drop1">
                                        <a href="#" class="dropbtn1"><i class="fas fa-sort-down"></i> 
                                        @if($p_name != '' && $c_name != '')
                                            {{$p_name . ' - ' . $c_name}}
                                        @elseif($p_name != '')
                                            {{ $p_name }}
                                        @else
                                            All Categories
                                        @endif
                                        </a>
                                        <div class="dropdown-content">
                                            {{-- <input type="text" placeholder="Search"> --}}
                                            <div class="cate-list">
                                                <a href="{{route('user.index')}}">
                                                    <h5><span class="box1"></span> All Categories</h5>
                                                    <p class="para"></p>
                                                </a>
                                            </div>
                                            <div class="bor-line"></div>
                                                @foreach ($all_categories as $item)
                                                    <div class="cate-list">
                                                        <a href="{{route('user.index')}}/?p_id={{$item['id']}}">
                                                            <h5><span class="box1"style="background-color: {{ $item['color'] }}"></span> {{ $item['name'] }}</h5>
                                                            <p class="para">{{$item['description']}}</p>
                                                        </a>
                                                    </div>
                                                    <div class="bor-line"></div>
                                                        @if (isset($item[0]) && is_array($item[0]))
                                                            @foreach ($item as $child)
                                                                @if (is_array($child))
                                                                    <div class="cate-list">
                                                                        <a href="{{route('user.index')}}/?p_id={{$item['id']}}&c_id={{$child['child_id']}}">
                                                                            <h5><span class="box5" style="background-color: {{ $item['color'] }}"></span> {{ $item['name'] }} </h5>
                                                                            <h5><span class="box1" style="background-color: {{ $child['child_color'] }}" ></span>  {{ $child['child_name'] }} </h5>
                                                                            <p class="para">{{$child['child_description']}}</p>
                                                                        </a>
                                                                    </div>
                                                                    <div class="bor-line"></div>
                                                                @endif
                                                            @endforeach
                                                        @endif
                                                @endforeach
                                            
                                            {{-- <div class="cate-list">
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
                                            </div> --}}
                                        </div>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropbtn2"><i class="fas fa-sort-down"></i> All Tags</a>
                                        <div class="dropdown-content">
                                            <a href="#">Tags</a>
                                        </div>
                                    </li>
                                    <li><a href="#" class="dropbtn3 modalButton" data-popup="popupSixteen"><i class="fas fa-plus-circle"></i> New Topic</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @php
                    if(request()->get('new_topic') || request()->get('top_page') || request()->get('featured_page') ){
                        $show = '';
                    }else{
                        $show = 'showfirst';
                    }

                @endphp
             
                <div class="box-1 {{ $show }} ">
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
                        @forelse ($posts as $post)
                    
                        <div class="col-md-12">
                            <div class="boxed-wrap">
                                <div class="row align-items-center">
                                    <div class="col-md-7">
                                        <a href="{{route('user.post_detail',[$post->id])}}"><h4>{{$post->title}} <span class="{{ auth()->check() ? $post->getPostViews->contains('user_id', auth()->user()->id) ? '' : 'notify' : '' }}"> </span></h4></a>
                                        <ul class="links">
                                            <li><span class="span">{{$post->getCatInfo ? $post->getCatInfo->name : ''}}</span><span class="box1" style="background-color: {{$post->getCatInfo->color}} !important"></span></li>
                                            @if ($post->getSubCatInfo)

                                            <li><span class="span"> {{ $post->getSubCatInfo->name }}</span><span class="box2" style="background-color: {{$post->getSubCatInfo->color}} !important"></span></li>
                                            @endif
                                        </ul>
                                        {{-- <ul class="cate">
                                            <li class="active"><a href="#">Featured</a></li>
                                            <li><a href="#">Name-Change</a></li>
                                            <li><a href="#">Urban-Service</a></li>
                                            <li><a href="#">Username-Claim</a></li>
                                            <li><a href="#">Verification</a></li>
                                        </ul> --}}
                                    </div>
                                    <div class="col-md-5 pe-md-0">
                                        <div class="row align-items-center">
                                            <div class="col-md-3 p-md-0">
                                                {{-- <img src="{{asset('user_asset/img/card13.png')}}" class="img1" alt=""> --}}
                                            </div>
                                            <div class="col-md-4">
                                                <a href="{{route('user.post_detail',[$post->id])}}" class="rep">
                                                    <img src="{{asset('user_asset/img/card14.png')}}" alt="">
                                                    <h5>{{ $post->getPostReplies->where('is_active',1)->count() }} Replies</h5>
                                                </a>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="#" class="rep">
                                                    <img src="{{asset('user_asset/img/card12.png')}}" alt="">
                                                    <h5>{{ $post->getPostViews->count() }} views</h5>
                                                </a>
                                            </div>
                                            <div class="col-md-2">
                                                <h5>{{$post->created_at->diffForHumans()}}</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="col-md-12">
                            <div class="boxed-wrap">
                                <div class="row align-items-center">
                                    <div class="col-md-12">
                                        <h4>No Record Found</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforelse
                        {{-- {!! $posts->links() !!} --}}
                        {!! $posts->appends(request()->query())->links() !!}
                    </div>
                </div>
                @if(auth()->check())
                    <div class="box-2 {{request()->get('new_topic') ? 'showfirst' : ''}}">
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
                            @forelse ($unviewed_posts as $post)
                            <div class="col-md-12">
                                <div class="boxed-wrap">
                                    <div class="row align-items-center">
                                        <div class="col-md-7">
                                            <a href="{{route('user.post_detail',[$post->id])}}"><h4>{{$post->title}}</h4></a>
                                            <ul class="links">
                                                <li><span class="span">{{$post->getCatInfo ? $post->getCatInfo->name : ''}}</span><span class="box1" style="background-color: {{$post->getCatInfo->color}} !important"></span></li>
                                                @if ($post->getSubCatInfo)

                                                <li><span class="span"> {{ $post->getSubCatInfo->name }}</span><span class="box2" style="background-color: {{$post->getSubCatInfo->color}} !important"></span></li>
                                                @endif
                                            </ul>
                                            {{-- <ul class="cate">
                                                <li class="active"><a href="#">Featured</a></li>
                                                <li><a href="#">Name-Change</a></li>
                                                <li><a href="#">Urban-Service</a></li>
                                                <li><a href="#">Username-Claim</a></li>
                                                <li><a href="#">Verification</a></li>
                                            </ul> --}}
                                        </div>
                                        <div class="col-md-5 pe-md-0">
                                            <div class="row align-items-center">
                                                <div class="col-md-3 p-md-0">
                                                    {{-- <img src="{{asset('user_asset/img/card13.png')}}" class="img1" alt=""> --}}
                                                </div>
                                                <div class="col-md-4">
                                                    <a href="{{route('user.post_detail',[$post->id])}}" class="rep">
                                                        <img src="{{asset('user_asset/img/card14.png')}}" alt="">
                                                        <h5>{{ $post->getPostReplies->where('is_active',1)->count() }} Replies</h5>
                                                    </a>
                                                </div>
                                                <div class="col-md-3">
                                                    <a href="#" class="rep">
                                                        <img src="{{asset('user_asset/img/card12.png')}}" alt="">
                                                        <h5>{{ $post->getPostViews->count() }} views</h5>
                                                    </a>
                                                </div>
                                                <div class="col-md-2">
                                                    <h5>{{$post->created_at->diffForHumans()}}</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @empty
                            <div class="col-md-12">
                                <div class="boxed-wrap">
                                    <div class="row align-items-center">
                                        <div class="col-md-12">
                                            <h4>No Record Found</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforelse
                            {!! $posts->links() !!}
                        </div>
                    </div>
                @endif
            
                <div class="box-3 {{request()->get('top_page') ? 'showfirst' : ''}}">
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
                        @forelse ($top_posts as $posted)
                        <div class="col-md-12">
                            <div class="boxed-wrap">
                                <div class="row align-items-center">
                                    <div class="col-md-7">
                                        <a href="{{route('user.post_detail',[$posted->id])}}"><h4>{{$posted->title}}</h4></a>
                                        <ul class="links">
                                            <li><span class="span">{{$posted->getCatInfo ? $posted->getCatInfo->name : ''}}</span><span class="box1" style="background-color: {{$posted->getCatInfo->color}} !important"></span></li>
                                            @if ($posted->getSubCatInfo)

                                            <li><span class="span"> {{ $posted->getSubCatInfo->name }}</span><span class="box2" style="background-color: {{$posted->getSubCatInfo->color}} !important"></span></li>
                                            @endif
                                        </ul>
                                        {{-- <ul class="cate">
                                            <li class="active"><a href="#">Featured</a></li>
                                            <li><a href="#">Name-Change</a></li>
                                            <li><a href="#">Urban-Service</a></li>
                                            <li><a href="#">Username-Claim</a></li>
                                            <li><a href="#">Verification</a></li>
                                        </ul> --}}
                                    </div>
                                    <div class="col-md-5 pe-md-0">
                                        <div class="row align-items-center">
                                            <div class="col-md-3 p-md-0">
                                                {{-- <img src="{{asset('user_asset/img/card13.png')}}" class="img1" alt=""> --}}
                                            </div>
                                            <div class="col-md-4">
                                                <a href="{{route('user.post_detail',[$posted->id])}}" class="rep">
                                                    <img src="{{asset('user_asset/img/card14.png')}}" alt="">
                                                    <h5>{{ $posted->getPostReplies->where('is_active',1)->count() }} Replies</h5>
                                                </a>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="#" class="rep">
                                                    <img src="{{asset('user_asset/img/card12.png')}}" alt="">
                                                    <h5>{{ $posted->getPostViews->count() }} views</h5>
                                                </a>
                                            </div>
                                            <div class="col-md-2">
                                                <h5>{{$posted->created_at->diffForHumans()}}</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="col-md-12">
                            <div class="boxed-wrap">
                                <div class="row align-items-center">
                                    <div class="col-md-12">
                                        <h4>No Record Found</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforelse
                        {!! $top_posts->appends(request()->query())->links() !!}
                        {{-- <div class="col-md-12">
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
                        </div> --}}
                        {{-- <div class="col-md-12">
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
                        </div> --}}
                    </div>
                </div>

                @if(auth()->check())
                <div class="box-5 {{request()->get('my_post') ? 'showfirst' : ''}}">
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
                        @forelse ($my_post as $post)
                        <div class="col-md-12">
                            <div class="boxed-wrap">
                                <div class="row align-items-center">
                                    <div class="col-md-7">
                                        <a href="{{route('user.post_detail',[$post->id])}}"><h4>{{$post->title}}</h4></a>
                                        <ul class="links">
                                            <li><span class="span">{{$post->getCatInfo ? $post->getCatInfo->name : ''}}</span><span class="box1" style="background-color: {{$post->getCatInfo->color}} !important"></span></li>
                                            @if ($post->getSubCatInfo)

                                            <li><span class="span"> {{ $post->getSubCatInfo->name }}</span><span class="box2" style="background-color: {{$post->getSubCatInfo->color}} !important"></span></li>
                                            @endif
                                        </ul>
                                        {{-- <ul class="cate">
                                            <li class="active"><a href="#">Featured</a></li>
                                            <li><a href="#">Name-Change</a></li>
                                            <li><a href="#">Urban-Service</a></li>
                                            <li><a href="#">Username-Claim</a></li>
                                            <li><a href="#">Verification</a></li>
                                        </ul> --}}
                                    </div>
                                    <div class="col-md-5 pe-md-0">
                                        <div class="row align-items-center">
                                            <div class="col-md-3 p-md-0">
                                                {{-- <img src="{{asset('user_asset/img/card13.png')}}" class="img1" alt=""> --}}
                                            </div>
                                            <div class="col-md-4">
                                                <a href="{{route('user.post_detail',[$post->id])}}" class="rep">
                                                    <img src="{{asset('user_asset/img/card14.png')}}" alt="">
                                                    <h5>{{ $post->getPostReplies->where('is_active',1)->count() }} Replies</h5>
                                                </a>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="#" class="rep">
                                                    <img src="{{asset('user_asset/img/card12.png')}}" alt="">
                                                    <h5>{{ $post->getPostViews->count() }} views</h5>
                                                </a>
                                            </div>
                                            <div class="col-md-2">
                                                <h5>{{$post->created_at->diffForHumans()}}</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="col-md-12">
                            <div class="boxed-wrap">
                                <div class="row align-items-center">
                                    <div class="col-md-12">
                                        <h4>No Record Found</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforelse
                        {!! $posts->appends(request()->query())->links() !!}
                    </div>
                </div>
                @endif
                <div class="box-6 {{request()->get('featured_page') ? 'showfirst' : ''}}">
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
                        @forelse ($featureds as $post)
                        <div class="col-md-12">
                            <div class="boxed-wrap">
                                <div class="row align-items-center">
                                    <div class="col-md-7">
                                        <a href="{{route('user.post_detail',[$post->id])}}"><h4>{{$post->title}}</h4></a>
                                        <ul class="links">
                                            <li><span class="span">{{$post->getCatInfo ? $post->getCatInfo->name : ''}}</span><span class="box1" style="background-color: {{$post->getCatInfo->color}} !important"></span></li>
                                            @if ($post->getSubCatInfo)

                                            <li><span class="span"> {{ $post->getSubCatInfo->name }}</span><span class="box2" style="background-color: {{$post->getSubCatInfo->color}} !important"></span></li>
                                            @endif
                                        </ul>
                                        {{-- <ul class="cate">
                                            <li class="active"><a href="#">Featured</a></li>
                                            <li><a href="#">Name-Change</a></li>
                                            <li><a href="#">Urban-Service</a></li>
                                            <li><a href="#">Username-Claim</a></li>
                                            <li><a href="#">Verification</a></li>
                                        </ul> --}}
                                    </div>
                                    <div class="col-md-5 pe-md-0">
                                        <div class="row align-items-center">
                                            <div class="col-md-3 p-md-0">
                                                {{-- <img src="{{asset('user_asset/img/card13.png')}}" class="img1" alt=""> --}}
                                            </div>
                                            <div class="col-md-4">
                                                <a href="{{route('user.post_detail',[$post->id])}}" class="rep">
                                                    <img src="{{asset('user_asset/img/card14.png')}}" alt="">
                                                    <h5>{{ $post->getPostReplies->where('is_active',1)->count() }} Replies</h5>
                                                </a>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="#" class="rep">
                                                    <img src="{{asset('user_asset/img/card12.png')}}" alt="">
                                                    <h5>{{ $post->getPostViews->count() }} views</h5>
                                                </a>
                                            </div>
                                            <div class="col-md-2">
                                                <h5>{{$post->created_at->diffForHumans()}}</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="col-md-12">
                            <div class="boxed-wrap">
                                <div class="row align-items-center">
                                    <div class="col-md-12">
                                        <h4>No Record Found</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforelse
                        {!! $posts->appends(request()->query())->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec18 modal modalWindow createTopics" id="popupSixteen">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8 col-10">
                    <h5>Create a new topic</h5>
                </div>
                <div class="col-md-4 col-2 text-e">
                    <a href="#"> <i class="fal fa-chevron-down"></i></a>
                    <div class="cancel closeBtns" close-modal=""><img src="assets/images/card152.png" alt=""></div>
                </div>
            </div>
            <form method="post" action="{{route('user.create_post')}}">
                @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-6">
                            <input type="text" class="form-control" name="title" required placeholder="Title"/>
                        </div>

                         <div class="col-6">
                            <select class="form-control" name="category" required id="category">
                                <option>Select Category</option>
                                @foreach ($all_categories as $item)
                                    @if (isset($item[0]) && is_array($item[0]))
                                        @foreach ($item as $child)
                                            @if (is_array($child))
                                                <option value="{{$child['child_id']}}"> 
                                                    {{ $item['name'] }}
                                                     >
                                                    {{ $child['child_name'] }}
                                                </option>
                                            @endif
                                        @endforeach
                                    @endif
                                @endforeach
                            </select>
                        </div> 
                    </div>

                    <div class="hidden_div row" id="hidden_div" style="display:none;">
                        <div class="col-6">
                            <input type="text" class="form-control" name="price" placeholder="Price in USD"/>
                        </div>
                        <div class="col-6">
                            <input type="text" class="form-control" name="handle_url" placeholder="@handle URL"/>
                        </div>
                    </div> 
                        <div class="text-edi">
                            <textarea class="editor form-control" name="post_describe" id="post_describe"></textarea>  
                        </div>
                </div>
                <div class="col-md-6">
                    <div class="text-edi text-edih">
                        
                        <div class="boxed-textarea">
                            <h1>Preview:</h1>
                            <hr>
                            <div class="container h-100 input-preview" id="text_preview"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="theme-btn1">Create new topic</button>
                    <a href="#" class="theme-btn2 cancel" close-modal="">Close</a>
                </div>
            </div>
        </form>
        </div>
    </section> 
@endsection


@push('js') 
<script src="{{ asset('user_asset/js/jquery-te-1.4.0.min.js') }}"></script>

<script>
   $("#post_describe").jqte({
                    formats: false,
                    fsize: false,
                    color: false,
                    u: false,
                    sub: false,
                    sup: false,
                    outdent: false,
                    indent: false,
                    strike: false,
                    link: true,
                    unlink: false,
                    remove: false,
                    rule: false,
                    change: function() {
                        changeServiceDescribe();
        }
    });


    function changeServiceDescribe() {
                var editor_text = $("#post_describe").val();
                $("#text_preview").html(editor_text); 
            }

    $('#category').change(function(){
        var category = $('#category').val();

        var foundOption = $("#category option:contains('Social Media')");

        // Check if the option was found
        if (foundOption.length > 0) {
            // Do something with the found option
            document.getElementById('hidden_div').style.display = "block";
        } else {
            document.getElementById('hidden_div').style.display = "none";
        }
 
        // console.log(category);
    })
  </script> 
@endpush

