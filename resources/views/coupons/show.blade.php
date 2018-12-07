@extends('layouts.blank')
@section('title','優惠券詳細')
@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">優惠券資料</h4>
            <form role="form" action="{{route('user_coupon.user_store')}}" method="post">
                @csrf
                <h4 class="card-title">使用者清單：
                <input id="coupon_id" name="coupon_id" value ="{{$id}}" type="hidden">
                @if($users->count() !=0)
                    <select name="user_id">
                        @foreach($users as $user)
                            <option value="{{$user->id}}" id="user_id">{{$user->name}} ({{$user->email}})</option>
                        @endforeach
                    </select>
                    <button type="submit" class="btn btn-primary">新增</button>
                @endif
                </h4>
            </form>
            <div class="row">
                <div class="col-12">
                    <!-- /.box-header -->
                    <table class="table table-bordered">
                        <tr>
                            <th style="width: 10px;">id</th>
                            <th style="width: 50px">會員姓名</th>
                            <th style="width: 100px">email</th>
                            <th style="width: 50px;">使用與否</th>

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

                <!-- /.box-body -->
                {!! $user_coupons->render() !!}
                </div>
            </div>
        </div>
    </div>

@endsection



