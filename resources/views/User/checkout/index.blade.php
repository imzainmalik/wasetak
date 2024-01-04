@extends('User.layouts.master')
@section('content')
    @push('text_editor_css')
        <link rel="stylesheet" href="{{ asset('user_asset/css/jquery-te-1.4.0.css') }}">
        <link rel="stylesheet" href="{{ asset('user_asset/css/style.css') }}">
    @endpush

    @if (Auth::check())
        <div class="inner_page_container checkout">
            <div class="container">

                @include('User.checkout.find_buyer')

                @include('User.checkout.choose_buyer_seller')

                @include('User.checkout.choose_service_or_item')

                @include('User.checkout.service.describe_the_service')

                @include('User.checkout.service.how_long_will_take_service')

                @include('User.checkout.service.success_rate_service')

                @include('User.checkout.service.payment_method_selection')

                @include('User.checkout.service.transaction_amount')

                @include('User.checkout.service.additional_comments')

                @include('User.checkout.service.checkout_confirmation')

                @include('User.checkout.item.handle_url')

                @include('User.checkout.item.payment_method_selection')

                @include('User.checkout.item.transaction_amount')

                @include('User.checkout.item.original_email_included')

                @include('User.checkout.item.additional_comments')

                @include('User.checkout.item.checkout_confirmation')

                <div class="checkout_links">
                    <a href="#">Our Fees</a>
                    <a href="#">? What is Wasetak</a>
                    <a href="#">Knowledge Base</a>
                    <a href="#">Terms of service</a>
                </div>
            </div>
        </div>
    @else
        <div class="inner_page_container checkout">
            <div class="container">
                <h1>Safely Buy/Sell/Trade Virtual Anything</h1>
                <form id="form_begin_transaction">
                    @csrf
                    <div class="row align-items-center">
                        <div class="col-md-4 sta_mt">
                            <input type="text" class="form-control" placeholder="Buyers Email" id="buyer_email"
                                name="buyer_email" onkeyup="checkBtnBeginTransaction()">
                        </div>
                        <div class="col-md-4">
                            <img src="{{ asset('user_asset/img/swap.png') }}">
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="Sellers Email" id="seller_email"
                                name="seller_email" onkeyup="checkBtnBeginTransaction()">
                        </div>
                    </div>
                    <div class="text-center mt-5"><button type="button" class="button light_button"
                            id="btn_begin_transaction" disabled>Begin Transaction <span class="spinner-border d-none"
                                role="status"></span></button></div>
                </form>
                <div class="checkout_links">
                    <a href="#">Our Fees</a>
                    <a href="#">? What is Wasetak</a>
                    <a href="#">Knowledge Base</a>
                    <a href="#">Terms of service</a>
                </div>
            </div>
        </div>
    @endif

    @if (Auth::check())
        <!-- Send Invite Popup -->
        <div class="modal fade sendInvitation" id="sendInvitation" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                    <div class="modal-body">
                        <p>If you're unable to locate the member, it means he/she doesn't have a {{ config('app.name') }}
                            account. Send the user an invite by using the form below. You will be notified once he/she
                            becomes a member. Once that happens, please start the transaction again.
                        </p>
                        <div class="row">
                            <div class="col-md-8">
                                <input type="text" class="form-control" placeholder="Email Address"
                                    id="send_invite_email_id" name="send_invite_email_id">
                                <div class="btn-group">
                                    <button class="button" type="button" id="btn-send-invite">Save <span
                                            class="spinner-border d-none" role="status"></span></button>
                                    <button class="button light_button" data-bs-dismiss="modal">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Send Invite Popup -->
        <div class="modal fade sendInvitation invi-confirmation" id="invitationConfirmation" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                    <div class="modal-body">
                        <p>Thank you ! invite sent ! You will receive a notification once the user sign up </p>
                        <button class="button" data-bs-dismiss="modal">Ok</button>
                    </div>
                </div>
            </div>
        </div>
    @else
        <!-- already registered seller Popup -->
        <div class="modal fade sendInvitation" id="beginTransactionLoginInfoModal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                    <div class="modal-body">
                        <p>The email <b id="email"></b> is already registered. <br />
                            Is that you? <a data-bs-toggle="modal" class="alreadyAccount" data-bs-target="#login"
                                href="javascript:void(0)">Log in to your account.</a><br />
                            Not you? <a data-bs-toggle="modal" class="dontHaveAccount" data-bs-target="#signup"
                                href="javascript:void(0)">Register to continue.</a></p>
                        <button class="button" data-bs-dismiss="modal">Ok</button>
                    </div>
                </div>
            </div>
        </div> 
        <!-- sellers are not registered Popup -->
        <div class="modal fade sendInvitation" id="sellerNotRegisteredModal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                    <div class="modal-body">
                        <p>It seems none of these emails are registered on {{ config('app.name') }}. If you would like to
                            continue, both parties will need to register. To send invites to both emails, click the button
                            below. Once you register a new account, please come back to this page to start the transaction.
                        </p>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="btn-group">
                                    <button class="button" type="button" id="btn-send-invites">Send Invites <span
                                            class="spinner-border d-none" role="status"></span></button>
                                    <button class="button" data-bs-dismiss="modal">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection

