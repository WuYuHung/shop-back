@extends('layouts.blank')

@section('title','商品列表')

@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">商品管理</h4>
            <div class="row">
                <div class="col-12">
                    <table id="order-listing" class="table" cellspacing="0">
                        <thead>
                        <tr>
                            <th>照片路徑</th>
                            <th>商品名稱</th>
                            <th>種類</th>
                            <th>價格</th>
                            <th>商品述敘</th>
                            <th>創建日期</th>
                            <th>管理功能</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($products as $product)
                        <tr>
                            <td>
                                <img src="{{asset('storage/'.$product->photo_path)}}" class="img-thumbnail">
                            </td>
                            <td>{{ $product->name }}</td>
                            <td>{{ \App\Category::find($product->category_id)->name }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->created_at }}</td>
                            <td class="text-center">
                                <a class="btn btn-outline-primary" href="{{route('products.edit',[$product->id])}}">編輯</a>
                                @if($product->is_deleted)
                                    <form action="{{ route('products.destroy', $product->id) }}" method="post" style="display: inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger">啟用</button>
                                    </form>
                                @else
                                    <form action="{{ route('products.destroy', $product->id) }}" method="post" style="display: inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">刪除</button>
                                    </form>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>

                    {!! $products->render() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
