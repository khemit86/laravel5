<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProjectIssue extends Model
{

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $table = 'issues_list';
    protected $fillable = [
        'title',
        'issueTypeId',
        'description',
        'projectId',
        'phaseId',
        'taskId',
        'assignee',
        'created_date',
        'close_date',
        'due_date',
        'priority',
        'estimated_duration',
        'parentID',
        'status',
        'duration_unit',
        'projectManager',
        'attachment',
        'created_by',
        'created_on',
        'changed_by',
        'changed_on',
        'updated_at',
        'created_at'
    ];

    /*
      public function customer()
      {
      return $this->hasOne('App\Customer', 'id', 'customer_id');
      }


      public function user()
      {
      return $this->hasOne('App\User', 'id', 'user_id');
      }


      public function status()
      {
      return $this->hasOne('App\Status', 'id', 'status_id');
      }
      public function plan()
      {
      return $this->hasOne('App\Plans', 'id', 'plan_id');
      } */
}
