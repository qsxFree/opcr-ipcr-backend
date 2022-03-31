<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model {
    use HasFactory;

    protected $table = "employeeprofile";
    protected $fillable = [
        'user',
        'role',
        'first_name',
        'middle_name',
        'last_name',
        'extension_name',
        'office',
    ];

    protected $hidden = [
        'office',
        'user',
        'role',
        'created_at',
        'updated_at',
    ];
}
