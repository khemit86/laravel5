<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;
use Illuminate\Database\Eloquent\SoftDeletes;

class Projectchecklist extends Model
{

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $table = 'project_checklist';

    protected $fillable = [
       'checklist_id',
        'checklist_name',
        'checklist_text',
        'checklist_type',
        'project_name',
        'project_id',
        'phase_id',
        'phase_name',
        'task_id',
        'task_name',
        'start_date',
        'a_start_date',
        'l_start_date',
        'l_end_date',
        'e_start_date',
        'e_end_date',
        'a_end_date',
        'end_date',
        'duration',
        'person_responsible',
        'created_by',
        'created_on',
        'changed_by',
        'changed_on',
        'status',
        'checklist_status'
    ];
    
     public $timestamps = false;
     
    /*
     * public function customer()
     * {
     * return $this->hasOne('App\Customer', 'id', 'customer_id');
     * }
     *
     *
     * public function user()
     * {
     * return $this->hasOne('App\User', 'id', 'user_id');
     * }
     *
     *
     * public function status()
     * {
     * return $this->hasOne('App\Status', 'id', 'status_id');
     * }
     * public function plan()
     * {
     * return $this->hasOne('App\Plans', 'id', 'plan_id');
     * }
     */
}