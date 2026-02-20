# Portofolio Kenzo - Website Portofolio Pribadi

## Deskripsi Proyek

Website portofolio ini adalah proyek web statis yang dibuat untuk menampilkan profil pribadi, keterampilan, portofolio proyek, dan informasi kontak. Website ini dirancang dengan antarmuka yang responsif, mendukung tema gelap dan terang, serta dilengkapi dengan form kontak yang terintegrasi dengan WhatsApp untuk mengirim pesan langsung ke pemilik.

Proyek ini menggunakan teknologi web dasar seperti HTML, CSS, dan JavaScript untuk frontend, serta PHP untuk backend sederhana pada form kontak.

## Fitur Utama

- **Halaman Beranda**: Menampilkan pengenalan singkat, statistik, dan tautan sosial media.
- **Tentang Saya**: Deskripsi pribadi dan pengalaman.
- **Keahlian**: Daftar keterampilan pemrograman dan alat yang digunakan, dengan toggle antara "Keahlian" dan "Alat".
- **Portofolio**: Galeri proyek dengan gambar dan deskripsi (saat ini placeholder).
- **Kontak**: Formulir kontak yang mengirim pesan ke WhatsApp menggunakan API Fonnte.
- **Tema Dinamis**: Toggle antara tema gelap dan terang, dengan penyimpanan preferensi di localStorage.
- **Responsif**: Desain yang menyesuaikan dengan berbagai ukuran layar (desktop, tablet, mobile).
- **Navigasi Sticky**: Header yang menempel saat scroll.
- **Menu Mobile**: Toggle menu navigasi untuk perangkat mobile.

## Teknologi yang Digunakan

- **Frontend**:
  - HTML5: Struktur halaman.
  - CSS3: Styling dan animasi.
  - JavaScript (ES6): Interaktivitas, toggle tema, menu mobile, dan submit form via AJAX.
  - Remixicon: Ikon dari CDN.
  - IonIcons: Ikon tambahan dari CDN.

- **Backend**:
  - PHP: Menangani submit form dan integrasi API Fonnte untuk mengirim pesan WhatsApp.

- **API Eksternal**:
  - Fonnte API: Untuk mengirim pesan otomatis ke WhatsApp.

- **Tools Lain**:
  - cURL (via PHP): Untuk request ke API Fonnte.

## Struktur File

```
cv&fortopolio/
├── index.html          # Halaman utama website
├── send.php            # Script PHP untuk menangani form kontak
├── css/
│   └── style.css       # File CSS untuk styling
├── js/
│   └── main.js         # File JavaScript untuk interaktivitas
└── README.md           # Dokumentasi proyek (file ini)
```

## Instalasi dan Setup

### Persyaratan Sistem

- Web server yang mendukung PHP (misalnya Apache, Nginx, atau built-in PHP server).
- PHP versi 7.0 atau lebih tinggi dengan ekstensi cURL diaktifkan.
- Browser web modern (Chrome, Firefox, Safari, Edge).

### Langkah Instalasi

1. **Clone atau Download Proyek**:
   - Unduh atau clone repository ini ke folder lokal Anda.

2. **Konfigurasi API Fonnte**:
   - Daftar akun di [Fonnte](https://fonnte.com/).
   - Dapatkan API Token dari dashboard Fonnte.
   - Buka file `send.php` dan ganti placeholder berikut:
     - `'Authorization: Hwc71cBatyeUUrxizrSQ'` → Ganti dengan token API Anda.
     - `'target' => '082216460833'` → Ganti dengan nomor WhatsApp tujuan (tanpa kode negara, misalnya 81234567890).

3. **Jalankan Server Lokal**:
   - Buka terminal di folder proyek.
   - Jalankan perintah: `php -S localhost:8000`
   - Buka browser dan akses `http://localhost:8000`.

## Cara Menjalankan

1. Setelah server berjalan, buka `http://localhost:8000` di browser.
2. Jelajahi halaman: Beranda, Tentang, Keahlian, Portofolio, Kontak.
3. Untuk menguji form kontak:
   - Isi semua field (Nama, Email, Telepon, Pesan).
   - Klik "Kirim".
   - Pesan akan dikirim ke WhatsApp tujuan via API Fonnte.
   - Jika sukses, form akan direset dan muncul alert sukses.
   - Jika gagal, periksa console browser atau log server untuk error.

## Konfigurasi Tambahan

- **Tema Default**: Website dimulai dengan tema gelap. Pengguna dapat toggle via tombol di header.
- **Bahasa**: Konten dalam bahasa Indonesia. Untuk mengubah, edit teks di `index.html`.
- **Gambar dan Ikon**: Gambar menggunakan URL eksternal (Postimg). Ganti dengan gambar lokal jika diperlukan.
- **Validasi Form**: Form memerlukan semua field diisi. Jika kosong, muncul alert error.

## Troubleshooting

- **Error "Terjadi kesalahan saat mengirim pesan"**: Periksa token API Fonnte dan nomor WhatsApp. Pastikan koneksi internet baik.
- **Form tidak submit**: Pastikan JavaScript aktif di browser. Periksa console untuk error JS.
- **Server tidak berjalan**: Pastikan PHP terinstall dan jalankan `php -S localhost:8000` di folder yang benar.
- **CORS Error**: Jika deploy online, pastikan server mengizinkan request dari domain Anda.

## Kontribusi

Proyek ini adalah portofolio pribadi. Jika ingin berkontribusi:
- Fork repository.
- Buat branch baru untuk fitur.
- Submit pull request.

## Lisensi

Proyek ini dibuat untuk tujuan edukasi dan pribadi. Tidak ada lisensi resmi; gunakan dengan bijak.

## Kontak

- **Nama**: Muhammad Dani Sahputra
- **Email**: muhammaddanisaputra48@gmail.com
- **WhatsApp**: +62 822 1646 0833
- **LinkedIn**: [Muhammad Dani Sahputra](https://www.linkedin.com/in/muhammad-dani-sahputra-b00578305/)
- **GitHub**: [kenzodchjandcuh](https://github.com/kenzodchjandcuh)

---

Dibuat dengan ❤️ oleh Muhammad Dani Sahputra. Copyright © 2026.</content>
<parameter name="filePath">e:\gabutnyasaya.html\cv&fortopolio\README.md
