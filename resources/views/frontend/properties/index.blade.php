@extends('frontendtemplate')



@include ('frontend.nav')

@section('content')

<div class="parallx img-fluid d-block w-100 container-fluid pb-0" style="background-image: url('{{asset('frontend/images/list1.jpg')}}'); padding-top: 250px; height: 450px">
</div>	



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

</div>
 --}}


<div class="pb-0" style="margin-top: 50px; background-color: #fafafa">

	<h2 class="d-inline-block  pl-5 tablecolor mt-3">Property List
		
	</h2>
	<a href="{{route('properties.create')}}" class="btn mr-5 float-right mr-4 tablecolor mt-3">
	<i class="fas fa-plus fa-sm text-black-50"></i>Add Properties</a>


	<div class="container-fluid my-3">

		<div class="row">

			<div class="col-lg-3">

				{{--  <h1 class="my-4">K <sup>2</sup>&nbsp;Rental House</h1> --}}
				<div class="list-group tablecolor">
					<a href="{{route('ownerwaitings.index')}}" class="list-group-item btn tablecolor"><i class="fa fa-pause" aria-hidden="true"></i>  Waiting List</a>
					<a href="{{route('properties.index')}}" class="list-group-item btn tablecolor"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Approve List</a>
					<a href="{{route('rentallists.index')}}" class="list-group-item btn tablecolor"><i class="fa fa-list" aria-hidden="true"></i>  Rental list</a>
				</div>

			</div>
			{{-- <div class="col-md-9">
				<div class="table-responsive" >
					<table class="table table-bordered tablecolor">
						<thead>
							<tr>
								<th>#</th>
								<th>Code No</th>
								<th>Owner Name</th>
								<th>Post Name</th>
								<th>Photo</th>
								<th>Address</th>
								<th>Phone No</th>
								<th>Phone No</th>
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
								<th>Phone No</th>
								<th>Phone No</th>
								<th>Action</th>
							</tr>
						</tfoot>
						
						<tbody >
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

								<td>{{$property->phoneno}}

								</td>


								
								<td>
									<form method="POST" action="{{route('rentallists.update',$property->id)}}" onsubmit="return confirm('Are you sure?')" class="d-block">
										@csrf
										@method('PUT')
										<input type="hidden" name="status" value="close">
										<input type="submit" name="btnsubmit" value="Close" class="btn btn-outline-info btn-sm d-inline-block">
									</form>



									<a href="{{route('properties.edit',$property->id)}}" class="btn btn-outline-info ">Edit</a>
								</td>

							</tr>
							@endforeach
							

				


							
							

						</tbody>
					</table>
				</div>
			</div> --}}



			<div class="col-md-9">
				<h2 class="tablecolor text-center">Approve List</h2>
				<div class="table-responsive">
					<table class="table table-bordered  tablecolor">
					<thead>
						<tr>
							<th>#</th>
								<th>Code No</th>
								<th>Owner Name</th>
								<th>Post Name</th>
								<th>Photo</th>
								<th>Address</th>
								<th>Phone No</th>
								
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
								<th>Phone No</th>
								
								<th>Action</th>
						</tr>
					</tfoot>
						
						<tbody >
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
									<img src="{{asset($property->mainphoto)}}" class="img-fluid " style="width: 600px; height: 200px">

								</td>

								<td>{{$property->address}}

								</td>
								<td>{{$property->phoneno}}

								</td>

								


								
								<td>
									<form method="POST" action="{{route('rentallists.update',$property->id)}}" onsubmit="return confirm('Are you sure?')" class="d-block">
										@csrf
										@method('PUT')
										<input type="hidden" name="status" value="close">
										<input type="submit" name="btnsubmit" value="Close" class="btn btn-outline-info btn-sm d-inline-block">
									</form>



									<a href="{{route('properties.edit',$property->id)}}" class="btn btn-outline-info ">Edit</a>
								</td>

							</tr>
							@endforeach
							
						</tbody>
					</table>
				</div>
		</div>

	</div>

</div>
@endsection

			







