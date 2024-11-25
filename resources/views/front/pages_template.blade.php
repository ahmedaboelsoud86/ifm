<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Lorem PugJs">
    <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
    <meta name="keywords" content="">
    <title>Integrated Facility |    @yield('title') </title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
    @if(LaravelLocalization::getCurrentLocale() == "ar")
      <link rel="stylesheet" href="{{ asset('assets/css/home-rtl.css') }}">
    @endif 
    <link href="https://fonts.googleapis.com/css2?family=Readex+Pro:wght@160..700&amp;amp;display=swap" rel="stylesheet">
    <link rel="icon" href="{{ asset('assets/images/favicon.png ') }}" type="image/png">
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/grt-youtube-popup.js') }}"></script>
    <script src="{{ asset('assets/js/plugin.js') }}"></script>
  </head>
  <body>
    @include('components._header')
    @yield('content')
    @include('components._footer')
  </body>
</html>
