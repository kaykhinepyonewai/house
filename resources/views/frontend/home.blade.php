@extends('../frontendtemplate')



@include ('frontend.nav')


@section('content')


<div class="container bg-dark text-center pt-5" >
    <div class="row">
      <div class="col-lg-3 col-md-4 ">
        <img src="images/door.jpg" alt="Avatar" class="avatar ">
        <h5 class="pp">Door To Door</h5>
        <p class="pp">One time Delivery</p>
      </div>
      
      <div class="col-lg-3 col-md-4 ">
        <img src="images/satifi.png" alt="Avatar" class="avatar">
        <h5 class="pp">100% Satification</h5>
        <p class="pp">3 days Return</p>
      </div>
      <div class="col-lg-3 col-md-4 ">
        <img src="images/customer.jpg" alt="Avatar" class="avatar">
        <h5 class="pp">Customer Services</h5>
        <p class="pp">Hote Line : 09797363511, 09-3304743</p>
      </div>
      <div class="col-lg-3 col-md-4 ">
        <img src="images/pay.jpg" alt="Avatar" class="avatar">
        <h5 class="pp">Cash On Delivery</h5>
        <p class="pp">Online Payment</p>
      </div>
    </div>
  </div>

  <hr class="w-100 divider">


  <div class="bg-dark py-5 text-light px-5 foo">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12">
          <h2 class="px-4">About</h1>
          <p class="py-4 px-4">K Online Shop is a Buy marketplace for Myanmar (Burma) and designed to make it simple and easy to use. You can buy new items with each other via the in-app chat function or make the direct phone call to make the deal faster.
          </p>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
          <h2 class="px-2">Link</h1>
          <div class="py-4 px-4">
          <p><a href="index.php"><span class="link pr-2"><i class="fa fa-link" aria-hidden="true"></i></span>  Home</a></p>
          <p><a href="product.php" ><span class="link pr-2"><i class="fa fa-link" aria-hidden="true"></i></span>  Product</a></p>
          <p><a href="about.php"><span class="link pr-2"><i class="fa fa-link" aria-hidden="true"></i></span>  About</a></p>
          <p><a href="contact.php"><span class="link pr-2"><i class="fa fa-link" aria-hidden="true"></i></span>  Contact</a></p>
          </div>

        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
          <h2 class="px-2">Address</h1>
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

@endsection