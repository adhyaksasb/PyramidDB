@props(['active', 'src', 'name'])

@php
    $classes =
        $active ?? false ? 'shadow-custom bg-custom p-4 my-4 mr-4 ml-3 rounded-xl' : 'p-4 my-4 mr-4 ml-3 rounded-xl';
    $imgClass = $active ?? false ? 'w-6 h-6 fill-current whiteFilter' : 'w-6 h-6 fill-current primaryFilter';
    $bgClass =
        $active ?? false
            ? 'flex bg-gray-100 dark:bg-dark-800 rounded-l-xl relative before:absolute before:w-4 before:h-8 before:-top-8 before:rounded-br-xl before:right-0 before:shadow-inverse-top before:dark:shadow-inverse-top-dark  after:absolute after:w-4 after:h-8 after:-bottom-8 after:rounded-tr-xl after:right-0 after:shadow-inverse-bottom after:dark:shadow-inverse-bottom-dark'
            : 'flex';
@endphp

<div {{ $attributes->merge(['class' => $bgClass]) }} x-data="{ hovered: false }">
    <a wire:navigate {{ $attributes->merge(['class' => $classes]) }} x-on:mouseover="hovered = true"
        x-on:mouseleave="hovered = false">
        <img src="{{ asset('https://pyramidb.s3.ap-southeast-3.amazonaws.com/img/starRail/icon/sign/' . $src) }}" {{ $attributes->merge(['class' => $imgClass]) }}
            alt="">
    </a>
    <div x-cloak x-show="hovered" class="z-10 absolute left-28 bg-dark-900 rounded-xl p-4 text-gray-200 mt-4 text-nowrap">
        <p>{{ $name }}</p>
    </div>
</div>
