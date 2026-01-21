@extends('layouts.auth')

@section('title', 'Login')

@section('content')
    <h2 class="text-2xl font-bold text-center mb-4">Login</h2>
    <form method="POST" action="{{ route('login') }}" class="space-y-4">
        @csrf
        <div>
            <label class="block font-medium">Email</label>
            <input type="email" name="email" required class="w-full p-2 border rounded">
        </div>
        <div>
            <label class="block font-medium">Password</label>
            <input type="password" name="password" required class="w-full p-2 border rounded">
        </div>
        <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded">Login</button>
    </form>
    <p class="text-center mt-4 text-sm">Belum punya akun? <a href="{{ route('register') }}" class="text-blue-500">Daftar</a>
    </p>
@endsection
