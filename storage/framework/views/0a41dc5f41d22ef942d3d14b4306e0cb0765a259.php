<?php $__env->startSection('title','Events'); ?>
<?php $__env->startSection('breadcrumb'); ?>
   <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
         <h3 class="content-header-title mb-0 d-inline-block"><i class="fal fa-calendar"></i> Events</h3>
         <div class="row breadcrumbs-top d-inline-block">
            <div class="breadcrumb-wrapper col-12">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?php echo url('/'); ?>">Home</a></li>
                  <li class="breadcrumb-item active"><a href="#">Events</a></li>
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
            <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $count=>$event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <tr>
                  <td><?php echo $count+1; ?></td>
                  <td><?php echo $event->event_name; ?></td>
                  <td><?php echo $event->event_type; ?></td>
                  <td><?php echo Carbon\Carbon::parse($event->event_start_date)->format('d M, Y H:i a'); ?></td>
                  <td><?php echo Carbon\Carbon::parse($event->event_end_date)->format('d M, Y H:i a'); ?></td>
                  <td><?php echo $event->status; ?></td>
                  <td><a href="<?php echo e(route('events.details', $event->id)); ?>" class="btn btn-success btn-sm">View</a></td>
               </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </tbody>
      </table>
   </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/TUPANGE/tupange-admin/resources/views/modules/events/index.blade.php ENDPATH**/ ?>