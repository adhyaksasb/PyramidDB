<div class="fixed h-screen left-0 top-0 hidden flex-col gap-y-4 items-center py-5 w-24 bg-dark-900 md:flex">
    <a wire:navigate href="{{ route('home') }}">
        <img src="{{ asset('img/logo-mini.svg') }}" alt="" class="px-2 w-[4.25rem] h-[4.25rem]">
    </a>
    <div class="flex flex-col gap-y-4 items-end self-end">
        <x-sidebar-button href="{{ route('home') }}" name="Home" src='HomeIconBlack.png' :active="request()->routeIs('home')" />
        <x-sidebar-button href="{{ route('characters') }}" name="Characters List" src='AvatarIconBlack.png'
            :active="request()->routeIs('characters') || request()->routeIs('characters.detail')" />
        <x-sidebar-button href="{{ route('relic-scorer') }}" name="Relic Scorer" src='RelicsIconBlack.png'
            :active="request()->routeIs('relic-scorer')" />
        <x-sidebar-button href="{{ route('achievements') }}" name="Achievements Tracker" src='AchievementIconBlack.png'
            :active="request()->routeIs('achievements')" />
        <x-sidebar-button href="{{ route('databank') }}" name="Data Bank" src='DataBankIconBlack.png'
            :active="request()->routeIs('databank')" />
    </div>
</div>
