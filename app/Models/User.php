<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
   Protected $table = 'users';

   /**
    * The attributes that should be cast to native types.
    *
    * @var array
    */
   protected $casts = [
      'is_suspended' => 'bool',
   ];

   public function getAvatar(?string $filename)
   {
      $image = $filename ? $filename : 'user.png';
      return config('services.app_url.user_app_url').'/storage/user/avatar/'.$filename;
   }
}
