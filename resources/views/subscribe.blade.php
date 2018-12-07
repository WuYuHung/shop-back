@extends('layouts.blank')

@section('title', '訂閱資訊')

@section('content')
    <div class="grid-margin stretch-card" style="margin: 0px auto;">
        <div class="card-body col-8" style="background-color : white;">
            <h4 class="card-title">訂閱</h4>
            <p class="card-description">
                發送訊息,完成前請耐心等待
            </p>
            @if (Session::has('flash_message'))
                <div class="alert alert-success">{{ Session::get('flash_message') }}</div>
            @endif
            <form class="forms-sample" role="form" action="{{ route('subscribes.send') }}" method="post">
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
                        <input type="text" class="form-control" name="subject" placeholder="標題" required>
                </div>

                <div class="form-group">
                        <textarea type="text" cols="30" rows="7" name="data" class="form-control" placeholder="訊息" required></textarea>
                </div>

                <button type="submit" class="btn btn-success mr-2">傳送</button>
            </form>
        </div>
        <div class="col-3">
            <ul class="list-group">
                @foreach($subscribes as $subscribe)
                    <li class="list-group-item">{{$subscribe->email}}</li>
                @endforeach
            </ul>
            {!! $subscribes->render() !!}
        </div>
    </div>

@endsection
