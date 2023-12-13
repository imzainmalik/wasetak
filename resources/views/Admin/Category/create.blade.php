@extends('Admin.layouts.master')
@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-10">
                                @if( $category)
                                    <h3>Update Category</h3>
                                @else
                                    <h3>Create Category</h3>
                                @endif
                            </div>
                            <div class="col-2 d-flex justify-content-end">
                                <a href="{{ route('admin.category.index') }}" class="btn btn-primary"><i class="fa fa-plus"></i>
                                    View all Category</a>
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
                            <form action="{{ route('admin.category.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" class="form-control"  name="id" value="{{ $category ? $category->id : '' }}" placeholder="id">
                                <div class="col-12">
                                    <label for="">Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Name"  value="{{ $category ? $category->name : '' }}"  required
                                        id="">
                                </div>
                                <div class="col-12 py-4">
                                    <label for="">Color</label>
                                    <input type="color" name="color" class="form-control" placeholder="color" value="{{ $category ? $category->color : '' }}"
                                        required id="">
                                </div>
                                <div class="col-12 py-4">
                                    <label for="">Description</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3">{{ $category ? $category->description : '' }}</textarea>
                                </div>

                                <div class="col-12 py-4">
                                    <label for="">Select Status</label>
                                    <select name="is_active" id="" class="form-control" required>
                                        <option value="">Select Status</option>
                                        <option value="1" {{ $category ? $category->is_active == 1 ? 'selected' : '' : '' }}>Active</option>
                                        <option value="0" {{ $category ? $category->is_active == 0 ? 'selected' : '' : '' }}>InActive</option>
                                    </select>
                                </div>
                                <div class="col-12 py-4">
                                    <button class="btn btn-primary">{{ $category ? 'Upadate Category' : 'Create Category' }}</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection