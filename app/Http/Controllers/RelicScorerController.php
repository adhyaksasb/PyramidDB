<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class RelicScorerController extends Controller
{
    public function index() {
        $response = Http::get('https://api.mihomo.me/sr_info_parsed/800333171?lang=en');

        $profile = $response->json();
 
        return view('pages.relic-scorer', compact('profile'));
    }
}
