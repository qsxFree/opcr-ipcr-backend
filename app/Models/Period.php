<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Period extends Model
{
    use HasFactory;

    protected $table = "period";
    protected $hidden = ['date_activated'];
    protected $fillable = ['name','description'];

    public $timestamps = false;
}
