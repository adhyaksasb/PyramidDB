<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;

    public function paths()
    {
        return $this->belongsTo(Path::class, 'path_id');
    }

    public function stats()
    {
        return $this->belongsTo(CharacterStat::class, 'id');
    }

    public function skills()
    {
        return $this->hasMany(CharacterSkill::class);
    }

    public function getRangeHP($max, $min, $hp)
    {
        $rangeHP = 100 - round(($max - $hp) / ($max - $min) * 100, 2);
        ($rangeHP <= 1) ? $rangeHP = 1 : $rangeHP;
        return $rangeHP;
    }

    public function getRangeATK($max, $min, $atk)
    {
        $rangeATK = 100 - round(($max - $atk) / ($max - $min) * 100, 2);
        ($rangeATK <= 1) ? $rangeATK = 1 : $rangeATK;
        return $rangeATK;
    }
    public function getRangeDEF($max, $min, $def)
    {
        $rangeDEF = 100 - round(($max - $def) / ($max - $min) * 100, 2);
        ($rangeDEF <= 1) ? $rangeDEF = 1 : $rangeDEF;
        return $rangeDEF;
    }
    public function getRangeSPD($max, $min, $spd)
    {
        $rangeSPD = 100 - round(($max - $spd) / ($max - $min) * 100, 2);
        ($rangeSPD <= 1) ? $rangeSPD = 1 : $rangeSPD;
        return $rangeSPD;
    }
    public function getRangeEnergy($max, $min, $energy)
    {
        $rangeEnergy = 100 - round(($max - $energy) / ($max - $min) * 100, 2);
        ($rangeEnergy <= 1) ? $rangeEnergy = 1 : $rangeEnergy;
        return $rangeEnergy;
    }
}
