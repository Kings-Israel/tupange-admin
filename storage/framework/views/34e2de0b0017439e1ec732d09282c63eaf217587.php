<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
	<?php echo $__env->make('partials._head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<!-- END: Head-->
	<!-- BEGIN: Body-->
	<body class="vertical-layout vertical-menu-modern 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
			<!-- BEGIN: Header-->
			<?php echo $__env->make('partials._header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

			<!-- END: Header-->
			<!-- BEGIN: Main Menu-->
			<?php echo $__env->make('partials._menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			<!-- END: Main Menu-->
			<!-- BEGIN: Content-->
			<div class="app-content content">
				<div class="content-overlay"></div>
				<div class="content-wrapper">
					<?php echo $__env->yieldContent('breadcrumb'); ?>
					<div class="content-body">
						<?php echo $__env->yieldContent('content'); ?>
					</div>
				</div>
			</div>
			<!-- END: Content-->
			<!-- BEGIN: Customizer-->
			<!-- End: Customizer-->
		<!-- Buynow Button-->
		
		<div class="sidenav-overlay"></div>
		<div class="drag-target"></div>

		<!-- BEGIN: Footer-->
		<footer class="footer footer-static footer-light navbar-border navbar-shadow">
			<p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
				<span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2021 - <?php echo date('Y') ?></span>
			</p>
		</footer>
		<!-- END: Footer-->

		<?php echo $__env->make('partials._javascripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</body>
	<!-- END: Body-->
</html>
<?php /**PATH C:\xampp\htdocs\projects\laravel\tupange-admin\resources\views/layouts/app.blade.php ENDPATH**/ ?>