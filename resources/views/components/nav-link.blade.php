@props(['active'])

@php
$classes = ($active ?? false)
            ? "nav-link active" //'border rounded-full border-coral-500 px-2 bg-coral-500 transition'
            : "nav-link"; //'border rounded-full border-coral-500 px-2 hover:bg-coral-400 hover:text-white transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
