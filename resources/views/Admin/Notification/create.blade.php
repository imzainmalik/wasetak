@extends('Admin.layouts.master')
@section('content')
    <div class="main-content">
        <div class="page-content">
            {{-- <div class="container-fluid">

                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-10">
                                @if( $sub_category)
                                    <h3>Update Sub Category</h3>
                                @else
                                    <h3>Create Sub Category</h3>
                                @endif
                            </div>
                            <div class="col-2 d-flex justify-content-end">
                                <a href="{{ route('admin.subcategory.index') }}" class="btn btn-primary"><i class="fa fa-plus"></i>
                                    View all Sub Category</a>
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
                            <form action="{{ route('admin.subcategory.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" class="form-control"  name="id" value="{{ $sub_category ? $sub_category->id : '' }}" placeholder="id">
                                <div class="col-12 py-4">
                                    <label for="">Select Parent Category</label>
                                    <select name="forum_category_id" id="" class="form-control" required>
                                        @foreach ($categories as $k=> $value)
                                            <option value="{{ $value->id }}" {{ $sub_category ? $sub_category->forum_category_id  ==  $value->id ? 'selected' : '' :  '' }}>{{ $value->name }}</option>
                                        @endforeach
                                       
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label for="">Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Name"  value="{{ $sub_category ? $sub_category->name : '' }}"  required
                                        id="">
                                </div>
                                <div class="col-12 py-4">
                                    <label for="">Color</label>
                                    <input type="color" name="color" class="form-control" placeholder="color" value="{{ $sub_category ? $sub_category->color : '' }}"
                                        required id="">
                                </div>
                                <div class="col-12 py-4">
                                    <label for="">Description</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3">{{ $sub_category ? $sub_category->description : '' }}</textarea>
                                </div>

                               
                                <div class="col-12 py-4">
                                    <label for="">Select Status</label>
                                    <select name="is_active" id="" class="form-control" required>
                                        <option value="">Select Status</option>
                                        <option value="1" {{ $sub_category ? $sub_category->is_active == 1 ? 'selected' : '' : '' }}>Active</option>
                                        <option value="0" {{ $sub_category ? $sub_category->is_active == 0 ? 'selected' : '' : '' }}>InActive</option>
                                    </select>
                                </div>
                                <div class="col-12 py-4">
                                    <button class="btn btn-primary">{{ $sub_category ? 'Upadate Category' : 'Create Category' }}</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>

            </div> --}}
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">{{ __('Send Notification') }}</div>
                            <div class="card-body">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif
              
                                <form action="{{ route('send.notification') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label>Select User</label>
                                        <select class="form-control select2" name="user[]" required multiple="multiple" style="width: 100%;">
                                            <option value="0">All</option>
                                            @foreach($users as $user)
                                            <option value="{{$user->id}}">{{$user->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <br/>
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" class="form-control" name="title" required>
                                    </div>
                                    <br/>
                                   
                                    <div class="form-group">
                                        <label>Body</label>
                                        <textarea class="form-control" name="body" required></textarea>
                                      </div>
                                      <br/>
                                    <button type="submit" class="btn btn-primary">Send Notification</button>
                                </form>
              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
            {{-- <script src="https://www.gstatic.com/firebasejs/7.23.0/firebase.js"></script>
            <script>
              
                var firebaseConfig = {
                    apiKey: "AIzaSyCCOF82t3Jbmr9ZzYQJ0JzkhjSJRa8LGoM",
                    authDomain: "wasetak-104d1.firebaseapp.com",
                    projectId: "wasetak-104d1",
                    storageBucket: "wasetak-104d1.appspot.com",
                    messagingSenderId: "730519712816",
                    appId: "1:730519712816:web:025a8227863fdfe8de29f5",
                    measurementId: "G-LX1EV3969R"
                };
                  
                firebase.initializeApp(firebaseConfig);
                const messaging = firebase.messaging();
            
                  
                messaging.onMessage(function(payload) {
                    const noteTitle = payload.notification.title;
                    const noteOptions = {
                        body: payload.notification.body,
                        icon: payload.notification.icon,
                    };
                    new Notification(noteTitle, noteOptions);
                });
               
            </script> --}}
              <script>
                  $('.select2').select2({
                      tags: false,
                      tokenSeparators: [',', ' '],
                      placeholder: "Select User"
                  });
              </script>

        </div>
    </div>
@endsection