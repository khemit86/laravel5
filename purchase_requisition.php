<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class purchase_requisition extends Model
{
    protected $table = 'purchase_requisition';
    
    public $timestamps = false;
            
        protected $fillable = [
            'requisition_number',
            'header_note',
            'approver_1',
            'approver_2',
            'approver_3',
            'approver_4',
            'approved_indicator',
            'approver_token',
            'company_id'

        ];
        
       
}
