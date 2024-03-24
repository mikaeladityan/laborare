@if (request()->routeIs('register') || request()->routeIs('login'))
    <x-mobile.navbar />
@else
    <header>
        <x-mobile.navbar />

        {{-- Header --}}
        <div class="px-5 mt-5">
            {{-- card --}}
            <x-card class="h-28"></x-card>
        </div>
    </header>
@endif
