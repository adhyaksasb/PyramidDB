<?php

namespace App\Http\Controllers;

use App\Models\Character;
use App\Models\CharacterSkill;
use App\Models\CharacterStat;
use App\Models\Path;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    public function index()
    {
        $characters = Character::with('paths')->orderBy('name')->get();

        return view('pages.characters.index', compact('characters'));
    }

    public function detail(Character $character)
    {
        // $statMetric = [
        //     $maxATK = CharacterStat::max('atk'),
        //     $minATK = CharacterStat::min('atk'),
        //     $maxDEF = CharacterStat::max('def'),
        //     $minDEF = CharacterStat::min('def'),
        //     $maxSPD = CharacterStat::max('spd'),
        //     $minSPD = CharacterStat::min('spd'),
        //     $maxNRG = Character::max('max_sp'),
        //     $minNRG = Character::min('max_sp')
        // ];

        return view('pages.characters.detail', compact('character'));
    }
}
