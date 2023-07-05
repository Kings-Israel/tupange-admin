<?php $__env->startSection('title','Category | Create'); ?>
<?php $__env->startSection('breadcrumb'); ?>
   <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
         <h3 class="content-header-title mb-0 d-inline-block"><i class="fal fa-folder-tree"></i> Category</h3>
         <div class="row breadcrumbs-top d-inline-block">
            <div class="breadcrumb-wrapper col-12">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?php echo url('/'); ?>">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Category</a></li>
                  <li class="breadcrumb-item active">Create</li>
               </ol>
            </div>
         </div>
      </div>
      <div class="content-header-right col-md-6 col-12"></div>
   </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('partials._messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo Form::open(array('route' => 'category.store','enctype'=>'multipart/form-data','method' => 'post')); ?>

<?php echo csrf_field(); ?>
<div class="row">
   <div class="col-md-6">
      <div class="card">
         <div class="card-body">
            <!-- Text inputs -->
            <div class="form-group required">
               <?php echo Form::label('title', 'Title', array('class'=>'control-label')); ?>

               <?php echo Form::text('name', null, array('class' => 'form-control', 'placeholder' => 'Title','required' => '')); ?>

            </div>
            <div class="form-group form-group-default">
               <?php echo Form::label('title', 'Image', array('class'=>'control-label')); ?>

               <?php echo Form::file('image',array('class' => 'form-control','files'=> true)); ?>

            </div>
            <div class="form-group required">
               <?php echo Form::label('title', 'Icon', array('class'=>'control-label')); ?>

               <?php echo Form::text('icon', null, array('class' => 'form-control', 'placeholder' => 'Icon')); ?>

            </div>
            <div class="form-group form-group-default">
               <?php echo Form::label('title', 'Active Status', array('class'=>'control-label')); ?>

               <?php echo e(Form::select('status',['' =>'Choose Status','Active' => 'Active', 'Closed' => 'Closed'], null, ['class' => 'form-control'])); ?>

            </div>
            <div class="form-group">
               <?php echo Form::label('title', 'Description', array('class'=>'control-label')); ?>

               <?php echo Form::textarea('description',null,['class'=>'form-control','size' => '4x4', 'placeholder'=>'type....']); ?>

            </div>
            <!-- /text inputs -->
            <center>
               <button type="submit" name="button" class="btn btn-success submit"><i class="far fa-save"></i> Create Category</button>
               <img src="<?php echo url('/'); ?>/public/images/loader.gif" alt="" class="submit-load" style="width:10%">
            </center>
         </div>
      </div>
   </div>
</div>
<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/devint/tupange/admin.tupange.com/resources/views/modules/category/create.blade.php ENDPATH**/ ?>