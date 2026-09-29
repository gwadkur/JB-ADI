# JB ADI STORE

Website toko online **JB ADI STORE** yang menjual akun game Free Fire serta melayani top up semua game dan top up semua e-wallet. Dibuat dengan Laravel dan Tailwind CSS sebagai tugas pemrograman web.

## Fitur

Website terdiri dari 2 halaman:

1. **Beranda** (`/`): pengenalan toko, layanan yang tersedia, daftar game dan e-wallet yang dilayani, keunggulan toko, dan profil pemilik.
2. **Katalog & Harga** (`/katalog`):
   - Daftar akun Free Fire yang dijual, lengkap dengan harga, level, rank, item unggulan, dan status.
   - Daftar harga top up game: Free Fire, Mobile Legends, PUBG Mobile, dan Roblox.
   - Daftar harga top up e-wallet: DANA, GoPay, OVO, dan ShopeePay.
   - Tombol pesan yang langsung membuka WhatsApp dengan pesan yang sudah terisi otomatis.

## Teknologi

- Laravel (Blade Template)
- Tailwind CSS
- Vite
- PHP dan Node.js

## Struktur file utama

```
resources/views/tugas_1.blade.php   -> Halaman Beranda
resources/views/tugas_2.blade.php   -> Halaman Katalog & Harga
routes/web.php                      -> Route halaman
public/img/                         -> Gambar (logo, akun, game, e-wallet)
```

## Cara menjalankan

Pastikan PHP, Composer, dan Node.js sudah terpasang.

```bash
# 1. Clone repository
git clone https://github.com/gwadkur/JB-ADI.git
cd JB-ADI

# 2. Pasang dependensi
composer install
npm install

# 3. Siapkan file environment
cp .env.example .env
php artisan key:generate

# 4. Jalankan (gunakan dua terminal)
php artisan serve
npm run dev
```

Lalu buka `http://127.0.0.1:8000` di browser.

## Mengubah harga dan data

Semua harga, data akun, dan nominal top up ada di bagian `@php` paling atas file `resources/views/tugas_2.blade.php`. Ubah angkanya di sana, tidak perlu mengubah HTML.

## Tampilan

Tambahkan screenshot di sini setelah web berjalan, misalnya:

```
![Beranda](screenshots/beranda.png)
![Katalog](screenshots/katalog.png)
```

## Kontak

WhatsApp: +62 856-4646-4871

## Pembuat

- Nama: Adi
- Mata kuliah: Pemrograman Web
- (Tambahkan NIM dan kelas jika diperlukan)
