<?php $__env->startSection('title','Event Payments'); ?>
<?php $__env->startSection('breadcrumb'); ?>
   <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
         <h3 class="content-header-title mb-0 d-inline-block"><i class="fal fa-credit-card"></i> Event Tickets Payments</h3>
         <div class="row breadcrumbs-top d-inline-block">
            <div class="breadcrumb-wrapper col-12">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?php echo url('/'); ?>">Home</a></li>
                  <li class="breadcrumb-item active"><a href="#">Payments</a></li>
               </ol>
            </div>
         </div>
      </div>
      <div class="content-header-right col-md-6 col-12"></div>
   </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('event-ticket-payments', [])->html();
} elseif ($_instance->childHasBeenRendered('vLyRFov')) {
    $componentId = $_instance->getRenderedChildComponentId('vLyRFov');
    $componentTag = $_instance->getRenderedChildComponentTagName('vLyRFov');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('vLyRFov');
} else {
    $response = \Livewire\Livewire::mount('event-ticket-payments', []);
    $html = $response->html();
    $_instance->logRenderedChild('vLyRFov', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\laravel\tupange-admin\resources\views/modules/payments/event-payments.blade.php ENDPATH**/ ?>