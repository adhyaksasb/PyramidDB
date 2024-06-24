<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class RelicScorer extends Component
{
    public $playerID = '805346830';

    public function search() {
        return null;
    }

    public function render()
    {
        $response = Http::withUrlParameters([
            'endpoint' => 'https://api.mihomo.me',
            'parsed' => 'sr_info_parsed',
            'playerID' => $this->playerID,
            'lang' => 'en',
        ])->get('{+endpoint}/{parsed}/{playerID}?lang={lang}');

        if($response->successful()) {
            $profile = $response->json();            
        } else {
            $profile = "There's no player record";
        }
        
        
        return view('livewire.relic-scorer', compact('profile'));
    }
}
