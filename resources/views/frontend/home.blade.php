@extends('../frontendtemplate')



@include ('frontend.nav')

@include ('frontend.navUser')


@section('content')

<div class="carousel slide  " data-interval="2000" data-ride="carousel" style="padding-top: 70px">
  <div class="carousel-inner">
    <div class="carousel-item active flu flu1">
  
     
      <img src="frontend/images/mainphoto2.jpg" class="d-block w-100 " style="height: 500px">
   </div>
   <div class="carousel-item">
    <img src="frontend/images/mainphoto1.jpg" class="d-block w-100 " style="height: 500px">
  </div>
  <div class="carousel-item">
   <img src="frontend/images/hh1.jpg" class="img-fluid w-100 " style="height: 500px">
  </div>
</div>

</div>

{{-- <div class="container-fluid">
  <div class="img-area">
    <div class="img-slide">
      <div class="single-img">
         <img src="frontend/images/main.jpg" class="img-fluid w-100 ">
         <h2>Yummy</h2>
      </div>
      <div class="single-img">
         <img src="frontend/images/bg3.jpg" class="img-fluid w-100 ">
         <h2>Yummy</h2>
      </div>
      <div class="single-img">
         <img src="frontend/images/bg2.jpg" class="img-fluid w-100 ">
         <h2>Yummy</h2>
      </div>
    </div>
  </div>
</div> --}}



<div class="container-fluid" style="margin-top: 5px; background-color: #fafafa">

<div class="feature_box">
<div class="row">
{{--   ::before --}}
  <div class="col-md-3 col-sm-6 feature_box_container" style="color: #08346e">
    <div class="feature_inner_box first">
      <div class="circle"><a href=""><img src="https://www.inkthemesdemo.com/wptheme/lease-space-wordpress-theme/wp-content/uploads/sites/494/2016/07/feature1.jpg" alt="Feature image" /></a></div>
      <h5 class="feature_title tablecolor" {{-- style="color: #08346e" --}}>Studio Apartment</h5>
      <p class="">The smallest self-contained apartments are referred to as studio, efficiency or bachelor apartments is separate from the rest of the apartment.</p>
    </div>
    <div class="clear"></div>
  </div>


  <div class="col-md-3 col-sm-6 feature_box_container" style="color: #08346e">
    <div class="feature_inner_box second">
      <div class="circle"><a href=""><img src="https://www.inkthemesdemo.com/wptheme/lease-space-wordpress-theme/wp-content/uploads/sites/494/2016/07/feature2.jpg" alt="Feature image" /></a></div>
      <h4 class="feature_title tablecolor">Garden apartment</h4>
      <p class="">In some locales, a garden apartment complex consists of low-rise apartment buildings built with landscaped grounds surrounding them.</p>
    </div>
  </div>



  <div class="col-md-3 col-sm-6 feature_box_container" style="color: #08346e">
    <div class="feature_inner_box third">
      <div class="circle"><a href=""><img src="https://www.inkthemesdemo.com/wptheme/lease-space-wordpress-theme/wp-content/uploads/sites/494/2016/07/feature5.jpg" alt="Feature image" /></a></div>
      <h4 class="feature_title tablecolor">Communal Apartment</h4>
      <p class="">A typical arrangement is a cluster of five or so room-apartments with separate front doors, occupying a floor in a pre-Revolutionary mansion.</p>
    </div>
  </div>
  <div class="col-md-3 col-sm-6 feature_box_container" style="color: #08346e">
    <div class="feature_inner_box fourth">
      <div class="circle"><a href=""><img src="https://www.inkthemesdemo.com/wptheme/lease-space-wordpress-theme/wp-content/uploads/sites/494/2016/07/feature3-1.jpg" alt="Feature image" /></a></div>
      <h4 class="feature_title tablecolor">Two Storey Flat</h4>
      <p class="">An existing small house or cottage that has been lifted up to accommodate the creation of a new basement floor housing a separate apartment.</p>
    </div>
  </div>
{{-- ::after --}}
</div>
</div>

  <h2 class="home1 text-center " style="color: #9dbae0; font-weight: bold;">တစ်ပတ်အတွင်း အကြည့်အများဆုံး ငှားရန် အိမ်ခြံမြေများ</h2>
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


          {{--  <div class="col-md-3">
            
          </div> --}}
          {{-- <div class="col-md-8  my-5">
            <div class="card cardan">
              <div class="card-header  home2" style="background-color: #6c7580;color: white">
                {{$property->name}}
              </div>
              <div class="row no-gutters ">
                <div class="col-md-6  ">
                  <div class="card-img">
                    <img src="{{asset($property->mainphoto)}}" class="card-img-top border-bottom img-fluid" style="width:400px ; height:300px">
                  </div>
                </div>
                <div class="col-md-6  " style="background-color: #cbd1d6">
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


           <div class="col-md-4  my-5">
           <div class="row">
           <div class="col-md-12">
                <h4 class="text-center" style="color:black">အတွင်းခန်း ပုံများ </h4>
               <img src="{{asset($property->inphoto)}}" class="card-img-top border-bottom img-fluid cardan" style="width:400px ; height:150px">
            </div>
              <div class="col-md-12 pt-4">
             
               <img src="{{asset($property->roomphoto)}}" class="card-img-top border-bottom img-fluid cardan" style="width:400px ; height:150px">
            </div>
            </div>
            </div> --}}



  @foreach($properties as $property)

         <div class="col-md-8 col-sm-8 my-5">
            <div class="card cardan w-100">
              <div class="card-header  home2" style="background-color: #6c7580;color: white">
                {{$property->name}}
              </div>
              <div class="row no-gutters ">
                <div class="col-md-6">
                  <div class="card-img" >
                  <img src="{{asset($property->mainphoto)}}" class="card-img-top border-bottom img-fluid" style="width:420px ; height:320px">

                  </div>
                </div>
                <div class="col-md-6 " style="background-color: #cbd1d6">
                  <div class="card-body text-justify" >
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

           <div class="col-md-4 col-sm-4 my-5">
           <div class="row">
           <div class="col-md-12 cardan">
                <h4 class="text-center" style="color:black">အတွင်းခန်း ပုံများ </h4>
               <img src="{{asset($property->inphoto)}}" class="card-img-top border-bottom img-fluid " style="width:400px ; height:150px">
            </div>
              <div class="col-md-12 cardan">
             
              <img src="{{asset($property->roomphoto)}}" class="card-img-top border-bottom img-fluid  pt-4" style="width:400px ; height:150px">
            </div>
            </div>
            </div>
          
         
           @endforeach
          </div>

        </div>

       {{--  </div> --}}



  




@endsection




{{-- @section('script')
 <script type="text/javascript">
    $(document).ready(function()
    {
      $('.img-slide').slick({
        autoplay: true,
        autoplaySpeed: 7000,
        arrows: false,
        dots: true,
        fade: true,
        speed: 2000,
        infinite: true,
        cssEase: 'ease-in-out',
        loop: true
      });

    })
  </script>


  @endsection
 --}}