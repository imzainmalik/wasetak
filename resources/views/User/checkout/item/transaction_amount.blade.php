<div id="item_transaction_amount_div" class="d-none">
   <div class="text-center mb-5">
      <h4>Transaction amount (USD only)</h4>
      <p class="mb-0">Please enter the USD value of this transaction. Please remember that sellers are responsible for all fees on, no exceptions. To learn more, <a href="javascript:void(0)" class="click-here-link">click here</a>.</p>
   </div>
   <div class="row justify-content-center min_height">
      <div class="col-md-6">
        <input type="text" class="form-control" name="item_transaction_amount" id="item_transaction_amount" placeholder="0">
      </div>
      
   </div>
   <div class="text-center mt-5">
      <button class="button" id="btn_item_transaction_amount" onclick="nextBackStepClickManage('item_transaction_amount_div','original_email_included_div')" disabled>Next</button>
      <button class="button light_button" onclick="nextBackStepClickManage('item_transaction_amount_div','item_payment_method_selection_div')">Back</button>
   </div>
</div>