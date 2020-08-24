!DOCTYPE html>
<html lang="en">


<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Melody Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('assets/backend/vendors/iconfonts/font-awesome/css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/backend/vendors/css/vendor.bundle.base.css')}}">
  <link rel="stylesheet" href="{{asset('assets/backend/vendors/css/vendor.bundle.base.css')}}">
  <link rel="stylesheet" href="{{asset('assets/backend/vendors/css/vendor.bundle.addons.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('assets/backend/css/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="http://www.urbanui.com/" />

</head>

@include('layouts.backend.nav')
@include('layouts.backend.sidebar')
@yield('content')
@include('layouts.backend.footer')