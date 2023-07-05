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
            <a class="flex-sm-fill text-sm-center nav-link" href="<?php echo route('vendors.orders',$details->id); ?>">Orders</a>
         </nav>
         <div class="card">
            <div class="card-header">All Vendo services Information</div>
            <div class="card-body">
               <table class="table table-striped table-bordered zero-configuration">
                  <thead>
                     <tr>
                        <th width="1%">#</th>
                        <th></th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Amount</th>
                        <th>Email</th>
                        <th>Phone number</th>
                        <th>Vendor</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $count=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                           <td><?php echo $count+1; ?></td>
                           <td></td>
                           <td><?php echo $item->service_title; ?></td>
                           <td><?php echo $item->category_id; ?></td>
                           <td>0</td>
                           <td><?php echo $item->service_contact_email; ?></td>
                           <td><?php echo $item->service_contact_phone_number; ?></td>
                           <td><a href="" class="btn-success btn-sm">view</a></td>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/tupangeadmin/resources/views/modules/vendors/services.blade.php ENDPATH**/ ?>