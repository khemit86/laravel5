<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gl_records extends Model
{

    protected $table = 'gl_records';
    public $timestamps = true;
    protected $fillable = [
        'gl_account_number',
        'debit',
        'credit',
        'company_id',
        'created_by',
        'changed_by',
        'created_at',
        'updated_at'
    ];

}
