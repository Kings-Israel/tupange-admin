<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    Protected $table = 'services';

    /**
     * Get the category that owns the Services
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    /**
     * Get the vendor that owns the Services
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function vendor()
    {
        return $this->belongsTo(Vendors::class, 'vendor_id');
    }

    /**
     * Get all of the orders for the Services
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orders()
    {
        return $this->hasMany(Orders::class, 'service_id');
    }
}
