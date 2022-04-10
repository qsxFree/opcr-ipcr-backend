<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeProfile extends Model {
    use HasFactory;

    protected $table = "employee_profile";
    protected $fillable = [
        'user',
        'role',
        'first_name',
        'middle_name',
        'last_name',
        'extension_name',
    ];

    protected $hidden = [
        'user',
        'role',
        'created_at',
        'updated_at',
    ];


    public function _role() {
        return $this->belongsTo(EmployeeRole::class, 'role');
    }

    public function _user() {
        return $this->belongsTo(User::class, 'user');
    }
}
