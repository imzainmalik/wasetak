<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<script>

function delete_bookmark(bookmark_id){
        Swal.fire({
            title: "Are you sure do you really want to perform this action?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "Yes continue",
            showLoaderOnConfirm: true,
        }).then((result) => {
            if (result.isConfirmed) {
                $.get('/delete_bookmark/' + bookmark_id + '');
                Swal.fire({
                    title: "Success!",
                    text: "Bookmark has been deleted.",
                    icon: "success"
                });

                window.location.reload();
            }
        });
    }

    function pin_bookmark(bookmark_id){
        Swal.fire({
            title: "Are you sure do you really want to perform this action?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "Yes continue",
            showLoaderOnConfirm: true,
        }).then((result) => {
            if (result.isConfirmed) {
                $.get('/pin_bookmark/' + bookmark_id + '');
                Swal.fire({
                    title: "Success!",
                    text: "Bookmark has been Pinned to top.",
                    icon: "success"
                });

                window.location.reload();
            }
        });
    }

    function unpin_bookmark(bookmark_id){
        Swal.fire({
            title: "Are you sure do you really want to perform this action?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "Yes continue",
            showLoaderOnConfirm: true,
        }).then((result) => {
            if (result.isConfirmed) {
                $.get('/unpin_bookmark/' + bookmark_id + '');
                Swal.fire({
                    title: "Success!",
                    text: "Bookmark has been Unpinned from top.",
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
                $.get('/admin/post/change_status/' + id + '?status=' + status + ' ');
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
                $.get('/admin/users/change_status/' + user_id + '?status=' + status + ' ');
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
                $.get('/admin/post/comments/delete/' + comment_id + '?status=' + status + ' ');
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
