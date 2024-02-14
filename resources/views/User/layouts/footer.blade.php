<div class="main-footer">
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="widget padd-l">
                        <a href="{{ route('user.index') }}" class="logo">
                            {{-- Wasetak --}}
                            <img src="{{ asset(settings()->web_logo) }}" alt="">
                        </a>
                        <p class="para">{{ settings()->web_slogan }}</p>
                        <form class="form">
                            <input type="email" name="subs_email" id="subs_email" required
                                placeholder="Enter your e-mail address">
                            <button type="button" id="subscribe_btn" class="theme-btn"
                                style="margin-right: 237px;">Submit</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="widget">
                        <h5>Quick links</h5>
                        <ul class="lin">
                            @foreach (admin_pages() as $k => $admin_page)
                            @if ($k == 1)
                            <li><a href="javascript:void(0)">{{ $admin_page->name }}</a></li>
                            @else
                            <li><a href="{{ route('user.userPage', [$admin_page->slug])}}">{{ $admin_page->name }}</a></li>
                            @endif
                            @endforeach
                            <li><a href="{{ route('user.search_listing') }}">Search Listing</a></li>
                            {{-- <li><a href="{{ route('user.doc') }}">Advertise</a></li> --}}
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="widget">
                        <h5>Contact us</h5>
                        <ul class="deta">
                            <li><a href="mailto:{{ settings()->web_email }}">Email : {{ settings()->web_email }}</a></li>
                            <li><a href="tel:{{ settings()->web_phone }}">Phone : {{ settings()->web_phone }}</a></li>
                        </ul>
                        <div class="social">
                            <a
                                href="{{ settings()->facebook_link ? settings()->facebook_link : 'javascript:void(0)' }}"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a href="{{ settings()->insta_link ? settings()->insta_link : 'javascript:void(0)' }}"><i
                                    class="fab fa-instagram"></i></a>
                            <a href="{{ settings()->twitter_link ? settings()->twitter_link : 'javascript:void(0)' }}"><i
                                    class="fab fa-twitter"></i></a>
                            <a href="{{ settings()->youtube_link ? settings()->youtube_link : 'javascript:void(0)' }}"><i
                                    class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="copyright">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p>حقوق الطبع والنشر لعام 2023 ، جميع الحقوق محفوظة لدى وسيط</p>
                </div>
                <div class="col-md-6 text-e">
                    <a href="{{route('user.about')}}?ts=terms-and-service">Terms and Service</a>
                    <a href="{{route('user.about')}}?pp=privacy-policy">privacy policy</a>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="modal overlay"></section>

<!-- share -->
<section dir="rtl" class="modal modalWindow share" id="popupTwo">
    <section class="modalWrapper">
        <h2>Share Post #65 <span>Apr 10, 4:47 PM</span></h2>
        <span class="base">:Share a link to this post</span>
        <form class="form">
            <div class="copy">
                <input type="text"
                    value="https//wasetakco/t/new-fresh-panels-musician-1000-public-figure-5000-entrepreneur-5500/869215/65?u">
                <img src="{{ asset('user_asset/img/card41.png') }}" alt="">
            </div>
            <button class="theme-btn"><i class="fas fa-plus-circle"></i> New Topic</button>
        </form>
    </section>
    <a class="closeBtn"><i class="fal fa-times"></i></a>
</section>







<!-- checkout -->
<section dir="rtl" class="modal modalWindow checkout" id="popupSeven">
    <section class="modalWrapper">
        <div>
            <h2>!Thank you for starting a checkout ticket</h2>
            <p class="para">!Sorry Service requires that the seller starts the ticket. Please Contact the seller and
                ask him to start a ticket. Thank You</p>
            <p class="para mt-4"><strong>!For now, you don't have to do anything. Thank you</strong></p>
        </div>
    </section>
    <a class="closeBtn"><i class="fal fa-times"></i></a>
</section>
<!-- ticket -->
<section dir="rtl" class="modal modalWindow ticket" id="popupSix">
    <section class="modalWrapper">
        <p class="para">!Sorry Service requires that the seller starts the ticket. Please Contact the seller and ask
            him to start a ticket. Thank You</p>
    </section>
    <a class="closeBtn"><i class="fal fa-times"></i></a>
</section>

