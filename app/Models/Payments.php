<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
   Protected $table = 'payments';

   /**
    * Get the user that owns the Payments
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
   public function user()
   {
      return $this->belongsTo(User::class);
   }

   /**
    * Get the order that owns the Payments
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
   public function order()
   {
       return $this->belongsTo(Orders::class);
   }
}
