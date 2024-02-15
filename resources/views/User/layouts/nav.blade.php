{{-- <nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="{{ route('user.index') }}"><img src="{{ asset(settings()->web_logo) }}"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar">
            <i class="fa-solid fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav">
                <li><a href="#">Advertise on wasetak</a></li>
                <li><a href="#">Search Listing</a></li>
                <li><a href="#">Stay Connected</a></li>
                <li><a href="{{route('checkout.index')}}">Start Checkout</a></li>
                <li><a href="#">Earn money</a></li>
                <li><a href="{{ route('user.how_it_work') }}">How it works</a></li>
               
                <li>
                    <a id="zh-CN" class="language_option" onclick="changeLanguageByButtonClick('ar')"
                    translate="no" href="javascript:void(0)">Arabic</a>
                </li>
                <li>
                    <a id="en" class="language_option" onclick="changeLanguageByButtonClick('en')"
                    translate="no" href="javascript:void(0)">English</a>
                </li>


            </ul>
        </div>
    </div>
</nav> --}}
<style>
 li .notify2{
    background-color: #E8F0FF;
 }
 </style>
<header>
    <div class="main-header">
        <div class="container">
            <div class="menu-Bar">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="row align-items-center">
                <div class="col-md-2 text-left">

                    {{-- Wasetak --}}
                    <a class="logo" href="{{ route('user.index') }}"><img src="{{ asset(settings()->web_logo) }}"></a>

                </div>
                <div class="col-md-9">
                    <div class="menuWrap">
                        <ul class="menu">
                            @php $i = 1; @endphp


                            @foreach (admin_pages() as $k => $admin_page)
                                <li class="dropdown{{ $i }}">
                                    @if ($k == 1)
                                        <a href="javascript:void(0)">{{ $admin_page->name }}</a>
                                    @else
                                        <a
                                            href="{{ route('user.userPage', [$admin_page->slug]) }}">{{ $admin_page->name }}</a>
                                    @endif
                                    @if ($i == 3)
                                        <ul class="dropdown-list">
                                            <li><a href="{{ route('user.fee_calculator') }}">Fee Calculator</a></li>
                                            <li><a href="{{ route('checkout.index') }}">Begin a Transaction</a></li>
                                        </ul>
                                    @endif
                                    @if (count(admin_inner_pages($admin_page->id)) > 0)
                                        <ul class="dropdown-list">
                                            @foreach (admin_inner_pages($admin_page->id) as $admin_inner_page)
                                                <li><a
                                                        href="{{ route('user.userPage', [$admin_inner_page->slug]) }}">{{ $admin_inner_page->name }}</a>
                                                </li>
                                            @endforeach
                                            @if ($i == 1)
                                                <li><a href="{{ route('user.about') }}">About</a></li>
                                                <li><a href="{{ route('user.userList') }}">Users</a></li>
                                            @endif
                                            @if ($i == 2)
                                                <li><a href="{{ route('user.top_earners') }}">Top Earners</a></li>
                                                <li><a href="{{ route('user.win_prizes') }}">Win Prizes</a></li>
                                            @endif
                                        </ul>
                                    @endif
                                </li>
                                {{ $i++ }}
                            @endforeach
                            <li><a href="{{ route('user.search_listing') }}">Search Listing</a></li>
                            <li><a href="{{ route('user.doc') }}">Advertise on wasetak</a></li>
                            <li>
                                <a id="zh-CN" class="language_option" onclick="changeLanguageByButtonClick('ar')"
                                    translate="no" href="javascript:void(0)">Arabic</a>
                            </li>
                            {{-- <li class="dropdown1">
                                <a href="{{ route('user.how_it_work') }}">How it works</a>
                                <ul class="dropdown-list">
                                    <!-- <li><a href="">How it work</a></li> -->
                                    <li><a href="{{ route('user.quick_rule') }}">Quick Rule</a></li>
                                    <li><a href="{{route('user.what_wasetak')}}">What Wasetak</a></li>
                                    <li><a href="{{ route('user.about')}}">About</a></li>
                                </ul>
                            </li>
                            <li class="dropdown2">
                                <a href="#">earn money</a>
                                <ul class="dropdown-list">
                                    <li><a href="{{ route('user.rewards_rules') }}">Rewards rules</a></li>
                                    <li><a href="{{ route('user.how_it_use') }}">How it Use</a></li>
                                    <li><a href="{{route('user.rewards')}}">Rewards</a></li>
                                    <li><a href="{{route('user.ways_to_earn')}}">Ways to earn</a></li>
                                    <li><a href="{{route('user.top_earners')}}">Top Earners</a></li>
                                    <li><a href="{{route('user.win_prizes')}}">Win Prizes</a></li>
                                    <li><a href="{{route('user.frequently_asked_question')}}">Frequently Asked Question</a></li>
                                </ul>
                            </li>
                            <li class="dropdown3">
                                <a href="{{route('user.start_checkout')}}">Start Checkout</a>
                                <ul class="dropdown-list">
                                    <li><a href="{{route('user.fee_calculator')}}">Fee Calculator</a></li>
                                    <li><a href="{{route('checkout.index')}}">Begin a Transaction</a></li>
                                </ul>
                            </li>
                            <li><a href="{{route('user.stay_connected')}}">Stay Connected</a></li>
                            <li><a href="{{route('user.search_listing')}}">Search Listing</a></li>
                            <li><a href="{{route('user.doc')}}">Advertise on wasetak</a></li>
                            <li>
                                <a id="zh-CN" class="language_option" onclick="changeLanguageByButtonClick('ar')"
                                translate="no" href="javascript:void(0)">Arabic</a>
                            </li> --}}
                            <div id="google_translate_element" style="display:none"></div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="notice">
        <div class="container">
            <div class="row align-items-center">

                <div class="d-flex align-items-center col-md-8">
                    @if (Auth::check())
                        <div class="cartsTopList">
                            <ul>
                                <li>
                                    <a class="signin active" href="{{route('user.profile')}}" title="">
                                        <p>{{auth()->user() ? substr(auth()->user()->name, 0, 1) : ''}}</p>
                                    </a>
                                </li>
                                <li class="dropItems">
                                    <a href="javascript:;" title="">
                                        <img src="/assets/images/card177.png" onclick="all_notification()"
                                            class="img1" alt="">

                                        <div class="alert alert-danger"style=" width: 20px;font-size: 3mm;"
                                            id="all_unread_count">0</div>
                                    </a>
                                    <div class="dropDownList">
                                        <div class="box-tab1 showfirst boxwhiteHeight">
                                            <ul class="notificationsLists" id="all_notifications">

                                            </ul>
                                            <div class="BtnWraps">
                                                <a class="theme-btn2" id="all_noti_dismiss" style="display: block;" href="javascript:;" title=""
                                                    onclick="dismiss_notification()">
                                                    Dismiss
                                                    <img src="/assets/images/checkmark-ico.png" alt="">
                                                </a>
                                                <a class="moreBtn" href="{{ route('user.profile',['notification' => 'show_first']) }}" title="">
                                                    See All notifications
                                                </a>
                                            </div>
                                        </div>
                                        <div class="box-tab2 boxwhiteHeight">
                                            <ul class="notificationsLists" id="get_replies_noti">

                                            </ul>
                                            <div class="BtnWraps">
                                                <a class="theme-btn2" id="replies_noti_dismiss" style="display: block;" href="javascript:;" title=""
                                                    onclick="dismiss_notification()">
                                                    Dismiss
                                                    <img src="/assets/images/checkmark-ico.png" alt="">
                                                </a>
                                                <a class="moreBtn" href="{{ route('user.profile','notification') }}" title="">
                                                    View All notification
                                                </a>
                                            </div>
                                        </div>

                                        <div class="box-tab3 boxwhiteHeight">
                                            <ul class="notificationsLists" id="get_likes_noti">

                                            </ul>
                                            <div class="BtnWraps">
                                                <a class="theme-btn2" id="likes_noti_dismiss" style="display: block;" href="javascript:;" title=""
                                                    onclick="dismiss_notification()">
                                                    Dismiss
                                                    <img src="/assets/images/checkmark-ico.png" alt="">
                                                </a>
                                                <a class="moreBtn" href="{{ route('user.profile','notification') }}" title="">
                                                    View All notification
                                                </a>
                                            </div>
                                        </div>

                                        <div class="box-tab4 boxwhiteHeight">
                                            <ul class="notificationsLists" id="get_other_noti">

                                            </ul>
                                            <div class="BtnWraps">
                                                <a class="theme-btn2" id="other_noti_dismiss" style="display: block;" href="javascript:;" title=""
                                                    onclick="dismiss_notification()">
                                                    Dismiss
                                                    <img src="/assets/images/checkmark-ico.png" alt="">
                                                </a>
                                                <a class="moreBtn" href="{{ route('user.profile','notification') }}" title="">
                                                    View All notification
                                                </a>
                                            </div>
                                        </div>

                                        <div class="box-tab5 boxwhiteHeight">
                                            <ul class="notificationsLists" id="get_post_noti">

                                            </ul>
                                            <div class="BtnWraps">
                                                <a class="theme-btn2" id="post_noti_dismiss" style="display: block;" href="javascript:;" title=""
                                                    onclick="dismiss_notification()">
                                                    Dismiss
                                                    <img src="/assets/images/checkmark-ico.png" alt="">
                                                </a>
                                                <a class="moreBtn" href="{{ route('user.profile','notification') }}" title="">
                                                    View All notification
                                                </a>
                                            </div>
                                        </div>

                                        <div class="box-tab6 boxwhiteHeight">
                                            <ul class="notificationsLists" id="get_admin_noti">

                                            </ul>
                                            <div class="BtnWraps">
                                                <a class="theme-btn2" id="admin_noti_dismiss" style="display: block;" href="javascript:;" title=""
                                                    onclick="dismiss_notification()">
                                                    Dismiss
                                                    <img src="/assets/images/checkmark-ico.png" alt="">
                                                </a>
                                                <a class="moreBtn" href="{{ route('user.profile','notification') }}" title="">
                                                    View All notification
                                                </a>
                                            </div>
                                        </div>


                                        <div class="sidebarDrop">
                                            <ul>
                                                <li>
                                                    <a data-targetit="box-tab1" onclick="all_notification()"
                                                        href="javascript:;" title="">
                                                        <img src="/assets/images/dropdown-icon1.png" alt="">
                                                        {{-- <div class="alert alert-danger"style=" width: 20px;font-size: 3mm;"
                                                            id="all_notification_badge">0</div> --}}
                                                    </a>
                                                </li>
                                                <li>
                                                    <a data-targetit="box-tab2" href="javascript:;"
                                                        onclick="get_replies_noti()" title="">
                                                        <img src="/assets/images/dropdown-icon2.png" alt="">
                                                        <div class="alert alert-danger"style=" width: 20px;font-size: 3mm;"
                                                            id="all_replies_badge">0</div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;" data-targetit="box-tab3"
                                                        onclick="get_likes_noti()" title="">
                                                        <img src="/assets/images/dropdown-icon3.png" alt="">
                                                        <div class="alert alert-danger"style=" width: 20px;font-size: 3mm;"
                                                            id="all_likes_badge">0</div>

                                                    </a>
                                                </li>

                                                {{-- <li>
                                                    <a data-targetit="box-tab5" onclick="get_post_noti()"
                                                        href="javascript:;" title="">
                                                        <img src="/assets/images/dropdown-icon5.png" alt="">
                                                        <div class="alert alert-danger"style=" width: 20px;font-size: 3mm;"
                                                            id="all_post_badge">0</div>
                                                    </a>
                                                </li> --}}
                                                <li>
                                                    <a data-targetit="box-tab6" onclick="get_admin_noti()"
                                                        href="javascript:;" title="">
                                                        <img src="/assets/images/dropdown-icon6.png" alt="">
                                                        <div class="alert alert-danger"style=" width: 20px;font-size: 3mm;"
                                                            id="all_adminnoti_badge">0</div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a data-targetit="box-tab4" onclick="get_other_noti()"
                                                        href="javascript:;" title="">
                                                        <img src="/assets/images/dropdown-icon7.png" alt="">
                                                        <div class="alert alert-danger"style=" width: 20px;font-size: 3mm;"
                                                            id="all_other_badge">0</div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropItems">
                                    <a class="notifications" href="javascript:;" title="">
                                        <img src="/assets/images/card176.png" class="img1" alt="">
                                    </a>
                                    <div class="dropDownList">
                                        <div class="box-catList showfirst boxwhiteHeight">
                                            <ul>
                                                <li>
                                                    <a href="{{ route('user.profile', 'value=my_tickets') }}"
                                                        title="">My Tickets </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('checkout.index') }}" title="">Start
                                                        Checkout</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;" class="modalButton"
                                                        data-popup="popupSixteen" title="">Start
                                                        Topic/Listing</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;" class="modalButton"
                                                        data-popup="popupSixteen" title="">Launch Auction</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('user.fee_calculator') }}" title="">Fee
                                                        Calculator</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('user.rewards') }}" title="">Wasetak
                                                        Rewards</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('user.top_earners') }}"
                                                        title="">Sales/purchase Stats</a>
                                                </li>
                                                {{-- <li>
                                                    <a href="javascript:;" title="">Download wasetak on ios</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;" title="">Download android app</a>
                                                </li> --}}
                                                {{-- <li>
                                                    <a href="javascript:;" title="">Connect via telegram</a>
                                                </li> --}}
                                                <li>
                                                    <a href="javascript:;" class="modalButton"
                                                        data-popup="popupSixteen" title="">Advertise on
                                                        wasetak</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('user.profile', ['value', 'invites']) }}"
                                                        title="">Earn Money</a>
                                                </li>
                                            </ul>
                                        </div>
                                        {{-- <div class="sidebarDrop">
                                            <ul>
                                                <li>
                                                    <a href="javascript:;" title="">
                                                        <img src="/assets/images/dropdown-icon1.png" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;" title="">
                                                        <img src="/assets/images/dropdown-icon2.png" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;" title="">
                                                        <img src="/assets/images/dropdown-icon3.png" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;" title="">
                                                        <img src="/assets/images/dropdown-icon4.png" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;" title="">
                                                        <img src="/assets/images/dropdown-icon5.png" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;" title="">
                                                        <img src="/assets/images/dropdown-icon6.png" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;" title="">
                                                        <img src="/assets/images/dropdown-icon7.png" alt="">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div> --}}
                                    </div>
                                </li>
                            </ul> 
                        </div> 
                        <script>
                            setInterval(all_notification, 10000);
                            setInterval(get_replies_noti, 10000);
                            setInterval(get_likes_noti, 10000);
                            setInterval(get_other_noti, 10000);
                            // setInterval(get_post_noti, 10000);
                            setInterval(get_admin_noti, 10000);

                            function all_notification() {
                                $.ajax({
                                    'type': 'get',
                                    'url': '{{ route('user.get_all_notifications', 'all_notification') }}',
                                    success: function(response) {
                                        console.log(response);
                                        $('#all_notifications').empty();
                                        if (response.all_unread_count == 0) {
                                            $('#all_notifications').append('<p style="padding: 94px;">No notifications found.</p>');
                                            // $('#all_noti_dismiss').css('display','none');
                                            document.getElementById('all_noti_dismiss').style.display = 'none';
                                        } else {
                                            $.each(response.notifications, function(index, item) {
                                                if(item.un_read == 0){
                                                    var adclass = 'notify2';
                                                }else{
                                                    var adclass = '';
                                                } 
                                                $('#all_notifications').append(' <li class="'+adclass+'"> <a href="/notification_redirect/' +
                                                    item.id +
                                                    '" title=""> <img src="/assets/images/grey-chat-ico.png" alt=""><p><span class="themeCol">' +
                                                    item.title + ' :</span> ' + item.body + '</p></a></li> <hr>'
                                                );
                                            });
                                            
                                            $('#all_unread_count').html(response.notitfication_count);
                                            
                                        }

                                    }
                                })
                            }

                            function get_replies_noti() {
                                $.ajax({
                                    'type': 'get',
                                    'url': '{{ route('user.get_all_notifications', 'get_replies_noti') }}',
                                    success: function(response) {
                                        $('#get_replies_noti').empty();
                                        if (response.all_unread_count == 0) {
                                            $('#get_replies_noti').append('<p style="padding: 94px;">No notifications found.</p>');
                                            // $('#all_noti_dismiss').css('display','none');
                                            document.getElementById('replies_dismiss').style.display = 'none';
                                        } else {
                                            $.each(response.notifications, function(index, item) {
                                                if(item.un_read == 0){
                                                    var adclass = 'notify2';
                                                }else{
                                                    var adclass = '';
                                                }
                                                $('#get_replies_noti').append(' <li class="'+adclass+'"> <a href="/notification_redirect/' +
                                                    item.id +
                                                    '" title=""> <img src="/assets/images/grey-chat-ico.png" alt=""><p><span class="themeCol">' +
                                                    item.title + ' :</span> ' + item.body + '</p></a></li> <hr>'
                                                );
                                            });
                                            if(response.replies_noti_count == 0){
                                                document.getElementById('all_replies_badge').style.display = 'none';
                                            }else{
                                                $('#all_replies_badge').html(response.replies_noti_count);
                                            }
                                            // $('#all_replies_badge').html(response.notitfication_count);

                                        }
                                    }
                                })
                            }

                            function get_likes_noti() {
                                $.ajax({
                                    'type': 'get',
                                    'url': '{{ route('user.get_all_notifications', 'get_likes_noti') }}',
                                    success: function(response) {
                                        $('#get_likes_noti').empty();
                                        if (response.all_unread_count == 0) {
                                            $('#get_likes_noti').append('<p style="padding: 94px;">No notifications found.</p>');
                                            // $('#all_noti_dismiss').css('display','none');
                                            document.getElementById('likes_noti_dismiss').style.display = 'none';
                                        } else {
                                            
                                            $.each(response.notifications, function(index, item) {
                                                if(item.un_read == 0){
                                                    var adclass = 'notify2';
                                                }else{
                                                    var adclass = '';
                                                }
                                                $('#get_likes_noti').append(' <li class="'+adclass+'"> <a href="/notification_redirect/' + item
                                                    .id +
                                                    '" title=""> <img src="/assets/images/grey-chat-ico.png" alt=""><p><span class="themeCol">' +
                                                    item.title + ' :</span> ' + item.body + '</p></a></li> <hr>'
                                                );
                                            });
                                            if(response.likes_notitfication_count == 0){
                                                document.getElementById('all_likes_badge').style.display = 'none';
                                            }else{
                                                $('#all_likes_badge').html(response.likes_notitfication_count);
                                            }
                                            // $('#all_likes_badge').html(response.notitfication_count);
                                        }

                                    }
                                })
                            }

                            function get_other_noti() {
                                $.ajax({
                                    'type': 'get',
                                    'url': '{{ route('user.get_all_notifications', 'get_other_noti') }}',
                                    success: function(response) {
                                        $('#get_other_noti').empty();
                                        if (response.all_unread_count == 0) {
                                            $('#get_other_noti').append('<p style="padding: 94px;">No notifications found.</p>');
                                            // $('#all_noti_dismiss').css('display','none');
                                            document.getElementById('other_noti_dismiss').style.display = 'none';
                                        } else {
                                            $.each(response.notifications, function(index, item) {
                                                if(item.un_read == 0){
                                                    var adclass = 'notify2';
                                                }else{
                                                    var adclass = '';
                                                }
                                                $('#get_other_noti').append(' <li class="'+adclass+'"> <a href="/notification_redirect/' + item
                                                    .id +
                                                    '" title=""> <img src="/assets/images/grey-chat-ico.png" alt=""><p><span class="themeCol">' +
                                                    item.title + ' :</span> ' + item.body + '</p></a></li> <hr>'
                                                );
                                            });
                                            if(response.other_notitfication_count == 0){
                                                document.getElementById('all_other_badge').style.display = 'none';
                                            }else{
                                                $('#all_other_badge').html(response.other_notitfication_count);
                                            }
                                            // $('#all_other_badge').html(response.notitfication_count);
                                        }
                                    }
                                })
                            }

                            function get_post_noti() {
                                $.ajax({
                                    'type': 'get',
                                    'url': '{{ route('user.get_all_notifications', 'get_post_noti') }}',
                                    success: function(response) {
                                        $('#get_post_noti').empty();
                                        if (response.all_unread_count == 0) {
                                            $('#get_post_noti').append('<p style="padding: 94px;">No notifications found.</p>');
                                            // $('#all_noti_dismiss').css('display','none');
                                            document.getElementById('post_noti_dismiss').style.display = 'none';
                                        } else {
                                            
                                            $.each(response.notifications, function(index, item) {
                                                if(item.un_read == 0){
                                                    var adclass = 'notify2';
                                                }else{
                                                    var adclass = '';
                                                }
                                                $('#get_post_noti').append(' <li class="'+adclass+'"> <a href="/notification_redirect/' + item
                                                    .id +
                                                    '" title=""> <img src="/assets/images/grey-chat-ico.png" alt=""><p><span class="themeCol">' +
                                                    item.title + ' :</span> ' + item.body + '</p></a></li> <hr>'
                                                );
                                            });

                                            if(response.all_unread_count == 0){
                                                document.getElementById('all_post_badge').style.display = 'none';
                                            }else{
                                                $('#all_post_badge').html(response.all_unread_count);
                                            }
                                            // $('#all_post_badge').html(response.notitfication_count);
                                        }
                                    }
                                })
                            }

                            function get_admin_noti() {
                                $.ajax({
                                    'type': 'get',
                                    'url': '{{ route('user.get_all_notifications', 'get_admin_noti') }}',
                                    success: function(response) {
                                        $('#get_admin_noti').empty();
                                        if (response.all_unread_count == 0) {
                                            $('#get_admin_noti').append('<p style="padding: 94px;">No notifications found.</p>');
                                            // $('#all_noti_dismiss').css('display','none');
                                            document.getElementById('admin_noti_dismiss').style.display = 'none';
                                        } else {
                                            
                                            $.each(response.notifications, function(index, item) {
                                                if(item.un_read == 0){
                                                    var adclass = 'notify2';
                                                }else{
                                                    var adclass = '';
                                                }
                                                $('#get_admin_noti').append(' <li class="'+adclass+'"> <a href="/notification_redirect/' + item
                                                    .id +
                                                    '" title=""> <img src="/assets/images/grey-chat-ico.png" alt=""><p><span class="themeCol">' +
                                                    item.title + ' :</span> ' + item.body + '</p></a></li> <hr>'
                                                );
                                            });
                                            if(response.admin_notitfication_count == 0){
                                                document.getElementById('all_adminnoti_badge').style.display = 'none';
                                            }else{
                                                $('#all_adminnoti_badge').html(response.admin_notitfication_count);
                                            }
                                            // $('#all_adminnoti_badge').html(response.notitfication_count);
                                        }
                                    }
                                })
                            }

                            function dismiss_notification() {
                                $.ajax({
                                    'type': 'get',
                                    'url': '{{ route('user.dissmiss_all_notifications') }}',
                                    success: function(response) {
                                        $('#all_notifications').empty();
                                        $('#all_notifications').append('<li>No unread notificaitions found.</li>');
                                    }
                                })
                            }
                        </script>
                        
                    @endif
                    <form method="get" class="col-12" action="{{ route('user.search_listing') }}">
                        <div class="search">
                            <div class="form" lang="ar">
                                <img src="{{ asset('user_asset/img/card15.png') }}" alt="">
                                <input name="query" value="" type="text" placeholder="يبحث">
                            </div>
                            <button type="submit">
                                <img src="{{ asset('user_asset/img/card2.png') }}" class="img1"alt="">
                            </button>
                        </div>
                    </form>
                </div> 


                @if (!Auth::check())
                    <div class="col-md-4 text-e">
                        
                        <a href="#" class="theme-btn1 modalButton" data-bs-toggle="modal"
                            data-bs-target="#signup"><img
                                src="{{ asset('user_asset/img/icon-login-rounded.png') }}">تسجيل الدخول</a>
                        <a href="#" class="theme-btn2 modalButton" data-bs-toggle="modal"
                            data-bs-target="#login"><img
                                src="{{ asset('user_asset/img/icon-male-user.png') }}">اشتراك</a>
                        {{-- <a href="#" class="theme-btn1 modalButton" data-popup="popupOne"><img src="{{ asset('user_asset/img/card3.png') }}" alt=""> تسجيل الدخول</a>
                             <a href="#" class="theme-btn2 modalButton" data-popup="popuplogin"><img src="{{ asset('user_asset/img/card4.png') }}" alt=""> اشتراك</a> --}}
                    </div>
                    @else
                    <div class="col-md-4 text-e">
                        <a href="{{ route('user.logout') }}" class="theme-btn2 modalButton"> Logout</a>
                    </div>
                @endif
            </div>
        </div>
    </div>      
