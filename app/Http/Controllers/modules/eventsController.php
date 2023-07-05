<?php

namespace App\Http\Controllers\modules;

use App\Models\Events;
use App\Models\EventTypes;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class eventsController extends Controller
{
   //events
   public function index(){
      $events = Events::with('user')
                     ->orderby('events.id','desc')
                     ->get();

      return view('modules.events.index', compact('events'));
   }

   //details
   public function details($id){
      $event = Events::with('user', 'guests')
                     ->where('id', $id)
                     ->first();
      $invited_guests = $event->loadCount(['guests' => function($query) {
         $query->where('status', 'Invited');
      }]);
      $confirmed_guests = $event->loadCount(['guests' => function($query) {
         $query->where('status', 'Confirmed');
      }]);
      $attended_guests = $event->loadCount(['guests' => function($query) {
         $query->where('event_guest_details.status', 'Attended');
      }]);
      $default_guests = $event->loadCount(['guests' => function($query) {
         $query->where('status', 'Default')->orWhere('status', '');
      }]);
      return view('modules.events.details', compact('event', 'invited_guests', 'confirmed_guests', 'default_guests', 'attended_guests'));
   }

   // categories
   public function categories()
   {
      $categories = EventTypes::all();

      return view('modules.events.categories', compact('categories'));
   }

   public function addEventCategory()
   {
      return view('modules.events.create-category');
   }

   public function createEventCategory(Request $request)
   {
      $this->validate($request, [
         'name' => 'required'
      ]);

      $category = EventTypes::create(['name' => $request->name]);

      Session::flash('success','Category Added');

      return redirect()->route('events.categories');
   }

   public function editCategory($id)
   {
      $category = EventTypes::find($id);

      return view('modules.events.edit-categories')->with(['edit' => $category]);
   }

   public function updateCategory(Request $request, $id)
   {
      $this->validate($request, [
         'name' => 'required'
      ]);

      $category = EventTypes::find($id);

      $category->update([
         'name' => $request->name
      ]);

      Session::flash('success', 'Category Updated');

      return redirect()->back();
   }

}
