@extends('layout')

@section('content')

<div class="max-w-4xl mx-auto py-12 px-6">
    <div class="bg-white shadow-xl rounded-2xl overflow-hidden">
        <div class="bg-gradient-to-r from-gray-500 to-gray-700 p-6 text-white flex items-center gap-6">
            @if(Auth::check() && Auth::user()->photo)   
                <img src="{{ asset('storage/' . Auth::user()->photo) }}" 
                     alt="Foto Profil" 
                     class="w-24 h-24 rounded-full border-4 border-white shadow-md object-cover">
            @else
            <img src="https://ui-avatars.com/api/?username={{ urlencode(Auth::user()?->username ?? 'User') }}" 
            alt="Avatar" 
            class="w-24 h-24 rounded-full border-4 border-white shadow-md object-cover">
            @endif
            <div>
                <h2 class="text-white text-2xl font-bold">{{ Auth::user()->username }}</h2>
                <p class="text-white/80">{{ Auth::user()->email }}</p>
            </div>
        </div>

        <div class="p-6 bg-gray-50">
            @if(session('success'))
                <div class="mb-4 bg-green-100 text-green-800 px-4 py-2 rounded-md">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('profile.update', Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="grid md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <h3 class="text-lg font-semibold mb-2 text-gray-700">Nama Pengguna</h3>
                        <input type="text" name="username" value="{{ Auth::user()->username }}" 
                               class="bg-white border border-gray-200 p-4 rounded-md shadow-sm w-full">
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold mb-2 text-gray-700">Email</h3>
                        <input type="email" name="email" value="{{ Auth::user()->email }}" 
                               class="bg-white border border-gray-200 p-4 rounded-md shadow-sm w-full">
                    </div>
                </div>

                <div class="mb-6">
                    <h3 class="text-lg font-semibold mb-2 text-gray-700">Ganti Foto Profil</h3>
                    <input type="file" name="photo" accept="image/*" class="border border-gray-300 px-4 py-2 rounded-md w-full">
                    @error('photo')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex justify-end">
                    <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-md hover:bg-blue-700">
                        Simpan Perubahan
                    </button>
                </div>
            </form>

            <div class="text-right mt-6">
                <a href="{{ route('logout') }}" 
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();" 
                   class="text-red-600 font-medium hover:underline">
                    Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                    @csrf
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
