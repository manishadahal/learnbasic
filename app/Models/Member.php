<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $primarykey = 'id';
    // function getGroup()
    // {
    //     return $this->hasOne('App\Models\Group', 'group_id');
    // }
    function group()
    {
        return $this->hasMany('App\Models\Group', 'group_id', 'group_id');
    }
}
