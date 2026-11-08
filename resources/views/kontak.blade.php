@extends('layouts.app')
@section('judul', 'Kontak')
@section('isi')
    <h1 class="text-3xl font-semibold tracking-tight">Kontak</h1>
 
    @if (session('sukses'))
        <p role="status" class="mt-6 rounded border border-teal-300 bg-teal-50 px-4 py-3 text-teal-900">{{ session('sukses') }}</p>
    @endif
 
    <form action="{{ route('kontak.kirim') }}" method="POST" class="mt-6 max-w-lg space-y-4">
        @csrf
        @foreach ([['nama', 'Nama', 'text'], ['email', 'Email', 'email']] as [$name, $label, $type])
            <div>
                <label for="{{ $name }}" class="block text-sm font-medium">{{ $label }}</label>
                <input id="{{ $name }}" name="{{ $name }}" type="{{ $type }}" value="{{ old($name) }}" required
                       class="mt-1 w-full rounded border border-slate-300 px-3 py-2 focus:outline focus:outline-2 focus:outline-teal-700">
                @error($name) <p class="mt-1 text-sm text-red-700">{{ $message }}</p> @enderror
            </div>
        @endforeach
        <div>
            <label for="pesan" class="block text-sm font-medium">Pesan</label>
            <textarea id="pesan" name="pesan" rows="5" required
                      class="mt-1 w-full rounded border border-slate-300 px-3 py-2 focus:outline focus:outline-2 focus:outline-teal-700">{{ old('pesan') }}</textarea>
            @error('pesan') <p class="mt-1 text-sm text-red-700">{{ $message }}</p> @enderror
        </div>
        <button type="submit" class="rounded bg-teal-700 px-5 py-2.5 font-medium text-white hover:bg-teal-800">Kirim pesan</button>
    </form>
@endsection