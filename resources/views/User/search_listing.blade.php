@extends('User.layouts.master')
@section('content')
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

    <section class="sec16">
        <div class="container">
            <form method="get" action="{{ route('user.search_listing') }}">
                <div class="row">
                    <div class="col-md-12">
                        <h2 dir="ltr">{{ $posts->count() }} results for {{ $query_input }}</h2>
                        <div class="row">
                            <div class="col-md-7">
                                <input type="text" name="query" value="{{ $query_input }}" placeholder="Search">
                            </div>
                            <div class="col-md-5">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="categorized-dropdown">
                                            <button onclick="myCategorized()" type="button" class="categorized-dropbtn">
                                               @isset($main_category)
                                                {{ $main_category->name }}
                                                @else
                                                All Categories
                                                @endisset
                                                <i class="fas fa-sort-down"></i></button>
                                            <div id="myCategorized" class="categorized-dropdown-content">
                                                <div class="form">
                                                    <input type="text" placeholder="Search">
                                                    <i class="fal fa-search"></i>
                                                </div>
                                                @if ($all_categories != null)
                                                    @foreach ($all_categories as $item)
                                                        <a href="/search-listing?query={{ $query_input }}&&main_cate={{ $item['id'] }}">
                                                            @if (isset($item[0]) && is_array($item[0]))
                                                                @foreach ($item as $child) 
                                                                    @if (is_array($child))
                                                                        <span class="boxed-2" style="background-color: {{ $child['child_color'] }}"></span>
                                                                        {{ $child['child_name'] }}
                                                                        <br>
                                                                    @endif
                                                                @endforeach
                                                            @endif
                                                            <span class="boxed-3" style="background-color: {{ $item['color'] }}">
                                                            </span>
                                                            {{ $item['name'] }}
                                                        </a>
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <button type="submit"class="search-s">Search</button>
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
                                            <label>Posted</label>
                                            <div class="row"> 
                                                <input type="date" name="daterange"/>
                                            </div>
                                        </div> 
                                        <div class="col-md-6">
                                            <label>Where topics</label>
                                            <div class="topic-dropdown">
                                                <select name="where_topics" class="form-control" id=""> 
                                                    <option value="">Select</option>
                                                    <option value="0" @isset($where_topics) @if($where_topics == 0) selected @endif @endisset> Have Zero Replies </option>
                                                    <option value="1" @isset($where_topics) @if($where_topics == 1) selected @endif @endisset>Have Zero Likes</option> 
                                                    <option value="2" @isset($where_topics) @if($where_topics == 2) selected @endif @endisset>Have Zero Views</option> 
                                                </select> 
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Tagged</label>
                                            <select>
                                                <option value="Int, og-email">Int, og-email</option>
                                            </select>
                                            <label class="mt-2"> <input type="checkbox"> All the above tags </label>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Posted by</label>
                                            <input type="text" name="posted_by" id="">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Only return topics/posts</label>
                                            <div class="label-box">
                                                <label> <input type="checkbox">Matching in title only</label>
                                                <label> <input type="checkbox"> I liked</label>
                                                {{-- <label> <input type="checkbox"> In my messages</label> --}}
                                                <label> <input type="checkbox"> I read</label>
                                            </div>
                                            <div class="topics-dropdown">
                                                <button onclick="myTopics()" class="topics-dropbtn">Any <i
                                                        class="fas fa-sort-down"></i></button>
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
            </form>
            <hr>
            {{-- <div class="row">
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
            </div> --}}
            <div class="row rowgap">
                {{-- @dd($posts); --}}
                @if ($posts != null)
                    @foreach ($posts as $post)
                        <div class="col-md-12">
                            <div class="boxed-list">
                                <div class="boxed-wrap">
                                    <img src="{{ $post->getUserInfo->d_picture }}" alt="">
                                    <div>
                                        <h5>{{ $post->title }}</h5>
                                        <ul class="links">
                                            <li><span
                                                    class="span">{{ $post->getCatInfo ? $post->getCatInfo->name : '' }}</span><span
                                                    class="box1"
                                                    style="background-color: {{ $post->getCatInfo->color }} !important"></span>
                                            </li>
                                            @if ($post->getSubCatInfo)
                                                <li><span class="span"> {{ $post->getSubCatInfo->name }}</span><span
                                                        class="box2"
                                                        style="background-color: {{ $post->getSubCatInfo->color }} !important"></span>
                                                </li>
                                            @endif
                                        </ul>
                                        <p class="para">Aug '21 - influencer and celebrity giveaways, many tickets off
                                            and some onsite closed! coming up. august 30th @kendallvertes ( 8.4m )
                                            @brynrumfallo ( 2.9m ) @wonderfull_places ( 14.2m ) @ourplanetdaily ( 5m )
                                            @donna ( 5.2m ) @bestplacestogo ( 2.4m ) @beaches_n_resorts ( 2.8m ) 10k $699
                                            25k. $999 50k $1499</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>

@endsection

{{-- @push('js')
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script>
    $(function() {
      $('input[name="daterange"]').daterangepicker({
        opens: 'left'
      }, function(start, end, label) {
        console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
      });
    });
    </script>
@endpush --}}