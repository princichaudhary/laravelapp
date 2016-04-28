<!DOCTYPE html>
<html lang="en">
  <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">
        <!-- Custom Title -->
        <title>@yield('title')</title>

        <!-- Custom styles for this template -->

        <link rel="stylesheet" href="{{ URL::asset('bower_resources/bootstrap/dist/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/carousel.css') }}">
        <script type="text/javascript" src="{{ URL::asset('bower_resources/jquery/dist/jquery.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('bower_resources/bootstrap/dist/js/bootstrap.js') }}"></script>

  </head>
  <body>
        <!-- include navigation stored in resources/views/layout/inc/nav.blade.php -->
        @include('layouts.inc.nav')
        <!-- render html under content section -->
        @yield('content')
  </body>
</html>