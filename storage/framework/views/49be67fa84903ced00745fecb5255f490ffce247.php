<?php $__env->startSection('title','Services'); ?>

<?php $__env->startSection('breadcrumb'); ?>
   <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
         <h3 class="content-header-title mb-0 d-inline-block"><i class="far fa-bullhorn"></i> Services</h3>
         <div class="row breadcrumbs-top d-inline-block">
            <div class="breadcrumb-wrapper col-12">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?php echo url('/'); ?>">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Services</a></li>
                  <li class="breadcrumb-item active">List</li>
               </ol>
            </div>
         </div>
      </div>
      <div class="content-header-right col-md-6 col-12"></div>
   </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
   <?php echo $__env->make('partials._messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <div class="row">
      <div class="col-md-12">
         <div class="card">
            <div class="card-body">
               <h4>All Services</h4>
               <hr>
               <table class="table table-striped table-bordered zero-configuration">
   <thead>
      <tr>
         <th width="1%">#</th>
         <th></th>
         <th>Title</th>
         <th>Category</th>
         <th>Orders Count</th>
         <th>Email</th>
         <th>Phone number</th>
         <th>Vendor</th>
         <th>Actions</th>
      </tr>
   </thead>
   <tbody>
      <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $count=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <tr>
            <td><?php echo $count+1; ?></td>
            <td></td>
            <td>
               <?php echo $item->service_title; ?>

               <?php if($item->featured == 1): ?>
                  <span class="badge-warning" style="padding: 0 5px; color: white; border-radius: 50px; cursor: pointer">Featured</span>
               <?php endif; ?>
               <?php if($item->status == 1): ?>
                  <span class="badge-success" style="padding: 0 5px; color: white; border-radius: 50px; cursor: pointer">Active</span>
               <?php else: ?>
                  <span class="badge-danger" style="padding: 0 5px; color: white; border-radius: 50px; cursor: pointer">Disabled</span>
               <?php endif; ?>
            </td>
            <td><?php echo $item->category ? $item->category->name : ''; ?></td>
            <td><?php echo $item->orders_count; ?></td>
            <td><?php echo $item->service_contact_email; ?></td>
            <td><?php echo $item->service_contact_phone_number; ?></td>
            <td><?php echo $item->vendor ? $item->vendor->company_name : ''; ?></td>

            <td>
               <div class="dropdown">
                  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton<?php echo e($item->id); ?>" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Actions
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton<?php echo e($item->id); ?>">
                     <!-- Edit Button -->
                     <a class="dropdown-item" href="<?php echo e(route('services.edit', $item->id)); ?>">Edit</a>

                     <?php if($item->featured == 1): ?>
                        <a class="dropdown-item" href="<?php echo e(route('services.unfeature', $item->id)); ?>">Unfeature</a>
                     <?php else: ?>
                        <a class="dropdown-item" href="<?php echo e(route('services.feature', $item->id)); ?>">Feature</a>
                     <?php endif; ?>
                     <?php if($item->status == 1): ?>
                        <a class="dropdown-item" href="<?php echo e(route('services.disable', $item->id)); ?>">Disable</a>
                     <?php else: ?>
                        <a class="dropdown-item" href="<?php echo e(route('services.activate', $item->id)); ?>">Activate</a>
                     <?php endif; ?>


                     <!-- Delete Button -->
                     <form action="<?php echo e(route('services.destroy', $item->id)); ?>" method="POST" style="display: inline;">
                     <?php echo csrf_field(); ?>
                     <?php echo method_field('DELETE'); ?>
                     <button type="submit" class="dropdown-item" onclick="return confirm('Are you sure you want to delete this service?')">Delete</button>
                     </form>
                  </div>
               </div>
            </td>

         </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   </tbody>
</table>


            </div>
         </div>
      </div>
   </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(function() {
   $('.switch input').on('change', function() {
      var serviceId = $(this).data('service-id');
      var featured = this.checked ? 1 : 0;

      // Perform an AJAX request to update the "featured" status
      $.ajax({
         method: 'POST',
         url: '/update-featured',
         data: {
            _token: '<?php echo e(csrf_token()); ?>',
            serviceId: serviceId,
            featured: featured
         },
         success: function(response) {
            // Handle success response, if needed
         },
         error: function(xhr, status, error) {
            // Handle error response, if needed
         }
      });
   });
});

</script>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/TUPANGE/tupange-admin/resources/views/modules/services/index.blade.php ENDPATH**/ ?>