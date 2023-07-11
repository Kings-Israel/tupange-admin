@extends('layouts.app')
@section('title','Event Payments')
@section('breadcrumb')
   <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
         <h3 class="content-header-title mb-0 d-inline-block"><i class="fal fa-credit-card"></i> Event Tickets Payments</h3>
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
<livewire:event-ticket-payments />
@endsection
