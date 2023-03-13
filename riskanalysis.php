<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class riskanalysis extends Model
{
	protected $table = "qualitative_risk_analysis";
        
        public $timestamp = true;
		
}
