<?php

namespace App\Http\Controllers\modules;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Services;
class servicesController extends Controller
{
   //index
   public function index(){
      $services = Services::withCount('orders')->get();

      return view('modules.services.index', compact('services'));
   }
}
