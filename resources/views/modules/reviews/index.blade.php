@extends('layouts.app')
@section('title','Reviews')
@section('breadcrumb')
   <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
         <h3 class="content-header-title mb-0 d-inline-block"><i class="fal fa-star"></i> Review</h3>
         <div class="row breadcrumbs-top d-inline-block">
            <div class="breadcrumb-wrapper col-12">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{!! url('/') !!}">Home</a></li>
                  <li class="breadcrumb-item active"><a href="#">Reviews</a></li>
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
               <th width="10%">Customer</th>
               <th width="10%">Service</th>
               <th width="8%">Rate</th>
               <th>Review</th>
            </tr>
         </thead>
         <tbody>
            @foreach($reviews as $count=>$review)
               <tr>
                  <td>{!! $count+1 !!}</td>
                  <td>{!! $review->f_name !!} {!! $review->l_name !!}</td>
                  <td>{!! $review->service_title !!}</td>
                  <td>{!! $review->rating !!}</td>
                  <td>{!! $review->comment !!}</td>
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
