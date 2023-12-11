@extends('User.layouts.master')
@section('content')
<?php
  use Carbon\Carbon;
  $ticketId = (isset($getTicketDetail->ticket_no) && !empty($getTicketDetail->ticket_no)) ? $getTicketDetail->ticket_no : '';
  $handleUrl = (isset($getTicketDetail->handle_url) && !empty($getTicketDetail->handle_url)) ? $getTicketDetail->handle_url : '';
  $buyerName = (isset($getTicketDetail->buyer_data->username) && !empty($getTicketDetail->buyer_data->username)) ? $getTicketDetail->buyer_data->username : ''; 
  $sellerName = (isset($getTicketDetail->seller_data->username) && !empty($getTicketDetail->seller_data->username)) ? $getTicketDetail->seller_data->username : ''; 
  $paymentMethod = (isset($getTicketDetail->payment_method) && !empty($getTicketDetail->payment_method)) ? $getTicketDetail->payment_method : '';
  $aggredPrice = (isset($getTicketDetail->transaction_amount) && !empty($getTicketDetail->transaction_amount)) ? $getTicketDetail->transaction_amount : '';
  $originalEmailInclude = (isset($getTicketDetail->original_email_included) && !empty($getTicketDetail->original_email_included)) ? $getTicketDetail->original_email_included : '';
  $additionalAmmount = (isset($getTicketDetail->additional_comment) && !empty($getTicketDetail->additional_comment)) ? $getTicketDetail->additional_comment : '';

  if(isset($getTicketDetail->created_at) && !empty($getTicketDetail->created_at)){
    $currentDate = Carbon::now();
    $fromDate = Carbon::parse($getTicketDetail->created_at);
  
    $minutes = $currentDate->diffInMinutes($fromDate);
    $hours = $currentDate->diffInHours($fromDate);
    $days = $currentDate->diffInDays($fromDate);
    $months = $currentDate->diffInMonths($fromDate);
    $years = $currentDate->diffInYears($fromDate);
    if($years>0){
     $timeDiff = $years . "y Ago" ; 
    }else if($months>0){
      $timeDiff = $months . "m Ago"; 
    }else if($days>0){
      $timeDiff = $days . "d Ago"; 
    }else if($hours>0){
      $timeDiff = $hours . "h Ago"; ; 
    }else{
        $timeDiff = $minutes . "m Ago"; ; 
    }
  }
