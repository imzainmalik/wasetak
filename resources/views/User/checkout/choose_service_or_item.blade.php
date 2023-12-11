<div id="choose_item_or_service_type_div" class="d-none">
    <div class="text-center mb-5">
      <h4 class="mb-3">?Is this ticket for a service, item, or other</h4>
      <p class="mb-0">Items include things such as social media properties, domains, and websites <br> service is for all service-related checkout tickets <br> other is for trades/add request</p>
    </div>
   <div class="row justify-content-center">
      <div class="col-md-5" id="item_or_service_type_select_div">
         <select class="form-control form-select custom-select" placeholder="Choose" name="item_or_service_type" id="item_or_service_type">
            <option value="Service">Service</option>
            <option value="Item">Item</option>
         </select>
      </div>
   </div>
   <div class="text-center mt-5">
      <button class="button" id="btn_choose_item_or_service_type"   disabled>Next</button>
      <button class="button light_button" onclick="nextBackStepClickManage('choose_item_or_service_type_div','choose_buyer_seller_type_div')">Back</button>
   </div>
</div>

<!-- Modal -->
<div class="modal fade checkout_modal" id="buyer_service_info_modal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="modal-body">
        <p>Sorry Service requires that the seller starts the ticket. Please Contact the seller and ask him to start a ticket. Thank You!</p>
      </div>
    </div>
  </div>
</div>