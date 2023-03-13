<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;
use Illuminate\Database\Eloquent\SoftDeletes;

class Projectphase extends Model
{

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $table = 'project_phase';
    
    public $timestamps = false;
    
    protected $fillable = [
        'phase_Id',
        'phase_name',
        'phase_type',
        'project_id',
        'prephase_id',
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
        'phase_approval',
        'reference_phase',
        'quality_approval',
        'created_by',
        'modified_by',
        'created_date',
        'updated_at',
        'status',
        'is_deleted'
    ];
    
    public function phaseType()
	{
		return $this->belongsTo('App\phasetype', 'phase_type');
	}
    
     public function projectId()
	{
		return $this->belongsTo('App\Project', 'project_id');
	}
    
     public function personResponsible()
	{
		return $this->belongsTo('App\Personresponsible', 'person_responsible');
	}
    
    
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