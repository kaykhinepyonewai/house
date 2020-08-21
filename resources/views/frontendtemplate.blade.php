<!DOCTYPE html>
<html>
<head>
  <title>K Online Shop</title>
  <meta charset="UTF-8">
 <!--  <link rel="icon" type="text/css" href="images/hello.jpg" class="img-profile rounded-circle"> -->
  <link rel="stylesheet" type="text/css" href="{{asset('frontend/bootstrap/css/bootstrap.min.css')}}">
    <link href="{{asset('backend/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/style1.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <meta charset="utf-8">
 
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet"> -->
</head>
<body class="bg-dark">


  {{-- <nav class="navbar navbar-expand-lg shop  bg-dark navbar-dark" id="scroll">

    <div class="container">
      <a class="navbar-brand" href="#">KK Rental House</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">Rental</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
          
           
          

         

        </ul>
      </div>
    </div>
    
  </nav> --}}

   @yield('nav')



  @yield('content')

  <footer class="footer fixed-bottom">
      <div class="container  text-center  text-monospace">
        <p class="footertext m-0">Copyright &copy; All Right Result | Powered By <a href="http://kaykhinepyonewai.me/" class="fot"> Kay </a></p>
        
      </div>

      
    </footer>





  <script src="{{asset('frontend/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('frontend/bootstrap/js/bootstrap.bundle.min.js')}}"></script>



</body>
</html>
