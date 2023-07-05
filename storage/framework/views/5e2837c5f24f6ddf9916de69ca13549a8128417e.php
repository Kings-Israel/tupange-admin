<?php $__env->startSection('title','User Details'); ?>
<?php $__env->startSection('breadcrumb'); ?>
   <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
         <h3 class="content-header-title mb-0 d-inline-block"><i class="fal fa-users"></i> Users</h3>
         <div class="row breadcrumbs-top d-inline-block">
            <div class="breadcrumb-wrapper col-12">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?php echo url('/'); ?>">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Users</a></li>
                  <li class="breadcrumb-item active"><?php echo $user->name; ?></li>
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
               <img src="https://ui-avatars.com/api/?name=<?php echo $user->name; ?>&rounded=true&size=52" alt="users view avatar" class="users-avatar-shadow rounded-circle" height="52" width="52">
            </a>
            <div class="media-body pt-25">
               <h4 class="media-heading">
                  <span class="users-view-name"><?php echo $user->name; ?></span>
               </h4>
               <b>Email:</b>
               <span class="users-view-id"><?php echo $user->email; ?></span><br>
               <b>Phone Number:</b>
               <span class="users-view-id"><?php echo $user->phone_number; ?></span>
            </div>
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

            </div>
         </div>
      </div>
   </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\devint\admin.tupange.com\resources\views/modules/users/details.blade.php ENDPATH**/ ?>