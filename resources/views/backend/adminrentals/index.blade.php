@extends('backendtemplate')
@section('content')

	

		<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h3 class="m-0 font-weight-bold text-primary">Rental List</h3>
		</div>

<div class="card-body">
			<div class="table-responsive">
		<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
			<thead>
				<tr>
					<th>No</th>
					<th>Rental No</th>
					<th>Rental Name</th>
					<th>Owner Name</th>
					<th>Rental Ph</th>
					<th>Owner Ph</th>
					
					<th>Actions</th>
				</tr>
			</thead>
			<tfoot>
				<tr>
					<th>No</th>
					<th>Rental No</th>
					<th>Rental Name</th>
					<th>Owner Name</th>
					<th>Rental Ph</th>
					<th>Owner Ph</th>
					
					<th>Actions</th>
				</tr>
			</tfoot>
			<tbody>
				@php $i=1; @endphp
				@foreach($rentals as $rental)
				<tr>
					<td>{{$i++}}</td>
					<td>{{$rental->property->codeno}}</td>
					<td>{{$rental->customer_name}}</td>
					<td>{{$rental->property->owner_name}}</td>
					<td>{{$rental->phoneno}}</td>
					<td>{{$rental->property->phoneno}}</td>
					<td>
					<a href="{{route('adminrentals.show',$rental->id)}}">
						<span class=" btn btn-outline-info">Detail</span>
						
					</a>

					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
	</div>

@endsection