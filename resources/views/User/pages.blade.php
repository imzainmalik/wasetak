@extends('User.layouts.master')
@section('content')
<section class="sec4 sect4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>{{$page->heading}} </h3>
                    <span class="base">{{$page->sub_heading}}</span>
                </div>
            </div>
            <div class="row mar-t">
                <div class="col-md-1 pe-md-0">
                    <p class="par">{{$page->getAdminInfo ? substr($page->getAdminInfo->first_name, 0, 1) : ''}}</p>
                </div>
                <div class="col-md-10">
                    <div class="boxed3">
                        <h4>{{($page->getAdminInfo ? $page->getAdminInfo->first_name . ' ' . $page->getAdminInfo->last_name  : '')}}</h4>
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
                                    <a href="#"><img src="{{asset('user_asset/img/card14.png')}}" alt=""><span>Reply</span> </a>
                                    <a href="#"><img src="{{asset('user_asset/img/card18.png')}}" alt=""><span>PM User</span></a>
                                    @if(auth()->check())
                                    <span id="Pagelike" dir="ltr"> {{$page->getPagelikes->count()}} Likes <i class="{{$like_check ? "fa-solid" : "fa-regular" }} fa-thumbs-up fa-lg" style="color: #7a7a7a;"></i></span>
                                    @else
                                    <span dir="ltr" class="login"> {{$page->getPagelikes->count()}}  Likes  <i class="fa-regular fa-thumbs-up fa-lg" style="color: #7a7a7a;"></i></span>
                                    @endif
                                    {{-- <a href="#" ><img src="{{asset('user_asset/img/card23.png')}}" alt=""><span>144</span></a> --}}

                                    {{-- <a href="#"><img src="{{asset('user_asset/img/card19.png')}}" alt=""></a>
                                    <a href="#"><img src="{{asset('user_asset/img/card20.png')}}" alt=""></a> --}}
                                  
                                     {{-- <a href="javascript:void(0);"  data-toggle="modal" data-target="#addtoany"><img src="{{asset('user_asset/img/card21.png')}}" alt=""></a> --}}
                                </div>
                            </div>
                            <div class="col-md-6 text-e">
                                {{-- <span><span class="com2">7 days</span> Last Reply </span> --}}
                                <span><span class="com2">{{$page->created_at->format('M j')}}</span> Created </span>
                            </div>
                        </div>
                    </div>
                    <div class="boxed7">
                        <ul class="categ">
                            <li><a href="#" class="modalButton" data-popup="popupTwo"><img src="{{asset('user_asset/img/card21.png')}}" alt=""> share </a></li>
                            <li> <a href="#" class="modalButton" data-popup="popupTwelve"><img src="{{asset('user_asset/img/card19.png')}}" alt=""> Bookmark </a></li>
                            @if(auth()->check())
                            <li><a href="#" class="modalButton" data-popup="popupThree"><img src="{{asset('user_asset/img/card20.png')}}" alt=""> Flag </a></li>
                            @else
                            <li><a href="#" class="modalButton login" ><img src="{{asset('user_asset/img/card20.png')}}" alt=""> Flag </a></li>
                            
                            @endif
                            <!-- <li><a href="#"><img src="{{asset('user_asset/img/card32.png')}}" alt=""> Tracking <i class="fas fa-sort-down"></i></a></li> -->
                            <li>
                                <div class="dropdown2">
                                    <a href="#" class="dropbtn"><img src="{{asset('user_asset/img/card32.png')}}" alt=""> Tracking <i class="fas fa-sort-down"></i></a>
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
        <input type="text" hidden name="page_id" value="{{$page->id}}" class="form-control" id="page_id">
    </section>

    <!-- flag -->
