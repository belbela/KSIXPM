# KSIXPM

## Struktur Proyek

Repository ini merupakan hasil kolaborasi tim dengan kontribusi dari setiap anggota kelompok:

### Kontribusi Per Branch

#### Branch: Bella
- `routes/daftar.js` - Form pendaftaran dan logika upload
- `database/pendaftaran.sql` - Database schema untuk pendaftaran

#### Branch: Berlian
- `routes/sertifikat.php` - Routes untuk sertifikat
- `databases/koneksi.php` - Koneksi database
- `databases/sertifikat.sql` - Database schema untuk sertifikat
- `views/sertifikat.php` - Tampilan sertifikat
- `vendor/` - Library DomPDF untuk generate PDF

#### Branch: Gheytsha
- `views/index.php` - Halaman utama
- `views/login.php` - Halaman login
- `views/register.php` - Halaman registrasi
- `public/` - Assets CSS dan JS (Bootstrap)

#### Branch: Racel
- `admin/admin.php` - Dashboard admin
- `admin/datapeserta.php` - Data peserta admin
- `generate_sertifikat.php` - Generator sertifikat
- `index.php` - Entry point aplikasi
- `assets/style.css` - Custom styling

## Struktur Folder

```
KSIXPM/
├── admin/              # Admin dashboard
├── assets/             # Custom CSS
├── database/           # SQL schema (pendaftaran)
├── databases/          # Koneksi dan SQL schema (sertifikat)
├── public/             # Bootstrap CSS & JS
├── routes/             # Route handlers
├── vendor/             # Dependencies (DomPDF)
├── views/              # View templates
├── generate_sertifikat.php
└── index.php
```

## Riwayat Merge
Semua branch (bella, berlian, gheytsha, racel) telah di-merge ke branch main dengan sukses.