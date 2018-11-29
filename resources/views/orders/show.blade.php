@extends('layouts.blank')
@section('title','訂單列表')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                訂單詳細資料
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li class="active">訂單列表</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">

            <!--------------------------
              | Your Page Content Here |
              -------------------------->

            <div class="row">
                <div class="col-md-12">
                    <div class="box-header with-border">
                        <h3 class="box-title">訂單資料一覽表</h3>

                        <div class="box-tools">

                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-bordered">
                            <tr>
                                <th class="text-center" style="width: 10px;">id</th>
                                <th class="text-center" style="width: 30px;">圖片</th>
                                <th class="text-center" style="width: 120px">商品名稱</th>
                                <th class="text-center" style="width: 50px">種類id</th>
                                <th class="text-center" style="width: 40px;">價格</th>
                                <th class="text-center" style="width: 250px;">詳細資料</th>
                                <th class="text-center" style="width: 100px" >數量</th>

                            </tr>
                            @foreach ($order_products as $order_product)

                                <tr>
                                    <td>{{ $order_product->id }}.</td>
                                    <td>{{ $order_product->product->photo_path }}</td>
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
                <!-- /.col -->
            </div>
            <!-- /.row -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection


