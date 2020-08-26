@extends('backendtemplate')
@section('content')


{{-- <h2>Waiting Detail</h2> --}}

<div class="container-fluid">

	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Approve List Detail</h1>
		<a href="{{route('confirm')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-backward fa-sm text-white-50"></i> Go Back</a>
	</div>
		
		<div class="row">
			<div class="col-md-5 row">
				<div class="col-md-12">
				<img src="{{asset($propertry->mainphoto)}}" class="w-100 h-100">
				</div>
				<div class="col-md-6">
				<img src="{{asset($propertry->inphoto)}}" class="w-100 h-100">
				</div>
				<div class="col-md-6">
				<img src="{{asset($propertry->roomphoto)}}" class="w-100 h-100">
				</div>
			</div>
			<div class="col-md-7">
				<hr>
				<div class="row">
					<div class="col-md-4">Property Title</div>
					<div class="col-md-4">{{$propertry->name}}</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-4">Owner Name</div>
					<div class="col-md-4">{{$propertry->owner_name}}</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-4">Price Pr Month</div>
					<div class="col-md-4">{{$propertry->pricepermonth}} MMK</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-4">Category Name</div>
					<div class="col-md-4">{{$propertry->category->name}}</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-4">Township</div>
					<div class="col-md-4">{{$propertry->township->name}}</div>
				</div>

				<hr>
				<div class="row">
					<div class="col-md-4">Total Number of Bed Room</div>
					<div class="col-md-4">{{$propertry->bedroom_qty}} Room</div>
				</div>

				<hr>
				<div class="row">
					<div class="col-md-4">Total Number of Bath Room</div>
					<div class="col-md-4">{{$propertry->bathroom_qty}} Room</div>
				</div>

				<hr>
				<div class="row">
					<div class="col-md-4">Volumn</div>
					<div class="col-md-4">{{$propertry->volume}} Sqlt</div>
				</div>

				<hr>
				<div class="row">
					<div class="col-md-4">Contact No</div>
					<div class="col-md-4">{{$propertry->phoneno}}</div>
				</div>

				<hr>
				<div class="row">
					<div class="col-md-4">Full Address</div>
					<div class="col-md-4">{{$propertry->address}}</div>
				</div>

				<hr>
				
			</div>
		</div>
	</div>

@endsection