@extends('layouts.blank')

@section('title', '新增優惠券')

@section('content')
    <div class="card-body" style="background-color : white;">
        <h4 class="card-title">新增優惠卷</h4>
        <p class="card-description">
            優惠卷資訊
        </p>
        <form class="forms-sample" action="{{ route('coupon.index') }}" method="post">
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
            <div class="form-group">
                <label for="code">代碼</label>
                <input type="text" class="form-control" id="code" name="code" placeholder="輸入代碼" value="{{ old('code') }}" required />
            </div>
            <div class="form-group">
                <label for="description">描述</label>
                <input class="form-control" id="description" name="description" placeholder="輸入描述" value="{{ old('description') }}">
            </div>
            <button type="submit" class="btn btn-success mr-2">送出</button>

            <a class="btn btn-light" href="{{route('coupon.index')}}">取消</a>
        </form>
    </div>
        <!-- /.content -->
@endsection
