<?php $__env->startSection('title','Events Details'); ?>
<?php $__env->startSection('breadcrumb'); ?>
   <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
         <h3 class="content-header-title mb-0 d-inline-block"><i class="fal fa-calendar"></i> Orders</h3>
         <div class="row breadcrumbs-top d-inline-block">
            <div class="breadcrumb-wrapper col-12">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?php echo url('/'); ?>">Home</a></li>
                  <li class="breadcrumb-item active"><a href="<?php echo e(route('orders.index')); ?>">Orders</a></li>
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
            <img src="<?php echo config('services.app_url.url').'/storage/service/cover_image/'.$order->service->service_image; ?>" alt="" width="100%">
         </div>
         <div class="col-md-4">
            <h4>
               <b>Vendor:</b>
               <a href="<?php echo e(route('vendors.details', $order->service->vendor->id)); ?>">
                  <?php echo $order->service->vendor->company_name; ?>

               </a>
               <br>
               <b>Service:</b> <?php echo $order->service->service_title; ?><br>
               <b>Service Category:</b> <?php echo $order->service->category->name; ?><br>
               <b>Client:</b>
               <a href="<?php echo e(route('users.details', $order->user->id)); ?>">
                  <?php echo $order->user->f_name; ?> <?php echo $order->user->l_name; ?>

               </a>
               <br>
               <b>Order Date:</b> <?php echo $order->created_at; ?><br>
            </h4>
         </div>
         <div class="col-md-4">
            <h4>
               <b>Status:</b> <a class="btn btn-md btn-warning text-white" style="font-weight: 800; font-size: 12px"><?php echo $order->status; ?></a><br>
               <?php if($order->status_reason != NULL): ?>
                  <b>Status Reason:</b> <?php echo $order->status_reason; ?>

               <?php endif; ?>
            </h4>
         </div>
      </div>
   </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/TUPANGE/tupange-admin/resources/views/modules/orders/show.blade.php ENDPATH**/ ?>