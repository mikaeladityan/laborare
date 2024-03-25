<div class="fixed left-0 z-20 w-full px-2 bottom-1">
    <div class="px-10 py-4 shadow-md rounded-xl bg-zinc-900/50 backdrop-blur-sm">
        <div class="flex items-center justify-between w-full">
            <x-button wire:navigate variant='icon' as="link" href="{{ route('home') }}">
                <x-icon></x-icon>
            </x-button>
            <x-button wire:navigate variant='icon' as="link" href="{{ route('home') }}">
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
    </div>
</div>
