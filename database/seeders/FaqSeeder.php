<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
   /**
   * Run the database seeds.
   *
   * @return void
   */
   public function run()
   {
      Faq::create([
         'question' => 'What is Tupange.com?',
         'answer' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla repellat assumenda aspernatur perferendis, animi obcaecati deleniti praesentium enim voluptatibus ex?'
      ]);

      Faq::create([
         'question' => 'How does Tupange.com work?',
         'answer' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla repellat assumenda aspernatur perferendis, animi obcaecati deleniti praesentium enim voluptatibus ex?'
      ]);

      Faq::create([
         'question' => 'What services can I find on Tupange.com?',
         'answer' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla repellat assumenda aspernatur perferendis, animi obcaecati deleniti praesentium enim voluptatibus ex?'
      ]);

      Faq::create([
         'question' => 'What do I need to be a vendor?',
         'answer' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla repellat assumenda aspernatur perferendis, animi obcaecati deleniti praesentium enim voluptatibus ex?'
      ]);

      Faq::create([
         'question' => 'What is Tupange.com?',
         'answer' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla repellat assumenda aspernatur perferendis, animi obcaecati deleniti praesentium enim voluptatibus ex?'
      ]);
   }
}
