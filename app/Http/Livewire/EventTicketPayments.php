<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\EventTicketPayment;

class EventTicketPayments extends Component
{
   public function render()
   {
      $event_payments = EventTicketPayment::where('transaction_id', '!=', NULL)->get();

      return view('livewire.event-ticket-payments', compact('event_payments'));
   }
}
