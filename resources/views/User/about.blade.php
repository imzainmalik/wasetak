@extends('User.layouts.master')
@section('content')
    <section class="sec5">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <ul>
                        <li data-targetit="box-4"> Privacy policy</li>
                        <li data-targetit="box-3"> Terms of service</li>
                        <li data-targetit="box-2">FAQs</li>
                        <li data-targetit="box-1" class="active">About</li>
                    </ul>
                </div>
                <div class="box-1 showfirst">
                    <h2>About Wasetak</h2>
                    <h5>Our Admins</h5>
                    <div class="row rowgap">
                        @forelse ($admins as $admin )    
                            <div class="col-md-3">
                                <div class="boxed">
                                    <img src="{{asset('user_asset/img/card28.png')}}" alt="">
                                    <div>
                                        <h6>{{$admin->first_name}} </h6>
                                        <span>Admin</span>
                                    </div>
                                </div>
                            </div>
                        @empty
                            
                        @endforelse
                    </div>
                    {{-- <div class="bor-lines"></div> --}}
                    {{-- <h5>Our Moderators</h5> --}}
                    {{-- <div class="row rowgap">
                        <div class="col-md-3">
                            <div class="boxed">
                                <img src="{{asset('user_asset/img/card25.png')}}" alt="">
                                <div>
                                    <h6>Andrew</h6>
                                    <span>Admin</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="boxed">
                                <img src="{{asset('user_asset/img/card26.png')}}" alt="">
                                <div>
                                    <h6>Steve</h6>
                                    <span>Admin</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="boxed">
                                <img src="{{asset('user_asset/img/card28.png')}}" alt="">
                                <div>
                                    <h6>Hooper </h6>
                                    <span>Admin</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="boxed">
                                <img src="{{asset('user_asset/img/card24.png')}}" alt="">
                                <div>
                                    <h6>Ahmed23 </h6>
                                    <span>Admin</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="boxed">
                                <img src="{{asset('user_asset/img/card25.png')}}" alt="">
                                <div>
                                    <h6>Andrew</h6>
                                    <span>Admin</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="boxed">
                                <img src="{{asset('user_asset/img/card26.png')}}" alt="">
                                <div>
                                    <h6>Steve</h6>
                                    <span>Admin</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="boxed">
                                <img src="{{asset('user_asset/img/card28.png')}}" alt="">
                                <div>
                                    <h6>Hooper </h6>
                                    <span>Admin</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="boxed">
                                <img src="{{asset('user_asset/img/card24.png')}}" alt="">
                                <div>
                                    <h6>Ahmed23 </h6>
                                    <span>Admin</span>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="bor-lines"></div>
                    <h5>Site Statistics</h5>
                    <div class="row">
                        <div class="col-md-11">
                            <div class="wi-overflow">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Last 24 hours</th>
                                            <th>Last 7 days</th>
                                            <th>Last 30 days</th>
                                            <th>All Time</th>
                                        </tr>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="boxed-tab">Topics</div>
                                            </td>
                                            <td>{{$Postlast24HoursData}}</td>
                                            <td>{{$PostlastWeekData}}</td>
                                            <td>{{$PostlastMonthData}}</td>
                                            <td>{{$PostAll}}</td>
                                        </tr>
                                        
                                        <tr>
                                            <td>
                                                <div class="boxed-tab">Sign-Ups</div>
                                            </td>
                                            <td>{{$SignUplast24HoursData}}</td>
                                            <td>{{$SignUplastWeekData}}</td>
                                            <td>{{$SignUplastMonthData}}</td>
                                            <td>{{$SignUpAll}}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="boxed-tab">Active Users</div>
                                            </td>
                                            <td>{{$Userlast24HoursData}}</td>
                                            <td>{{$UserlastWeekData}}</td>
                                            <td>{{$UserlastMonthData}}</td>
                                            <td>{{$UserAll}}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="boxed-tab">Likes</div>
                                            </td>
                                            <td>{{$PostLikelast24HoursData}}</td>
                                            <td>{{$PostLikelastWeekData}}</td>
                                            <td>{{$PostLikelastMonthData}}</td>
                                            <td>{{$PostLikeAll}}</td>
                                        </tr>
                                        
                                    </tbody>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="bor-lines"></div>
                    <h5>Contact Us</h5>
                    <p class="para"><a href="mailto:support@wasetak.com">support@wasetak.com</a> In the event of a critical issue or urgent matter affecting this site, please contact us at </p>
                </div>
                <div class="box-2">
                    <h2>Faqs</h2>
                    @forelse ($faqs as $faq)
                    <h5>{{$faq->question}}</h5>
                    <p class="para">{{$faq->answer}}</p>
                    <div class="bor-lines"></div>
                    @empty
                        <h5>No FAQS Found</h5>
                    @endforelse
                    {{-- <h5>? What is Wasetak</h5>
                    <p class="para">many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, byinjected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with</p>
                    <div class="bor-lines"></div>
                    <h5>? How can you join Wasetak</h5>
                    <p class="para">many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, byinjected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with</p>
                    <div class="bor-lines"></div>
                    <h5>? What makes us different than all the other forums</h5>
                    <p class="para">many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, byinjected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with</p>
                    <div class="bor-lines"></div>
                    <h5>? How much does selling on Wasetak cost</h5>
                    <p class="para">many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, byinjected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with</p>
                    <div class="bor-lines"></div>
                    <h5>? Is Wasetak a paid membership website</h5>
                    <p class="para">many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, byinjected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with</p>
                    <div class="bor-lines bor-non"></div> --}}
                </div>
                <div class="box-3">
                    <h2>Terms of service</h2>
                    <h5>1 . Your SWAPD Account and Registration </h5>
                    <p class="para">many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, byinjected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with</p>
                    <div class="bor-lines"></div>
                    <h5>2 . Responsibility of Members</h5>
                    <p class="para">many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, byinjected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with</p>
                    <div class="bor-lines"></div>
                    <h5>3 . Transaction Rules</h5>
                    <p class="para">many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, byinjected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with</p>
                    <div class="bor-lines"></div>
                    <h5>4 . Payments</h5>
                    <p class="para">many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, byinjected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with</p>
                    <div class="bor-lines"></div>
                    <h5>5 . Anti-Spam Policy</h5>
                    <p class="para">many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, byinjected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with</p>
                    <div class="bor-lines bor-non"></div>
                </div>
                <div class="box-4">
                    <h2>Privacy Policy</h2>
                    <h5>? How does Wasetak collect data about me</h5>
                    <p class="para">many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, byinjected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with</p>
                    <div class="bor-lines"></div>
                    <h5>? What data does Wasetak collect about me, and why</h5>
                    <p class="para">many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, byinjected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with</p>
                    <div class="bor-lines"></div>
                    <h5>Wasetak uses data about how you use the website to</h5>
                    <p class="para">many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, byinjected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with</p>
                    <div class="bor-lines"></div>
                    <h5>Wasetak account data</h5>
                    <p class="para">many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, byinjected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with</p>
                    <div class="bor-lines"></div>
                    <h5>ID Verification</h5>
                    <p class="para">many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, byinjected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with</p>
                    <div class="bor-lines bor-non"></div>
                </div>
            </div>
        </div>
    </section>
@endsection