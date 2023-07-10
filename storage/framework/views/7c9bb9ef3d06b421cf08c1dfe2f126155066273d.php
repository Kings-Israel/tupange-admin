<?php $__env->startSection('title','Category | Create'); ?>
<?php $__env->startSection('breadcrumb'); ?>
   <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
         <h3 class="content-header-title mb-0 d-inline-block"><i class="fal fa-folder-tree"></i> About Us Content</h3>
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
<?php echo Form::model($content, ['route' => ['content.about.update', $content->id], 'method'=>'post', 'enctype'=>'multipart/form-data']); ?>

   <div class="card">
      <div class="card-body">
         <?php echo $__env->make('partials._messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <!-- Text inputs -->
         <div class="row">
            <div class="col-md-6">
               <div class="form-group required">
                  <?php echo Form::label('Main Content', 'Main Content', array('class'=>'control-label')); ?>

                  <?php echo Form::textarea('content', null, array('class' => 'form-control', 'placeholder' => 'Content','required' => '')); ?>

               </div>
               <div class="form-group form-group-default">
                  <?php echo Form::label('About Us Main Image', 'Main Image', array('class'=>'control-label')); ?>

                  <?php echo Form::file('about_us_image',array('class' => 'form-control','files'=> true)); ?>

               </div>
               <div class="form-group required">
                  <?php echo Form::label('Planner Content', 'Planner Content', array('class'=>'control-label')); ?>

                  <?php echo Form::textarea('for_planner_content', null, array('class' => 'form-control', 'placeholder' => 'Email','required' => '')); ?>

               </div>
               <div class="form-group form-group-default">
                  <?php echo Form::label('Planner Image', 'For Planner Image', array('class'=>'control-label')); ?>

                  <?php echo Form::file('for_planner_image',array('class' => 'form-control','files'=> true)); ?>

               </div>
               <div class="form-group required">
                  <?php echo Form::label('Vendor Content', 'Vendor Content', array('class'=>'control-label')); ?>

                  <?php echo Form::textarea('for_vendor_content', null, array('class' => 'form-control', 'placeholder' => 'Email','required' => '')); ?>

               </div>
               <div class="form-group form-group-default">
                  <?php echo Form::label('Vendor Image', 'For Vendor Image', array('class'=>'control-label')); ?>

                  <?php echo Form::file('for_vendor_image',array('class' => 'form-control','files'=> true)); ?>

               </div>
            </div>
            <div class="col-md-6">
               <div class="form-group required">
                  <?php echo Form::label('Step One TItle', 'Step One Title', array('class'=>'control-label')); ?>

                  <?php echo Form::text('step_one_title', null, array('class' => 'form-control', 'placeholder' => 'Email','required' => '')); ?>

               </div>
               <div class="form-group required">
                  <?php echo Form::label('Step One Content', 'Step One Content', array('class'=>'control-label')); ?>

                  <?php echo Form::textarea('step_one_content', null, array('class' => 'form-control', 'placeholder' => 'Email','required' => '')); ?>

               </div>
               <div class="form-group required">
                  <?php echo Form::label('Step Two Title', 'Step Two Title', array('class'=>'control-label')); ?>

                  <?php echo Form::text('step_two_title', null, array('class' => 'form-control', 'placeholder' => 'Email','required' => '')); ?>

               </div>
               <div class="form-group required">
                  <?php echo Form::label('Step Two Content', 'Step Two Content', array('class'=>'control-label')); ?>

                  <?php echo Form::textarea('step_two_content', null, array('class' => 'form-control', 'placeholder' => 'Email','required' => '')); ?>

               </div>
               <div class="form-group required">
                  <?php echo Form::label('Step Three Title', 'Step Three Title', array('class'=>'control-label')); ?>

                  <?php echo Form::text('step_three_title', null, array('class' => 'form-control', 'placeholder' => 'Email','required' => '')); ?>

               </div>
               <div class="form-group required">
                  <?php echo Form::label('Step Three Content', 'Step Three Content', array('class'=>'control-label')); ?>

                  <?php echo Form::textarea('step_three_content', null, array('class' => 'form-control', 'placeholder' => 'Email','required' => '')); ?>

               </div>
            </div>
         </div>
         <center>
            <button type="submit" name="button" class="btn btn-success submit"><i class="far fa-save"></i> Update Content</button>
            <img src="<?php echo asset('assets/images/loader.gif'); ?>" alt="" class="submit-load" style="width:10%">
         </center>
      </div>
   </div>
<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/TUPANGE/tupange-admin/resources/views/modules/content/about_us.blade.php ENDPATH**/ ?>