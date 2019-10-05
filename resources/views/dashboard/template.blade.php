<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        <link rel="icon" href="images/favicon.ico" type="image/ico" />
        <title>@yield('app_name') | @yield('location_name')</title>
        <link href="<?php echo asset('vendors/bootstrap/dist/css/bootstrap.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo asset('vendors/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo asset('vendors/nprogress/nprogress.css'); ?>" rel="stylesheet">
        <link href="<?php echo asset('vendors/iCheck/skins/flat/green.css'); ?>" rel="stylesheet">
        <link href="<?php echo asset('vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo asset('vendors/jqvmap/dist/jqvmap.min.css'); ?>" rel="stylesheet"/>
        <link href="<?php echo asset('vendors/bootstrap-daterangepicker/daterangepicker.css'); ?>" rel="stylesheet">
        <link href="<?php echo asset('build/css/custom.min.css'); ?>" rel="stylesheet">
    </head>

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                {{-- SIDEBAR --}}
                @component('components.sidebar')
                    @slot('nav_title')
                        SOULUTION
                    @endslot
                    @slot('nav_sections')
                        <div class="menu_section">
                            <ul class="nav side-menu">
                                @foreach ($menu as $item)
                                    @if (count($item->child) > 0)
                                        @php
                                            $status = "";
                                        @endphp
                                        @foreach ($item->child as $itemChild)
                                            @if ($itemChild->href == $current_url)
                                                @php
                                                    $status = "class='active'";
                                                @endphp
                                            @endif
                                        @endforeach
                                        <li {{$status}}>
                                            <a><i class="{{$item->icon}}"></i> {{$item->text}} <span class="fa fa-chevron-down"></span></a>
                                            <ul class="nav child_menu">
                                                @foreach ($item->child as $itemChild)
                                                    @if ($itemChild->href == $current_url)
                                                        <li class="current_page"><a href="{{$itemChild->href}}">{{$itemChild->text}}</a></li>
                                                    @else
                                                        <li><a href="{{$itemChild->href}}">{{$itemChild->text}}</a></li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </li>
                                    @else
                                        @if ($item->href == $current_url)
                                            <li class="active"><a><i class="{{$item->icon}}"></i> {{$item->text}}</a></li>
                                        @else
                                            <li><a><i class="{{$item->icon}}"></i> {{$item->text}}</a></li>
                                        @endif
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    @endslot
                @endcomponent

                {{-- TOPBAR --}}
                @component('components.topbar')
                    @slot ('top_nav_extras_user_name')
                        Andy Maulana Yusuf
                    @endslot
                    @slot ('top_nav_extras')
                        @foreach ($menu_extras as $item)
                            <li><a href="{{$item->href}}"><i class="{{$item->icon}} pull-right"></i> {{$item->text}}</a></li>
                        @endforeach
                    @endslot

                    @slot ('top_nav_extras_list')
                        @foreach ($menu_extras_list as $item)
                            <li id="{{$item->id}}">
                                <a href="{{$item->href}}" class="info-number">
                                    <i class="{{$item->icon}}"></i>
                                    <span class="badge bg-green">0</span>
                                </a>
                            </li>
                        @endforeach
                    @endslot
                @endcomponent

                <div class="right_col" role="main">
                    {{-- MAIN CONTENT --}}
                    @yield('main_content')
                </div>
            </div>
        </div>

        <script src="<?php echo asset('vendors/jquery/dist/jquery.min.js'); ?>"></script>
        <script src="<?php echo asset('vendors/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
        <script src="<?php echo asset('vendors/fastclick/lib/fastclick.js'); ?>"></script>
        <script src="<?php echo asset('vendors/nprogress/nprogress.js'); ?>"></script>
        <script src="<?php echo asset('vendors/Chart.js/dist/Chart.min.js'); ?>"></script>
        <script src="<?php echo asset('vendors/gauge.js/dist/gauge.min.js'); ?>"></script>
        <script src="<?php echo asset('vendors/bootstrap-progressbar/bootstrap-progressbar.min.js'); ?>"></script>
        <script src="<?php echo asset('vendors/iCheck/icheck.min.js'); ?>"></script>
        <script src="<?php echo asset('vendors/skycons/skycons.js'); ?>"></script>
        <script src="<?php echo asset('vendors/Flot/jquery.flot.js'); ?>"></script>
        <script src="<?php echo asset('vendors/Flot/jquery.flot.pie.js'); ?>"></script>
        <script src="<?php echo asset('vendors/Flot/jquery.flot.time.js'); ?>"></script>
        <script src="<?php echo asset('vendors/Flot/jquery.flot.stack.js'); ?>"></script>
        <script src="<?php echo asset('vendors/Flot/jquery.flot.resize.js'); ?>"></script>
        <script src="<?php echo asset('vendors/flot.orderbars/js/jquery.flot.orderBars.js'); ?>"></script>
        <script src="<?php echo asset('vendors/flot-spline/js/jquery.flot.spline.min.js'); ?>"></script>
        <script src="<?php echo asset('vendors/flot.curvedlines/curvedLines.js'); ?>"></script>
        <script src="<?php echo asset('vendors/DateJS/build/date.js'); ?>"></script>
        <script src="<?php echo asset('vendors/jqvmap/dist/jquery.vmap.js'); ?>"></script>
        <script src="<?php echo asset('vendors/jqvmap/dist/maps/jquery.vmap.world.js'); ?>"></script>
        <script src="<?php echo asset('vendors/jqvmap/examples/js/jquery.vmap.sampledata.js'); ?>"></script>
        <script src="<?php echo asset('vendors/moment/min/moment.min.js'); ?>"></script>
        <script src="<?php echo asset('vendors/bootstrap-daterangepicker/daterangepicker.js'); ?>"></script>
        <script src="<?php echo asset('build/js/custom.min.js'); ?>"></script>

        @yield('custom_js')
    </body>
</html>