@extends('layouts.blank')

@section('title','編輯商品')

@section('content')
    <div class="col-lg-8 grid-margin stretch-card" style="margin: 0px auto;">
        <div class="card-body" style="background-color : white;">
            <h4 class="card-title">編輯商品</h4>
            <p class="card-description">
                更新商品資訊
            </p>
            <form class="forms-sample" role="form" action="{{route('products.update', $product->id)}}" method="post" enctype="multipart/form-data">

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
                <div class="row">
                    <div class="col-7">
                        <div class="form-group">
                            <input type="text" class="form-control"  id="name" placeholder="商品名稱" name="name" value="{{$product->name}}">
                        </div>
                        <div class="form-group">
                            <select class="custom-select mr-sm-2" id="category_id" name ="category_id" value="{{ old('category_id') }}">
                                @foreach(App\Category::all() as $category)
                                    @if (old('category_id') == $category->id)
                                        <option value="{{$category->id}}" selected>{{$category->name}}</option>
                                    @else
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="int" class="form-control" placeholder="商品價格" name="price" value="{{$product->price}}">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="5" placeholder="商品述敘" name="description" >{{$product->description}}</textarea>
                        </div>
                    </div>
                    <div class="col-5">
                        <div>
                            <img id="preview_progressbarTW_img" name ="preview_progressbarTW_img" src="{{asset('/images/shop/default.png')}}" style="max-height:200px;" class="img-thumbnail"/>
                        </div>
                        <div class="form-group">
                            {!! Form::file('photo_path',['id' => 'photo_path','targetID'=>'preview_progressbarTW_img','onchange'=> 'readURL(this)']) !!}
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success mr-2">更新</button>
                <a class="btn btn-light" href="{{route('products.index')}}">取消</a>
            </form>
        </div>
    </div>
@endsection
