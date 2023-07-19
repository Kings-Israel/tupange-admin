<?php $__env->startSection('title', 'FAQ | Edit'); ?>
<?php $__env->startSection('breadcrumb'); ?>
   <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
         <h3 class="content-header-title mb-0 d-inline-block"><i class="fal fa-folder-tree"></i> FAQs</h3>
         <div class="row breadcrumbs-top d-inline-block">
            <div class="breadcrumb-wrapper col-12">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>">Home</a></li>
                  <li class="breadcrumb-item"><a href="<?php echo e(route('content.faqs')); ?>">FAQs</a></li>
                  <li class="breadcrumb-item active">Edit</li>
               </ol>
            </div>
         </div>
      </div>
      <div class="content-header-right col-md-6 col-12"></div>
   </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
   <?php echo $__env->make('partials._messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <form action="<?php echo e(route('content.faq.update', $edit->id)); ?>" method="POST" enctype="multipart/form-data">
      <?php echo csrf_field(); ?>
      <div class="row">
         <div class="col-md-6">
            <div class="card">
               <div class="card-body">
                  <!-- Text inputs -->
                  <div class="form-group required">
                     <label for="question">Question</label>
                     <input type="text" class="form-control" id="question" name="question" placeholder="Enter Question" required value="<?php echo e($edit->question); ?>">
                  </div>
                  <div class="form-group required">
                     <label for="answer">Answer</label>
                     <textarea class="form-control" id="answer" name="answer" placeholder="Enter Answer"><?php echo e($edit->answer); ?></textarea>
                  </div>
                  <!-- /text inputs -->
                  <center>
                     <button type="submit" class="btn btn-success submit"><i class="far fa-save"></i> Update FAQ</button>
                     <img src="<?php echo e(asset('assets/images/loader.gif')); ?>" alt="" class="submit-load" style="width:10%">
                  </center>
               </div>
            </div>
         </div>
      </div>
   </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/TUPANGE/tupange-admin/resources/views/modules/content/edit-faq.blade.php ENDPATH**/ ?>