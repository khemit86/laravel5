<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sales_order_item extends Model
{
    protected $table = 'sales_item';
    public $timestamps = false;
    protected $fillable = [
    'sales_orderno',    
    'item',
    'material_number',
    'order_qty',
    'material_description',
    'first_delivery_date',
    'net_value',
    'currency',
    'pricing_date',
    'usage',
    'unloading_point',
    'shipping point',
    'gross_weight',
    'weight_unit',
    'net_weight',
    'weight_unit',
    'volume',
    'volume_unit',
    'billing_block',
    ];
}
