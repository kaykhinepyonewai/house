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

    {{-- <link rel="stylesheet" type="text/css" href="{{asset('frontend/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/slick-theme.css')}}"> --}}



    <meta name="csrf-token" content="{{ csrf_token() }}">


    <meta charset="utf-8">
 
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet"> -->


      <!-- Custom fonts for this template-->
  <link href="{{asset('frontend/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  {{-- <link href="{{asset('frontend/css/sb-admin-2.min.css')}}" rel="stylesheet"> --}}

  {{--  <link href="{{asset('frontend/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet"> --}}
</head>

<body {{-- class="bg-dark" --}}>

<body >



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

  @role('owner')
  

   @yield('nav')

   @else

   @yield('navUser')

  @endrole


 @yield('sidebar')

  @yield('content')




  <div class="container-fluid {{-- bg-dark --}} text-center pt-5 fot" style="background-color: #8793a3;" >
    <div class="row">
      <div class="col-lg-3 col-md-4 ">
        <img src="{{asset('frontend/images/fo1.svg')}}" alt="Avatar" class="avatar text-light" style="">
        <h5 class="{{-- pp --}}text-light">Easy To Rent</h5>
        <p class="text-light">One time Service</p>
      </div>
      
      <div class="col-lg-3 col-md-4 ">
        <img src="{{asset('frontend/images/fo2.svg')}}" alt="Avatar" class="avatar">
        <h5 class="text-light">100% Satification</h5>
        <p class="text-light">Can Search Online Satification</p>
      </div>
      <div class="col-lg-3 col-md-4 ">
        <img src="{{asset('frontend/images/fo3.svg')}}" alt="Avatar" class="avatar">
        <h5 class="text-light">Customer Services</h5>
        <p class="text-light">Hote Line : 09797363511, 09-3304743</p>
      </div>
      <div class="col-lg-3 col-md-4 ">
        <img src="{{asset('frontend/images/f04.svg')}}" alt="Avatar" class="avatar">
        <h5 class="text-light">Cash On Face To Face</h5>
        <p class="text-light">Contact Payment</p>
      </div>
    </div>
    <hr class="w-100 divider">



<div class="{{-- bg-dark --}} py-5 text-light px-5 foo">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12">
          <h2 class="px-4 text-light">About</h1>
            <p class="py-4 px-4">By Using Our Website The Landlord Is Allowed To Post Information About The House Of Their Choice, And The Tenant Is Fully Informed And Comfortable To Rent, And Both Have Easy Access To Each Other...
            </p>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12">
            <h2 class="px-2 text-light">Link</h1>
              <div class="py-4 px-4">
                <p><a href="{{route('homepage')}}"><span class="link pr-2"><i class="fa fa-link" aria-hidden="true"></i></span>  Home</a></p>
                <p><a href="{{route('propertypage')}}" ><span class="link pr-2"><i class="fa fa-link" aria-hidden="true"></i></span> Rental Property</a></p>
                <p><a href="{{route('about')}}"><span class="link pr-2"><i class="fa fa-link" aria-hidden="true"></i></span>  About</a></p>
                <p><a href="{{route('contact')}}"><span class="link pr-2"><i class="fa fa-link" aria-hidden="true"></i></span>  Contact</a></p>
              </div>

            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <h2 class="px-2 text-light">Address</h1>
                <div class="block-23 mb-3 py-4 px-4">
                  <p>
                    <span class="link pr-2"><i class="fa fa-address-card f" aria-hidden="true"></i></span><span class="text"> Tanpawaddy,Chan Mya Thar Si Township, Mandalay</span>
                  </p>
                  <p>
                    <span class="link pr-2"><i class="fa fa-phone f" aria-hidden="true"></i></span><span class="text"> +09797363511</span>
                  </p>

                  <p>
                    <span class="link pr-2"><i class="fa fa-envelope f" aria-hidden="true"></i></span><span class="text"> kaykhinepyonewai13<br>@gmail.com</span>
                    
                  </p>
                  
                </div>
              </div>

      </div>
    </div>

  </div>



  </div>

  {{-- <hr class="w-100 divider"> --}}






  <footer class="footer {{-- fixed-bottom --}}">
      <div class="container  text-center  text-monospace">
        <p class="footertext m-0">Copyright &copy; All Right Result | Powered By <a href="http://kaykhinepyonewai.me/" class="fot"> KK </a></p>
        
      </div>

      
    </footer>


  
  <script  src="{{asset('frontend/bootstrap/js/jquery.min.js')}}"></script>
  <script src="{{asset('frontend/bootstrap/js/bootstrap.bundle.min.js')}}"></script>



  {{-- <script type="text/javascript" src="{{asset('frontend/slick.min.js')}}"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --}}





  @yield('script')
   


    <!-- Bootstrap core JavaScript-->
  {{-- <script src="{{asset('frontend/vendor/jquery/jquery.min.js')}}"></script> --}}

   {{-- <script src="{{asset('frontend/bootstrap/js/jquery.min.js')}}"></script> --}}


  {{-- <script src="{{asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script> --}}



  <!-- Core plugin JavaScript-->
  {{-- <script src="{{asset('frontend/vendor/jquery-easing/jquery.easing.min.js')}}"></script> --}}

  <!-- Custom scripts for all pages-->
  {{-- <script src="{{asset('frontend/js/sb-admin-2.min.js')}}"></script> --}}

  <!-- Page level plugins -->
 {{--  <script src="{{asset('frontend/vendor/chart.js/Chart.min.js')}}"></script> --}}

  <!-- Page level custom scripts -->
 {{--  <script src="{{asset('frontend/js/demo/chart-area-demo.js')}}"></script>
  <script src="{{asset('frontend/js/demo/chart-pie-demo.js')}}"></script> --}}

  {{-- <script src="{{asset('frontend/vendor/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('frontend/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script --}}

  <!-- Page level custom scripts -->
  {{-- <script src="{{asset('frontend/js/demo/datatables-demo.js')}}"></script>
 --}}




</body>
</html>
