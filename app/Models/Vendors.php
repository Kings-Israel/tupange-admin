<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vendors extends Model
{
    Protected $table = 'vendors';

    /**
     * Get the user that owns the Vendors
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Get all of the services for the Vendors
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function services()
    {
        return $this->hasMany(Services::class, 'vendor_id');
    }
}
