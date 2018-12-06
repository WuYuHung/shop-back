@extends('layouts.blank')
@section('title','優惠券詳細')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                優惠券詳細資料
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li class="active">優惠券使用者列表</li>
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
                        <h3 class="box-title">優惠券資料</h3>
                        <form role="form" action="{{route('coupon.user_store')}}" method="post">
                            @csrf
                            <input id="coupon_id" name="coupon_id" value ="{{$id}}" type="hidden">
                            <select name="user_id">
                                @foreach($users as $user)
                                    <option value="{{$user->id}}" id="user_id">{{$user->name}} ({{$user->email}})</option>

                                @endforeach
                            </select>
                            <button type="submit" class="btn btn-primary">新增</button>
                        </form>

                        <div class="box-tools">

                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-bordered">
                            <tr>
                                <th class="text-center" style="width: 10px;">id</th>
                                <th class="text-center" style="width: 50px">會員姓名</th>
                                <th class="text-center" style="width: 100px">email</th>
                                <th class="text-center" style="width: 50px;">使用與否</th>

                            </tr>
                            @foreach ($user_coupons as $user_coupon)

                                <tr>
                                    <td>{{ $user_coupon->id }}.</td>
                                    <td>{{ $user_coupon->user->name }}</td>
                                    <td>{{ $user_coupon->user->email }}</td>
                                    @if($user_coupon->is_used == false)
                                        <td>尚未使用</td>
                                    @else
                                        <td>已使用</td>
                                    @endif

                                </tr>

                            @endforeach

                        </table>
                    </div>
                    <!-- /.box-body -->
                    {!! $user_coupons->render() !!}
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection



