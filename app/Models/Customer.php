<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
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
