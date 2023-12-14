<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['id', 'full_name', 'phone_number', 'email', 'company', 'address'];
}
