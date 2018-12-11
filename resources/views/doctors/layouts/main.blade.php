<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="{{asset('css/font-face.css')}}" rel="stylesheet" media="all">
    <!-- <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('css/fontawesome-all.min.css')}}" rel="stylesheet" media="all"> -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <link href="{{asset('css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <link href="{{asset('css/animsition.min.css')}}" rel="stylesheet" media="all">

    <link href="{{asset('css/hamburgers.min.css')}}" rel="stylesheet" media="all">


    <!-- Main CSS-->
    <link href="{{asset('css/theme.css')}}" rel="stylesheet" media="all">

</head>

<body class="animsition">
<div class="page-wrapper">
        @include('doctors.layouts.header')
   <!-- MAIN CONTENT-->
   <div class="main-content">
                <div class="section__content section__content--p30">
                     <div class="container-fluid">

                    @yield('content')


                     <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                    </div>

                    </div>
                </div>
    </div>
    </div>

  <!-- Jquery JS-->
  <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap JS-->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/animsition.min.js')}}"></script>

    <!-- Main JS -->

     <script src="{{asset('js/main.js')}}"></script>

</body>

</html>
<!-- end document-->
