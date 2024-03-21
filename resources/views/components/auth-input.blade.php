@php
    $class = 'block w-full px-3 py-2 mt-1 text-sm bg-transparent border rounded-lg outline-none border-slate-300';
@endphp

<input {{ $attributes->merge(['class' => $class]) }} />
