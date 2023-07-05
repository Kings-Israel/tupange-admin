@extends('layouts.app')
@section('title','Events')
@section('breadcrumb')
   <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
         <h3 class="content-header-title mb-0 d-inline-block"><i class="fal fa-calendar"></i> Events</h3>
         <div class="row breadcrumbs-top d-inline-block">
            <div class="breadcrumb-wrapper col-12">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{!! url('/') !!}">Home</a></li>
                  <li class="breadcrumb-item active"><a href="#">Events</a></li>
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
      <table class="table table-striped table-bordered zero-configuration">
         <thead>
            <tr>
               <th width="1%">#</th>
               <th>Title</th>
               <th>Type</th>
               <th>Start</th>
               <th>End</th>
               <th>Status</th>
               <th>Action</th>
            </tr>
         </thead>
         <tbody>
            @foreach($events as $count=>$event)
               <tr>
                  <td>{!! $count+1 !!}</td>
                  <td>{!! $event->event_name !!}</td>
                  <td>{!! $event->event_type !!}</td>
                  <td>{!! Carbon\Carbon::parse($event->event_start_date)->format('d M, Y H:i a') !!}</td>
                  <td>{!! Carbon\Carbon::parse($event->event_end_date)->format('d M, Y H:i a') !!}</td>
                  <td>{!! $event->status !!}</td>
                  <td><a href="{{ route('events.details', $event->id) }}" class="btn btn-success btn-sm">View</a></td>
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
