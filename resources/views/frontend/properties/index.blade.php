@extends('frontendtemplate')



@include ('frontend.nav')

@section('content')
<div class="" style="margin-top: 100px">

	<h2 class="d-inline-block badge-dark pl-5 ">Property List</h2>
	<a href="{{route('properties.create')}}" class="btn btn-outline-info float-right ">
	<i class="fas fa-plus fa-sm text-white-50"></i>Add Properties</a>

	

<!-- Begin Page Content -->
<div class="container-fluid">

	

 <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-dark accordion" >

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-1">K <sup>2</sup>&nbsp;Rental House</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="{{route('ownerwaitings.index')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Waiting List</span></a>
      </li>
      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link" href="{{route('properties.index')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Approve List</span></a>
      </li>
       <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Rental List</span></a>
      </li>

   

      
      
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->


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
								<img src="{{asset($property->mainphoto)}}" class="h-25 w-50">

							</td>

							<td>{{$property->address}}

							</td>


							
							<td>

								{{-- <a href="" class="btn btn-warning btn-sm">Confirm</a> --}}
								<form method="POST" action="#" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
								@csrf
								@method('PUT')
								<input type="hidden" name="status" value="approve">
								<input type="submit" name="btnsubmit" value="Confirm" class="btn btn-outline-success">
							</form>



								<a href="{{route('properties.edit',$property->id)}}" class="btn btn-outline-info">Edit</a>

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

				{{-- 
					</div>

				</div>

			</div>
		</div>

	</div>
</div>
 --}}










