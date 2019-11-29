<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $sectiontitre ?? 'Wiki'}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="apple-touch-icon" href="{{ asset('app-assets/images/favicon/apple-touch-icon-152x152.png') }}">
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/logo/logo-switch-maker.png') }}" rel="stylesheet">

        <link href="{{ asset('app-assets/vendors/vendors.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/materialize.min.css') }}" rel="stylesheet">
        <link href="{{ asset('fonts/iconfont/material-icons.css') }}" rel="stylesheet">
        <link href="{{ asset('app-assets/css/themes/vertical-dark-menu-template/style.css ') }}" rel="stylesheet">
        <link href="{{ asset('app-assets/css/pages/dashboard.css') }}" rel="stylesheet">
        <link href="{{ asset('app-assets/css/custom/custom.css') }}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/data-tables/css/jquery.dataTables.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/data-tables/css/select.dataTables.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/data-tables.css') }}">


        <link href="{{ asset('css/main.css') }}" rel="stylesheet">


    </head>
    <body>

        @include('articles::partials/backend/_navback')

       
        {{--@include('partials._notification')--}}

        <div  id="main">
            @yield('mycontent')
        </div>

        @include('articles::partials/backend/_footerback')

        <script src='{{ asset("js/jquery.min.js") }}'></script>
        <script src='{{ asset("app-assets/js/vendors.min.js") }}'></script>
        <script src='{{ asset("app-assets/js/plugins.js") }}'></script>
        <script src="{{ asset('js/materialize.min.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
        <script src="{{ asset('app-assets/vendors/data-tables/js/jquery.dataTables.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('app-assets/vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('app-assets/vendors/data-tables/js/dataTables.select.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('app-assets/js/scripts/data-tables.js') }}"></script>
    </body>
</html>
