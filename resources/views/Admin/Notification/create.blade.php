@extends('Admin.layouts.master')
@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-10">
                                
                                    <h3>Send Notification</h3>
                               
                            </div>
                            <div class="col-2 d-flex justify-content-end">
                                <a href="{{ route('admin.notifications') }}" class="btn btn-primary"><i class="fa fa-plus"></i>
                                    View all Notifications</a>
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
                            <form action="{{ route('send.notification') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="col-12 py-3">
                                    <label>Select User</label>
                                    <select class="form-control select2" name="user[]" required multiple="multiple" style="width: 100%;">
                                        <option value="0">All</option>
                                        @foreach($users as $user)
                                        <option value="{{$user->id}}">{{$user->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                        
                                <div class="col-12 py-3">
                                    <label>Title</label>
                                    <input type="text" class="form-control" name="title" required>
                                </div>
                        
                                <div class="col-12 py-3">
                                    <label>Body</label>
                                    <textarea class="form-control" name="body" rows="5" required></textarea>
                                </div>
                                <div class="col-12 py-3">
                                    <label>Url</label>
                                    <input type="url" class="form-control" name="url" required>
                                </div>
                          
                                <button type="submit" class="btn btn-primary">Send Notification</button>
                            </form>
                         
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