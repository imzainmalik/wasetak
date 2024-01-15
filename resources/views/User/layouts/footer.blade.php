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
							<input type="text" placeholder="Enter your e-mail address">
							<input type="submit" class="theme-btn">
						</form>
					</div>
				</div>
				<div class="col-md-2">
					<div class="widget">
						<h5>Quick links</h5>
						<ul class="lin">
							<li><a href="{{ route('user.how_it_work') }}">How It Works</a></li>
							<li><a href="javascript:void(0)">Earn Money</a></li>
							<li><a href="{{route('user.start_checkout')}}">Start Checkout</a></li>
							<li><a href="{{route('user.stay_connected')}}">Stay Connected</a></li>
							<li><a href="{{route('user.search_listing')}}">Search Listings</a></li>
							<li><a href="{{route('user.doc')}}">Advertise</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-4">
					<div class="widget">
						<h5>Contact us</h5>
						<ul class="deta">
							<li><a href="mailto:wasetak125@example.com">Email : {{ settings()->web_email }}</a></li>
							<li><a href="tel:854764456456">Phone : {{ settings()->web_phone }}</a></li>
						</ul>
						<div class="social">
                            <a href="{{ settings()->facebook_link ? settings()->facebook_link : 'javascript:void(0)' }}"><i class="fab fa-facebook-f"></i></a>
                            <a href="{{ settings()->insta_link ? settings()->insta_link : 'javascript:void(0)'}}"><i class="fab fa-instagram"></i></a>
                            <a href="{{ settings()->twitter_link ? settings()->twitter_link : 'javascript:void(0)'}}"><i class="fab fa-twitter"></i></a>
                            <a href="{{ settings()->youtube_link ? settings()->youtube_link : 'javascript:void(0)'}}"><i class="fab fa-youtube"></i></a>
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
					<a href="#">Terms and Conditions</a>
					<a href="#">privacy policy</a>
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
				<input type="text" value="https//wasetakco/t/new-fresh-panels-musician-1000-public-figure-5000-entrepreneur-5500/869215/65?u">
				<img src="{{asset('user_asset/img/card41.png')}}" alt="">
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
			<p class="para">!Sorry Service requires that the seller starts the ticket. Please Contact the seller and ask him to start a ticket. Thank You</p>
			<p class="para mt-4"><strong>!For now, you don't have to do anything. Thank you</strong></p>
		</div>
	</section>
	<a class="closeBtn"><i class="fal fa-times"></i></a>
</section>


<!-- ticket -->
<section dir="rtl" class="modal modalWindow ticket" id="popupSix">
	<section class="modalWrapper">
		<p class="para">!Sorry Service requires that the seller starts the ticket. Please Contact the seller and ask him to start a ticket. Thank You</p>
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
							<div class="btn-up">Upload</div><img src="{{asset('user_asset/img/card94.png')}}" alt="">
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
								<img src="{{asset('user_asset/img/card16.png')}}" class="img1" alt="">
								<img src="{{asset('user_asset/img/card47.png')}}" class="img2" alt="">
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
					<a href="#" class="theme-btn1">Message <img src="{{asset('user_asset/img/card91.png')}}" alt=""></a>
					<a href="#" class="theme-btn2">Chat <img src="{{asset('user_asset/img/card92.png')}}" alt=""></a>
					<a href="#" class="theme-btn2">Follow <img src="{{asset('user_asset/img/card93.png')}}" alt=""></a>
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
			background-image: url({{ $user_details->cover_photo }});
			background-repeat: no-repeat;
			background-size: cover;">

            <section class="modalWrapper">
                <div class="profile-icon-wrap">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="boxed-imaged">
                                        <img src="{{ $my_bookmark_post->bookmarksPostDetails->getUserInfo->d_picture }}"
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
							<img src="{{asset('user_asset/img/card28.png')}}" alt="" class="me-3">
						</div>
					</div>
					<div class="col-md-12">
						<div class="chat-message-wrap justify-content-start">
							<img src="{{asset('user_asset/img/card28.png')}}" alt="" class="ms-3">
							<div>
								<h6>Hopper <span>23:00PM</span></h6>
								<p class="para">i am good what about you</p>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="message-type">
							<input type="text" placeholder="........write here">
							<img src="{{asset('user_asset/img/card108.png')}}" alt="">
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
								<img src="{{asset('user_asset/img/card16.png')}}" class="img1" alt="">
							</div>
						</div>
						<div class="col-md-9">
							<h3>Hooper</h3>
							<h6><img src="{{asset('user_asset/img/card34.png')}}" alt=""> Verified Identity </h6>
						</div>
						<div class="col-md-12">
							<p class="located">Posted 30 mins ago <span>Joined</span> Feb 25, 17</p>
							<div class="review-star">
								<span>Reputation</span>
								<img src="{{asset('user_asset/img/card140.png')}}" alt="">
								<img src="{{asset('user_asset/img/card140.png')}}" alt="">
								<img src="{{asset('user_asset/img/card140.png')}}" alt="">
								<img src="{{asset('user_asset/img/card140.png')}}" alt="">
								<img src="{{asset('user_asset/img/card140.png')}}" alt="">
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
