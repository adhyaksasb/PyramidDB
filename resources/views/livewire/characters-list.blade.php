<div class="space-y-8 min-w-[375px]">
    {{-- Characters Filter --}}
    <x-character.filters :rarity="$rarity" :element="$element" :path="$path" />
    {{-- Characters List --}}
    <div
        class="grid grid-cols-[repeat(auto-fill,5rem)] justify-between items-center bg-dark-900 rounded-lg gap-6 py-4 px-10">
        {{-- Cards --}}
        @if ($characters)
            @foreach ($characters as $character)
                <a wire:key="{{ $character->id }}" wire:navigate href="{{ route('characters.detail', $character->tag) }}"
                    class="text-gray-200 rarity-{{ $character->rarity }} w-24 h-full rounded-lg hover:scale-105 cursor-pointer relative">
                    <picture class="w-24 h-24 object-cover">
                        <img src="{{ asset('storage/starRail/' . $character->icon) }}" alt="{{ $character->tag }}"
                            class="w-24 h-24 object-cover">
                        <img src="{{ asset('storage/starRail/icon/element/' . $character->element . '.png') }}"
                            alt="{{ $character->element }}" class="absolute w-5 left-0 top-0">
                        <img src="{{ asset('storage/starRail/' . $character->paths->icon) }}"
                            alt="{{ $character->element }}" class="absolute w-5 right-0 top-0">
                    </picture>
                    <div class="py-1 text-center h-8 flex items-center justify-center">
                        <p class="text-sm leading-none break-words">{{ $character->name }}</p>
                    </div>
                </a>
            @endforeach
        @else
            <div>There's 0 character in result</div>
        @endif
    </div>
</div>
