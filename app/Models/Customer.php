<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'customer_id', 'name', 'address', 'phonenumber', 'dob', 'password',
    ];
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ucwords($value);
    }

    public function getPhonenumberAttribute($value)
    {
        return "+977 " . $value;
    }
}
