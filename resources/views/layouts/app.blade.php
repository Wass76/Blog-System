<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script></head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cruz.site44.com/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cruz.site44.com/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Morris -->
    <link href="https://cruz.site44.com/css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">

    <link href="https://cruz.site44.com/css/animate.css" rel="stylesheet">
    <link href="https://cruz.site44.com/css/style.css" rel="stylesheet">

<body>

    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                                <img alt="image" class="img-circle" src="https://cruz.site44.com/img/profile_small.jpg" />
                                 </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">Wassem Tenbakji</strong>
                                 </span> <span class="text-muted text-xs block">Art Director <b class="caret"></b></span> </span> </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="{{route('profile')}}">Profile</a></li>
                                <li><a href="https://cruz.site44.com/contacts.html">Contacts</a></li>
                                <li><a href="https://cruz.site44.com/mailbox.html">Mailbox</a></li>
                                <li class="divider"></li>
                                <li><a href="{{ route('home') }}">Logout</a></li>
                            </ul>
                        </div>
                        <div class="logo-element">
                            IN+
                        </div>
                    </li>

                    <li>
                        <a href="https://cruz.site44.com/mailbox.html"><i class="fa fa-envelope"></i> <span class="nav-label">Mailbox </span><span class="label label-warning pull-right">16/24</span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="https://cruz.site44.com/mailbox.html">Inbox</a></li>
                            <li><a href="https://cruz.site44.com/mail_detail.html">Email view</a></li>
                            <li><a href="https://cruz.site44.com/mail_compose.html">Compose email</a></li>
                            <li><a href="https://cruz.site44.com/email_template.html">Email templates</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-files-o"></i> <span class="nav-label">Other Pages</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="https://cruz.site44.com/search_results.html">Search results</a></li>
                            <li><a href="https://cruz.site44.com/lockscreen.html">Lockscreen</a></li>
                            <li><a href="https://cruz.site44.com/invoice.html">Invoice</a></li>
                            <li><a href="https://cruz.site44.com/login.html">Login</a></li>
                            <li><a href="https://cruz.site44.com/login_two_columns.html">Login v.2</a></li>
                            <li><a href="https://cruz.site44.com/forgot_password.html">Forget password</a></li>
                            <li><a href="https://cruz.site44.com/register.html">Register</a></li>
                            <li><a href="https://cruz.site44.com/404.html">404 Page</a></li>
                            <li><a href="https://cruz.site44.com/500.html">500 Page</a></li>
                            <li><a href="https://cruz.site44.com/empty_page.html">Empty page</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="https://cruz.site44.com/grid_options.html"><i class="fa fa-laptop"></i> <span class="nav-label">Grid options</span></a>
                    </li>


                    <li>
                        <a href="#"><i class="fa fa-sitemap"></i> <span class="nav-label">Menu Levels </span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li>
                                <a href="#">Third Level <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>

                                </ul>
                            </li>
                            <li><a href="#">Second Level Item</a></li>
                            <li>
                                <a href="#">Second Level Item</a></li>
                            <li>
                                <a href="#">Second Level Item</a></li>
                        </ul>
                    </li>

                </ul>

            </div>
        </nav>

    <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom" action="https://cruz.site44.com/search_results.html">
                <div class="form-group">
                    <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                </div>
            </form>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">Welcome to INSPINIA+ Admin Theme.</span>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope"></i>  <span class="label label-warning">16</span>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="https://cruz.site44.com/profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="https://cruz.site44.com/img/a7.jpg">
                                </a>
                                <div>
                                    <small class="pull-right">46h ago</small>
                                    <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
                                    <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="https://cruz.site44.com/profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="https://cruz.site44.com/img/a4.jpg">
                                </a>
                                <div>
                                    <small class="pull-right text-navy">5h ago</small>
                                    <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>
                                    <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="https://cruz.site44.com/profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="https://cruz.site44.com/img/profile.jpg">
                                </a>
                                <div>
                                    <small class="pull-right">23h ago</small>
                                    <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                                    <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="https://cruz.site44.com/mailbox.html">
                                    <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="https://cruz.site44.com/mailbox.html">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="https://cruz.site44.com/profile.html">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="https://cruz.site44.com/grid_options.html">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="https://cruz.site44.com/notifications.html">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>

                <li>
                    <a class="right-sidebar-toggle">
                        <i class="fa fa-tasks"></i>
                    </a>
                </li>
            </ul>

        </nav>
        </div>


                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-top-links navbar-right">

                        @can('access-admin')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.posts.index') }}">Postss</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.settings.index') }}">Settings </a>
                        </li>
                        @endcan

                        @if (auth()->user()->isAdmin ==0 && auth()->user()->isManager==0)
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('posts') }}">Your Posts</a>
                        </li>
                        @endif



                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('tags') }}">Tags</a>
                        </li>


                        @can('access-user')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.users') }}">Users</a>
                        </li>
                        @endcan

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-top-links navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav navbar-top-links navbar-right"       >
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">


                                    <a class="dropdown-item" href="{{route('profile')}}">
                                    Profile
                                </a>

                                @if (auth()->user()->isAdmin)
                                    <a class="dropdown-item" href="{{route('admin.index')}}">
                                        Admin
                                    </a>
                                @endif



                                @if (auth()->user()->isAdmin)
                                <a class="dropdown-item" href="{{route('admin.posts.index')}}">
                                    Postss
                                </a>
                                @else
                                <a class="dropdown-item" href="{{route('posts')}}">
                                    Posts
                                </a>
                                @endif

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>


                            </li>
                            <li class="nav navbar-top-links navbar-right"       >
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                 Notifications
                            </a>


                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                                @forelse (Auth::user()->notifications as $item )
                                <a class="dropdown-item">
                                  {{$item->data['title']}}
                                </a>
                                @empty
                                <a class="dropdown-item">
                                  No notifications
                                  </a>
                                @endforelse
                            </li>

                        @endguest
                    </ul>
                    <main class="wrapper wrapper-content">
                        @yield('content')
                    </main>
                </div>
            </div>
        </nav>


    </div>


    <!-- Mainly scripts -->
    <script src="https://cruz.site44.com/js/jquery-3.1.1.min.js"></script>
    <script src="https://cruz.site44.com/js/bootstrap.min.js"></script>
    <script src="https://cruz.site44.com/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="https://cruz.site44.com/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Flot -->
    <script src="https://cruz.site44.com/js/plugins/flot/jquery.flot.js"></script>
    <script src="https://cruz.site44.com/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="https://cruz.site44.com/js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="https://cruz.site44.com/js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="https://cruz.site44.com/js/plugins/flot/jquery.flot.pie.js"></script>
    <script src="https://cruz.site44.com/js/plugins/flot/jquery.flot.symbol.js"></script>
    <script src="https://cruz.site44.com/js/plugins/flot/curvedLines.js"></script>

    <!-- Peity -->
    <script src="https://cruz.site44.com/js/plugins/peity/jquery.peity.min.js"></script>
    <script src="https://cruz.site44.com/js/demo/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="https://cruz.site44.com/js/inspinia.js"></script>
    <script src="https://cruz.site44.com/js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="https://cruz.site44.com/js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- Jvectormap -->
    <script src="https://cruz.site44.com/js/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="https://cruz.site44.com/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

    <!-- Sparkline -->
    <script src="https://cruz.site44.com/js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="https://cruz.site44.com/js/demo/sparkline-demo.js"></script>

    <!-- ChartJS-->
    <script src="https://cruz.site44.com/js/plugins/chartJs/Chart.min.js"></script>
</body>
</html>
