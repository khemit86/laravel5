<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $table = 'project';
    protected $fillable = [
        'project_Id',
        'project_name',
        'project_type',
        'project_desc',
        'portfolio_name',
        'portfolio_id',
        'portfolio_type',
        'bucket_name',
        'bucket_id',
        'location_id',
        'cost_centre',
        'department',
        'start_date',
        'end_date',
        'a_start_date',
        'a_end_date',
        'f_start_date',
        'f_end_date',
        'sch_date',
        'p_start_date',
        'p_end_date',
        'person_responsible',
        'factory_calendar',
        'currency',
        'created_date',
        'created_by',
        'modified_date',
        'modified_by',
        'company_id',
        'status',
        'deleted'
    ];
    protected $editable = [
        'project_Id',
        'project_name',
        'project_type',
        'project_desc',
        'portfolio_name',
        'portfolio_id',
        'portfolio_type',
        'bucket_name',
        'bucket_id',
        'location_id',
        'cost_centre',
        'department',
        'start_date',
        'end_date',
        'a_start_date',
        'a_end_date',
        'f_start_date',
        'f_end_date',
        'sch_date',
        'p_start_date',
        'p_end_date',
        'person_responsible',
        'factory_calendar',
        'currency',
        'modified_date',
        'modified_by',
        'status',
    ];

    public function getEditable()
    {
        return $this->editable;
    }

    public function projectType()
    {
        return $this->belongsTo('App\projecttype', 'project_type');
    }

    public function portfolioId()
    {
        return $this->belongsTo('App\Portfolio', 'portfolio_id');
    }

    public function portfolioType()
    {
        return $this->belongsTo('App\Portfoliotype', 'portfolio_type');
    }

    public function bucketId()
    {
        return $this->belongsTo('App\Buckets', 'bucket_id');
    }

    public function locationId()
    {
        return $this->belongsTo('App\location', 'location_id');
    }

    public function costCentre()
    {
        return $this->belongsTo('App\Costcentretype', 'cost_centre');
    }

    public function departmentType()
    {
        return $this->belongsTo('App\Departmenttype', 'department');
    }

    public function user()
    {
        return $this->hasOne('App\User', 'id', 'created_by');
    }

    /*
      public function customer()
      {
      return $this->hasOne('App\Customer', 'id', 'customer_id');
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
