<?php

namespace App\Http\Controllers\modules;

use App\Models\Payments;
use Illuminate\Http\Request;
use App\Models\PesapalPayment;
use App\Http\Controllers\Controller;

class paymentsController extends Controller
{
   //index
   public function index(){
      $payments = Payments::with('user', 'order')->get();

      return view('modules.payments.index', compact('payments'));
   }

   /**
    *
    * View Event Ticket Payments
    *
    */
   public function eventPayments()
   {
      return view('modules.payments.event-payments');
   }
}
