<div id="original_email_included_div" class="d-none">
   <div class="text-center mb-5">
      <h4 class="mb-3">?Original email included</h4>
      <p class="mb-0">The original email is the first inbox the account/property was registered with. may not offer any warranty on properties bought/sold without the original email. For more information about original emails, <a href="javascript:void(0)" class="click-here-link">click here</a>.</p>
   </div>
   <div class="row justify-content-center min_height">
      <div class="col-md-6">
       <select class="form-control form-select custom-select" placeholder="Choose" name="original_email_included" id="original_email_included">
         @foreach($original_email_included as $key=>$value)
            <option value="{{$key}}">{{$value}}</option>
         @endforeach
         
        
       </select>
      </div>
   </div>
   <div class="text-center mt-5">
      <button class="button" id="btn_original_email_included" onclick="nextBackStepClickManage('original_email_included_div','item_additional_comment_div')" disabled>Next</button>
      <button class="button light_button" onclick="nextBackStepClickManage('original_email_included_div','item_transaction_amount_div')">Back</button>
   </div>
</div>