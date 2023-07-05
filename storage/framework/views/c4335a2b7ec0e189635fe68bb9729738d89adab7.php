<?php $__env->startSection('title','Vendor'); ?>
<?php $__env->startSection('stylesheets'); ?>
   <style>
      .img-fluid {
         width: 40px;
         height: 40px;
         border-radius: 50%;
         object-fit: cover;
      }
   </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('breadcrumb'); ?>
   <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
         <h3 class="content-header-title mb-0 d-inline-block"><i class="fal fa-user-friends"></i> Vendor</h3>
         <div class="row breadcrumbs-top d-inline-block">
            <div class="breadcrumb-wrapper col-12">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?php echo url('/'); ?>">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Vendor</a></li>
                  <li class="breadcrumb-item active">List</li>
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
      <div class="col-md-12">
         <div class="card">
            <div class="card-body">
               <h4>Vendor</h4>
               <hr>
               <table class="table table-striped table-bordered zero-configuration">
                  <thead>
                     <tr>
                        <th width="1%">#</th>
                        <th></th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Services Count</th>
                        <th>Action</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php $__currentLoopData = $vendors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $count=>$vendor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                           <td><?php echo $count+1; ?></td>
                           <td><img src="<?php echo e(config('services.app_url.url').'/storage/vendor/logo/'.$vendor->company_logo); ?>" alt="<?php echo e($vendor->company_name); ?>" class="img-fluid" width="30px" height="30px"></td>
                           <td><a href="#"><?php echo e($vendor->company_name); ?></a></td>
                           <td><?php echo e($vendor->company_email); ?></td>
                           <td><?php echo e($vendor->company_phone_number); ?></td>
                           <td><?php echo e($vendor->services->count()); ?></td>
                           <td>
                              <a href="<?php echo route('vendors.details',$vendor->id); ?>" class="btn btn-warning btn-sm">View</a>
                              <?php if($vendor->status === 'Suspended'): ?>
                                 <a href="<?php echo route('vendors.status',$vendor->id); ?>" class="btn btn-success btn-sm">Activate</a>
                              <?php else: ?>
                                 <a href="<?php echo route('vendors.status',$vendor->id); ?>" class="btn btn-danger btn-sm">Suspend</a>
                              <?php endif; ?>
                           </td>
                        </tr>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\laravel\tupange-admin\resources\views/modules/vendors/index.blade.php ENDPATH**/ ?>