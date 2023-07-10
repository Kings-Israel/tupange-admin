<?php

namespace App\Http\Controllers\modules;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vendors;
use App\Models\Services;
use App\Models\Orders;
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
      $orders = Orders::join('services','services.id','=','orders.service_id')
                        ->join('users','users.id','=','orders.user_id')
                     ->where('vendor_id',$id)
                     ->orderby('orders.id','desc')
                     ->get();

      return view('modules.vendors.orders', compact('details','orders'));
   }

   //status
   public function status($id){
      $details = Vendors::find($id);
      $details->status = $details->status === 'Suspended' ? 'Active' : 'Suspended';
      $details->save();

      Session::flash('success','Vendor status changed');

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
