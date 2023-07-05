<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventGuestDetail extends Model
{
   use HasFactory;

   /**
    * Get the event that owns the EventGuestDetail
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
   public function event()
   {
      return $this->belongsTo(Events::class, 'event_id', 'id');
   }
}
