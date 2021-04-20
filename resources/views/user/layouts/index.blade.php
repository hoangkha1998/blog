<!DOCTYPE html>
<html lang="en">
<head>

     <title>Blog</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="user/css/bootstrap.min.css">
     <link rel="stylesheet" href="user/css/font-awesome.min.css">
     <link rel="stylesheet" href="user/css/owl.carousel.css">
     <link rel="stylesheet" href="user/css/owl.theme.default.min.css">
     {{-- <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet" /> --}}

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="user/css/style.css">

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
<!-- PRE LOADER -->
     {{-- <section class="preloader">
          <div class="spinner">
               <span class="spinner-rotate"></span>
          </div>
     </section> --}}
     

     <!-- MENU -->     
     @include('user.common.nav')

     <!-- HOME -->
     {{-- <div id="app">           --}}
     <div id="app">
          @yield('content')   
     </div>  
     {{-- </div> --}}

     <!-- FOOTER -->
     @include('user.common.footer')
     
     <!-- SCRIPTS -->
     <script src="user/js/jquery.js"></script>
     <script src="user/js/bootstrap.min.js"></script>
     <script src="user/js/owl.carousel.min.js"></script>
     <script src="user/js/smoothscroll.js"></script>
     <script src="user/js/custom.js"></script>
     <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
     
     

</body>
</html>