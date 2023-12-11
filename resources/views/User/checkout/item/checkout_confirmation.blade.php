<div id="item_checkout_confirmation_div" class="d-none">
   <div class="text-center mb-5">
      <h4>Confirm Terms and Wasetak Transaction Contract</h4>
      <p class="mb-0">By proceeding, you fully agree to the SWAPD Terms of Service and Transaction Contract. Please also go over our buyer/seller responsibilities. We take checkout tickets seriously, and users are bound to the terms set in our contracts. We strongly encourage users to read them before proceeding.</p>
   </div>
   <div class="term_checkbox_center">

        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="item_confirm_checkout_chk" name="item_confirm_checkout_chk">
            <label class="form-check-label" for="item_confirm_checkout_chk">
                I Accept
            </label>
        </div>
    </div>
   <div class="text-center mt-5">
      <button class="button" id="btn_item_checkout_confirmation"  disabled>Create Ticket</button>
      <button class="button light_button" onclick="nextBackStepClickManage('item_checkout_confirmation_div','item_additional_comment_div')">Back</button>
   </div>
</div>

<div class="modal fade checkout_modal" id="itemCheckoutConfirmmodal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="modal-body">
        <h3>Thank you for starting a checkout ticket</h3>
        <p>Please hold, the transaction is currently pending approval. You will be notified via a private message once the other party accepts or denies the transaction. If accepted, the checkout ticket will start and you will be invited.</p>
        <p style="margin-top: 10px;"><b>For now, you don't have to do anything. Thank you!</b></p>
      </div>
    </div>
  </div>
</div>