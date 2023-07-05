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
            @foreach($event_payments as $count => $payment)
               <tr>
                  <td>{!! $payment->eventGuestDetail->event->event_name !!}</td>
                  <td>{!! $payment->eventGuestDetail->event->event_type !!}</td>
                  <td>{!! $payment->paid_by_name !!}</td>
                  <td>Ksh. {!! number_format($payment->amount) !!}</td>
                  <td>{!! $payment->payment_method !!}</td>
                  <td>{!! $payment->transaction_id !!}</td>
                  <td>{!! $payment->updated_at->format('d M, Y') !!}</td>
               </tr>
            @endforeach
         </tbody>
      </table>
   </div>
</div>
