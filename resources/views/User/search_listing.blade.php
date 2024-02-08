@extends('User.layouts.master')
@section('content')
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <link rel="stylesheet" href="{{ asset('user_asset/css/style.css') }}"> 
    <section class="sec16">
        <div class="container">
            <form method="get" action="{{ route('user.search_listing') }}">
                <div class="row">
                    <div class="col-md-12">
                        @isset($query_input)
                            <h2 dir="ltr">{{ $posts->count() }} results for "{{ $query_input }}"</h2>
                        @endisset
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
                                                                        <span class="boxed-2"
                                                                            style="background-color: {{ $child['child_color'] }}"></span>
                                                                        {{ $child['child_name'] }}
                                                                        <br>
                                                                    @endif
                                                                @endforeach
                                                            @endif
                                                            <span class="boxed-3"
                                                                style="background-color: {{ $item['color'] }}">
                                                            </span>
                                                            {{ $item['name'] }}
                                                        </a>
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <button type="submit" class="search-s">Search</button>
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
                                                <input type="date" name="daterange" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Where topics</label>
                                            <div class="topic-dropdown">
                                                <select name="where_topics" class="form-control" id="">
                                                    <option value="">Select</option>
                                                    <option value="0"
                                                        @isset($where_topics) @if ($where_topics == 0) selected @endif @endisset>
                                                        Have Zero Replies
                                                    </option>

                                                    <option value="1"
                                                        @isset($where_topics) @if ($where_topics == 1) selected @endif @endisset>
                                                        Have Zero Likes
                                                    </option>

                                                    <option value="2"
                                                        @isset($where_topics) @if ($where_topics == 2) selected @endif @endisset>
                                                        Have Zero Views
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Posted by</label>
                                            <input type="text" name="posted_by"
                                                value="@isset($posted_by) {{ $posted_by }} @endisset"
                                                onkeyup="searching_username_func()" id="searching_username">
                                            <div class="col-md-6">
                                                <br>
                                                <div class="search_list_forsearching d-none" id="search_username_list_div">
                                                    <ul id="search_username_list_ul"></ul>
                                                </div>
                                            </div>
                                        </div>
                                        @if (Auth::check())
                                            <div class="col-md-6">
                                                <div class="label-box">
                                                    <label>
                                                        <input type="checkbox" name="matching_title"
                                                            @isset($matching_title) checked @endisset>Matching
                                                        in title only</label>
                                                    <label> <input type="checkbox" name="i_liked"
                                                            @isset($i_liked) checked @endisset> I liked
                                                    </label>
                                                    {{-- <label> <input type="checkbox"> In my messages</label> --}}
                                                    <label>
                                                        <input type="checkbox" name="i_read"
                                                            @isset($i_read) checked @endisset> I read
                                                    </label>
                                                    <label> <input type="checkbox" name="i_bookmarked"
                                                            @isset($i_bookmarked) checked @endisset> I
                                                        Bookmarked</label>
                                                </div>
                                            </div>
                                        @endif
                                        <div class="col-md-6">
                                            <h5>Filter by post count and topic views</h5>
                                            <label>Posts Views</label>
                                            <div class="counting">
                                                <input type="number" placeholder="Min" name="min_views"
                                                    @isset($minViews) value="{{ $minViews }}" @endisset>
                                                <i class="fal fa-arrows-h"></i>
                                                <input type="number" placeholder="Max" name="max_views"
                                                    @isset($maxViews) value="{{ $maxViews }}" @endisset>
                                            </div>
                                            <label>Posts Likes</label>
                                            <div class="counting">
                                                <input type="number" placeholder="Min" name="min_likes"
                                                    @isset($minLikes) value="{{ $minLikes }}" @endisset>
                                                <i class="fal fa-arrows-h"></i>
                                                <input type="number" placeholder="Max" name="max_likes"
                                                    @isset($maxLikes) value="{{ $maxLikes }}" @endisset>
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
                            <a href="{{ route('user.post_detail', $post->id) }}">
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
                                            <p class="para">{!! $post->description !!}</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
@endsection

@push('js')
    <script>
        function searching_username_func() {
            var username = $('#searching_username').val();
            var formData = new FormData();
            formData.append('_token', $('meta[name="csrf-token"]').attr('content'));
            formData.append('username', username);
            $.ajax({
                url: "{{ route('checkout.findUsernameList') }}",
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                success: function(res) {
                    if (res.status) {
                        $('#search_username_list_div').removeClass('d-none');
                        if (res.list.length > 0) {
                            var list_html = '';
                            $.each(res.list, function(index, val) {
                                var img = '{{ asset('user_asset/img/profile') }}/profile.png';
                                list_html += "<li id='li_user_" + val.id +
                                    "' onclick='selectUser(this)'><img src='" + img + "'> " + val
                                    .username + "</li>";
                            });
                            $('#search_username_list_ul').html(list_html);
                        } else {
                            $('#search_username_list_div').addClass('d-none');
                            $('#search_username_list_ul').html('');
                        }
                    } else {
                        toastr.error(res.msg);
                        $('#search_username_list_div').addClass('d-none');
                        $('#search_username_list_ul').html('');
                    }
                }
            });
        }

        function selectUser(obj) {
            $('#searching_username').val(($(obj).text()));
            $('#search_username_list_div').addClass('d-none');
        }
    </script>
@endpush
