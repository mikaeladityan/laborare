@if (request()->routeIs('register') || request()->routeIs('login'))
    <header>
        <x-mobile.navbar />
    </header>
@elseif (request()->routeIs('show-template'))
    <header class="relative w-full h-full">
        {{-- Image Service --}}
        <div class="relative top-0 right-0 z-10 w-full overflow-hidden rounded-b-[3.5rem]">
            <img src="https://picsum.photos/200/170" class="w-full h-full">
            <div class="absolute z-10 bottom-6 right-6">
                <x-button as="link" color="blur" variant="card">
                    <i class="text-3xl ti ti-maximize"></i>
                </x-button>
            </div>
        </div>
        <x-mobile.navbar />
    </header>
@else
    <header>
        <x-mobile.navbar />

        {{-- Header --}}
        <div class="px-5 mt-5">
            {{-- card --}}
            <a href="">
                <x-card class="h-28"></x-card>
            </a>
        </div>
    </header>
@endif
