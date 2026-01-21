@extends('layouts.app')

@section('title', 'PPDB RA Annidhomiyyah')

@section('content')

{{-- HERO PPDB --}}
<section class="relative bg-[#0f6d73]">
    <div class="max-w-7xl mx-auto px-6 py-20 text-center text-white">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">
            Penerimaan Peserta Didik Baru
        </h1>
        <p class="text-lg md:text-xl max-w-2xl mx-auto mb-8">
            RA Annidhomiyyah membuka pendaftaran peserta didik baru
            Tahun Ajaran 2026 / 2027
        </p>

        <a href="https://wa.me/6285810592026"
            class="inline-block bg-white text-[#0f6d73] font-semibold px-8 py-3 rounded-full hover:bg-gray-100 transition">
            Daftar Sekarang
        </a>
    </div>
</section>

{{-- TENTANG PPDB --}}
<section class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">

        <img src="{{ asset('assets/about.JPG') }}"
            class="rounded-xl shadow-lg w-full object-cover"
            alt="PPDB RA Annidhomiyyah">

        <div>
            <h2 class="text-3xl font-bold mb-4">Tentang PPDB</h2>
            <p class="text-gray-700 mb-4 text-lg">
                PPDB RA Annidhomiyyah bertujuan memberikan kesempatan
                bagi putra-putri terbaik untuk mendapatkan pendidikan
                usia dini yang berkualitas, islami, dan menyenangkan.
            </p>
            <p class="text-gray-700 text-lg">
                Kami mengedepankan pembentukan karakter, akhlak mulia,
                dan kesiapan anak menuju jenjang pendidikan berikutnya.
            </p>
        </div>

    </div>
</section>

{{-- KEUNGGULAN --}}
<section class="py-16 bg-gray-50">
    <div class="max-w-6xl mx-auto px-6">
        <h2 class="text-3xl font-bold text-center mb-12">
            Keunggulan RA Annidhomiyyah
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            {{-- CARD 1 --}}
            <div class="bg-white rounded-xl shadow overflow-hidden">
                <img 
                    src="{{ asset('assets/islamic.png') }}" 
                    alt="Pendidikan Islami"
                    class="h-48 w-full object-cover"
                >
                <div class="p-6 text-center">
                    <h3 class="font-semibold text-xl mb-2">
                        Pendidikan Islami
                    </h3>
                    <p class="text-gray-600">
                        Penanaman nilai keislaman dan akhlak mulia sejak dini.
                    </p>
                </div>
            </div>

            {{-- CARD 2 --}}
            <div class="bg-white rounded-xl shadow overflow-hidden">
                <img 
                    src="{{ asset('assets/creative.png') }}" 
                    alt="Belajar Kreatif"
                    class="h-48 w-full object-cover"
                >
                <div class="p-6 text-center">
                    <h3 class="font-semibold text-xl mb-2">
                        Belajar Kreatif
                    </h3>
                    <p class="text-gray-600">
                        Metode bermain sambil belajar yang aktif dan menyenangkan.
                    </p>
                </div>
            </div>

            {{-- CARD 3 --}}
            <div class="bg-white rounded-xl shadow overflow-hidden">
                <img 
                    src="{{ asset('assets/teacher.png') }}" 
                    alt="Guru Berpengalaman"
                    class="h-48 w-full object-cover"
                >
                <div class="p-6 text-center">
                    <h3 class="font-semibold text-xl mb-2">
                        Guru Berpengalaman
                    </h3>
                    <p class="text-gray-600">
                        Didampingi tenaga pendidik profesional dan penuh kasih.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- SYARAT PENDAFTARAN --}}
<section class="py-16 bg-white">
    <div class="max-w-4xl mx-auto px-6">
        <h2 class="text-3xl font-bold text-center mb-10">
            Persyaratan Pendaftaran
        </h2>

        <ul class="space-y-4 text-lg text-gray-700">
            <li>✅ Usia minimal sesuai ketentuan RA</li>
            <li>✅ Fotokopi Akta Kelahiran</li>
            <li>✅ Fotokopi Kartu Keluarga</li>
            <li>✅ Fotokopi KTP Orang Tua</li>
            <li>✅ Pas Foto Anak</li>
        </ul>
    </div>
</section>

{{-- ALUR PENDAFTARAN --}}
<section class="py-16 bg-gray-50">
    <div class="max-w-6xl mx-auto px-6">
        <h2 class="text-3xl font-bold text-center mb-12">
            Alur Pendaftaran
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 text-center">
            <div class="bg-white p-6 rounded-xl shadow">
                <div class="text-3xl font-bold mb-2">1</div>
                <p>Menghubungi Admin</p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow">
                <div class="text-3xl font-bold mb-2">2</div>
                <p>Mengisi Formulir</p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow">
                <div class="text-3xl font-bold mb-2">3</div>
                <p>Melengkapi Berkas</p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow">
                <div class="text-3xl font-bold mb-2">4</div>
                <p>Konfirmasi & Daftar Ulang</p>
            </div>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="py-20 bg-[#0f6d73] text-white text-center">
    <h2 class="text-3xl md:text-4xl font-bold mb-4">
        Ayo Bergabung Bersama Kami
    </h2>
    <p class="text-lg mb-8">
        Wujudkan generasi cerdas, ceria, dan berakhlak mulia
    </p>

    <a href="https://wa.me/6285810592026"
        class="inline-block bg-white text-[#0f6d73] font-semibold px-10 py-4 rounded-full hover:bg-gray-100 transition">
        Hubungi via WhatsApp
    </a>
</section>

@endsection
