<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cost_centres extends Model
{
    /**
     * Added just to demonstrate that models work
     * @return String
     */
	protected $softDelete = true; 
    protected $table = 'cost_centres';
	protected $primaryKey = 'cost_id';
	protected $fillable   = ['cost_id','cost_centre', 'cost_description','company_code','company_code_description','validity_start','validity_end','status','created_by','changed_by','company_id'];
	protected $cost_id = 0;
	protected $cost_centre = '';
	protected $cost_description = '';
	protected $company_code = '';
	protected $company_code_description ='';
	protected $validity_start ='';
	protected $validity_end ='';
	protected $status ='';
	protected $changed_by ='';
	protected $created_by ='';
	public $timestamps = true; // for false updated_at and created_at
}
