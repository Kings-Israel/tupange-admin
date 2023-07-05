<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
   Protected $table = 'events';

   /**
    * Get the user that owns the Events
      *
      * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
      */
   public function user()
   {
      return $this->belongsTo(User::class);
   }

   /**
    * Get all of the guests for the Events
    *
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
   public function guests()
   {
      return $this->hasMany(EventGuestDetail::class, 'event_id');
   }
}
