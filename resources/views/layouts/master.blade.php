<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Chameleon Admin is a modern Bootstrap 4 webapp &amp; admin dashboard html template with a large number of components, elegant design, clean and organized code.">
    <meta name="keywords" content="admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>Dashboard - Chameleon Admin - Modern Bootstrap 4 WebApp & Dashboard HTML Template + UI Kit</title>
    <link rel="apple-touch-icon" href="theme-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="theme-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('template/theme-assets/css/vendors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('template/theme-assets/vendors/css/charts/chartist.css') }}">
    <!-- END VENDOR CSS-->
    <!-- BEGIN CHAMELEON  CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('template/theme-assets/css/app-lite.css') }}">
    <!-- END CHAMELEON  CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('template/theme-assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('template/theme-assets/css/core/colors/palette-gradient.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('template/theme-assets/css/pages/dashboard-ecommerce.css') }}">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <!-- END Custom CSS-->
  </head>
  <body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-chartbg" data-col="2-columns">

    <!-- fixed-top-->
    
    @include("layouts/element/top")
    <!-- ////////////////////////////////////////////////////////////////////////////-->

    {{-- sidebar --}}
    @include("layouts/element/sideBar")
    <div class="app-content content">
        <div class="content-wrapper">
          <div class="content-wrapper-before"></div>
          <div class="content-header row">
          </div>
          <div class="content-body">
            <div class="content-header row">
                <div class="content-header-left col-md-4 col-12 mb-2">
                  <h3 class="content-header-title">@yield('title')</h3>
                </div>
                <div class="content-header-right col-md-8 col-12">
                  <div class="breadcrumbs-top float-md-right">
                    <div class="breadcrumb-wrapper mr-1">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a>
                        </li>
                        <li class="breadcrumb-item active">@yield('role')
                        </li>
                      </ol>
                    </div>
                  </div>
                </div>
              </div>
    @yield('content')
    <!-- ////////////////////////////////////////////////////////////////////////////-->
</div>
</div>
</div>

    @include("layouts/element/footer")

    <!-- BEGIN VENDOR JS-->
    <script src="{{ asset('template/theme-assets/vendors/js/vendors.min.js') }}" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="{{ asset('template/theme-assets/vendors/js/charts/chartist.min.js') }}" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN CHAMELEON  JS-->
    <script src="{{ asset('template/theme-assets/js/core/app-menu-lite.js') }}" type="text/javascript"></script>
    <script src="{{ asset('template/theme-assets/js/core/app-lite.js') }}" type="text/javascript"></script>
    <!-- END CHAMELEON  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="{{ asset('template/theme-assets/js/scripts/pages/dashboard-lite.js') }}" type="text/javascript"></script>
    <script src="{{ asset('template/assets/jquery/jquey.js') }}" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/autonumeric/2.0.0/autoNumeric.min.js"></script>
  
    <script>
        // setup call ajax
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    
    </script>
    @stack('scripts')
    <!-- END PAGE LEVEL JS-->
  </body>
</html>