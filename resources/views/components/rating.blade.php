<div class="flex items-start justify-between">
    <div>
        <div class="flex items-center gap-1">
            <i class="-mt-0.5 text-orange-500 ti ti-star-filled"></i>
            <i class="-mt-0.5 text-orange-500 ti ti-star-filled"></i>
            <i class="-mt-0.5 text-orange-500 ti ti-star-filled"></i>
            <i class="-mt-0.5 text-orange-500 ti ti-star-filled"></i>
            <i class="-mt-0.5 text-orange-500 ti ti-star-filled"></i>
            <span class="text-xs font-semibold px-2.5 py-0.5 rounded bg-blue-800 text-blue-400 ms-3">5.0</span>
        </div>
        <span class="text-[11px] text-slate-400">{{ $slot }}</span>
    </div>
    {{-- Features Specification --}}
    <div class="flex items-center justify-center text-center w-9">
        <x-button as="link" color="blue" href="{{ $page }}"
            class="flex items-center justify-center font-extrabold tracking-wide"><i
                class="text-lg ti ti-eye"></i></x-button>
    </div>
</div>
