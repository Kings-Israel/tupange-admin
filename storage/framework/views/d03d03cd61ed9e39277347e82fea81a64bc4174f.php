<?php $__env->startSection('title','Payments'); ?>
<?php $__env->startSection('breadcrumb'); ?>
   <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
         <h3 class="content-header-title mb-0 d-inline-block"><i class="fal fa-credit-card"></i> Payments</h3>
         <div class="row breadcrumbs-top d-inline-block">
            <div class="breadcrumb-wrapper col-12">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?php echo url('/'); ?>">Home</a></li>
                  <li class="breadcrumb-item active"><a href="#">Payments</a></li>
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
      <?php echo $__env->make('partials._messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <table class="table table-striped table-bordered zero-configuration">
         <thead>
            <tr>
               <th width="1%">#</th>
               <th>OrderID</th>
               <th>Amount</th>
               <th>Customer</th>
               <th>Payment Method</th>
               <th>Transaction ID</th>
               <th>Payment Date</th>
            </tr>
         </thead>
         <tbody>
            <?php $__currentLoopData = $payments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $count=>$payment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <tr>
                  <td><?php echo $count+1; ?></td>
                  <td><?php echo $payment->order->order_id; ?></td>
                  <td>Ksh <?php echo number_format($payment->amount); ?></td>
                  <td><?php echo $payment->user->f_name; ?> <?php echo $payment->user->l_name; ?></td>
                  <td><?php echo $payment->payment_method; ?></td>
                  <td><?php echo $payment->transaction_id; ?></td>
                  <td><?php echo $payment->created_at->format('d M Y'); ?></td>
               </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </tbody>
      </table>
   </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\laravel\tupange-admin\resources\views/modules/payments/index.blade.php ENDPATH**/ ?>