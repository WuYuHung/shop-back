@extends('layouts.blank')

@section('title','編輯商品')

@section('content')

    <div class="card-body">
        <h4 class="card-title">編輯商品</h4>
        <p class="card-description">
            更新商品資訊
        </p>
        <form class="forms-sample" role="form" action="{{route('categories.update', $category->id)}}" method="post">

            @csrf
           @method('PATCH')
            <div class="form-group">
                <input type="text" class="form-control"  id="name" placeholder="商品種類名稱" name="name" value="{{$category->name}}">
            </div>
            <!--
            <div class="form-group">
                <textarea class="form-control" rows="5" placeholder="商品述敘" name="description"></textarea>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="圖片路徑" name="photo_path">
            </div>
             <div class="form-group">
                <input type="file" name="img[]" class="file-upload-default">
              <div class="input-group col-xs-12">
                    <input type="text" class="form-control file-upload-info" disabled placeholder="上傳圖片">
                    <span class="input-group-append">
                              <button class="file-upload-browse btn btn-info" type="button">上傳</button>
                            </span>
                </-div>  -->

            <button type="submit" class="btn btn-success mr-2">更新</button>
            <button class="btn btn-light">取消</button>
        </form>
    </div>
@endsection
