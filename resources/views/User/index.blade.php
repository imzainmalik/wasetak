@extends('User.layouts.master')
@section('content')
    
    <div class="banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="banner_img">
                        <img src="{{ asset('user_asset/img/banner-img.png') }}" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="banner_content">
                        <h1>Buy, Sell, & Trade Virtual Properties</h1>
                        <p>wasetak is a trusted middleman service dedicated to offering our users the safest way to buy,
                            sell, or trade items and services of virtual nature.</p>
                        <button class="button"><img src="{{ asset('user_asset/img/icon-calculator.png') }}"> Free
                            Calculator</button>
                        <button class="button"><img src="{{ asset('user_asset/img/icon-passport-and-tickets.png') }}">
                            Start ticket</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="topic_dashboard">
        <div class="filter_section">
            <div class="container">
                <div class="filter_col">
                    <div class="filter_menu">
                        <a href="#">Hot</a>
                        <a href="#">My Post</a>
                        <a href="#">Categories</a>
                        <a href="#">Top</a>
                        <a href="#">New</a>
                        <a href="#">Latest</a>
                    </div>
                    <div class="filter_options">
                        <select class="form-control form-select">
                            <option>All Categories</option>
                            <option>Wasetak Contests, Rewards</option>
                            <option>Social Media</option>
                            <option>Rare Handles</option>
                            <option>Unique Services</option>
                            <option>Established Businesses</option>
                            <option>World Wide Web</option>
                        </select>
                        <select class="form-control form-select">
                            <option>All tags</option>
                            <option>1M</option>
                            <option>2M</option>
                            <option>3M</option>
                            <option>4M</option>
                            <option>500K</option>
                            <option>5M</option>
                        </select>
                        <button class="button"><i class="ri-add-circle-fill"></i> New Topic</button>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="topic">
            <div class="container">
                <div class="topic_head">
                    <div class="topic_head_topic">Topic</div>
                    <div class="topic_head_replies">Replies</div>
                    <div class="topic_head_views">Views</div>
                    <div class="topic_head_activity">Activity</div>
                </div>
            </div>
        </div>
        {{--  --}}
        <div class="topic">
            <div class="container">
                <div class="topic_item">
                    <div class="topic_title">
                        <p><a href="#">New Fresh Panels -Musician $1000 Public Figure $5000 Entrepreneur $5500New
                                Fresh Panels -Musician $1000 Public Figure $5000 Entrepreneur $5500</a></p>
                        <div class="d-flex">
                            <div class="topic_social topic_tiktok_service"><a href="#">Tiktok Service</a></div>
                            <div class="topic_social topic_social_media"><a href="#">Social Media</a></div>
                        </div>
                        <div class="topic_links">
                            <a href="#">Featured</a>
                            <a href="#">Name-Change</a>
                            <a href="#">Urban-Service</a>
                            <a href="#">Username-Claim</a>
                            <a href="#">Verification</a>
                        </div>
                    </div>
                    <div class="topic_profiles">
                        <a href="#"><img src="{{ asset('user_asset/img/profile1.png') }}"></a>
                        <a href="#"><img src="{{ asset('user_asset/img/profile2.png') }}"></a>
                        <a href="#"><img src="{{ asset('user_asset/img/profile3.png') }}"></a>
                        <a href="#"><img src="{{ asset('user_asset/img/profile4.png') }}"></a>
                    </div>
                    <div class="topic_replies"><a href="#"><img src="{{ asset('user_asset/img/icon-left.png') }}"> 123
                            Replies</a></div>
                    <div class="topic_view"><img src="{{ asset('user_asset/img/icon-view.png') }}"> 163 Views</div>
                    <div class="topic_time">2h</div>
                </div>
            </div>
        </div>
        <div class="topic">
            <div class="container">
                <div class="topic_item">
                    <div class="topic_title">
                        <p><a href="#">New Fresh Panels -Musician $1000 Public Figure $5000 Entrepreneur $5500New
                                Fresh Panels -Musician $1000 Public Figure $5000 Entrepreneur $5500</a></p>
                        <div class="d-flex">
                            
                            <div class="topic_social topic_ig_services"><a href="#">IG Services</a></div>
                            <div class="topic_social topic_social_media"><a href="#">Social Media</a></div>
                        </div>
                        <div class="topic_links">
                            <a href="#">Verification</a>
                            <a href="#">Username-Claim</a>
                            <a href="#">Urban-Service</a>
                            <a href="#">Name-Change</a>
                            <a href="#">Featured</a>
                        </div>
                    </div>
                    <div class="topic_profiles">
                        <a href="#"><img src="{{ asset('user_asset/img/profile1.png') }}"></a>
                        <a href="#"><img src="{{ asset('user_asset/img/profile2.png') }}"></a>
                        <a href="#"><img src="{{ asset('user_asset/img/profile3.png') }}"></a>
                        <a href="#"><img src="{{ asset('user_asset/img/profile4.png') }}"></a>
                    </div>
                    <div class="topic_replies"><a href="#"><img src="{{ asset('user_asset/img/icon-left.png') }}"> 123
                            Replies</a></div>
                    <div class="topic_view"><img src="{{ asset('user_asset/img/icon-view.png') }}"> 163 Views</div>
                    <div class="topic_time">2h</div>
                </div>
            </div>
        </div>
        <div class="topic">
            <div class="container">
                <div class="topic_item">
                    <div class="topic_title">
                        <p><a href="#">New Fresh Panels -Musician $1000 Public Figure $5000 Entrepreneur $5500New
                                Fresh Panels -Musician $1000 Public Figure $5000 Entrepreneur $5500</a></p>
                        <div class="d-flex">
                            
                            <div class="topic_social topic_facebook_services"><a href="#">Facebook services</a></div>
                            <div class="topic_social topic_social_media"><a href="#">Social Media</a></div>
                        </div>
                        <div class="topic_links">
                            <a href="#">Verification</a>
                            <a href="#">Username-Claim</a>
                            <a href="#">Urban-Service</a>
                            <a href="#">Name-Change</a>
                            <a href="#">Featured</a>
                        </div>
                    </div>
                    <div class="topic_profiles">
                        <a href="#"><img src="{{ asset('user_asset/img/profile1.png') }}"></a>
                        <a href="#"><img src="{{ asset('user_asset/img/profile2.png') }}"></a>
                        <a href="#"><img src="{{ asset('user_asset/img/profile3.png') }}"></a>
                        <a href="#"><img src="{{ asset('user_asset/img/profile4.png') }}"></a>
                    </div>
                    <div class="topic_replies">
                        <a href="#"><img src="{{ asset('user_asset/img/icon-left.png') }}"> 123 Replies</a>
                    </div>
                    <div class="topic_view">
                        <img src="{{ asset('user_asset/img/icon-view.png') }}"> 163 Views
                    </div>
                    <div class="topic_time">2h</div>
                </div>
            </div>
        </div>
        <div class="topic">
            <div class="container">
                <div class="topic_item">
                    <div class="topic_title">
                        <p><a href="#">New Fresh Panels -Musician $1000 Public Figure $5000 Entrepreneur $5500New
                                Fresh Panels -Musician $1000 Public Figure $5000 Entrepreneur $5500</a></p>
                        <div class="d-flex">
                            <div class="topic_social topic_youtube"><a href="#">Youtube</a></div>
                            <div class="topic_social topic_social_media"><a href="#">Social Media</a></div>
                        </div>
                        <div class="topic_links">
                            <a href="#">Verification</a>
                            <a href="#">Username-Claim</a>
                            <a href="#">Urban-Service</a>
                            <a href="#">Name-Change</a>
                            <a href="#">Featured</a>
                        </div>
                    </div>
                    <div class="topic_profiles">
                        <a href="#"><img src="{{ asset('user_asset/img/profile1.png') }}"></a>
                        <a href="#"><img src="{{ asset('user_asset/img/profile2.png') }}"></a>
                        <a href="#"><img src="{{ asset('user_asset/img/profile3.png') }}"></a>
                        <a href="#"><img src="{{ asset('user_asset/img/profile4.png') }}"></a>
                    </div>
                    <div class="topic_replies"><a href="#"><img src="{{ asset('user_asset/img/icon-left.png') }}"> 123
                            Replies</a></div>
                    <div class="topic_view"><img src="{{ asset('user_asset/img/icon-view.png') }}"> 163 Views</div>
                    <div class="topic_time">2h</div>
                </div>
            </div>
        </div>
        <div class="topic">
            <div class="container">
                <div class="topic_item">
                    <div class="topic_title">
                        <p><a href="#">New Fresh Panels -Musician $1000 Public Figure $5000 Entrepreneur $5500New
                                Fresh Panels -Musician $1000 Public Figure $5000 Entrepreneur $5500</a></p>
                        <div class="d-flex">
                            
                            <div class="topic_social topic_fanpages"><a href="#">Fanpages</a></div>
                            <div class="topic_social topic_social_media"><a href="#">Social Media</a></div>
                        </div>
                        <div class="topic_links">
                            <a href="#">Verification</a>
                            <a href="#">Username-Claim</a>
                            <a href="#">Urban-Service</a>
                            <a href="#">Name-Change</a>
                            <a href="#">Featured</a>
                        </div>
                    </div>
                    <div class="topic_profiles">
                        <a href="#">
                            <img src="{{ asset('user_asset/img/profile1.png') }}">
                        </a>
                        <a href="#">
                            <img src="{{ asset('user_asset/img/profile2.png') }}">
                        </a>
                        <a href="#">
                            <img src="{{ asset('user_asset/img/profile3.png') }}">
                        </a>
                        <a href="#">
                            <img src="{{ asset('user_asset/img/profile4.png') }}">
                        </a>
                    </div>
                    <div class="topic_replies"><a href="#"><img src="{{ asset('user_asset/img/icon-left.png') }}"> 123
                            Replies</a></div>
                    <div class="topic_view"><img src="{{ asset('user_asset/img/icon-view.png') }}"> 163 Views</div>
                    <div class="topic_time">2h</div>
                </div>
            </div>
        </div>
        <div class="topic">
            <div class="container">
                <div class="topic_item">
                    <div class="topic_title">
                        <p><a href="#">New Fresh Panels -Musician $1000 Public Figure $5000 Entrepreneur $5500New
                                Fresh Panels -Musician $1000 Public Figure $5000 Entrepreneur $5500</a></p>
                        <div class="d-flex">
                            
                            <div class="topic_social topic_tiktok_service"><a href="#">Tiktok Service</a></div>
                            <div class="topic_social topic_social_media"><a href="#">Social Media</a></div>
                        </div>
                        <div class="topic_links">
                            <a href="#">Verification</a>
                            <a href="#">Username-Claim</a>
                            <a href="#">Urban-Service</a>
                            <a href="#">Name-Change</a>
                            <a href="#">Featured</a>
                        </div>
                    </div>
                    <div class="topic_profiles">
                        <a href="#"><img src="{{ asset('user_asset/img/profile1.png') }}"></a>
                        <a href="#"><img src="{{ asset('user_asset/img/profile2.png') }}"></a>
                        <a href="#"><img src="{{ asset('user_asset/img/profile3.png') }}"></a>
                        <a href="#"><img src="{{ asset('user_asset/img/profile4.png') }}"></a>
                    </div>
                    <div class="topic_replies"><a href="#"><img src="{{ asset('user_asset/img/icon-left.png') }}"> 123
                            Replies</a></div>
                    <div class="topic_view"><img src="{{ asset('user_asset/img/icon-view.png') }}"> 163 Views</div>
                    <div class="topic_time">2h</div>
                </div>
            </div>
        </div>
    </div> 
@endsection

@push('js')

@endpush
