<div class="bg-dark-900 p-8 space-y-4 rounded-b-md dark:text-gray-200">
    {{-- Basic ATK --}}
    <div class="flex flex-col md:flex-row gap-3">
        <img src="{{ asset('storage/starRail/' . $character->skills[0]->icon) }}" alt="{{ $character->skills[0]->name }}"
            class="w-24 h-24">
        <div x-data="{ level: 1 }" class="flex flex-col gap-2 w-full">
            <div class="flex items-center gap-2">
                <p class="text-md">{{ $character->skills[0]->name }}</p>
                <span class="bg-dark-700 p-1.5 text-sm rounded-xl text-custom">{{ $character->skills[0]->type }}</span>
            </div>
            <div class="flex">
                <p class="text-md">Level</p><input class="w-16 bg-transparent ml-2 text-custom" type="input"
                    x-model="level" disabled />
                <input type="range" min="1" max="{{ $character->skills[0]->max_level }}" x-model="level"
                    step="1" class="w-80 h-6 rangeSlider bg-red-400" />
            </div>
            <span class="bg-dark-700 p-1.5 text-sm rounded-xl w-fit">{{ $character->skills[0]->effect }}</span>
            @for ($i = 0; $i < $character->skills[0]->max_level; $i++)
                <p class="text-md" x-cloak x-show="level == {{ $i + 1 }}">
                    {{ $character->skills[0]->level[$i] }}
                </p>
            @endfor
        </div>
    </div>
    {{-- Skills --}}
    <div class="flex flex-col md:flex-row gap-3">
        <img src="{{ asset('storage/starRail/' . $character->skills[1]->icon) }}"
            alt="{{ $character->skills[1]->name }}" class="w-24 h-24">
        <div x-data="{ level: 1 }" class="flex flex-col gap-2 w-full">
            <div class="flex items-center gap-2">
                <p class="text-md">{{ $character->skills[1]->name }}</p><span
                    class="bg-dark-700 p-1.5 text-sm rounded-xl text-custom">{{ $character->skills[1]->type }}</span>
            </div>
            <div class="flex">
                <p class="text-md">Level</p><input class="w-16 bg-transparent ml-2 text-custom" type="input"
                    x-model="level" disabled />
                <input type="range" min="1" max="{{ $character->skills[1]->max_level }}" x-model="level"
                    step="1" class="w-80 h-6 rangeSlider bg-red-400" />
            </div>
            @foreach ($character->skills as $skill)
                @if ($skill->type == 'Skill')
                    <span class="bg-dark-700 p-1.5 text-sm rounded-xl w-fit">{{ $skill->effect }}</span>
                    @for ($i = 0; $i < $skill->max_level; $i++)
                        <p class="text-md" x-cloak x-show="level == {{ $i + 1 }}">
                            {{ $skill->level[$i] }}
                        </p>
                    @endfor
                @endif
            @endforeach
        </div>
    </div>
    {{-- Ultimate --}}
    <div class="flex flex-col md:flex-row gap-3">
        <img src="{{ asset('storage/starRail/' . $character->skills[2]->icon) }}"
            alt="{{ $character->skills[2]->name }}" class="w-24 h-24">
        <div x-data="{ level: 1 }" class="flex flex-col gap-2 w-full">
            <div class="flex items-center gap-2">
                <p class="text-md">{{ $character->skills[2]->name }}</p>
                <span class="bg-dark-700 p-1.5 text-sm rounded-xl text-custom">{{ $character->skills[2]->type }}</span>
            </div>
            <div class="flex">
                <p class="text-md">Level</p><input class="w-16 bg-transparent ml-2 text-custom" type="input"
                    x-model="level" disabled />
                <input type="range" min="1" max="{{ $character->skills[2]->max_level }}" x-model="level"
                    step="1" class="w-80 h-6 rangeSlider bg-red-400" />
            </div>
            <span class="bg-dark-700 p-1.5 text-sm rounded-xl w-fit">{{ $character->skills[2]->effect }}</span>
            @for ($i = 0; $i < $character->skills[2]->max_level; $i++)
                <p class="text-md" x-cloak x-show="level == {{ $i + 1 }}">
                    {{ $character->skills[2]->level[$i] }}
                </p>
            @endfor
        </div>
    </div>
    {{-- Talent --}}
    <div class="flex flex-col md:flex-row gap-3">
        <img src="{{ asset('storage/starRail/' . $character->skills[3]->icon) }}"
            alt="{{ $character->skills[3]->name }}" class="w-24 h-24">
        <div x-data="{ level: 1 }" class="flex flex-col gap-2 w-full">
            <div class="flex items-center gap-2">
                <p class="text-md">{{ $character->skills[3]->name }}</p>
                <span class="bg-dark-700 p-1.5 text-sm rounded-xl text-custom">{{ $character->skills[3]->type }}</span>
            </div>
            <div class="flex">
                <p class="text-md">Level</p><input class="w-16 bg-transparent ml-2 text-custom" type="input"
                    x-model="level" disabled />
                <input type="range" min="1" max="{{ $character->skills[3]->max_level }}" x-model="level"
                    step="1" class="w-80 h-6 rangeSlider bg-red-400" />
            </div>
            <span class="bg-dark-700 p-1.5 text-sm rounded-xl w-fit">{{ $character->skills[3]->effect }}</span>
            @for ($i = 0; $i < $character->skills[3]->max_level; $i++)
                <p class="text-md" x-cloak x-show="level == {{ $i + 1 }}">
                    {{ $character->skills[3]->level[$i] }}
                </p>
            @endfor
        </div>
    </div>
    {{-- Technique --}}
    <div class="flex flex-col md:flex-row gap-4">
        <img src="{{ asset('storage/starRail/' . $character->skills[4]->icon) }}"
            alt="{{ $character->skills[4]->name }}" class="w-24 h-24">
        <div x-data="{ level: 1 }" class="flex flex-col gap-2 w-full">
            <div class="flex items-center gap-2">
                <p class="text-md">{{ $character->skills[4]->name }}</p>
                <span
                    class="bg-dark-700 p-1.5 text-sm rounded-xl text-custom">{{ $character->skills[4]->type }}</span>
            </div>
            <div class="flex">
                <p class="text-md">Level</p><input class="w-16 bg-transparent ml-2 text-custom" type="input"
                    x-model="level" disabled />
            </div>
            <p class="text-md">{{ $character->skills[4]->description }}</p>
        </div>
    </div>
</div>
