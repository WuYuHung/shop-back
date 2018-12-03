@extends('layouts.blank')

@section('title', '新增優惠券')

@section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                優惠券管理
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li class="active">新增優惠券</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content container-fluid">

            <!--------------------------
              | Your Page Content Here |
              -------------------------->
            <div class="row">
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">優惠卷資訊</h4>
                            <form class="forms-sample" action="{{ route('coupon.index') }}" method="post">
                                @csrf
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
                                    <label for="code">代碼</label>
                                    <input type="text" class="form-control" id="code" name="code" placeholder="輸入代碼" value="{{ old('code') }}" required />
                                </div>
                                <div class="form-group">
                                    <label for="start_date">生效日期</label>
                                    <input class="form-control" type="date" id="start_date"  name="start_date" min="{{\Carbon\Carbon::now()->toDateString()}}" value="{{ old('start_date') }}">
                                </div>
                                <div class="form-group">
                                    <label for="end_date">結束日期</label>
                                    <input class="form-control" type="date" id="end_date"  name="end_date" value="{{ old('end_date') }}">
                                </div>
                                <div class="form-group">
                                    <label for="description">描述</label>
                                    <input class="form-control" id="description" name="description" placeholder="輸入描述" value="{{ old('description') }}">
                                </div>
                                <button type="submit" class="btn btn-success mr-2">Submit</button>
                                <button class="btn btn-light">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>


        </section>
        <!-- /.content -->
@endsection
