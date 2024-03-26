<div>
    {{-- CSS --}}
    @include('layouts.mobile-style')
    {{-- Header --}}
    <x-mobile.header />

    <main class="pb-16">
        {{-- Slider Categories --}}
        <div class="relative py-5 owl-carousel owl-theme" id="categories">
            <div class="relative w-full item">
                <x-card>
                    {{-- card content --}}
                    <div>
                        <h2 class="font-semibold text-zinc-200">UMKM Website</h2>
                        <p class="mb-5 text-xs text-zinc-400">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        </p>

                        <x-button as="link" href='#umkm' color="border-light">Lihat</x-button>
                    </div>
                </x-card>
            </div>
            <div class="relative w-full item">
                <x-card>
                    {{-- card content --}}
                    <div>
                        <h2 class="font-semibold text-zinc-200">UMKM Website</h2>
                        <p class="mb-5 text-xs text-zinc-400">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        </p>

                        <x-button as="link" href='#umkm' color="border-light">Lihat</x-button>
                    </div>

                </x-card>
            </div>
            <div class="relative w-full item">
                <x-card>
                    {{-- card content --}}
                    <div>
                        <h2 class="font-semibold text-zinc-200">UMKM Website</h2>
                        <p class="mb-5 text-xs text-zinc-400">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        </p>

                        <x-button as="link" href='#umkm' color="border-light">Lihat</x-button>
                    </div>
                </x-card>
            </div>
        </div>

        {{-- About us --}}
        <section id="about-us" class="relative px-5 py-5 bg-zinc-900/50">
            <h3 class="font-semibold tracking-wide uppercase text-zinc-200">Tentang Kami</h3>
            <p class="mt-2 mb-5 text-sm text-zinc-400 ms-0.5 tracking-wide">
                Lorem, ipsum dolor sit amet consectetur
                adipisicing
                elit. Sint consequatur inventore laboriosam nobis
                omnis vel.
            </p>

            {{-- Timeline --}}
            <ol class="relative mt-3 border-zinc-700 border-s ms-1">
                <li class="mb-10 ms-6">
                    <span
                        class="absolute flex items-center justify-center w-6 h-6 bg-blue-800 rounded-full -start-3 ring-8 ring-zinc-900">
                        <svg class="w-2.5 h-2.5 text-blue-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                        </svg>
                    </span>
                    <h3 class="flex items-center mb-1 font-medium text-white">Flowbite
                        Application UI v2.0.0 <span
                            class="text-sm font-medium me-2 px-2.5 py-0.5 rounded bg-blue-800
                            text-blue-400 ms-3">Latest</span>
                    </h3>
                    <time class="block mb-2 text-xs font-normal leading-none text-zinc-500">Released
                        on January 13th, 2022</time>
                    <p class="mb-4 text-sm font-normal text-zinc-500">Get access to over 20+ pages
                        including a dashboard layout, charts, kanban board, calendar, and pre-order E-commerce &
                        Marketing pages.</p>
                    <a href="#"
                        class="z-10 inline-flex items-center px-4 py-2 text-sm font-medium text-blue-400 bg-blue-800 border border-blue-300 rounded-lg outline-none"><svg
                            class="w-3.5 h-3.5 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M14.707 7.793a1 1 0 0 0-1.414 0L11 10.086V1.5a1 1 0 0 0-2 0v8.586L6.707 7.793a1 1 0 1 0-1.414 1.414l4 4a1 1 0 0 0 1.416 0l4-4a1 1 0 0 0-.002-1.414Z" />
                            <path
                                d="M18 12h-2.55l-2.975 2.975a3.5 3.5 0 0 1-4.95 0L4.55 12H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2Zm-3 5a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z" />
                        </svg> Download ZIP</a>
                </li>
                <li class="mb-10 ms-6">
                    <span
                        class="absolute flex items-center justify-center w-6 h-6 bg-blue-800 rounded-full -start-3 ring-8 ring-zinc-900">
                        <svg class="w-2.5 h-2.5 text-blue-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                        </svg>
                    </span>
                    <h3 class="mb-1 font-medium text-white">Flowbite Figma v1.3.0</h3>
                    <time class="block mb-2 text-xs font-normal leading-none text-zinc-500">Released
                        on December 7th, 2021</time>
                    <p class="text-sm font-normal text-zinc-500">All of the pages and components
                        are first designed in Figma and we keep a parity between the two versions even as we update
                        the
                        project.</p>
                </li>
                <li class="ms-6">
                    <span
                        class="absolute flex items-center justify-center w-6 h-6 bg-blue-800 rounded-full -start-3 ring-8 ring-zinc-900">
                        <svg class="w-2.5 h-2.5 text-blue-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                        </svg>
                    </span>
                    <h3 class="mb-1 font-medium text-white">Flowbite Library v1.2.2</h3>
                    <time class="block mb-2 text-xs font-normal leading-none text-zinc-500">Released
                        on December 2nd, 2021</time>
                    <p class="text-sm font-normal text-zinc-500">Get started with dozens of web
                        components and interactive elements built on top of Tailwind CSS.</p>
                </li>
            </ol>
        </section>

        {{-- Package umkm --}}
        <section class="px-5 pt-6 pb-4">
            <h3 class="font-semibold tracking-wide uppercase text-zinc-200">Paket Website UMKM</h3>
            <p class="mt-2 mb-3 text-sm text-zinc-400 ms-0.5 tracking-wide">
                Lorem, ipsum dolor sit amet consectetur
                adipisicing
                elit. Sint consequatur inventore laboriosam nobis
                omnis vel.
            </p>

            {{-- Card Package --}}
            <x-card>
                <h4 class="text-xl font-semibold text-zinc-300">Website Bisnis</h4>
                {{-- Price --}}
                <div class="flex items-baseline my-2 text-zinc-200">
                    <span class="text-3xl font-semibold">Rp</span>
                    <span class="text-4xl font-extrabold tracking-tight ms-2">899K</span>
                    <span class="text-xl font-normal text-zinc-400">/tahun</span>
                </div>

                {{-- rating --}}
                <x-rating>
                    200 Pembelian
                    <x-slot name="page">
                        {{ route('home') }}
                    </x-slot>
                </x-rating>
                {{-- rating --}}
            </x-card>

            {{-- Card Package --}}
            <x-card class="mt-3">
                <h4 class="text-xl font-semibold text-zinc-300">Website Standar</h4>
                {{-- Price --}}
                <div class="flex items-baseline my-2 text-zinc-200">
                    <span class="text-3xl font-semibold">Rp</span>
                    <span class="text-4xl font-extrabold tracking-tight ms-2">750K</span>
                    <span class="text-xl font-normal text-zinc-400">/tahun</span>
                </div>

                {{-- rating --}}
                <x-rating>
                    200 Pembelian
                    <x-slot name="page">
                        {{ route('home') }}
                    </x-slot>
                </x-rating>
                {{-- rating --}}
            </x-card>
            {{-- Card Package --}}
            <x-card class="mt-3 h-28">

                {{-- rating --}}
            </x-card>

        </section>

        {{-- Template Website UMKM --}}
        <section class="px-2 pt-5 pb-2 bg-zinc-900/50">
            <div class="flex items-center justify-between">
                <h3 class="w-full font-semibold tracking-wide uppercase text-zinc-200">Template Website UMKM</h3>
                <a href="{{ route('umkm') }}" class="flex items-center justify-end w-2/12 p-0 text-xs text-zinc-500">
                    <p>Selengkapnya</p>
                    <i class="text-lg ti ti-chevron-right"></i>
                </a>
            </div>
            <div class="grid grid-cols-2 gap-2 mt-4 mb-5">
                <x-card padding="none" class="text-zinc-300">

                    <a href="{{ route('show-template') }}">
                        <img class="w-full" src="https://picsum.photos/200/170" alt="" />
                    </a>
                    <div class="px-3 py-2">
                        <a href="{{ route('show-template') }}">
                            <h5 class="text-[11px] tracking-wide text-zinc-300 font-medium">Noteworthy
                                technology acquisitions 2021</h5>
                        </a>
                    </div>
                </x-card>
                <x-card padding="none" class="text-zinc-300">

                    <a href="{{ route('show-template') }}">
                        <img class="w-full" src="https://picsum.photos/200/170" alt="" />
                    </a>
                    <div class="px-3 py-2">
                        <a href="{{ route('show-template') }}">
                            <h5 class="text-[11px] tracking-wide text-zinc-300 font-medium">Noteworthy
                                technology acquisitions 2021</h5>
                        </a>
                    </div>
                </x-card>
                <x-card padding="none" class="text-zinc-300">

                    <a href="{{ route('show-template') }}">
                        <img class="w-full" src="https://picsum.photos/200/170" alt="" />
                    </a>
                    <div class="px-3 py-2">
                        <a href="{{ route('show-template') }}">
                            <h5 class="text-[11px] tracking-wide text-zinc-300 font-medium">Noteworthy
                                technology acquisitions 2021</h5>
                        </a>
                    </div>
                </x-card>
                <x-card padding="none" class="text-zinc-300">

                    <a href="{{ route('show-template') }}">
                        <img class="w-full" src="https://picsum.photos/200/170" alt="" />
                    </a>
                    <div class="px-3 py-2">
                        <a href="{{ route('show-template') }}">
                            <h5 class="text-[11px] tracking-wide text-zinc-300 font-medium">Noteworthy
                                technology acquisitions 2021</h5>
                        </a>
                    </div>
                </x-card>
                <x-card padding="none" class="text-zinc-300">

                    <a href="{{ route('show-template') }}">
                        <img class="w-full" src="https://picsum.photos/200/170" alt="" />
                    </a>
                    <div class="px-3 py-2">
                        <a href="{{ route('show-template') }}">
                            <h5 class="text-[11px] tracking-wide text-zinc-300 font-medium">Noteworthy
                                technology acquisitions 2021</h5>
                        </a>
                    </div>
                </x-card>
                <x-card padding="none" class="text-zinc-300">

                    <a href="{{ route('show-template') }}">
                        <img class="w-full" src="https://picsum.photos/200/170" alt="" />
                    </a>
                    <div class="px-3 py-2">
                        <a href="{{ route('show-template') }}">
                            <h5 class="text-[11px] tracking-wide text-zinc-300 font-medium">Noteworthy
                                technology acquisitions 2021</h5>
                        </a>
                    </div>
                </x-card>
            </div>

            <p class="text-sm text-slate-300">
                Baca <a href="#" class="text-blue-700">Ketentuan Legal</a> kami
            </p>
        </section>
    </main>

    {{-- Navbar footer --}}
    <x-mobile.navbar.footer />

    @include('layouts.mobile-script')
</div>
