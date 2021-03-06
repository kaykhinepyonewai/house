@extends('backendtemplate')
@section('content')



<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	{{-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Items</h1>
		<a href="itemcreate.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Add Items</a>
	</div> --}}



	<!-- Item List Table -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Owner Post List(Approve)</h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>#</th>
							<th>Owner Name</th>
							<th>Phone No</th>
						<!-- 	<th>Discount</th> -->
							<th>Post Name</th>
							<th>Photo</th>
							<th>Address</th>
							<th>Action</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>#</th>
							<th>Owner Name</th>
							<th>Phone No</th>
						<!-- 	<th>Discount</th> -->
							<th>Post Name</th>
							<th>Photo</th>
							<th>Address</th>
							<th>Action</th>
						</tr>
					</tfoot>
					<tbody id="tbody">
						@php $i=1; @endphp
						@foreach($properties as $property)
						<tr>
							<td>{{$i++}}</td>
							<td>{{$property->owner_name}}

							</td>
							<td>{{$property->phoneno}}

							</td>
							<td>{{$property->name}}

							</td>

							<td>
								<img src="{{asset($property->mainphoto)}}" class="img-fluid " style="width: 300px; height: 200px">

							</td>

							<td>{{$property->address}}

							</td>


							
							<td>



								<a href="{{route('confirmdetail',$property->id)}}" class="btn btn-warning btn-sm">Detail</a>

								{{-- <form method="POST" action="{{route('categories.destroy',$category->id)}}" onsubmit="return confirm('Are you sure delete?')" class="d-inline-block"> --}}
								{{-- 	@csrf
									@method('DELETE')
									<input type="submit" name="btnsubmit" value="Delete" class="btn btn-danger">
								</form> --}}

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