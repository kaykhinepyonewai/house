@extends('../frontendtemplate')



@include ('frontend.nav')

<div class="container" style="margin-top: 120px">
<div class="row">
          @foreach($properties as $property)
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100 cardan">
              <img class="card-img-top img-fluid d-block w-100" src="{{asset($property->mainphoto)}}" alt="" {{-- style="width: 300px; height: 300px" --}}>
              <div class="card-body text-center">
                <h4 class="card-title">
                  <h2> {{$property->name}}</h2>
                </h4>
                <h5>တစ်လချင်း {{$property->pricepermonth}} MMK</h5>
                 <h5>ပိုင်ရှင်အမည် :{{$property->owner_name}}</h5>
                  <h5>ဆက်သွ ရန် ဖုန်းနံပါတ် {{$property->phoneno}}</h5>
                <p class="card-text">{{$property->description}}</p>
                <a href="{{route('rentals.show',$property->id)}}" class="btn btn-outline-light text-center"><i class="fas fa-info-circle"></i></a>
              </div>

              
            </div>
          </div>
          @endforeach
         

        </div>

        </div>


@section('content')

  




@endsection