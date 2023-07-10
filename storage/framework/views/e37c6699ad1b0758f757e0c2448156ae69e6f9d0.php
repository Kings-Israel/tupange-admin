<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
	<!-- BEGIN: Head-->
	<?php $__env->startSection('title','Reset Password'); ?>
	<?php echo $__env->make('partials._head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <!-- BEGIN: Body-->
  <body class="vertical-layout vertical-menu-modern 1-column  bg-cyan bg-lighten-2 blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column">
		<!-- BEGIN: Content-->
		<div class="app-content content">
			<div class="content-overlay"></div>
			<div class="content-wrapper">
				<div class="content-header row">
				</div>
				<div class="content-body">
					<section class="row flexbox-container">
						<div class="col-12 d-flex align-items-center justify-content-center">
							<div class="col-lg-4 col-md-8 col-10 box-shadow-2 p-0">
								<div class="card border-grey border-lighten-3 m-0">
									<div class="card-header border-0">
										<div class="card-title text-center">
											<div class="p-1">
												<h1>Tupange Admin</h1>
											</div>
										</div>
										<h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2"><span>Reset Password</span></h6>
									</div>
									<div class="card-content">
										<div class="card-body pt-0">
											<?php if(session('status')): ?>
												<div class="alert alert-success" role="alert">
													<?php echo e(session('status')); ?>

												</div>
											<?php endif; ?>
											<form class="form-horizontal" action="<?php echo e(route('password.email')); ?>" method="post">
												<?php echo csrf_field(); ?>
												<fieldset class="form-group floating-label-form-group">
													<label for="user-name">Your Email</label>
													<input type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" placeholder="Your Email" value="<?php echo e(old('email')); ?>">
													<?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
														<span class="invalid-feedback" role="alert">
															<strong><?php echo e($message); ?></strong>
														</span>
													<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
												</fieldset>
												<button type="submit" class="btn btn-outline-info btn-block"><i class="ft-unlock"></i> Send Password Reset Link</button>
											</form>
										</div>
									</div>
									<div class="card-footer border-0">
										<p class="text-center"><a href="<?php echo url('/'); ?>" class="card-link">Login</a></p>
									 </div>
								</div>
							</div>
						</div>
					</section>
				</div>
			</div>
		</div>
		<!-- END: Content-->
	 	<?php echo $__env->make('partials._javascripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</body>
	<!-- END: Body-->
</html>
<?php /**PATH /var/www/html/TUPANGE/tupange-admin/resources/views/auth/passwords/email.blade.php ENDPATH**/ ?>