@push('js')
    <script src="{{ asset('user_asset/js/jquery-te-1.4.0.min.js') }}"></script>
    <script>
        @if (!Auth::check())
            $(document).ready(function() {
                $('#btn_begin_transaction').on('click', function() {
                    var formData = new FormData();;
                    formData.append('_token', $('meta[name="csrf-token"]').attr('content'));
                    formData.append('buyer_email', $('#buyer_email').val());
                    formData.append('seller_email', $('#seller_email').val())

                    $.ajax({
                        url: "{{ route('checkout.beginTransaction') }}",
                        type: "POST",
                        data: formData,
                        contentType: false,
                        processData: false,
                        beforeSend: function() {
                            $(this).find('span').removeClass('d-none');
                            $(this).prop('disabled', true);
                        },
                        success: function(res) {
                            $(this).find('span').addClass('d-none');
                            $(this).prop('disabled', false);
                            if (res.status) {
                                if (res.msg == 'notExist') {
                                    $('#sellerNotRegisteredModal').modal('show');
                                } else {
                                    $('#beginTransactionLoginInfoModal').modal('show');
                                }
                            } else {
                                toastr.error(res.msg);
                            }
                        }
                    });
                })

                $('#btn-send-invites').on('click', function() {
                    var formData = new FormData();;
                    formData.append('_token', $('meta[name="csrf-token"]').attr('content'));
                    formData.append('buyer_email', $('#buyer_email').val());
                    formData.append('seller_email', $('#seller_email').val())

                    $.ajax({
                        url: "{{ route('checkout.sendInvites') }}",
                        type: "POST",
                        data: formData,
                        contentType: false,
                        processData: false,
                        beforeSend: function() {
                            $('#btn-send-invites').find('span').removeClass('d-none');
                            $('#btn-send-invites').attr('disabled', true);
                        },
                        success: function(res) {


                            if (res.status) {
                                $('#sellerNotRegisteredModal').modal('hide');
                                $('#invitationConfirmation').modal('show');
                                $('#btn-send-invites').find('span').addClass('d-none');
                                $('#btn-send-invites').attr('disabled', false);
                            } else {
                                toastr.error(res.msg);
                                $('#btn-send-invites').find('span').addClass('d-none');
                                $('#btn-send-invites').attr('disabled', false);
                            }
                        }
                    });
                })


            });

            function checkBtnBeginTransaction() {
                var buyer_email = $('#buyer_email').val();
                var seller_email = $('#seller_email').val();
                var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                if (buyer_email.trim().length > 0 && seller_email.trim().length > 0 && regex.test(buyer_email) && regex
                    .test(seller_email)) {
                    $('#btn_begin_transaction').prop('disabled', false);
                } else {
                    $('#btn_begin_transaction').prop('disabled', true);
                }
            }
        @else
            let buyer_username;
            let buyer_seller_type;
            let item_service_type;
            let payment_method;
            let original_email_included_type;
            $(document).ready(function() {
                $('#buyer_username').on('keyup', function() {
                    var username = $(this).val();
                    buyer_username = username;
                    $('#search_username_list_ul').html('');
                    if (username.trim().length <= 0) {

                        $('#search_username_list_div').addClass('d-none');
                        $('#btn_begin_transaction').attr('disabled', true);
                    } else {
                        var formData = new FormData();;
                        formData.append('_token', $('meta[name="csrf-token"]').attr('content'));
                        formData.append('username', username);

                        $.ajax({
                            url: "{{ route('checkout.findUsernameList') }}",
                            type: "POST",
                            data: formData,
                            contentType: false,
                            processData: false,
                            beforeSend: function() {
                                $('#btn-send-invites').find('span').removeClass('d-none');
                                $('#btn-send-invites').attr('disabled', true);
                            },
                            success: function(res) {
                                if (res.status) {
                                    $('#search_username_list_div').removeClass('d-none');
                                    if (res.list.length > 0) {
                                        var list_html = '';
                                        $.each(res.list, function(index, val) {

                                            var img =
                                                '{{ asset('user_asset/img/profile') }}/profile.png';
                                            list_html += "<li id='li_user_" + val.id +
                                                "' onclick='selectUser(this)'><img src='" +
                                                img + "'> " + val.username + "</li>";

                                        });
                                        $('#search_username_list_ul').html(list_html);
                                    } else {
                                        $('#search_username_list_div').addClass('d-none');
                                        $('#search_username_list_ul').html('');
                                    }

                                } else {
                                    toastr.error(res.msg);
                                    $('#search_username_list_div').addClass('d-none');
                                    $('#search_username_list_ul').html('');
                                }
                            }
                        });
                    }
                })

                $('#btn-send-invite').on('click', function() {
                    var email = $('#send_invite_email_id').val();
                    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                    if (email.trim().length <= 0) {
                        toastr.error("Email address is required");
                    } else if (!regex.test(email)) {
                        toastr.error("Email address is invalid");
                    } else {
                        var formData = new FormData();
                        formData.append('_token', $('meta[name="csrf-token"]').attr('content'));
                        formData.append('buyer_email', email);
                        $.ajax({
                            url: "{{ route('checkout.sendInvites') }}",
                            type: "POST",
                            data: formData,
                            contentType: false,
                            processData: false,
                            beforeSend: function() {
                                $('#btn-send-invite').find('span').removeClass('d-none');
                                $('#btn-send-invite').attr('disabled', true);
                            },
                            success: function(res) {
                                if (res.status) {
                                    $('#sendInvitation').modal('hide');
                                    $('#invitationConfirmation').modal('show');
                                    $('#btn-send-invite').find('span').addClass('d-none');
                                    $('#btn-send-invite').attr('disabled', false);
                                } else {
                                    toastr.error(res.msg);
                                    $('#btn-send-invite').find('span').addClass('d-none');
                                    $('#btn-send-invite').attr('disabled', false);
                                }
                            }
                        });
                    }
                })

                $('#sendInvitation').on('hidden.bs.modal', function() {
                    $('#send_invite_email_id').val('');
                });

                $('#btn_begin_transaction').on('click', function() {
                    nextBackStepClickManage('find_buyer_div', 'choose_buyer_seller_type_div');
                })

                $('#btn_checkout_confirmation').on('click', function() {
                    // console.log(payment_method);
                    var formData = new FormData();;
                    formData.append('_token', $('meta[name="csrf-token"]').attr('content'));
                    formData.append('buyer_username', $('#buyer_username').val());
                    formData.append('buyer_seller_type', buyer_seller_type);
                    formData.append('ticket_for', item_service_type);
                    formData.append('service_describe', $('#service_describe').val());
                    formData.append('long_service_take', $('#service_take').val());
                    formData.append('service_rate', $('#service_success_rate').val());
                    formData.append('payment_method', $('#payment_method').val());
                    formData.append('transaction_amount', $('#transaction_amount').val());
                    formData.append('additional_comment', $('#additional_comment').val());
                    uniqueNumber = Math.floor(Math.random() * 90000) + 10000;
                    formData.append('ticket_no', uniqueNumber);

                    $.ajax({
                        url: "{{ route('checkout.create_ticket') }}",
                        type: "POST",
                        data: formData,
                        contentType: false,
                        processData: false,
                        beforeSend: function() {
                            $(this).find('span').removeClass('d-none');
                            $(this).prop('disabled', true);
                        },
                        success: function(res) {

                            $(this).find('span').addClass('d-none');

                            if (res.status) {
                                $('#checkoutConfirmmodal').modal('show');
                                if (res.data && res.data != null) {
                                    var url = "{{ route('checkout.ticket_details', ':id') }}";
                                    url = url.replaceAll(':id', res.data.ticket_no)
                                    setTimeout(() => {
                                        window.location.href = url;
                                    }, 2000);

                                }

                            } else {
                                $(this).prop('disabled', false);
                                toastr.error(res.msg);
                            }
                        }
                    });

                })

                $('#btn_item_checkout_confirmation').on('click', function() {
                    // console.log(payment_method);
                    var formData = new FormData();;
                    formData.append('_token', $('meta[name="csrf-token"]').attr('content'));
                    formData.append('buyer_username', $('#buyer_username').val());
                    formData.append('buyer_seller_type', buyer_seller_type);
                    formData.append('ticket_for', item_service_type);
                    formData.append('handle_url', $('#handle_url').val());
                    formData.append('payment_method', $('#payment_method').val());
                    formData.append('transaction_amount', $('#item_transaction_amount').val());
                    formData.append('original_email_included', original_email_included_type);
                    formData.append('additional_comment', $('#item_additional_comment').val());
                    uniqueNumber = Math.floor(Math.random() * 90000) + 10000;
                    formData.append('ticket_no', uniqueNumber);

                    $.ajax({
                        url: "{{ route('checkout.create_ticket') }}",
                        type: "POST",
                        data: formData,
                        contentType: false,
                        processData: false,
                        beforeSend: function() {
                            $(this).find('span').removeClass('d-none');
                            $(this).prop('disabled', true);
                        },
                        success: function(res) {

                            $(this).find('span').addClass('d-none');

                            if (res.status) {
                                $('#itemCheckoutConfirmmodal').modal('show');
                                // if (res.data && res.data != null) {
                                //     var url = "{{ route('checkout.ticket_details', ':id') }}";
                                //     url = url.replaceAll(':id', res.data.ticket_no)
                                //     setTimeout(() => {
                                //         window.location.href = url;
                                //     }, 2000);
                                // }

                            } else {
                                $(this).prop('disabled', false);
                                toastr.error(res.msg);
                            }
                        }
                    });
                })
                // choose buyer or seller type
                $('#buyer_seller_type').on('change', function() {
                    // customSelectOptionClick(this);
                    buyer_seller_type = $('#buyer_seller_type').val();
                    // console.log(buyer_seller_type);
                    if (buyer_seller_type.length > 0) {
                        $('#btn_choose_buyer_seller_type').attr('disabled', false);
                    } else {
                        $('#btn_choose_buyer_seller_type').attr('disabled', true);
                    }
                });

                // choose item or service type
                $('#item_or_service_type_select_div .custom-option').on('click', function() {
                     customSelectOptionClick(this);
                    item_service_type = $('#item_or_service_type').val();
                     
                    if (item_service_type.length > 0) {
                        $('#btn_choose_item_or_service_type').attr('disabled', false);
                    } else {
                        $('#btn_choose_item_or_service_type').attr('disabled', true);
                    }
                });

                // choose item or service type next button click
                $('#btn_choose_item_or_service_type').on('click', function() {
                    item_service_type = $('#item_or_service_type').val();

                    if (buyer_seller_type == 'Buyer') {
                        $('#buyer_service_info_modal').modal('show');
                    } else if (item_service_type == 'Service' && buyer_seller_type == 'Seller') {
                        // alert('Service');
                        $('#choose_item_or_service_type_div').addClass('d-none');
                        nextBackStepClickManage('choose_item_or_service_type_div',
                            'seller_describe_service_div');

                    } else if (item_service_type == 'Item' && buyer_seller_type == 'Seller') {
                        // alert('Item');
                        $('#choose_item_or_service_type_div').addClass('d-none');
                        nextBackStepClickManage('choose_item_or_service_type_div', 'handle_url_div');
                    }
                })

                $("#service_describe").jqte({
                    formats: false,
                    fsize: false,
                    color: false,
                    u: false,
                    sub: false,
                    sup: false,
                    outdent: false,
                    indent: false,
                    strike: false,
                    link: true,
                    unlink: false,
                    remove: false,
                    rule: false,
                    change: function() {
                        changeServiceDescribe();
                    }
                });

                $("#service_take").jqte({
                    formats: false,
                    fsize: false,
                    color: false,
                    u: false,
                    sub: false,
                    sup: false,
                    outdent: false,
                    indent: false,
                    strike: false,
                    link: true,
                    unlink: false,
                    remove: false,
                    rule: false,
                    change: function() {
                        changeServiceTake();
                    }

                });

                $("#service_success_rate").jqte({
                    formats: false,
                    fsize: false,
                    color: false,
                    u: false,
                    sub: false,
                    sup: false,
                    outdent: false,
                    indent: false,
                    strike: false,
                    link: true,
                    unlink: false,
                    remove: false,
                    rule: false,
                    change: function() {
                        changeServiceSuccessRate();
                    }

                });

                $("#additional_comment").jqte({
                    formats: false,
                    fsize: false,
                    color: false,
                    u: false,
                    sub: false,
                    sup: false,
                    outdent: false,
                    indent: false,
                    strike: false,
                    link: true,
                    unlink: false,
                    remove: false,
                    rule: false,
                    change: function() {
                        changeAdditionalComment();
                    }

                });

                $("#item_additional_comment").jqte({
                    formats: false,
                    fsize: false,
                    color: false,
                    u: false,
                    sub: false,
                    sup: false,
                    outdent: false,
                    indent: false,
                    strike: false,
                    link: true,
                    unlink: false,
                    remove: false,
                    rule: false,
                    change: function() {
                        changeItemAdditionalComment();
                    }

                });

                $("#handle_url").jqte({
                    formats: false,
                    fsize: false,
                    color: false,
                    u: false,
                    sub: false,
                    sup: false,
                    outdent: false,
                    indent: false,
                    strike: false,
                    link: true,
                    unlink: false,
                    remove: false,
                    rule: false,
                    change: function() {
                        changeHandleUrl();
                    }

                });

                $('#payment_method_selection_div .custom-option').on('click', function() {
                    customSelectOptionClick(this);
                    payment_method = $('#payment_method').val();
                    if (payment_method.length > 0) {
                        $('#btn_payment_method').attr('disabled', false);
                    } else {
                        $('#btn_payment_method').attr('disabled', true);
                    }
                });

                $('#transaction_amount').on('keyup', function() {
                    transaction_amount = $(this).val();
                    if (transaction_amount.length > 0) {
                        $('#btn_transaction_amount').attr('disabled', false);
                    } else {
                        $('#btn_transaction_amount').attr('disabled', true);
                    }
                })

                $('#confirm_checkout_chk').on('change', function() {
                    if ($(this).is(":checked")) {
                        $('#btn_checkout_confirmation').attr('disabled', false);
                    } else {
                        $('#btn_checkout_confirmation').attr('disabled', true);
                    }
                })

                $('#item_confirm_checkout_chk').on('change', function() {
                    if ($(this).is(":checked")) {
                        $('#btn_item_checkout_confirmation').attr('disabled', false);
                    } else {
                        $('#btn_item_checkout_confirmation').attr('disabled', true);
                    }
                })

                $('#item_payment_method_selection_div .custom-option').on('click', function() {
                    customSelectOptionClick(this);
                    payment_method = $('#item_payment_method').val();
                    if (payment_method.length > 0) {
                        $('#btn_item_payment_method').attr('disabled', false);
                    } else {
                        $('#btn_item_payment_method').attr('disabled', true);
                    }
                });

                $('#original_email_included_div .custom-option').on('click', function() {
                    customSelectOptionClick(this);
                    original_email_included_type = $(this).attr('data-value');
                    if (original_email_included_type.length > 0) {
                        $('#btn_original_email_included').attr('disabled', false);
                    } else {
                        $('#btn_original_email_included').attr('disabled', true);
                    }
                });

                $('#item_transaction_amount').on('keyup', function() {
                    transaction_amount = $(this).val();
                    if (transaction_amount.length > 0) {
                        $('#btn_item_transaction_amount').attr('disabled', false);
                    } else {
                        $('#btn_item_transaction_amount').attr('disabled', true);
                    }
                })

            });

            function changeServiceDescribe() {
                var editor_text = $("#service_describe").val();
                $("#service_describe_preview_div").html(editor_text);
                if (editor_text.trim().length <= 0) {
                    $('#btn_seller_describe_service').attr('disabled', true);
                } else {
                    $('#btn_seller_describe_service').attr('disabled', false);
                }
            }

            function changeServiceTake() {
                var editor_text = $("#service_take").val();
                $("#service_take_preview_div").html(editor_text);
                if (editor_text.trim().length <= 0) {
                    $('#btn_seller_take_service').attr('disabled', true);
                } else {
                    $('#btn_seller_take_service').attr('disabled', false);
                }
            }

            function changeServiceSuccessRate() {
                var editor_text = $("#service_success_rate").val();
                $("#service_success_rate_preview_div").html(editor_text);
                if (editor_text.trim().length <= 0) {
                    $('#btn_seller_success_rate_service').attr('disabled', true);
                } else {
                    $('#btn_seller_success_rate_service').attr('disabled', false);
                }
            }

            function changeAdditionalComment() {
                var editor_text = $("#additional_comment").val();
                $("#additional_comment_preview_div").html(editor_text);
                if (editor_text.trim().length <= 0) {
                    $('#btn_additional_comment').attr('disabled', true);
                } else {
                    $('#btn_additional_comment').attr('disabled', false);
                }
            }

            function changeHandleUrl() {
                var editor_text = $("#handle_url").val();
                $("#handle_url_preview_div").html(editor_text);
                if (editor_text.trim().length <= 0) {
                    $('#btn_handle_url').attr('disabled', true);
                } else {
                    $('#btn_handle_url').attr('disabled', false);
                }
            }

            function changeItemAdditionalComment() {
                var editor_text = $("#item_additional_comment").val();
                $("#item_additional_comment_preview_div").html(editor_text);
                if (editor_text.trim().length <= 0) {
                    $('#btn_item_additional_comment').attr('disabled', true);
                } else {
                    $('#btn_item_additional_comment').attr('disabled', false);
                }
            }

            function selectUser(obj) {
                $('#buyer_username').val(($(obj).text()));
                $('#btn_begin_transaction').attr('disabled', false);
                $('#search_username_list_div').addClass('d-none');
            }

            function nextBackStepClickManage(hiddenDivId, showDivId) {
                console.log(hiddenDivId, showDivId);
                $('#' + hiddenDivId).addClass('d-none');
                $('#' + showDivId).removeClass('d-none');
            }
        @endif
    </script>
@endpush
