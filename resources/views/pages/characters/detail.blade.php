<x-app-layout>
    <div class="w-full h-full flex flex-col md:px-56 2xl:px-80 py-14 ">
        <x-character.detail :character="$character" />
        <livewire:skills-list :character="$character" />
    </div>
</x-app-layout>
