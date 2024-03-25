<div>
    <x-mobile.header />
    <main class="pb-16 mt-5">
        {{-- Search Template --}}
        <form class="max-w-md px-5 mx-auto my-5">
            <div class="relative">
                <div class="absolute inset-y-0 flex items-center pointer-events-none start-0 ps-3">
                    <svg class="w-4 h-4 text-zinc-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="search"
                    class="block w-full p-4 text-sm border outline-none rounded-2xl text-zinc-400 placeholder-zinc-500 bg-zinc-900/50 border-zinc-500 ps-10"
                    placeholder="Cari template website anda..." required />
                <button type="submit"
                    class="text-blue-300 absolute end-2.5 bottom-2.5 font-medium rounded-lg text-xs px-4 py-2 bg-blue-800 uppercase tracking-wide">Cari</button>
            </div>
        </form>
        {{-- Template Website UMKM --}}
        <section class="px-2 pt-5 pb-2 bg-zinc-900/50">
            <div class="flex items-center justify-between">
                <h3 class="w-full font-semibold tracking-wide uppercase ms-3 text-zinc-200">Template Website UMKM</h3>
            </div>
            {{-- Categories Template --}}
            <div class="grid grid-cols-5 gap-3 mt-3 mb-5">
                <x-button as="link" variant="category">
                    <i class="text-3xl ti ti-a-b-2"></i>
                </x-button>

                <x-button as="link" variant="category">
                    <i class="text-3xl ti ti-a-b-2"></i>
                </x-button>

                <x-button as="link" variant="category">
                    <i class="text-3xl ti ti-a-b-2"></i>
                </x-button>

                <x-button as="link" variant="category">
                    <i class="text-3xl ti ti-a-b-2"></i>
                </x-button>

                <x-button as="link" variant="category">
                    <i class="text-3xl ti ti-a-b-2"></i>
                </x-button>

                <x-button as="link" variant="category">
                    <i class="text-3xl ti ti-a-b-2"></i>
                </x-button>

                <x-button as="link" variant="category">
                    <i class="text-3xl ti ti-a-b-2"></i>
                </x-button>

                <x-button as="link" variant="category">
                    <i class="text-3xl ti ti-a-b-2"></i>
                </x-button>

                <x-button as="link" variant="category">
                    <i class="text-3xl ti ti-a-b-2"></i>
                </x-button>

                <x-button as="link" variant="category">
                    <i class="text-3xl ti ti-a-b-2"></i>
                </x-button>


            </div>

            {{-- End Categories Template --}}


            {{-- Content Template --}}
            <div class="grid grid-cols-2 gap-2 mt-4 mb-5">
                <x-card class="text-zinc-300" padding="none">

                    <a wire:navigate href="{{ route('show-template') }}">
                        <img class="w-full" src="https://picsum.photos/200/170" alt="" />
                    </a>
                    <div class="px-3 py-2">
                        <a wire:navigate href="{{ route('show-template') }}">
                            <h5 class="text-[11px] tracking-wide text-zinc-300 font-medium">Noteworthy
                                technology acquisitions 2021</h5>
                        </a>
                    </div>
                </x-card>
                <x-card class="text-zinc-300" padding="none">

                    <a wire:navigate href="{{ route('show-template') }}">
                        <img class="w-full" src="https://picsum.photos/200/170" alt="" />
                    </a>
                    <div class="px-3 py-2">
                        <a wire:navigate href="{{ route('show-template') }}">
                            <h5 class="text-[11px] tracking-wide text-zinc-300 font-medium">Noteworthy
                                technology acquisitions 2021</h5>
                        </a>
                    </div>
                </x-card>
                <x-card class="text-zinc-300" padding="none">

                    <a wire:navigate href="{{ route('show-template') }}">
                        <img class="w-full" src="https://picsum.photos/200/170" alt="" />
                    </a>
                    <div class="px-3 py-2">
                        <a wire:navigate href="{{ route('show-template') }}">
                            <h5 class="text-[11px] tracking-wide text-zinc-300 font-medium">Noteworthy
                                technology acquisitions 2021</h5>
                        </a>
                    </div>
                </x-card>
                <x-card class="text-zinc-300" padding="none">

                    <a wire:navigate href="{{ route('show-template') }}">
                        <img class="w-full" src="https://picsum.photos/200/170" alt="" />
                    </a>
                    <div class="px-3 py-2">
                        <a wire:navigate href="{{ route('show-template') }}">
                            <h5 class="text-[11px] tracking-wide text-zinc-300 font-medium">Noteworthy
                                technology acquisitions 2021</h5>
                        </a>
                    </div>
                </x-card>
                <x-card class="text-zinc-300" padding="none">

                    <a wire:navigate href="{{ route('show-template') }}">
                        <img class="w-full" src="https://picsum.photos/200/170" alt="" />
                    </a>
                    <div class="px-3 py-2">
                        <a wire:navigate href="{{ route('show-template') }}">
                            <h5 class="text-[11px] tracking-wide text-zinc-300 font-medium">Noteworthy
                                technology acquisitions 2021</h5>
                        </a>
                    </div>
                </x-card>
                <x-card class="text-zinc-300" padding="none">

                    <a wire:navigate href="{{ route('show-template') }}">
                        <img class="w-full" src="https://picsum.photos/200/170" alt="" />
                    </a>
                    <div class="px-3 py-2">
                        <a wire:navigate href="{{ route('show-template') }}">
                            <h5 class="text-[11px] tracking-wide text-zinc-300 font-medium">Noteworthy
                                technology acquisitions 2021</h5>
                        </a>
                    </div>
                </x-card>
            </div>
        </section>
    </main>
    <x-mobile.navbar.footer />
</div>
