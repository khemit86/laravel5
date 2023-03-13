<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class taskAssignment extends Model
{

    protected $table = 'taskassign';
    // public $timestamp = false;
    protected $fillable = [
        'project_id',
        'project_description',
        'task',
        'role',
        'role_description',
        'start_date',
        'end_date',
        'created_by',
        'changed_by',
        'company_id'
    ];
    protected $editable = [
        'project_id',
        'project_description',
        'task',
        'role',
        'role_description',
        'start_date',
        'end_date',
        'changed_by',
        
    ];

    public function getEditable()
    {
        return $this->editable;
    }
    
}
