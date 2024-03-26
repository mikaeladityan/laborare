@props([
    'variant' => 'default',
    'color' => 'transparent',
    'as' => 'button',
    'type' => 'submit',
])

@php
    $colorClass = [
        'transparent' => 'bg-transparent text-zinc-400',
        'blue' => 'bg-blue-800 shadow-md text-blue-300 shadow-blue-700/60',
        'border-light' => 'border-2 border-zinc-400 text-zinc-400',
        'blur' => 'bg-zinc-900/40 backdrop-blur-sm text-zinc-300',
    ];
    $variantClass = [
        'default' => 'px-3 py-1.5 text-xs font-medium uppercase rounded-lg',
        'icon' => 'text-center',
        'category' => 'flex items-center justify-center w-full h-16 rounded-xl bg-zinc-900/50',
        'card' => 'flex items-center justify-center w-full h-14 w-14 rounded-xl',
    ];

    $class = $variantClass[value($variant)] . ' ' . $colorClass[value($color)];
@endphp

@if ($as === 'button')
    <button type="{{ $type }}" {{ $attributes->merge(['class' => $class]) }}>{{ $slot }}</button>
@else
    <a {{ $attributes->merge(['class' => $class]) }}>{{ $slot }}</a>
@endif
