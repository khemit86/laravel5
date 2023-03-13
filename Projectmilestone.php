<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;
use Illuminate\Database\Eloquent\SoftDeletes;

class Projectmilestone extends Model
{

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $table = 'project_milestone';
    
    public $timestamps = false;

    protected $fillable = [
        'milestone_Id',
        'milestone_name',
        'milestone_type',
        'project_id',
        'phase_id',
        'task_id',
        'start_date',
        'finish_date',
        'fixed_date',
        'actual_date',
        'schedule_date',
        'billingplan_date',
        'event_date',
        'progress_date',
        'duration',
        'persion_responsible',
        'phase_approval',
        'template',
        'reference_phase',
        'quality_approval',
        'created_by',
        'modified_by',
        'created_date',
        'modified_date',
        'status',
        'is_deleted'
    ];
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