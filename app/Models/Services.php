<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    protected $table = 'services';

    protected $fillable = [
        'service_title',
        'category_id',
        'orders_count',
        'service_contact_email',
        'service_contact_phone_number',
        'vendor_id',
        'featured',
    ];
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
