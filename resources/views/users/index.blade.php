@extends('layouts.blank')
@section('title','使用者列表')
@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">會員資料</h4>
            <div class="row">
                <div class="col-12">
                        <!-- /.box-header -->
                            <table id="order-listing" class="table" cellspacing="0">
                                <tr>
                                    <th  style="width: 50px">相片</th>
                                    <th  style="width: 250px">email</th>
                                    <th  style="width: 120px">姓名</th>
                                    <th  >地址</th>
                                    <th  style="width: 150px" >電話號碼</th>
                                    <th  style="width: 120px">生日</th>
                                </tr>
                                @foreach ($users as $user)

                                        <tr>
                                            <td>
                                                <img src="{{asset('storage/'.$user->photo_path)}}" >
                                            </td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->address }}</td>
                                            <td>{{ $user->phone}}</td>
                                            <td>{{ $user->birthdate }}</td>


                                            <td class="text-center">
                                                @if(!$user->active)
                                                    <form action="{{ route('user.destroy', $user->id) }}" method="post" style="display: inline-block">
                                                        @csrf
                                                        <button type="submit" class="btn btn-outline-danger">啟用</button>
                                                    </form>
                                                @else
                                                    <form action="{{ route('user.destroy', $user->id) }}" method="post" style="display: inline-block">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-outline-danger">刪除</button>
                                                    </form>
                                                @endif
                                                @if(!$user->is_vip)
                                                        <form action="{{ route('user.update', $user->id) }}" method="post" style="display: inline-block">
                                                            @csrf
                                                            <button type="submit" class="btn btn-outline-danger">升級vip</button>
                                                        </form>
                                                @else
                                                        <form action="{{ route('user.update', $user->id) }}" method="post" style="display: inline-block">
                                                            @csrf
                                                            <button type="submit" class="btn btn-outline-danger">解除vip</button>
                                                        </form>
                                                @endif
                                            </td>
                                        </tr>

                                @endforeach

                            </table>
                        <!-- /.box-body -->
                        {!! $users->render() !!}
                </div>
            </div>
        </div>
    </div>

@endsection

