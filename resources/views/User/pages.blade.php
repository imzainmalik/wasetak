@extends('User.layouts.master')
@section('content')
    <section class="sec4 sect4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>{{ $page->heading }} </h3>
                    <span class="base">{{ $page->sub_heading }}</span>
                </div>
            </div>
            <div class="row mar-t">
                <div class="col-md-1 pe-md-0">
                    <p class="par">{{ $page->getAdminInfo ? substr($page->getAdminInfo->first_name, 0, 1) : '' }}</p>
                </div>
                <div class="col-md-10">
                    <div class="boxed3">
                        <h4>{{ $page->getAdminInfo ? $page->getAdminInfo->first_name . ' ' . $page->getAdminInfo->last_name : '' }}
                        </h4>
                        {!! html_entity_decode($page->content) !!}
                        {{-- <div class="boxed-head">
                            <h1>WASETAK</h1>
                        </div> --}}
                        {{-- <h3 class="head3">Earn 20-30% wasetak commission from every <br> !member you invite for life</h3>
                        <p class="para">many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
                        <h3 class="head3">!It’s easy to join</h3>
                        <p class="para">many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
                        <h3 class="head3">!Quick payouts with low thresholds</h3>
                        <p class="para">many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p> --}}
                        <div class="row mar-t align-items-center">
                            <div class="col-md-6">
                                <div class="com">
                                    <a href="#"><img src="{{ asset('user_asset/img/card14.png') }}"
                                            alt=""><span>Reply</span> </a>
                                    <a href="#"><img src="{{ asset('user_asset/img/card18.png') }}"
                                            alt=""><span>PM User</span></a>
                                    @if (auth()->check())
                                        <span id="Pagelike" dir="ltr"> {{ $page->getPagelikes->count() }} Likes <i
                                                class="{{ $like_check ? 'fa-solid' : 'fa-regular' }} fa-thumbs-up fa-lg"
                                                style="color: #7a7a7a;"></i></span>
                                    @else
                                        <span dir="ltr" class="login"> {{ $page->getPagelikes->count() }} Likes <i
                                                class="fa-regular fa-thumbs-up fa-lg" style="color: #7a7a7a;"></i></span>
                                    @endif
                                    {{-- <a href="#" ><img src="{{asset('user_asset/img/card23.png')}}" alt=""><span>144</span></a> --}}

                                    {{-- <a href="#"><img src="{{asset('user_asset/img/card19.png')}}" alt=""></a>
                                    <a href="#"><img src="{{asset('user_asset/img/card20.png')}}" alt=""></a> --}}

                                    {{-- <a href="javascript:void(0);"  data-toggle="modal" data-target="#addtoany"><img src="{{asset('user_asset/img/card21.png')}}" alt=""></a> --}}
                                </div>
                            </div>
                            <div class="col-md-6 text-e">
                                {{-- <span><span class="com2">7 days</span> Last Reply </span> --}}
                                <span><span class="com2">{{ $page->created_at->format('M j') }}</span> Created </span>
                            </div>
                        </div>
                    </div>
                    <div class="boxed7">
                        <ul class="categ">
                            {{-- data-popup="popupTwo" --}}

                            <li><a href="#" data-toggle="modal" data-target="#addtoany"><img
                                        src="{{ asset('user_asset/img/card21.png') }}" alt="">share</a>

                            </li>
                            @if (auth()->check())
                                <li> <a href="#" class="modalButton check_bookmark" data-popup="popupTwelve"><i
                                            class="fa-{{ $book_check ? 'solid' : 'regular' }} fa-bookmark lg"></i> Bookmark
                                    </a></li>
                                <li><a href="#" class="modalButton" data-popup="popupThree"><img
                                            src="{{ asset('user_asset/img/card20.png') }}" alt=""> Flag </a></li>
                            @else
                                <li> <a href="#" class="modalButton login"><i class="fa-regular fa-bookmark"></i>
                                        Bookmark </a></li>
                                {{-- <img src="{{asset('user_asset/img/card19.png')}}" alt="">  --}}
                                <li><a href="#" class="modalButton login"><img
                                            src="{{ asset('user_asset/img/card20.png') }}" alt=""> Flag </a></li>
                            @endif
                            <!-- <li><a href="#"><img src="{{ asset('user_asset/img/card32.png') }}" alt=""> Tracking <i class="fas fa-sort-down"></i></a></li> -->
                            <li>
                                <div class="dropdown2">
                                    @if ($user_notified)
                                        @if ($user_notified->notification_type == 1)
                                            <a href="javascript:void(0)" class="dropbtn"><span><img
                                                        src="{{ asset('user_asset/img/card37.png') }}"
                                                        alt=""></span>
                                                Tracking
                                                <i class="fas fa-sort-down"></i>
                                            </a>
                                        @elseif($user_notified->notification_type == 2)
                                            <a href="javascript:void(0)" class="dropbtn"><span><img
                                                        src="{{ asset('user_asset/img/card38.png') }}"
                                                        alt=""></span>Tracking <i class="fas fa-sort-down"></i></a>
                                        @elseif($user_notified->notification_type == 4)
                                            <a href="javascript:void(0)" class="dropbtn"><span><img
                                                        src="{{ asset('user_asset/img/card40.png') }}"
                                                        alt=""></span>Tracking <i class="fas fa-sort-down"></i></a>
                                        @else
                                            <a href="javascript:void(0)" class="dropbtn"><span><img
                                                        src="{{ asset('user_asset/img/card39.png') }}"
                                                        alt=""></span>Tracking <i class="fas fa-sort-down"></i></a>
                                        @endif
                                    @else
                                        @if (auth()->check())
                                            <a href="javascript:void(0)" class="dropbtn"><span><img
                                                        src="{{ asset('user_asset/img/card39.png') }}"
                                                        alt=""></span>Tracking <i class="fas fa-sort-down"></i></a>
                                        @endif
                                    @endif

                                    <div class="dropdown-content">
                                        <a href="#">
                                            <div class="list">
                                                <img src="{{ asset('user_asset/img/card37.png') }}" alt="">
                                                <div>
                                                    {{-- <h5>watching</h5> --}}
                                                    <h5>
                                                        <label>
                                                            <input type="radio" hidden name="status" value="1"
                                                                onchange="submitFormNotify()"> Watching
                                                        </label>
                                                    </h5>
                                                    <p class="para">you will be notified of every new reply in this topic
                                                        and a count of new replies will be shown</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="list">
                                                <img src="{{ asset('user_asset/img/card38.png') }}" alt="">
                                                <div>
                                                    <h5>
                                                        <label>
                                                            <input type="radio" hidden name="status" value="2"
                                                                onchange="submitFormNotify()"> Tracking
                                                        </label>
                                                    </h5>
                                                    <p class="para">A count of new replies will be shown for this
                                                        topic.you will be notifiedif someone mentions your @name or replies
                                                        to your</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="list">
                                                <img src="{{ asset('user_asset/img/card39.png') }}" alt="">
                                                <div>
                                                    <h5>
                                                        <label>
                                                            <input type="radio" hidden name="status" value="3"
                                                                onchange="submitFormNotify()"> Normal
                                                        </label>
                                                    </h5>
                                                    <p class="para">You will be notified if someone mentions your @name
                                                        or replies to you</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="list">
                                                <img src="{{ asset('user_asset/img/card40.png') }}" alt="">
                                                <div>
                                                    <h5>
                                                        <label>
                                                            <input type="radio" hidden name="status" value="4"
                                                                onchange="submitFormNotify()"> Muted
                                                        </label>
                                                    </h5>
                                                    <p class="para">you will never be notified of anything about this
                                                        topic, and it will not appear in latest</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-1 ps-0">
                    <div class="boxed6">
                        <span>Jan 2021</span>
                        <div class="bor-line">
                            <h6>1/254</h6>
                            <span>Jan 2021</span>
                        </div>
                        <span>13h ago</span>
                        @if (auth()->check())
                            <div class="dropdown2">
                                @if ($user_notified)
                                    @if ($user_notified->notification_type == 1)
                                        <button class="dropbtn"><span><img src="{{ asset('user_asset/img/card37.png') }}"
                                                    alt=""></span></button>
                                    @elseif($user_notified->notification_type == 2)
                                        <button class="dropbtn"><span><img src="{{ asset('user_asset/img/card38.png') }}"
                                                    alt=""></span></button>
                                    @elseif($user_notified->notification_type == 4)
                                        <button class="dropbtn"><span><img src="{{ asset('user_asset/img/card40.png') }}"
                                                    alt=""></span></button>
                                    @else
                                        <button class="dropbtn"><span><img src="{{ asset('user_asset/img/card39.png') }}"
                                                    alt=""></span></button>
                                    @endif
                                @else
                                    <button class="dropbtn"><span><img src="{{ asset('user_asset/img/card39.png') }}"
                                                alt=""></span></button>
                                @endif

                                <div class="dropdown-content">
                                    <a href="#">
                                        <div class="list">
                                            <img src="{{ asset('user_asset/img/card37.png') }}" alt="">
                                            <div>
                                                {{-- <h5>watching</h5> --}}
                                                <h5>
                                                    <label>
                                                        <input type="radio" hidden name="status" value="1"
                                                            onchange="submitFormNotify()"> Watching
                                                    </label>
                                                </h5>
                                                <p class="para">you will be notified of every new reply in this topic and
                                                    a count of new replies will be shown</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="list">
                                            <img src="{{ asset('user_asset/img/card38.png') }}" alt="">
                                            <div>
                                                <h5>
                                                    <label>
                                                        <input type="radio" hidden name="status" value="2"
                                                            onchange="submitFormNotify()"> Tracking
                                                    </label>
                                                </h5>
                                                <p class="para">A count of new replies will be shown for this topic.you
                                                    will be notifiedif someone mentions your @name or replies to your</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="list">
                                            <img src="{{ asset('user_asset/img/card39.png') }}" alt="">
                                            <div>
                                                <h5>
                                                    <label>
                                                        <input type="radio" hidden name="status" value="3"
                                                            onchange="submitFormNotify()"> Normal
                                                    </label>
                                                </h5>
                                                <p class="para">You will be notified if someone mentions your @name or
                                                    replies to you</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="list">
                                            <img src="{{ asset('user_asset/img/card40.png') }}" alt="">
                                            <div>
                                                <h5>
                                                    <label>
                                                        <input type="radio" hidden name="status" value="4"
                                                            onchange="submitFormNotify()"> Muted
                                                    </label>
                                                </h5>
                                                <p class="para">you will never be notified of anything about this topic,
                                                    and it will not appear in latest</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <a href="#fad"><img src="{{ asset('user_asset/img/card31.png') }}" alt=""></a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        @if (auth()->check())
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-1 pe-md-0">
                    </div>
                    <div class="col-md-10 boxed4" id="fad">
                        <div class="textarea">
                            {{-- <form action="{{ route('user.create_comment', $post->id) }}" method="post"
                        id="comment-form"> --}}
                            @csrf
                            <textarea class="form-control" placeholder="Message" name="comment" id="comment-text-area" cols="15"
                                rows="6" required></textarea>
                            <br>
                            <button class="btn btn-primary theme-btn1" type="button" id="comment-btn">Create
                                Comment
                            </button>
                            {{-- </form> --}}
                        </div>
                    </div>
                    <div class="col-md-1 pe-md-0">
                    </div>
                </div>
            </div>
        @endif
        @if (count($page_replies) > 0)
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-1 pe-md-0">
                    </div>
                    <div class="col-md-10 boxed4 ">
                        @foreach ($page_replies as $page_reply)
                            <div class="boxed5">
                                <div class="boxerd-img">
                                    <img src="{{ asset('user_asset/img/card29.png') }}" alt="">
                                    <h5>{{ $page_reply->getCommentedByUserInfo->name }}</h5>
                                </div>
                                <p class="para">{{ $page_reply->reply }}</p>
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <div class="com">
                                            {{-- <a href="#"><img src="{{asset('user_asset/img/card14.png')}}" alt=""><span>Reply</span> </a> --}}
                                            <a href="#"><img src="{{ asset('user_asset/img/card18.png') }}"
                                                    alt=""><span>PM User</span></a>

                                            {{-- @if (auth()->check())
                                            @php
                                                $comment_like_check = App\Models\LikedReply::where('user_id', auth()->user()->id)
                                                    ->where('reply_id', $page_reply->id)
                                                    ->first();
                                            @endphp
                                                <a href="#" class="comment_like" data-replyId="{{ $page_reply->id }}">
                                                    <i class="{{ $comment_like_check ? 'fa-solid' : 'fa-regular' }} fa-thumbs-up fa-lg"
                                                        style="color: #7a7a7a;"></i>
                                                    <span>{{ $page_reply->commentLikes->count() }}</span></a>
                                            @else
                                                <a href="#" data-replyId="{{ $page_reply->id }}">
                                                    <i class="fa-regular fa-thumbs-up fa-lg login"
                                                        style="color: #7a7a7a;"></i>
                                                    <span>{{ $page_reply->commentLikes->count() }}</span></a>
                                            @endif --}}

                                            {{-- <a href="#"><img src="{{asset('user_asset/img/card19.png')}}" alt=""></a>
                                <a href="#"><img src="{{asset('user_asset/img/card20.png')}}" alt=""></a>
                                 <a href="javascript:void(0);"  data-toggle="modal" data-target="#addtoany"><img src="{{asset('user_asset/img/card21.png')}}" alt=""></a> --}}
                                        </div>
                                    </div>
                                    <div class="col-md-6 text-e">
                                        <div class="com2"><span>{{ $page_reply->created_at->format('M j') }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <div class="col-md-1 pe-md-0">
                    </div>
                </div>
            </div>
        @endif

        <input type="text" hidden name="page_id" value="{{ $page->id }}" class="form-control" id="page_id">
    </section>

    <!-- flag -->

    <style>
        .container-test {
            position: relative;
        }

        .mentionList {
            position: absolute;
            top: 30px;
            left: 0;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            padding: 5px;
            display: none;
        }

        .mentionList div {
            padding: 5px;
            cursor: pointer;
        }

        .mentionList div:hover {
            background-color: #ddd;
        }

        textarea {
            width: 100%;
            height: 100px;
            resize: none;
        }
    </style>
    {{-- <section>
        <div class="container-test">
            <textarea class="mentionInput" placeholder="Type here..."></textarea>
            <div class="mentionList"></div>
        </div>
    </section> --}}





    <section dir="rtl" class="modal modalWindow flag" id="popupThree">
        <section class="modalWrapper">
            <h2>!Thanks for helping to keep our community civil</h2>
            <div class="alert alert-success" role="alert" id="successMsgflag" style="display: none">
                Flag Create Successfully
            </div>
            <div class="alert alert-success" role="alert" id="successMsgflagHide" style="display: none">

            </div>
            <form id="SubmitFormFlag">
                <div>
                    <div class="input-ra">
                        <input id="reveal" type="radio" name="reveal" value="reveal" />
                        <div class="me-3">
                            <label for="reveal">
                                <h5>URL/@Handle Reveal</h5>
                            </label>
                            <p class="para">This post reveals the URL/@Handle in public, whether in a text form or inside
                                the screenshots.</p>
                        </div>
                    </div>
                </div>
                <span class="text-danger" style="margin:0px 30px 10px 0px" id="revealErrorMsg"></span>
                <div>
                    <div class="input-ra">
                        <input id="inappropriate" type="radio" name="reveal" value="inappropriate" />
                        <div class="me-3">
                            <label for="inappropriate">
                                <h5>It's Inappropriate</h5>
                            </label>
                            <p class="para">This post contains content that a reasonable person would consider offensive,
                                abusive, or a violation of our <a href="#">.Terms of Service</a></p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="input-ra">
                        <input id="its_spam" type="radio" name="reveal" value="its_spam" />
                        <div class="me-3">
                            <label for="its_spam">
                                <h5>It's Spam</h5>
                            </label>
                            <p class="para">This post is an advertisement, or vandalism. It is not useful or relevant to
                                the current topic.</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="input-ra">
                        <input id="something_else" name="reveal" type="radio" value="something_else" />
                        <div class="me-3">
                            <label for="something_else">
                                <h5>Something Else</h5>
                            </label>
                            <p class="para">This post requires staff attention for another reason not listed above.</p>
                        </div>
                    </div>
                    <div>
                        <textarea cols="30" rows="7" name="reason" id="reason" class="texted"></textarea>
                        <span class="my-3">enter at least 1 character</span>
                        <span class="text-danger" id="reasonErrorMsg"></span>
                    </div>
                </div>
                {{-- <button  type="submit" class="theme-btn">Flag Post</button> --}}
                <button type="submit" class="btn btn-primary">Flag Post</button>
            </form>
        </section>
        <a class="closeBtn"><i class="fal fa-times"></i></a>
    </section>
    {{-- BookMark --}}
    <section dir="rtl" class="modal modalWindow edit-bookmark" id="popupTwelve">
        <section class="modalWrapper">
            <form id="SubmitFormBookmark">
                <div class="bookmark">
                    <h2>Edit bookmark</h2>

                    <div class="setting">
                        <input type="text" id="bookmark_for" name="bookmark_for"
                            placeholder="What is this bookmark for">
                        <span class="pop-trigger"> <img src="{{ asset('user_asset/img/card99.png') }}" alt=""
                                data-toggle="tooltip" title="Show"></span>
                    </div>
                    <div class="pop-content-hide">
                        <div class="notified">
                            <h4>After you are notified</h4>
                            <select id="notifieds" name="notified">
                                <option value="0">keep bookmark and clear reminder</option>
                                <option value="1">Keep Bookmark</option>
                                <option value="2">Delete Bookmark</option>
                                <option value="3">Delete bookmark once i reply </option>
                            </select>
                        </div>
                    </div>
                    <div class="remind">
                        <br />
                        <div class="alert alert-success successMsgText" role="alert" id="successMsg1"
                            style="display: none">

                        </div>
                        @if ($book_check)
                            <div class="alert alert-success successMsgText" role="alert" id="successMsg1Hide">
                                @php
                                    if ($book_check->bookmark_for != null) {
                                        echo 'BookMark Successfully';
                                    } elseif ($book_check->reminder_me != null) {
                                        echo 'You have a reminder set for this bookmark which will be sent ' .
                                            Carbon\Carbon::create($book_check->date_and_Time)->format('D') .
                                            ', 08:00 PM <i class="fa-regular fa-clock fa-lg login" style="color: #7a7a7a;"></i>';
                                    }
                                @endphp
                            </div>
                        @endif
                        <h4>Remind me</h4>
                        <div class="bookmark-opt">
                            {{-- <label class="container date_hide"><img src="{{asset('user_asset/img/card100.png')}}" alt=""><a href="#">Later Today
                                <span>  {{(Carbon\Carbon::now()->tomorrow()->format('D'))}}:  8:00
                                    am</span></a>
                            <input type="radio"   checked="checked" name="remind_me" value="later_today">
                            <span class="checkmark"></span>
                        </label> --}}
                            <label class="container date_hide"><img src="{{ asset('user_asset/img/card101.png') }}"
                                    alt=""><a href="#">Tomorrow <span>
                                        {{ Carbon\Carbon::now()->tomorrow()->format('D') }},
                                        8:00 am</span></a>
                                <input type="radio" name="remind_me" value="tomorrow">
                                <span class="checkmark"></span>
                            </label>
                            {{-- <label class="container date_hide"><img src="{{asset('user_asset/img/card102.png')}}" alt=""><a href="#">This Weekend
                                <span>Jan, 8:00
                                    am</span></a>
                            <input type="radio" name="remind_me"  value="this_week">
                            <span class="checkmark"></span>
                        </label> --}}
                            <label class="container date_hide"><img src="{{ asset('user_asset/img/card103.png') }}"
                                    alt=""><a href="#">Monday <span>
                                        {{ Carbon\Carbon::now()->endOfWeek(Carbon\Carbon::MONDAY)->format('D j') }},
                                        8:00 am</span></a>
                                <input type="radio" name="remind_me" value="monday">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container date_hide"><img src="{{ asset('user_asset/img/card104.png') }}"
                                    alt=""><a href="#">Next Month
                                    <span>{{ Carbon\Carbon::now()->addMonth(1)->startofMonth()->format('M j') }}, 8:00
                                        am</span></a>
                                <input type="radio" name="remind_me" value="next_month">
                                <span class="checkmark"></span>
                            </label>
                            {{-- <label class="container date_hide"><img src="{{asset('user_asset/img/card105.png')}}" alt=""><a href="#">Last custom date
                                time <span>Fri, 8:00
                                    am</span></a>
                            <input type="radio"  name="remind_me" value="last_custom_date">
                            <span class="checkmark"></span>
                        </label> --}}
                            <label class="container date_hide"><img src="{{ asset('user_asset/img/card104.png') }}"
                                    alt=""><a href="#">None Needed
                                </a>
                                <input type="radio" name="remind_me" value="none_needed">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container custom-date-trigger"><img
                                    src="{{ asset('user_asset/img/card105.png') }}" alt=""><a
                                    href="#">Custom date and
                                    time</a>
                                <input type="radio" name="remind_me" value="custom_date_selected">
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
                                        {{-- <img src="{{asset('user_asset/img/card106.png')}}" alt=""> --}}
                                        <input type="date" id="custum_date" name="custum_date"
                                            placeholder="2023-04-27">
                                    </div>
                                    <input type="time" id="custum_time" name="custum_time" placeholder="01:00 PM">
                                </div>
                            </div>
                            {{-- <h4  class="my-3 ">Relative</h4>
                        <div class="row">
                            <div class="col-md-8">
                                <input type="text">
                            </div>
                            <div class="col-md-4">
                                <select name="relative">
                                    <option value="Minutes">Minutes</option>
                                    <option value="Hours">Hours</option>
                                    <option value="Days">Days</option>
                                    <option value="months">months</option>
                                    <option value="Years">Years</option>
                                </select>
                            </div>
                        </div> --}}
                        </div>
                    </div>
                    {{-- <a href="#" class="save-book">Remove reminder and save bookmark</a> --}}
                    <div class="row">
                        <div class="col-md-8">
                            <button type="submit" class="theme-btn1">Save</button>

                        </div>
                        @if (auth()->check())
                            @if ($book_check)
                                <div class="col-md-4 text-e trashbtnHide">
                                    <a href="javascript:void(0)"
                                        onclick="delete_page_bookmark({{ $book_check ? $book_check->id : '' }})"
                                        class="trash">
                                        <img src="{{ asset('user_asset/img/card107.png') }}" alt="">
                                    </a>
                                </div>
                            @endif
                            <div class="col-md-4 text-e trashbtn">

                            </div>
                        @endif

                    </div>
                </div>
            </form>
        </section>
        <a class="closeBtn"><i class="fal fa-times"></i></a>
    </section>
    {{-- @dd(config('app.all_user_arr')); --}}
@endsection

@push('js')
    <script>
        function submitFormNotify() {
            var selectedStatus = document.querySelector('input[name="status"]:checked');

            if (selectedStatus) {
                var statusValue = selectedStatus.value;
                var pageid = {{ $page->id }};

                var data = {
                    "_token": '{{ csrf_token() }}',
                    notification_type: statusValue,
                    page_id: pageid,
                    type: 0
                };
                var url = '{{ route('user.user_notification_allow') }}';
                var res = AjaxRequest(url, data);
                if (res.status == 1) {
                    $('.dropbtn span').html(res.image);
                    Swal.fire({
                        position: "top-end",
                        icon: "success",
                        title: res.name + " Successfull",
                        showConfirmButton: false,
                        timer: 1500
                    });
                } else {
                    $('.dropbtn span').html(res.image);
                    Swal.fire({
                        position: "top-end",
                        icon: "success",
                        title: "Some thing went wrong",
                        showConfirmButton: false,
                        timer: 1500
                    });
                }
            } else {
                alert("Please select a status.");
            }
        }
        $(document).ready(function() {
            $(".pop-trigger").click(function() {
                $(".pop-content-hide").slideToggle();
            });
            $(".custom-date-trigger").click(function() {
                $(".custom-time").slideDown();
            });
            $(".date_hide").click(function() {
                $(".custom-time").slideUp();
            });
            $('#comment-text-area').atwho({
                at: "@",
                data: {!! json_encode(config('app.all_user_arr')) !!},
            });
        });
        // Page like
        var total = parseInt('{{ $page->getPageLikes->count() }}');
        $('#Pagelike').click(function() {
            var data = {
                "_token": '{{ csrf_token() }}'
            };
            var url = '{{ route('user.user_like_page', [$page->id]) }}';
            var res = AjaxRequest(url, data);
            if (res.status == 1) {
                total = total + 1;
                $('#Pagelike').html('' + total +
                    ' Likes  <i class="fa-solid fa-thumbs-up fa-lg" style="color: #7a7a7a;"></i>');
            } else {
                total = total - 1;
                $('#Pagelike').html('' + total +
                    ' Likes  <i class="fa-regular fa-thumbs-up fa-lg" style="color: #7a7a7a;"></i>');
            }
        });

        //flag Post

        $('#SubmitFormFlag').on('submit', function(e) {
            e.preventDefault();

            let reason = $('#reason').val();
            let page_id = $('#page_id').val();
            let reveal = $('input[name="reveal"]:checked').val();

            $.ajax({
                url: "{{ route('user.user_flag_page') }}",
                type: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    reason: reason,
                    page_id: page_id,
                    reveal: reveal,
                },
                success: function(response) {
                    $('#successMsgflag').show();
                    $('#reason').val('');
                    $('input[name="reveal"]:checked').each(function() {
                        $(this).checked = false;
                    });
                    $('#reasonErrorMsg').hide();
                    $('#revealErrorMsg').hide();

                },
                error: function(response) {
                    $('#reasonErrorMsg').text(response.responseJSON.errors.reason);
                    $('#revealErrorMsg').text(response.responseJSON.errors.reveal);
                    $('#successMsgflag').hide();
                },
            });
        });

        $('#SubmitFormBookmark').on('submit', function(e) {
            e.preventDefault();
            let bookmark_for = $('#bookmark_for').val();
            let page_id = $('#page_id').val();
            let custum_date = $('#custum_date').val();
            let custum_time = $('#custum_time').val();
            let remind_me = $('input[name="remind_me"]:checked').val();
            let notifieds = $('#notifieds').find(":selected").val();


            // console.log(bookmark_for,page_id,remind_me, notifieds, custum_date, custum_time);

            $.ajax({
                url: "{{ route('user.user_bookmark_page') }}",
                type: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    bookmark_for: bookmark_for,
                    page_id: page_id,
                    custum_date: custum_date,
                    custum_time: custum_time,
                    remind_me: remind_me,
                    notifieds: notifieds,
                },
                success: function(response) {
                    $('#successMsg1').show();
                    $('#successMsg1Hide').hide();
                    $('.trashbtnHide').hide();
                    $('.successMsgText').html(response.notif +
                        '<i class="fa-regular fa-clock fa-lg login" style="color: #7a7a7a;"></i>')
                    let bookmark_for = $('#bookmark_for').val('');
                    let custum_date = $('#custum_date').val('');
                    let custum_time = $('#custum_time').val('');
                    $('input[name="remind_me"]:checked').each(function() {
                        $(this).checked = false;
                    });

                    $('.trashbtn').html(' <a href="javascript:void(0)" onclick="delete_page_bookmark(' +
                        response.page_bookmark.id +
                        ')"  class="trash" ><img src="{{ asset('user_asset/img/card107.png') }}" alt=""></a>'
                        )
                    $('.check_bookmark').html(
                        '<i class="fa-solid fa-bookmark lg" ></i> Bookmark </a></li>');
                },
                error: function(response) {
                    // $('#reasonErrorMsg').text(response.responseJSON.errors.reason);
                    // $('#revealErrorMsg').text(response.responseJSON.errors.reveal);
                },
            });
        });

        function delete_page_bookmark(bookmark_id) {
            Swal.fire({
                title: "Are you sure do you really want to perform this action?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Yes continue",
                showLoaderOnConfirm: true,
            }).then((result) => {
                if (result.isConfirmed) {
                    $.get('{{ config('app.url') }}user-bookmark-page/delete/' + bookmark_id);
                    Swal.fire({
                        title: "Success!",
                        text: "BookMark Deleted Successfully.",
                        icon: "success"
                    });
                    window.location.reload();
                }
            });
        }

        // Comment
        $('#comment-btn').click(function() {
            var data = {
                "_token": '{{ csrf_token() }}',
                "type": 'post',
                "comment": $('#comment-text-area').val()
            };
            var url = '{{ route('user.create_comment_page', [$page->id]) }}';
            var res = AjaxRequest(url, data);

            if (res.status == 1) {
                // $('#comment_append').append(res.comment);
                $('#comment-text-area').val('');
                Swal.fire({
                    title: "Success!",
                    text: "Thank you! Your Comment is waiting to be approved.",
                    icon: "success"
                });
            } else {
                $('#comment_append').append('<div class="alert alert-danger">Something went wrong!!!</div>');
            }
        });
    </script>
@endpush
