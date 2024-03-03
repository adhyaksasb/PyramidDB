@props(['active'])

@php
    $classes = $active ?? false ? 'inline-flex items-center text-custom hover:text-custom dark:hover:text-custom text-sm dark:text-custom' : 'inline-flex items-center text-gray-800 hover:text-custom dark:hover:text-custom text-sm dark:text-gray-200';
@endphp

<a wire:navigate {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
