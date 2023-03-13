<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class qualitative_risk_analysis extends Model {

    protected $table = 'qualitative_risk_analysis';
    protected $fillable = [
        'id',
        'qual_risk_id', 'project_id', 'risk_type', 'qual_category', 'risk_score', 'qual_risk_desc', 'qual_likelihood', 'qual_consequence', 'qual_created_by', 'qual_changed_by', 'qual_status', 'company_id','created_at','updated_at','risk_mitigation_action'
    ];
    public $timestamps = false;

    public static function validateQualitative($post) {
        $validationmessages = [
            'project_id.required' => 'Please select project id',
            'qual_category.required' => 'Please select risk category',
            'qual_risk_desc.required' => 'Please enter risk description',
            'qual_risk_desc.min' => 'Please enter at least 3 characters.',
            'qual_risk_desc.max' => 'Please enter no more than 100 characters.',
            'qual_likelihood.required' => 'Please select qualitative likelihood',
            'qual_consequence.required' => 'Please select qualitative consequence ',
            'qual_status.required' => 'Please select status',
            'risk_mitigation_action.required' => 'Please enter risk mitigation action',
            'risk_mitigation_action.max' => 'Allow only 250 characters',
        ];

        $validator = Validator::make($post, [
                    'project_id' => 'required',
                    'qual_category' => 'required',
                    'qual_risk_desc' => 'required|min:3|max:100',
                    'qual_likelihood' => 'required',
                    'qual_consequence' => 'required',
                    'qual_status' => 'required',
                    'risk_mitigation_action' => 'required|max:250',
                        ], $validationmessages);
        return $validator;
    }

}
