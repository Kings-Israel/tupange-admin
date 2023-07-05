@extends('layouts.app')
{{-- page header --}}
@section('title','Carts')
@section('breadcrumb')
   <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
         <h3 class="content-header-title mb-0 d-inline-block"><i class="fal fa-cart-plus"></i> Carts</h3>
         <div class="row breadcrumbs-top d-inline-block">
            <div class="breadcrumb-wrapper col-12">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{!! url('/') !!}">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Carts</a></li>
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
               <h4>Cart</h4>
               <hr>
               <table class="table table-striped table-bordered zero-configuration">
                  <thead>
                     <tr>
                        <th width="1%">#</th>
                        <th>Customer</th>
                        <th>Service</th>
                        <th>Vendor</th>
                        <th>Order Date</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach($items as $count=>$item)
                        <tr>
                           <td>{!! $count+1 !!}</td>
                           <td>{!! $item->user->f_name !!} {!! $item->user->l_name !!}</td>
                           <td>{!! $item->service->service_title !!}</td>
                           <td>{!! $item->service->vendor->company_name !!}</td>
                           <td>{!! $item->created_at->diffForHumans() !!}</td>
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
