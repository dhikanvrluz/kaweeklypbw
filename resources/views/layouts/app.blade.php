<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('judul', 'Beranda') - {{ config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-white text-slate-800 antialiased font-['Instrument_Sans',sans-serif]">
@php
    $menu = [
        ['rute' => 'home', 'label' => 'Home'],
        ['rute' => 'profil', 'label' => 'Profil'],
        ['rute' => 'berita', 'label' => 'Berita'],
        ['rute' => 'kontak', 'label' => 'Kontak'],
    ];
@endphp

<header class="border-b border-slate-200">
    <nav class="mx-auto flex max-w-5xl items-center justify-between px-4 py-4" aria-label="Menu utama">
        <a href="{{ route('home') }}" class="text-lg font-semibold text-teal-800">{{ config('app.name') }}</a>

        <input type="checkbox" id="toggle-menu" class="peer sr-only">
        <label for="toggle-menu" class="cursor-pointer rounded border border-slate-300 px-3 py-1 text-sm md:hidden peer-focus-visible:outline peer-focus-visible:outline-2 peer-focus-visible:outline-teal-700">Menu</label>

        <ul class="absolute inset-x-0 top-[61px] hidden flex-col gap-1 border-b border-slate-200 bg-white px-4 pb-4 peer-checked:flex md:static md:flex md:flex-row md:border-0 md:p-0">
            @foreach ($menu as $item)
                <li>
                    <a href="{{ route($item['rute']) }}"
                       @if (request()->routeIs($item['rute'])) aria-current="page" @endif
                       class="block rounded px-3 py-2 text-sm font-medium hover:bg-slate-100 focus-visible:outline focus-visible:outline-2 focus-visible:outline-teal-700
                              {{ request()->routeIs($item['rute']) ? 'bg-teal-50 text-teal-800' : 'text-slate-600' }}">
                        {{ $item['label'] }}
                    </a>
                </li>
            @endforeach
        </ul>
    </nav>
</header>

<main class="mx-auto max-w-5xl px-4 py-10">
    @yield('isi')
</main>

<footer class="border-t border-slate-200 py-6 text-center text-sm text-slate-500">
    &copy; {{ date('Y') }} {{ config('app.name') }}
</footer>
</body>
</html>