?>

    
<div class="inner_page_container after_checkout_page">
  <div class="container">
     <div class="after_checkout_title">
      <h1>[Ticket# {{$ticketId}}] <a href="https://wasetak.net/{!! $handleUrl !!}"> https://wasetak.net/ {!! $handleUrl !!} </a></h1>
    </div>
    

     <div class="after_checkout_row">
        <div class="after_checkout_col1">
          <div class="profile_text">
            W
          </div>
        </div>
        <div class="after_checkout_col2">
            <div class="profile_name">Checkout</div>
            <div class="notif_description_message">
                <h4>!Hello</h4>
                <p>ou’ve got a pending checkout ticket from {{ $buyerName }}. Please take your time and go over the terms set within the ticket.</p>
                <h2>:Pending ticket terms</h2>
                <ul>
                    <li>Seller: <a href="#">{{$sellerName}}</a></li>
                    <li>Buyer: <a href="#">{{$buyerName}}</a></li>
                    <li>URL/Handle: <a href="https://wasetak.net/{!! $handleUrl !!}" target="_blank">{!! $handleUrl !!}</a></li>
                    <li>Payment method: {{$paymentMethod}}</li>
                    <li>Agreed price: {{$aggredPrice}}</li>
                    <li>Original e-mail: {{$originalEmailInclude}}</li>
                    <li>Additional comments:</li>
                </ul>
                <p>{!! $additionalAmmount !!}</p>
            </div>
            <div class="after_checkout_action">
              <div class="notif_action">
                <ul>
                    <li>
                        <a href="#"><i class="ri-bookmark-fill"></i></a>
                    </li>
                   <li>
                    <a href="#"><i class="ri-flag-fill"></i></a>
                  </li>
                    <li>
                    <a href="#"><i class="ri-links-fill"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="ri-thumb-up-fill"></i></a>
                  </li>
                </ul>
              </div>
              <div class="reply_link">
                <a href="#"><i class="ri-arrow-down-s-line"></i> Reply 1</a>
              </div>
            </div>
        </div>
        <div class="after_checkout_col3">
            <div class="date_timeline">
                <div class="date_timeline_year">@if(isset($getTicketDetail->created_at) && !empty($getTicketDetail->created_at)){{$getTicketDetail->created_at->format('M Y')}}@endif</div>
                <div class="date_timeline_body">
                    <div class="date_timeline_line"></div>
                    <div class="date_timeline_body_details">
                        <b>1/254</b>
                        <spam>@if(isset($getTicketDetail->created_at) && !empty($getTicketDetail->created_at)){{$getTicketDetail->created_at->format('M Y')}}@endif</spam>
                    </div>
                </div>
                <div class="date_timeline_time">{{$timeDiff}}</div>
                <div class="notif_icon"><i class="ri-notification-2-fill"></i></div>
            </div>
        </div>
    </div>
   
    <div class="frequent_posters after_checkout_frequent_posters">
      <div class="d-flex align-items-center justify-content-between">
        <div>
          <div class="fp_action">
            <a href="#"><i class="ri-links-fill"></i> 2 Links</a>
            <a href="#"><i class="ri-eye-fill"></i> 14.5k Views</a>
            <a href="#"><i class="ri-user-fill"></i> 78 Users </a>
            <a href="#"><i class="ri-thumb-up-fill"></i> 144 Likes </a>
            <a href="#"><i class="ri-reply-fill"></i> 256 Replies </a>
            <a href="#"><b>7 days </b> Last Reply</a>
            <a href="#"><b>Jan 22 </b> Created</a>
          </div>
          <h2>Frequent Posters</h2>
          <div class="fp_profiles">
            <div class="fp_profile">
              <img src="https://images.pexels.com/photos/17817595/pexels-photo-17817595/free-photo-of-blackbird-sitting-on-grass.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
              <span>10</span>
            </div>
            <div class="fp_profile">
              <img src="https://images.pexels.com/photos/17817595/pexels-photo-17817595/free-photo-of-blackbird-sitting-on-grass.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
              <span>10</span>
            </div>
            <div class="fp_profile">
              <img src="https://images.pexels.com/photos/17817595/pexels-photo-17817595/free-photo-of-blackbird-sitting-on-grass.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
              <span>10</span>
            </div>
          </div>
          <h2>Popular Links</h2>
          <ul class="popular_links">
            <li> https://swapd.co/fees1 TikTok account verified with the</li>
            <li>name and Username you need swapd.co</li>
          </ul>
          <div class="profile_card_list">
              <ul>
                <li>
                    <span>Checkout</span>
                      <span class="profile_icon">W</span>
                  </li>
                  <li>
                      <span>Mohdj</span>
                      <img src="https://images.pexels.com/photos/17817595/pexels-photo-17817595/free-photo-of-blackbird-sitting-on-grass.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
                  </li>
                  <li>
                    <span>mkh</span>
                      <img src="https://images.pexels.com/photos/17817595/pexels-photo-17817595/free-photo-of-blackbird-sitting-on-grass.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
                  </li>
                  <li>
                    <span>Alpha</span>
                      <img src="https://images.pexels.com/photos/17817595/pexels-photo-17817595/free-photo-of-blackbird-sitting-on-grass.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
                  </li>
              </ul>
          </div>
          <div class="button_group">
              <button class="button"><i class="ri-add-circle-fill"></i></button>
              <button class="button">Add or Remove</button>
          </div>
        </div>
      </div>
    </div>

    <div class="after_checkout_row after_checkout_admin">
        <div class="after_checkout_col1">
          <div class="profile_img">
            <img src="https://images.pexels.com/photos/17817595/pexels-photo-17817595/free-photo-of-blackbird-sitting-on-grass.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
          </div>
        </div>
        <div class="after_checkout_col2">
            <div class="profile_name"><small>Admin |</small> Alpha</div>
            <div class="notif_description_message">
                <h4>!Thank you for waiting! I am here to help</h4>
                <p>Thank you for using SWAPD! I am your personal SWAPD agent, ready to manage this transaction. This checkout ticket will be assigned to me, so please direct any questions or problems you may have by @tagging my username in your replies. If I cannot reply on time, one of our other admins may step in to help. To contact other admins, just type @Administrators in your reply. Please remember that our response times vary between 4-24 hours (usually quicker), and replies may get delayed during holidays/weekends. We appreciate everyone who follows our tagging etiquette guidelines.</p>
               <h2>?What’s next</h2>
                <p>I will begin the process once I familiarize myself with the terms. In case of any problems or last-minute changes, please let us know as soon as possible, so we can update the terms accordingly. Please keep in mind that both parties need to approve any changes from now on, as this transaction is officially in progress. The terms agreed between the buying/selling party have to comply with our Terms of Service.</p>
            </div>
            <div class="after_checkout_action">
              <div class="notif_action">
                <ul>
                    <li>
                        <a href="#"><i class="ri-bookmark-fill"></i></a>
                    </li>
                   <li>
                    <a href="#"><i class="ri-flag-fill"></i></a>
                  </li>
                    <li>
                    <a href="#"><i class="ri-links-fill"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="ri-thumb-up-fill"></i></a>
                  </li>
                </ul>
              </div>
              <div class="reply_link">
                <a href="#"><i class="ri-arrow-down-s-line"></i> Reply 1</a>
              </div>
            </div>
            <div class="after_checkout_closed">
                <i class="ri-lock-2-fill"></i>
                <img src="https://images.pexels.com/photos/17817595/pexels-photo-17817595/free-photo-of-blackbird-sitting-on-grass.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
                <span>Closed on May 20</span>
            </div>
            <div class="after_checkout_closed_links">
                <a href="#"><i class="ri-links-fill"></i> Share</a>
                <a href="#"><i class="ri-bookmark-fill"></i> Bookmark</a>
                <a href="#"><i class="ri-flag-fill"></i> Flag</a>
                <a href="#"><i class="ri-notification-2-fill"></i> Tracking</a>
            </div>
        </div>
         <div class="after_checkout_col3">
        </div>
    </div>

    <div class="message_page after_checkout_related_message">
        <h2>Related Messages</h2>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>Topic</th>
                <th></th>
                <th>Replies</th>
                <th>Views</th>
                <th>Activity</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Thanks For Spending Time with us</td>
                <td>
                  <div class="tbl_cart_icon">
                    <i class="ri-shopping-cart-2-fill"></i>
                  </div>
                </td>
                <td>0</td>
                <td>0</td>
                <td>1D</td>
              </tr>
              <tr>
                <td>Checkout Denied - Please verify your wasetak account</td>
                <td>
                  <div class="tbl_cart_icon">
                    <i class="ri-shopping-cart-2-fill"></i>
                  </div>
                </td>
                <td>0</td>
                <td>0</td>
                <td>1D</td>
              </tr>
              <tr>
                <td>Checkout Denied - Please verify your wasetak account</td>
                <td>
                  <div class="tbl_cart_icon">
                    <i class="ri-shopping-cart-2-fill"></i>
                  </div>
                </td>
                <td>0</td>
                <td>0</td>
                <td>1D</td>
              </tr>
              <tr>
                <td>Thanks For Spending Time with us</td>
                <td>
                  <div class="tbl_cart_icon">
                    <i class="ri-shopping-cart-2-fill"></i>
                  </div>
                </td>
                <td>0</td>
                <td>0</td>
                <td>1D</td>
              </tr>
            </tbody>
          </table>
        </div>

    </div>
  </div>
</div>


@endsection

@push('js')


@endpush
