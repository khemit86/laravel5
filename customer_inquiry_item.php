<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer_inquiry_item extends Model
{
    protected $table = 'customer_inquiry_item';
    
    public $timestamps = false;
            
        protected $fillable = [
            'inquiry_number',
            'status',           
            'item_no',           
            'material', 
            'material_description',
            'order_qty',
            'item_quantity',
            'cost_unit',
            'item_cost',                        
            'material_group',
            'project_id',
            'cost_center',
            'po_item',
            'tota_amt',
            'customer_material_no',
            'task',
            'reason'        
  
        ];
        
    

}
