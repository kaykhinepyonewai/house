@extends('backendtemplate')
@section('content')
<!-- DataTales Example -->
<a class="sidebar-brand d-flex align-items-center justify-content-center text-info">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink fa-5" style='font-size:50px'></i>
  </div>
  <h5 class="sidebar-brand-text mx-1 d-block text-info">K <sup>2</sup>&nbsp;Rental House</h5>

</a>
<tr>

    <p class="text-center text-info">Mandalay Region,Sintgaing Township,Paleik.<br>Tel:09770106551</p>
</tr>
<a href="{{route('adminrentals.index')}}}" class=" btn btn-sm btn-info  float-right "><i class="fas fa-backward fa-sm text-white-50"></i> Go Back</a>



<div class="container-fluid">
    <div class="table-responsive">

        <table class="table table-bordered my-3"  width="100%" cellspacing="0">


            <thead >


                <tr>

                    <th colspan="4">
                        <div class="row">
                            <div class="col-md-3">
                                Rental No
                            </div>
                            <div class="col-md-3">
                                {{$rental->property->codeno}}
                            </div>
                            <div class="col-md-3">
                                Rental Period
                            </div>
                            <div class="col-md-3">
                                {{$rental->rentalperiod}}
                            </div>
                            

                        </div> 
                    </th>

                    <tr>
                        <th colspan="4">
                            <div class="row">
                                <div class="col-md-3">
                                    House Name
                                </div>
                                <div class="col-md-3">
                                    {{$rental->property->name}}
                                </div>
                                
                                <div class="col-md-3">
                                    Rental Date
                                </div>
                                <div class="col-md-3">
                                    {{$rental->plandate}}
                                </div>

                            </div> 
                        </th>
                    </tr>
                    <tr>
                     <th colspan="4">
                        <div class="row">
                            <div class="col-md-3">
                                House Address
                            </div>
                            <div class="col-md-3">
                                {{$rental->property->address}}
                            </div>

                            <div class="col-md-3">
                                Desciption
                            </div>
                            <div class="col-md-3">
                                {{$rental->property->description}}
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
                            {{$rental->property->owner_name}}
                        </div>
                        <div class="col-md-3">
                            Customer
                        </div>
                        <div class="col-md-3">
                            {{$rental->customer_name}}
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
                     {{$rental->property->phoneno}}
                    </div>
                    <div class="col-md-3">
                        Customer Ph
                    </div>
                    <div class="col-md-3">
                        {{$rental->phoneno}}
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
                    <img src="{{asset($rental->property->mainphoto)}}" class="img-fluid" style="width: 100px ; height: 100px">
                </div>
                <div class="col-md-3">
                    <img src="{{asset($rental->property->inphoto)}}" class="img-fluid" style="width: 100px ; height: 100px">
                </div>
                <div class="col-md-3">
                    <img src="{{asset($rental->property->roomphoto)}}" class=" img-fluid" style="width: 100px ; height: 100px">
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
                    {{$rental->property->pricepermonth}}
                </div>
                <div class="col-md-3">
                    House BedRoom
                </div>
                <div class="col-md-3">
                    {{$rental->property->bedroom_qty}}
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
                {{$rental->property->volume}}
            </div>
            <div class="col-md-3">
                House BathRoom
            </div>
            <div class="col-md-3">
                {{$rental->property->bathroom_qty}}
            </div>

        </div> 
    </th>

</tr>



</thead>


</table>

</div>
</div>






@endsection

