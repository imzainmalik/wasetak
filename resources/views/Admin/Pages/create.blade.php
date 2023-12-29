@extends('Admin.layouts.master')
@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-10">
                                @if( $page)
                                    <h3>Update Page</h3>
                                @else
                                    <h3>Create Page</h3>
                                @endif
                            </div>
                            <div class="col-2 d-flex justify-content-end">
                                <a href="{{ route('admin.category.index') }}" class="btn btn-primary"><i class="fa fa-plus"></i>
                                    View all Pages</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class=" col-md-12">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <br>
                        <div class="container">
                            <form action="{{ route('admin.pages.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" class="form-control"  name="id" value="{{ $page ? $page->id : '' }}" placeholder="id">
                                <div class="col-12">
                                    <label for="">Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Name"  value="{{ $page ? $page->name : '' }}"  required
                                        id="">
                                </div>
                                <div class="col-12 py-4">
                                    <label for="">Page Content</label>
                                    <textarea class="ckeditor form-control" name="content" required>{{ $page ? $page->content : ''}}</textarea>
                                </div>

                                <div class="col-12 py-4">
                                    <label for="">Select Parent Page (Optional)</label>
                                    <select name="parent_id" id="" class="form-control" >
                                        <option value="">None</option>
                                        @foreach ($parent_pages as $par_page)    
                                        <option value="{{$par_page->id}}" {{$page ? $page->parent_id == $par_page->parent_id ? 'selected' : '' : '' }}>{{$par_page->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-12 py-4">
                                    <label for="">Select Admin</label>
                                    <select name="admin_id" id="" class="form-control" required>
                                        <option value="">None</option>
                                        @foreach ($admins as $admin)    
                                        <option value="{{$admin->id}}" {{$page ? $page->admin_id == $admin->id ? 'selected' : '' : '' }}>{{$admin->first_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                
                                <div class="col-12 py-4">
                                    <label for="">Select Status</label>
                                    <select name="is_active" id="" class="form-control" required>
                                        <option value="">Select Status</option>
                                        <option value="1" {{ $page ? $page->is_active == 1 ? 'selected' : '' : '' }}>Active</option>
                                        <option value="0" {{ $page ? $page->is_active == 0 ? 'selected' : '' : '' }}>InActive</option>
                                    </select>
                                </div>
                                <div class="col-12 py-4">
                                    <button class="btn btn-primary">{{ $page ? 'Upadate Page' : 'Create Page' }}</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('custom_scripts')

<script type="text/javascript">
    $(document).ready(function() {
       $('.ckeditor').ckeditor();
    });
</script>
@endsection