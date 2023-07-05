<?php $__env->startSection('title','User Details'); ?>
<?php $__env->startSection('breadcrumb'); ?>
   <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
         <h3 class="content-header-title mb-0 d-inline-block"><i class="fal fa-users"></i> Users</h3>
         <div class="row breadcrumbs-top d-inline-block">
            <div class="breadcrumb-wrapper col-12">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?php echo url('/'); ?>">Home</a></li>
                  <li class="breadcrumb-item"><a href="<?php echo e(route('users.index')); ?>">Users</a></li>
                  <li class="breadcrumb-item active"><?php echo $user->f_name; ?> <?php echo $user->l_name; ?></li>
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
      <div class="col-12 col-sm-7">
         <div class="media mb-2">
            <a class="mr-1" href="#">
               <img src="https://ui-avatars.com/api/?name=<?php echo $user->f_name; ?>&rounded=true&size=52" alt="users view avatar" class="users-avatar-shadow rounded-circle" height="52" width="52">
            </a>
            <div class="media-body pt-25">
               <h4 class="media-heading">
                  <span class="users-view-name"><?php echo $user->f_name; ?> <?php echo e($user->l_name); ?></span>
               </h4>
               <b>Email:</b>
               <span class="users-view-id"><?php echo $user->email; ?></span><br>
               <b>Phone Number:</b>
               <span class="users-view-id"><?php echo $user->phone_number; ?></span>
            </div>
            <?php if($user->is_suspended): ?>
               <a href="<?php echo route('user.status.change',$user->id); ?>" class="btn btn-success btn-sm">Activate</a>
            <?php else: ?>
               <a href="<?php echo route('user.status.change',$user->id); ?>" class="btn btn-danger btn-sm">Suspend</a>
            <?php endif; ?>
         </div>
      </div>
      <div class="col-12 col-sm-5 px-0 d-flex justify-content-end align-items-center px-1 mb-2">
         
      </div>
   </div>
   <div class="row">
      <div class="col-md-12">
         <div class="card">
            <div class="card-body">
               <h4 class="mb-2">Orders</h4>
               <table class="table table-striped table-bordered zero-configuration">
                  <thead>
                     <tr>
                        <th width="1%">#</th>
                        <th>OrderID</th>
                        <th>Amount</th>
                        
                        <th>Order Date</th>
                        <th>Vendor</th>
                        <th>Status</th>
                        <th>Action</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $count=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                           <td><?php echo $count+1; ?></td>
                           <td><?php echo $item->order_id; ?></td>
                           <td>ksh <?php echo number_format($item->service_pricing_price); ?></td>
                           
                           <td><?php echo date('F jS, Y', strtotime($item->orderDate)); ?></td>
                           <td><?php echo $item->company_name; ?></td>
                           <td><span class="badge"><?php echo $item->status; ?></span></td>
                           <td>
                              <a href="<?php echo e(route('orders.details', $item->id)); ?>">
                                 <span class="badge-success" style="padding: 0 5px; color: white; border-radius: 3px; cursor: pointer">View</span>
                              </a>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\laravel\tupange-admin\resources\views/modules/users/details.blade.php ENDPATH**/ ?>