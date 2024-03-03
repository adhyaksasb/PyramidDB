<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\CharacterSkill;
use Livewire\Attributes\Computed;

class SkillList extends Component
{
    public $character;
    public $basic = 4;
    public $skill = 1;
    public $ultimate = 1;
    public $talent = 1;

    #[Computed()]
    public function basicATK()
    {
        $basicATK = CharacterSkill::where('character_id', $this->character->id)
            ->where('type', "Basic ATK")->first();

        return $basicATK->level[$this->basic - 1];
    }

    public function render()
    {
        return view('livewire.character-skill');
    }
}
