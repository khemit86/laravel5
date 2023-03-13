<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GoodsReceipt extends Model
{
    
    protected $table = 'goods_receipt';
    public $timestamps = false;
    protected $fillable = [
        'document_date',
        'purchase_order_number',
        'posting_date',
        'created_by',
        'created_on',
        'changed_by',
        'changed_on',
        'reversed'
    ];
    
    
}
