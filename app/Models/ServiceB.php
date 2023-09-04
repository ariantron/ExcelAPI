<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceB extends Model
{
    use HasFactory;

    protected $table = 'service_b';

    protected $fillable = [
        'mobile_number',
        'product_name'
    ];
}
