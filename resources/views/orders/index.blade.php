@extends('layouts.blank')
@section('title','訂單列表')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                會員管理
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
                        <h3 class="box-title">本站訂單資料一覽表</h3>

                        <div class="box-tools">

                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-bordered">
                            <tr>
                                <th class="text-center" style="width: 10px;">id</th>
                                <th class="text-center" style="width: 120px">總價</th>
                                <th class="text-center" style="width: 100px" >姓名</th>
                                <th class="text-center" style="width: 150px" >公司名稱</th>
                                <th class="text-center" >地址</th>
                                <th class="text-center" style="width: 50px">email</th>
                                <th class="text-center" style="width: 50px">手機</th>
                                <th class="text-center" style="width: 50px">配送狀態</th>
                            </tr>
                            @foreach ($orders as $order)

                                <tr>
                                    <td>{{ $order->id }}.</td>
                                    <td>{{ $order->amount }}</td>
                                    <td>{{ $order->user->name }}</td>
                                    <td>{{ $order->company_name }}</td>
                                    <td>{{ $order->address }}</td>
                                    <td>{{ $order->email }}</td>
                                    <td>{{ $order->phone }}</td>
                                    <td>{{ $order->status }}</td>
                                    <td class="text-center">
                                        <form action="{{ route('order.update', $order->id) }}" method="post" style="display: inline-block">
                                            @csrf
                                            <button type="submit" class="btn btn-xs btn-danger">更改狀態</button>
                                        </form>
                                        <form action="{{ route('order.destroy', $order->id) }}" method="post" style="display: inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-xs btn-danger">刪除</button>
                                        </form>
                                        <div>
                                        <a href="{{ route('order.show', $order->id) }}" class="btn btn-xs btn-primary">詳細</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                    <!-- /.box-body -->
                    {!! $orders->render() !!}
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection


