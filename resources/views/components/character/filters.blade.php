<div class="flex md:flex-row flex-col justify-center items-center gap-4 bg-dark-900 py-2 px-8 rounded-lg flex-wrap">
    <div id="rarity" class="flex bg-dark-700 rounded-lg">
        <button @if ($rarity == 4) wire:click="setRarity(null)" @else wire:click="setRarity('4')" @endif
            class="p-2 rounded-l-lg hover:bg-dark-800 @if ($rarity == 4) bg-dark-800 @endif"
            title="4 Star">
            <img src="{{ asset('img/starRail/icon/deco/rarity_4.png') }}" alt="rarity_4" class="w-7 h-7">
        </button>
        <button @if ($rarity == 5) wire:click="setRarity(null)" @else wire:click="setRarity('5')" @endif
            class="p-2 rounded-r-lg hover:bg-dark-800 @if ($rarity == 5) bg-dark-800 @endif"
            title="5 Star">
            <img src="{{ asset('img/starRail/icon/deco/rarity_5.png') }}" alt="rarity_5" class="w-7 h-7">
        </button>
    </div>
    <div id="element" class="flex bg-dark-700 rounded-lg">
        <button
            @if ($element == 'Fire') wire:click="setElement(null)" @else wire:click="setElement('Fire')" @endif
            class="p-2 rounded-l-lg hover:bg-dark-800 @if ($element == 'Fire') bg-dark-800 @endif"
            title="Fire">
            <img src="{{ asset('img/starRail/icon/element/Fire.png') }}" alt="Fire" class="w-7 h-7">
        </button>
        <button
            @if ($element == 'Ice') wire:click="setElement(null)" @else wire:click="setElement('Ice')" @endif
            class="p-2 hover:bg-dark-800 @if ($element == 'Ice') bg-dark-800 @endif" title="Ice">
            <img src="{{ asset('img/starRail/icon/element/Ice.png') }}" alt="Ice" class="w-7 h-7">
        </button>
        <button
            @if ($element == 'Imaginary') wire:click="setElement(null)" @else wire:click="setElement('Imaginary')" @endif
            class="p-2 hover:bg-dark-800 @if ($element == 'Imaginary') bg-dark-800 @endif" title="Imaginary">
            <img src="{{ asset('img/starRail/icon/element/Imaginary.png') }}" alt="Imaginary" class="w-7 h-7">
        </button>
        <button
            @if ($element == 'Lightning') wire:click="setElement(null)" @else wire:click="setElement('Lightning')" @endif
            class="p-2 hover:bg-dark-800 @if ($element == 'Lightning') bg-dark-800 @endif" title="Lightning">
            <img src="{{ asset('img/starRail/icon/element/Lightning.png') }}" alt="Lightning" class="w-7 h-7">
        </button>
        <button
            @if ($element == 'Physical') wire:click="setElement(null)" @else wire:click="setElement('Physical')" @endif
            class="p-2 hover:bg-dark-800 @if ($element == 'Physical') bg-dark-800 @endif" title="Physical">
            <img src="{{ asset('img/starRail/icon/element/Physical.png') }}" alt="Physical" class="w-7 h-7">
        </button>
        <button
            @if ($element == 'Quantum') wire:click="setElement(null)" @else wire:click="setElement('Quantum')" @endif
            class="p-2 hover:bg-dark-800 @if ($element == 'Quantum') bg-dark-800 @endif" title="Quantum">
            <img src="{{ asset('img/starRail/icon/element/Quantum.png') }}" alt="Quantum" class="w-7 h-7">
        </button>
        <button
            @if ($element == 'Wind') wire:click="setElement(null)" @else wire:click="setElement('Wind')" @endif
            class="p-2 rounded-r-lg hover:bg-dark-800 @if ($element == 'Wind') bg-dark-800 @endif"
            title="Wind">
            <img src="{{ asset('img/starRail/icon/element/Wind.png') }}" alt="Wind" class="w-7 h-7">
        </button>
    </div>
    <div id="path" class="flex bg-dark-700 rounded-lg">
        <button @if ($path == 7) wire:click="setPath(null)" @else wire:click="setPath(7)" @endif
            class="p-2 rounded-l-lg hover:bg-dark-800 @if ($path == 7) bg-dark-800 @endif"
            title="Abundance">
            <img src="{{ asset('img/starRail/icon/path/Abundance.png') }}" alt="path" class="w-7 h-7">
        </button>
        <button @if ($path == 1) wire:click="setPath(null)" @else wire:click="setPath(1)" @endif
            class="p-2 hover:bg-dark-800 @if ($path == 1) bg-dark-800 @endif" title="Destruction">
            <img src="{{ asset('img/starRail/icon/path/Destruction.png') }}" alt="path" class="w-7 h-7">
        </button>
        <button @if ($path == 3) wire:click="setPath(null)" @else wire:click="setPath(3)" @endif
            class="p-2 hover:bg-dark-800 @if ($path == 3) bg-dark-800 @endif" title="Erudition">
            <img src="{{ asset('img/starRail/icon/path/Erudition.png') }}" alt="path" class="w-7 h-7">
        </button>
        <button @if ($path == 4) wire:click="setPath(null)" @else wire:click="setPath(4)" @endif
            class="p-2 hover:bg-dark-800 @if ($path == 4) bg-dark-800 @endif" title="Harmony">
            <img src="{{ asset('img/starRail/icon/path/Harmony.png') }}" alt="path" class="w-7 h-7">
        </button>
        <button @if ($path == 2) wire:click="setPath(null)" @else wire:click="setPath(2)" @endif
            class="p-2 hover:bg-dark-800 @if ($path == 2) bg-dark-800 @endif" title="The Hunt">
            <img src="{{ asset('img/starRail/icon/path/Hunt.png') }}" alt="path" class="w-7 h-7">
        </button>
        <button @if ($path == 5) wire:click="setPath(null)" @else wire:click="setPath(5)" @endif
            class="p-2 rounded-r-lg hover:bg-dark-800 @if ($path == 5) bg-dark-800 @endif"
            title="Nihility">
            <img src="{{ asset('img/starRail/icon/path/Nihility.png') }}" alt="path" class="w-7 h-7">
        </button>
        <button @if ($path == 6) wire:click="setPath(null)" @else wire:click="setPath(6)" @endif
            class="p-2 hover:bg-dark-800 @if ($path == 6) bg-dark-800 @endif" title="Preservation">
            <img src="{{ asset('img/starRail/icon/path/Preservation.png') }}" alt="path" class="w-7 h-7">
        </button>
    </div>
</div>
