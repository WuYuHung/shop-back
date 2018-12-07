@extends('layouts.blank')
@section('title','訂單列表')
@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">本站優惠券一覽表 <a href="{{route('coupon.create')}}"  class="btn btn-primary">新增</a></h4>
            <div class="row">
                <div class="col-12">
                    <!-- /.box-header -->
                        <table class="table table-bordered">
                            <tr>
                                <th >id</th>
                                <th >代碼</th>
                                <th style="width: 1200px">描述</th>
                            </tr>
                            @foreach ($coupons as $coupon)
                                <tr>
                                    <td>{{ $coupon->id }}.</td>
                                    <td>{{ $coupon->code }}</td>
                                    <td>{{ $coupon->description }}</td>
                                    <td>
                                        <div>
                                            <a href="{{route('coupon.show',$coupon->id)}}" class="btn btn-outline-primary">詳細</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    <!-- /.box-body -->
                    {!! $coupons->render() !!}
                </div>
            </div>
        </div>
    </div>

@endsection


