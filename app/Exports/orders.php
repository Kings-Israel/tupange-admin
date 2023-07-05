<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use App\Models\Orders as exportOrders;

class orders implements FromCollection, WithHeadings
{

   /**
   * @return \Illuminate\Support\Collection
   */
   public function collection()
   {


      return exportOrders::join('users','users.id','=','orders.user_id')
                           ->join('services','services.id','=','orders.service_id')
                           ->join('service_pricings','service_pricings.id','=','orders.service_pricing_id')
                           ->join('vendors','vendors.id','=','services.vendor_id')
                           ->select('order_id','service_pricing_price','name','orders.created_at as orderDate','company_name','orders.status')
                           ->get();
   }

   public function headings(): array
   {
      return [
         'OrderID',
         'Amount',
         'Customer',
         'Order Date',
         'Vendor',
         'Status'
      ];
   }
}
