@extends('../frontendtemplate')



@include ('frontend.nav')

@include ('frontend.navUser')




<div class="carousel slide " data-interval="2000" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active flu">
     <!--    <h1 class="text-center">Shopping With me</h1> -->
     <img src="frontend/images/main.jpg" class="img-fluid w-100 ">
   </div>
   <div class="carousel-item">
    <img src="frontend/images/main.jpg" class="d-block w-100 ">
  </div>
  <div class="carousel-item">
    <img src="frontend/images/main.jpg" class="d-block w-100 ">
  </div>
</div>

</div>
<div class="container" style="margin-top: 50px">
  <h2>တစ္ပါတ္အတြင္း အၾကည့္အမ်ားဆုံး ေရာင္းရန္အိမ္ၿခံေျမမ်ား</h2>
<div class="row">
         {{--  @foreach($properties as $property)
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100 cardan">
              <img class="card-img-top img-fluid d-block w-100" src="{{asset($property->mainphoto)}}" alt="" style="width: 300px; height: 300px">
              <div class="card-body text-center">
                <h4 class="card-title">
                  <h2 class="home1"> {{$property->name}}</h2>
                </h4>
                <h5 class="home1">တစ်လချင်း {{$property->pricepermonth}} MMK</h5>
                 <h5 class="home1">ပိုင်ရှင်အမည် :{{$property->owner_name}}</h5>
                  <h5 class="home1">ဆက်သွ ရန် ဖုန်းနံပါတ် {{$property->phoneno}}</h5>
                <p class="card-text home1">{{$property->description}}</p>
                <a href="{{route('rentals.show',$property->id)}}" class="btn btn-light text-center"><i class="fas fa-info-circle"></i></a>
              </div>

              
            </div>
          </div>
          @endforeach --}}


         

          @foreach($properties as $property)

          {{--  <div class="col-md-3">
            
          </div> --}}
          <div class="col-md-6 my-5">
            <div class="card cardan">
              <div class="card-header bg-dark home1">
                {{$property->name}}
              </div>
              <div class="row no-gutters ">
                <div class="col-md-6">
                  <div class="card-img">
                    <img src="{{asset($property->mainphoto)}}" class="card-img-top border-bottom img-fluid w-100 h-100">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card-body text-justify">
                    <h5 class="card-title">{{$property->name}}</h5>
                    <p class="card-text">တစ်လချင်း {{$property->pricepermonth}} ကျပ်</p>
                     <p class="card-text">ပိုင်ရှင်အမည် :{{$property->owner_name}}</p>
                     <p class="card-text">တည်နေရာ :{{$property->address}}</p>
                     <p class="card-text"><i class="fa fa-bed" aria-hidden="true"></i>  {{$property->bedroom_qty}} Room  <i class="fa fa-bath" aria-hidden="true"></i> {{$property->bathroom_qty}} Room</p>
                    
                     <hr>
                    <a href="{{route('rentals.show',$property->id)}}" class="btn btn-light text-center"><i class="fas fa-info-circle"></i>   အသေးစိတ်ကြည့်ရှုရန်</a>

                  </div>
                </div>


              </div>

            </div>


          </div>
           @endforeach
         

        </div>

        </div>


@section('content')

  




@endsection