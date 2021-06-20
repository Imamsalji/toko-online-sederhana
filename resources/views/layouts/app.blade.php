<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
      <!-- site metas -->
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{ asset('template/css/bootstrap.min.css') }}">
      <!-- style css -->
      <link rel="stylesheet" href="{{ asset('template/css/style.cs') }}s">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{ asset('template/css/responsive.css') }}">
      <!-- fevicon -->
      <link rel="icon" href="{{ asset('template/images/fevicon.png') }}" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{ asset('template/css/jquery.mCustomScrollbar.min.css') }}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <script type="text/javascript" src="jquery.js"></script>
      <link rel="stylesheet" type="text/css" href="{{ asset('css/demo.css') }}">
      <style type="text/css">
/* untuk pemakaian di blog/website anda, yang di copy hanya css di bawah ini*/

   /* style untuk link popup */
   a.popup-link {
      padding:17px 0;
      text-align: center;
      margin:7% auto;
      position: relative;
      width: 300px;
      color: #fff;
      text-decoration: none;
      background-color: #FFBA00;
      border-radius: 3px;
      box-shadow: 0 5px 0px 0px #eea900;
      display: block;
   }
   a.popup-link:hover {
      background-color: #ff9900;
      box-shadow: 0 3px 0px 0px #eea900;
      -webkit-transition:all 1s;
      -moz-transition:all 1s;
      transition:all 1s;
   }
   /* end link popup*/

   /*style untuk popup */  
   #popup {
      visibility: hidden;
      opacity: 0;
      margin-top: -200px;
   }
   #popup:target {
      visibility:visible;
      opacity: 1;
      background-color: rgba(0,0,0,0.8);
      position: fixed;
      top:0;
      left:0;
      right:0;
      bottom:0;
      margin:0;
      z-index: 99999999999;
      -webkit-transition:all 1s;
      -moz-transition:all 1s;
      transition:all 1s;
   }

   @media (min-width: 768px){
      .popup-container {
         width:600px;
      }
   }
   @media (max-width: 767px){
      .popup-container {
         width:100%;
      }
   }
   .popup-container {
      position: relative;
      margin:7% auto;
      padding:30px 50px;
      background-color: #fafafa;
      color:#333;
      border-radius: 3px;
   }

   a.popup-close {
      position: absolute;
      top:3px;
      right:3px;
      background-color: #333;
      padding:7px 10px;
      font-size: 20px;
      text-decoration: none;
      line-height: 1;
      color:#fff;
   }

   /* style untuk isi popup */


   .popup-form {
      margin:10px auto;
   }
      .popup-form h2 {
         margin-bottom: 5px;
         font-size: 37px;
         text-transform: uppercase;
      }
      .popup-form .input-group {
         margin:10px auto;
      }
         .popup-form .input-group input {
            padding:17px;
            text-align: center;
            margin-bottom: 10px;
            border-radius:3px;
            font-size: 16px; 
            display: block;
            width: 100%;
         }
         .popup-form .input-group input:focus {
            outline-color:#FB8833; 
         }
         .popup-form .input-group input[type="email"] {
            border:0px;
            position: relative;
         }
         .popup-form .input-group input[type="submit"] {
            background-color: #FB8833;
            color: #fff;
            border: 0;
            cursor: pointer;
         }
         .popup-form .input-group input[type="submit"]:focus {
            box-shadow: inset 0 3px 7px 3px #ea7722;
         }

   </style>
      
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout" style="background-color: white;margin-top: auto;">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="{{ asset('template/images/loading1.gif') }}" alt="#" /></div>
      </div>
      <!-- end loader --> 
      <!-- header -->
      @include('layouts.header')
      <!-- end header -->
      @include('sweetalert::alert')

      @yield('content')


      @include('layouts.footer')
      <!-- end footer -->
      <!-- Javascript files--> 
      <script src="{{ asset('template/js/jquery.min.js') }}"></script> 
      <script src="{{ asset('template/js/popper.min.js') }}"></script> 
      <script src="{{ asset('template/js/bootstrap.bundle.min.js') }}"></script> 
      <script src="{{ asset('template/js/jquery-3.0.0.min.js') }}"></script> 
      <script src="{{ asset('template/js/plugin.js') }}"></script> 
      <!-- sidebar --> 
      <script src="{{ asset('template/js/jquery.mCustomScrollbar.concat.min.js') }}"></script> 
      <script src="{{ asset('template/js/custom.js') }}"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
         $(document).ready(function(){
         $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });
         
         $(".zoom").hover(function(){
         
         $(this).addClass('transition');
         }, function(){
         
         $(this).removeClass('transition');
         });
         });
         
      </script> 
   </body>
</html>