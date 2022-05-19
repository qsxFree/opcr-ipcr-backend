<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Facades\DB;

class Office extends Model
{
    use HasFactory;
    protected $table = "office";
    protected $fillable = [
        'code',
        'name',
        'head',
        'is_delivery_unit',
    ];

    protected $hidden = [
        'head',
        'created_at',
        'updated_at',
    ];

    public function _head()
    {
        return $this->belongsTo(EmployeeProfile::class, "head");
    }

    public function _parent()
    {
        return $this->belongsToMany(Office::class, 'office_parent_rl', 'child', 'parent');
    }

    public function _children()
    {
        return $this->belongsToMany(Office::class, 'office_parent_rl', 'parent', 'child');
    }


    // protected function isParent(): Attribute
    // {
    //     return new Attribute(
    //         get: function () {
    //             $res = DB::table('office_parent_rl')->select('child')->where('parent', $this->id)->first();
    //             if ($res) {
    //                 return true;
    //             } else {
    //                 return false;
    //             }
    //         },
    //     );
    // }
}
