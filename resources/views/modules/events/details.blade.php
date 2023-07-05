@extends('layouts.app')
@section('title','Events Details')
@section('breadcrumb')
   <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
         <h3 class="content-header-title mb-0 d-inline-block"><i class="fal fa-calendar"></i> Events</h3>
         <div class="row breadcrumbs-top d-inline-block">
            <div class="breadcrumb-wrapper col-12">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{!! url('/') !!}">Home</a></li>
                  <li class="breadcrumb-item active"><a href="{{ route('events.index') }}">Events</a></li>
                  <li class="breadcrumb-item active"><a href="#">Details</a></li>
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
      <div class="row">
         {{-- <div class="col-md-12">
            <a href="" class="btn btn-sm btn-primary">Approve</a>
            <a href="" class="btn btn-sm btn-primary">Block</a>
         </div>
         <div class="col-md-12">
            <hr>
         </div> --}}
         <div class="col-md-4">
            <img src="{!! config('services.app_url.url').'/storage/event/poster/'.$event->event_poster !!}" alt="" width="100%">
            {{-- <img src="{!! asset('assets/images/party.jpg.') !!}" width="100%"> --}}
         </div>
         <div class="col-md-8">
            <h3>Event Details:</h3>
            <h4>
               <b>Event Title:</b> {!! $event->event_name !!}<br>
               <b>Event Type:</b> {!! $event->event_type !!}<br>
               <b>Location:</b> {!! $event->event_location !!}<br>
               <b>Start Time:</b> {!! Carbon\Carbon::parse($event->event_start_date)->format('d M, Y H:i a') !!}<br>
               <b>End Time:</b> {!! Carbon\Carbon::parse($event->event_end_date)->format('d M, Y H:i a') !!}<br>
               <b>Status:</b> <a class="btn btn-sm btn-warning">{!! $event->status !!}</a><br>
            </h4>
            <h3>Organized By:</h3>
            <h4>
               <b>User Name:</b> {!! $event->user->f_name !!} {!! $event->user->l_name !!}<br>
               <b>Email:</b> {!! $event->user->email !!}<br>
               <b>Phone Number:</b>{!! $event->user->phone_number !!}
            </h4>
         </div>
      </div>
   </div>
</div>
<p id="event_lat" hidden>{{ $event->event_location_lat }}</p>
<p id="event_long" hidden>{{ $event->event_location_long }}</p>
<div id="location-map"></div>
<div class="card">
   <div class="card-header">
      <div class="row">
         <div class="col-4">
            <h3>Event Guests</h3>
         </div>
      </div>
   </div>
   <div class="card-body">
      <table class="table table-striped table-bordered zero-configuration">
         <thead>
            <tr>
               <th>Name</th>
               <th>Status</th>
               <th>Ticket Title</th>
               <th>Ticket Price</th>
            </tr>
         </thead>
         <tbody>
            @foreach($event->guests as $guest)
               <tr>
                  <td>{!! $guest->first_name !!} {!! $guest->last_name !!}</td>
                  <td>{!! $guest->status !!}</td>
                  <td>{!! $guest->ticket_title !!}</td>
                  <td>Ksh. {!! number_format($guest->ticket_price) !!}</td>
               </tr>
            @endforeach
         </tbody>
      </table>
   </div>
</div>
@endsection
{{-- page scripts --}}
@section('scripts')
<script>
   let lat = document.getElementById('event_lat').innerHTML
   let long = document.getElementById('event_long').innerHTML

   var mapInstance;
   var marker;

   function initMap() {
      var latlng = new google.maps.LatLng(lat, long);
      var mapOptions = {
            zoom: 15,
            center: latlng,
            scrollwheel: false,
            zoomControl: true,
            navigationControl: true,
            mapTypeControl: false,
            scaleControl: true,
            draggable: true,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
      };
      mapInstance = new google.maps.Map(document.getElementById("location-map"), mapOptions);
      marker = new google.maps.Marker({
            position: latlng,
            map: mapInstance,
            draggable: false
      })
   }
</script>
<script src="{{ config('services.maps.key') }}" async defer></script>
@endsection
