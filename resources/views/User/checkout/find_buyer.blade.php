<div id="find_buyer_div">
    <h1>Safely Buy/Sell/Trade Virtual Anything</h1>
    <form id="form_begin_transaction">
        @csrf
        <div class="row align-items-center">
            <div class="col-md-4 sta_mt">
                <div class="pos-relative">
                    <input type="text" class="form-control" placeholder="Type Username" id="buyer_username" name="buyer_username">
                    <div class="cant_find">
                        <span>Can’t Find the user ? <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#sendInvitation">Send Him Invite</a></span>
                    </div>
                    <div class="search_list d-none" id="search_username_list_div">
                        <ul id="search_username_list_ul"></ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('user_asset/img/swap.png') }}">
            </div>
            <div class="col-md-4">
                <input type="text" class="form-control"  placeholder="Sellers Username" id="seller_username" name="seller_username" value="{{Auth::user()->username}}" readonly style="cursor: not-allowed;">
            </div>
        </div>
        <div class="text-center mt-5"><button type="button" class="button light_button" id="btn_begin_transaction" disabled>Begin Transaction <span class="spinner-border d-none" role="status"></span></button></div>
    </form>
</div>