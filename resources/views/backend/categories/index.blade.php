@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2 class="d-inline-block">Category List(Table)</h2>
	<a href="{{route('categories.create')}}" class="btn btn-info float-right mr-4 ">
		<i class="fas fa-plus fa-sm text-white-50"></i>Add Categories</a>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>No</th>
							<th>Name</th>
							<th>Photo</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>No</th>
							<th>Name</th>
							<th>Photo</th>
							<th>Actions</th>
						</tr>
					</tfoot>
					<tbody>
						@php $i=1; @endphp
						@foreach($categories as $category)
						<tr>
							<td>{{$i++}}</td>
							<td>{{$category->name}}
								
							</td>
							
							<td><img src="{{asset($category->photo)}}" class="img-fluid w-75" style="width: 300px; height: 200px"></td>
							<td>
								
								<a href="{{route('categories.edit',$category->id)}}" class="btn btn-warning">Edit</a>
								<form method="POST" action="{{route('categories.destroy',$category->id)}}" onsubmit="return confirm('Are you sure delete?')" class="d-inline-block">
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