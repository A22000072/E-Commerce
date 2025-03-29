
# Laravel E-Commerce Project

Proyek ini adalah aplikasi e-commerce berbasis Laravel yang menampilkan berbagai fitur seperti sidebar navigasi, halaman profil, keranjang belanja, dan tata letak responsif dengan desain minimalis hitam putih.

## 🚀 Fitur Utama
- **Sidebar Navigasi**: Sidebar yang mudah digunakan untuk navigasi ke berbagai halaman.
- **Halaman Profil**: Menampilkan informasi pengguna dengan desain modern.
- **Keranjang Belanja (Cart)**: Pengguna dapat melihat dan mengelola produk yang ditambahkan ke keranjang.
- **Checkout**: Halaman checkout untuk menyelesaikan transaksi.
- **Desain Responsif**: Tata letak yang dioptimalkan untuk perangkat desktop dan mobile.
- **Integrasi Bootstrap**: Menggunakan Bootstrap 5 untuk elemen UI yang responsif dan elegan.

---

## 📋 Instalasi

1. **Clone Repository**:
   ```bash
   git clone https://github.com/username/repository.git
   cd repository
   ```

2. **Instal Dependensi**:
   Jalankan perintah berikut untuk menginstal semua dependensi PHP dan JavaScript:
   ```bash
   composer install
   npm install
   ```

3. **Konfigurasi Lingkungan**:
   Salin file `.env.example` menjadi `.env` dan konfigurasikan database Anda.
   ```bash
   cp .env.example .env
   ```

4. **Generate Key**:
   Buat application key untuk Laravel:
   ```bash
   php artisan key:generate
   ```

5. **Migrasi Database**:
   Jalankan migrasi untuk membuat tabel di database:
   ```bash
   php artisan migrate
   ```

6. **Jalankan Server**:
   Aktifkan server pengembangan Laravel:
   ```bash
   php artisan serve
   ```

7. **Jalankan Vite** (Opsional, untuk pengembangan frontend):
   ```bash
   npm run dev
   ```

---

## 📂 Struktur Proyek
Berikut adalah struktur file utama:
```
.
├── app/Http/Controllers
│   ├── ProfileController.php
│   ├── CartController.php
│   ├── CheckoutController.php
│   └── ...
├── resources/views
│   ├── layouts/app.blade.php
│   ├── partials
│   │   ├── header.blade.php
│   │   ├── footer.blade.php
│   │   ├── sidebar.blade.php
│   ├── profile.blade.php
│   ├── cart.blade.php
│   ├── checkout.blade.php
│   └── ...
├── public/css
│   ├── app.css
│   └── styles.css
└── ...
```

---

## 📑 Dokumentasi Fitur

### 1. **Sidebar**
- File: `resources/views/partials/sidebar.blade.php`
- Fitur navigasi ke halaman penting seperti:
  - **Home**
  - **Profile**
  - **Cart**
  - **Checkout**
  - **Products**
  - **Settings**
  - **Logout**

### 2. **Halaman Profil**
- File: `resources/views/profile.blade.php`
- Menampilkan informasi pengguna seperti nama, email, dan avatar.
- Tombol edit profil.

### 3. **Halaman Keranjang**
- File: `resources/views/cart.blade.php`
- Menampilkan daftar produk yang telah ditambahkan ke keranjang.
- Menghitung total harga.

### 4. **Halaman Checkout**
- File: `resources/views/checkout.blade.php`
- Menampilkan ringkasan produk yang akan dibeli.
- Tombol untuk menyelesaikan pembayaran.

---

## 🎨 Desain
Desain menggunakan kombinasi:
- **Bootstrap 5**: Untuk responsivitas.
- **Font Awesome**: Untuk ikon.
- **CSS Kustom**: Gaya minimalis hitam putih.

---

## 🔧 Teknologi yang Digunakan
- **Laravel 12**: Framework utama untuk backend.
- **Bootstrap 5**: Framework CSS untuk frontend.
- **Font Awesome**: Untuk ikon.
- **Vite**: Untuk pengembangan frontend yang cepat.

---

## 💡 Cara Kontribusi
1. Fork repository ini.
2. Buat branch baru untuk fitur atau perbaikan:
   ```bash
   git checkout -b fitur-baru
   ```
3. Commit perubahan Anda:
   ```bash
   git commit -m "Tambah fitur baru"
   ```
4. Push branch Anda:
   ```bash
   git push origin fitur-baru
   ```
5. Buat Pull Request di GitHub.

---

## 🛠 TODO
- [ ] Tambahkan autentikasi pengguna.
- [ ] Tambahkan halaman detail produk.
- [ ] Tambahkan fitur pencarian produk.

---

## 📄 Lisensi
Proyek ini dilisensikan di bawah [MIT License](LICENSE).
