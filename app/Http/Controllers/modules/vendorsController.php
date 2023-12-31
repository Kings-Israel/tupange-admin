<?php

namespace App\Http\Controllers\modules;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vendors;
use App\Models\Services;
use App\Models\Orders;
use App\Models\User;
use Session;
class vendorsController extends Controller
{
   //list
   public function index(){
      $vendors = Vendors::orderby('id','desc')->get();
      return view('modules.vendors.index', compact('vendors'));
   }

   //details
   public function details($id){
      $details = Vendors::find($id);
      return view('modules.vendors.details', compact('details'));
   }

   //services
   public function services($id){
      $details = Vendors::find($id);
      $services = Services::where('vendor_id',$id)->orderby('id','desc')->get();
      return view('modules.vendors.services', compact('details','services'));
   }

   //orders
   public function orders($id){
      $details = Vendors::find($id);
      $orders = Orders::join('services', 'services.id', '=', 'orders.service_id')
                       ->join('users', 'users.id', '=', 'orders.user_id')
                       ->where('vendor_id', $id)
                       ->orderBy('orders.id', 'desc')
                       ->select('orders.*', 'services.status as order_status') // Select the status of the order
                       ->get();
   
      return view('modules.vendors.orders', compact('details', 'orders'));
   }

   public function markAsPaid($orderId)
   {
      $order = Orders::find($orderId);
      if ($order) {
         $order->status = 'Paid';
         $order->payment_status = 1;
         $order->save();
         Session::flash('success', 'Order status changed');
   
         return redirect()->back();
      }
   }

   public function markAsNotPaid($orderId)
   {
       $order = Orders::find($orderId);

       if (!$order) {
         return redirect()->back();
       }

       // Update the payment_status to "Not Paid" (0)
       $order->payment_status = 0;
       $order->save();

       Session::flash('success', 'Order status changed');
   
       return redirect()->back();
   }

   //status
   public function status($id)
   {
       $vendor = Vendors::find($id);
   
       // Update vendor status
       $vendor->status = $vendor->status === 'Suspended' ? 'Active' : 'Suspended';
       $vendor->save();
   
       // Update related user status
       $user = User::find($vendor->user_id);
       if ($user) {
           $user->is_suspended = $vendor->status === 'Suspended' ? 1 : 0;
           $user->save();
       }
   
       Session::flash('success', 'Vendor status changed');
   
       return redirect()->back();
   }
   

      // Delete vendor
      public function destroy($id)
      {
          $vendor = Vendors::find($id);
          if (!$vendor) {
              Session::flash('error', 'Vendor not found');
              return redirect()->back();
          }
  
          $vendor->delete();
  
          Session::flash('success', 'Vendor deleted successfully');
  
          return redirect()->route('vendors.index');
      }
}
