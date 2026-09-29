<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Beranda | JB ADI STORE</title>
  <link rel="icon" href="{{ asset('img/logo.png') }}" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@600;700&family=Nunito+Sans:wght@400;600;700&display=swap" rel="stylesheet" />
  @vite('resources/css/app.css')
</head>
<body class="bg-[#101322] text-[#eef1fb] font-['Nunito_Sans',sans-serif] antialiased">

@php
  $wa = '6285646464871';
  $logoGame = ['freefiretopup.jpg' => 'Free Fire', 'mobilelegenstopup.png' => 'Mobile Legends', 'pubgtopup.png' => 'PUBG Mobile', 'robloxtopup.jpg' => 'Roblox'];
  $logoWallet = ['dana.png' => 'DANA', 'gopay.png' => 'GoPay', 'ovo.png' => 'OVO', 'shopepay.png' => 'ShopeePay'];
@endphp

  <header class="sticky top-0 z-20 border-b border-white/10 bg-[#101322]/90 backdrop-blur">
    <nav class="mx-auto flex max-w-6xl items-center justify-between px-4 py-3">
      <a href="/" class="flex items-center gap-3">
        <img src="{{ asset('img/logo.png') }}" alt="Logo JB Adi Store" class="h-10 w-10 rounded-full" />
        <span class="font-['Chakra_Petch',sans-serif] text-lg font-bold">JB ADI STORE</span>
      </a>
      <div class="flex items-center gap-1 text-sm font-semibold">
        <a href="/" class="rounded px-3 py-2 hover:bg-white/10 {{ request()->is('/') ? 'text-[#ff4d63]' : '' }}">Beranda</a>
        <a href="/katalog" class="rounded px-3 py-2 hover:bg-white/10 {{ request()->is('katalog') ? 'text-[#ff4d63]' : '' }}">Katalog &amp; Harga</a>
      </div>
    </nav>
  </header>

  <main>
  {{-- Hero --}}
  <section class="mx-auto grid max-w-6xl items-center gap-10 px-4 py-14 md:grid-cols-2 md:py-20">
    <div>
      <h1 class="font-['Chakra_Petch',sans-serif] text-4xl font-bold leading-tight md:text-5xl">
        Akun Free Fire dan top up game, tanpa ribet.
      </h1>
      <p class="mt-5 max-w-md text-lg text-[#eef1fb]/75">
        JB ADI STORE menjual akun Free Fire terverifikasi dan melayani top up semua game dan e-wallet. Pesan lewat WhatsApp, langsung diproses.
      </p>
      <div class="mt-8 flex flex-wrap gap-3">
        <a href="/katalog" class="rounded-lg bg-[#e5243b] px-6 py-3 font-bold text-white transition hover:bg-[#ff4d63] focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#ff4d63]">Lihat katalog</a>
        <a href="https://wa.me/{{ $wa }}?text={{ rawurlencode('Halo JB ADI STORE, saya mau tanya.') }}" class="rounded-lg border border-white/25 px-6 py-3 font-bold transition hover:bg-white/10 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#ff4d63]">Chat WhatsApp</a>
      </div>
    </div>
    <div class="flex justify-center">
      <img src="{{ asset('img/logo.png') }}" alt="Logo JB Adi Store"
           class="h-64 w-64 rounded-full ring-4 ring-[#e5243b] shadow-[0_0_90px_rgba(229,36,59,0.5)] md:h-80 md:w-80" />
    </div>
  </section>

  {{-- Layanan --}}
  <section class="mx-auto max-w-6xl px-4 py-10">
    <h2 class="font-['Chakra_Petch',sans-serif] text-2xl font-bold md:text-3xl">Layanan kami</h2>
    <div class="mt-6 grid gap-4 md:grid-cols-3">
      <a href="/katalog#akun" class="rounded-xl border border-white/10 bg-[#181c31] p-6 transition hover:border-[#e5243b]">
        <h3 class="text-lg font-bold">Jual beli akun Free Fire</h3>
        <p class="mt-2 text-[#eef1fb]/70">Akun dengan skin dan senjata pilihan. Semua akun sudah terverifikasi keamanannya.</p>
      </a>
      <a href="/katalog#topup-game" class="rounded-xl border border-white/10 bg-[#181c31] p-6 transition hover:border-[#e5243b]">
        <h3 class="text-lg font-bold">Top up semua game</h3>
        <p class="mt-2 text-[#eef1fb]/70">Diamond, UC, Robux, dan lainnya. Cukup kirim ID game ke WhatsApp.</p>
      </a>
      <a href="/katalog#topup-ewallet" class="rounded-xl border border-white/10 bg-[#181c31] p-6 transition hover:border-[#e5243b]">
        <h3 class="text-lg font-bold">Top up semua e-wallet</h3>
        <p class="mt-2 text-[#eef1fb]/70">Isi saldo DANA, GoPay, OVO, ShopeePay, dan e-wallet lain.</p>
      </a>
    </div>
  </section>

  {{-- Logo game & e-wallet --}}
  <section class="mx-auto max-w-6xl px-4 py-10">
    <h2 class="font-['Chakra_Petch',sans-serif] text-2xl font-bold md:text-3xl">Game dan e-wallet yang dilayani</h2>
    <div class="mt-6 flex flex-wrap gap-4">
      @foreach ($logoGame + $logoWallet as $file => $nama)
        <img src="{{ asset('img/' . $file) }}" alt="{{ $nama }}" title="{{ $nama }}" class="h-16 w-16 rounded-xl bg-white object-contain p-1" />
      @endforeach
    </div>
  </section>

  {{-- Keunggulan --}}
  <section class="mx-auto max-w-6xl px-4 py-10">
    <h2 class="font-['Chakra_Petch',sans-serif] text-2xl font-bold md:text-3xl">Kenapa beli di JB ADI STORE</h2>
    <dl class="mt-6 grid gap-6 md:grid-cols-3">
      <div class="border-l-4 border-[#e5243b] pl-4">
        <dt class="font-bold">Akun terverifikasi</dt>
        <dd class="mt-1 text-[#eef1fb]/70">Setiap akun dicek keamanannya sebelum dijual.</dd>
      </div>
      <div class="border-l-4 border-[#e5243b] pl-4">
        <dt class="font-bold">Harga sesuai pasar</dt>
        <dd class="mt-1 text-[#eef1fb]/70">Daftar harga jelas, tanpa biaya tersembunyi.</dd>
      </div>
      <div class="border-l-4 border-[#e5243b] pl-4">
        <dt class="font-bold">Pesan lewat WhatsApp</dt>
        <dd class="mt-1 text-[#eef1fb]/70">Tanya dan pesan langsung ke pemilik toko.</dd>
      </div>
    </dl>
  </section>

  {{-- Tentang --}}
  <section class="mx-auto max-w-6xl px-4 py-10">
    <div class="flex flex-col items-center gap-6 rounded-2xl bg-[#181c31] p-8 md:flex-row">
      <img src="{{ asset('img/owner.png') }}" alt="Pemilik JB Adi Store" class="h-32 w-32 shrink-0 rounded-full object-cover ring-2 ring-[#e5243b]" />
      <div>
        <h2 class="font-['Chakra_Petch',sans-serif] text-2xl font-bold">Halo, saya Adi</h2>
        <p class="mt-2 max-w-xl text-[#eef1fb]/75">Pemilik JB ADI STORE. Saya melayani sendiri setiap pesanan supaya kamu tahu siapa yang mengurus akun dan top up-mu.</p>
        <a href="https://wa.me/{{ $wa }}" class="mt-4 inline-block font-bold text-[#ff4d63] hover:underline">Hubungi saya di WhatsApp</a>
      </div>
    </div>
  </section>
  </main>

  <footer class="mt-20 border-t border-white/10 bg-[#0b0d19]">
    <div class="mx-auto flex max-w-6xl flex-col gap-3 px-4 py-8 text-sm text-[#eef1fb]/70 md:flex-row md:items-center md:justify-between">
      <p>&copy; {{ date('Y') }} JB ADI STORE. Akun Free Fire, top up game, dan top up e-wallet.</p>
      <a href="https://wa.me/6285646464871" class="font-semibold text-[#ff4d63] hover:underline">WhatsApp: +62 856-4646-4871</a>
    </div>
  </footer>

</body>
</html>