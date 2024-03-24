{{-- Navbar --}}
@if (request()->routeIs('register') || request()->routeIs('login'))
    <nav class="absolute top-0 left-0 z-20 w-full px-3 pt-5 pb-2 bg-transparent">
        <div class="flex items-center justify-between">
            {{-- Button back to home page --}}
            <a href="{{ route('home') }}" class="w-10/12 text-blue-700">
                <i class="text-3xl ti ti-arrow-back"></i>
            </a>
            {{-- Button redirect to login page --}}
            @if (request()->routeIs('register'))
                <x-button wire:navigate as='link' color="blue" class="w-3/12 text-center"
                    href="{{ route('login') }}">{!! 'Masuk' !!}</x-button>
            @else
                <x-button wire:navigate as='link' color="blue" class="w-3/12 text-center"
                    href="{{ route('register') }}">{!! 'Daftar' !!}</x-button>
            @endif
        </div>
    </nav>
@else
    <nav class="p-3">
        <div class="flex items-center justify-between px-4 py-5 shadow-lg bg-zinc-900/70 shadow-zinc-500/10 rounded-xl">
            {{-- User Name --}}
            <p class="text-sm font-medium text-zinc-300">Hi, Selamat datang</p>
            <div>
                <x-button as='link' color="blue" :href="route('login')">Masuk</x-button>
            </div>
        </div>
    </nav>
@endif
