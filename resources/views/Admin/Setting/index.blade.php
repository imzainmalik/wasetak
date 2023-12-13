@extends('Admin.layouts.master')
@section('content')
<style>
.imgSize img {
    height: 100px;
    width: 100px;
    margin: 2px;
}
</style>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-10">
                               Website Setting
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
                            <form action="{{ route('admin.setting.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" class="form-control"  name="id" value="{{ $setting ? $setting->id : '' }}" placeholder="id">
                                <div class="col-12">
                                    <label for="">Name</label>
                                    <input type="text" name="web_name" class="form-control" placeholder="Name"  value="{{ $setting ? $setting->web_name : '' }}"  required
                                        id="">
                                </div>
                                <br/>
                                <div class="col-12">
                                    <label for="">logo</label>
                                    @if($setting)
                                        @if($setting->web_logo)
                                        <div class="imgSize">  <img id="blah1" src="{{asset($setting->web_logo)}}"/></div>
                                        @endif
                                    @endif
                                    <input type="file" name="web_logo" class="form-control" accept="image/png, image/gif, image/jpeg, image/jpg"  placeholder="logo" alt="Log" value="{{ $setting ? asset($setting->web_logo) : '' }}"  
                                        id="imgInp1">
                                </div>
                                <br/>
                                <div class="col-12">
                                    <label for="">Slogan</label>
                                    <input type="text" name="web_slogan" class="form-control" placeholder="Slogan "  value="{{ $setting ? $setting->web_slogan : '' }}"  
                                    id="">
                                </div>
                                <br/>
                                <div class="col-12">
                                    <label for="">Favicon</label>
                                    @if($setting)
                                        @if($setting->log_fav_icon)
                                        <div  class="imgSize">  <img id="blah" src="{{asset($setting->log_fav_icon)}}"/></div>
                                        @endif
                                    @endif
                                    <input type="file" name="log_fav_icon" class="form-control" accept="image/png, image/gif, image/jpeg, image/jpg"  placeholder="Fav Icon" alt="Fav Icon" value="{{ $setting ? asset($setting->log_fav_icon) : '' }}"  
                                        id="imgInp">
                                </div>
                                <br/>
                                <div class="col-12">
                                    <label for="">Email</label>
                                    <input type="email" name="web_email" class="form-control" placeholder="Email"  value="{{ $setting ? $setting->web_email : '' }}"  required
                                    id="">
                                </div>
                                <br/>
                                <div class="col-12">
                                    <label for="">Phone</label>
                                    <input type="number" name="web_phone" class="form-control" placeholder="Phone"  value="{{ $setting ? $setting->web_phone : '' }}"  
                                    id="">
                                </div>
                                <br/>
                                <div class="col-12 ">
                                    <label for="">Address</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" name="web_address" rows="3">{{ $setting ? $setting->web_address : '' }}</textarea>
                                </div>
                                <br/>
                                <div class="col-12">
                                    <label for="">Facebook Link</label>
                                    <input type="url" name="facebook_link" class="form-control" placeholder="Facebook Link"  value="{{ $setting ? $setting->facebook_link : '' }}"  
                                    id="">
                                </div>
                                <br/>
                                <div class="col-12">
                                    <label for="">Insatagram Link</label>
                                    <input type="url" name="insta_link" class="form-control" placeholder="Insatagram Link"  value="{{ $setting ? $setting->insta_link : '' }}"  
                                    id="">
                                </div>
                                <br/>
                                <div class="col-12">
                                    <label for="">Twitter Link</label>
                                    <input type="url" name="twitter_link" class="form-control" placeholder="Twitter Link"  value="{{ $setting ? $setting->twitter_link : '' }}"  
                                    id="">
                                </div>
                                <br/>
                                <div class="col-12">
                                    <label for="">Youtube Link</label>
                                    <input type="url" name="youtube_link" class="form-control" placeholder="Youtube Link"  value="{{ $setting ? $setting->youtube_link : '' }}"  
                                    id="">
                                </div>
                                <br/>
                                <div class="col-12 py-4">
                                    <button class="btn btn-primary">Upadate setting</button>
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
<script>

    $(document).ready(function(){
        imgInp.onchange = evt => {
        const [file] = imgInp.files
            if (file) {
                blah.src = URL.createObjectURL(file)
            }else{
                blah.src = '{{ $setting ? asset($setting->log_fav_icon): '' }}'
            }
        }
        imgInp1.onchange = evt => {
        const [file] = imgInp1.files
            if (file) {
                blah1.src = URL.createObjectURL(file)
            }else{
                blah1.src = '{{ $setting ? asset($setting->web_logo) : '' }}';
            }
        }
    });
</script>
@endsection