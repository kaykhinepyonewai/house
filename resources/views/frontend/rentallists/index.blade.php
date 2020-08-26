@extends('frontendtemplate')



@include ('frontend.nav')

@section('content')


					
					
					
<div class="" style="margin-top: 100px">

	<h2 class="d-inline-block  pl-5 text-info">Property List</h2>
	{{-- <a href="{{route('properties.create')}}" class="btn  float-right mr-4 btn-info">
	<i class="fas fa-plus fa-sm text-white-50"></i>Add Properties</a> --}}
				
	
<div class="container-fluid my-3">

		<div class="row">

			<div class="col-lg-3">

		
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

								<form method="POST" action="{{route('rentals.update',$rental->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
									@csrf
									@method('PUT')
									<input type="hidden" name="status" value="approve">
									<input type="submit" name="btnsubmit" value="Confirm" class="btn btn-dark">
								</form>


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














