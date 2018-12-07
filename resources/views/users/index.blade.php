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
                                    <th>相片</th>
                                    <th>email</th>
                                    <th>姓名</th>
                                    <th>地址</th>
                                    <th>電話號碼</th>
                                    <th>生日</th>
                                    <th class="text-center">管理</th>
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

                                                @if(!$user->permission)
                                                    <form action="{{ route('user.destroy', $user->id) }}" method="post" style="display: inline-block">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-outline-danger">
                                                            {{$user->active ? "刪除" : "啟用"}}
                                                        </button>
                                                    </form>
                                                @endif

                                                    <form action="{{ route('user.update', $user->id) }}" method="post" style="display: inline-block">
                                                        @csrf
                                                        <button type="submit" class="btn btn-outline-danger">
                                                            {{!$user->is_vip ? "升級Vip" : "解除vip"}}
                                                        </button>
                                                    </form>
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

