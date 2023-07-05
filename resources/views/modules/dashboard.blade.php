@extends('layouts.app')
@section('title','Dashboard | Tupange')
@section('stylesheets')
@endsection
@section('content')
   <div class="row">
      <div class="col-xl-3 col-lg-6 col-12">
         <div class="card bg-gradient-directional-danger">
            <div class="card-content">
               <div class="card-body">
                  <div class="media d-flex">
                     <div class="media-body text-white text-left">
                        <h3 class="text-white">{!! number_format($vendors) !!}</h3>
                        <span>Total Vendors</span>
                     </div>
                     <div class="align-self-center">
                        <i class="far fa-users-crown text-white font-large-2 float-right"></i>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-3 col-lg-6 col-12">
         <div class="card bg-gradient-directional-success">
            <div class="card-content">
            <div class="card-body">
               <div class="media d-flex">
                  <div class="media-body text-white text-left">
                     <h3 class="text-white">{!! number_format($orders) !!}</h3>
                     <span>Orders</span>
                  </div>
                  <div class="align-self-center">
                     <i class="far fa-dollar-sign text-white font-large-2 float-right"></i>
                  </div>
               </div>
            </div>
            </div>
         </div>
      </div>
      <div class="col-xl-3 col-lg-6 col-12">
         <div class="card bg-gradient-directional-amber">
            <div class="card-content">
               <div class="card-body">
                  <div class="media d-flex">
                     <div class="media-body text-white text-left">
                        <h3 class="text-white">{!! number_format($services) !!}</h3>
                        <span>Services</span>
                     </div>
                     <div class="align-self-center">
                        <i class="far fa-bullhorn text-white font-large-2 float-right"></i>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-3 col-lg-6 col-12">
         <div class="card bg-gradient-directional-info">
            <div class="card-content">
               <div class="card-body">
                  <div class="media d-flex">
                     <div class="media-body text-white text-left">
                        <h3 class="text-white">{!! number_format($users) !!}</h3>
                        <span>Users</span>
                     </div>
                     <div class="align-self-center">
                        <i class="far fa-users text-white font-large-2 float-right"></i>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-md-4">
         <div class="card">
            <div class="card-header">
               Services per category
            </div>
            <div class="card-body">
               {!! $serviceCategory->container() !!}
            </div>
         </div>
      </div>
      <div class="col-md-8">
         <div class="card">
            <div class="card-header">
               Vendors awaiting approval
            </div>
            <div class="card-body">
               <table class="table table-striped table-bordered zero-configuration">
                  <thead>
                     <tr>
                        <th width="1%">#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        {{-- <th>Location</th> --}}
                        <th>Status</th>
                        <th>Action</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach($pendingVendors as $count=>$ven)
                        <tr>
                           <td>{!! $count+1 !!}</td>
                           <td><a href="{!! route('vendors.details',$ven->id) !!}">{{ $ven->company_name }}</a></td>
                           <td>{{ $ven->company_email }}</td>
                           <td>{{ $ven->company_phone_number }}</td>
                           {{-- <td>{{ $ven->location }}</td> --}}
                           <td><a href="" class="badge badge-primary">Pending Approval</a></td>
                           <td><a href="{!! route('vendors.details',$ven->id) !!}" class="btn btn-warning btn-sm">View</a></td>
                        </tr>
                     @endforeach
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
   <!--/ Revenue, Hit Rate & Deals -->
@endsection
@section('scripts')
   <script src="{!! asset('assets/plugins/chart.js/2.7.1/Chart.min.js') !!}" charset="utf-8"></script>
	{!! $serviceCategory->script() !!}
@endsection