</header> 
@if (!Auth::check())
    <!-- Login Popup Bootstrap -->
    <div class="modal fade  modalWindow login" id="login" tabindex="-1" data-bs-backdrop='static'>
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <h4>Welcome Back</h4>
                    <p>Login to your account</p>
                    <form class="needs-validation loginForm">
                        @csrf
                        <span class="login-error-message error-message"></span>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Email / Username"
                                name="email_or_username" required id="login_email_or_username">
                            <label class="input_label"></label>
                        </div>
                        <div class="show_direct_login_link mb-3 error-message"></div>
                        <div class="mb-3">
                            <div class="abs_input">
                                <input type="password" class="form-control" placeholder="Password"
                                    name="loginPassword" id="loginPassword" required>
                                <div class="abs_icon"><a href="#" id="loginTogglePassword"><img
                                            src="{{ asset('user_asset/img/eye.png') }}"><img
                                            src="{{ asset('user_asset/img/eye-fill.png') }}"
                                            class="eye_fill_show"></a>
                                </div>
                            </div>
                            <label class="input_label"></label>
                        </div>
                        <div class="d-flex links">
                            {{-- <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#reset_password">I forgot my Password</a>
                        {{ route('forget.password.get') }}
                        <a href="" >I forgot my Password</a> --}}
                        </div>
                        <div class="d-flex align-items-center">
                            <button class="button loginpButton">
                                <div class="spinner-border spinner-border-login" role="status"
                                    style="display: none">
                                    <span class="sr-only"></span>
                                </div> Login
                            </button>
                            <span>Don’t have an account ? <a href="#" class="dontHaveAccount">Sign up</a></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Signup Popup Bootstrap --> 
    <div class="modal fade" id="signup" tabindex="-1" data-bs-backdrop='static'>
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <h4>! HELLO</h4>
                    <p>Welcome to wasetak</p>
                    <form class="needs-validation registerForm" novalidate>
                        @csrf
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Email" name="email"
                                id="email" required>
                            <label id="email-confirm-warning-label" class="error-warning d-none" for="email">We
                                will email you to confirm.</label>
                            <label class="input_label">Never shown to the public.</label>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Username" id="username"
                                name="username" required>
                            <label id="signup-username-other-error" class="label-error d-none"
                                for="username"></label>

                                <label id="signup-username-other-success" style="color: green;" class="error-warning d-none"
                                for="username"></label>

                            <label class="input_label">unique, no spaces, short</label>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="First name and Last name"
                                name="name" required>
                            <label class="input_label">Your Full name</label>
                        </div>
                        <div class="mb-3">
                            <div class="abs_input">
                                <input type="password" class="form-control password" placeholder="Password"
                                    name="password" id="password" required>
                                <div class="abs_icon"><a href="#" id="togglePassword"><img
                                            src="{{ asset('user_asset/img/eye.png') }}"><img
                                            src="{{ asset('user_asset/img/eye-fill.png') }}"
                                            class="eye_fill_show"></a></div>
                            </div>
                            <label class="input_label">at least 12 characters</label>
                        </div>
                        <div class="terms form-check" id="termserror">
                            <label class="input_label"><span class="required">*</span> Privacy Confirmation</label>
                            <span id="checkbox-error" class="error"></span>
                            <label for="terms" class="form-check-label"> I agree to Wasetak <a
                                    href="#">Privacy Policy</a> and <a href="#">Terms of
                                    Service</a></label>
                            <input id="terms" class="form-check-input" type="checkbox" name="terms" />
                        </div>


                        <div class="d-flex align-items-center mt-4">
                            <button class="button signUpButton" type="submit">Sign up <span
                                    class="spinner-border spinner-border-signup" role="status"
                                    style="display:none"></span></button>
                            <span>Already have an account ? <a href="#" class="alreadyAccount">Login</a></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- password -->
    {{--
<section dir="rtl" class="modal modalWindow password" id="popupFive">
    <section class="modalWrapper">
        <h2>Password Reset</h2>
        <div class="password-mail">
            <span class="base">If an account matches ha097216@gmail.com, you should receive an email with instructions on how to reset your password shortly</span>
            <button class="theme-btn">Ok</button>
        </div>
        <span class="base">.Enter your email address, and we'll send you a password reset email</span>
        <form class="form">
            <div class="row">
                <div class="col-md-12">
                    <div class="ey">
                        <input type="text" placeholder="abcd@gmail">
                        <i class="far fa-eye"></i>
                    </div>
                    <div class="invalid">
                        <small class="inval">If an account matches the username mohdj5, you should receive an email with a login link shortly. <i class="fas fa-exclamation-triangle"></i></small>
                    </div>
                </div>
                <div class="col-md-12">
                    <button class="theme-btn">Reset Password</button>
                </div>
            </div>
        </form>
    </section>
    <a class="closeBtn"><i class="fal fa-times"></i></a>
</section> --}}


    <!-- Reset Popup -->
    {{-- <div class="modal fade" id="reset_password" tabindex="-1" data-bs-backdrop='static'>
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body">
                <h4>Password Reset</h4>
                <p>.Enter your email address, and we'll send you a password reset email</p>
                <form class="needs-validation resetForm">
                    @csrf
                    <span class="error-message"></span>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="reset_email" class="form-control" name="email" placeholder="Enter Your Email"
                            required="">
                            @if ($errors->has('email'))
                                <span class="text-danger"><i class="fa-solid fa-triangle-exclamation"></i> An error occurred. You supplied invalid parameters to the request login.. </span>
                            @endif
                    </div>
                    <div class="mb-3 d-grid">
                        <button type="submit" class="resetButton button" style="color: white;background: #f26d85;">
                            Reset Password
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> --}}

    <!-- Reset SuccessMsg Modal -->
    {{-- <div class="modal fade" id="reset_msg" tabindex="-1" data-bs-backdrop='static'>
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body">
                <h4>Password Reset</h4>
                <p class="resetMsg"></p>
                <div class="mb-3 d-grid">
                    <button type="button" class="button closeResetInfoModal" style="color: white;background: #f26d85;max-width: 70px;" data-bs-dismiss="modal">Ok</button>
                </div>
            </div>

        </div>
    </div>
</div> --}}
@endif



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: "en"
        }, 'google_translate_element');
    }

    function changeLanguageByButtonClick(lang) {

        var selectField = document.querySelector("#google_translate_element select");
        console.warn(selectField);
        for (var i = 0; i < selectField.children.length; i++) {
            var option = selectField.children[i];
            if (option.value == lang) {
                selectField.selectedIndex = i;
                selectField.dispatchEvent(new Event('change'));
            }
        }
    }

    // $(window).on('load', function(){
    //     setTimeout(
    //         function() 
    //         {
    //             $('.language_option').trigger('click');
    //         }, 1500);

    // });
    $("li.dropItems > a").click(function() {
        $(this).toggleClass("active");
        $(this)
            .next(".dropDownList")
            .stop(true, false, true)
            .slideToggle(300);
    });
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
</script>
