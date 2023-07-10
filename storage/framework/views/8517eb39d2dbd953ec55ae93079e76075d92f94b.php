<?php $__env->startSection('title','FAQs'); ?>
<?php $__env->startSection('breadcrumb'); ?>
   <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
         <h3 class="content-header-title mb-0 d-inline-block"><i class="fal fa-folder-tree"></i> FAQs</h3>
         <div class="row breadcrumbs-top d-inline-block">
            <div class="breadcrumb-wrapper col-12">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?php echo url('/'); ?>">Home</a></li>
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
      <a href="<?php echo e(route('content.faq.add')); ?>" class="btn btn-sm btn-info mb-1">Add Faq</a>
      <table class="table table-striped table-bordered zero-configuration">
         <thead>
            <tr>
               <th>Question</th>
               <th>Answer</th>
               <th width="15%">Action</th>
            </tr>
         </thead>
         <tbody>
            <?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <tr>
                  <td><?php echo $faq->question; ?></td>
                  <td><?php echo $faq->answer; ?></td>
                  <td width="15%">
                     <a href="<?php echo route('content.faq.edit', $faq->id); ?>" class="btn btn-sm btn-info">Edit</a>
                     <a href="<?php echo route('content.faq.delete', $faq->id); ?>" class="btn btn-sm btn-danger">Delete</a>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/TUPANGE/tupange-admin/resources/views/modules/content/faq.blade.php ENDPATH**/ ?>