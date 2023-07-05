<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
   /**
    * Run the database seeds.
    *
    * @return void
    */
   public function run()
   {
      Admin::factory()->create([
         'name' => 'Deveint Admin',
         'email' => 'admin@deveint.com',
         'phone_number' => '0724213205',
         'email_verified_at' => now(),
         'remember_token' => Str::random(10),
         'password' => Hash::make('secretpassword'),
      ]);
   }
}
