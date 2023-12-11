<div id="seller_how_long_service_take_div" class="d-none">
   <div class="text-center mb-5">
      <h4>How long will the service take?</h4>
      <p class="mb-0">Please make sure to think this through, as {{config('app.name')}} staff may close your service if you pass your deadline and cancel the ticket.</p>
   </div>
   <div class="row justify-content-center min_height">
      <div class="col-md-6">
          <textarea class="editor form-control" name="service_take" id="service_take"></textarea>
          
      </div>
      <div class="col-md-6" >
         <div class="h-100 input-preview" id="service_take_preview_div">

         </div>
         
      </div>
   </div>
   <div class="text-center mt-5">
      <button class="button" id="btn_seller_take_service" onclick="nextBackStepClickManage('seller_how_long_service_take_div','seller_success_rate_service_div')" disabled>Next</button>
      <button class="button light_button" onclick="nextBackStepClickManage('seller_how_long_service_take_div','seller_describe_service_div')">Back</button>
   </div>
</div>