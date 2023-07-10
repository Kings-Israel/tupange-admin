<!-- services.edit.blade.php -->


<?php $__env->startSection('breadcrumb'); ?>
   <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
         <h3 class="content-header-title mb-0 d-inline-block"><i class="far fa-bullhorn"></i> Services</h3>
         <div class="row breadcrumbs-top d-inline-block">
            <div class="breadcrumb-wrapper col-12">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?php echo url('/'); ?>">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Service</a></li>
                  <li class="breadcrumb-item active">Edit</li>
               </ol>
            </div>
         </div>
      </div>
      <div class="content-header-right col-md-6 col-12"></div>
   </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <form action="<?php echo e(route('services.update', $service->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>

            <div class="form-group">
                <label for="service_title">Service Title</label>
                <input type="text" class="form-control" id="service_title" name="service_title" value="<?php echo e($service->service_title); ?>">
            </div>

            <div class="form-group">
                <label for="category">Category</label>
                <select class="form-control" id="category" name="category">
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($category->id); ?>" <?php echo e($service->category->id == $category->id ? 'selected' : ''); ?>>
                            <?php echo e($category->name); ?>

                        </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <div class="form-group">
                <label for="service_contact_email">Contact Email</label>
                <input type="email" class="form-control" id="service_contact_email" name="service_contact_email" value="<?php echo e($service->service_contact_email); ?>">
            </div>

            <div class="form-group">
                <label for="service_contact_phone_number">Contact Phone Number</label>
                <input type="text" class="form-control" id="service_contact_phone_number" name="service_contact_phone_number" value="<?php echo e($service->service_contact_phone_number); ?>">
            </div>

            <div class="form-group">
                <label for="vendor">Vendor</label>
                <select class="form-control" id="vendor" name="vendor">
                    <?php $__currentLoopData = $vendors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vendor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($vendor->id); ?>" <?php echo e($service->vendor->id == $vendor->id ? 'selected' : ''); ?>>
                            <?php echo e($vendor->company_name); ?>

                        </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>
    <style>
        .custom-form {
            max-width: 500px;
            margin: 0 auto;
        }

        .custom-form .form-group label {
            font-weight: bold;
        }

        .custom-form button[type="submit"] {
            margin-top: 20px;
        }
    </style>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/TUPANGE/tupange-admin/resources/views/modules/services/edit.blade.php ENDPATH**/ ?>