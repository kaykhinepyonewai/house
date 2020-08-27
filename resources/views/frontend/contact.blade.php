@extends('frontendtemplate')
@include ('frontend.nav')
@include ('frontend.navUser')
@section('content')

<video  controls style="width: 100%; margin-top: 100px
  height: auto;" id="uparrow">
  <source src="{{'frontend/Facebook(1).mp4'}}" type="video/mp4" class="">
  

  Your browser does not support the video tag.
</video>

<h1 class="tablecolor text-center pt-5"> CONTACT US</h1>
<hr class="divider1" > 






<div class="container tablecolor my-3">
	<div class="row">
		<div class="col-md-6">
			
			<h3 class="my-2">We are waiting to you.</h3>
			<div class="row">
				<div class="col-md-2">
					<span class="fa-stack fa-3x form1">
					<i class="fas fa-map-marker-alt form1"></i>
					</span>
				</div>
				<div class="col-md-10">
					<p class="font-weight-bold my-3">Address:<br>
					Between 70-71 Street/ 40Street, Maharaungmyay Township ,Mandalay</p>
				</div>
				<div class="col-md-2">
					<span class="fa-stack fa-3x form1">
					<i class="fas fa-mobile-alt form1"></i>
					</span>
				</div>
				<div class="col-md-10">
					<p class="font-weight-bold my-3">Mobile<br>
					09458034466</p>
				</div>
				<div class="col-md-2">
					<span class="fa-stack fa-3x">
					<i class="far fa-envelope form1"></i>
					</span>
				</div>
				<div class="col-md-10">
					<p class="font-weight-bold my-3">Email<br>
					kkrentalhouse@gmail.com</p>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<h3 class="tablecolor">Send a message</h3>
			<form enctype="multipart/form-data">
				<div class="form-group">
					
				<label>Enter Your Name:</label> <input type="text" name="name"placeholder="Enter Your Name" class="form-control">
				</div>
				<div class="form-group">
					<label>Enter Your Email:</label> <input type="email" name="email"placeholder="Enter Your Email" class="form-control">
				</div>
				<div class="form-group">
					<label>Enter Your Phone:</label> <input type="number" name="number" placeholder="Enter Your Phone" class="form-control">
				</div>

				<div class="form-group">
					<label>Enter Your Comment:</label><textarea placeholder="Enter Your Comment" class="form-control comment"></textarea>
				</div>

				<div class="form-group">
					<button class="btn btn-outline-info">Send</button>
				</div>

			</form>
			


		</div>
		

	</div>
</div>
<h1 class="tablecolor text-center"> Admin</h1>
<hr class="divider1" > 


<div class="container my-5">
  <div class="row">
    <div class="col-md-6 pl-5">
      <div class="row">
        <div class="col-md-6 col-sm-6">
      <img src="{{asset('frontend/images/profile1.jpg')}}" style="border-radius: 50%; width: 200px; height: 200px;">
      </div>
       <div class="col-md-6 col-sm-6 justify-content-center pr-5  font-weight-bold tablecolor" style="line-height: 50px;">
      
      Name :Kay Khine pyone Wai<br>Address   :Mandalay <br> Phone :09-1234567
    </div>
    </div>

    </div>
    {{-- <div class="col-md-3 justify-content-center pr-5  font-weight-bold" style="line-height: 50px;">
      
      Name &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;   :Kay Khine pyone Wai<br>Address &nbsp; &nbsp; &nbsp; :Mandalay <br> Phone &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:09-1234567
    </div> --}}
    <div class="col-md-6 pl-5">
      <div class="row">
        <div class="col-md-6 col-sm-6">
      <img src="{{asset('frontend/images/profile.jpg')}}" style="border-radius: 50%; width: 200px; height: 200px;">
      </div>
   {{--  </div> --}}
    <div class="col-md-6 col-sm-6  font-weight-bold tablecolor" style="line-height: 50px">
      Name {{-- &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; --}}   :Khaing Hnin Si<br>Address {{-- &nbsp; &nbsp; &nbsp; --}} :Mandalay Region,Paleik <br> Phone {{-- &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; --}}:09-770106551
    </div>
  </div>
</div>

</div>
</div>
	
	<div class="container py-5">
		<h3 class="tablecolor text-center"> LOCATION</h3>
		<hr class="divider1" >
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7400.676841140744!2d96.09866842302844!3d21.95997094244156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30cb6d8219da2b4b%3A0xb14e6f528aa5395b!2sMyanmar%20IT%20Consulting%20Mandalay%20Office%20Staff%2FHR%2FAdmin%20Training%20School!5e0!3m2!1sen!2smm!4v1598340679443!5m2!1sen!2smm" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
		
	</div>
</div>
</div>

{{-- <a href="#uparrow" class="float-right tablecolor" style="display: inline;">

<i class="fas fa-arrow-circle-up scroll-to-top fa-3x"></i>
</a> --}}


	
	

	





@endsection