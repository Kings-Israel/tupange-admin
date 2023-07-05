<div class="card-body responses">
   <div class="issue">
      <div class="issue-user-img">
         <img src="<?php echo e(config('services.app_url.url').'/storage/user/avatar/'.$issueDetails->user->avatar); ?>" alt="<?php echo e($issue->user->f_name); ?>">
      </div>
      <div class="issue-details">
         <h5><?php echo e($issueDetails->user->f_name); ?> <?php echo e($issueDetails->user->l_name); ?></h5>
         <h4><?php echo e($issueDetails->issue); ?></h4>
         <p><strong><?php echo e($issueDetails->created_at->diffForHumans()); ?></strong></p>
      </div>
   </div>
   <hr>
   <form action="<?php echo e(route('resolution-center.response')); ?>" method="POST">
      <?php echo csrf_field(); ?>
      <input type="hidden" name="raised_issue_id" value="<?php echo e($issueDetails->id); ?>">
      <div class="form-group">
         <label for="response">Enter response</label>
         <textarea name="response" id="response" class="response-textarea form-control" placeholder="Enter your response here..."></textarea>
      </div>
      <button class="btn btn-reply">Reply</button>
   </form>
   <?php $__empty_1 = true; $__currentLoopData = $issueDetails->raisedIssueResponses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $response): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
      <div class="response <?php if($response->isAdminResponse): ?> admin-response <?php endif; ?>">
         <?php if($response->isAdminResponse): ?>
            <img class="response-user-image" src="<?php echo url('/'); ?>/assets/images/user.png" alt="avatar">
         <?php else: ?>
            <img class="response-user-image" src="<?php echo e(config('services.app_url.url').'/storage/user/avatar/'.$response->user->avatar); ?>" alt="<?php echo e($response->user->f_name); ?>" class="avatar">
         <?php endif; ?>
         <span class="response-text">
            <?php if(!$response->isAdminResponse): ?>
               <h5><?php echo e($response->user->f_name); ?> <?php echo e($response->user->l_name); ?></h5>
            <?php endif; ?>
            <p><?php echo e($response->response); ?></p>
            <p><strong><?php echo e($response->created_at->diffForHumans()); ?></strong></p>
         </span>
      </div>
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
      <span>No responses provided yet</span>
   <?php endif; ?>
</div>
<?php /**PATH C:\xampp\htdocs\projects\laravel\tupange-admin\resources\views/partials/_raised-issue.blade.php ENDPATH**/ ?>