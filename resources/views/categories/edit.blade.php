@extends('layouts.blank')

@section('title','編輯商品')

@section('content')

    <div class="card-body">
        <h4 class="card-title">編輯商品</h4>
        <p class="card-description">
            更新商品資訊
        </p>
        <form class="forms-sample" role="form" action="{{route('categories.update', $category->id)}}" method="post" enctype="multipart/form-data">

            @csrf
           @method('PATCH')
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
                <input type="text" class="form-control"  id="name" placeholder="商品種類名稱" name="name" value="{{$category->name}}">
            </div>
            {!! Form::file('photo_path') !!}

            <button type="submit" class="btn btn-success mr-2">更新</button>
            <a class="btn btn-light" href="{{route('categories.index')}}">取消</a>
        </form>
    </div>
@endsection
