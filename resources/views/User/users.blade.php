@extends('User.layouts.master')
@section('content')
<link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">

    <section class="sec10">
        <div class="container">
            <div class="row mar-b">
                <div class="col-md-6">
                    <div class="week">
                        @if(isset($request['filter']))
                         <h3>{{ucwords($request['filter'])}}</h3>
                        @else
                            <h3>Week</h3>
                        @endif
                        <div class="dropdown">
                           
                            <button class="dropbtn">{{ isset($request['filter'])  ? $request['filter'] == 'all' ?  '' :  Carbon\Carbon::now()->format('M j, Y') . ' - ' . $end->format('M j, Y') :  Carbon\Carbon::now()->format('M j, Y') . ' - ' . $end->format('M j, Y') }} <i class="fas fa-sort-down"></i></button>
                            <div class="dropdown-content">
                                <a href="{{route('user.userList')}}?filter=all"><span>All Time</span></a>
                                <a href="{{route('user.userList')}}?filter=year"><span>Year</span> {{Carbon\Carbon::now()->format('M j, Y') .' - ' . Carbon\Carbon::now()->subYear()->format('M j, Y')}} </a>
                                <a href="{{route('user.userList')}}?filter=quarter"><span>Quarter</span>  {{Carbon\Carbon::now()->format('M j, Y') .' - ' . Carbon\Carbon::now()->subQuarter()->format('M j, Y')}}  </a>
                                <a href="{{route('user.userList')}}?filter=month"><span>Month</span>  {{Carbon\Carbon::now()->format('M, j') .' - ' . Carbon\Carbon::now()->subMonth()->format('M, j')}}  </a>
                                <a href="{{route('user.userList')}}?filter=week"><span>Week</span>  {{Carbon\Carbon::now()->format('M, j') .' - ' . Carbon\Carbon::now()->subWeek()->format('M, j')}} </a>
                                <a href="{{route('user.userList')}}?filter=today"><span>Today</span> {{Carbon\Carbon::now()->format('M, j')}} </a>
                            </div>
                        </div>
                        <span></span>
                    </div>
                </div>
                <div class="col-md-6 text-e">
                    <ul>
                        <li><span dir="ltr">{{$user_count}} Total users </span></li>
                        {{-- <li><input class="matchedit" type="search" placeholder="filter by username"></li> --}}
                        {{-- <li class="dropdown first">
                            <a href="#" class="dropbtn1"> all groups <i class="fas fa-sort-down"></i></a>
                            <div class="dropdown-content">
                                <input type="text" placeholder="search">
                                <ul>
                                    <li><a href="#">wasetak Admins</a></li>
                                    <li><a href="#">Diamond Club</a></li>
                                    <li><a href="#">Evanz Agency</a></li>
                                    <li><a href="#">JKR Agency - Diamond Member</a></li>
                                    <li><a href="#">Khan Agency - Diamond Member</a></li>
                                    <li><a href="#">Lunar Agency</a></li>
                                    <li><a href="#">Millionaire Club</a></li>
                                </ul>
                            </div>
                        </li> --}}
                    </ul>
                </div>
            </div>
            <style>
                .sec10
                    select,
                    input[type]
                {
                    background: white !important;
                 
                }
                .sec10 table.dataTable tbody tr {
                    background-color: #ffffff00 !important;
                }

            </style>
            <table class="table cus_table data-table">
                <thead>
                    <tr>
                        <th width="400px">Username</th>
                        <th>Received <img src="{{asset('user_asset/img/card36.png')}}" alt=""></th>
                        <th>Given <img src="{{asset('user_asset/img/card36.png')}}" alt=""></th>
                        <th>Topics Created</th>
                        <th>Replies Posted</th>
                        <th>Topics Viewd</th>
                        <th>Days Visited</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>


            {{-- <table class="table data-table">
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>Received <img src="{{asset('user_asset/img/card36.png')}}" alt=""></th>
                        <th>Given <img src="{{asset('user_asset/img/card36.png')}}" alt=""></th>
                        <th>Topics Created</th>
                        <th>Replies Posted</th>
                        <th>Topics Viewd</th>
                         <th>Days Visited</th>
                    </tr>
                </thead>
                <tbody>
                    @if($users)
                        @foreach ($users as $user)
                        <tr>
                            <td>
                                <div class="meta">
                                    <img src="{{$user['d_picture']}}" alt="">
                                    <h5><span>{{$user['name']}}</span></h5>
                                </div>
                            </td>
                            <td>{{$user['received']}}</td>
                            <td>{{$user['given']}}</td>
                            <td>{{$user['topic_created']}}</td>
                            <td>{{$user['replies_posted']}}</td>
                            <td>{{$user['topics_viewed']}}</td>
                            <td>{{$user['days_visited']}}</td>
                        </tr>
                        @endforeach
                    @endif
                
                </tbody>
            </table> --}}
        </div>
    </section>
@endsection

@push('js')


    <script>
$(function() {
            var table = $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('user.userList') }}/?filter={{$request['filter']}}",
                columns: [{
                        data: 'username',
                        name: 'username',
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: 'received',
                        name: 'received',
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: 'given',
                        name: 'given',
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: 'topic_created',
                        name: 'topic_created',
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: 'replies_posted',
                        name: 'replies_posted',
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: 'topics_viewed',
                        name: 'topics_viewed',
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: 'days_visited',
                        name: 'days_visited',
                        orderable: true,
                        searchable: true
                    },
                ]
            });

        });


      
    </script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
@endpush


