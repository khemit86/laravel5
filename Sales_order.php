<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sales_order extends Model {
    protected $table = 'sales_order';
    public $timestamps = false;
    protected $primaryKey = 'sales_orderno';
    protected $fillable = [
    'sales_description',
    'inquiry',
    'quotation',
    'sales_order_type',
    'customer',
    'sales_region',
    'purchase_order_number',
    'purchase_order_date',
    'req_delivery_date',
    'sales_order_value',
    'invoice_number',
    'weight',
    'unit',
    'valid_from',
    'valid_to',
    'total_value',
    'net_amount',
    'material_number',
    'order_qty',
    'customer_material_number',
    'pricing_date',
    'billing_block',
    'payment_terms',
    'ex_works',
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
