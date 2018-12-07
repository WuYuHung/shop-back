@extends('layouts.blank')
@section('title','訂單列表')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                優惠券管理
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li class="active">優惠券列表</li>
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
                        <h3 class="box-title">本站優惠券一覽表  <a href="{{route('coupon.create')}}"  class="btn btn-outline-primary">新增</a></h3>

                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>id</th>
                                <th style="width: 120px">代碼</th>
                                <th>開始日期</th>
                                <th>結束日期</th>
                                <th style="width: 600px">描述</th>
                            </tr>
                            @foreach ($coupons as $coupon)
                                <tr>
                                    <td>{{ $coupon->id }}.</td>
                                    <td>{{ $coupon->code }}</td>
                                    <td>{{ $coupon->start_date }}</td>
                                    <td>{{ $coupon->end_date }}</td>
                                    <td>{{ $coupon->description }}</td>
                                    <td>
                                        <div>
                                            <a href="{{route('coupon.show',$coupon->id)}}" class="btn btn-outline-primary">詳細</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                    <!-- /.box-body -->
                    {!! $coupons->render() !!}
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection


