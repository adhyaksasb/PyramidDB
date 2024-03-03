<div class="bg-dark-900 p-8 space-y-2 rounded-b-md dark:text-gray-200">
    @foreach ($character->skills as $skill)
        <div class="flex items-center gap-4">
            <img src="{{ asset('storage/starRail/' . $skill->icon) }}" alt="{{ $skill->name }}" class="w-24 h-24">
            <div x-data="{ level: $wire.basic }" class="flex flex-col gap-2 w-full">
                <p class="text-md">{{ $skill->name }} | {{ $skill->type }} |
                    {{ $skill->effect }}</p>
                <div class="flex">
                    <p class="text-md">Level</p><input class="w-20 bg-transparent ml-2 text-custom" type="input"
                        x-model="level" />
                    @if ($skill->type != 'Technique')
                        <input type="range" min="1" max="{{ $skill->max_level }}" x-model="level"
                            wire:change='basic' step="1" class="w-80 h-6 rangeSlider bg-red-400" />
                    @endif
                </div>
                <p class="text-md">
                    @if ($skill->type != 'Technique')
                        <p>{{ $skill->level[$basic] }}</p>
                    @endif
                </p>
            </div>
        </div>
    @endforeach
</div>
