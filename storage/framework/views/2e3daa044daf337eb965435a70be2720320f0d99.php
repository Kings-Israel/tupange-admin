<div class="card">
   <div class="card-body">
      <table class="table table-striped table-bordered zero-configuration">
         <thead>
            <tr>
               <th>Event Name</th>
               <th>Event Type</th>
               <th>Paid By</th>
               <th>Amount</th>
               <th>Payment Method</th>
               <th>Transaction ID</th>
               <th>Payment Date</th>
            </tr>
         </thead>
         <tbody>
            <?php $__currentLoopData = $event_payments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $count => $payment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <tr>
                  <td><?php echo $payment->eventGuestDetail->event->event_name; ?></td>
                  <td><?php echo $payment->eventGuestDetail->event->event_type; ?></td>
                  <td><?php echo $payment->paid_by_name; ?></td>
                  <td>Ksh. <?php echo number_format($payment->amount); ?></td>
                  <td><?php echo $payment->payment_method; ?></td>
                  <td><?php echo $payment->transaction_id; ?></td>
                  <td><?php echo $payment->updated_at->format('d M, Y'); ?></td>
               </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </tbody>
      </table>
   </div>
</div>
<?php /**PATH C:\xampp\htdocs\projects\laravel\tupange-admin\resources\views/livewire/event-ticket-payments.blade.php ENDPATH**/ ?>