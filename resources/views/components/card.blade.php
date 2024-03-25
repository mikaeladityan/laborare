@props([
    'color' => 'default',
    'padding' => 'default',
])

@php
    $colorClass = [
        'default' => 'bg-zinc-900/50',
        'light' => 'bg-zinc-300',
        'transparent' => 'bg-transparent',
    ];

    $paddingClass = [
        'default' => 'p-4 rounded-3xl',
        'none' => 'p-0 rounded-none',
    ];

    $class = 'w-full' . ' ' . $colorClass[value($color)] . ' ' . $paddingClass[value($padding)];
@endphp


<div {{ $attributes->merge(['class' => $class]) }}>
    {{ $slot }}
</div>
