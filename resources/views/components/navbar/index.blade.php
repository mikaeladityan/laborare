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
                <x-navbar.button-nav href="{{ route('login') }}">{!! 'Masuk' !!}</x-navbar.button-nav>
            @else
                <x-navbar.button-nav href="{{ route('register') }}">{!! 'Daftar' !!}</x-navbar.button-nav>
            @endif
        </div>
    </nav>
@else
@endif
