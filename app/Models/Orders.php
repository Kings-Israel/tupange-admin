<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
   Protected $table = 'orders';

   /**
    * Get the user that owns the Orders
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
   public function user()
   {
       return $this->belongsTo(User::class, 'user_id');
   }

   /**
    * Get the service that owns the Orders
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
   public function service()
   {
       return $this->belongsTo(Services::class, 'service_id');
   }

   /**
    * Get the order_quotation that owns the Orders
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
   public function order_quotation()
   {
       return $this->belongsTo(OrderQuotation::class, 'order_quotation_id');
   }

   /**
    * Get the service_pricing that owns the Orders
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
   public function service_pricing()
   {
       return $this->belongsTo(ServicePricing::class, 'service_pricing_id');
   }
}