<!-- dismiss -->
<section dir="rtl" class="modal modalWindow dismiss" id="popupEight">
    <section class="modalWrapper">
        <div>
            <h2>Dismiss All Unread</h2>
            <p class="para">Stop tracking these topics so they never show up as unread for me again</p>
            <a href="#" class="theme-btn cancel">Dismiss <i class="fal fa-check-circle"></i></a>
        </div>
    </section>
    <a class="closeBtn"><i class="fal fa-times"></i></a>
</section>

<!-- invite -->
<section dir="rtl" class="modal modalWindow invite" id="popupNine">
    <section class="modalWrapper">
        <div>
            <div class="shared">
                <p class="para">Invite saved. Share this link to instantly grant access to this site</p>
                <div class="form">
                    <input type="text" placeholder="https:77wasetakinvite.com">
                    <button><i class="fas fa-copy"></i></button>
                </div>
            </div>
            <h2>Create Invite</h2>
            <div class="restrict">
                <label><i class="fas fa-envelope"></i> Restrict to </label>
                <input type="text">
            </div>
            <div class="users">
                <label><i class="fas fa-user"></i> Max users </label>
                <input type="text">
            </div>
            <div class="expires">
                <label><i class="fas fa-clock"></i> Expires in 3 months </label>
            </div>
            <a href="#" class="theme-btn1"> Save invite <i class="fal fa-link"></i></a>
            <a href="#" class="theme-btn2"> Save and send Email <i class="fas fa-envelope"></i></a>
        </div>
    </section>
    <a class="closeBtn"><i class="fal fa-times"></i></a>
</section>

<!-- profile picture -->
<section dir="rtl" class="modal modalWindow profile-picture" id="popupEleven">
    <section class="modalWrapper">
        <div>
            <p class="rad"><input type="radio"> <span>M</span> System assigned profile picture</p>
            <div class="row align-items-center">
                <div class="col-md-9">
                    <p class="rad"><input type="radio"> Add a custom picture</p>
                </div>
                <div class="col-md-3">
                    <div class="file">
                        <label>
                            <input type="file" hidden="" class="custom-file-input">
                            <div class="btn-up">Upload</div><img src="{{ asset('user_asset/img/card94.png') }}"
                                alt="">
                        </label>
                    </div>
                </div>
            </div>
            <a href="#" class="theme-btn1">Save changes</a>
            <a href="#" class="theme-btn2 cancel"> Cancel</a>
        </div>
    </section>
</section>

<!-- profile icon -->
<section dir="rtl" class="modal modalWindow profile-icon" id="popupTen">
    <section class="modalWrapper">
        <div class="profile-icon-wrap">
            <div class="row">
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="boxed-imaged">
                                <img src="{{ asset('user_asset/img/card16.png') }}" class="img1" alt="">
                                <img src="{{ asset('user_asset/img/card47.png') }}" class="img2" alt="">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h3>Hooper123@</h3>
                            <h5> <span>VIP Member</span> | Hooper Smith</h5>
                            <h6>BIO</h6>
                            <p class="para">Vouched-for Member🏅 | Organic PR and IG Services</p>
                            <p class="para">Diamond Club</p>
                            <p class="para"> Featured Topic</p>
                        </div>
                        <div class="col-md-12">
                            <p class="located"><i class="fas fa-map-marker-alt"></i> Ajman United Arab Emirates </p>
                            <p class="truted">Trusted by 1000+ Clients. Exceptional Service. Proven Results</p>
                            <h6 class="reput">Reputation</h6>
                            <div class="review-star">
                                <a href="#" class="theme-btn3">Feedback</a>
                                <span dir="ltr">(152 reviews)</span>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <a href="#" class="theme-btn1">Message <img src="{{ asset('user_asset/img/card91.png') }}"
                            alt=""></a>
                    <a href="#" class="theme-btn2">Chat <img src="{{ asset('user_asset/img/card92.png') }}"
                            alt=""></a>
                    <a href="#" class="theme-btn2">Follow <img src="{{ asset('user_asset/img/card93.png') }}"
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
                        <ul class="rate">
                            <li><span>Rank: 13th</span></li>
                            <li><span>Total purchases: $64,839</span></li>
                            <li><span>Total sales: $502,389</span></li>
                        </ul>
                        <span class="mins">Seen 12 mins ago</span>
                        <ul class="list-categ">
                            <li><a href="#" class="theme-btn2">Regular</a></li>
                            <li><a href="#" class="theme-btn2">ID Verified</a></li>
                            <li><a href="#" class="theme-btn2">Anniversary</a></li>
                            <li><a href="#" class="theme-btn2" dir="ltr">+10 more</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
