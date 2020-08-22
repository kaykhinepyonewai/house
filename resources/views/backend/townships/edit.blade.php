@extends('backendtemplate')
@section('content')
	<div class="container-fluid">
		<h2>Township Edit</h2>
		@if ($errors->any())
	    <div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif
	<form method="POST" action="{{route('townships.update',$township->id)}}" enctype="multipart/form-data">
		@csrf
		@method('PUT')
		<div class="form-group">
			<label>Name</label>
			<input type="text" name="name" class="form-control" value="{{$township->name}}">
		</div>
		


		
		<input type="submit" value="+ Update" class="btn btn-outline-primary" name="submit">
	</form>
	</div>
@endsection