<?php

namespace App\Http\Controllers\modules;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reviews;

class reviewsController extends Controller
{
   //index
   public function index(){
      $reviews = Reviews::join('services','services.id','=','reviews.service_id')
                        ->join('orders','orders.id','=','reviews.order_id')
                        ->join('users','users.id','=','orders.user_id')
                        ->orderby('reviews.id','desc')
                        ->get();

      return view('modules.reviews.index', compact('reviews'));
   }
}
