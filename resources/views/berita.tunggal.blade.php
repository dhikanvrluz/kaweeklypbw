@extends('layouts.main')

@section('content')
   <div class="text-center">
        <h1>{{ $singlenews["judul"] }}</h1>
        <h5>{{ $singlenews["penulis"] }}</h5>
    </div>
    <div class="text-justify">
        <p>{{ $singlenews["konten"] }}</p>
    </div>
    <a href="/berita">Kembali</a>
@endsection