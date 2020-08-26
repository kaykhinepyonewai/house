@extends('../frontendtemplate')



@include ('frontend.nav')

@include ('frontend.navUser')

@section('content')




<div class="carousel slide " data-interval="2000" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active flu">
  
     <img src="frontend/images/bg.jpg" class="img-fluid w-100 " style="height: 500px">
   </div>
   <div class="carousel-item">
    <img src="frontend/images/main.jpg" class="d-block w-100 " style="height: 500px">
  </div>
  <div class="carousel-item">
    <img src="frontend/images/main.jpg" class="d-block w-100 " style="height: 500px">
  </div>
</div>

</div>

<div class="container-fluid" style="margin-top: 50px">
  <h2 class="home1 text-center py-5">တစ်ပတ်အတွင်း အကြည့်အများဆုံး ငှားရန် အိမ်ခြံမြေများ</h2>

   @include ('frontend.sidebar')


<div class="container img-fluid" {{-- style="background-image: url(frontend/images/bg3.jpg); background-repeat: no-repeat; background-attachment: fixed; opacity: 1" --}}>
<div class="row">
{{--  <div class="col-md-3"> --}}
   
{{--  </div> --}}

  
 {{--  <h2 class="py-5">Item Page Filter By Category Name </h2> --}}

<div class="col-md-12">
  <div id="myItems" class="row">




  

</div>
</div>

</div>
</div>

 </div>

@endsection


@section('script')
  {{-- <script type="text/javascript" src="{{asset('frontend/js/script.js')}}"></script> --}}


    {{-- Ajax --}}


    <script type="text/javascript">
      $(document).ready(function()
      {


        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });


        showItems(0);

        function showItems(id)
        {
          $.post("{{route('getitems')}}",{sid:id},function(res)
        {           
            console.log(res);
            var html = '';
            $.each(res,function(i,v)
            {
                var url= 'rentals/'+v.id;
                html +=`

             


         <div class="col-md-8 col-sm-8 my-5">
            <div class="card cardan w-100">
              <div class="card-header home2" style="background-color: #7e8b96;color: white">
                ${v.name}
              </div>
              <div class="row no-gutters ">
                <div class="col-md-6">
                  <div class="card-img" >
                  <img src="${v.mainphoto}" class="card-img-top border-bottom img-fluid top" style="width:400px ; height:300px">

                  </div>
                </div>
                <div class="col-md-6 " style="background-color: #cbd1d6">
                  <div class="card-body text-justify" >
                    <h5 class="card-title">${v.name}</h5>
                    <p class="card-text">တစ်လချင်း ${v.pricepermonth} ကျပ်</p>
                     <p class="card-text">ပိုင်ရှင်အမည် :${v.owner_name}</p>
                     <p class="card-text">တည်နေရာ :${v.address}</p>
                     <p class="card-text"><i class="fa fa-bed" aria-hidden="true"></i>  ${v.bedroom_qty} Room  <i class="fa fa-bath" aria-hidden="true"></i> ${v.bathroom_qty} Room</p>
                    
                     <hr>
                    <a href="${url}" class="btn btn-light text-center"><i class="fas fa-info-circle"></i>   အသေးစိတ်ကြည့်ရှုရန်</a>

                  </div>
                </div>


              </div>


            </div>
          </div>

           <div class="col-md-4 col-sm-4 my-5">
           <div class="row">
           <div class="col-md-12 cardan">
                <h4 class="text-center" style="color:black">အတွင်းခန်း ပုံများ </h4>
               <img src="${v.inphoto}" class="card-img-top border-bottom img-fluid " style="width:400px ; height:150px">
            </div>
              <div class="col-md-12 cardan">
              <h4 class="text-center" style="color:black">အိပ်ခန်း ပုံများ</h4>
               <img src="${v.roomphoto}" class="card-img-top border-bottom img-fluid " style="width:400px ; height:150px">
            </div>
            </div>
            </div>
           </div>
        `
            })

            $('#myItems').html(html);

        })
        }



         function search(name)
        {
          $.post("{{route('search')}}",{sname:name},function(res)
        {
            console.log(res);
            var html = '';
            $.each(res,function(i,v)
            {
                var url= 'rentals/'+v.id;
                html +=`

             


        
         <div class="col-md-8 col-sm-8 my-5">
            <div class="card cardan w-100">
              <div class="card-header bg-dark home1">
                ${v.name}
              </div>
              <div class="row no-gutters ">
                <div class="col-md-6">
                  <div class="card-img" >
                  <img src="${v.mainphoto}" class="card-img-top border-bottom img-fluid top" style="width:400px ; height:300px">

                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card-body text-justify">
                    <h5 class="card-title">${v.name}</h5>
                    <p class="card-text">တစ်လချင်း ${v.pricepermonth} ကျပ်</p>
                     <p class="card-text">ပိုင်ရှင်အမည် :${v.owner_name}</p>
                     <p class="card-text">တည်နေရာ :${v.address}</p>
                     <p class="card-text"><i class="fa fa-bed" aria-hidden="true"></i>  ${v.bedroom_qty} Room  <i class="fa fa-bath" aria-hidden="true"></i> ${v.bathroom_qty} Room</p>
                    
                     <hr>
                    <a href="${url}" class="btn btn-light text-center"><i class="fas fa-info-circle"></i>   အသေးစိတ်ကြည့်ရှုရန်</a>

                  </div>
                </div>


              </div>


            </div>
          </div>

           <div class="col-md-4 col-sm-4 my-5">
           <div class="row">
           <div class="col-md-12">
                <h4 class="text-center" style="color:black">အတွင်းခန်း ပုံများ </h4>
               <img src="${v.inphoto}" class="card-img-top border-bottom img-fluid cardan" style="width:400px ; height:150px">
            </div>
              <div class="col-md-12">
              <h4 class="text-center" style="color:black">အိပ်ခန်း ပုံများ</h4>
               <img src="${v.roomphoto}" class="card-img-top border-bottom img-fluid cardan" style="width:400px ; height:150px">
            </div>
            </div>
            </div>
           </div>



        `
            })

            $('#myItems').html(html);

        })
        }



        $('.filter').click(function()
        {
          var id = $(this).data('id');
          showItems(id);
        })


          $('.search').click(function()
        {
          var name = $(".name").val();
          console.log(name);
          search(name);

          // var name = document.getElementById(name);
          // console.log(name);
          // showItems(id);
        })
        
      })
    </script>

@endsection
