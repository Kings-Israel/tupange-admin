<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
      //   \App\Models\User::factory()->create();
     $this->call(AdminSeeder::class);
     $this->call(AboutUsContentSeeder::class);
     $this->call(FaqSeeder::class);
     $this->call(FooterContentSeeder::class);

    }
}
