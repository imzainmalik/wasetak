@extends('User.layouts.master')
@section('content')
<section class="sec4">
    <div class="container">
        <div class="row">
            <div class="col-md-11">
                <div class="boxed1">
                    <img src="{{$post->getUserInfo ? $post->getUserInfo->d_picture ? asset($post->getUserInfo->d_picture) : asset('user_asset/img/card16.png') :  asset('user_asset/img/card16.png') }}" alt="">
                    <div>
                        <h4>{{$post->getUserInfo->name}}</h4>
                        <span><i class="fas fa-badge-check"></i> Verified Identity</span>
                    </div>
                </div>
                <h1>{{$post->title}}</h1>
                <div class="boxed2">
                    @if ($post->getCatInfo)
                    <div class="box1" ><span style="background-color: {{$post->getCatInfo->color}} !important"></span>{{$post->getCatInfo->name}} </div>
                    @endif
                    
                    @if ($post->getSubCatInfo)
                    <div class="box2"><span style="background-color: {{$post->getSubCatInfo->color}} !important"></span>{{$post->getSubCatInfo->name}}</div>
                    @endif
                    {{-- <div class="box1"><span></span>Unique services </div>
                    <div class="box2"><span></span>FB and IG Service</div>
                    <div class="box3">Featured</div> --}}

                    {{-- <div class="box4">Spotlight</div>
                    <div class="box5">Premium</div> --}}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-11">
                <div class="boxed3">
                   <p class="para"> {!! $post->description !!}</p>
                    {{-- <img src="{{asset('user_asset/img/card17.png')}}" alt="">
                    <p class="para">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
                    <p class="para">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
                    <p class="para">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p> --}}
                    <div class="row mar-t align-items-center">
                        <div class="col-md-6">
                            <div class="com">
                                <a href="#"><img src="{{asset('user_asset/img/card14.png')}}" alt=""><span>Reply</span> </a>
                                <a href="#"><img src="{{asset('user_asset/img/card18.png')}}" alt=""><span>PM User</span></a>
                                
                                <a href="#" id="bookmark"><i class="{{$bookmark ? "fa-solid" : "fa-regular"}} fa-bookmark" style="color: #7a7a7a;"></i></a>
                                <a href="#"><img src="{{asset('user_asset/img/card20.png')}}" alt=""></a>
                                <a href="#"><img src="{{asset('user_asset/img/card21.png')}}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-6 text-e">
                             @if($post->getPostReplies->where('is_active', 1)->last())
                             <span><span class="com2">{{Carbon\Carbon::create($post->getPostReplies->where('is_active', 1)->last()->created_at->format('Y-m-d h:i:s'))->diffForHumans()}}</span> Last Reply </span>
                             @endif                        
                            <span><span class="com2">{{Carbon\Carbon::create($post->created_at)->format('M j')}}</span> Created </span>
                        </div>
                    </div>
                </div>
                <div class="boxed4">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                
                            <span dir="ltr"> {{$post->getPostViews->count()}} Views <img src="{{asset('user_asset/img/card12.png')}}" alt=""></span>
                            {{-- <span dir="ltr"> 78 users <img src="{{asset('user_asset/img/card22.png')}}" alt=""></span> --}}
                            @if(auth()->check())
                            <span id="like" dir="ltr"> {{$post->getPostlikes->count()}} Likes  <i class="{{$like_check ? "fa-solid" : "fa-regular" }} fa-thumbs-up fa-lg" style="color: #7a7a7a;"></i>
                            @else
                                <span dir="ltr"> {{$post->getPostlikes->count()}} Likes  <i class="fa-regular fa-thumbs-up fa-lg" style="color: #7a7a7a;"></i>
                            @endif
                                   {{-- <img src="{{asset('user_asset/img/card23.png')}}" alt=""> --}}
                                </span>
                            <span dir="ltr"> {{$post->getPostReplies->where('is_active', 1)->count()}} replies <img src="{{asset('user_asset/img/card14.png')}}" alt=""></span>
                            {{-- <h4>Frequent Posters</h4>
                            <div class="img-num">
                                <div><img src="{{asset('user_asset/img/card24.png')}}" alt=""> <span>10</span></div>
                                <div><img src="{{asset('user_asset/img/card25.png')}}" alt=""> <span>5</span></div>
                                <div><img src="{{asset('user_asset/img/card26.png')}}" alt=""> <span>112</span></div>
                                <div><img src="{{asset('user_asset/img/card27.png')}}" alt=""> <span>25</span></div>
                                <div><img src="{{asset('user_asset/img/card28.png')}}" alt=""> <span>112</span></div>
                                <div><img src="{{asset('user_asset/img/card24.png')}}" alt=""> <span>10</span></div>
                                <div><img src="{{asset('user_asset/img/card25.png')}}" alt=""> <span>5</span></div>
                                <div><img src="{{asset('user_asset/img/card26.png')}}" alt=""> <span>112</span></div>
                                <div><img src="{{asset('user_asset/img/card27.png')}}" alt=""> <span>25</span></div>
                                <div><img src="{{asset('user_asset/img/card28.png')}}" alt=""> <span>112</span></div>
                            </div> --}}
                            {{-- <p class="para">.There are 259 replies with an estimated read time of 18 minutes</p> --}}
                        </div>
                        {{-- <div class="col-md-4 text-e">
                            <a href="#" class="theme-btn">Summarize This Topic</a>
                        </div> --}}
                    </div>
                </div>
                @if($post->getPostReplies)
                    @foreach($post->getPostReplies as $post_comm)
                    
                    <div class="boxed5">
                        <div class="boxerd-img">
                            <img src="{{asset('user_asset/img/card29.png')}}" alt="">
                            <h5>{{$post_comm->getPostedUserInfo->name}}</h5>
                        </div>
                        <p class="para">{{ $post_comm->reply}}</p>
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="com">
                                    {{-- <a href="#"><img src="{{asset('user_asset/img/card14.png')}}" alt=""><span>Reply</span> </a> --}}
                                    <a href="#"><img src="{{asset('user_asset/img/card18.png')}}" alt=""><span>PM User</span></a>

                                    @if(auth()->check())
                                    @php 
                                    $comment_like_check = App\Models\LikedReply::where('user_id' , auth()->user()->id)->where('reply_id', $post_comm->id)->first();
                                    @endphp
                                        <a href="#" id="comment_like" data-replyId="{{$post_comm->id}}">
                                        {{-- <img src="{{asset('user_asset/img/card23.png')}}" alt=""> --}}
                                        <i class="{{$comment_like_check ? "fa-solid" : "fa-regular" }} fa-thumbs-up fa-lg" style="color: #7a7a7a;"></i>
                                        <span>{{$post_comm->commentLikes->count()}}</span></a>
                                    @else
                                    <a href="#" data-replyId="{{$post_comm->id}}">
                                        {{-- <img src="{{asset('user_asset/img/card23.png')}}" alt=""> --}}
                                        <i class="fa-regular fa-thumbs-up fa-lg" style="color: #7a7a7a;"></i>
                                        <span>{{$post_comm->commentLikes->count()}}</span></a>
                                    @endif
                                  
                                    {{-- <a href="#"><img src="{{asset('user_asset/img/card19.png')}}" alt=""></a>
                                    <a href="#"><img src="{{asset('user_asset/img/card20.png')}}" alt=""></a>
                                    <a href="#"><img src="{{asset('user_asset/img/card21.png')}}" alt=""></a> --}}
                                </div>
                            </div>
                            <div class="col-md-6 text-e">
                                <div class="com2"><span>{{$post_comm->created_at->format('M j')}}</span></div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @endif
                {{-- <div class="boxed5">
                    <div class="boxerd-img">
                        <img src="{{asset('user_asset/img/card29.png')}}" alt="">
                        <h5>ii2Ahmed</h5>
                    </div>
                    <p class="para">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="com">
                                <a href="#"><img src="{{asset('user_asset/img/card14.png')}}" alt=""><span>Reply</span> </a>
                                <a href="#"><img src="{{asset('user_asset/img/card18.png')}}" alt=""><span>PM User</span></a>
                                <a href="#"><img src="{{asset('user_asset/img/card23.png')}}" alt=""><span>144</span></a>
                                <a href="#"><img src="{{asset('user_asset/img/card19.png')}}" alt=""></a>
                                <a href="#"><img src="{{asset('user_asset/img/card20.png')}}" alt=""></a>
                                <a href="#"><img src="{{asset('user_asset/img/card21.png')}}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-6 text-e">
                            <div class="com2"><span>Jan 22</span></div>
                        </div>
                    </div>
                </div>
                <div class="boxed5">
                    <div class="boxerd-img">
                        <img src="{{asset('user_asset/img/card29.png')}}" alt="">
                        <h5>ii2Ahmed</h5>
                    </div>
                    <p class="para">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="com">
                                <a href="#"><img src="{{asset('user_asset/img/card14.png')}}" alt=""><span>Reply</span> </a>
                                <a href="#"><img src="{{asset('user_asset/img/card18.png')}}" alt=""><span>PM User</span></a>
                                <a href="#"><img src="{{asset('user_asset/img/card23.png')}}" alt=""><span>144</span></a>
                                <a href="#"><img src="{{asset('user_asset/img/card19.png')}}" alt=""></a>
                                <a href="#"><img src="{{asset('user_asset/img/card20.png')}}" alt=""></a>
                                <a href="#"><img src="{{asset('user_asset/img/card21.png')}}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-6 text-e">
                            <div class="com2"><span>Jan 22</span></div>
                        </div>
                    </div>
                </div>
                <div class="boxed5">
                    <div class="boxerd-img">
                        <img src="{{asset('user_asset/img/card29.png')}}" alt="">
                        <h5>ii2Ahmed</h5>
                    </div>
                    <p class="para">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="com">
                                <a href="#"><img src="{{asset('user_asset/img/card14.png')}}" alt=""><span>Reply</span> </a>
                                <a href="#"><img src="{{asset('user_asset/img/card18.png')}}" alt=""><span>PM User</span></a>
                                <a href="#"><img src="{{asset('user_asset/img/card23.png')}}" alt=""><span>144</span></a>
                                <a href="#"><img src="{{asset('user_asset/img/card19.png')}}" alt=""></a>
                                <a href="#"><img src="{{asset('user_asset/img/card20.png')}}" alt=""></a>
                                <a href="#"><img src="{{asset('user_asset/img/card21.png')}}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-6 text-e">
                            <div class="com2"><span>Jan 22</span></div>
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="col-md-1 ps-0">
                <div class="boxed6">
                    <span>Jan 2021</span>
                    <div class="bor-line">
                        <h6>1/254</h6>
                        <span>Jan 2021</span>
                    </div>
                    <span>13h ago</span>
                    <!-- <a href="#"><img src="{{asset('user_asset/img/card30.png')}}" alt=""></a> -->
                    <div class="dropdown2">
                        <button class="dropbtn"><img src="{{asset('user_asset/img/card30.png')}}" alt=""></button>
                        <div class="dropdown-content">
                            <a href="#">
                                <div class="list">
                                    <img src="{{asset('user_asset/img/card37.png')}}" alt="">
                                    <div>
                                        <h5>watching</h5>
                                        <p class="para">you will be notified of every new reply in this topic and a count of new replies will be shown</p>
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="list">
                                    <img src="{{asset('user_asset/img/card38.png')}}" alt="">
                                    <div>
                                        <h5>Tracking</h5>
                                        <p class="para">A count of new replies will be shown for this topic.you will be notifiedif someone mentions your @name or replies to your</p>
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="list">
                                    <img src="{{asset('user_asset/img/card39.png')}}" alt="">
                                    <div>
                                        <h5>Normal</h5>
                                        <p class="para">You will be notified if someone mentions your @name or replies to you</p>
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="list">
                                    <img src="{{asset('user_asset/img/card40.png')}}" alt="">
                                    <div>
                                        <h5>Muted</h5>
                                        <p class="para">you will never be notified of anything about this topic, and it will not appear in latest</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <a href="#"><img src="{{asset('user_asset/img/card31.png')}}" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</section>
@push('js')
<script>
    // Post like
    var total = parseInt('{{$post->getPostlikes->count()}}');
    $('#like').click(function (){
        var data ={"_token":'{{csrf_token()}}'};
        var url = '{{route('user.user_like_post',[$post->id])}}';
        var res= AjaxRequest(url,data);
        if(res.status==1)
        {
          total = total + 1;
         $('#like').html(''+ total +' Likes  <i class="fa-solid fa-thumbs-up fa-lg" style="color: #7a7a7a;"></i>');
        }
        else
        {
            total = total - 1;
           $('#like').html(''+ total +' Likes  <i class="fa-regular fa-thumbs-up fa-lg" style="color: #7a7a7a;"></i>');
        }
    });

    //Comment Like

    $('#comment_like').click(function (){
      var total1 =   $('#comment_like span').html();
      var reply_id =   $('#comment_like').attr('data-replyId');

      var data ={"_token":'{{csrf_token()}}'};
      var url = '/user-like-post-comment/'+ reply_id; 
        var res= AjaxRequest(url,data);
        if(res.status==1)
        {
            total1 = parseInt(total1) + 1;
            $('#comment_like').html('<i class="fa-solid fa-thumbs-up fa-lg" style="color: #7a7a7a;"></i><span>'+ total1 +'</span>');
       
        }
        else
        {
            total1 = parseInt(total1) - 1;
            $('#comment_like').html('<i class="fa-regular fa-thumbs-up fa-lg" style="color: #7a7a7a;"></i><span>'+ total1 +'</span>');
        }

    });


    // Bookmark


    $('#bookmark').click(function (){
        var data ={"_token":'{{csrf_token()}}'};
        var url = '{{route('user.user_bookmark_post',[$post->id])}}';
        var res= AjaxRequest(url,data);
        if(res.status==1)
        {
            $('#bookmark').html('<i class="fa-solid fa-bookmark" style="color: #7a7a7a;">');
        }
        else
        {
            $('#bookmark').html('<i class="fa-regular fa-bookmark" style="color: #7a7a7a;">');
        }
    });

</script>
@endpush
@endsection