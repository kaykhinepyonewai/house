@extends('backendtemplate')
@section('content')

	<div class="container-fluid">
		<h2 class="d-inline-block">Rental List</h2>
		
		<table class="table table-bordered">
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

@endsection