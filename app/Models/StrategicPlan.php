<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StrategicPlan extends Model {
    use HasFactory;
    protected $table = "office";
    protected $fillable = [
        'code',
        'mfo',
        'success_indicator',
        'type',
        'office',
    ];

    protected $hidden = [
        'office',
        'mfo',
        'created_at',
        'updated_at',
    ];

    public function _mfo() {
        return $this->belongsTo(Mfo::class, "mfo");
    }

    public function _office() {
        return $this->belongsTo(Office::class, "office");
    }
}
