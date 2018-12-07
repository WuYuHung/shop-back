@extends('layouts.blank')

@section('title','商品列表')

@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Data table</h4>
            <div class="row">
                <div class="col-12">
                    <table id="order-listing" class="table" cellspacing="0">
                        <thead>
                        <tr>
                            <th>ID#</th>
                            <th>照片</th>
                            <th>商品分類名稱</th>
                            <th>管理功能</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>
                                <img src="{{asset('storage/'.$category->photo_path)}}" class="img-thumbnail">
                            </td>
                            <td>{{ $category->name }}</td>

                            <td>
                                <a class="btn btn-outline-primary" href="{{route('categories.edit',[$category->id])}}">編輯</a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>

                    {!! $categories->render() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
