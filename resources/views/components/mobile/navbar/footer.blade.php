<div class="fixed bottom-0 left-0 z-20 w-full px-3">
    <div class="px-10 py-4 shadow-md rounded-xl bg-zinc-900 backdrop-blur-sm">
        @if (request()->routeIs('show-template'))
            <div class="flex items-center justify-between text-center">
                <x-button variant='icon' as="link" href="{{ route('home') }}">
                    <x-icon></x-icon>
                </x-button>
                <x-button wire:navigate variant='icon' as="link" href="{{ route('web-application') }}">
                    <x-icon icon="ti ti-message text-center"></x-icon>
                </x-button>
                <x-button variant='icon' href="{{ route('web-application') }}">
                    <p class="text-sm text-center">Pesan Sekarang</p>
                </x-button>
            </div>
        @else
            <div class="flex items-center justify-between w-full">
                <x-button variant='icon' as="link" href="{{ route('home') }}">
                    <x-icon></x-icon>
                </x-button>
                <x-button wire:navigate variant='icon' as="link" href="{{ route('umkm') }}">
                    <x-icon icon="ti ti-shopping-bag-search"></x-icon>
                </x-button>
                <x-button wire:navigate variant='icon' as="link" href="{{ route('web-application') }}">
                    <x-icon icon="ti ti-tools"></x-icon>
                </x-button>
                <x-button wire:navigate variant='icon' as="link" href="{{ route('home') }}">
                    <x-icon icon="ti ti-help-hexagon"></x-icon>
                </x-button>
                <x-button variant='icon' as="link" href="{{ route('login') }}">
                    <x-icon icon="ti ti-login-2"></x-icon>
                </x-button>
            </div>
        @endif
    </div>
</div>
