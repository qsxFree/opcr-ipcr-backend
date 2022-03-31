<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeRole extends Model {
    use HasFactory;
    protected $table = 'employee_role';
    protected $fillable = [
        'role',
    ];
    protected $hidden = ['created_at', 'updated_at',];
}
