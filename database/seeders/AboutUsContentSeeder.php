<?php

namespace Database\Seeders;

use App\Models\AboutUsContent;
use Illuminate\Database\Seeder;

class AboutUsContentSeeder extends Seeder
{
   /**
    * Run the database seeds.
    *
    * @return void
    */
   public function run()
   {
      AboutUsContent::create([
         'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',

         'about_us_image' => env('APP_URL').'/storage/content/about_us_image.jpg',

         'for_planner_image' => env('APP_URL').'/storage/content/planner.jpg',

         'for_planner_content' => 'We know you are busy and you want things to be easy. This platform is here for you as you plan that event. Be it a wedding party, an official corporate event, a birthday party, a funeral service or that house party, this is the place to be.

         Get personaliced services and peace of mind with cash back guarantee on selected services (T&Cs apply). Waste no time, create an account and start browsing our listings. Make use of our planning tools freely available to make your work even easier.',

         'for_vendor_image' => env('APP_URL').'/storage/content/vendor.jpg',

         'for_vendor_content' => 'Get your business recognized by connecting with our clients. We carefully select our vendors so we guarantee quality service delivery governed by our T&Cs. To have your services listed, create a vendor account and start advertising your business.

         Let clients come to you. If you provide quality services and you are consistent, you will have loyal clients who can bookmark your profile or even share with their friends as recommendations. Our planning tools also allow clients to narrow down to your specialization so you are guaranteed to close a sale.',

         'step_one_title' => 'Create and Manage Events',

         'step_one_content' => 'Integer scelerisque maximus commodo. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec eleifend enim rutrum dignissim sollicitudin.',

         'step_two_title' => 'Offer Your Services',

         'step_two_content' => 'Integer scelerisque maximus commodo. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec eleifend enim rutrum dignissim sollicitudin.',

         'step_three_title' => 'Easy Order Checkout',

         'step_three_content' => 'Integer scelerisque maximus commodo. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec eleifend enim rutrum dignissim sollicitudin.'
      ]);
   }
}
