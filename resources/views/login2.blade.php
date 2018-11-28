<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <!-- NProgress -->
    <link rel='stylesheet' href='https://unpkg.com/nprogress@0.2.0/nprogress.css'/>
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

    <!-- Custom Theme Style -->
    <link href="{{asset('css/custom.min.css')}}" rel="stylesheet">
</head>

<body class="login">
<div>

    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
                <form>
                    <h1>登入</h1>
                    <div>
                        <input type="text" class="form-control" placeholder="信箱" required="" />
                    </div>
                    <div>
                        <input type="password" class="form-control" placeholder="密碼" required="" />
                    </div>
                    <div>
                        <button type="button" class="btn btn-secondary">登入</button>
                        <a class="reset_pass" href="{{route('password.request')}}">忘記密碼?</a>
                    </div>

                    <div class="clearfix"></div>

                    <div class="separator">
                        <div>
                            <h1><i class="fas fa-sign-in-alt"></i>  G2 Esports 營運管理平台</h1>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>
</div>
</body>
</html>
