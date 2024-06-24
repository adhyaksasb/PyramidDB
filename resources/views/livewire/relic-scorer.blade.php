<div class="dark:text-gray-200">
    <div class="bg-dark-700 w-full md:p-8 p-4 rounded-lg">
        <div class="flex lg:flex-row flex-col">
            <div class="space-y-2 p-3">
                <div class="flex items-center gap-4 bg-dark-800 px-8 py-4 rounded-t-xl">
                    <img src="https://pyramidb.s3.ap-southeast-3.amazonaws.com/img/starRail/{{$profile['player']['avatar']['icon']}}" alt="avatar" class="w-24 h-24">
                    <div class="flex flex-col">
                        <p class="text-md font-bold">{{ $profile['player']['nickname'] }}</p>
                        <p class="text-md text-gray-300">Trailblazer Level: {{$profile['player']['level']}}</p>
                        <p class="text-md text-gray-300">{{ $profile['player']['signature']}}</p>
                    </div>  
                </div>
                <div class="flex px-2 gap-3">
                    <div class="flex justify-between w-full">
                        <p class="text-sm">Characters</p>
                        <p class="text-custom text-sm">{{$profile['player']['space_info']['avatar_count']}}</p>
                    </div>
                    <div class="flex justify-between w-full">
                        <p class="text-sm">World Level</p>
                        <p class="text-custom text-sm">{{$profile['player']['world_level']}}</p>
                    </div>
                </div>
                <div class="flex px-2 gap-3">
                    <div class="flex justify-between w-full">
                        <p class="text-sm">Lightcones</p>
                        <p class="text-custom text-sm">{{$profile['player']['space_info']['light_cone_count']}}</p>
                    </div>
                    <div class="flex justify-between w-full">
                        <p class="text-sm">SU Progress</p>
                        <p class="text-custom text-sm">{{$profile['player']['space_info']['universe_level']}}</p>
                    </div>
                </div>
                <div class="flex px-2 gap-3">
                    <div class="flex justify-between w-full">
                        <p class="text-sm">Achievements</p>
                        <p class="text-custom text-sm">{{$profile['player']['space_info']['achievement_count']}}</p>
                    </div>
                    <div class="flex justify-between w-full">
                        <p class="text-sm">MoC Progress</p>
                        <p class="text-custom text-sm">{{$profile['player']['space_info']['memory_data']['chaos_id']}}</p>
                    </div>
                </div>
            </div>
            <div class="p-4">
                <p class="font-bold text-lg">Saved Characters</p>
                <div class="flex flex-wrap items-center rounded-lg gap-6 py-4 px-4">
                @foreach ($profile['characters'] as $character)
                <a wire:key="{{ $character['id'] }}"
                    class="text-gray-200 rarity-{{ $character['rarity'] }} w-24 h-full rounded-lg hover:scale-105 cursor-pointer relative">
                    <picture class="w-24 h-24 object-cover">
                        <img src="https://pyramidb.s3.ap-southeast-3.amazonaws.com/img/starRail/{{$character['icon'] }}" alt="image"
                            class="w-24 h-24 object-cover">
                        <img src="https://pyramidb.s3.ap-southeast-3.amazonaws.com/img/starRail/{{$character['element']['icon']}}"
                            alt="element" class="absolute w-5 left-0 top-0">
                        <img src="https://pyramidb.s3.ap-southeast-3.amazonaws.com/img/starRail/{{$character['path']['icon'] }}"
                            alt="path" class="absolute w-5 right-0 top-0">
                    </picture>
                    <div class="py-1 text-center h-9 flex flex-col items-center justify-center">
                        <p class="text-sm leading-none break-words">{{ $character['name'] }}</p>
                        <p class="text-sm">Lv. {{$character['level']}}</p>
                    </div>
                </a>
                @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="w-full coverBg rounded-3xl px-4 py-6 z-10 my-5">
        <div class="xl:flex">
            <div class="mb-5">
                <div class="lg:flex xl:flex-col">
                    <div class="w-full lg:block">

                    </div>
                    <div class="w-full">

                    </div>
                    Testdsfdsfds
                </div>
            </div>
        </div>

    </div>
</div>
