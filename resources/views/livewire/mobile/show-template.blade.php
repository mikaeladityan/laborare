<div>
    <x-mobile.header />
    <main class="relative w-full pb-16 mt-10">
        <div class="px-5 py-4 bg-zinc-900/50">
            {{-- Category --}}
            <x-button as="link" color="blue" class="font-semibold">Kategory</x-button>
            {{-- Rating --}}
            <div class="flex items-center justify-between mt-5">
                <div class="flex items-center gap-1">
                    <i class="text-orange-500 ti ti-star-filled"></i>
                    <span class="text-xs font-semibold px-2.5 py-0.5 rounded bg-blue-800 text-blue-300 ms-3">5.0</span>
                    <div class="mx-3 text-zinc-700">|</div>
                    <p class="text-xs text-zinc-400">344 Digunakan</p>
                </div>

                <div>
                    <x-button variant='icon' as="link" href="{{ route('home') }}">
                        <x-icon icon="ti ti-help-hexagon"></x-icon>
                    </x-button>
                </div>
            </div>
        </div>
        {{-- Title & Body --}}
        <div class="px-5 py-4 mt-3 bg-zinc-900/50">
            <h1 class="font-medium tracking-wide text-zinc-200">Judul Template Website UMKM</h1>
            <div class="mt-3 text-xs tracking-wide text-zinc-300">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aperiam quidem eius sit quos repellendus
                sequi,
                fugit quae veniam dolores. Quaerat omnis veritatis et in, unde dolorem quo at ut numquam!
            </div>
        </div>

        {{-- packge for info --}}
        <div class="px-5 mt-3">
            {{-- Link to ex website --}}
            <x-button as="link" color='blue'
                class="flex items-center justify-center gap-2 tracking-wider border border-blue-800">

                Preview <i class="text-lg ti ti-world-www"></i>

            </x-button>

            {{-- Example for if function package active --}}
            <form>
                @csrf
                <button class="w-full px-5 py-1.5 mt-3 border text-sky-300 bg-sky-800 border-sky-800 rounded-lg">
                    <div class="flex items-center justify-center gap-2">
                        <i class="text-lg ti ti-check"></i>
                        <span class="text-xs uppercase">Paket Website Standart</span>
                    </div>
                </button>
            </form>

            {{-- Example for if function package deactive --}}
            <form>
                @csrf
                <button class="w-full px-5 py-1.5 mt-3 bg-transparent border text-zinc-300 border-zinc-300 rounded-lg">
                    <div class="flex items-center justify-center gap-2">
                        <i class="text-lg ti ti-plus"></i>
                        <span class="text-xs uppercase">Paket Website Bisnis</span>
                    </div>
                </button>
            </form>

        </div>

        {{-- Review and Rating --}}
        <x-card class="mt-3" padding="none">
            <div class="px-5 py-4">
                <h5 class="mb-2 font-medium text-zinc-200">
                    Penilaian Produk
                </h5>
                <x-rating>
                    <p>310 Ulasan</p>
                    <x-slot name="page"></x-slot>
                </x-rating>
            </div>

            {{-- Comment --}}
            <x-card padding='none' color="transparent" class="border-y border-zinc-700">
                <div class="px-5 py-4">
                    <div class="flex items-end justify-between">
                        <div class="flex items-end justify-start gap-4">
                            <img src="/images/user.jpg" alt="" class="object-cover w-10 h-10 rounded-full">

                            <div class="flex flex-col grow">
                                <span class="text-sm font-medium text-zinc-300">mhmdiqbl</span>
                                <span class="text-xs text-zinc-400">17 Agustus 2021</span>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-center justify-end gap-1">
                                <i class="text-sm text-orange-500 ti ti-star-filled"></i>
                                <i class="text-sm text-orange-500 ti ti-star-filled"></i>
                                <i class="text-sm text-orange-500 ti ti-star-filled"></i>
                                <i class="text-sm text-orange-500 ti ti-star-filled"></i>
                                <i class="text-sm text-orange-500 ti ti-star-filled"></i>
                            </div>
                        </div>
                    </div>
                    <p class="mt-3 text-xs text-zinc-400">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus aspernatur excepturi
                        iusto iure debitis libero sint voluptatem cumque unde sequi laudantium optio iste adipisci
                        quidem enim modi, odio recusandae ex.
                    </p>
                </div>
            </x-card>

            <x-card padding='none' color="transparent" class="border-y border-zinc-700">
                <div class="px-5 py-4">
                    <div class="flex items-end justify-between">
                        <div class="flex items-end justify-start gap-4">
                            <img src="/images/user.jpg" alt="" class="object-cover w-10 h-10 rounded-full">

                            <div class="flex flex-col grow">
                                <span class="text-sm font-medium text-zinc-300">mhmdiqbl</span>
                                <span class="text-xs text-zinc-400">17 Agustus 2021</span>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-center justify-end gap-1">
                                <i class="text-sm text-orange-500 ti ti-star-filled"></i>
                                <i class="text-sm text-orange-500 ti ti-star-filled"></i>
                                <i class="text-sm text-orange-500 ti ti-star-filled"></i>
                                <i class="text-sm text-orange-500 ti ti-star-filled"></i>
                                <i class="text-sm text-orange-500 ti ti-star-filled"></i>
                            </div>
                        </div>
                    </div>
                    <p class="mt-3 text-xs text-zinc-400">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus aspernatur excepturi
                        iusto iure debitis libero sint voluptatem cumque unde sequi laudantium optio iste adipisci
                        quidem enim modi, odio recusandae ex.
                    </p>
                </div>
            </x-card>
        </x-card>
    </main>

    <x-mobile.navbar.footer></x-mobile.navbar.footer>
</div>
