<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Office extends Model {
    use HasFactory;
    protected $table = "office";
    protected $fillable = [
        'code',
        'name',
        'parent',
        'head',
        'is_delivery_unit',
    ];

    protected $hidden = [
        'parent',
        'head',
        'created_at',
        'updated_at',
    ];

    public function _head() {
        return $this->belongsTo(EmployeeProfile::class, "head");
    }
    public function _parent() {
        return $this->belongsTo(Office::class, "parent");
    }
}
