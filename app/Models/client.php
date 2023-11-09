<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    use HasFactory;

    protected $fillable = [
        'phone', 'name', 'email', 'image', 'date_of_birth', 'sex', 'blood_group', 'created_at', 'service_area', 'address'
    ];
}
