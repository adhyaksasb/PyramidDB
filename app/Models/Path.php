<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Path extends Model
{
    use HasFactory;

    public function characters()
    {
        return $this->hasMany('App\Models\Character', 'id');
    }
}
