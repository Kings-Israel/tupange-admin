<?php $__env->startSection('title','Resolution Center | Tupange'); ?>
<?php $__env->startSection('stylesheets'); ?>
   <style>
      .issues {
         list-style: none;
         display: flex;
         flex-direction: column;
         margin-left: -45px;
      }
      .issues > .issue-item > .issue-item-link h5 {
         display: -webkit-box;
         -webkit-line-clamp: 3;
         -webkit-box-orient: vertical;
         overflow: hidden;
      }
      .issues > .issue-item {
         margin-bottom: 10px;
         padding: 15px;
         transition: .3s ease;
      }
      .issues .issue-item:hover {
         background-color: rgb(212, 212, 212);
         border-radius: 5px;
      }
      .issue-item-link {
         display: flex;
      }
      .issue-item-link img {
         width: 32px;
         height: 32px;
         object-fit: cover;
         border-radius: 50%;
         margin-right: 2px;
      }
      .issue {
         display: flex;
      }
      .issue-user-img img{
         width: 50px;
         height: 50px;
         border-radius: 50%;
         object-fit: cover;
         margin-right: 2px;
      }
      .delete-issue-link {
         float: right;
      }
      .responses {
         background: rgb(233, 233, 233);
         padding: 15px;
         border-radius: 5px;
      }

      .response {
         display: flex;
         background: rgb(199, 199, 199);
         padding: 15px;
         border-radius: 5px;
         margin-bottom: 1px;
      }
      .responses > .admin-response {
         border: 3px solid rgb(84, 84, 84);
      }
      .responses > .admin-response img {
         border: 3px solid rgb(84, 84, 84);
      }
      .response-user-image {
         width: 50px;
         height: 50px;
         margin-right: 10px;
         border-radius: 50%;
         object-fit: cover;
      }
      .btn-reply {
         margin: -15px 0 10px 0;
         padding: 10px;
         background-color: #1DA1F2;
         color: #fff;
         border-radius: 3px;
      }
   </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
   <div class="row">
      <div class="col-md-4">
         <div class="card">
            <div class="card-header">
               Raised Issues
            </div>
            <div class="card-body">
               <ul class="issues">
                  <?php $__empty_1 = true; $__currentLoopData = $issues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $issue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                     <li class="issue-item">
                        <a href="<?php echo e(route('resolution-center.issue', $issue->id)); ?>" class="issue-item-link">
                           <img src="<?php echo e(config('services.app_url.url').'/storage/user/avatar/'.$issue->user->avatar); ?>" alt="">
                           <h5><?php echo e($issue->issue); ?></h5>
                        </a>
                        <a href="<?php echo e(route('resolution-center.issue.delete', $issue->id)); ?>" class="delete-issue-link">
                           <i class="la la-trash-alt"></i>Delete
                        </a>
                        <hr>
                     </li>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                     <li class="issue-item no-issue-items text-center">No Issues have been raised yet...</li>
                  <?php endif; ?>
               </ul>
            </div>
         </div>
      </div>
      <div class="col-md-8">
         <div class="card">
            <div class="card-header">
               Raised Issue Details and Response
            </div>
            <?php if($issueDetails): ?>
               <?php echo $__env->make('partials._raised-issue', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php else: ?>
               <h4 class="m-2 text-center">Select a raised issue to view details here...</h4>
            <?php endif; ?>
         </div>
      </div>
   </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/TUPANGE/tupange-admin/resources/views/modules/resolution-center/index.blade.php ENDPATH**/ ?>