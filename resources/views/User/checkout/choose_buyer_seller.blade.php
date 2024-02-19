<div id="choose_buyer_seller_type_div" class="d-none">
   <div class="text-center mb-5">
      <h4>?Are you the buyer or seller in this transaction</h4>
   </div>
   <div class="row justify-content-center">
      <div class="col-md-5" id="buyer_seller_type_select_div">
         <select class="form-control form-select custom-select" placeholder="Choose" name="buyer_seller_type" id="buyer_seller_type">
             <option hidden value="">Select buyer or saller</option>
            <option value="Buyer">Buyer</option>
            <option value="Seller">Seller</option>
         </select>
      </div>
   </div>
   <div class="text-center mt-5">
      <button class="button" id="btn_choose_buyer_seller_type" onclick="nextBackStepClickManage('choose_buyer_seller_type_div','choose_item_or_service_type_div')" disabled>Next</button>
      <button class="button light_button" onclick="nextBackStepClickManage('choose_buyer_seller_type_div','find_buyer_div')">Back</button>
   </div>
</div>