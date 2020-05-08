<!DOCTYPE html>
<html>
      <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="all,follow">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link href="{{ secure_secure_asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{secure_secure_asset('css/hasil_combine.css')}}">
        <!-- Favicon-->
        <link rel="shortcut icon" href="img/favicon.ico">
        <!-- Tweaks for older IEs--><!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
        <!-- Side Navbar -->
        <div id="app">
            <nav class="side-navbar">
                <div class="side-navbar-wrapper">
                  <!-- Sidebar Header    -->
                  <div class="sidenav-header d-flex align-items-center justify-content-center">
                    <!-- User Info-->
                    @guest
                    <div class="sidenav-header-inner text-center"><img src="{{secure_asset('/uploads/avatars/bontang.png')}}" alt="person" class="img-fluid ">
                      <h2 class="h5">SIDOKPIN</h2><span>BONTANG</span>
                </div>
                        @else
                        <div class="sidenav-header-inner text-center"><img src="{{secure_asset('/uploads/avatars/default.jpg')}}" alt="person" class="img-fluid ">
                          <h2 class="h5">{{Auth::user()->name}}</h2><span>Admin</span>
                    </div>
                    @endguest

                    <!-- Small Brand information, appears on minimized sidebar-->
                    <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"> <strong>B</strong><strong class="text-primary">D</strong></a></div>
              </div>
                  <!-- Sidebar Navigation Menus-->
                  @yield('sidebar')
            </div>
          </nav>
              <div class="page">
                <!-- navbar-->
                <header class="header">
                  <nav class="navbar">
                    <div class="container-fluid">
                      <div class="navbar-holder d-flex align-items-center justify-content-between">
                        <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="index.html" class="navbar-brand">
                            <div class="brand-text d-none d-md-inline-block"><span>Bootstrap </span><strong class="text-primary">Dashboard</strong></div></a></div>
                        <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                          <!-- Notifications dropdown-->

                          <!-- Messages dropdown-->
                          @guest

                                <li class="nav-item"><a href="{{ route('login') }}" class="nav-link logout"> <span class="d-none d-sm-inline-block">{{ __('Login') }}</span><i class="fa fa-sign-in"></i></a></li>
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
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
                            @endguest

                          <!-- Log out-->
                          <li class="nav-item"><a href="login.html" class="nav-link logout"> <span class="d-none d-sm-inline-block">Logout</span><i class="fa fa-sign-out"></i></a></li>
                    </ul>
                  </div>
                </div>
              </nav>
            </header>
                <!-- Counts Section -->


                <section class="">
                  @yield('contents')
            </section>
                <footer class="main-footer">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-sm-6">
                        <p>Your company &copy; 2017-2019</p>
                  </div>
                      <div class="col-sm-6 text-right">
                        <p>Design by <a href="https://bootstrapious.com/p/bootstrap-4-dashboard" class="external">Bootstrapious</a></p>
                        <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions and it helps me to run Bootstrapious. Thank you for understanding :)-->
                  </div>
                </div>
              </div>
            </footer>
          </div>
    </div>
        <script src="{{ secure_secure_asset('js/app.js') }}"></script>
        <script src="{{ secure_secure_asset('js/hasil_combine.js') }}"></script>
  </body>
</html>
