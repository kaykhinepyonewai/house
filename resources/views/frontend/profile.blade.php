@extends('frontendtemplate')
@include ('frontend.nav')
@include ('frontend.navUser')
@section('content')


<!-- Item List Table -->
	<div class="card shadow mb-4" style="margin-top: 100px">
		<div class="tablecolor">
			<h2 class="home1 text-center " style="font-size: 40px;"> Profile Page </h2>
			<table class="table table-bordered text-center">
				<thead>
					<tr>
			<th class=""> Name:</th>
			<th>{{Auth::user()->name}}</th>
			</tr>
			<tr>
			<th> Email:</th>
			<th>{{Auth::user()->email}}</th>
			</tr>
			</thead>
			</table>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>#</th>
							<th>Rental No:</th>
							<th>Phone No:</th>
							<th>PlanDate:</th>
							
						<!-- 	<th>Discount</th> -->
							<th>Rental Period:</th>
							<th>Total Price:</th>
							
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>#</th>
							<th>Rental No:</th>
							<th>Phone No:</th>
							<th>PlanDate:</th>
							
						<!-- 	<th>Discount</th> -->
							<th>Rental Period:</th>
							<th>Total Price:</th>
							
						
						</tr>
					</tfoot>
					<tbody id="tbody">
						@php $i=1; @endphp
						
							
							
						

							@foreach($rentals as $rental)
							<tr>
								<td>{{$i++}}</td>
								<td>{{$rental->rentalno}}</td>
								<td>{{$rental->phoneno}}</td>
							
								<td>{{$rental->plandate}}</td>
							
								<td>{{$rental->rentalperiod}}</td>
							
								<td>{{$rental->totalprice}}</td>
							</tr>
							
							
							@endforeach	
								

					</tbody>
				</table>
			</div>
		</div>
	</div>


@endsection

