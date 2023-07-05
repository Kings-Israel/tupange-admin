<?php $__env->startSection('title','Post | Category | LimitlessCMS'); ?>
<?php $__env->startSection('breadcrumb'); ?>
   <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
         <h3 class="content-header-title mb-0 d-inline-block"><i class="fal fa-folder-tree"></i> Post Category</h3>
         <div class="row breadcrumbs-top d-inline-block">
            <div class="breadcrumb-wrapper col-12">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?php echo url('/'); ?>">Home</a></li>
                  <li class="breadcrumb-item"><a href="<?php echo route('pages.index'); ?>">Post</a></li>
                  <li class="breadcrumb-item"><a href="<?php echo route('post.category.index'); ?>">Category</a></li>
                  <li class="breadcrumb-item active">List</li>
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
               <th width="20%">Title</th>
               <th>Description</th>
               <th width="15%">Parent</th>
               <th width="8%">Status</th>
               <th width="11%">Date</th>
               <th width="8%">Action</th>
            </tr>
         </thead>
         <tbody>
            <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <tr>
                  <td><?php echo $count++; ?></td>
                  <td><?php echo $cat->category_name; ?></td>
                  <td><?php echo $cat->description; ?></td>
                  <td>
                     <b>Main Category</b>
                  </td>
                  <td>
                     <span class="badge <?php echo $cat->status; ?>"><?php echo $cat->status; ?></span>
                  </td>
                  <td><?php echo date('M d, Y', strtotime($cat->date)); ?></td>
                  <td>
                     <a href="<?php echo route('post.category.edit',$cat->categoryID); ?>" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                     <a href="<?php echo route('post.category.destroy',$cat->categoryID); ?>" class="btn btn-sm btn-danger delete"><i class="fas fa-trash"></i></a>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/devint/admin.tupange.com/resources/views/modules/category/index.blade.php ENDPATH**/ ?>