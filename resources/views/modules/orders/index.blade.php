@extends('layouts.app')
{{-- page header --}}
@section('title','Orders')
@section('breadcrumb')
   <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
         <h3 class="content-header-title mb-0 d-inline-block"><i class="fal fa-dollar-sign"></i> Orders</h3>
         <div class="row breadcrumbs-top d-inline-block">
            <div class="breadcrumb-wrapper col-12">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{!! url('/') !!}">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Orders</a></li>
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
              <a href="{!! route('orders.export') !!}" class="btn btn-sm btn-primary">Export to exel</a>
               <hr>
               <table class="table table-striped table-bordered zero-configuration">
                  <thead>
                     <tr>
                        <th width="1%">#</th>
                        <th>OrderID</th>
                        <th>Amount</th>
                        <th>Customer</th>
                        <th>Order Date</th>
                        <th>Service <b>(Vendor)</b></th>
                        <th>Status</th>
                        <th>View</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach($orders as $count=>$item)
                        <tr>
                              <td>{!! $count+1 !!}</td>
                              <td>{!! $item->order_id !!}</td>
                              <td>
                                 @if ($item->service_pricing)
                                    {{ $item->service_pricing->service_pricing_title }} <strong style="display: flex;">(Ksh. <p>{{ number_format($item->service_pricing->service_pricing_price) }}</p>)</strong>
                                 @elseif($item->order_quotation)
                                    {{ $item->order_quotation->order_pricing_title }} <strong style="display: flex;">(Ksh. <p>{{ number_format($item->order_quotation->order_pricing_price) }}</p>)</strong>
                                 @else
                                    Awaiting Quote
                                 @endif
                              </td>
                              <td>{!! $item->user ? $item->user->f_name : 'N/A' !!} {!! $item->user ? $item->user->l_name : '' !!}</td>
                              <td>{!! $item->created_at ? date('F jS, Y', strtotime($item->created_at)) : 'N/A' !!}</td>
                              <td>
                                 {!! $item->service ? $item->service->service_title : 'N/A' !!}<br>
                                 <i><b>{!! $item->service && $item->service->vendor ? $item->service->vendor->company_name : 'N/A' !!}</b></i>
                              </td>
                              <td>
                                 <span class="badge">{!! $item->status !!}</span>
                              </td>

                              <td>
                                 <a href="{{ route('orders.details', $item->id) }}">
                                    <span class="badge-success" style="padding: 0 5px; color: white; border-radius: 3px; cursor: pointer">View</span>
                                 </a>
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
