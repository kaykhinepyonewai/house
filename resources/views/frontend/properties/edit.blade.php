@extends('frontendtemplate')



@include ('frontend.nav')




@section('content')

	<div class="container">
	<div class="" style="margin-top: 100px">
		<div class="row">
			<div class="col-md-4" >
				
			</div>
			<div class="col-md-8">
		<form method="POST" action="{{route('properties.update',$property->id)}}" enctype="multipart/form-data">
			@csrf
			@method('PUT')

			<div class="form-group row my-5 ">

				<label for="code" class="col-md-4 home1 ">CodeNo:</label>
				<input type="text" id="code"  name="codeno" class="form-control col-md-8 {{ $errors->first('codeno') ? 'border-danger' : '' }}" value="{{$property->codeno}}">

				@error('codeno')

				<div class="alert alert-danger offset-2 col-md-9 form-control">{{ $message }}</div>
				@enderror
			</div>

			<div class="form-group row">

				<label for="name" class="col-md-4 home1 ">Name:</label>
				<input type="text" id="name"  name="name" class="form-control col-md-8 {{ $errors->first('name') ? 'border-danger' : '' }}" value="{{$property->name}}">
				@error('name')

				<div class="alert alert-danger offset-2 col-md-9 form-control">{{ $message }}</div>
				@enderror
			</div>

			<div class="form-group row">
				<label for="price" class="col-md-4 home1 ">Price Per Month:</label>
				<input type="text" id="price"  name="price" class="form-control col-md-8 {{ $errors->first('price') ? 'border-danger' : ''}}" value="{{$property->pricepermonth}}">
				@error('discount')

				<div class="alert alert-danger offset-2 col-md-9 form-control">{{ $message }}</div>
				@enderror
			</div>

			{{-- <div class="form-group row">
				<label for="discount" class="col-md-4 home1 ">Price:</label>
				<input type="number" id="price"  name="price" class="form-control col-md-8 {{ $errors->first('price') ? 'border-danger' : ''}}">
				@error('price')

				<div class="alert alert-danger offset-2 col-md-9 form-control">{{ $message }}</div>
				@enderror
			</div> --}}

			<div class="form-group row">
				<label for="image" class="col-md-4 home1 ">Main Photo:</label>
				<input type="file" name="p1" class="form-control-file col-md-8 home1 {{ $errors->first('photo') ? 'border border-danger' : ''}}" multiple>
				<div class="col-md-4"></div>
				<img src="{{asset($property->mainphoto)}}"  style="width: 300px; height: 200px" class="py-4">
				<input type="hidden" name="oldp1" value="{{$property->mainphoto}}">
				@error('photo')

				<div class="alert alert-danger offset-2 col-md-9 form-control">{{ $message }}</div>
				@enderror
			</div>


			<div class="form-group row">
				<label for="image" class="col-md-4 home1 ">Inside Photo:</label>
				<input type="file" name="p2" class="form-control-file col-md-8 home1 {{ $errors->first('photo') ? 'border border-danger' : ''}}" multiple>
				<div class="col-md-4"></div>
				<img src="{{asset($property->inphoto)}}" style="width: 300px; height: 200px" class="py-4">
				<input type="hidden" name="oldp2" value="{{$property->inphoto}}">
				@error('photo')

				<div class="alert alert-danger offset-2 col-md-9 form-control">{{ $message }}</div>
				@enderror
			</div>


			<div class="form-group row">
				<label for="image" class="col-md-4 home1 ">Room Photo:</label>
				<input type="file" name="p3" class="form-control-file col-md-8 home1 {{ $errors->first('photo') ? 'border border-danger' : ''}}" multiple>
				<div class="col-md-4"></div>
				<img src="{{asset($property->roomphoto)}}" style="width: 300px; height: 200px" class="py-4">
				<input type="hidden" name="oldp3" value="{{$property->roomphoto}}">
				@error('photo')

				<div class="alert alert-danger offset-2 col-md-9 form-control">{{ $message }}</div>
				@enderror
			</div>

			<div class="form-group row">
				<label for="category" class="col-md-4 home1 ">Category Name:</label>
				<select name="category" id="category" class="form-control form-check col-md-8">
					<optgroup label="Choose Category">
						@foreach($categories as $category)
						<option value="{{$category->id}}" 
							@if($category->id==$property->category_id)
							{{'selected'}}
							@endif
							>{{$category->name}}</option>
							@endforeach
						</optgroup>
				</select>
			</div>

			<div class="form-group row">
				<label for="township" class="col-md-4 home1 ">TownShip :</label>
				<select name="township" id="township" class="form-control form-check col-md-8 {{ $errors->first('township') ? ' border-danger' : ''}}">
					<optgroup label="Choose Township">
						@foreach($townships as $township)
						<option value="{{$township->id}}" 
							@if($township->id==$property->township_id)
							{{'selected'}}
							@endif
							>{{$township->name}}</option>
							@endforeach
					</optgroup>

				</select>

				@error('township')

				<div class="alert alert-danger offset-2 col-md-9 form-control">{{ $message }}</div>
				@enderror
			</div>



			<div class="form-group row">
				<label for="bedroom" class="col-md-4 home1 ">Bed Room :</label>

				<input type="text" id="bedroom"  name="bedroom" class="form-control col-md-8 {{ $errors->first('name') ? 'border-danger' : '' }}" value="{{$property->bedroom_qty}} ">
				


				@error('bedroom')

				<div class="alert alert-danger offset-2 col-md-9 form-control">{{ $message }}</div>
				@enderror
			</div>



			<div class="form-group row">
				<label for="bathroom" class="col-md-4 home1 ">Bath Room :</label>
				<input type="text" id="bathroom"  name="bathroom" class="form-control col-md-8 {{ $errors->first('name') ? 'border-danger' : '' }}" value="{{$property->bathroom_qty}} ">
				@error('bathroom')

				<div class="alert alert-danger offset-2 col-md-9 form-control">{{ $message }}</div>
				@enderror
			</div>


			<div class="form-group row">
				<label for="volume" class="col-md-4 home1 ">Volumn(Sqlt):</label>
				<input type="text" id="volume"  name="volume" class="form-control col-md-8 {{ $errors->first('volume') ? 'border-danger' : ''}}" value="{{$property->volume}}">
				@error('volume')

				<div class="alert alert-danger offset-2 col-md-9 form-control">{{ $message }}</div>
				@enderror
			</div>

			
			<div class="form-group row">
				<label for="phoneno" class="col-md-4 home1 ">Phone No:</label>
				<input type="text" id="phoneno"  name="phoneno" class="form-control col-md-8 {{ $errors->first('phoneno') ? 'border-danger' : ''}}" value="{{$property->phoneno}}">
				@error('phoneno')

				<div class="alert alert-danger offset-2 col-md-9 form-control">{{ $message }}</div>
				@enderror
			</div>


			<div class="form-group row">
				<label for="address" class="col-md-4 home1 ">Full Address:</label>

				<textarea name="address" class="form-control col-md-8 {{ $errors->first('address') ? 'border-danger' : ''}}" id="des">{{$property->address}}</textarea>
				
				@error('address')

				<div class="alert alert-danger offset-2 col-md-9 form-control">{{ $message }}</div>
				@enderror
			</div>



			<div class="form-group row">
				<label for="des" class="col-md-4 home1 ">Description:</label><br>
				<textarea name="description" class="form-control col-md-8" id="des">{{$property->description}}</textarea>
			</div>

			<div class="form-group row">
				<div class="col-md-4"></div>
				<button type="submit" class="btn btn-dark">Update Property</button>
			</div>

		</form>
		</div>
		</div>
	</div>
	</div>

@endsection


{{-- <h2 class="text-light">Owner Controller</h2> --}}