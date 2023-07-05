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
            <div class="card-header">All Vendor services Information</div>
            <div class="card-body">
               <table class="table table-striped table-bordered zero-configuration">
                  <thead>
                     <tr>
                        <th width="1%">#</th>
                        <th>OrderID</th>
                        <th>Amount</th>
                        <th>Customer</th>
                        <th>Order Date</th>
                        <th>Status</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $count=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                           <td><?php echo $count+1; ?></td>
                           <td><?php echo $item->order_id; ?></td>
                           <?php if($item->service_pricing): ?>
                              <td><?php echo e($item->service_pricing->service_pricing_title); ?> <strong style="display: flex;">(Ksh. <p><?php echo e(number_format($item->service_pricing->service_pricing_price)); ?></p>)</strong></td>
                           <?php elseif($item->order_quotation): ?>
                              <td><?php echo e($item->order_quotation->order_pricing_title); ?> <strong style="display: flex;">(Ksh. <p><?php echo e(number_format($item->order_quotation->order_pricing_price)); ?></p>)</strong></td>
                           <?php else: ?>
                              <td>Awaiting Quote</td>
                           <?php endif; ?>
                           <td><?php echo $item->user->f_name; ?> <?php echo $item->user->l_name; ?></td>
                           <td><?php echo date('F jS, Y', strtotime($item->created_at)); ?></td>
                           <td><span class="badge"><?php echo $item->status; ?></span></td>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\laravel\tupange-admin\resources\views/modules/vendors/orders.blade.php ENDPATH**/ ?>