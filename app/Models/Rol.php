<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Rol extends Model
{
    protected $fillable = [
        'rol',
        'desc',
    ];


    public function users()
    {
        return $this->belongsToMany('App\Models\User')
        ->withTimestamps();
    }
}
