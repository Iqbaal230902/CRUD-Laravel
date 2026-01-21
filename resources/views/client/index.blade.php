@extends('layouts.app', ['menus' => $menus])

@section('content')
    <div class="carousel relative shadow-xl bg-white">
        <div class="carousel-inner relative overflow-hidden w-full">
            @foreach ($sliders as $slider)
                <input class="carousel-open" type="radio" id="carousel-{{ $loop->iteration }}" name="carousel"
                    aria-hidden="true" hidden checked="checked">
                <div class="carousel-item absolute opacity-0" style="height:600px;">
                    <img class="w-full" alt="{{ $slider->image }}" src="{{ asset('storage/' . $slider->image) }}">
                </div>
            @endforeach

            <ol class="carousel-indicators">
                @foreach ($sliders as $slider)
                    <li class="inline-block mr-3">
                        <label for="carousel-{{ $loop->iteration }}"
                            class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-[#0e777e]">•</label>
                    </li>
                @endforeach
            </ol>
        </div>
    </div>

    {{-- <div class="w-full py-8 sm:py-12">
        <div class="mx-auto max-w-3xl text-center">
            <h2 class="text-3xl font-bold text-gray-900 sm:text-4xl">Lembaga di TK Darul Amal</h2>
            <p class="mt-4 text-gray-500 sm:text-xl">
                Beberapa lembaga pendidikan yang berada di bawah naungan TK Darul Amal.
            </p>
        </div>

        <div class="mt-6 overflow-x-hidden relative">
            <div class="flex space-x-4 animate-scroll" style="display: flex; animation: scroll 120s linear infinite;">
                @foreach (['Logo Madrasah Aliyah anshaarul huda.png', 'Logo Majlis Ta_lim.PNG', 'Logo MDTA Anshaarul huda.PNG', 'Logo Osis MA.PNG', 'Logo pondok pesantre.PNG', 'Logo RA Anshaarul huda.PNG', 'Logo SMP Anshaarul huda.PNG', 'OSIS MPK Anshaarul Huda.png', 'OSIS MPK SMP Cihaurkuning Satu.png'] as $logo)
                    <div class="flex items-center justify-center flex-shrink-0 w-48 h-32 rounded-lg p-4">
                        <img src="naungan/{{ $logo }}" alt="Client" class="max-h-32">
                    </div>
                @endforeach
            </div>
        </div>
    </div> --}}

    <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
        <div class="mx-auto max-w-3xl text-center">
            <h2 class="text-3xl font-bold text-gray-900 sm:text-4xl">Berita Terbaru</h2>
            <p class="mt-4 text-gray-500 sm:text-xl">
                Temukan informasi terkini seputar program, kegiatan, dan pencapaian kami di sini. Kami terus bergerak
                dan berinovasi untuk memberikan kontribusi terbaik bagi masyarakat.
            </p>
        </div>

        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 mt-6">
            @foreach ($news as $new)
                <a href="/news/{{ $new->slug }}">
                    <article class="overflow-hidden rounded-lg shadow transition hover:shadow-lg">
                        <img alt="{{ $new->title }}" src="{{ asset('storage/' . $new->thumbnail) }}"
                            class="h-56 w-full object-cover" />
                        <div class="bg-white p-4 sm:p-6">
                            <time datetime="{{ $new->published_at }}" class="block text-xs text-gray-500">
                                {{ \Carbon\Carbon::parse($new->published_at)->format('l, d-m-Y') }}
                            </time>
                            <h3 class="mt-0.5 text-lg text-gray-900">{{ $new->title }}</h3>
                            {{ $new->caption }}
                        </div>
                    </article>
                </a>
            @endforeach
        </div>

        <div class="mt-4 md:mt-8 flex justify-center">
            <a href="/news"
                class="inline-block rounded bg-[#0f6d73] px-12 py-3 text-sm font-medium text-white transition hover:bg-[#0e777e] focus:outline-none focus:ring focus:ring-yellow-400">
                Lebih Lanjut
            </a>
        </div>
    </div>

    <section>
        <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
            <header class="text-center">
                <h2 class="text-xl font-bold text-gray-900 sm:text-3xl">Galeri Aktivitas</h2>
                <p class="mt-4 text-gray-500">
                    Lihat momen-momen inspiratif dari berbagai kegiatan yang telah kami lakukan. Galeri ini menampilkan
                    semangat kolaborasi, keceriaan, dan dedikasi dalam setiap langkah kami untuk menciptakan perubahan.
                    Mari jelajahi dokumentasi perjalanan kami dalam menggapai visi bersama!
                </p>
            </header>

            <ul class="mt-8 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($galleries as $gallery)
                    <li>
                        <a href="/galleris" class="group block overflow-hidden">
                            <img src="{{ asset('storage/' . $gallery->image) }}" alt="{{ $gallery->title }}"
                                class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]" />
                        </a>
                    </li>
                @endforeach
            </ul>

            <div class="mt-4 md:mt-8 flex justify-center">
                <a href="/galleries"
                    class="inline-block rounded bg-[#0f6d73] px-12 py-3 text-sm font-medium text-white transition hover:bg-[#0e777e] focus:outline-none focus:ring focus:ring-yellow-400">
                    Lebih Lanjut
                </a>
            </div>
        </div>
    </section>
@endsection