<!-- edit bookmark -->
{{-- <section dir="rtl" class="modal modalWindow edit-bookmark" id="popupTwelve">
	<section class="modalWrapper">
		<div class="bookmark">
			<h2>Edit bookmark</h2>
			<div class="setting">
				<input type="text" placeholder="What is this bookmark for">
				<img src="{{asset('user_asset/img/card99.png')}}" alt="">
			</div>
			<div class="notified">
				<h4>After you are notified</h4>
				<select>
					<option value="keep bookmark and clear reminder">keep bookmark and clear reminder</option>
					<option value="Keep Bookmark">Keep Bookmark</option>
					<option value="Delete Bookmark">Delete Bookmark</option>
					<option value="Delete bookmark once i reply ">Delete bookmark once i reply </option>
				</select>
			</div>
			<div class="remind">
				<h4>Remind me</h4>
				<ul>
					<li><img src="{{asset('user_asset/img/card100.png')}}" alt=""><a href="#">Later Today</a></li>
					<li><img src="{{asset('user_asset/img/card101.png')}}" alt=""><a href="#">Tomorrow</a></li>
					<li><img src="{{asset('user_asset/img/card102.png')}}" alt=""><a href="#">This Weekend</a></li>
					<li><img src="{{asset('user_asset/img/card103.png')}}" alt=""><a href="#">Monday</a></li>
					<li><img src="{{asset('user_asset/img/card104.png')}}" alt=""><a href="#">Next Month</a></li>
					<li><img src="{{asset('user_asset/img/card105.png')}}" alt=""><a href="#">Last custom date time</a></li>
				</ul>
			</div>
			<div class="reminder">
				<h4>Custom date and time</h4>
				<div class="row">
					<div class="col-md-7">
						<div class="timer">
							<img src="{{asset('user_asset/img/card106.png')}}" alt="">
							<input type="text" placeholder="2023-04-27">
						</div>
						<input type="text" placeholder="01:00 PM">
					</div>
				</div>
				<h4 class="my-3">Relative</h4>
				<div class="row">
					<div class="col-md-8">
						<input type="text">
					</div>
					<div class="col-md-4">
						<select>
							<option value="Minutes">Minutes</option>
							<option value="Hours">Hours</option>
							<option value="Days">Days</option>
							<option value="months">months</option>
							<option value="Years">Years</option>
						</select>
					</div>
				</div>
			</div>
			<a href="#" class="save-book">Remove reminder and save bookmark</a>
			<div class="row">
				<div class="col-md-8">
					<a href="#" class="theme-btn1">Save</a>
					<a href="#" class="theme-btn2">Cancel</a>
				</div>
				<div class="col-md-4 text-e">
					<a href="#" class="trash">
						<img src="{{asset('user_asset/img/card107.png')}}" alt="">
					</a>
				</div>
			</div>
		</div>
	</section>
	<a class="closeBtn"><i class="fal fa-times"></i></a>
</section> --}}
{{-- <section dir="rtl" class="modal modalWindow edit-bookmark" id="popupTwelve">
    <section class="modalWrapper">
        <div class="bookmark">
            <h2>Edit bookmark</h2>
            <div class="setting">
                <input type="text" placeholder="What is this bookmark for">
                <span class="pop-trigger"> <img src="{{('user_asset/img/card99.png')}}" alt="" data-toggle="tooltip"
                        title="Show"></span>
            </div>
            <div class="pop-content-hide">
                <div class="notified">
                    <h4>After you are notified</h4>
                    <select>
                        <option value="keep bookmark and clear reminder">keep bookmark and clear reminder</option>
                        <option value="Keep Bookmark">Keep Bookmark</option>
                        <option value="Delete Bookmark">Delete Bookmark</option>
                        <option value="Delete bookmark once i reply ">Delete bookmark once i reply </option>
                    </select>
                </div>
            </div>
            <div class="remind">
                <h4>Remind me</h4>
                <div class="bookmark-opt">
                    <label class="container"><img src="{{('user_asset/img/card100.png')}}" alt=""><a href="#">Later Today
                            <span>Fri, 8:00
                                am</span></a>
                        <input type="radio" checked="checked" name="bookmark-radio">
                        <span class="checkmark"></span>
                    </label>
                    <label class="container"><img src="{{('user_asset/img/card101.png')}}" alt=""><a href="#">Tomorrow <span>Sat,
                                8:00 am</span></a>
                        <input type="radio" name="bookmark-radio">
                        <span class="checkmark"></span>
                    </label>
                    <label class="container"><img src="{{('user_asset/img/card102.png')}}" alt=""><a href="#">This Weekend
                            <span>Jan, 8:00
                                am</span></a>
                        <input type="radio" name="bookmark-radio">
                        <span class="checkmark"></span>
                    </label>
                    <label class="container"><img src="{{('user_asset/img/card103.png')}}" alt=""><a href="#">Monday <span>Feb,
                                8:00 am</span></a>
                        <input type="radio" name="bookmark-radio">
                        <span class="checkmark"></span>
                    </label>
                    <label class="container"><img src="{{('user_asset/img/card104.png')}}" alt=""><a href="#">Next Month
                            <span>Jan, 8:00 am</span></a>
                        <input type="radio" name="bookmark-radio">
                        <span class="checkmark"></span>
                    </label>
                    <label class="container"><img src="{{('user_asset/img/card105.png')}}" alt=""><a href="#">Last custom date
                            time <span>Fri, 8:00
                                am</span></a>
                        <input type="radio" name="bookmark-radio">
                        <span class="checkmark"></span>
                    </label>
                    <label class="container custom-date-trigger"><img src="{{('user_asset/img/card105.png')}}" alt=""><a href="#">Custom date and
                            time</a>
                        <input type="radio" name="bookmark-radio">
                        <span class="checkmark"></span>
                    </label>
                </div>
            </div>
            <div class="reminder">
                <!-- <h4>Custom date and time</h4> -->
                <div class="custom-time">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="timer">
                                <img src="{{('user_asset/img/card106.png')}}" alt="">
                                <input type="text" placeholder="2023-04-27">
                            </div>
                            <input type="text" placeholder="01:00 PM">
                        </div>
                    </div>
                </div>
                <h4 class="my-3">Relative</h4>
                <div class="row">
                    <div class="col-md-8">
                        <input type="text">
                    </div>
                    <div class="col-md-4">
                        <select>
                            <option value="Minutes">Minutes</option>
                            <option value="Hours">Hours</option>
                            <option value="Days">Days</option>
                            <option value="months">months</option>
                            <option value="Years">Years</option>
                        </select>
                    </div>
                </div>
            </div>
            <a href="#" class="save-book">Remove reminder and save bookmark</a>
            <div class="row">
                <div class="col-md-8">
                    <a href="#" class="theme-btn1">Save</a>
                    <a href="#" class="theme-btn2">Cancel</a>
                </div>
                <div class="col-md-4 text-e">
                    <a href="#" class="trash">
                        <img src="{{('user_asset/img/card107.png')}}" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <a class="closeBtn"><i class="fal fa-times"></i></a>
</section> --}}
@isset($my_bookmark_posts)
    @foreach ($my_bookmark_posts as $my_bookmark_post)
        @php
            $user_details = App\Models\UserDetails::where('id', $my_bookmark_post->bookmarksPostDetails->getUserInfo->id)->first();
        @endphp
        <section dir="rtl" class="modal modalWindow profiles-icon" id="popupFifteen_{{ $my_bookmark_post->id }}"
            style="display: none;
			background-image: url({{ isset($user_details->cover_photo) ? $user_details->cover_photo : '' }});
			background-repeat: no-repeat;
			background-size: cover;">

            <section class="modalWrapper">
                <div class="profile-icon-wrap">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="boxed-imaged">
                                        <img src="{{ $my_bookmark_post->bookmarksPostDetails->getUserInfo->d_picture ?? '' }}"
                                            class="img1" alt="">
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <h3>{{ $my_bookmark_post->bookmarksPostDetails->getUserInfo->name }}</h3>
                                    <h6><img src="{{ asset('user_asset/img/card34.png') }}" alt=""> Verified
                                        Identity </h6>
                                </div>
                                <div class="col-md-12">
                                    <p class="located">Posted
                                        {{ $my_bookmark_post->bookmarksPostDetails->created_at->diffForHumans() }}
                                        <span>Joined</span>
                                        {{ $my_bookmark_post->bookmarksPostDetails->getUserInfo->created_at->diffForHumans() }}
                                    </p>
                                    <div class="review-star">
                                        <span>Reputation</span>
                                        <img src="{{ asset('user_asset/img/card140.png') }}" alt="">
                                        <img src="{{ asset('user_asset/img/card140.png') }}" alt="">
                                        <img src="{{ asset('user_asset/img/card140.png') }}" alt="">
                                        <img src="{{ asset('user_asset/img/card140.png') }}" alt="">
                                        <img src="{{ asset('user_asset/img/card140.png') }}" alt="">
                                        <span dir="ltr">(1 reviews)</span>
                                        <a href="#" class="theme-btn3">Feedback</a>
                                    </div>
                                    {{-- <a href="#" class="theme-btn2"> Anniversary <i class="far fa-clock"></i></a> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 text-e">
                            <a href="#" class="theme-btn1">Message</a>
                            <a href="#" class="theme-btn1">Chat</a>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    @endforeach
@endisset
<!-- chat box -->
<section dir="rtl" class="modal modalWindow chat-box" id="popupThirteen">
    <section class="modalWrapper">
        <div class="chat-boxed">
            <h4>Hopper</h4>
            <div class="chat-message">
                <div class="row">
                    <div class="col-md-12">
                        <div class="chat-message-wrap justify-content-end">
                            <div>
                                <h6 class="text-start"><span class="ms-1">23:00PM</span>Hopper </h6>
                                <p class="para">Hey ! How are you</p>
                            </div>
                            <img src="{{ asset('user_asset/img/card28.png') }}" alt="" class="me-3">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="chat-message-wrap justify-content-start">
                            <img src="{{ asset('user_asset/img/card28.png') }}" alt="" class="ms-3">
                            <div>
                                <h6>Hopper <span>23:00PM</span></h6>
                                <p class="para">i am good what about you</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="message-type">
                            <input type="text" placeholder="........write here">
                            <img src="{{ asset('user_asset/img/card108.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <a class="closeBtn"><i class="fal fa-times"></i></a>
</section>
<!-- profiles icon -->
<section dir="rtl" class="modal modalWindow profiles-icon" id="popupFifteen">
    <section class="modalWrapper">
        <div class="profile-icon-wrap">
            <div class="row">
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="boxed-imaged">
                                <img src="{{ asset('user_asset/img/card16.png') }}" class="img1" alt="">
                            </div>
                        </div>
                        <div class="col-md-9">
                            <h3>Hooper</h3>
                            <h6><img src="{{ asset('user_asset/img/card34.png') }}" alt=""> Verified Identity
                            </h6>
                        </div>
                        <div class="col-md-12">
                            <p class="located">Posted 30 mins ago <span>Joined</span> Feb 25, 17</p>
                            <div class="review-star">
                                <span>Reputation</span>
                                <img src="{{ asset('user_asset/img/card140.png') }}" alt="">
                                <img src="{{ asset('user_asset/img/card140.png') }}" alt="">
                                <img src="{{ asset('user_asset/img/card140.png') }}" alt="">
                                <img src="{{ asset('user_asset/img/card140.png') }}" alt="">
                                <img src="{{ asset('user_asset/img/card140.png') }}" alt="">
                                <span dir="ltr">(1 reviews)</span>
                                <a href="#" class="theme-btn3">Feedback</a>
                            </div>
                            <a href="#" class="theme-btn2"> Anniversary <i class="far fa-clock"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-e">
                    <a href="#" class="theme-btn1">Message</a>
                    <a href="#" class="theme-btn1">Chat</a>
                </div>
            </div>
        </div>
    </section>
</section>

@php
    $all_categories = [];
    $c_name = '';
    $p_name = '';
    if (isset($req->p_id)) {
        $p_name = App\Models\ForumCategory::where('is_active', 1)
            ->where('id', $req->p_id)
            ->first()->name;
        if (isset($req->p_id) && isset($req->c_id)) {
            $c_name = App\Models\SubCategory::where('is_active', 1)
                ->where('id', $req->c_id)
                ->where('forum_category_id', $req->p_id)
                ->first()->name;
        }
    }
    $categories = App\Models\ForumCategory::where('is_active', 1)->get();
    foreach ($categories as $key => $value) {
        $all_categories[$key]['id'] = $value->id;
        $all_categories[$key]['name'] = $value->name;
        $all_categories[$key]['description'] = $value->description;
        $all_categories[$key]['color'] = $value->color;
        $all_categories[$key]['count'] = $value->get_posts->where('is_active', 1)->count();
        $all_categories[$key]['posts'] = $value->get_posts()->orderBy('id', 'Desc')->where('is_active', 1)->take(5)->get();

        $sub_cats = App\Models\SubCategory::where('forum_category_id', $value->id)->get();

        foreach ($sub_cats as $k => $val) {
            $all_categories[$key][$k]['child_id'] = $val->id;
            $all_categories[$key][$k]['child_name'] = $val->name;
            $all_categories[$key][$k]['child_color'] = $val->color;
            $all_categories[$key][$k]['child_description'] = $val->description;
        }
    }
@endphp
<section class="sec18 modal modalWindow createTopics" id="popupSixteen">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8 col-10">
                <h5>Create a new topic</h5>
            </div>
            <div class="col-md-4 col-2 text-e">
                <a href="#"> <i class="fal fa-chevron-down"></i></a>
                <div class="cancel closeBtns" close-modal=""><img src="assets/images/card152.png" alt="">
                </div>
            </div>
        </div>
        <form method="post" action="{{ route('user.create_post') }}">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-6">
                            <input type="text" class="form-control" name="title" required
                                placeholder="Title" />
                        </div>
                        <div class="col-6">
                            <select name="post_type" class="form-control" required id="post_type">
                                <option value="">Post type</option>
                                <option value="0">Discussion</option>
                                <option value="1">Trading</option>
                                <option value="2">Auction</option>
                            </select>
                        </div>
                        <div class="col-6">
                            <select class="form-control" name="category" required id="category">
                                <option>Select Category</option>
                                @foreach ($all_categories as $item)
                                    @if (isset($item[0]) && is_array($item[0]))
                                        @foreach ($item as $child)
                                            @if (is_array($child))
                                                <option value="{{ $child['child_id'] }}">
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
                            <input type="text" class="form-control" name="price" placeholder="Price in USD" />
                        </div>
                        <div class="col-6">
                            <label for="">Auction starting date</label>
                            <input type="date" class="form-control" name="bid_start_date" required />
                        </div>

                        <div class="col-6">
                            <label for="">Auction ending date</label>
                            <input type="date" class="form-control" name="bid_end_date" required />
                        </div>
                        <div class="col-6">
                            <input type="text" class="form-control" name="handle_url"
                                placeholder="@handle URL" />
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
{{-- <footer>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="footer_col">
                    <a href="'#">
                        <img src="{{ asset(settings()->web_logo) }}">
                    </a>
                    <p>{{settings()->web_slogan}}</p>
                    <div class="newsletter">
                        <input type="search" class="form-control" placeholder="Enter your e-mail address" name="">
                        <button class="button">Subscribe</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer_quick_links">
                    <h4>Quick links</h4>
                    <ul>
                        <li><a href="#">How It Works</a></li>
                        <li><a href="#">Earn Money</a></li>
                        <li><a href="#">Start Checkout</a></li>
                        <li><a href="#">Stay Connected</a></li>
                        <li><a href="#">Search Listings</a></li>
                        <li><a href="#">Advertise</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer_contact">
                    <h4>Contact us</h4>
                    <p>Email : {{ settings()->web_email }}</p>
                    <p>Phone : {{ settings()->web_phone }}</p>
                    <ul class="social_footer">
                        <li><a href="{{ settings()->facebook_link ? settings()->facebook_link : 'javascript:void(0)' }}"><i class="ri-facebook-fill"></i></a></li>
                        <li><a href="{{ settings()->insta_link ? settings()->insta_link : 'javascript:void(0)'}}"><i class="ri-instagram-line"></i></a></li>
                        <li><a href="{{ settings()->twitter_link ? settings()->twitter_link : 'javascript:void(0)'}}"><i class="ri-twitter-fill"></i></a></li>
                        <li><a href="{{ settings()->youtube_link ? settings()->youtube_link : 'javascript:void(0)'}}"><i class="ri-youtube-fill"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>حقوق الطبع والنشر لعام 2023 ، جميع الحقوق محفوظة لدى وسيط</p>
                </div>
                <div class="col-md-6">
                    <div class="copyright_menu">
                        <a href="#">Terms and Conditions</a>
                        <a href="#">Privacy Policy</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer> --}}
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

        $(document ).ready(function() {
            all_notification();
        })
    </script>
@endpush
