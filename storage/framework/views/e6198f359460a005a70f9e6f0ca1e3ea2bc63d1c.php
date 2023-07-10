<?php $__env->startSection('title','Vendor Details'); ?>
<?php $__env->startSection('breadcrumb'); ?>
   <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
         <h3 class="content-header-title mb-0 d-inline-block"><i class="fal fa-users"></i> Vendor Details</h3>
         <div class="row breadcrumbs-top d-inline-block">
            <div class="breadcrumb-wrapper col-12">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?php echo url('/'); ?>">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Vendors</a></li>
                  <li class="breadcrumb-item active"><?php echo $details->company_name; ?></li>
               </ol>
            </div>
         </div>
      </div>
      <div class="content-header-right col-md-6 col-12"></div>
   </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
   <?php echo $__env->make('partials._messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <div class="row">
      <div class="col-md-3">
         <div class="card">
            <div class="card-body">
               <h4><?php echo $details->company_name; ?></h4>
            </div>
         </div>
      </div>
      <div class="col-md-9">
         <nav class="nav nav-pills flex-column flex-sm-row mb-1">
            <a class="flex-sm-fill text-sm-center nav-link active" href="#">Details</a>
            <a class="flex-sm-fill text-sm-center nav-link" href="<?php echo route('vendors.services',$details->id); ?>">Services</a>
            <a class="flex-sm-fill text-sm-center nav-link" href="#">Orders</a>
         </nav>
         <div class="card">
            <div class="card-header">Vendor Information</div>
            <div class="card-body">
               <div class="row">
                  <div class="col-md-4">
                     <img class="img-fluid" src="<?php echo config('services.app_url.url').'/storage/vendor/logo/'.$details->company_logo; ?>" alt="">
                  </div>
                  <div class="col-md-8">
                     <h5>
                        <b>Name:</b> <?php echo $details->company_name; ?><br>
                        <b>Email:</b> <?php echo $details->company_email; ?><br>
                        <b>Phone Number:</b> <?php echo $details->company_phone_number; ?><br>
                        <b>Location:</b> <?php echo $details->location; ?><br>
                        <?php if($details->status === 'Suspended'): ?>
                        <b>Status: </b><a href="<?php echo route('vendors.status',$details->id); ?>" class="btn btn-success btn-sm">Activate</a>
                        <?php else: ?>
                        <b>Status:</b> <a href="<?php echo route('vendors.status',$details->id); ?>" class="btn btn-danger btn-sm">Suspend</a>
                        <?php endif; ?>
                     </h5>
                  </div>
                  <div class="col-md-12">
                     <hr>
                     <p><?php echo $details->company_description; ?></p>
                  </div>
               </div>
            </div>

         </div>
      </div>
   </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/TUPANGE/tupange-admin/resources/views/modules/vendors/details.blade.php ENDPATH**/ ?>