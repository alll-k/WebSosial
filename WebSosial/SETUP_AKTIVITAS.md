# Cara Menjalankan Database Migration dan Seeder untuk Aktivitas

## Langkah 1: Jalankan Migration
```bash
php artisan migrate
```

## Langkah 2: Jalankan Seeder
```bash
php artisan db:seed
```

Atau jalankan keduanya sekaligus:
```bash
php artisan migrate:fresh --seed
```

## Atau Jalankan Seeder Spesifik
```bash
php artisan db:seed --class=AktifitasSeeder
```

---

## Apa yang akan terjadi:
✅ Tabel `aktivitas` akan dibuat di database
✅ 5 sample aktivitas akan ditambahkan untuk user pertama
✅ Aktivitas yang ditambahkan:
  1. Bakti Sosial Pemberian Sembako (aktif)
  2. Program Bimbingan Belajar Gratis (aktif)
  3. Pemeriksaan Kesehatan Gratis (selesai)
  4. Penanaman Pohon di Taman Kota (aktif)
  5. Workshop Keterampilan Membuat Kerajinan Tangan (aktif)

✅ Halaman Aktivitas Saya akan menampilkan semua data ini
