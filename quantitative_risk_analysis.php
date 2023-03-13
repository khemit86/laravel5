<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class quantitative_risk_analysis extends Model {

    protected $table = 'quantitative_risk_analysis';
    protected $fillable = [
        'quan_id',
        'project_id', 'risk_mitigation_action', 'created_at', 'updated_at',
        'quan_risk_id', 'risk_type', 'quan_category', 'quan_risk_desc', 'quan_total_loss',
        'quan_currency', 'quan_probability', 'quan_risk_score', 'quan_expected_loss', 'quan_created_by',
        'quan_changed_by', 'company_id', 'status', 'risk_mitigation_action'
    ];
    public $timestamps = false;

    public static function validateQuantitative($post) {
        $validationmessages = [
        'project_id.required' => 'Please select project id',
        'quan_category.required' => 'Please select risk category',
        'quan_risk_desc.required' => 'Please enter risk description',
        'quan_risk_desc.min' => 'Please enter at least 3 characters.',
        'quan_risk_desc.max' => 'Please enter no more than 100 characters.',
        'quan_total_loss.required' => 'Please enter total loss',
        'quan_total_loss.numeric' => 'Please enter only digits.',
        'quan_currency.required' => 'Please select currency',
        'quan_probability.required' => 'Please enter probability between 0 to 100',
        'quan_probability.numeric' => 'Please enter only digits.',
        'quan_probability.min' => 'Please enter a value greater than or equal to 1.',
        'quan_probability.max' => 'Please enter a value less than or equal to 99.',
        'status.required' => 'Please select status',
        'risk_mitigation_action.required' => 'Please enter risk mitigation action',
        'risk_mitigation_action.max' => 'Allow only 250 characters',
        'quan_risk_score.required' => 'Risk score is not set because expected loss is out of range, Please change your quantitative risk score range first.'
        ];

        $validator = Validator::make($post, [
                    'project_id' => 'required',
                    'quan_category' => 'required',
                    'quan_risk_desc' => 'required|min:3|max:200',
                    'quan_total_loss' => 'required|numeric',
                    'quan_currency' => 'required',
                    'quan_probability' => 'required|numeric|min:1|max:99',
                    'status' => 'required',
                    'risk_mitigation_action' => 'required|max:250',
                    'quan_risk_score' => 'required'
                        ], $validationmessages);
        return $validator;
    }

}
