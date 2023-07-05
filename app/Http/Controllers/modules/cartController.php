<?php

namespace App\Http\Controllers\modules;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;

class cartController extends Controller
{
   public function index(){
      $items = Cart::all();

      return view('modules.cart.index', compact('items'));
   }
}
