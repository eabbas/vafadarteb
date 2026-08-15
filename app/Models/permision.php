<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class permision extends Model
{
    protected $fillable=[
        'id',
        'fa_title',
        'ea_title',
    ];
    public function roles(){
        return $this->belongsToMany(role::class,'role_permisions');
    }
}
