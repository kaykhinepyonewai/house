
<div class="container pb-5" style="background-color: #fafafa">
  <div class="row">
    {{-- <div class="col-md-6">
        <a class="btn btn-outline-info dropdown-toggle w-75"  role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                မြို့နယ်
              </a>

              <div class="dropdown-menu" aria-labelledby="#dropdownMenuLink">
               @foreach($towships as $township)
                <a class="dropdown-item text-dark" href='' data-id="{{$township->id}}">{{$township->name}}</a>
               @endforeach
                
              </div>
    </div> --}}
    <div class="col-md-6 tablecolor">
        {{-- @foreach($towships as $township)
          <a href="#" class="list-group-item filter" data-id="{{$township->id}}" class="text-decoration-none text-light"><span class="home1">{{$township->name}}</span></a>

        @endforeach --}}

        <div class="list-group">
         <h5 class="text-center">Filter By Township</h5>
          @foreach($towships as $township)
          <a href="#" class="list-group-item filter btn tablecolor" data-id="{{$township->id}}">{{$township->name}}</a>
        @endforeach
        </div>
    </div>


    <div class="col-md-6 tablecolor " style="padding-top: 70px">
     <form>
      <div class="row">
        <div class="col-md-10 tablecolor">
      <input type="text" name="search" class="name d-inline-block form-control pb-3" >
      </div>
      <div class="col-md-2 tablecolor">
      <input type="button" name="btnsubmit" class="search" value="Search" class="btn btn-dark d-inline-block form-control pt-5 text-center" >
      </div>
      </div>
    </form>
  </div>
</div>
{{--  <div class="col-md-3 pr-5"> --}}
{{-- <div class="row">
  <div class="col-md-6"> --}}
     {{--    <h1 class="my-4">Shop Name</h1> --}}
     {{-- <div class="" style="color: pink"> --}}
     

        
          
             {{--  <a class="btn btn-outline-info dropdown-toggle"  role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                မြို့နယ်
              </a>

              <div class="dropdown-menu" aria-labelledby="#dropdownMenuLink">
               @foreach($towships as $township)
                <a class="dropdown-item text-dark" href='' data-id="{{$township->id}}">{{$township->name}}</a>
               @endforeach
                
              </div> --}}
            
        
        
         {{-- <div class="dropdown-menu" style="color: pink"> --}}
         {{-- <div class="dropdown-menu text-light"> --}}
        {{--   @foreach($towships as $township)
          <a href="#" class="list-group-item filter" data-id="{{$township->id}}" class="text-decoration-none text-light"><span class="home1">{{$township->name}}</span></a> --}}


        
            {{-- <a class="dropdown-item filter" data-id="{{$township->id}}"  href="#">{{$township->name}}</a> --}}

            {{-- <span class="dropdown-item-text">Just Text</span> --}}
         {{--  </div>
        @endforeach --}}
        {{-- </div>

        </div>
 --}}
          {{-- <div class="list-group">
            <h2>Mandalay</h2>
          </div>
 --}}
        {{-- <h1 class="my-4">Brand Name</h1>
        <div class="list-group">
         
          @foreach($brand as $brands)
          <a href="#" class="list-group-item filter" data-id="{{$subcategory->id}}">{{$subcategory->name}}</a>
        @endforeach
        </div> --}}

        {{-- <form action="">
        <input type="search" name="search">
        <button type="submit">Search</button>
        </form> --}}

       {{--  <form method="POST" action="" onsubmit="return confirm('Are you sure?')" class="d-inline-block"> --}}
              {{--  <div class="col-md-6 py-5">
                <form>
                <input type="text" name="search" class="name d-inline-block form-control pb-3" >
                <input type="button" name="btnsubmit" class="search" value="Search" class="btn btn-dark d-inline-block form-control pt-5 text-center" >
                </form>
                </div> --}}
            {{--   </form> --}}

     {{--  </div> --}}

   {{--   </div> --}}

    </div>