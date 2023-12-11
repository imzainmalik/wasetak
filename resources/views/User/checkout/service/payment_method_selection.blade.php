<div id="payment_method_selection_div" class="d-none">
   <div class="text-center mb-5">
      <h4 class="mb-3">Please select the payment method. We currently offer Bank Wire, BTC, ETH, and USDT</h4>
      <p class="mb-0">Please make sure that you've discussed the payment method with the other party prior to starting this ticket. Otherwise, SWAPD may cancel the transaction. To find out more about our accepted payment methods and rules, <a href="javascript:void(0)" class="click-here-link">click here</a>.</p>
   </div>
   <div class="row justify-content-center min_height">
      <div class="col-md-6">
       <select class="form-control form-select custom-select" placeholder="Choose" name="payment_method" id="payment_method">
         @foreach($payment_method_list as $key=>$method)
            <option value="{{$key}}">{{$method}}</option>
         @endforeach
         
        
       </select>
      </div>
   </div>
   <div class="text-center mt-5">
      <button class="button" id="btn_payment_method" onclick="nextBackStepClickManage('payment_method_selection_div','transaction_amount_div')" disabled>Next</button>
      <button class="button light_button" onclick="nextBackStepClickManage('payment_method_selection_div','seller_success_rate_service_div')">Back</button>
   </div>
</div>