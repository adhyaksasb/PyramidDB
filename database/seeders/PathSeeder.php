<?php

namespace Database\Seeders;

use App\Models\Path;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PathSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pathsRecords = [
            [
                "id" => 1,
                "text" => "Destruction",
                "name" => "Destruction",
                "taunt" => 125,
                "desc" => "Deals outstanding amounts of damage and possesses great survivability. Suitable for various combat scenarios",
                "icon" => "icon/path/Destruction.png"
            ],
            [
                "id" => 2,
                "text" => "The Hunt",
                "name" => "The Hunt",
                "taunt" => 75,
                "desc" => "Deals extraordinary amounts of single-target damage. The main damage dealer against Elite Enemies",
                "icon" => "icon/path/Hunt.png"
            ],
            [
                "id" => 3,
                "text" => "Erudition",
                "name" => "Erudition",
                "taunt" => 75,
                "desc" => "Deals remarkable amounts of multi-target damage. The main damage dealer against groups of enemies",
                "icon" => "icon/path/Erudition.png"
            ],
            [
                "id" => 4,
                "text" => "Harmony",
                "name" => "Harmony",
                "taunt" => 100,
                "desc" => "Applies buffs to allies to improve the team's combat capacities",
                "icon" => "icon/path/Harmony.png"
            ],
            [
                "id" => 5,
                "text" => "Nihility",
                "name" => "Nihility",
                "taunt" => 100,
                "desc" => "Applies debuffs to enemies to reduce their combat capacities",
                "icon" => "icon/path/Nihility.png"
            ],
            [
                "id" => 6,
                "text" => "Preservation",
                "name" => "Preservation",
                "taunt" => 150,
                "desc" => "Possesses powerful defensive abilities to protect allies in various ways",
                "icon" => "icon/path/Preservation.png"
            ],
            [
                "id" => 7,
                "text" => "Abundance",
                "name" => "Abundance",
                "taunt" => 100,
                "desc" => "Heals allies and restores HP to the team",
                "icon" => "icon/path/Abundance.png"
            ],
            [
                "id" => 99999,
                "text" => "",
                "name" => "General",
                "taunt" => 0,
                "desc" => "",
                "icon" => "icon/path/None.png"
            ]
        ];

        Path::insert($pathsRecords);
    }
}
