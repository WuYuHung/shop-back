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
                    <div class="box-header with-border" >
                        <h3 class="box-title">本站優惠券一覽表 <a href="{{route('coupon.create')}}" style="float:right" class="btn btn-xs btn-primary">新增</a></h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body text-center" >
                        <table class="table table-bordered">
                            <tr>
                                <th class="text-center" style="width: 10px;">id</th>
                                <th class="text-center" style="width: 120px">代碼</th>
                                <th class="text-center" style="width: 100px" >開始日期</th>
                                <th class="text-center" style="width: 150px" >結束日期</th>
                                <th class="text-center" style="width: 300px">描述</th>
                            </tr>
                            @foreach ($coupons as $coupon)
                                <tr>
                                    <td>{{ $coupon->id }}.</td>
                                    <td>{{ $coupon->code }}</td>
                                    <td>{{ $coupon->start_date }}</td>
                                    <td>{{ $coupon->end_date }}</td>
                                    <td>{{ $coupon->description }}</td>
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


