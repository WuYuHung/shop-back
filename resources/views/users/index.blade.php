@extends('layouts.blank')
@section('title','使用者列表')
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
                <li><a href="#"><i class="fa fa-shopping-bag"></i> 會員管理</a></li>
                <li class="active">會員列表</li>
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
                            <h3 class="box-title">本站會員資料一覽表</h3>

                            <div class="box-tools">

                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table class="table table-bordered">
                                <tr>
                                    <th class="text-center" style="width: 10px;">id</th>
                                    <th class="text-center" style="width: 250px">email</th>
                                    <th class="text-center" style="width: 120px">姓名</th>
                                    <th class="text-center" >地址</th>
                                    <th class="text-center" style="width: 150px" >電話號碼</th>
                                    <th class="text-center" style="width: 120px">生日</th>
                                    <th class="text-center" style="width: 50px">photo</th>
                                </tr>
                                @foreach ($users as $user)
                                    @if(!$user->active)
                                        <tr>
                                            <td>{{ $user->id }}.</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->address }}</td>
                                            <td>{{ $user->phone}}</td>
                                            <td>{{ $user->birthdate }}</td>
                                            <td>{{ $user->photo_path }}</td>
                                            <td class="text-center">
                                                <form action="{{ route('user.update', $user->id) }}" method="post" style="display: inline-block">
                                                    @csrf
                                                    <button type="submit" class="btn btn-xs btn-danger">啟用</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @else
                                    <tr>
                                        <td>{{ $user->id }}.</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->address }}</td>
                                        <td>{{ $user->phone}}</td>
                                        <td>{{ $user->birthdate }}</td>
                                        <td>{{ $user->photo_path }}</td>
                                        <td class="text-center">
                                            <form action="{{ route('user.destroy', $user->id) }}" method="post" style="display: inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-xs btn-danger">刪除</button>
                                            </form>
                                        </td>
                                        </td>
                                    </tr>
                                    @endif
                                @endforeach

                            </table>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer clearfix">
                            <ul class="pagination pagination-sm no-margin pull-right">
                                <li><a href="#">&laquo;</a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">&raquo;</a></li>
                            </ul>
                        </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection

