@extends('layouts.app')
@section('title','Events Details')
@section('breadcrumb')
   <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
         <h3 class="content-header-title mb-0 d-inline-block"><i class="fal fa-calendar"></i> Orders</h3>
         <div class="row breadcrumbs-top d-inline-block">
            <div class="breadcrumb-wrapper col-12">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{!! url('/') !!}">Home</a></li>
                  <li class="breadcrumb-item active"><a href="{{ route('orders.index') }}">Orders</a></li>
                  <li class="breadcrumb-item active"><a href="#">Details</a></li>
               </ol>
            </div>
         </div>
      </div>
      <div class="content-header-right col-md-6 col-12"></div>
   </div>
@endsection
@section('content')
@include('partials._messages')
<div class="card">
   <div class="card-body">
      <div class="row">
         {{-- <div class="col-md-12">
            <a href="" class="btn btn-sm btn-primary">Approve</a>
            <a href="" class="btn btn-sm btn-primary">Block</a>
         </div>
         <div class="col-md-12">
            <hr>
         </div> --}}
         <div class="col-md-4">
            <img src="{!! config('services.app_url.url').'/storage/service/cover_image/'.$order->service->service_image !!}" alt="" width="100%">
         </div>
         <div class="col-md-4">
            <h4>
               <b>Vendor:</b>
               <a href="{{ route('vendors.details', $order->service->vendor->id) }}">
                  {!! $order->service->vendor->company_name !!}
               </a>
               <br>
               <b>Service:</b> {!! $order->service->service_title !!}<br>
               <b>Service Category:</b> {!! $order->service->category->name !!}<br>
               <b>Client:</b>
               <a href="{{ route('users.details', $order->user->id) }}">
                  {!! $order->user->f_name !!} {!! $order->user->l_name !!}
               </a>
               <br>
               <b>Order Date:</b> {!! $order->created_at !!}<br>
            </h4>
         </div>
         <div class="col-md-4">
            <h4>
               <b>Status:</b> <a class="btn btn-md btn-warning text-white" style="font-weight: 800; font-size: 12px">{!! $order->status !!}</a><br>
               @if ($order->status_reason != NULL)
                  <b>Status Reason:</b> {!! $order->status_reason !!}
               @endif
            </h4>
         </div>
      </div>
   </div>
</div>
@endsection
{{-- page scripts --}}
@section('script')

@endsection
