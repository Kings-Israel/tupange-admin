@extends('layouts.app')
{{-- page header --}}
@section('title','Vendor')
@section('stylesheets')
   <style>
      .img-fluid {
         width: 40px;
         height: 40px;
         border-radius: 50%;
         object-fit: cover;
      }
   </style>
@endsection
@section('breadcrumb')
   <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
         <h3 class="content-header-title mb-0 d-inline-block"><i class="fal fa-user-friends"></i> Vendor</h3>
         <div class="row breadcrumbs-top d-inline-block">
            <div class="breadcrumb-wrapper col-12">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{!! url('/') !!}">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Vendor</a></li>
                  <li class="breadcrumb-item active">List</li>
               </ol>
            </div>
         </div>
      </div>
      <div class="content-header-right col-md-6 col-12"></div>
   </div>
@endsection
{{-- content section --}}
@section('content')
   @include('partials._messages')
   <div class="row">
      <div class="col-md-12">
         <div class="card">
            <div class="card-body">
               <h4>Vendor</h4>
               <hr>
               <table class="table table-striped table-bordered zero-configuration">
                  <thead>
                     <tr>
                        <th width="1%">#</th>
                        <th></th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Services Count</th>
                        <th>Action</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach ($vendors as $count=>$vendor)
                        <tr>
                           <td>{!! $count+1 !!}</td>
                           <td><img src="{{ config('services.app_url.url').'/storage/vendor/logo/'.$vendor->company_logo }}" alt="{{ $vendor->company_name }}" class="img-fluid" width="30px" height="30px"></td>
                           <td><a href="#">{{ $vendor->company_name }}</a></td>
                           <td>{{ $vendor->company_email }}</td>
                           <td>{{ $vendor->company_phone_number }}</td>
                           <td>{{ $vendor->services->count() }}</td>
                           <td>
                              <a href="{!! route('vendors.details',$vendor->id) !!}" class="btn btn-warning btn-sm">View</a>
                              @if ($vendor->status === 'Suspended')
                                 <a href="{!! route('vendors.status',$vendor->id) !!}" class="btn btn-success btn-sm">Activate</a>
                              @else
                                 <a href="{!! route('vendors.status',$vendor->id) !!}" class="btn btn-danger btn-sm">Suspend</a>
                              @endif
                           </td>
                        </tr>
                     @endforeach
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
@endsection
{{-- page scripts --}}
@section('script')

@endsection
