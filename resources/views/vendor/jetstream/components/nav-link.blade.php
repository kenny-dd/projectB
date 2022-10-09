@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 shadow-xl text-sm font-medium leading-5 text-white focus:outline-none transition'
            : 'inline-flex items-center px-1 pt-1 shadow-xl text-sm font-medium leading-5 text-white hover:text-gray-500 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
