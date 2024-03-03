<?php

namespace App\Livewire;

use App\Models\CharacterSkill;
use Livewire\Attributes\Computed;
use Livewire\Component;

class SkillsList extends Component
{
    public $character;
    public $basic = 1;
    public $skill = 1;
    public $ultimate = 1;
    public $talent = 1;


    public function render()
    {
        return view('livewire.skills-list');
    }
}
