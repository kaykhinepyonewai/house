@extends('backendtemplate')
@section('content')
	<div class="container-fluid">
		<h2>Category Edit(Form / Old Value)</h2>
		{{-- @if ($errors->any())
	    <div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif --}}
	<form method="POST" action="{{route('categories.update',$category->id)}}" enctype="multipart/form-data">
		@csrf
		@method('PUT')
		<div class="form-group">
			<label>Name</label>
			<input type="text" name="name" class="form-control" value="{{$category->name}}">
			 @error('name')
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @enderror
		</div>
		<div class="form-group">
			<label>Photo</label>
			<input type="file" name="photo" class="form-control-file">
			<img src="{{asset($category->photo)}}" class="img-fluid py-3" style="width: 200px">
			<input type="hidden" name="oldphoto" value="{{$category->photo}}">
			@error('photo')
                    <span class="text-danger">{{ $errors->first('photo') }}</span>
                @enderror
		</div>


		
		<input type="submit" value="+ Update" class="btn btn-outline-primary" name="submit">
	</form>
	</div>
@endsection