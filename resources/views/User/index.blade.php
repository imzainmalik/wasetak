@extends('User.layouts.master')
@section('content')
@push('text_editor_css')


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
                    <a href="{{route('checkout.index')}}" class="theme-btn2"><img src="{{asset('user_asset/img/card10.png')}}" alt=""> Start ticket</a>
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
                       
                    </div>
                </div>
                <div class="box-4 {{request()->get('my_categories') ? 'showfirst' : ''}}">
                    <div class="col-md-12 mar">
                        <div class="row ">
                            <div class="col-md-4 col-4">
                                <h5>Category</h5>
                            </div>
                            <div class="col-md-4 col-4 text-e newTopics">
                                <h5>Topics</h5>
                                <h5>Views</h5>

                            </div>
                        </div>
                    </div>
                    <div class="row rowgap catboxes_list">
                        @foreach ($all_categories as $item)
                        <div class="col-md-12">
                            <div class="boxed-wrap catBox">
                                <div class="seperator"  style="background-color: {{ $item['color'] }}"></div>
                                <div class="row align-items-center">
                                    <div class="col-md-12">
                                        <h3><a href="{{route('user.index')}}/?p_id={{$item['id']}}">{{$item['name']}}</a></h3>
                                    </div>
                                    <div class="col-md-5">

                                        <p>{{$item['description']}}
                                        </p>
                                        @if (isset($item[0]) && is_array($item[0]))
                                            <ul>
                                                @foreach ($item as $child)
                                                    @if (is_array($child))
                                                    <br/>
                                                    <li>
                                                        <div class="cate-list">
                                                            <a href="{{route('user.index')}}/?p_id={{$item['id']}}&c_id={{$child['child_id']}}">
                                                                <h5><span class="boxcat-col" style="background-color: {{ $child['child_color'] }}" ></span>  {{ $child['child_name'] }} </h5>
                                                             
                                                            </a>
                                                        </div>
                                                    </li>
                                                        {{-- <div class="bor-line"></div> --}}
                                                    @endif
                                                @endforeach
                                            </ul>
                                        @endif
                                    </div>
                                    <div class="col-md-1 text-center">
                                        <p>{{$item['count']}}</p>
                                    </div>
                                    <div class="col-md-5">
                                        <p >
                                            @if($item['count'] > 0)
                                                @foreach ($item['posts'] as $post )
                                                    <a class="themeCol" href="{{route('user.post_detail',[$post->id])}}">
                                                        {{$post->title}}
                                                    </a> 
                                                   <hr/>
                                                @endforeach
                                            @else
                                                <p class="themeCol"> No Post Found</p>
                                            @endif
                                        </p>
                                        
                                    </div>

                                </div>
                            </div>
                        </div>
                            @endforeach
                           
                            {{-- {!! $categories->appends(request()->query())->links() !!} --}}

                        {{-- <div class="col-md-12">
                            <div class="boxed-wrap catBox">
                                <div class="row align-items-center">
                                    <div class="col-md-12">
                                        <h3>Wasetak Partners</h3>
                                    </div>
                                    <div class="col-md-5">

                                        <p>Win rewards just by using SWAPD! Fun contests, SWAPD merch, and countless
                                            rewards being given out every month! Check out our top earners and buyers by

                                        </p>
                                    </div>
                                    <div class="col-md-1 text-center">
                                        <p>139</p>
                                    </div>
                                    <div class="col-md-5">
                                        <p class="themeCol">Share Your 2024 Goals on SWAPD - Let’s See What We Can
                                            Achieve
                                            $100 Visa Gift
                                            Card - 2024 New Years Giveaway! Together! [FREE STORE]Create a One-Product
                                            Winning Dropshipping Store</p>
                                    </div>

                                </div>
                            </div>
                        </div> --}}

                        {{-- <div class="col-md-12">
                            <div class="boxed-wrap catBox">
                                <div class="row align-items-center">
                                    <div class="col-md-12">
                                        <h3>Social Media</h3>
                                    </div>
                                    <div class="col-md-5">

                                        <p>Win rewards just by using SWAPD! Fun contests, SWAPD merch, and countless
                                            rewards being given out every month! Check out our top earners and buyers by

                                        </p>
                                    </div>
                                    <div class="col-md-1 text-center">
                                        <p>22</p>
                                    </div>
                                    <div class="col-md-5">
                                        <p class="themeCol">Share Your 2024 Goals on SWAPD - Let’s See What We Can
                                            Achieve
                                            $100 Visa Gift
                                            Card - 2024 New Years Giveaway! Together! [FREE STORE]Create a One-Product
                                            Winning Dropshipping Store</p>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="boxed-wrap catBox">
                                <div class="row align-items-center">
                                    <div class="col-md-12">
                                        <h3>Rare Handles</h3>
                                    </div>
                                    <div class="col-md-5">

                                        <p>Win rewards just by using SWAPD! Fun contests, SWAPD merch, and countless
                                            rewards being given out every month! Check out our top earners and buyers by

                                        </p>
                                    </div>
                                    <div class="col-md-1 text-center">
                                        <p>54</p>
                                    </div>
                                    <div class="col-md-5">
                                        <p class="themeCol">Share Your 2024 Goals on SWAPD - Let’s See What We Can
                                            Achieve
                                            $100 Visa Gift
                                            Card - 2024 New Years Giveaway! Together! [FREE STORE]Create a One-Product
                                            Winning Dropshipping Store</p>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="boxed-wrap catBox">
                                <div class="row align-items-center">
                                    <div class="col-md-12">
                                        <h3>Rare Emails</h3>
                                    </div>
                                    <div class="col-md-5">

                                        <p>Win rewards just by using SWAPD! Fun contests, SWAPD merch, and countless
                                            rewards being given out every month! Check out our top earners and buyers by

                                        </p>
                                    </div>
                                    <div class="col-md-1 text-center">
                                        <p>125</p>
                                    </div>
                                    <div class="col-md-5">
                                        <p class="themeCol">Share Your 2024 Goals on SWAPD - Let’s See What We Can
                                            Achieve
                                            $100 Visa Gift
                                            Card - 2024 New Years Giveaway! Together! [FREE STORE]Create a One-Product
                                            Winning Dropshipping Store</p>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="boxed-wrap catBox">
                                <div class="row align-items-center">
                                    <div class="col-md-12">
                                        <h3>Unique Services</h3>
                                    </div>
                                    <div class="col-md-5">

                                        <p>Win rewards just by using SWAPD! Fun contests, SWAPD merch, and countless
                                            rewards being given out every month! Check out our top earners and buyers by

                                        </p>
                                    </div>
                                    <div class="col-md-1 text-center">
                                        <p>365</p>
                                    </div>
                                    <div class="col-md-5">
                                        <p class="themeCol">Share Your 2024 Goals on SWAPD - Let’s See What We Can
                                            Achieve
                                            $100 Visa Gift
                                            Card - 2024 New Years Giveaway! Together! [FREE STORE]Create a One-Product
                                            Winning Dropshipping Store</p>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="boxed-wrap catBox">
                                <div class="row align-items-center">
                                    <div class="col-md-12">
                                        <h3>Established Business</h3>
                                    </div>
                                    <div class="col-md-5">

                                        <p>Win rewards just by using SWAPD! Fun contests, SWAPD merch, and countless
                                            rewards being given out every month! Check out our top earners and buyers by

                                        </p>
                                    </div>
                                    <div class="col-md-1 text-center">
                                        <p>548</p>
                                    </div>
                                    <div class="col-md-5">
                                        <p class="themeCol">Share Your 2024 Goals on SWAPD - Let’s See What We Can
                                            Achieve
                                            $100 Visa Gift
                                            Card - 2024 New Years Giveaway! Together! [FREE STORE]Create a One-Product
                                            Winning Dropshipping Store</p>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="boxed-wrap catBox">
                                <div class="row align-items-center">
                                    <div class="col-md-12">
                                        <h3>World Wide Web</h3>
                                    </div>
                                    <div class="col-md-5">

                                        <p>Win rewards just by using SWAPD! Fun contests, SWAPD merch, and countless
                                            rewards being given out every month! Check out our top earners and buyers by

                                        </p>
                                    </div>
                                    <div class="col-md-1 text-center">
                                        <p>356</p>
                                    </div>
                                    <div class="col-md-5">
                                        <p class="themeCol">Share Your 2024 Goals on SWAPD - Let’s See What We Can
                                            Achieve
                                            $100 Visa Gift
                                            Card - 2024 New Years Giveaway! Together! [FREE STORE]Create a One-Product
                                            Winning Dropshipping Store</p>
                                    </div>

                                </div>
                            </div>
                        </div> --}}

                    </div>
                    {{-- <div class="row rowgap">
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
                                    </div>
                                    <div class="col-md-5 pe-md-0">
                                        <div class="row align-items-center">
                                            <div class="col-md-3 p-md-0">
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
                    </div> --}}
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
                        {!! $featureds->appends(request()->query())->links() !!}
                    </div>
                </div>
            </div>
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

            $('#category').change(function() {
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

