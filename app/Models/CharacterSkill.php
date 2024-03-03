<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CharacterSkill extends Model
{
    use HasFactory;

    protected $casts = [
        'level' => 'array',
    ];

    public function stats()
    {
        return $this->belongsTo(CharacterStat::class, 'character_id');
    }
}
