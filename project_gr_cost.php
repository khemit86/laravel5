<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class project_gr_cost extends Model
{
 protected $table = 'project_gr_cost';
    public $timestamps = false;
    protected $fillable = [
        'project_id',
        'phase',
        'task_id',
        'purchase_order_number',
        'item_number',
        'value',
        'currency',
        'material_documber_number',
        'posting_date',
        'posted_by',
        'created_at',
        'updated_at',
    ];
}
