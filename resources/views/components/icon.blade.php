@props([
    'icon' => 'ti ti-home-heart',
])

<i {{ $attributes->merge(['class' => 'text-2xl ' . $icon]) }}></i>
