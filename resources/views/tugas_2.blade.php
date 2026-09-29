<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Katalog &amp; Harga | JB ADI STORE</title>
  <link rel="icon" href="{{ asset('img/logo.png') }}" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@600;700&family=Nunito+Sans:wght@400;600;700&display=swap" rel="stylesheet" />
  @vite('resources/css/app.css')
</head>
<body class="bg-[#101322] text-[#eef1fb] font-['Nunito_Sans',sans-serif] antialiased">

@php
  $wa = '6285646464871';
  $rp = fn ($n) => 'Rp' . number_format($n, 0, ',', '.');
  $chat = fn ($teks) => 'https://wa.me/' . $wa . '?text=' . rawurlencode($teks);

  $akun = [
    ['img' => 'akunff1.jpg', 'harga' => 275000, 'level' => 60, 'rank' => 'Heroic ⭐⭐',       'item' => 'SG Terompet, SG Gurun, SG Evo Lv5',              'status' => 'Tersedia'],
    ['img' => 'akunff2.jpg', 'harga' => 85000,  'level' => 56, 'rank' => 'Platinum 3',        'item' => 'SG Terompet',                                    'status' => 'Tersedia'],
    ['img' => 'akunff3.jpg', 'harga' => 120000, 'level' => 47, 'rank' => 'Platinum 4',        'item' => 'SG Terompet',                                    'status' => 'Tersedia'],
    ['img' => 'akunff4.jpg', 'harga' => 430000, 'level' => 56, 'rank' => 'Heroic ⭐⭐⭐⭐⭐', 'item' => 'SG Terompet, SG Gurun, SG Evo Lv5, SG Riper',  'status' => 'Tersedia'],
  ];

  $game = [
    ['nama' => 'Free Fire',      'logo' => 'freefiretopup.jpg',      'satuan' => 'Diamond', 'paket' => [70 => 10000, 140 => 20000, 355 => 50000, 720 => 100000]],
    ['nama' => 'Mobile Legends', 'logo' => 'mobilelegenstopup.png',  'satuan' => 'Diamond', 'paket' => [86 => 20000, 172 => 40000, 257 => 58000, 706 => 155000]],
    ['nama' => 'PUBG Mobile',    'logo' => 'pubgtopup.png',          'satuan' => 'UC',      'paket' => [60 => 16000, 325 => 80000, 660 => 160000, 1800 => 400000]],
    ['nama' => 'Roblox',         'logo' => 'robloxtopup.jpg',        'satuan' => 'Robux',   'paket' => [80 => 16000, 400 => 80000, 800 => 160000, 1700 => 340000]],
  ];

  $wallet = ['DANA' => 'dana.png', 'GoPay' => 'gopay.png', 'OVO' => 'ovo.png', 'ShopeePay' => 'shopepay.png'];
  $nominal = [20000 => 21000, 50000 => 52000, 100000 => 102000, 200000 => 202000]; // saldo => harga
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
<div class="mx-auto max-w-6xl px-4 py-12">

  <h1 class="font-['Chakra_Petch',sans-serif] text-3xl font-bold md:text-4xl">Katalog dan harga</h1>
  <p class="mt-3 max-w-xl text-[#eef1fb]/70">Klik tombol atau harga untuk memesan lewat WhatsApp. Pesan otomatis terisi, tinggal kirim.</p>

  {{-- Akun Free Fire --}}
  <section id="akun" class="scroll-mt-24 pt-12">
    <h2 class="font-['Chakra_Petch',sans-serif] text-2xl font-bold">Akun Free Fire</h2>
    <div class="mt-6 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
      @foreach ($akun as $i => $a)
        <article class="flex flex-col overflow-hidden rounded-xl border border-white/10 bg-[#181c31]">
          <img src="{{ asset('img/' . $a['img']) }}" alt="Screenshot Akun {{ $i + 1 }}" class="aspect-[3/2] w-full object-cover" />
          <div class="flex flex-1 flex-col p-4">
            <div class="flex items-center justify-between">
              <h3 class="font-bold">Akun {{ $i + 1 }}</h3>
              <span class="rounded-full px-2 py-0.5 text-xs font-bold {{ $a['status'] === 'Tersedia' ? 'bg-emerald-500/20 text-emerald-300' : 'bg-white/10 text-white/50' }}">{{ $a['status'] }}</span>
            </div>
            <p class="mt-2 font-['Chakra_Petch',sans-serif] text-2xl font-bold text-[#f5b83d]">{{ $rp($a['harga']) }}</p>
            <ul class="mt-3 space-y-1 text-sm text-[#eef1fb]/75">
              <li>Level {{ $a['level'] }}</li>
              <li>Rank {{ $a['rank'] }}</li>
              <li>{{ $a['item'] }}</li>
              <li class="font-semibold text-emerald-300">Terverifikasi</li>
            </ul>
            @if ($a['status'] === 'Tersedia')
              <a href="{{ $chat('Halo JB ADI STORE, saya mau beli Akun ' . ($i + 1) . ' (' . $rp($a['harga']) . ').') }}"
                 class="mt-5 rounded-lg bg-[#e5243b] px-4 py-2 text-center font-bold text-white transition hover:bg-[#ff4d63] focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#ff4d63]">Beli via WhatsApp</a>
            @endif
          </div>
        </article>
      @endforeach
    </div>
  </section>

  {{-- Top up game --}}
  <section id="topup-game" class="scroll-mt-24 pt-16">
    <h2 class="font-['Chakra_Petch',sans-serif] text-2xl font-bold">Top up game</h2>
    <div class="mt-6 grid gap-6 md:grid-cols-2">
      @foreach ($game as $g)
        <div class="rounded-xl border border-white/10 bg-[#181c31] p-5">
          <div class="flex items-center gap-3">
            <img src="{{ asset('img/' . $g['logo']) }}" alt="{{ $g['nama'] }}" class="h-12 w-12 rounded-lg bg-white object-contain p-0.5" />
            <h3 class="text-lg font-bold">{{ $g['nama'] }}</h3>
          </div>
          <ul class="mt-4 divide-y divide-white/10">
            @foreach ($g['paket'] as $jumlah => $harga)
              <li>
                <a href="{{ $chat('Halo JB ADI STORE, saya mau top up ' . $g['nama'] . ' ' . $jumlah . ' ' . $g['satuan'] . ' (' . $rp($harga) . ').') }}"
                   class="flex items-center justify-between py-3 transition hover:text-[#ff4d63]">
                  <span>{{ number_format($jumlah, 0, ',', '.') }} {{ $g['satuan'] }}</span>
                  <span class="font-bold text-[#f5b83d]">{{ $rp($harga) }}</span>
                </a>
              </li>
            @endforeach
          </ul>
        </div>
      @endforeach
    </div>
    <p class="mt-4 text-sm text-[#eef1fb]/60">Game lain juga bisa. Tanyakan langsung lewat WhatsApp.</p>
  </section>

  {{-- Top up e-wallet --}}
  <section id="topup-ewallet" class="scroll-mt-24 pt-16">
    <h2 class="font-['Chakra_Petch',sans-serif] text-2xl font-bold">Top up e-wallet</h2>
    <div class="mt-6 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
      @foreach ($wallet as $nama => $logo)
        <div class="rounded-xl border border-white/10 bg-[#181c31] p-5">
          <div class="flex items-center gap-3">
            <img src="{{ asset('img/' . $logo) }}" alt="{{ $nama }}" class="h-12 w-12 rounded-lg bg-white object-contain p-0.5" />
            <h3 class="text-lg font-bold">{{ $nama }}</h3>
          </div>
          <ul class="mt-4 divide-y divide-white/10">
            @foreach ($nominal as $saldo => $harga)
              <li>
                <a href="{{ $chat('Halo JB ADI STORE, saya mau top up ' . $nama . ' ' . $rp($saldo) . ' (bayar ' . $rp($harga) . ').') }}"
                   class="flex items-center justify-between py-3 text-sm transition hover:text-[#ff4d63]">
                  <span>Saldo {{ $rp($saldo) }}</span>
                  <span class="font-bold text-[#f5b83d]">{{ $rp($harga) }}</span>
                </a>
              </li>
            @endforeach
          </ul>
        </div>
      @endforeach
    </div>
    <p class="mt-4 text-sm text-[#eef1fb]/60">E-wallet lain dan nominal lain bisa ditanyakan lewat WhatsApp.</p>
  </section>

</div>
  </main>

  <footer class="mt-20 border-t border-white/10 bg-[#0b0d19]">
    <div class="mx-auto flex max-w-6xl flex-col gap-3 px-4 py-8 text-sm text-[#eef1fb]/70 md:flex-row md:items-center md:justify-between">
      <p>&copy; {{ date('Y') }} JB ADI STORE. Akun Free Fire, top up game, dan top up e-wallet.</p>
      <a href="https://wa.me/6285646464871" class="font-semibold text-[#ff4d63] hover:underline">WhatsApp: +62 856-4646-4871</a>
    </div>
  </footer>

</body>
</html>