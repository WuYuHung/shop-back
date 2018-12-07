@extends('layouts.blank')
@section('title','訂單列表')
@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">訂單商品</h4>
            <div class="row">
                <div class="col-12">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>email</th>
                                <th>手機</th>
                                <th>總價</th>
                                <th>折價</th>
                            </tr>
                            <tr>
                                <td>{{ $order->email }}</td>
                                <td>{{ $order->phone }}</td>
                                <td>{{ $order->amount }}</td>
                                <td>{{ $order->discount }}%</td>
                            </tr>
                        </table>
                    </div>
                    <div class="box-body" >
                        <table class="table table-bordered">
                            <tr>
                                <th style="width: 10px;">id</th>
                                <th style="width: 30px;">圖片</th>
                                <th style="width: 120px">商品名稱</th>
                                <th style="width: 50px">種類id</th>
                                <th style="width: 40px;">價格</th>
                                <th style="width: 250px;">詳細資料</th>
                                <th style="width: 100px" >數量</th>

                            </tr>
                            @foreach ($order_products as $order_product)

                                <tr>
                                    <td>{{ $order_product->id }}.</td>
                                    <td>
                                        <img src="{{asset('storage/'.$order_product->product->photo_path)}}" class="img-thumbnail">
                                    </td>
                                    <td>{{ $order_product->product->name }}</td>
                                    <td>{{ $order_product->product->category_id }}</td>
                                    <td>{{ $order_product->product->price }}</td>
                                    <td>{{ $order_product->product->description }}</td>
                                    <td>{{ $order_product->quantity }}</td>

                                </tr>

                            @endforeach

                        </table>
                    </div>
                    <!-- /.box-body -->
                    {!! $order_products->render() !!}
                </div>
            </div>
        </div>
    </div>

@endsection


