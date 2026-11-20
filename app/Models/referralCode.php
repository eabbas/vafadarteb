<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class referralCode extends Model
{
    public $fillable=[
        'user_id',
        'code',
    ];
}
