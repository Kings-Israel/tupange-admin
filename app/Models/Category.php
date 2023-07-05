<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
   Protected $table = 'categories';

   /**
    * Get all of the services for the Category
    *
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
   public function services()
   {
       return $this->hasMany(Services::class);
   }
}
