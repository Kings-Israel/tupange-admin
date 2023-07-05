<?php

namespace App\Http\Controllers\modules;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Events;
use App\Models\Orders;
use App\Models\Services;
use App\Models\Vendors;
use App\Charts\general;
use DB;
class dashboardController extends Controller
{
   /**
    * Create a new controller instance.
    *
    * @return void
    */
   public function __construct()
   {
      $this->middleware('auth');
   }

   /**
    * Dashboard
    *
    * @return void
   */
   public function dashboard(){
      $vendors = Vendors::count();
      $orders = Orders::count();
      $services= Services::count();
      $users = User::count();
      $pendingVendors = Vendors::where('status','pending')->orderby('id','desc')->get();

      /**
      * service Category
      * */
      $serviceCategory = new general;

      $categories  = Services::join('categories','categories.id','=','services.category_id')
                              ->groupby(DB::raw('category_id'))
                              ->select(DB::raw('categories.name as name'))
                              ->pluck('name');

      $serviceTotal =  DB::table('services')
                           ->where('service_status_id', 1)
                           ->select(DB::raw('COUNT(services.category_id) as total'))
                           ->groupby(DB::raw('category_id'))
                           ->pluck('total');

      $serviceCategory->labels($categories->values());
      $serviceCategory->dataset('Total service categories', 'pie', $serviceTotal->values())
                        ->backgroundColor(collect(['rgba(237, 88, 18, 0.6)','rgba(52,186,187,0.6)','rgba(21, 209, 11, 0.6)','rgba(254,153,175,0.6)','rgba(40,95,255,0.6)','rgba(237, 18, 148, 0.45)','rgba(243,71,112,0.2)']));


      return view('modules.dashboard', compact('vendors','orders','services','users','pendingVendors','serviceCategory'));
   }
}
