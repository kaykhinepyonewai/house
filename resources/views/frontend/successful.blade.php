@extends('../frontendtemplate')



@include ('frontend.nav')

@include ('frontend.navUser')


@section('content')


{{-- <div class="carousel slide " data-interval="2000" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active flu flu1">
  
     <img src="frontend/images/main.jpg" class="img-fluid w-100 ">
   </div>
   <div class="carousel-item">
    <img src="frontend/images/main.jpg" class="d-block w-100 ">
  </div>
  <div class="carousel-item">
    <img src="frontend/images/main.jpg" class="d-block w-100 ">
  </div>
</div>

</div> --}}

{{-- <div class="container-fluid">
  
     <img src="frontend/images/main.jpg" class="img-fluid w-100 ">
  </div> --}}

<div class="container-fluid " style="background-color: #8793a3">
   <img src="frontend/images/main.jpg" class="img-fluid w-100 ">
	
	<div class="offset-md-3 col-md-6  text-light py-2 text-center">
    <h2 class="py-4">Welcome to Our Rental House Website For Mandalay</h2>
		<h3 class="">Your Request For Rent is Successfully</h3>
		<p>Your request is submitted successfully.We will send message to you after checking your request. Thank You....</p>
		<a href="{{route('homepage')}}" class="btn btn-light ">Continue To Rent</a>
	</div>


</div>

 {{-- <hr class="w-100 divider"> --}}







@endsection