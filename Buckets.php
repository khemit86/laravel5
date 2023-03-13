<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;
use Illuminate\Database\Eloquent\SoftDeletes;

class Buckets extends Model
{

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $table = 'buckets';

    protected $fillable = [
        'name',
        'bucket_id',
        'portfolio_id',
        'parent_bucket',
        'costcentretype',
        'department',
        'currency',
        'description',
        'created_by',
        'created_at',
        'updated_by',
        'updated_at',
        'company_id',
        'status',
        'is_delete'
    ];
	
	/* public function main_category()
    {
        return $this->belongsTo('App\Buckets', 'parent_bucket');
    }

    public function children()
    {
        return $this->hasMany('App\Buckets', 'parent_bucket');
    }*/
    
    public function currency()
    {
        return $this->hasOne('App\Currency', 'short_code', 'currency');
    }
    public function type()
    {
        return $this->hasOne('App\Portfoliotype', 'id', 'type');
    }
    public function buckets()
    {
        return $this->hasOne('App\Buckets', 'id', 'buckets');
    }
	
    public function department_name()
    {
            return $this->belongsTo('App\Departmenttype', 'department');
    }

     public function costcentre_name()
    {
            return $this->belongsTo('App\Costcentretype', 'costcentretype');
    }
    
    public function portfolio()
    {
            return $this->belongsTo('App\Portfolio', 'portfolio_id');
    }
	
    public function parent()
    {
            return $this->belongsTo('App\Buckets', 'parent_bucket');
    }

    public function children()
    {
            return $this->hasMany('App\Buckets', 'parent_bucket');
    }

    public function children_rec()
    {
        return $this->children()->where('company_id', Auth::user()->company_id)->with('children')->with('portfolio')->with('department_name')->with('costcentre_name')->with('currencyname');
    }

    public function currencyname()
    {
        return $this->hasOne('App\Currency', 'id', 'currency');
    }

    public function creator() {
        return $this->hasOne('App\User', 'id', 'created_by');
    }

    public function updator() {
        return $this->hasOne('App\User', 'id', 'updated_by');
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