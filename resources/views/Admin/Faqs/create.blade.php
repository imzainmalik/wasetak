@extends('Admin.layouts.master')
@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-10">
                                @if( $faqs)
                                    <h3>Update FAQs</h3>
                                @else
                                    <h3>Create FAQs</h3>
                                @endif
                            </div>
                            <div class="col-2 d-flex justify-content-end">
                                <a href="{{ route('admin.faqs.index') }}" class="btn btn-primary"><i class="fa fa-plus"></i>
                                    View all FAQs</a>
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
                            <form action="{{ route('admin.faqs.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" class="form-control"  name="id" value="{{ $faqs ? $faqs->id : '' }}" placeholder="id">
                                
                                <div class="col-12">
                                    <label for="">Question</label>
                                    <input type="text" name="question" class="form-control" placeholder="Enter Question"  value="{{ $faqs ? $faqs->question : '' }}"  required
                                        id="">
                                </div>
                                <div class="col-12 py-4">
                                    <label for="">Answer</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" name="answer" rows="3" required>{{ $faqs ? $faqs->answer : '' }}</textarea>
                                </div>
                                <div class="col-12 py-4">
                                    <label for="">Sort</label>
                                    <input type="number" name="sort" class="form-control" placeholder="Enter Sorting Number" value="{{ $faqs ? $faqs->sort : '' }}"
                                        required id="">
                                </div>
                                <div class="col-12 py-4">
                                    <label for="">Select Status</label>
                                    <select name="is_active" id="" class="form-control" required>
                                        {{-- <option value="">Select Status</option> --}}
                                        <option value="1" {{ $faqs ? $faqs->is_active == 1 ? 'selected' : '' : '' }}>Active</option>
                                        <option value="0" {{ $faqs ? $faqs->is_active == 0 ? 'selected' : '' : '' }}>InActive</option>
                                    </select>
                                </div>
                                <div class="col-12 py-4">
                                    <button class="btn btn-primary">{{ $faqs ? 'Upadate FAQs' : 'Create FAQs' }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection