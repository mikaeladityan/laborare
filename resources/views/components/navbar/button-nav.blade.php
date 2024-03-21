<a wire:navigate
    {{ $attributes->merge(['class' => 'px-3 py-2 text-xs font-medium uppercase bg-blue-800 shadow-md text-slate-300 rounded-xl shadow-blue-700/60']) }}>{{ $slot }}</a>
