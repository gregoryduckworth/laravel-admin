<!-- Main Header -->
<header class="main-header">

    <!-- Logo -->
    <a href="{!! route('home') !!}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini">
            {!! config('settings.short_name') !!}
        </span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">
            {!! config('settings.full_name') !!}
        </span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">{!! trans('message.togglenav') !!}</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->
                <li class="dropdown messages-menu">
                    <!-- Menu toggle button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-envelope-o"></i>
                        <span class="label label-success">4</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">{!! trans('message.tabmessages') !!}</li>
                        <li>
                            <!-- inner menu: contains the messages -->
                            <ul class="menu">
                                <li>
                                    <!-- start message -->
                                    <a href="#">
                                        <!-- Message title and timestamp -->
                                        <h4>
                                            {!! trans('message.supteam') !!}
                                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                        </h4>
                                        <!-- The message -->
                                        <p>{!! trans('message.awesometheme') !!}</p>
                                    </a>
                                </li><!-- end message -->
                            </ul><!-- /.menu -->
                        </li>
                        <li class="footer"><a href="#">{!! trans('message.viewall') !!}</a></li>
                    </ul>
                </li><!-- /.messages-menu -->

                <!-- Notifications Menu -->
                <li class="dropdown notifications-menu">
                    <!-- Menu toggle button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bell-o"></i>
                        <span class="label label-warning">10</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">{!! trans('message.notifications') !!}</li>
                        <li>
                            <!-- Inner Menu: contains the notifications -->
                            <ul class="menu">
                                <li>
                                    <!-- start notification -->
                                    <a href="#">
                                        <i class="fa fa-users text-aqua"></i> {!! trans('message.newmembers') !!}
                                    </a>
                                </li><!-- end notification -->
                            </ul>
                        </li>
                        <li class="footer"><a href="#">{!! trans('message.viewall') !!}</a></li>
                    </ul>
                </li>
                <!-- Tasks Menu -->
                <li class="dropdown tasks-menu">
                    <!-- Menu Toggle Button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-flag-o"></i>
                        <span class="label label-danger">9</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">{!! trans('message.tasks') !!}</li>
                        <li>
                            <!-- Inner menu: contains the tasks -->
                            <ul class="menu">
                                <li>
                                    <!-- Task item -->
                                    <a href="#">
                                        <!-- Task title and progress text -->
                                        <h3>
                                            {!! trans('message.tasks') !!}
                                            <small class="pull-right">20%</small>
                                        </h3>
                                        <!-- The progress bar -->
                                        <div class="progress xs">
                                            <!-- Change the css width attribute to simulate progress -->
                                            <div class="progress-bar progress-bar-aqua" style="width: 20%"
                                                role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                                aria-valuemax="100">
                                                <span class="sr-only">20% {!! trans('message.complete') !!}</span>
                                            </div>
                                        </div>
                                    </a>
                                </li><!-- end task item -->
                            </ul>
                        </li>
                        <li class="footer">
                            <a href="#">{!! trans('message.alltasks') !!}</a>
                        </li>
                    </ul>
                </li>
                @if (!Auth::check())
                <li><a href="{!! route('register') !!}">{!! trans('message.register') !!}</a></li>
                <li><a href="{!! route('login') !!}">{!! trans('message.login') !!}</a></li>
                @else
                <!-- User Account Menu -->
                <li class="dropdown user user-menu">
                    <!-- Menu Toggle Button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="user-menu">
                        <!-- The user image in the navbar-->
                        <img src="{!! $currentUser->picture !!}" class="user-image" alt="User Image" />
                        <!-- hidden-xs hides the username on small devices so only the image appears. -->
                        <span class="hidden-xs">{!! $currentUser->name !!}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- The user image in the menu -->
                        <li class="user-header">
                            <img src="{!! $currentUser->picture !!}" class="img-circle" alt="User Image" />
                            <p>
                                {!! $currentUser->name !!}
                                <small>{!! trans('message.registered') !!}: {!!
                                    ($currentUser->created_at)->toFormattedDateString() !!}</small>
                            </p>
                        </li>
                        <!-- Menu Body -->
                        <li class="user-body">
                            <div class="col-xs-4 text-center">
                                <a href="#">{!! trans('message.followers') !!}</a>
                            </div>
                            <div class="col-xs-4 text-center">
                                <a href="#">{!! trans('message.sales') !!}</a>
                            </div>
                            <div class="col-xs-4 text-center">
                                <a href="#">{!! trans('message.friends') !!}</a>
                            </div>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="{!! route('profile.index') !!}" class="btn btn-default btn-flat">{!!
                                    trans('message.profile') !!}</a>
                            </div>
                            <div class="pull-right">
                                <a href="{!! route('logout') !!}" class="btn btn-default btn-flat">{!!
                                    trans('message.signout') !!}</a>
                            </div>
                        </li>
                    </ul>
                </li>
                @endif

                <!-- Control Sidebar Toggle Button -->
                <li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li>
            </ul>
        </div>
    </nav>
</header>
