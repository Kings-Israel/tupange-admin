<?php

namespace App\Http\Controllers\modules;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Helper;
Use File;
use Session;
use Image;

class categoryController extends Controller
{
   public function index(){
      $categories = Category::orderby('id','desc')->get();
      return view('modules.category.index', compact('categories'));
   }

   public function create(){
      return view('modules.category.create');
   }

   public function store(Request $request){
      $this->validate($request,[
         'name' => 'required',
      ]);
      $category = new category;
      $category->name = $request->name;
      $category->icon = $request->icon;
      $category->status = $request->status;
      if(!empty($request->image)){
			// $path = base_path().'/public/category/';

			// if (!file_exists($path)) {
         //    mkdir($path, 0777,true);
         // }

			// $file = $request->file('image');

         // // GET THE FILE EXTENSION
         // $extension = $file->getClientOriginalExtension();
         // // RENAME THE UPLOAD WITH RANDOM NUMBER
         // $fileName = Helper::generateRandomString(). '.' . $extension;
         // // MOVE THE UPLOADED FILES TO THE DESTINATION DIRECTORY
         // $upload_success = $file->move($path, $fileName);

         $image = $request->file('image');
         $input['imagename'] = time().'.'.$image->extension();

         $filePath = public_path('storage/category');
         $img = Image::make($image->path());
         $img->resize(700, 464, function($const) {
            $const->aspectRatio();
         })->save($filePath.'/'.$input['imagename']);

         $category->image = $img->basename;
      }
      $category->description = $request->description;
      $category->save();

      Session::flash('success','Category Added');

      return redirect()->route('category.index');
   }

   public function edit($id){
      $edit = category::find($id);
      return view('modules.category.edit', compact('edit'));
   }

   public function update(Request $request,$id){
      $this->validate($request,[
         'name' => 'required',
      ]);
      $category = category::find($id);
      $category->name = $request->name;
      $category->status = $request->status;
      $category->icon = $request->icon;
      if(!empty($request->image)){
			// $path = base_path().'/public/category/';

			// if (!file_exists($path)) {
         //    mkdir($path, 0777,true);
         // }

         // if ($category->image != ""){
			// 	$delete = $path.$category->image;
			// 	if (File::exists($delete)) {
			// 		unlink($delete);
			// 	}
         // }

         // $file = $request->file('image');

         // // GET THE FILE EXTENSION
         // $extension = $file->getClientOriginalExtension();
         // // RENAME THE UPLOAD WITH RANDOM NUMBER
         // $fileName = Helper::generateRandomString(). '.' . $extension;
         // // MOVE THE UPLOADED FILES TO THE DESTINATION DIRECTORY
         // $file->move($path, $fileName);

         $image = $request->file('image');
         $input['imagename'] = time().'.'.$image->extension();

         $filePath = public_path('storage/category');
         $img = Image::make($image->path());
         $img->resize(700, 464, function($const) {
            $const->aspectRatio();
         })->save($filePath.'/'.$input['imagename']);

         $category->image = $img->basename;
      }
      $category->description = $request->description;
      $category->save();

      Session::flash('success','Category Updated');

      return redirect()->back();
   }

   public function delete(){
      return view('modules.category.index');
   }
}
