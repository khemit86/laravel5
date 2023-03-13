<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customerinquiry extends Model {

    protected $table = 'customer_inquiry';
    public $timestamps = false;
    protected $fillable = [
        'inquiry_number',
        'inquiry_description',
        'quotation',
        'invoice_number',
        'inquiry_type',
        'customer',
        'sales_region',
        'purchase_order_number',
        'purchase_order_date',
        'req_delivery_date',
        'weight',
        'unit',
        'valid_from',
        'valid_to',
        'inquiry_text',
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
