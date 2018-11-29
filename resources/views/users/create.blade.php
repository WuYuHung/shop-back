@extends('layouts.blank')

@section('title', '新增會員')

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
                <li class="active">新增會員</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">

            <!--------------------------
              | Your Page Content Here |
              -------------------------->
            <div class="row">
                <!-- .col -->
                <div class="col-md-12">
                    <!-- general form elements -->

                        <div class="box-header with-border">
                            <h3 class="box-title">新增會員</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" action="{{ route('user') }}" method="post">

                            @csrf

                            <div class="box-body">

                                @if ($errors->any())
                                    <div class="alert alert-danger alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <h4><i class="icon fa fa-ban"></i> 錯誤！</h4>
                                        請修正以下表單錯誤：
                                        <ul>
                                            @foreach($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <div class="form-group">
                                    <label for="name">姓名</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="請輸入姓名" value="{{ old('name') }}">
                                </div>
                                <div class="form-group">
                                    <label for="email">email</label>
                                    <input type="text" class="form-control" id="email" name="email" placeholder="請輸入email" value="{{ old('email') }}">
                                </div>
                                <div class="form-group">
                                    <label for="password">密碼</label>
                                    <input type="text" class="form-control" id="password" name="password" placeholder="請輸入密碼" value="{{ old('password') }}">
                                </div>
                                <div class="form-group">
                                    <label for="address">地址</label>
                                    <input type="text" class="form-control" id="address" name="address"  placeholder="請輸入地址" value="{{ old('address') }}">
                                </div>
                                <div class="form-group">
                                    <label for="phone">電話</label>
                                    <input class="form-control" id="phone" name="phone" placeholder="請輸入電話">{{ old('phone') }}
                                </div>
                                <div class="form-group">
                                    <label for="birthdate">生日日期</label>
                                    <input class="form-control" type="date" id="birthdate"  name="birthdate" placeholder="ex:1981-08-01">{{ old('birthdate') }}
                                </div>
                                <div class="form-group">
                                    <label for="photo_path">photo</label>
                                    <input class="form-control" id="photo_path" name="photo_path" placeholder="test">{{ old('photo_path') }}
                                </div>
                            <!-- /.box-body -->

                            <div class="box-footer text-right">
                                <a class="btn btn-link" href="#">取消</a>
                                <button type="submit" class="btn btn-primary">新增</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.box -->

                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
