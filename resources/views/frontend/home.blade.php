@extends('../frontendtemplate')



@include ('frontend.nav')

<div class="container" style="margin-top: 120px">
<div class="row">
          @foreach($properties as $property)
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top img-fluid d-block" src="{{asset($property->mainphoto)}}" alt="" style="width: 300px; height: 300px"></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">{{$property->name}}</a>
                </h4>
                <h5>{{$property->pricepermonth}}</h5>
                <p class="card-text">{{$property->description}}</p>
              </div>
              
            </div>
          </div>
          @endforeach
         

        </div>

        </div>


@section('content')

  




@endsection