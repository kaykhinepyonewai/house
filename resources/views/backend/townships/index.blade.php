@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2 class="d-inline-block">Township List</h2>
	
	<a href="{{route('townships.create')}}" class="btn btn-info float-right mr-4 ">
		<i class="fas fa-plus fa-sm text-white-50"></i>Add Townships</a>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>No</th>
							<th>Name</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						@php $i=1; @endphp
						@foreach($townships as $township)
						<tr>
							<td>{{$i++}}</td>
							<td>{{$township->name}}
								
							</td>
							
							
							<td>
								
								<a href="{{route('townships.edit',$township->id)}}" class="btn btn-warning">Edit</a>
								<form method="POST" action="{{route('townships.destroy',$township->id)}}" onsubmit="return confirm('Are you sure delete?')" class="d-inline-block">
									@csrf
									@method('DELETE')
									<input type="submit" name="btnsubmit" value="Delete" class="btn btn-danger">
								</form>
								
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
	@endsection