<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<script>

    function ticket_approval_confirmation(id, status) {
        console.log(id, status);
    Swal.fire({
        title: "Are you sure do you really want to perform this action?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Yes continue",
        showLoaderOnConfirm: true,
    }).then((result) => {
        if (result.isConfirmed) {
            $.get('{{config("app.url")}}staff/post/ticket/change_status/' + id + '?status=' + status + ' ');
            Swal.fire({
                title: "Success!",
                text: "Status has been changed.",
                icon: "success"
            });

            window.location.reload();
        }
    });
    }

    function approval_confirmation(id, status) {

        Swal.fire({
            title: "Are you sure do you really want to perform this action?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "Yes continue",
            showLoaderOnConfirm: true,
        }).then((result) => {
            if (result.isConfirmed) {
                $.get('{{config("app.url")}}staff/post/change_status/' + id + '?status=' + status + ' ');
                Swal.fire({
                    title: "Success!",
                    text: "Status has been changed.",
                    icon: "success"
                });

                window.location.reload();
            }
        });
    }

    function win_bid_confirmation(id, status) {

        Swal.fire({
            title: "Are you sure do you really want to perform this action?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "Yes continue",
            showLoaderOnConfirm: true,
        }).then((result) => {
            if (result.isConfirmed) {
                $.get('{{config("app.url")}}staff/post/bid_win/' + id + '?status=' + status + ' ');
                Swal.fire({
                    title: "Success!",
                    text: "Status has been changed.",
                    icon: "success"
                });

                window.location.reload();
            }
        });
    }


    function approval_confirmation_page(id, status) {
        Swal.fire({
            title: "Are you sure do you really want to perform this action?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "Yes continue",
            showLoaderOnConfirm: true,
        }).then((result) => {
            if (result.isConfirmed) {
                $.get('{{config("app.url")}}staff/page/change_status/' + id + '?status=' + status + ' ');
                Swal.fire({
                    title: "Success!",
                    text: "Status has been changed.",
                    icon: "success"
                });
                window.location.reload();
            }
        });
    }


    function change_account_status(user_id, status){
        Swal.fire({
            title: "Are you sure do you really want to perform this action?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "Yes continue",
            showLoaderOnConfirm: true,
        }).then((result) => {
            if (result.isConfirmed) {
                $.get('{{config("app.url")}}staff/users/change_status/' + user_id + '?status=' + status + ' ');
                Swal.fire({
                    title: "Success!",
                    text: "Status has been changed.",
                    icon: "success"
                });

                window.location.reload();
            }
        });
    }

    function delete_comment(comment_id, status){
        Swal.fire({
            title: "Are you sure do you really want to perform this action?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "Yes continue",
            showLoaderOnConfirm: true,
        }).then((result) => {
            if (result.isConfirmed) {
                $.get('{{config("app.url")}}staff/post/comments/delete/' + comment_id + '?status=' + status + ' ');
                Swal.fire({
                    title: "Success!",
                    text: "Status has been changed.",
                    icon: "success"
                });

                window.location.reload();
            }
        });
    }
    function delete_comment_page(comment_id, status){
        Swal.fire({
            title: "Are you sure do you really want to perform this action?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "Yes continue",
            showLoaderOnConfirm: true,
        }).then((result) => {
            if (result.isConfirmed) {
                $.get('{{config("app.url")}}staff/page/comments/delete/' + comment_id + '?status=' + status + ' ');
                Swal.fire({
                    title: "Success!",
                    text: "Status has been changed.",
                    icon: "success"
                });

                window.location.reload();
            }
        });
    }


    // sweetAlertInitialize();
    @if (session('Success'))
        Swal.fire({
            title: 'Success',
            icon: 'success',
            text: "{{ session('Success') }}",
        })
    @endif

    @if (session('error'))
        Swal.fire({
            title: 'Error',
            icon: 'error',
            text: "{{ session('error') }}",
        })
    @endif

    @if (session('warning'))
        Swal.fire({
            title: 'Warning',
            icon: 'warning',
            text: "{{ session('warning') }}",
        })
    @endif

    @if (session('info'))
        Swal.fire({
            title: 'Info',
            icon: 'info',
            text: "{{ session('info') }}",
        })
    @endif
</script>
