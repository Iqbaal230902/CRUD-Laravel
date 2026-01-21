@extends('layouts.auth')

@section('title', 'Register')

@section('content')
    <h2 class="text-2xl font-bold text-center mb-4">Register</h2>
    <form method="POST" action="{{ route('register') }}" class="space-y-4">
        @csrf
        <div>
            <label class="block font-medium">Name</label>
            <input type="text" name="name" required class="w-full p-2 border rounded">
        </div>
        <div>
            <label class="block font-medium">Email</label>
            <input type="email" name="email" required class="w-full p-2 border rounded">
        </div>
        <div>
            <label class="block font-medium">Password</label>
            <input type="password" name="password" required class="w-full p-2 border rounded">
        </div>
        <button type="submit" class="w-full bg-green-500 text-white py-2 rounded">Register</button>
    </form>
    <p class="text-center mt-4 text-sm">Sudah punya akun? <a href="{{ route('login') }}" class="text-green-500">Login</a>
    </p>
@endsection
