@extends('layouts.app')
@section('judul', 'Home')
@section('isi')
    <h1 class="text-4xl font-semibold tracking-tight">Selamat datang di {{ config('app.name') }}</h1>
    <p class="mt-4 max-w-prose text-lg leading-relaxed text-slate-600">
        Tulis ringkasan singkat tentang siapa Anda dan apa yang ditawarkan website ini.
    </p>
    <div class="mt-8 flex gap-3">
        <a href="{{ route('berita') }}" class="rounded bg-teal-700 px-5 py-2.5 font-medium text-white hover:bg-teal-800"></a>
        <a href="{{ route('kontak') }}" class="rounded border border-slate-300 px-5 py-2.5 font-medium hover:bg-slate-100">
      
        </a>
    </div>
@endsection