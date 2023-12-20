@extends('User.layouts.master')
@section('content')
<section class="sec16">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 dir="ltr">50+ results for instagram</h2>
                    <div class="row">
                        <div class="col-md-7">
                            <input type="text" placeholder="Search">
                        </div>
                        <div class="col-md-5">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="results-dropdown">
                                        <button onclick="myResults()" class="results-dropbtn">Topic/posts <i class="fas fa-sort-down"></i></button>
                                        <div id="myResults" class="results-dropdown-content">
                                            <div class="form">
                                                <input type="text" placeholder="Search">
                                                <i class="fal fa-search"></i>
                                            </div>
                                            <a href="#">Topic/posts</a>
                                            <a href="#">Categories/Tags</a>
                                            <a href="#">Users </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <button class="search-s">Search</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <ul class="accordion">
                        <li>
                            <div class="acc_title">
                                <i class="fas fa-caret-left"></i> Advanced filters
                            </div>
                            <div class="acc_desc" style="display: none;">
                                <div class="row rowgap">
                                    <div class="col-md-6">
                                        <label>Categorized</label>
                                        <div class="categorized-dropdown">
                                            <button onclick="myCategorized()" class="categorized-dropbtn">All Categories <i class="fas fa-sort-down"></i></button>
                                            <div id="myCategorized" class="categorized-dropdown-content">
                                                <div class="form">
                                                    <input type="text" placeholder="Search">
                                                    <i class="fal fa-search"></i>
                                                </div>
                                                <a href="#"><span class="boxed-1"></span> Buy request</a>
                                                <a href="#"><span class="boxed-2"></span> Social media</a>
                                                <a href="#"><span class="boxed-2"></span> Instagram <span class="boxed-3"></span> Social media </a>
                                                <a href="#"><span class="boxed-2"></span> Fanpages <span class="boxed-4"></span> Social media </a>
                                                <a href="#"><span class="boxed-2"></span> Tiktok <span class="boxed-5"></span> Social media </a>
                                                <a href="#"><span class="boxed-2 me-2"></span> Youtube <span class="boxed-2"></span> Social media </a>
                                                <a href="#"><span class="boxed-2"></span> Twitter <span class="boxed-7"></span> Social media </a>
                                                <a href="#"><span class="boxed-4 me-0"></span> 1678x Discussions </a>
                                            </div>
                                        </div>
                                        <!-- <select>
                                            <option value="social-media">Social media</option>
                                            <option value="instagram">Instagram</option>
                                            <option value="tik-tok">Tik Tok</option>
                                        </select> -->
                                    </div>
                                    <div class="col-md-6">
                                        <label>Where topics</label>
                                        <div class="topic-dropdown">
                                            <button onclick="myTopic()" class="topic-dropbtn">Any <i class="fas fa-sort-down"></i></button>
                                            <div id="myTopic" class="topic-dropdown-content">
                                                <a href="#"> Are Open</a>
                                                <a href="#">Are Close</a>
                                                <a href="#">Are Public </a>
                                                <a href="#">Are Archived </a>
                                                <a href="#">Have Zero Replies </a>
                                                <a href="#">Contain a Single User</a>
                                                <a href="#">Are Solved </a>
                                                <a href="#">Are Unsolved </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Tagged</label>
                                        <select>
                                            <option value="Int, og-email">Int, og-email</option>
                                        </select>
                                        <label class="mt-2"> <input type="checkbox"> All the above tags</label>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Posted by</label>
                                        <select>
                                            <option value="Mohdj">Mohdj</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Only return topics/posts</label>
                                        <div class="label-box">
                                            <label> <input type="checkbox">Matching in title only</label>
                                            <label> <input type="checkbox"> I liked</label>
                                            <label> <input type="checkbox"> In my messages</label>
                                            <label> <input type="checkbox"> I read</label>
                                        </div>
                                        <div class="topics-dropdown">
                                            <button onclick="myTopics()" class="topics-dropbtn">Any <i class="fas fa-sort-down"></i></button>
                                            <div id="myTopics" class="topics-dropdown-content">
                                                <div class="form">
                                                    <input type="text" placeholder="Search">
                                                    <i class="fal fa-search"></i>
                                                </div>
                                                <a href="#"> I’ve not read</a>
                                                <a href="#"> I posted in</a>
                                                <a href="#">I’m Watching </a>
                                                <a href="#">I Created </a>
                                                <a href="#">I’m Tracking </a>
                                                <a href="#"> I Bookmarked</a>
                                                <a href="#">are the very first post </a>
                                                <a href="#">are pinned </a>
                                                <a href="#">are wiki </a>
                                                <a href="#">include image(s)</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Posted</label>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="posted-dropdown">
                                                    <button onclick="myPosted()" class="posted-dropbtn">before <i class="fas fa-sort-down"></i></button>
                                                    <div id="myPosted" class="posted-dropdown-content">
                                                        <a href="#"> before</a>
                                                        <a href="#"> After</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="date">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h5>Filter by post count and topic views</h5>
                                        <label>Posts</label>
                                        <div class="counting">
                                            <input type="number" value="100">
                                            <i class="fal fa-arrows-h"></i>
                                            <input type="number" value="100">
                                        </div>
                                        <label>Views</label>
                                        <div class="counting">
                                            <input type="number" value="100">
                                            <i class="fal fa-arrows-h"></i>
                                            <input type="number" value="100">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row justify-content-end">
                        <div class="col-md-3">
                            <div class="sort-by">
                                <span>sort by</span>
                                <div class="sort-dropdown">
                                    <button onclick="mySort()" class="sort-dropbtn">Relevance <i class="fas fa-sort-down"></i></button>
                                    <div id="mySort" class="sort-dropdown-content">
                                        <a href="#"> Relevance</a>
                                        <a href="#"> Latest Post</a>
                                        <a href="#"> Most Liked</a>
                                        <a href="#"> Most Viewed</a>
                                        <a href="#"> Latest Topic</a>
                                    </div>
                                </div>
                                <!-- <select>
                            <option value="relevance">Relevance</option>
                            <option value="latest-post">Latest Post</option>
                            <option value="most-liked">Most Liked</option>
                            <option value="most-viewed">Most Viewed</option>
                            <option value="latest-topic">Latest Topic</option>
                        </select> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row rowgap">
                <div class="col-md-12">
                    <div class="boxed-list">
                        <div class="boxed-wrap">
                            <img src="{{asset('user_asset/img/card26.png')}}" alt="">
                            <div>
                                <h5>Instagram influencer ( giveaways ) growth</h5>
                                <ul class="links">
                                    <li><span class="span">Tiktok Service</span><span class="box1"></span></li>
                                    <li><span class="span">Social Media</span><span class="box2"></span></li>
                                </ul>
                                <p class="para">Aug '21 - influencer and celebrity giveaways, many tickets off and some onsite closed! coming up. august 30th @kendallvertes ( 8.4m ) @brynrumfallo ( 2.9m ) @wonderfull_places ( 14.2m ) @ourplanetdaily ( 5m ) @donna ( 5.2m ) @bestplacestogo ( 2.4m ) @beaches_n_resorts ( 2.8m ) 10k $699 25k. $999 50k $1499</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="boxed-list">
                        <div class="boxed-wrap">
                            <img src="{{asset('user_asset/img/card26.png')}}" alt="">
                            <div>
                                <h5>Instagram influencer ( giveaways ) growth</h5>
                                <ul class="links">
                                    <li><span class="span">Tiktok Service</span><span class="box1"></span></li>
                                    <li><span class="span">Social Media</span><span class="box2"></span></li>
                                </ul>
                                <p class="para">Aug '21 - influencer and celebrity giveaways, many tickets off and some onsite closed! coming up. august 30th @kendallvertes ( 8.4m ) @brynrumfallo ( 2.9m ) @wonderfull_places ( 14.2m ) @ourplanetdaily ( 5m ) @donna ( 5.2m ) @bestplacestogo ( 2.4m ) @beaches_n_resorts ( 2.8m ) 10k $699 25k. $999 50k $1499</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="boxed-list">
                        <div class="boxed-wrap">
                            <img src="{{asset('user_asset/img/card26.png')}}" alt="">
                            <div>
                                <h5>Instagram influencer ( giveaways ) growth</h5>
                                <ul class="links">
                                    <li><span class="span">Tiktok Service</span><span class="box1"></span></li>
                                    <li><span class="span">Social Media</span><span class="box2"></span></li>
                                </ul>
                                <p class="para">Aug '21 - influencer and celebrity giveaways, many tickets off and some onsite closed! coming up. august 30th @kendallvertes ( 8.4m ) @brynrumfallo ( 2.9m ) @wonderfull_places ( 14.2m ) @ourplanetdaily ( 5m ) @donna ( 5.2m ) @bestplacestogo ( 2.4m ) @beaches_n_resorts ( 2.8m ) 10k $699 25k. $999 50k $1499</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection