<!DOCTYPE html>
<html class="" lang="en" data-textdirection="">

  <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
        <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
        <meta name="author" content="ThemeSelect">
        <title>{{ $titre ?? 'Wiki'}}</title>
        <link rel="apple-touch-icon" href="{{asset('app-assets/images/favicon/apple-touch-icon-152x152.png')}}">
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/logo/logo-switch-maker.png')}}">
        {{-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> --}}
        <link href="{{ asset('css/materialize.min.css') }}" rel="stylesheet">
        <link href="{{ asset('fonts/iconfont/material-icons.css') }}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/vendors.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/themes/horizontal-menu-template/materialize.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/themes/horizontal-menu-template/style.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/layouts/style-horizontal.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/pages/dashboard.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/custom/custom.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/front.css')}}">
  </head>
  <!-- END: Head-->
  <body class="horizontal-layout page-header-light horizontal-menu 2-columns  " data-open="click" data-menu="horizontal-menu" data-col="2-columns">

        <header class="page-topbar" id="header">
            @include('articles::partials.frontend._navfront')
        </header>

        
        
        <div id="main" class="container">
            {{-- @include('partials._notification') --}}
            @yield('mycontent2')
        </div>
        
        <footer class="page-footer footer footer-static footer-dark gradient-45deg-light-blue-cyan gradient-shadow navbar-border navbar-shadow">
            @include('articles::partials.frontend._footerfront')  
        </footer>
    <script src="{{asset('app-assets/js/vendors.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('app-assets/vendors/chartjs/chart.min.js')}}"></script>
    <script src="{{asset('app-assets/js/plugins.js')}}" type="text/javascript"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{asset('app-assets/js/custom/custom-script.js')}}" type="text/javascript"></script>
    <script src="{{asset('app-assets/js/scripts/dashboard-ecommerce.js')}}" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
  </body>
</html>