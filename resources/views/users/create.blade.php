@extends('layouts.blank')

@section('title', '新增會員')

@section('content')
<div class="col-lg-8 grid-margin stretch-card" style="margin: 0px auto;">
    <div class="card-body" style="background-color : white;">
        <h4 class="card-title">新增會員</h4>
        <p class="card-description">
            會員資訊
        </p>

        <form class="forms-sample" role="form" action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-ban"></i> 錯誤！</h4>
                    請修正以下表單錯誤：
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="row">
                <div class="col-7">
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="姓名" value="{{ old('name') }}" required />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="email" name="email" placeholder="email" value="{{ old('email') }}" required />
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="password" name="password" placeholder="密碼" value="{{ old('password') }}" required />
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="password_confirm" name="password_confirm" placeholder="密碼確認" value="{{ old('password_confirm') }}" required />
                    </div>
                </div>
                <div class="col-4">
                    <div>
                        <img id="preview_progressbarTW_img" src=" {{asset('/images/user/default.png')}}" style="max-height:200px;" class="img-thumbnail"/>
                    </div>
                    <div>
                        {!! Form::file('photo_path',['id' => 'photo_path','targetID'=>'preview_progressbarTW_img','onchange'=> 'readURL(this)']) !!}
                    </div>
                </div>
            </div>

            <div class="form-group">
                <input type="text" class="form-control" id="address" name="address"  placeholder="地址" value="{{ old('address') }}" required />
            </div>
            <div class="form-group">
                <input class="form-control" id="phone" name="phone" placeholder="電話" required value="{{ old('phone') }}"/>
            </div>
            <div class="form-group">
                <input class="form-control" type="date" id="birthdate"  name="birthdate" max="{{\Carbon\Carbon::now()->toDateString()}}" value="{{ old('birthdate') }}">
            </div>
            <button type="submit" class="btn btn-success mr-2">新增</button>
            <a class="btn btn-light" href="{{route('user.index')}}">取消</a>
        </form>
    </div>
</div>
@endsection
