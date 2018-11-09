<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/backend/header/misc.js') }}" defer></script>
    <script src="{{ asset('js/backend/header/off-canvas.js') }}" defer></script>
@yield('scripts')

<!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('G2.ico') }}" type="image/x-icon">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/backend/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    @yield('styles')
</head>

<body>
<div id="app" class="container-scroller">
    <div class="container-fluid page-body-wrapper">
        <div class="row">
            <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-full-bg" style="min-height: 100vh;">
                <div class="row w-100">
                    @if ($errors->has('account') || $errors->has('password'))
                        <span class="alert alert-danger position-absolute" role="alert" style="top: 1.75rem; left: 50%; transform: translateX(-50%);">
                                <strong>{{ $errors->first('account') ?: $errors->first('password') }}</strong>
                            </span>
                    @endif

                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-dark text-left p-5">
                            <h2>登入</h2>
                            <h4 class="font-weight-light">哈囉！ 讓我們開始吧！</h4>

                            <form method="POST" action="" aria-label="{{ __('Login') }}">
                                @csrf

                                <div class="form-group">
                                    <label for="account">帳號</label>
                                    <input id="account" type="text" class="form-control" name="account" value="{{ old('account') }}" placeholder="請輸入帳號..." required autofocus>
                                    <i class="mdi mdi-account"></i>
                                </div>


                                <div class="form-group">
                                    <label for="password">密碼</label>
                                    <input id="password" type="password" class="form-control" name="password" placeholder="請輸入密碼..." required>
                                    <i class="mdi mdi-eye"></i>
                                </div>

                                <label class="text-right">
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                    記住我
                                </label>
                                <div class="mt-5">
                                    <button class="btn btn-block btn-warning btn-lg font-weight-medium">
                                        Login
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
