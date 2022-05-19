<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StrategicPlanAndEmployee extends Model
{
    use HasFactory;

    protected $table = 'strategic_employee';
    protected $hidden = ['strategic_plan', 'employee'];
    public $timestamps = false;

    public function _strategic_plan()
    {
        return $this->belongsTo(StrategicPlan::class, 'strategic_plan');
    }

    public function _employee()
    {
        return $this->belongsTo(EmployeeProfile::class, 'employee');
    }
}
