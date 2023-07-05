<?php $__env->startSection('title','Category'); ?>
<?php $__env->startSection('breadcrumb'); ?>
   <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
         <h3 class="content-header-title mb-0 d-inline-block"><i class="fal fa-folder-tree"></i> Category</h3>
         <div class="row breadcrumbs-top d-inline-block">
            <div class="breadcrumb-wrapper col-12">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?php echo url('/'); ?>">Home</a></li>
                  <li class="breadcrumb-item active"><a href="#">Category</a></li>
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
               <th width="12%"></th>
               <th>Title</th>
               <th>Description</th>
               <th width="8%">Status</th>
               <th width="8%">Action</th>
            </tr>
         </thead>
         <tbody>
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $count=>$cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <tr>
                  <td><?php echo $count+1; ?></td>
                  <td><img src="<?php echo asset('category/'.$cat->image); ?>" alt="" width="100%"></td>
                  <td><?php echo $cat->name; ?></td>
                  <td><?php echo $cat->description; ?></td>
                  <td>
                     <span class="badge <?php echo $cat->status; ?>"><?php echo $cat->status; ?></span>
                  </td>
                  <td>
                     <a href="<?php echo route('category.edit',$cat->id); ?>" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                  </td>
               </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </tbody>
      </table>
   </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/tupangeadmin/resources/views/modules/category/index.blade.php ENDPATH**/ ?>