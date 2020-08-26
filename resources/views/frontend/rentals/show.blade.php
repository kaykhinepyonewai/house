@extends('../frontendtemplate')



@include ('frontend.nav')
@include ('frontend.navUser')
@section('content')

{{-- <div class="carousel slide " data-interval="2000" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active flu">

				<img src="{{asset('frontend/images/bg.jpg')}}" class="img-fluid w-100 " style="height: 500px">
			</div>
			<div class="carousel-item">
				<img src="{{asset('frontend/images/main.jpg')}}" class="d-block w-100 " style="height: 500px">
			</div>
			<div class="carousel-item">
				<img src="{{asset('frontend/images/main.jpg')}}" class="d-block w-100 " style="height: 500px">
			</div>
		</div>

	</div> --}}


	<div class="container my-5">

	<{{-- div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Rental List Detail</h1>
		<a href="{{route('waiting')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-backward fa-sm text-white-50"></i> Go Back</a>
	</div> --}}

	<h1 class="h3 mb-0 text-gray-800 text-center pt-5">Rental List Detail</h1>


	

		
		<div class="row py-5">
			<div class="col-md-5 row">
				<div class="col-md-12">
				<img src="{{asset($property->mainphoto)}}" class="w-100 h-100 img-fluid" >
				</div>
				<div class="col-md-6">
				<img src="{{asset($property->inphoto)}}" class=" h-100 img-fluid w-100" style="width: 300px">
				</div>
				<div class="col-md-6">
				<img src="{{asset($property->roomphoto)}}" class=" h-100 img-fluid w-100" style="width: 300px">
				</div>
			</div>
			<div class="col-md-7">
				<hr class="home1">
				<div class="row">
					<div class="col-md-4 home2">Property Title</div>
					<div class="col-md-4 home2">{{$property->name}}</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-4 home2">Owner Name</div>
					<div class="col-md-4 home2">{{$property->owner_name}}</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-4 home2">Price Pr Month</div>
					<div class="col-md-4 home2 price">{{$property->pricepermonth}} MMK</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-4 home2">Category Name</div>
					<div class="col-md-4 home2">{{$property->category->name}}</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-4 home2">Township</div>
					<div class="col-md-4 home2">{{$property->township->name}}</div>
				</div>

				<hr>
				<div class="row">
					<div class="col-md-4 home2">Total Number of Bed Room</div>
					<div class="col-md-4 home2">{{$property->bedroom_qty}} Room</div>
				</div>

				<hr>
				<div class="row">
					<div class="col-md-4 home2">Total Number of Bath Room</div>
					<div class="col-md-4 home2">{{$property->bathroom_qty}} Room</div>
				</div>

				<hr>
				<div class="row">
					<div class="col-md-4 home2">Volumn</div>
					<div class="col-md-4 home2">{{$property->volume}} Sqlt</div>
				</div>

				<hr>
				<div class="row">
					<div class="col-md-4 home2">Contact No</div>
					<div class="col-md-4 home2">{{$property->phoneno}}</div>
				</div>

				<hr>
				<div class="row">
					<div class="col-md-4 home2">Full Address</div>
					<div class="col-md-4 home2">{{$property->address}}</div>
				</div>

				<hr>
				
				
			</div>

		</div>

		<div class="text-center my-5">
		<form method="POST" action="{{route('rentals.store')}}" enctype="multipart/form-data">
					@csrf
					{{-- @method('PUT') --}}

					<input type="hidden" name="propertyid" value="{{$property->id}}">
					<input type="hidden" name="ownerid" value="{{$property->user_id}}">
					<div class="form-group row">
						<label for="phoneno" class="col-md-4 home2 ">Phone No:</label>
						<input type="text" id="phoneno"  name="phoneno" class="form-control col-md-8 {{ $errors->first('phoneno') ? 'border-danger' : ''}}">
						@error('phoneno')
						<div class="col-md-4"></div>
						<div class="alert alert-danger offset-4 col-md-8 form-control">{{ $message }}</div>
						@enderror
					</div>


					

					<div class="form-group row">

						<label for="planedate" class="col-md-4 home2 ">Plan Date :</label>
						<input type="date" id="planedate"  name="planedate" class="form-control col-md-8 {{ $errors->first('name') ? 'border-danger' : '' }}">
						@error('planedate')

						<div class="alert alert-danger offset-4 col-md-9 form-control">{{ $message }}</div>
						@enderror
					</div>

					<div class="form-group row">
						<label for="bedroom" class="col-md-4 home2 ">Rental Period :</label>
						<select name="months" class="click" id="bedroom" class="form-control form-check col-md-8 {{ $errors->first('bedroom') ? ' border-danger' : ''}}">
							<optgroup label="Choose Rental Month">
								
								<option value="3">3 Months</option>
								<option value="6">6 Months</option>
								<option value="12">12 Months(1 year)</option>
								<option value="18">18 Months(1 Year & 6 Months)</option>
								<option value="24">24 Months(2 Year)</option>
								<option value="30">30 Months(2 Years & 6 Months)</option>
								<option value="36">36 Months(3 Years)</option>
								
							</optgroup>

						</select>

						@error('bedroom')

						<div class="alert alert-danger offset-2 col-md-9 form-control">{{ $message }}</div>
						@enderror
					</div>

					<div class="form-group row">
						<label for="total" class="col-md-4 home2 ">Total Price:</label>
						<input type="text" id="total"  name="total"   class="form-control total  col-md-8 {{ $errors->first('price') ? 'border-danger' : ''}}" readonly="true">
						@error('total')

						<div class="alert alert-danger offset-4 col-md-9 form-control">{{ $message }}</div>
						@enderror
					</div>

				


					 @role('customer')
					<div class="form-group row">
						<div class="col-md-4"></div>
						<a href="{{route('homepage')}}" class="btn btn-dark mr-5">Continous To Rental</a>
						<button type="submit" class="btn btn-dark">Rental Properties</button>
					</div>

					@else
					<div class="form-group row">
						<div class="col-md-4"></div>
						<a href="{{route('homepage')}}" class="btn btn-dark mr-5">Continous To Rental</a>
						<a href="{{route('login')}}" type="submit" class="btn btn-dark">Rental Now To Login</a>
					</div>
					{{-- <a href="{{route('login')}}" class="btn btn-outline-light text-dark home py-5 buy_now">Rental Now To Login</a> --}}
					@endrole



				</form>
			</div>
	</div>




@endsection

@section('script')
<script type="text/javascript">
	$(document).ready(function()
{


	$(".click").change(function()
	{
		var month = $(this).val();
		var price = $(".price").text();
		var total1 = parseInt(month) * parseInt(price);

		$(".total").val(total1);

		console.log(month);
		console.log(price);
		console.log(total1);


	})

})
</script>

@endsection


