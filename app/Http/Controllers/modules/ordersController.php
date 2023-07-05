<?php

namespace App\Http\Controllers\modules;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Orders;
use App\Exports\orders as exportOrders;
use Excel;

class ordersController extends Controller
{
   //index
   public function index(){
      $orders = Orders::all();
      // $orders = Orders::join('users','users.id','=','orders.user_id')
      //                ->join('services','services.id','=','orders.service_id')
      //                ->join('service_pricings','service_pricings.id','=','orders.service_pricing_id')
      //                ->join('order_quotations', 'order_quotations.id', '=', 'orders.order_quotation_id')
      //                ->join('vendors','vendors.id','=','services.vendor_id')
      //                ->select('*','orders.created_at as orderDate','orders.status')
      //                ->get();

      return view('modules.orders.index', compact('orders'));
   }

   public function details($id)
   {
      $order = Orders::find($id);

      return view('modules.orders.show', compact('order'));
   }

   //export
   public function export(){
      $name = date('d-m-Y');

      return Excel::download(new exportOrders, $name.'.xlsx');
   }
}
