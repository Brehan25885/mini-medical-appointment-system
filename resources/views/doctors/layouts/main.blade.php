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
    <link href="{{asset('css/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('css/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">

    <!-- <link href="{{asset('css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all"> -->

    <!-- Bootstrap CSS-->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <link href="{{asset('css/animsition.min.css')}}" rel="stylesheet" media="all">

    <link href="{{asset('css/hamburgers.min.css')}}" rel="stylesheet" media="all">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css" rel="stylesheet" media="all">


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
        @include('doctors.layouts.messages')
            @yield('content')



                    </div>
                </div>
    </div>
    </div>

  <footer>
                     <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                    </div>
                    </footer>
  <!-- Jquery JS-->
  <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap JS-->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/animsition.min.js')}}"></script>

    <!-- Main JS -->

     <script src="{{asset('js/main.js')}}"></script>
     @stack('after-scripts')

</body>

</html>
<!-- end document-->
