@props([
    'color' => 'default',
])

@php
    $colorClass = [
        'default' => 'bg-zinc-900/50',
        'light' => 'bg-zinc-300',
    ];

    $class = 'w-full p-4 rounded-3xl' . ' ' . $colorClass[value($color)];
@endphp


<div {{ $attributes->merge(['class' => $class]) }}>
    {{ $slot }}
</div>
