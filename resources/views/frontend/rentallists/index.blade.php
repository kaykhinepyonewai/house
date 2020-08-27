@extends('frontendtemplate')



@include ('frontend.nav')

@section('content')


<div class="parallx img-fluid d-block w-100 container-fluid pb-0" style="background-image: url('{{asset('frontend/images/list6.jpg')}}'); padding-top: 250px; height: 450px">
</div>	
					
					
<div class="" style="margin-top: 50px; background-color: #fafafa">

	<h2 class="d-inline-block  pl-5 mt-5 tablecolor">Property List</h2>

	{{-- <h2 class="d-inline-block  pl-5 mt-5 tablecolor  float-left" style="margin-right: 400px">Rental List</h2> --}}
	{{-- <a href="{{route('properties.create')}}" class="btn  float-right mr-4 btn-info">
	<i class="fas fa-plus fa-sm text-white-50"></i>Add Properties</a> --}}
				
	
<div class="container-fluid my-3">

		<div class="row">

			<div class="col-lg-3">


		
				<div class="list-group tablecolor">
					<a href="{{route('ownerwaitings.index')}}" class="list-group-item btn tablecolor"><i class="fa fa-pause" aria-hidden="true"></i>  Waiting List</a>
					<a href="{{route('properties.index')}}" class="list-group-item btn tablecolor"><i class="fa fa-thumbs-up" aria-hidden="true"></i>  Approve List</a>
					<a href="{{route('rentallists.index')}}" class="list-group-item btn tablecolor"><i class="fa fa-list" aria-hidden="true"></i>  Rental list</a>
				</div>

			</div>
			<div class="col-md-9">
				<h2 class="tablecolor text-center">Rental List</h2>
				<div class="table-responsive">
					<table class="table table-bordered  tablecolor">
					<thead>
						<tr>
							<th>#</th>
							<th>Property No</th>
							<th>Customer Name</th>
							<th>Phone No</th>
							<th>Plan Date</th>
							<th>Total Price</th>
							<th>Rental Period</th>
							<th>Action</th>
						</tr>
					</thead>

					<tfoot>
						<tr>
							<th>#</th>
							<th>Property No</th>
							<th>Customer Name</th>
							
							<th>Phone No</th>
					
							<th>Plan Date</th>
							
						
							<th>Total Price</th>
							<th>Rental Period</th>
							<th>Action</th>
						</tr>
					</tfoot>
						
						<tbody >
						@php $i=1; @endphp
						@foreach($rentals as $rental)
						<tr>
							<td>{{$i++}}</td>
							
							<td>{{$rental->property->codeno}}</td>
							<td>{{$rental->customer_name}}

							</td>
							<td>{{$rental->phoneno}}

							</td>
							<td>{{$rental->plandate}}

							</td>

							
							<td>{{$rental->totalprice}}

							</td>
							<td>{{$rental->rentalperiod}} Months

							</td>

							

							
							<td>

								<form method="POST" action="{{route('rentals.update',$rental->id)}}" onsubmit="return confirm('Are you sure?')" class="d-block">
									@csrf
									@method('PUT')
									<input type="hidden" name="status" value="approve">
									<input type="submit" name="btnsubmit" value="Confirm" class="btn btn-outline-dark btn-sm d-block mt-2">
								</form>

								<form method="POST" action="{{route('rentals.update',$rental->id)}}" onsubmit="return confirm('Are you sure?')" class="d-block">
									@csrf
									@method('PUT')
									<input type="hidden" name="status" value="reject">
									<input type="submit" name="btnsubmit" value="Rejected" class="btn btn-outline-dark btn-sm d-block mt-2">
								</form>

								<a href="{{route('mail',$rental->user->email)}}" class="btn btn-outline-dark btn-sm mt-2">Send Approve Message</a>

								

								<a href="{{route('rejectmail',$rental->user->email)}}" class="btn btn-outline-dark btn-sm mt-2">Send Reject Message</a>


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