<section dir="rtl" class="modal modalWindow flag" id="popupThree">
	<section class="modalWrapper">
		<h2>!Thanks for helping to keep our community civil</h2>
		<div class="alert alert-success" role="alert" id="successMsg" style="display: none" >
			Flaged Successfully 
		</div>
		<form id="SubmitFormFlag">
			<div>
				<div class="input-ra">
					<input id="reveal" type="radio" name="reveal" value="reveal"/>
					<div class="me-3">
						<label for="reveal"><h5>URL/@Handle Reveal</h5></label>
						<p class="para">This post reveals the URL/@Handle in public, whether in a text form or inside the screenshots.</p>
					</div>
				</div>	
			</div>
            <span class="text-danger" style="margin:0px 30px 10px 0px" id="revealErrorMsg"></span>
			<div>
				<div class="input-ra">
					<input id="inappropriate" type="radio" name="reveal"  value="inappropriate"/>
					<div  class="me-3">
						<label for="inappropriate"> <h5>It's Inappropriate</h5></label>
						<p class="para">This post contains content that a reasonable person would consider offensive, abusive, or a violation of our <a href="#">.Terms of Service</a></p>
					</div>
				</div>
			</div>
			<div>
				<div class="input-ra">
					<input id="its_spam" type="radio" name="reveal" value="its_spam"/>
					<div  class="me-3">
						<label for="its_spam"><h5>It's Spam</h5></label>
						<p class="para">This post is an advertisement, or vandalism. It is not useful or relevant to the current topic.</p>
					</div>
                    
				</div>
				
			</div>
			<div>
				<div class="input-ra">
					<input id="something_else"  name="reveal" type="radio" value="something_else" />
					<div class="me-3">
						<label for="something_else"><h5>Something Else</h5></label>
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
                    <input type="text" id="bookmark_for"  name="bookmark_for" placeholder="What is this bookmark for">
                    <span class="pop-trigger"> <img src="{{asset('user_asset/img/card99.png')}}" alt="" data-toggle="tooltip"
                            title="Show"></span>
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
                    <h4>Remind me</h4>
                    <div class="bookmark-opt">
                        <label class="container date_hide"><img src="{{asset('user_asset/img/card100.png')}}" alt=""><a href="#">Later Today
                                <span>  {{(Carbon\Carbon::now()->tomorrow()->format('D'))}}:  8:00
                                    am</span></a>
                            <input type="radio"   checked="checked" name="bookmark_radio" value="later_today">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container date_hide"><img src="{{asset('user_asset/img/card101.png')}}" alt=""><a href="#">Tomorrow <span>
                            {{(Carbon\Carbon::now()->tomorrow()->format('D'))}},
                                    8:00 am</span></a>
                            <input type="radio" name="bookmark_radio" value="tomorrow">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container date_hide"><img src="{{asset('user_asset/img/card102.png')}}" alt=""><a href="#">This Weekend
                                <span>Jan, 8:00
                                    am</span></a>
                            <input type="radio" name="bookmark_radio"  value="this_week">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container date_hide"><img src="{{asset('user_asset/img/card103.png')}}" alt=""><a href="#">Monday <span>Feb,
                                    8:00 am</span></a>
                            <input type="radio" name="bookmark_radio" value="monday">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container date_hide"><img src="{{asset('user_asset/img/card104.png')}}" alt="" ><a href="#">Next Month
                                <span>Jan, 8:00 am</span></a>
                            <input type="radio" name="bookmark_radio" value="next_month">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container date_hide"><img src="{{asset('user_asset/img/card105.png')}}" alt=""><a href="#">Last custom date
                                time <span>Fri, 8:00
                                    am</span></a>
                            <input type="radio"  name="bookmark_radio" value="last_custom_date">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container custom-date-trigger"><img src="{{asset('user_asset/img/card105.png')}}" alt=""><a href="#">Custom date and
                                time</a>
                            <input type="radio" name="bookmark_radio" value="custom_date">
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
                                    <input type="date" id="custum_date" name="custum_date" placeholder="2023-04-27">
                                </div>
                                <input type="time" id="custum_time" name="custum_time" placeholder="01:00 PM">
                            </div>
                        </div>
                        <h4  class="my-3 ">Relative</h4>
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
                        </div>
                    </div>
                </div>
                {{-- <a href="#" class="save-book">Remove reminder and save bookmark</a> --}}
                <div class="row">
                    <div class="col-md-8">
                        <button type="submit" class="theme-btn1">Save</button>
                        <a href="#" class="theme-btn2">Cancel</a>
                    </div>  
                    <div class="col-md-4 text-e">
                        <a href="#" class="trash">
                            <img src="{{asset('user_asset/img/card107.png')}}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </form>
    </section>
    <a class="closeBtn"><i class="fal fa-times"></i></a>
