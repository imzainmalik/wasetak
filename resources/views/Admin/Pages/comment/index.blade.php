@extends('Admin.layouts.master')
@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-10">
                                @if($page_id)
                                    {{$page->name}} Comments
                                @else
                                <h3>All Page Comments</h3>
                                @endif
                            </div> 
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered data-table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Commented By</th>
                                    <th>Page By</th>
                                    <th>Comments</th>
                                    <th>Page Name</th>
                                    <th>CreatedAt</th>
                                    <th>Comment Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom_scripts')
@if($page_id)
<script type="text/javascript">
    $(function() {

        var table = $('.data-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('admin.page.page_comments',[$page_id]) }}",
            columns: [
                {
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'commented_by',
                    name: 'commented_by'
                },
                
                {
                    data: 'posted_by',
                    name: 'posted_by'
                },
                {
                    data: 'reply',
                    name: 'reply'
                },
                {
                    data: 'post_details',
                    name: 'post_details'
                },
                {
                    data: 'created_at',
                    name: 'created_at'
                },
                {
                    data: 'comment_status',
                    name: 'comment_status'
                },
                {
                    data: 'actions',
                    name: 'actions'
                },
               
            ]
        });

    });
</script>
@else
<script type="text/javascript">
    $(function() {

        var table = $('.data-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('admin.page.page_comments') }}",
            columns: [
                {
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'commented_by',
                    name: 'commented_by'
                },
                
                {
                    data: 'posted_by',
                    name: 'posted_by'
                },
                {
                    data: 'reply',
                    name: 'reply'
                },
                {
                    data: 'post_details',
                    name: 'post_details'
                },
                {
                    data: 'created_at',
                    name: 'created_at'
                },
                {
                    data: 'comment_status',
                    name: 'comment_status'
                },
                {
                    data: 'actions',
                    name: 'actions'
                },
               
            ]
        });

    });
</script>
@endif


@endsection
