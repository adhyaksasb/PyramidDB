<div class="bg-dark-900 dark:text-gray-200 md:grid md:grid-cols-12 rounded-t-md">
    <div class=" col-span-4 flex justify-center items-center">
        <img src="{{ asset('img/starRail/' . $character->portrait) }}" alt="{{ $character->portrait }}"
            class="w-fit h-fit p-2">
    </div>
    <div class="col-span-8">
        <div class="py-8 px-9">
            <div class="flex justify-between">
                <span class="text-4xl text-custom pt-4">{{ $character->name }}</span>
                <div class="flex gap-2">
                    <div class="flex flex-col justify-center items-center shrink">
                        <img src="{{ asset('img/starRail/icon/deco/rarity_' . $character->rarity . '.png') }}"
                            alt="{{ $character->element }}" class="w-12 h-12">
                        <p>{{ $character->rarity }} Star</p>
                    </div>
                    <div class="flex flex-col justify-center items-center shrink">
                        <img src="{{ asset('img/starRail/icon/element/' . $character->element . '.png') }}"
                            alt="{{ $character->element }}" class="w-12 h-12">
                        <p>{{ $character->element }}</p>
                    </div>
                </div>

            </div>
            <div class="flex items-center gap-2 bg-dark-700 py-2 px-4 w-fit rounded-md">
                <img src="{{ asset('img/starRail/' . $character->paths->icon) }}" alt="{{ $character->paths->name }}"
                    class="w-8 h-8">
                <span class="text-xl">{{ $character->paths->name }}</span>
            </div>
            <div class="flex flex-col py-4 pr-1 gap-2">
                <div id="HP" class="grid grid-cols-12 items-center justify-between">
                    <div class="flex items-center gap-2 col-span-4 md:col-span-3">
                        <img src="{{ asset('img/starRail/icon/property/IconMaxHP.png') }}" alt="Max HP"
                            class="w-8 h-8">
                        <span class="text-lg">HP</span>
                    </div>
                    <div
                        class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-dark-700 col-span-6 md:col-span-7 md:w-full">
                        <div class="bg-custom h-2.5 rounded-full"
                            style="width: {{ $character->getRangeHP(1475, 847, $character->stats->hp) }}%">
                        </div>
                    </div>
                    <div class="col-span-2 flex justify-end">
                        <span class="text-lg">{{ $character->stats->hp }}</span>
                    </div>
                </div>
                <div id="ATK" class="grid grid-cols-12 items-center justify-between">
                    <div class="flex items-center gap-2 col-span-4 md:col-span-3">
                        <img src="{{ asset('img/starRail/icon/property/IconAttack.png') }}" alt="Attack"
                            class="w-8 h-8">
                        <span class="text-lg">ATK</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-dark-700 col-span-6 md:col-span-7">
                        <div class="bg-custom h-2.5 rounded-full"
                            style="width: {{ $character->getRangeATK(776, 466, $character->stats->atk) }}%">
                        </div>
                    </div>
                    <div class="col-span-2 flex justify-end">
                        <span class="text-lg">{{ $character->stats->atk }}</span>
                    </div>
                </div>
                <div id="DEF" class="grid grid-cols-12 items-center justify-between">
                    <div class="flex items-center gap-2 col-span-4 md:col-span-3">
                        <img src="{{ asset('img/starRail/icon/property/IconDefence.png') }}" alt="Defence"
                            class="w-8 h-8">
                        <span class="text-lg">DEF</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-dark-700 col-span-6 md:col-span-7">
                        <div class="bg-custom h-2.5 rounded-full"
                            style="width: {{ $character->getRangeDEF(655, 331, $character->stats->def) }}%">
                        </div>
                    </div>
                    <div class="col-span-2 flex justify-end">
                        <span class="text-lg">{{ $character->stats->def }}</span>
                    </div>
                </div>
                <div id="SPD" class="grid grid-cols-12 items-center justify-between">
                    <div class="flex items-center gap-2 col-span-4 md:col-span-3">
                        <img src="{{ asset('img/starRail/icon/property/IconSpeed.png') }}" alt="Speed"
                            class="w-8 h-8">
                        <span class="text-lg">SPD</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-dark-700 col-span-6 md:col-span-7">
                        <div class="bg-custom h-2.5 rounded-full"
                            style="width: {{ $character->getRangeSPD(115, 90, $character->stats->spd) }}%">
                        </div>
                    </div>
                    <div class="col-span-2 flex justify-end">
                        <span class="text-lg">{{ $character->stats->spd }}</span>
                    </div>
                </div>
                <div id="Energy" class="grid grid-cols-12 items-center justify-between">
                    <div class="flex items-center gap-2 col-span-4 md:col-span-3">
                        <img src="{{ asset('img/starRail/icon/property/IconEnergyLimit.png') }}" alt="Energy"
                            class="w-8 h-8">
                        <span class="text-lg">Energy</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-dark-700 col-span-6 md:col-span-7">
                        <div class="bg-custom h-2.5 rounded-full"
                            style="width: {{ $character->getRangeSPD(180, 110, $character->max_sp) }}%"></div>
                    </div>
                    <div class="col-span-2 flex justify-end">
                        <span class="text-lg">{{ $character->max_sp }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
