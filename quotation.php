<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class quotation extends Model
{
    //
    protected $table = 'quotation';
    public $timestamps = false;
    protected $fillable = [
        'quotation_number',
        'quotation_type',
        'quotation_short_description',
        'customer',
        'inquiry',
        'sales_order',
        'sales_region',
        'purchase_order_number',
        'purchase_order_date',
        'req_delivery_date',
        'invoice_number',
        'weight',
        'unit',
        'valid_from',
        'valid_to',
        'total_value',
        'net_amount',
        'item',
        'material_number',
        'order_qty',
        'customer_material_number',
        'cost_per_unit',
        'total_amount',
        'po_item',
        'project_number',
        'task',
        'cost_center',
        'material_group',
        'reason_for_rejection',
        'created_on',
        'created_by',
        'requested_by',
        'status'
    ];
    
}
