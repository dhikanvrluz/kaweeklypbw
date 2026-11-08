@extends('layouts.app')
@section('judul', 'Berita')
@section('isi')
    <h1 class="text-3xl font-semibold tracking-tight">Berita</h1>
 
    @forelse ($berita as $item)
        <article class="mt-6 border-b border-slate-200 pb-6">
            <h2 class="text-xl font-semibold">{{ $item['judul'] }}</h2>
            <time class="text-sm text-slate-500">{{ $item['tanggal'] }}</time>
            <p class="mt-2 max-w-prose text-slate-600">{{ $item['ringkasan'] }}</p>
        </article>
    @empty
        <p class="mt-6 text-slate-600">Belum ada berita. Tambahkan berita pertama lewat panel admin.</p>
    @endforelse
@endsection
 