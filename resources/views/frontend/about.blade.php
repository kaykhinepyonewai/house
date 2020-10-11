@extends('frontendtemplate')
@include ('frontend.nav')
@include ('frontend.navUser')
@section('content')


<video  controls style="width: 100%; margin-top: 100px
  height: auto;" id="uparrow">
  <source src="{{'frontend/Facebook(1).mp4'}}" type="video/mp4" class="">

  Your browser does not support the video tag.
</video>
<h1 class="tablecolor text-center" >Developer</h1>
<hr class="divider1" > 
<div class="container my-5">
  <div class="row">
    <div class="offset-2"></div>
    <div class="col-md-7 pl-5">
      <div class="row">
        <div class="col-md-6 col-sm-6">
      <img src="{{asset('frontend/images/profile1.jpg')}}" style="border-radius: 50%; width: 200px; height: 200px;">
      </div>
       <div class="col-md-6 col-sm-6 justify-content-center pr-5  font-weight-bold tablecolor" style="line-height: 50px;">
      
      Name :Kay Khine Pyone Wai<br>Address   :Mandalay <br> Phone :09-797363511
    </div>
    </div>

    </div>
    {{-- <div class="col-md-3 justify-content-center pr-5  font-weight-bold" style="line-height: 50px;">
      
      Name &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;   :Kay Khine pyone Wai<br>Address &nbsp; &nbsp; &nbsp; :Mandalay <br> Phone &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:09-1234567
    </div> --}}
    {{-- <div class="col-md-6 pl-5">
      <div class="row">
        <div class="col-md-6 col-sm-6">
      <img src="{{asset('frontend/images/profile.jpg')}}" style="border-radius: 50%; width: 200px; height: 200px;">
      </div>
  
    <div class="col-md-6 col-sm-6  font-weight-bold tablecolor" style="line-height: 50px">
      Name :Khaing Hnin Si<br>Address  :Mandalay Region,Paleik <br> Phone :09-770106551
    </div>
  </div>
</div> --}}

</div>
</div>


<h1 class="tablecolor text-center my-3"> About</h1>
<hr class="divider1" >

<div class="container-fluid py-5" >
	<div class="row">
		<div class="col-md-6">
			<p class="tablecolor text-capitalize text-justify" style="line-height: 50px; font-size: 20px">By using our website the landlord is allowed to post information about the house of their choice, and the tenant is fully informed and comfortable to rent, and both have easy access to each other.Landlords can advertise through my website, making it easy for people to find out about their home design, connect with many tenants, and choose from a wide range of tenants.The tenant can browse my website, choose tenant favourite house type, contact the landlord and rent to variety of houses.</p>
		</div>
		<div class="col-md-6">
			<div id="carouselExampleIndicators" class="carousel slide w-80 h-80" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('frontend/images/carousel.jpg')}}" class="d-block img-fluid w-100 h-50" >
    </div>
    <div class="carousel-item">
      <img src="{{asset('frontend/images/carousel1.jpg')}}" class="d-block img-fluid w-100 h-50" alt="..." >
    </div>
    <div class="carousel-item">
      <img src="{{asset('frontend/images/carousel2.jpg')}}" class="d-block img-fluid w-100 h-50" >
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
		</div>
	</div>
</div>
<h2 class="text-center tablecolor">Reasons Why Renting Could Be Better Than Buying</h2>
<div class="container-fluid my-5">
  <div class="row">
    <div class="col-md-6">
      <img src="{{asset('frontend/images/carousel6.jpg')}}" class="d-block img-fluid w-100 h-80" >
    </div>
     <div class="col-md-6">
      <ul class="tablecolor text-capitalize text-justify" style="line-height: 45px; font-size: 20px">
        <li>A rent-to-own agreement is a deal in which you commit to renting a property for a specific period of time, with the option of buying it before the lease runs out.</li>
        <li>Rent-to-own agreements include a standard lease agreement and also an option to buy the property at a later time.</li>
        <li>Lease-option contracts give you the right to buy the home when the lease expires, while lease-purchase contracts require you to buy it.</li>
        <li>You pay rent throughout the lease, and in some cases, a percentage of the payment is applied to the purchase price.</li>
        <li>With some rent-to-own contracts, you may have to maintain the property and pay for repairs.</li>
      </ul>
    </div>
  </div>
</div>
{{-- <a href="#uparrow" class="float-right " style="display: inline;">

<i class="fas fa-arrow-circle-up scroll-to-top fa-3x"></i>
</a> --}}
	

	





@endsection