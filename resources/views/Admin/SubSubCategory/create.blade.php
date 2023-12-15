@extends('Admin.layouts.master')
@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-10">
                                @if( $sub_sub_category)
                                    <h4>Update Child Category</h4>
                                @else
                                    <h4>Create Child Category</h4>
                                @endif
                            </div>
                            <div class="col-2 d-flex justify-content-end">
                                <a href="{{ route('admin.subsubcategory.index') }}" class="btn btn-primary btn-small"><i class="fa fa-plus"></i>
                                    View all Child Category</a>
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
                            <form action="{{ route('admin.subsubcategory.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" class="form-control"  name="id" value="{{ $sub_sub_category ? $sub_sub_category->id : '' }}" placeholder="id">
                                <div class="col-12 py-4">
                                    <label for="">Select Parent Category</label>
                                    <select name="sub_category_id" id="" class="form-control" required>
                                        @foreach ($sub_categories as $k=> $value)
                                            <option value="{{ $value->id }}" {{ $sub_sub_category ? $sub_sub_category->sub_category_id  ==  $value->id ? 'selected' : '' :  '' }}>{{ $value->name }}</option>
                                        @endforeach
                                       
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label for="">Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Name"  value="{{ $sub_sub_category ? $sub_sub_category->name : '' }}"  required
                                        id="">
                                </div>
                                <div class="col-12 py-4">
                                    <label for="">Color</label>
                                    <input type="color" name="color" class="form-control" placeholder="color" value="{{ $sub_sub_category ? $sub_sub_category->color : '' }}"
                                        required id="">
                                </div>
                                <div class="col-12 py-4">
                                    <label for="">Description</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3">{{ $sub_sub_category ? $sub_sub_category->description : '' }}</textarea>
                                </div>

                               
                                <div class="col-12 py-4">
                                    <label for="">Select Status</label>
                                    <select name="is_active" id="" class="form-control" required>
                                        <option value="">Select Status</option>
                                        <option value="1" {{ $sub_sub_category ? $sub_sub_category->is_active == 1 ? 'selected' : '' : '' }}>Active</option>
                                        <option value="0" {{ $sub_sub_category ? $sub_sub_category->is_active == 0 ? 'selected' : '' : '' }}>InActive</option>
                                    </select>
                                </div>
                                <div class="col-12 py-4">
                                    <button class="btn btn-primary">{{ $sub_sub_category ? 'Upadate Sub Sub Category' : 'Create Sub Sub  Category' }}</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection