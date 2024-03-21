{{-- Navbar --}}
@if (request()->routeIs('register') || request()->routeIs('login'))
    <nav class="absolute top-0 left-0 z-20 w-full px-3 pt-5 pb-2 bg-transparent">
        <div class="flex items-center justify-between">
            {{-- Button back to home page --}}
            <a href="{{ route('home') }}" class="text-blue-700">
                <i class="text-3xl ti ti-arrow-back"></i>
            </a>
            {{-- Button redirect to login page --}}
            @if (request()->routeIs('register'))
                <x-button wire:navigate as='link' color="blue"
                    href="{{ route('login') }}">{!! 'Masuk' !!}</x-button>
            @else
                <x-button wire:navigate as='link' color="blue"
                    href="{{ route('register') }}">{!! 'Daftar' !!}</x-button>
            @endif
        </div>
    </nav>
@else
    <nav class="p-3">
        <div
            class="flex items-center justify-between px-4 py-5 shadow-lg bg-zinc-900/70 shadow-slate-500/10 rounded-xl">
            {{-- Brand --}}
            <a href="{{ route('home') }}">
                <h1 class="text-sm font-medium text-slate-200">{{ config('app.name') }}</h1>
            </a>
            <div>
                <x-button as='link' color="blue" :href="route('login')">Masuk</x-button>
            </div>
        </div>
    </nav>
@endif
