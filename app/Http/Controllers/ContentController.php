<?php

namespace App\Http\Controllers;

use Session;
use App\Models\Faq;
use Illuminate\Http\Request;
use App\Models\FooterContent;
use App\Models\AboutUsContent;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class ContentController extends Controller
{
   public function addFooterContent(Request $request)
   {
      $request->validate([
         'content' => 'required',
         'contact_us_email' => 'required', 'email',
         'contact_us_phone_number' => 'required',
         'contact_us_address' => 'required',
         'privacy_policy' => 'required',
         'terms_of_use' => 'required'
      ]);

      FooterContent::create($request->all());

      return redirect()->back()->with('success', 'Footer content added');
   }

   public function showFooterContent()
   {
      $content = FooterContent::find(1);

      return view('modules.content.footer', compact('content'));
   }

   public function updateFooterContent(Request $request, $id)
   {
      $request->validate([
         'content' => 'required',
         'contact_us_email' => 'required', 'email',
         'contact_us_phone_number' => 'required',
         'contact_us_address' => 'required',
      ]);

      $content = FooterContent::find($id);

      $content->content = $request->content;
      $content->contact_us_email = $request->contact_us_email;
      $content->contact_us_phone_number = $request->contact_us_phone_number;
      $content->contact_us_address = $request->contact_us_address;
      $content->privacy_policy = $request->has('privacy_policy') ? $request->privacy_policy : NULL;
      $content->terms_of_use = $request->has('terms_of_use') ? $request->terms_of_use : NULL;
      $content->save();

      Session::flash('success','Content Updated');

      return redirect()->route('content.footer', compact('content'));
   }

   public function showAboutUsContent()
   {
      $content = AboutUsContent::find(1);

      return view('modules.content.about_us', compact('content'));
   }

   public function updateAboutUs(Request $request, $id)
   {
      $validator = Validator::make($request->all(), [
         'content' => 'required',
         'for_planner_content' => 'required',
         'for_vendor_content' => 'required',
         'step_one_title' => 'required',
         'step_one_content' => 'required',
         'step_two_title' => 'required',
         'step_two_content' => 'required',
         'step_three_title' => 'required',
         'step_three_content' => 'required',
      ])->validate();

      $content = AboutUsContent::find($id);

      $content->update([
         'content' => $request->content,
         'about_us_image' => $request->hasFile('about_us_image')
                              ? config('services.app_url.admin_url').'/storage/content/'.pathinfo($request->about_us_image->store('', 'content'), PATHINFO_BASENAME)
                              : $content->about_us_image,
         'for_planner_image' => $request->hasFile('for_planner_image')
                                 ? config('services.app_url.admin_url').'/storage/content/'.pathinfo($request->for_planner_image->store('', 'content'), PATHINFO_BASENAME)
                                 : $content->for_planner_image,
         'for_planner_content' => $request->for_planner_content,
         'for_vendor_image' => $request->hasFile('for_vendor_image')
                                 ? config('services.app_url.admin_url').'/storage/content/'.pathinfo($request->for_vendor_image->store('', 'content'), PATHINFO_BASENAME)
                                 : $content->for_vendor_image,
         'for_vendor_content' => $request->for_vendor_content,
         'step_one_title' => $request->step_one_title,
         'step_one_content' => $request->step_one_content,
         'step_two_title' => $request->step_two_title,
         'step_two_content' => $request->step_two_content,
         'step_three_title' => $request->step_three_title,
         'step_three_content' => $request->step_three_content,
      ]);

      Session::flash('success', 'Content Updated');

      return redirect()->route('content.about', compact('content'));
   }

   public function showFaqs()
   {
      $faqs = Faq::all();

      return view('modules.content.faq', compact('faqs'));
   }

   public function createFaq()
   {
      return view('modules.content.add_faq');
   }

   public function addFaq(Request $request)
   {
      $request->validate([
         'question' => 'required',
         'answer' => 'required'
      ]);

      Faq::create([
         'question' => $request->question,
         'answer' => $request->answer
      ]);

      $faqs = Faq::all();

      Session::flash('success', 'FAQ added successfully');

      return view('modules.content.faq', compact('faqs'));
   }

   public function editFaq($id)
   {
      $edit = Faq::find($id);

      return view('modules.content.edit-faq', compact('edit'));
   }

   public function updateFaq(Request $request, $id)
   {
      $request->validate([
         'question' => 'required',
         'answer' => 'required'
      ]);

      $faq = Faq::find($id);

      $faq->update([
         'question' => $request->question,
         'answer' => $request->answer
      ]);

      $faqs = Faq::all();

      Session::flash('success', 'FAQ updated');

      return view('modules.content.faq', compact('faqs'));
   }

   public function deleteFaq($id)
   {
      $faq = Faq::find($id);
   
      $faq->delete();
   
      Session::flash('success', 'FAQ deleted');
   
      return Redirect::route('content.faqs');
   }
}
