@extends('backendtemplate')
@section('content')
  <!-- DataTales Example -->
  <i class="fas fa-laugh-wink"></i>

  <h5 style="color: pink;" class="text-center">K <sup>2</sup>&nbsp;Rental House</h5>

  <div class="container-fluid">
    <div class="table-responsive">

        <table class="table table-bordered"  width="100%" cellspacing="0">
            <thead >
               
                @foreach($rentals as $rental)
                <tr>
                   
                    <th colspan="4">
                    <div class="row">
                        <div class="col-md-3">
                            Rental No
                        </div>
                        <div class="col-md-3">
                            :{{$rental->property->codeno}}
                        </div>
                        <div class="col-md-3">
                            Customer
                        </div>
                        <div class="col-md-3">
                            :{{$rental->customer_name}}
                        </div>

                    </div> 
                </th>
                    
                <tr>
                    <th colspan="4">
                    <div class="row">
                        <div class="col-md-3">
                            Customer Ph
                        </div>
                        <div class="col-md-3">
                            :{{$rental->phoneno}}
                        </div>
                        <div class="col-md-3">
                            Rental Date
                        </div>
                        <div class="col-md-3">
                            :{{$rental->plandate}}
                        </div>

                    </div> 
                </th>
                </tr>
                <tr>
                     <th colspan="4">
                    <div class="row">
                        <div class="col-md-3">
                            Rental Period
                        </div>
                        <div class="col-md-3">
                            :{{$rental->rentalperiod}}
                        </div>
                        <div class="col-md-3">
                            Rental Time
                        </div>
                        <div class="col-md-3">
                            :{{$rental->created_at}}
                        </div>

                    </div> 
                </th>
                   
                </tr>
                <tr>
                     <th colspan="4">
                    <div class="row">
                        <div class="col-md-3">
                            Owner Name
                        </div>
                        <div class="col-md-3">
                            :{{$rental->property->owner_name}}
                        </div>
                        <div class="col-md-3">
                            House Name
                        </div>
                        <div class="col-md-3">
                            :{{$rental->property->name}}
                        </div>

                    </div> 
                </th>
                   
                </tr>
                <tr>
                     <th colspan="4">
                    <div class="row">
                        <div class="col-md-3">
                            Rental House Photo
                        </div>
                        <div class="col-md-3">
                            <img src="{{asset($rental->property->mainphoto)}}" class="h-25 w-50">
                        </div>
                        <div class="col-md-3">
                            <img src="{{asset($rental->property->inphoto)}}" class="h-25 w-50">
                        </div>
                        <div class="col-md-3">
                            <img src="{{asset($rental->property->roomphoto)}}" class="h-25 w-50">
                        </div>
                        
                </th>
                   
                </tr>
                 <tr>
                     <th colspan="4">
                    <div class="row">
                        <div class="col-md-3">
                            PricePerMonth
                        </div>
                        <div class="col-md-3">
                            :{{$rental->property->pricepermonth}}
                        </div>
                        <div class="col-md-3">
                            House BedRoom
                        </div>
                        <div class="col-md-3">
                            :{{$rental->property->bedroom_qty}}
                        </div>

                    </div> 
                </th>
                   
                </tr>
                 <tr>
                     <th colspan="4">
                    <div class="row">
                        <div class="col-md-3">
                            House Volume
                        </div>
                        <div class="col-md-3">
                            :{{$rental->property->volume}}
                        </div>
                        <div class="col-md-3">
                            House BathRoom
                        </div>
                        <div class="col-md-3">
                            :{{$rental->property->bathroom_qty}}
                        </div>

                    </div> 
                </th>
                   
                </tr>
                 <tr>
                     <th colspan="4">
                    <div class="row">
                        <div class="col-md-3">
                            Owner Ph
                        </div>
                        <div class="col-md-3">
                            :{{$rental->property->phoneno}}
                        </div>
                        <div class="col-md-3">
                            House Name
                        </div>
                        <div class="col-md-3">
                            :{{$rental->property->address}}
                        </div>

                    </div> 
                </th>
                   
                </tr>
                @endforeach

            </thead>


        </table>

    </div>
</div>

                  


			
		
@endsection

