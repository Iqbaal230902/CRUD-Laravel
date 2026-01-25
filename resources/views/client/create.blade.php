<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form PPDB</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-blue-100 to-indigo-200 min-h-screen flex items-center justify-center">

    <div class="bg-white w-full max-w-md rounded-2xl shadow-xl p-8">
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-2">
            Pendaftaran Peserta Didik Baru
        </h2>
        <p class="text-center text-gray-500 mb-6">
            Isi data dengan benar ya ✨
        </p>

        @if(session('success'))
            <div class="bg-green-100 text-green-700 px-4 py-2 rounded-lg mb-4 text-center">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('store') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label class="text-sm font-medium text-gray-600">Nama Lengkap</label>
                <input type="text" name="name"
                    class="w-full mt-1 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-indigo-400 focus:outline-none"
                    required>
            </div>

            <div>
                <label class="text-sm font-medium text-gray-600">Email</label>
                <input type="email" name="email"
                    class="w-full mt-1 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-indigo-400 focus:outline-none"
                    required>
            </div>

            <div>
                <label class="text-sm font-medium text-gray-600">No. HP</label>
                <input type="text" name="phone"
                    class="w-full mt-1 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-indigo-400 focus:outline-none"
                    required>
            </div>

            <div>
                <label class="text-sm font-medium text-gray-600">Alamat</label>
                <textarea name="address" rows="3"
                    class="w-full mt-1 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-indigo-400 focus:outline-none"
                    required></textarea>
            </div>

            <div>
                <label class="text-sm font-medium text-gray-600">Tempat Lahir</label>
                <input type="text" name="birth_place"
                    class="w-full mt-1 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-indigo-400 focus:outline-none"
                    required>
            </div>

            <div>
                <label class="text-sm font-medium text-gray-600">Tanggal Lahir</label>
                <input type="date" name="birth_date"
                    class="w-full mt-1 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-indigo-400 focus:outline-none"
                    required>
            </div>

            <button type="submit"
                class="w-full bg-indigo-500 hover:bg-indigo-600 text-white font-semibold py-2 rounded-lg transition duration-200">
                Daftar Sekarang 🚀
            </button>
        </form>
    </div>

</body>
</html>
