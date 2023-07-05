@extends('layouts.app')
@section('title','Payments')
@section('breadcrumb')
   <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
         <h3 class="content-header-title mb-0 d-inline-block"><i class="fal fa-credit-card"></i> Payments</h3>
         <div class="row breadcrumbs-top d-inline-block">
            <div class="breadcrumb-wrapper col-12">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{!! url('/') !!}">Home</a></li>
                  <li class="breadcrumb-item active"><a href="#">Payments</a></li>
               </ol>
            </div>
         </div>
      </div>
      <div class="content-header-right col-md-6 col-12"></div>
   </div>
@endsection
@section('content')
<div class="card">
   <div class="card-body">
      @include('partials._messages')
      <table class="table table-striped table-bordered zero-configuration">
         <thead>
            <tr>
               <th width="1%">#</th>
               <th>OrderID</th>
               <th>Amount</th>
               <th>Customer</th>
               <th>Payment Method</th>
               <th>Transaction ID</th>
               <th>Payment Date</th>
            </tr>
         </thead>
         <tbody>
            @foreach($payments as $count=>$payment)
               <tr>
                  <td>{!! $count+1 !!}</td>
                  <td>{!! $payment->order->order_id !!}</td>
                  <td>Ksh {!! number_format($payment->amount) !!}</td>
                  <td>{!! $payment->user->f_name !!} {!! $payment->user->l_name !!}</td>
                  <td>{!! $payment->payment_method !!}</td>
                  <td>{!! $payment->transaction_id !!}</td>
                  <td>{!! $payment->created_at->format('d M Y') !!}</td>
               </tr>
            @endforeach
         </tbody>
      </table>
   </div>
</div>
@endsection
{{-- page scripts --}}
@section('script')

@endsection
