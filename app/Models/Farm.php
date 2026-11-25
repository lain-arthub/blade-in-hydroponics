<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;


#[Fillable([
    'user_id',
    'name',
    'location',
    ])]

class Farm extends Model
{
    protected $table = 'farms';
}
