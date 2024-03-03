<div class="bg-dark-900 p-8 space-y-2 rounded-b-md dark:text-gray-200">
    <div class="flex items-center gap-4">
        <img src="{{ asset('storage/starRail/' . $character->skills[0]->icon) }}" alt="{{ $character->skills[0]->name }}"
            class="w-24 h-24">
        <div x-data="{ level: $wire.basic }" class="flex flex-col gap-2 w-full">
            <p class="text-md">{{ $character->skills[0]->name }} | {{ $character->skills[0]->type }} |
                {{ $character->skills[0]->effect }}</p>
            <div class="flex">
                <p class="text-md">Level</p><input class="w-20 bg-transparent ml-2 text-custom" type="input"
                    x-model="level" />
                @if ($character->skills[0]->type != 'Technique')
                    <input type="range" min="1" max="{{ $character->skills[0]->max_level }}" x-model="level"
                        wire:change='basic' step="1" class="w-80 h-6 rangeSlider bg-red-400" />
                @endif
            </div>
            <p class="text-md">
                Test
            </p>
        </div>
    </div>
</div>
