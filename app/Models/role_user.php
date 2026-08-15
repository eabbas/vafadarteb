<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class role_user extends Model
{
    protected $fillable=[
        'id',
        'user_id',
        'role_id',
    ];
}
