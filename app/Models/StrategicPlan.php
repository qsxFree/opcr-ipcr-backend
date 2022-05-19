<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StrategicPlan extends Model
{
    use HasFactory;
    protected $table = "strategic_plan";
    protected $fillable = [
        'code',
        'mfo',
        'success_indicator',
        'budget',
        'type',
        'office',
    ];

    protected $hidden = [
        'office',
        'mfo',
        'approved_by',
        'created_at',
        'updated_at',
    ];

    public function _mfo()
    {
        return $this->belongsTo(Mfo::class, "mfo");
    }

    public function _office()
    {
        return $this->belongsTo(Office::class, "office");
    }

    public function _accountable()
    {
        return $this->belongsToMany(EmployeeProfile::class, 'strategic_employee', 'strategic_plan', 'employee');
    }

    public function _approvedBy()
    {
        return $this->belongsTo(EmployeeProfile::class, 'approved_by');
    }
}
