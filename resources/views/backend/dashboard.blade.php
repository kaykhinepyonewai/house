@extends('backendtemplate')
@section('title','Dashboard')
@section('content')

   

 <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Properties Count</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$propertiescount}}</div>
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-home fa-2x" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>


              <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Properties Count(Approve)</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$propertiesapprovecount}}</div>
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-bell fa-2x" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

             <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Properties Count(Waiting)</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$propertiesrwaitingcount}}</div>
                    </div>
                    <div class="col-auto">
                     <i class="fa fa-bullhorn fa-2x" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Properties Count(Closing)</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$propertiesrclosecount}}</div>
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-database fa-2x" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>


             <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">All Rental List</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$rentalscount}}</div>
                    </div>
                    <div class="col-auto">
                     <i class="fa fa-building fa-2x" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Rental List(Approve)</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$rentalsapprovecount}}</div>
                    </div>
                    <div class="col-auto">
                     <i class="fa fa-folder fa-2x" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Rental List(Request)</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$rentalsrequestcount}}</div>
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-angle-double-right fa-2x" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Rental List(Reject)</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$rentalsrejectcount}}</div>
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-address-card fa-2x" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">User List</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$usercount}}</div>
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-user-circle fa-2x" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>




            <!-- Earnings (Monthly) Card Example -->
            {{-- <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div> --}}

            <!-- Pending Requests Card Example -->
           {{--  <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pending Requests</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> --}}

          <!-- Content Row -->

          

         
           

          </div>

</div>



@endsection