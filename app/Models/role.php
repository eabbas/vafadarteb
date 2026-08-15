<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    protected $fillable=[
        'id',
        'fa_title',
        'ea_title',
    ];
    public function users(){
        return $this->belongsToMany(User::class,'role_users');
    }
    public function permisions(){
        return $this->belongsToMany(permision::class,'role_permisions');
    }
}
