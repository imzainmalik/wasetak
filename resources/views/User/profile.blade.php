@extends('User.layouts.master')
@section('content')
    <div class="sub_header">
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
    </div>
@endsection
