<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesapalPayment extends Model
{
   use HasFactory;

   public function orders()
   {
      return $this->morphTo(Orders::class, 'payable');
   }

   public function events()
   {
      return $this->morphOne(Events::class, 'payable');
   }
}
