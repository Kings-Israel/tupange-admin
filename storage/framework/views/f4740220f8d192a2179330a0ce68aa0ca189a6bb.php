<?php $__env->startSection('title','Events Details'); ?>
<?php $__env->startSection('breadcrumb'); ?>
   <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
         <h3 class="content-header-title mb-0 d-inline-block"><i class="fal fa-calendar"></i> Events</h3>
         <div class="row breadcrumbs-top d-inline-block">
            <div class="breadcrumb-wrapper col-12">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?php echo url('/'); ?>">Home</a></li>
                  <li class="breadcrumb-item active"><a href="<?php echo e(route('events.index')); ?>">Events</a></li>
                  <li class="breadcrumb-item active"><a href="#">Details</a></li>
               </ol>
            </div>
         </div>
      </div>
      <div class="content-header-right col-md-6 col-12"></div>
   </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="card">
   <div class="card-body">
      <div class="row">
         
         <div class="col-md-4">
            <img src="<?php echo config('services.app_url.url').'/storage/event/poster/'.$event->event_poster; ?>" alt="" width="100%">
            
         </div>
         <div class="col-md-8">
            <h3>Event Details:</h3>
            <h4>
               <b>Event Title:</b> <?php echo $event->event_name; ?><br>
               <b>Event Type:</b> <?php echo $event->event_type; ?><br>
               <b>Location:</b> <?php echo $event->event_location; ?><br>
               <b>Start Time:</b> <?php echo Carbon\Carbon::parse($event->event_start_date)->format('d M, Y H:i a'); ?><br>
               <b>End Time:</b> <?php echo Carbon\Carbon::parse($event->event_end_date)->format('d M, Y H:i a'); ?><br>
               <b>Status:</b> <a class="btn btn-sm btn-warning"><?php echo $event->status; ?></a><br>
            </h4>
            <h3>Organized By:</h3>
            <h4>
               <b>User Name:</b> <?php echo $event->user->f_name; ?> <?php echo $event->user->l_name; ?><br>
               <b>Email:</b> <?php echo $event->user->email; ?><br>
               <b>Phone Number:</b><?php echo $event->user->phone_number; ?>

            </h4>
         </div>
      </div>
   </div>
</div>
<p id="event_lat" hidden><?php echo e($event->event_location_lat); ?></p>
<p id="event_long" hidden><?php echo e($event->event_location_long); ?></p>
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
            <?php $__currentLoopData = $event->guests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $guest): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <tr>
                  <td><?php echo $guest->first_name; ?> <?php echo $guest->last_name; ?></td>
                  <td><?php echo $guest->status; ?></td>
                  <td><?php echo $guest->ticket_title; ?></td>
                  <td>Ksh. <?php echo number_format($guest->ticket_price); ?></td>
               </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </tbody>
      </table>
   </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>
   let lat = document.getElementById('event_lat').innerHTML
   let long = document.getElementById('event_long').innerHTML

   var mapInstance;
   var marker;

   console.log(lat)

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
<script src="<?php echo e(config('services.maps.key')); ?>" async defer></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\laravel\tupange-admin\resources\views/modules/events/details.blade.php ENDPATH**/ ?>