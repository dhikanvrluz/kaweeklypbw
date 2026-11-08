<?php

use Illuminate\Support\Facades\Route;

/*
 * Satu file ini sudah cukup: menu Home, Profil, Berita, Kontak.
 * Tanpa Vite, Tailwind, npm, atau file view tambahan.
 * Cukup jalankan: php artisan serve
 */

function halaman(string $rute, string $judul, string $isi): string
{
    $menu = [
        'home' => ['/', 'Home'],
        'profil' => ['/profil', 'Profil'],
        'berita' => ['/berita', 'Berita'],
        'kontak' => ['/kontak', 'Kontak'],
    ];

    $nav = '';
    foreach ($menu as $kunci => [$url, $label]) {
        $aktif = $kunci === $rute ? ' class="aktif" aria-current="page"' : '';
        $nav .= "<li><a href=\"{$url}\"{$aktif}>{$label}</a></li>";
    }

    $nama = e(config('app.name'));
    $tahun = date('Y');
    $judul = e($judul);

    return <<<HTML
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{$judul} - {$nama}</title>
<style>
  *{box-sizing:border-box}
  body{margin:0;font-family:system-ui,-apple-system,"Segoe UI",Roboto,sans-serif;color:#1e293b;line-height:1.6}
  header{border-bottom:1px solid #e2e8f0}
  nav{max-width:960px;margin:0 auto;padding:14px 16px;display:flex;flex-wrap:wrap;align-items:center;justify-content:space-between;gap:8px}
  .logo{font-weight:600;font-size:1.15rem;color:#115e59;text-decoration:none}
  nav ul{list-style:none;margin:0;padding:0;display:flex;flex-wrap:wrap;gap:4px}
  nav ul a{display:block;padding:8px 12px;border-radius:6px;color:#475569;text-decoration:none;font-size:.95rem;font-weight:500}
  nav ul a:hover{background:#f1f5f9}
  nav ul a.aktif{background:#f0fdfa;color:#115e59}
  a:focus-visible{outline:2px solid #0f766e;outline-offset:2px}
  main{max-width:960px;margin:0 auto;padding:40px 16px}
  h1{font-size:2rem;margin:0 0 16px;letter-spacing:-.02em}
  p{max-width:65ch;color:#475569}
  .tombol{display:inline-block;margin:8px 8px 0 0;padding:10px 20px;border-radius:6px;background:#0f766e;color:#fff;text-decoration:none;font-weight:500}
  .tombol:hover{background:#115e59}
  .tombol.abu{background:#fff;color:#1e293b;border:1px solid #cbd5e1}
  .tombol.abu:hover{background:#f1f5f9}
  article{border-bottom:1px solid #e2e8f0;padding:20px 0}
  article h2{margin:0;font-size:1.25rem}
  time,dt{font-size:.85rem;color:#64748b}
  dd{margin:0 0 16px}
  footer{border-top:1px solid #e2e8f0;padding:24px 16px;text-align:center;font-size:.85rem;color:#64748b}
</style>
</head>
<body>
<header>
  <nav aria-label="Menu utama">
    <a class="logo" href="/">{$nama}</a>
    <ul>{$nav}</ul>
  </nav>
</header>
<main>
{$isi}
</main>
<footer>&copy; {$tahun} {$nama}</footer>
</body>
</html>
HTML;
}

Route::get('/', function () {
    $nama = e(config('app.name'));

    return halaman('home', 'Home', <<<HTML
<h1>Selamat datang di {$nama}</h1>
<p>Tulis ringkasan singkat tentang siapa Anda dan apa yang ditawarkan website ini.</p>
<a class="tombol" href="/berita">Baca berita</a>
<a class="tombol abu" href="/kontak">Hubungi kami</a>
HTML);
});

Route::get('/profil', function () {
    return halaman('profil', 'Profil', <<<'HTML'
<h1>Profil</h1>
<p>Ceritakan tentang organisasi atau diri Anda: latar belakang, tujuan, dan pengalaman.</p>
<h2>Visi</h2>
<p>Isi visi di sini.</p>
<h2>Misi</h2>
<p>Isi misi di sini.</p>
HTML);
});

Route::get('/berita', function () {
    // Data contoh. Ganti judul, tanggal, dan ringkasan sesuai kebutuhan.
    $berita = [
        ['Judul berita pertama', '8 November 2026', 'Ringkasan singkat berita pertama.'],
        ['Judul berita kedua', '5 November 2026', 'Ringkasan singkat berita kedua.'],
        ['Judul berita ketiga', '1 November 2026', 'Ringkasan singkat berita ketiga.'],
    ];

    $isi = '<h1>Berita</h1>';
    foreach ($berita as [$judul, $tanggal, $ringkasan]) {
        $isi .= '<article><h2>'.e($judul).'</h2><time>'.e($tanggal).'</time><p>'.e($ringkasan).'</p></article>';
    }

    return halaman('berita', 'Berita', $isi);
});

Route::get('/kontak', function () {
    return halaman('kontak', 'Kontak', <<<'HTML'
<h1>Kontak</h1>
<dl>
  <dt>Alamat</dt><dd>Jl. Contoh No. 1, Semarang</dd>
  <dt>Email</dt><dd><a href="mailto:info@contoh.com">info@contoh.com</a></dd>
  <dt>Telepon</dt><dd>0812-0000-0000</dd>
</dl>
HTML);
});