<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mfo extends Model {
    use HasFactory;

    protected $table = "mfo";

    protected $fillable = [
        'code',
        'name',
        'description',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
