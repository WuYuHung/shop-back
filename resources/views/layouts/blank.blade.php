<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>@yield('title')</title>
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('images/favicon.png')}}" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    @yield('css')

    <!-- inject:js -->
    <script src="{{asset('js/off-canvas.js')}}"></script>
    <script src="{{asset('js/misc.js')}}"></script>
    @yield('script')
    <!-- endinject -->
    <!-- Custom js for this page-->
    <!-- End custom js for this page-->

    <!-- Custom Theme Style -->
    <link href="{{asset('css/custom.min.css')}}" rel="stylesheet">
</head>

<body>
  <div class="container-scroller">
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial:../../partials/_sidebar.html -->


        
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
                <li class="nav-item" >
                    <a href="{{route('index')}} "class="nav-link" style="padding: 1rem 0rem 0rem 0.5rem ; color: white;">
                        <span class="menu-title">
                            <h1><i class="fas fa-shopping-cart"> G2 Esports 商城</i></h1>
                        </span>
                    </a>
                </li>
              <!-- user -->
            <li class="nav-item nav-category">
              <a class="nav-link"><i class="fas fa-users"> 會員</i></a>
            </li>
              <li class="nav-item">
                  <a class="nav-link" href="../../pages/widgets.html">
                      <span class="menu-title">查詢</span>
                      <i class="icon-wrench menu-icon"></i>
                  </a>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="../../pages/widgets.html">
                <span class="menu-title">新增會員</span>
                <i class="icon-wrench menu-icon"></i>
              </a>
            </li>

              <!-- product -->
            <li class="nav-item nav-category">
                <span class="nav-link"><i class="fas fa-edit"> 商品</i></span>
            </li>

              <li class="nav-item">
                  <a class="nav-link" href="../../pages/widgets.html">
                      <span class="menu-title">查詢</span>
                      <i class="icon-wrench menu-icon"></i>
                  </a>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="../../pages/tables/basic-table.html">
                <span class="menu-title">上架</span>
                <i class="icon-grid menu-icon"></i>
              </a>
            </li>

            <!--categories-->
            <li class="nav-item nav-category">
              <span class="nav-link"><i class="fas fa-list"> 商品分類</i></span>
            </li>

              <li class="nav-item">
                  <a class="nav-link" href="../../pages/widgets.html">
                      <span class="menu-title">查詢</span>
                      <i class="icon-wrench menu-icon"></i>
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="../../pages/widgets.html">
                      <span class="menu-title">新增分類</span>
                      <i class="icon-wrench menu-icon"></i>
                  </a>
              </li>

            <!-- order -->
            <li class="nav-item nav-category">
              <span class="nav-link"><i class="fas fa-edit"> 訂單</i></span>
            </li>

              <li class="nav-item">
                  <a class="nav-link" href="../../pages/widgets.html">
                      <span class="menu-title">查詢</span>
                      <i class="icon-wrench menu-icon"></i>
                  </a>
              </li>

              <!-- coupons -->
            <li class="nav-item nav-category">
              <span class="nav-link"><i class="fas fa-table"> 優惠卷</i> </span>
            </li>

              <li class="nav-item">
                  <a class="nav-link" href="../../pages/widgets.html">
                      <span class="menu-title">查詢</span>
                      <i class="icon-wrench menu-icon"></i>
                  </a>
              </li>

              <!-- event -->
              <li class="nav-item nav-category">
                  <span class="nav-link"><i class="fas fa-table"> 活動</i> </span>
              </li>

              <li class="nav-item">
                  <a class="nav-link" href="../../pages/widgets.html">
                      <span class="menu-title">查詢</span>
                      <i class="icon-wrench menu-icon"></i>
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="../../pages/widgets.html">
                      <span class="menu-title">新增活動</span>
                      <i class="icon-wrench menu-icon"></i>
                  </a>
              </li>
          </ul>
             <div class="nav" style="position:absolute;bottom:0px;">
                 <li class="nav-item">

                    <a class="nav-link" style="text-align:center;" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                        <h2><i class="fas fa-sign-out-alt"  style="color:white"> {{ __('Logout') }}</i> </h2>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                 </li>
            </div>
        </nav>
        
        
        
        <!-- partial -->
        <div class="content-wrapper">
            @yield('content')
        </div>
        <!-- content-wrapper ends -->


      </div>
      <!-- row-offcanvas ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

</body>

</html>