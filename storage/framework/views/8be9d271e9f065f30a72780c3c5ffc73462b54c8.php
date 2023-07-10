<?php if(Session::has('success')): ?>
	<div class="alert alert-success no-border">
		<button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
		<?php echo e(Session::get('success')); ?>

   </div>
<?php endif; ?>

<?php if(Session::has('error')): ?>
	<div class="alert alert-danger no-border">
		<button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
		<?php echo e(Session::get('error')); ?>

   </div>
<?php endif; ?>

<?php if(Session::has('warning')): ?>
	<div class="alert alert-warning no-border">
		<button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
		<?php echo e(Session::get('warning')); ?>

   </div>
<?php endif; ?>

<?php if(count($errors) > 0): ?>
	<div class="alert alert-danger no-border">
		<button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
		<span class="text-semibold">Errors!</span><br>
		<ul>
			<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<li><?php echo e($error); ?></li>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</ul>
   </div>
<?php endif; ?>
<?php /**PATH /var/www/html/TUPANGE/tupange-admin/resources/views/partials/_messages.blade.php ENDPATH**/ ?>