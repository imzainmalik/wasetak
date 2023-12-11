@extends('Admin.layouts.master')
@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->

                <!-- end page title -->

                <div class="row">
                    <div class="col-xl-4">
                        <div class="card overflow-hidden">
                            <div class="bg-primary bg-soft">
                                <div class="row">
                                    <div class="col-7">
                                        <div class="text-primary p-3">
                                            <h5 class="text-primary">Welcome Back
                                                !{{ $admin->first_name }} {{ $admin->last_name }}</h5>
                                            {{-- <p>Skote Dashboard</p> --}}
                                        </div>
                                    </div>
                                    <div class="col-5 align-self-end">
                                        <img src="{{ asset('assets/images/profile-img.png') }}" alt=""
                                            class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="row">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
