@if (request()->routeIs('register') || request()->routeIs('login'))
    <x-mobile-navbar />
@else
    <header>
        <x-mobile-navbar />

        {{-- Jubotron --}}
        <x-mobile-header.jumbotron />

        {{-- Navbar footer --}}
        <x-mobile-navbar.footer>
            <x-button variant='icon' as="link" href="{{ route('home') }}">
                <x-icon></x-icon>
            </x-button>
            <x-button variant='icon' as="link" href="{{ route('home') }}">
                <x-icon icon="ti ti-shopping-bag-search"></x-icon>
            </x-button>
            <x-button variant='icon' as="link" href="{{ route('home') }}">
                <x-icon icon="ti ti-tools"></x-icon>
            </x-button>
            <x-button variant='icon' as="link" href="{{ route('home') }}">
                <x-icon icon="ti ti-help-hexagon"></x-icon>
            </x-button>
            <x-button variant='icon' as="link" href="{{ route('home') }}">
                <x-icon icon="ti ti-login-2"></x-icon>
            </x-button>

        </x-mobile-navbar.footer>
    </header>
@endif
