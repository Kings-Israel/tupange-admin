<?php $__env->startSection('title','Events Details'); ?>
<?php $__env->startSection('breadcrumb'); ?>
   <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
         <h3 class="content-header-title mb-0 d-inline-block"><i class="fal fa-calendar"></i> Events</h3>
         <div class="row breadcrumbs-top d-inline-block">
            <div class="breadcrumb-wrapper col-12">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?php echo url('/'); ?>">Home</a></li>
                  <li class="breadcrumb-item active"><a href="#">Events</a></li>
                  <li class="breadcrumb-item active"><a href="#">Details</a></li>
               </ol>
            </div>
         </div>
      </div>
      <div class="content-header-right col-md-6 col-12"></div>
   </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('partials._messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="card">
   <div class="card-body">
      <div class="row">
         
         <div class="col-md-4">
            <img src="<?php echo asset('assets/images/party.jpg.'); ?>" width="100%">
         </div>
         <div class="col-md-8">
            <h4>
               <b>Event Title:</b> <?php echo $event->event_name; ?><br>
               <b>Event Type:</b> <?php echo $event->event_type; ?><br>
               <b>Location:</b> <?php echo $event->location; ?><br>
               <b>Start Time:</b> <?php echo $event->event_start_time; ?><br>
               <b>End Time:</b> <?php echo $event->event_end_date; ?><br>
               <b>Status:</b> <a class="btn btn-sm btn-warning"><?php echo $event->status; ?></a><br>
            </h4>
         </div>
      </div>
   </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\laravel\tupangeadmin\resources\views/modules/events/details.blade.php ENDPATH**/ ?>