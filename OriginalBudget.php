<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OriginalBudget extends Model
{
    protected $table = 'budget_original';
    
    protected $fillable = [
          'project_id',
          'period_from',
          'period_to',
          'overall',
	  'year1',
          'year2',
	  'year3',
	  'year4',
          'year5',
	  'original_budget',
          'changed_by',
          'status',
          'created_by',
          'company_id'
    ];
}
