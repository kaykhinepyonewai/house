@extends('../frontendtemplate')



@include ('frontend.nav')

@include ('frontend.navUser')


@section('content')


<div class="carousel slide " data-interval="2000" data-ride="carousel">
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

</div>

<div class="container-fluid bg-dark">
	
	<div class="offset-md-3 col-md-6  text-light py-2 text-center">
		<h1 class="py-4">Your Order is Successfully</h1>
		<p>Your order is submitted successfully.We will delivery to you within three days. Thank You....</p>
		<a href="{{route('homepage')}}" class="btn btn-light ">Continue To Rent</a>
	</div>

</div>





@endsection