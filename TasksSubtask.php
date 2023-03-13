<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TasksSubtask extends Model
{
    protected $table = 'tasks_subtask';
	protected $primaryKey = 'id';
	protected $fillable   = ['time_sheet_user_id', 'time_sheet_approver_id','status','created_by','total_demand'    ,'updated_by','company_id'];
	

	
}
