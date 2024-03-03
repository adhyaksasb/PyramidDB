<div class="flex flex-col gap-y-4 bg-test-800">
    <x-sidebar-button href="{{ route('home') }}" src='AvatarIconBlack.png' :active="request()->routeIs('home')" />
    <x-sidebar-button href="{{ route('test') }}" src='AvatarIconBlack.png' :active="request()->routeIs('test')" />
    <x-sidebar-button src='AvatarIconBlack.png' />
    <x-sidebar-button src='AvatarIconBlack.png' />
    <x-sidebar-button src='AvatarIconBlack.png' />
    <x-sidebar-button src='AvatarIconBlack.png' />
    <x-sidebar-button src='AvatarIconBlack.png' />
</div>
