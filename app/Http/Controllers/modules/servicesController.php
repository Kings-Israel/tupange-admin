<?php

namespace App\Http\Controllers\modules;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Services;
use App\Models\Category;
use App\Models\Vendors;
class servicesController extends Controller
{
   //index
   public function index(){
      $services = Services::withCount('orders')->get();

      return view('modules.services.index', compact('services'));
   }

   public function edit(Services $service)
   {
       $categories = Category::all(); // Fetch all categories
       $vendors = Vendors::all(); // Fetch all vendors
   
       return view('modules.services.edit', compact('service', 'categories', 'vendors'));
   }
   

   public function update(Request $request, Services $service)
   {
       $validatedData = $request->validate([
           'service_title' => 'required',
           'category' => 'required',
           'service_contact_email' => 'required|email',
           'service_contact_phone_number' => 'required',
           'vendor' => 'required',
       ]);
   
       $service->update($validatedData);
       return redirect()->route('services.index');
   }
   
   public function disable(Services $service)
   {
      $service->status = 0;
      $service->save();
      return redirect()->route('services.index');
   }

   public function activate(Services $service)
   {
      $service->status = 1;
      $service->save();
      return redirect()->route('services.index');
   }

   public function feature(Services $service)
   {
       $service->update(['featured' => 1]);
       return redirect()->back();
   }

   public function unfeature(Services $service)
   {
       $service->update(['featured' => 0]);
       return redirect()->back();
   }

   public function destroy(Services $service)
   {
      $service->delete();
      return redirect()->back();
   }


}
