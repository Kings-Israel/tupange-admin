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
            <a class="flex-sm-fill text-sm-center nav-link" href="{!! route('vendors.orders',$details->id) !!}">Orders</a>
         </nav>
         <div class="card">
            <div class="card-header">All Vendor services Information</div>
            <div class="card-body">
               <table class="table table-striped table-bordered zero-configuration">
                  <thead>
                     <tr>
                        <th width="1%">#</th>
                        <th>OrderID</th>
                        <th>Amount</th>
                        <th>Customer</th>
                        <th>Order Date</th>
                        <th>Status</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach($orders as $count=>$item)
                        <tr>
                           <td>{!! $count+1 !!}</td>
                           <td>{!! $item->order_id !!}</td>
                           @if ($item->service_pricing)
                              <td>{{ $item->service_pricing->service_pricing_title }} <strong style="display: flex;">(Ksh. <p>{{ number_format($item->service_pricing->service_pricing_price) }}</p>)</strong></td>
                           @elseif($item->order_quotation)
                              <td>{{ $item->order_quotation->order_pricing_title }} <strong style="display: flex;">(Ksh. <p>{{ number_format($item->order_quotation->order_pricing_price) }}</p>)</strong></td>
                           @else
                              <td>Awaiting Quote</td>
                           @endif
                           <td>{!! $item->user->f_name !!} {!! $item->user->l_name !!}</td>
                           <td>{!! date('F jS, Y', strtotime($item->created_at)) !!}</td>
                           <td><span class="badge">{!! $item->status !!}</span></td>
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
