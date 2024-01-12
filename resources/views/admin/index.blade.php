
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ShopWearWell</title>

    <link href="https://cruz.site44.com/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cruz.site44.com/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Morris -->
    <link href="https://cruz.site44.com/css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">

    <link href="https://cruz.site44.com/css/animate.css" rel="stylesheet">
    <link href="https://cruz.site44.com/css/style.css" rel="stylesheet">

</head>

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
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">David Williams</strong>
                             </span> <span class="text-muted text-xs block">Art Director <b class="caret"></b></span> </span> </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="https://cruz.site44.com/profile.html">Profile</a></li>
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


        <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-lg-2">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <span class="label label-success pull-right">Monthly</span>
                        <h5>Views</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins">386,200</h1>
                        <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i></div>
                        <small>Total views</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <span class="label label-info pull-right">Annual</span>
                        <h5>Orders</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins">80,800</h1>
                        <div class="stat-percent font-bold text-info">20% <i class="fa fa-level-up"></i></div>
                        <small>New orders</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <span class="label label-primary pull-right">Today</span>
                        <h5>visits</h5>
                    </div>
                    <div class="ibox-content">

                        <div class="row">
                            <div class="col-md-6">
                                <h1 class="no-margins">406,42</h1>
                                <div class="font-bold text-navy">44% <i class="fa fa-level-up"></i> <small>Rapid pace</small></div>
                            </div>
                            <div class="col-md-6">
                                <h1 class="no-margins">206,12</h1>
                                <div class="font-bold text-navy">22% <i class="fa fa-level-up"></i> <small>Slow pace</small></div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Monthly income</h5>
                        <div class="ibox-tools">
                            <span class="label label-primary">Updated 12.2015</span>
                        </div>
                    </div>
                    <div class="ibox-content no-padding">
                        <div class="flot-chart m-t-lg" style="height: 55px;">
                            <div class="flot-chart-content" id="flot-chart1"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="ibox-content">
            <div class="row">
                <div class="col-sm-9 m-b-xs">
                    <div data-toggle="buttons" class="btn-group">
                        <label class="btn btn-sm btn-white"> <input type="radio" id="option1" name="options"> Day </label>
                        <label class="btn btn-sm btn-white active"> <input type="radio" id="option2" name="options"> Week </label>
                        <label class="btn btn-sm btn-white"> <input type="radio" id="option3" name="options"> Month </label>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="input-group"><input type="text" placeholder="Search" class="input-sm form-control"> <span class="input-group-btn">
                                        <button type="button" class="btn btn-sm btn-primary"> Go!</button> </span></div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>

                        <th>#</th>
                        <th>Project </th>
                        <th>Name </th>
                        <th>Phone </th>
                        <th>Company </th>
                        <th>Completed </th>
                        <th>Task</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Project <small>This is example of project</small></td>
                        <td>Patrick Smith</td>
                        <td>0800 051213</td>
                        <td>Inceptos Hymenaeos Ltd</td>
                        <td><span class="pie">0.52/1.561</span></td>
                        <td>20%</td>
                        <td>Jul 14, 2013</td>
                        <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Alpha project</td>
                        <td>Alice Jackson</td>
                        <td>0500 780909</td>
                        <td>Nec Euismod In Company</td>
                        <td><span class="pie">6,9</span></td>
                        <td>40%</td>
                        <td>Jul 16, 2013</td>
                        <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Betha project</td>
                        <td>John Smith</td>
                        <td>0800 1111</td>
                        <td>Erat Volutpat</td>
                        <td><span class="pie">3,1</span></td>
                        <td>75%</td>
                        <td>Jul 18, 2013</td>
                        <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Gamma project</td>
                        <td>Anna Jordan</td>
                        <td>(016977) 0648</td>
                        <td>Tellus Ltd</td>
                        <td><span class="pie">4,9</span></td>
                        <td>18%</td>
                        <td>Jul 22, 2013</td>
                        <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Alpha project</td>
                        <td>Alice Jackson</td>
                        <td>0500 780909</td>
                        <td>Nec Euismod In Company</td>
                        <td><span class="pie">6,9</span></td>
                        <td>40%</td>
                        <td>Jul 16, 2013</td>
                        <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Project <small>This is example of project</small></td>
                        <td>Patrick Smith</td>
                        <td>0800 051213</td>
                        <td>Inceptos Hymenaeos Ltd</td>
                        <td><span class="pie">0.52/1.561</span></td>
                        <td>20%</td>
                        <td>Jul 14, 2013</td>
                        <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Gamma project</td>
                        <td>Anna Jordan</td>
                        <td>(016977) 0648</td>
                        <td>Tellus Ltd</td>
                        <td><span class="pie">4,9</span></td>
                        <td>18%</td>
                        <td>Jul 22, 2013</td>
                        <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Project <small>This is example of project</small></td>
                        <td>Patrick Smith</td>
                        <td>0800 051213</td>
                        <td>Inceptos Hymenaeos Ltd</td>
                        <td><span class="pie">0.52/1.561</span></td>
                        <td>20%</td>
                        <td>Jul 14, 2013</td>
                        <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Alpha project</td>
                        <td>Alice Jackson</td>
                        <td>0500 780909</td>
                        <td>Nec Euismod In Company</td>
                        <td><span class="pie">6,9</span></td>
                        <td>40%</td>
                        <td>Jul 16, 2013</td>
                        <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Betha project</td>
                        <td>John Smith</td>
                        <td>0800 1111</td>
                        <td>Erat Volutpat</td>
                        <td><span class="pie">3,1</span></td>
                        <td>75%</td>
                        <td>Jul 18, 2013</td>
                        <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Gamma project</td>
                        <td>Anna Jordan</td>
                        <td>(016977) 0648</td>
                        <td>Tellus Ltd</td>
                        <td><span class="pie">4,9</span></td>
                        <td>18%</td>
                        <td>Jul 22, 2013</td>
                        <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Alpha project</td>
                        <td>Alice Jackson</td>
                        <td>0500 780909</td>
                        <td>Nec Euismod In Company</td>
                        <td><span class="pie">6,9</span></td>
                        <td>40%</td>
                        <td>Jul 16, 2013</td>
                        <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Project <small>This is example of project</small></td>
                        <td>Patrick Smith</td>
                        <td>0800 051213</td>
                        <td>Inceptos Hymenaeos Ltd</td>
                        <td><span class="pie">0.52/1.561</span></td>
                        <td>20%</td>
                        <td>Jul 14, 2013</td>
                        <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Gamma project</td>
                        <td>Anna Jordan</td>
                        <td>(016977) 0648</td>
                        <td>Tellus Ltd</td>
                        <td><span class="pie">4,9</span></td>
                        <td>18%</td>
                        <td>Jul 22, 2013</td>
                        <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                    </tr>
                    </tbody>
                </table>
            </div>

        </div>
        </div>
        </div>

        </div>


        </div>




        </div>
        <div id="right-sidebar">
            <div class="sidebar-container">

                <ul class="nav nav-tabs navs-3">

                    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                        <div class="container">
                            <a class="navbar-brand" href="{{ url('/') }}">
                                {{ config('app.name', 'blog') }}
                            </a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <!-- Left Side Of Navbar -->
                                <ul class="navbar-nav me-auto">

                                    @if(auth()->user()->role_id==2)
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('admin.posts.index') }}">Postss</a>
                                    </li>

                                    @else
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('posts') }}">Posts</a>
                                    </li>

                                    @endif

                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('tags') }}">Tags</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('users') }}">Users</a>
                                    </li>

                                </ul>

                                <!-- Right Side Of Navbar -->
                                <ul class="navbar-nav ms-auto">
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
                                        <li class="nav-item dropdown">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                {{ Auth::user()->name }}
                                            </a>


                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                                                <a class="dropdown-item" href="{{route('profile')}}">
                                                Profile
                                            </a>

                                            @if (auth()->user()->role_id==2)
                                                <a class="dropdown-item" href="{{route('admin.index')}}">
                                                    Admin
                                                </a>
                                            @endif


                                            <a class="dropdown-item" href="{{route('posts')}}">
                                                Posts
                                            </a>

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
                                    @endguest
                                </ul>
                            </div>
                        </div>
                    </nav>

                    <div id="tab-2" class="tab-pane">




                        <div class="sidebar-title">
                            <h3><i class="fa fa-gears"></i> Settings</h3>
                            <small><i class="fa fa-tim"></i> You have 14 projects. 10 not completed.</small>
                        </div>

                        <div class="setings-item">
                    <span>
                        Show notifications
                    </span>
                            <div class="switch">
                                <div class="onoffswitch">
                                    <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example">
                                    <label class="onoffswitch-label" for="example">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="setings-item">
                    <span>
                        Disable Chat
                    </span>
                            <div class="switch">
                                <div class="onoffswitch">
                                    <input type="checkbox" name="collapsemenu" checked class="onoffswitch-checkbox" id="example2">
                                    <label class="onoffswitch-label" for="example2">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="setings-item">
                    <span>
                        Enable history
                    </span>
                            <div class="switch">
                                <div class="onoffswitch">
                                    <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example3">
                                    <label class="onoffswitch-label" for="example3">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="setings-item">
                    <span>
                        Show charts
                    </span>
                            <div class="switch">
                                <div class="onoffswitch">
                                    <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example4">
                                    <label class="onoffswitch-label" for="example4">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="setings-item">
                    <span>
                        Offline users
                    </span>
                            <div class="switch">
                                <div class="onoffswitch">
                                    <input type="checkbox" checked name="collapsemenu" class="onoffswitch-checkbox" id="example5">
                                    <label class="onoffswitch-label" for="example5">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="setings-item">
                    <span>
                        Global search
                    </span>
                            <div class="switch">
                                <div class="onoffswitch">
                                    <input type="checkbox" checked name="collapsemenu" class="onoffswitch-checkbox" id="example6">
                                    <label class="onoffswitch-label" for="example6">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="setings-item">
                    <span>
                        Update everyday
                    </span>
                            <div class="switch">
                                <div class="onoffswitch">
                                    <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example7">
                                    <label class="onoffswitch-label" for="example7">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="sidebar-content">
                            <h4>Settings</h4>
                            <div class="small">
                                I belive that. Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                And typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                Over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                            </div>
                        </div>

                    </div>
                </div>

            </div>



        </div>
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

    <script>
        $(document).ready(function() {


            var d1 = [[1262304000000, 6], [1264982400000, 3057], [1267401600000, 20434], [1270080000000, 31982], [1272672000000, 26602], [1275350400000, 27826], [1277942400000, 24302], [1280620800000, 24237], [1283299200000, 21004], [1285891200000, 12144], [1288569600000, 10577], [1291161600000, 10295]];
            var d2 = [[1262304000000, 5], [1264982400000, 200], [1267401600000, 1605], [1270080000000, 6129], [1272672000000, 11643], [1275350400000, 19055], [1277942400000, 30062], [1280620800000, 39197], [1283299200000, 37000], [1285891200000, 27000], [1288569600000, 21000], [1291161600000, 17000]];

            var data1 = [
                { label: "Data 1", data: d1, color: '#17a084'},
                { label: "Data 2", data: d2, color: '#127e68' }
            ];
            $.plot($("#flot-chart1"), data1, {
                xaxis: {
                    tickDecimals: 0
                },
                series: {
                    lines: {
                        show: true,
                        fill: true,
                        fillColor: {
                            colors: [{
                                opacity: 1
                            }, {
                                opacity: 1
                            }]
                        },
                    },
                    points: {
                        width: 0.1,
                        show: false
                    },
                },
                grid: {
                    show: false,
                    borderWidth: 0
                },
                legend: {
                    show: false,
                }
            });

            var lineData = {
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [
                    {
                        label: "Example dataset",
                        backgroundColor: "rgba(26,179,148,0.5)",
                        borderColor: "rgba(26,179,148,0.7)",
                        pointBackgroundColor: "rgba(26,179,148,1)",
                        pointBorderColor: "#fff",
                        data: [48, 48, 60, 39, 56, 37, 30]
                    },
                    {
                        label: "Example dataset",
                        backgroundColor: "rgba(220,220,220,0.5)",
                        borderColor: "rgba(220,220,220,1)",
                        pointBackgroundColor: "rgba(220,220,220,1)",
                        pointBorderColor: "#fff",
                        data: [65, 59, 40, 51, 36, 25, 40]
                    }
                ]
            };

            var lineOptions = {
                responsive: true
            };


            var ctx = document.getElementById("lineChart").getContext("2d");
            new Chart(ctx, {type: 'line', data: lineData, options:lineOptions});


        });
    </script>
</body>
</html>
