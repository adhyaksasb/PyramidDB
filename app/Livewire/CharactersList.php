<?php

namespace App\Livewire;

use App\Models\Character;
use App\Models\Path;
use Livewire\Component;

class CharactersList extends Component
{
    public $rarity;
    public $element;
    public $path;

    public function setRarity($rarity)
    {
        $this->rarity = $rarity;
    }

    public function setElement($element)
    {
        $this->element = $element;
    }

    public function setPath($path)
    {
        $this->path = $path;
    }

    public function render()
    {
        $query = Character::with('paths');

        if ($this->rarity) {
            $query->where('rarity', $this->rarity);
        }

        if ($this->element) {
            $query->where('element', $this->element);
        }

        if ($this->path) {
            $query->where('path_id', $this->path);
        }

        $characters = $query->orderby('name')->get();

        return view('livewire.characters-list', compact('characters'));
    }
}
