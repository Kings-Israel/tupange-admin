@extends('layouts.app')
{{-- page header --}}
@section('title','Vendor Details')
@section('breadcrumb')
   <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
         <h3 class="content-header-title mb-0 d-inline-block"><i class="fal fa-users"></i> Vendor Details</h3>
         <div class="row breadcrumbs-top d-inline-block">
            <div class="breadcrumb-wrapper col-12">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{!! url('/') !!}">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Vendors</a></li>
                  <li class="breadcrumb-item active">{!! $details->company_name !!}</li>
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
      <div class="col-md-3">
         <div class="card">
            <div class="card-body">
               <h4>{!! $details->company_name !!}</h4>
            </div>
         </div>
      </div>
      <div class="col-md-9">
         <nav class="nav nav-pills flex-column flex-sm-row mb-1">
            <a class="flex-sm-fill text-sm-center nav-link active" href="#">Details</a>
            <a class="flex-sm-fill text-sm-center nav-link" href="{!! route('vendors.services',$details->id) !!}">Services</a>
            <a class="flex-sm-fill text-sm-center nav-link" href="#">Orders</a>
         </nav>
         <div class="card">
            <div class="card-header">Vendor Information</div>
            <div class="card-body">
               <div class="row">
                  <div class="col-md-4">
                     <img class="img-fluid" src="{!! config('services.app_url.url').'/storage/vendor/logo/'.$details->company_logo !!}" alt="">
                  </div>
                  <div class="col-md-8">
                     <h5>
                        <b>Name:</b> {!! $details->company_name !!}<br>
                        <b>Email:</b> {!! $details->company_email !!}<br>
                        <b>Phone Number:</b> {!! $details->company_phone_number !!}<br>
                        <b>Location:</b> {!! $details->location !!}<br>
                        @if ($details->status === 'Suspended')
                        <b>Status: </b><a href="{!! route('vendors.status',$details->id) !!}" class="btn btn-success btn-sm">Activate</a>
                        @else
                        <b>Status:</b> <a href="{!! route('vendors.status',$details->id) !!}" class="btn btn-danger btn-sm">Suspend</a>
                        @endif
                     </h5>
                  </div>
                  <div class="col-md-12">
                     <hr>
                     <p>{!! $details->company_description !!}</p>
                  </div>
               </div>
            </div>

         </div>
      </div>
   </div>
@endsection
{{-- page scripts --}}
@section('script')

@endsection
