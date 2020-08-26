@extends('frontendtemplate')



@include ('frontend.nav')
@include ('frontend.navUser')

@section('content')

{{-- <div class="carousel slide " data-interval="2000" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active flu">
  
     <img src="frontend/images/bg.jpg" class="img-fluid w-100 " style="height: 500px">
   </div>
   <div class="carousel-item">
    <img src="frontend/images/main.jpg" class="d-block w-100 " style="height: 500px">
  </div>
  <div class="carousel-item">
    <img src="frontend/images/main.jpg" class="d-block w-100 " style="height: 500px">
  </div>
</div>

</div> --}}



<div class="" style="margin-top: 100px">

	<h2 class="d-inline-block  pl-5 text-info">Property List</h2>
	<a href="{{route('properties.create')}}" class="btn  float-right mr-4 btn-info">
	<i class="fas fa-plus fa-sm text-white-50"></i>Add Properties</a>
				
	
<div class="container-fluid my-3">

		<div class="row">

			<div class="col-lg-3">

				{{--  <h1 class="my-4">K <sup>2</sup>&nbsp;Rental House</h1> --}}
				<div class="list-group">
					<a href="{{route('ownerwaitings.index')}}" class="list-group-item btn text-info">Waiting List</a>
					<a href="{{route('properties.index')}}" class="list-group-item btn text-info">Approve List</a>
					<a href="{{route('rentallists.index')}}" class="list-group-item btn text-info">Rental list</a>
				</div>

			</div>
			<div class="col-md-9">
				<div class="table-responsive">
					<table class="table table-bordered  text-info">
					<thead>
						<tr>
							<th>#</th>
							<th>Code No</th>
							<th>Owner Name</th>
							<th>Post Name</th>
							<th>Photo</th>
							<th>Address</th>
							<th>Phone</th>
							<th>Action</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>#</th>
							<th>Code No</th>
							<th>Owner Name</th>
							<th>Post Name</th>
							<th>Photo</th>
							<th>Address</th>
							<th>Phone</th>
							<th>Action</th>
						</tr>
					</tfoot>
						
						<tbody>
						@php $i=1; @endphp
						@foreach($properties as $property)
						<tr>
							<td>{{$i++}}</td>
							<td>{{$property->codeno}}

							</td>
							<td>{{$property->owner_name}}

							</td>
							
							<td>{{$property->name}}

							</td>

							<td>
								<img src="{{asset($property->mainphoto)}}" class="img-fluid w-100 h-25">

							</td>

							<td>{{$property->address}}

							</td>
							<td>{{$property->phoneno}}

							</td>


							
							<td>

								




								<a href="{{route('ownerwaitings.edit',$property->id)}}" class="btn btn-outline-info">Edit</a>

								
							</td>

						</tr>
						@endforeach
						

								
								

					</tbody>
					</table>
				</div>
			</div>
		</div>

	</div>
</div>	







@endsection