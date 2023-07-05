<?php

namespace Database\Seeders;

use App\Models\FooterContent;
use Illuminate\Database\Seeder;

class FooterContentSeeder extends Seeder
{
   /**
    * Run the database seeds.
    *
    * @return void
    */
   public function run()
   {
      FooterContent::create([
         'content' => 'We want to help you with your event planning or services hunt that is why we provide you this platform. We believe you should have peace of mind when hiring service providers for your event so we give you a cash back guarantee on disputed cases. Create an account and start using our tools. Contact us if you need assistance.',
         'contact_us_email' => 'Tupangeevents@gmail.com',
         'contact_us_phone_number' => '0700776655',
         'contact_us_address' => 'FCB, MIHRAB MEZZANINE 2',
      ]);
   }
}
