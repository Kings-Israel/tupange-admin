<?php $__env->startSection('title','Category | Create'); ?>
<?php $__env->startSection('breadcrumb'); ?>
   <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
         <h3 class="content-header-title mb-0 d-inline-block"><i class="fal fa-folder-tree"></i> Footer Content</h3>
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
<?php echo Form::model($content, ['route' => ['content.footer.update', $content->id], 'method'=>'post', 'enctype'=>'multipart/form-data']); ?>

   <div class="row">
      <div class="col-md-6">
         <div class="card">
            <div class="card-body">
               <?php echo $__env->make('partials._messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
               <!-- Text inputs -->
               <div class="form-group required">
                  <?php echo Form::label('Main Content', 'Main Content', array('class'=>'control-label')); ?>

                  <?php echo Form::textarea('content', null, array('class' => 'form-control', 'placeholder' => 'Content','required' => '')); ?>

               </div>
               <div class="form-group required">
                  <?php echo Form::label('Contact Us Email', 'Contact Us Email', array('class'=>'control-label')); ?>

                  <?php echo Form::text('contact_us_email', null, array('class' => 'form-control', 'placeholder' => 'Email','required' => '')); ?>

               </div>
               <div class="form-group required">
                  <?php echo Form::label('Contact Us Phone Number', 'Contact Us Phone Number', array('class'=>'control-label')); ?>

                  <?php echo Form::text('contact_us_phone_number', null, array('class' => 'form-control', 'placeholder' => 'Email','required' => '')); ?>

               </div>
               <div class="form-group required">
                  <?php echo Form::label('Contact Us Address', 'Contact Us Address', array('class'=>'control-label')); ?>

                  <?php echo Form::text('contact_us_address', null, array('class' => 'form-control', 'placeholder' => 'Email','required' => '')); ?>

               </div>
               
               
               <!-- /text inputs -->
               <center>
                  <button type="submit" name="button" class="btn btn-success submit"><i class="far fa-save"></i> Update Content</button>
                  <img src="<?php echo asset('assets/images/loader.gif'); ?>" alt="" class="submit-load" style="width:10%">
               </center>
            </div>
         </div>
      </div>
   </div>
<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\laravel\tupange-admin\resources\views/modules/content/footer.blade.php ENDPATH**/ ?>