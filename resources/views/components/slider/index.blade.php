@props([
    'backgroundImg' =>
        'https://img.freepik.com/free-photo/ai-nuclear-energy-future-innovation-disruptive-technology_53876-129784.jpg?t=st=1711049169~exp=1711052769~hmac=8208811510c299fa96103fbebc8f63cf03fca7043946a6e12d9bf7b5837488d2&w=826',
])

@php
    $class = "w-full p-4 h-56 bg-zinc-200 rounded-xl bg-[url('$backgroundImg')] bg-cover bg-no-repeat bg-cover relative overflow-hidden";
@endphp


<a class="relative w-full overflow-hidden item">
    @dump($backgroundImg)
    <div {{ $attributes->merge(['class' => $class]) }}>
        <div
            class="absolute top-0 left-0 w-full h-full bg-gradient-to-t from-zinc-200/30 to-zinc-900/10 backdrop-blur-[2px] py-4 px-3">
            {{ $slot }}
        </div>
    </div>
</a>
