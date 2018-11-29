<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>G2 Esports 商城</title>

    <!-- Bootstrap -->
    <link href="{{asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <!-- bootstrap-progressbar -->
      <link href="{{asset('vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">

    <!-- bootstrap-daterangepicker -->
      <link href="{{asset('vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('css/custom.min.css')}}" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
              <div class="navbar nav_title" style="border: 0;">
                  <a href="{{route('index')}}" class="site_title"><span class="fas fa-shopping-cart"> </span><span> G2 Esports 商城</span></a>
              </div>

            <div class="clearfix"></div>

            <br />
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>功能</h3>
                <ul class="nav side-menu">
                      <li><a><i class="fas fa-users"></i> 會員 <span class="fas fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li><a href="{{route('user')}}">查詢</a></li>
                            <li><a href="index.html">新增</a></li>
                        </ul>
                      </li>

                      <li><a><i class="fas fa-edit"></i> 商品 <span class="fas fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{route('product')}}">查詢</a></li>
                            <li><a href="form.html">上架</a></li>
                            <li><a href="form.html">下架</a></li>
                        </ul>
                      </li>
                      <li><a><i class="fas fa-list"></i> 商品分類 <span class="fas fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="index.html">查詢</a></li>
                            <li><a href="index.html">新增</a></li>
                        </ul>
                      </li>
                    <li><a><i class="fas fa-dollar-sign"></i> 活動 <span class="fas fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="form.html">查詢</a></li>
                            <li><a href="form.html">新增</a></li>
                            <li><a href="form.html">發送訊息</a></li>
                        </ul>
                    </li>
                      <li><a><i class="fas fa-table"></i> 優惠卷 </a>
                      </li>
                    <li><a><i class="fas fa-edit"></i> 訂單 </a>
                    </li>

                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
              <div class="sidebar-footer hidden-small">
                  <li class="nav-item dropdown">
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>
                      </div>
                  </li>
              </div>
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
             <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- page content -->

        <div class="right_col" role="main">
            @yield('content')
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
    <!-- jQuery -->
    <script src="{{asset('vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{asset('vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{asset('vendors/moment/min/moment.min.js')}}"></script>
    <script src="{{asset('vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>


    <!-- Custom Theme Scripts -->
    <script src="{{asset('js/custom.min.js')}}"></script>

  </body>
</html>
