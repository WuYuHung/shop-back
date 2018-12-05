@extends('layouts.blank')

@section('title','新增商品')

@section('content')

<div class="card-body" style="background-color : white;">
    <h4 class="card-title">上架商品</h4>
    <p class="card-description">
        商品資訊
    </p>
    <form class="forms-sample" role="form" action="{{ route('products.store') }}" method="post">
        @csrf

        <div class="form-group">
            <input type="text" class="form-control"  id="name" placeholder="商品名稱" name="name">
        </div>
        <div class="form-group">
            <select class="custom-select mr-sm-2" id="category_id" name ="category_id">
                @foreach(App\Category::all() as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <input type="int" class="form-control" placeholder="商品價格" name="price">
        </div>
        <div class="form-group">
            <textarea class="form-control" rows="5" placeholder="商品述敘" name="description"></textarea>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="圖片路徑" name="photo_path">
        </div>
        <!-- <div class="form-group">
            <input type="file" name="img[]" class="file-upload-default">
          <div class="input-group col-xs-12">
                <input type="text" class="form-control file-upload-info" disabled placeholder="上傳圖片">
                <span class="input-group-append">
                          <button class="file-upload-browse btn btn-info" type="button">上傳</button>
                        </span>
            </-div>  -->

        <button type="submit" class="btn btn-success mr-2">新增</button>
        <button class="btn btn-light">取消</button>
    </form>
</div>
@endsection