</section>

@endsection
@push('js')
<script>

        $( document ).ready(function() {           
            $(".pop-trigger").click(function () {
                $(".pop-content-hide").slideToggle();
            });

            $(".custom-date-trigger").click(function () {
                $(".custom-time").slideDown();
            });
            $(".date_hide").click(function () {
                $(".custom-time").slideUp();
            });
        });


    // Page like
        var total = parseInt('{{$page->getPageLikes->count()}}');
        $('#Pagelike').click(function (){
            var data ={"_token":'{{csrf_token()}}'};
            var url = '{{route('user.user_like_page',[$page->id])}}';
            var res= AjaxRequest(url,data);
            if(res.status==1)
            {
              total = total + 1;
             $('#Pagelike').html(''+ total +' Likes  <i class="fa-solid fa-thumbs-up fa-lg" style="color: #7a7a7a;"></i>');
            }
            else
            {
                total = total - 1;
               $('#Pagelike').html(''+ total +' Likes  <i class="fa-regular fa-thumbs-up fa-lg" style="color: #7a7a7a;"></i>');
            }
        });


    
        //flag Post

    $('#SubmitFormFlag').on('submit',function(e){
        e.preventDefault();

        let reason = $('#reason').val();
        let page_id = $('#page_id').val();
        let reveal = $('input[name="reveal"]:checked').val();

        $.ajax({
        url: "{{ route('user.user_flag_page')}}",
        type:"POST",
        data:{
                "_token": "{{ csrf_token() }}",
                reason:reason,
                page_id: page_id,
                reveal: reveal,
            },
        success:function(response){
                $('#successMsg').show();
                $('#reason').val('');
                $('input[name="reveal"]:checked').each(function(){
                    $(this).checked = false;  
                });
                $('#reasonErrorMsg').hide();
                $('#revealErrorMsg').hide();
                    
            },
        error: function(response) {
                $('#reasonErrorMsg').text(response.responseJSON.errors.reason);
                $('#revealErrorMsg').text(response.responseJSON.errors.reveal);
            
            },
        });
    });



    $('#SubmitFormBookmark').on('submit',function(e){
        e.preventDefault();
        let bookmark_for = $('#bookmark_for').val();
        let page_id = $('#page_id').val();
        let custum_date = $('#custum_date').val();
        let custum_time = $('#custum_time').val();
        let bookmark_radio = $('input[name="bookmark_radio"]:checked').val();
        let notifieds =  $('#notifieds').find(":selected").val();
        

        // console.log(bookmark_for,page_id,bookmark_radio, notifieds, custum_date, custum_time);

        $.ajax({
          url: "{{ route('user.user_bookmark_page')}}",
          type:"POST",
          data:{
                "_token": "{{ csrf_token() }}",
                bookmark_for:bookmark_for,
                page_id: page_id,
                custum_date: custum_date,
                custum_time: custum_time,
                bookmark_radio: bookmark_radio,
                notifieds: notifieds,
            },
          success:function(response){
                $('#successMsg').show();
                // $('#reason').val('');
                // $('input[name="reveal"]:checked').each(function(){
                //     $(this).checked = false;  
                // });
                // $('#reasonErrorMsg').hide();
                // $('#revealErrorMsg').hide();
                    
            },
          error: function(response) {
                // $('#reasonErrorMsg').text(response.responseJSON.errors.reason);
                // $('#revealErrorMsg').text(response.responseJSON.errors.reveal);
            
            },
          });
    });


</script>
@endpush
