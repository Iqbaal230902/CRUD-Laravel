@extends('layouts.app')

@section('title', 'Tentang Kami')

@section('content')
<section class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-4">

        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">

            {{-- FOTO --}}
            <div class="flex justify-center">
                <img 
                    src="{{ asset('assets/about.JPG') }}" 
                    alt="Tentang Kami"
                    class="rounded-xl shadow-lg 
                           w-full max-w-sm md:max-w-md lg:max-w-lg
                           object-cover"
                >
            </div>

            {{-- TEKS --}}
            <div class="text-center md:text-left">
                <h2 class="text-3xl font-bold mb-4">
                    Tentang Kami
                </h2>

                <p class="text-gray-700 text-lg mb-4">
                    RA Annidhomiyyah hadir untuk melayani masyarakat melalui
                    program pendidikan, sosial, dan keagamaan.
                </p>

                <p class="text-gray-700 text-lg">
                    Kami berkomitmen menciptakan lingkungan belajar yang
                    nyaman, religius, dan berkualitas untuk membentuk
                    generasi berakhlak mulia.
                </p>
            </div>

        </div>

    </div>
</section>
@endsection
