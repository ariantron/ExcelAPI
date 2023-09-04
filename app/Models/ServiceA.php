<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceA extends Model
{
    use HasFactory;

    protected $table = 'service_a';

    protected $fillable = [
        'mobile_number'
    ];
}
