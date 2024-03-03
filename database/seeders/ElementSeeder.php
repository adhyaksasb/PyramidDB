<?php

namespace Database\Seeders;

use App\Models\Element;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ElementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $elementsRecords = [
            [
                "id" => 1,
                "name" => "Fire",
                "desc" => "Using Fire attacks to trigger Weakness Break will deal Fire DMG and apply the Burn effect, dealing Fire DoT.",
                "color" => "#F84F36",
                "icon" => "icon/element/Fire.png"
            ],
            [
                "id" => 2,
                "name" => "Ice",
                "desc" => "Using Ice attacks to trigger Weakness Break will deal Ice DMG and Freeze the target, immobilizing the enemy and dealing additional Ice DMG.",
                "color" => "#47C7FD",
                "icon" => "icon/element/Ice.png"
            ],
            [
                "id" => 3,
                "name" => "Imaginary",
                "desc" => "Using Imaginary attacks to trigger Weakness Break will deal Imaginary DMG and apply the Imprisonment effect, delaying the enemy's action and reducing its SPD.",
                "color" => "#F4D258",
                "icon" => "icon/element/Imaginary.png"
            ],
            [
                "id" => 4,
                "name" => "Lightning",
                "desc" => "Using Lightning attacks to trigger Weakness Break will deal Lightning DMG and apply the Shock effect, dealing Lightning DoT.",
                "color" => "#8872F1",
                "icon" => "icon/element/Lightning.png"
            ],
            [
                "id" => 5,
                "name" => "Physical",
                "desc" => "Using Physical attacks to trigger Weakness Break will deal Physical DMG and apply the Bleed effect, dealing Physical DoT.",
                "color" => "#FFFFFF",
                "icon" => "icon/element/Physical.png"
            ],
            [
                "id" => 6,
                "name" => "Quantum",
                "desc" => "Using Quantum attacks to trigger Weakness Break will deal Quantum DMG and apply the Entanglement effect, delaying the enemy's action and dealing Additional Quantum DMG to the affected enemy at the start of the next turn. When the enemy is hit, this extra DMG will increase.",
                "color" => "#1C29BA",
                "icon" => "icon/element/Quantum.png"
            ],
            [
                "id" => 7,
                "name" => "Wind",
                "desc" => "Using Wind attacks to trigger Weakness Break will deal Wind DMG and apply the Wind Shear effect, dealing Wind DoT.",
                "color" => "#00FF9C",
                "icon" => "icon/element/Wind.png"
            ],
            [
                "id" => 8,
                "name" => "Lightning",
                "desc" => "Using Lightning attacks to trigger Weakness Break will deal Lightning DMG and apply the Shock effect, dealing Lightning DoT.",
                "color" => "#8872F1",
                "icon" => "icon/element/Lightning.png"
            ]
        ];

        Element::insert($elementsRecords);
    }
}
