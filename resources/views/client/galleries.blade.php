<ul class="mt-8 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
    @foreach ($galleries as $gallery)
        <li>
            <div class="bg-white rounded-xl shadow overflow-hidden">

                {{-- FOTO LANDSCAPE --}}
                <div class="aspect-[16/9] w-full overflow-hidden">
                    <img 
                        src="{{ asset('storage/' . $gallery->image) }}"
                        alt="{{ $gallery->title }}"
                        class="w-full h-full object-cover transition duration-300 hover:scale-105"
                    >
                </div>

                {{-- TEKS --}}
                <div class="p-4 text-center">
                    <h3 class="font-semibold text-gray-800">
                        {{ $gallery->title }}
                    </h3>
                </div>

            </div>
        </li>
    @endforeach
</ul>
