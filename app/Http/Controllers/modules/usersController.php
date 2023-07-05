<?php

namespace App\Http\Controllers\modules;

use Auth;
use App\Models\User;
use App\Models\Orders;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class usersController extends Controller
{
   public function index()
   {
      $users = User::orderby('id','desc')->get();

      return view('modules.users.index', compact('users'));
   }

   public function details($id)
   {
      $user = User::find($id);
      $orders = Orders::join('users','users.id','=','orders.user_id')
                        ->join('services','services.id','=','orders.service_id')
                        ->join('service_pricings','service_pricings.id','=','orders.service_pricing_id')
                        ->join('vendors','vendors.id','=','services.vendor_id')
                        ->where('orders.user_id',$id)
                        ->select('*','orders.created_at as orderDate','orders.status')
                        ->get();
      $count = 1;

      return view('modules.users.details', compact('user','count','orders'));
   }

   public function changeUserStatus($id)
   {
      $user = User::find($id);

      $user->is_suspended = $user->is_suspended ? false : true;

      $user->save();

      Session::flash('success', 'User account status changed');

      return back();
   }
}
