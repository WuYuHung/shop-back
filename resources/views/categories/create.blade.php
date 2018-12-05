@extends('layouts.blank')

@section('title','新增商品分類')

@section('content')

<div class="card-body" style="background-color : white;">
    <h4 class="card-title">新增商品分類</h4>
    <p class="card-description">
        商品分類資訊
    </p>
    <form class="forms-sample" role="form" action="{{ route('categories.store') }}" method="post">
        @csrf

        <div class="form-group">
            <input type="text" class="form-control"  id="name" placeholder="商品種類名稱" name="name">
        </div>

        <div class="form-group">
            <textarea class="form-control" rows="5" placeholder="商品述敘" name="description"></textarea>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="圖片路徑" name="photo_path">
        </div>

        <button type="submit" class="btn btn-success mr-2">新增</button>
        <button class="btn btn-light">取消</button>
    </form>
</div>
@endsection
