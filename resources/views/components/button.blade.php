@props([
    'variant' => 'default',
    'color' => 'transparent',
    'as' => 'button',
    'type' => 'submit',
])

@php
    $colorClass = [
        'transparent' => 'bg-transparent',
        'blue' => 'bg-blue-800 shadow-md text-slate-300 shadow-blue-700/60',
    ];
    $variantClass = [
        'default' => 'px-3 py-2 text-xs font-medium uppercase rounded-lg',
        'icon' => 'text-center text-slate-300',
    ];

    $class = $variantClass[value($variant)] . ' ' . $colorClass[value($color)];
@endphp

@if ($as === 'button')
    <button type="{{ $type }}" {{ $attributes->merge(['class' => $class]) }}>{{ $slot }}</button>
@else
    <a {{ $attributes->merge(['class' => $class]) }}>{{ $slot }}</a>
@endif
