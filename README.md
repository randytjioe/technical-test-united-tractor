<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Laravel API for Product and Category Management

Proyek ini adalah API Laravel sederhana yang digunakan untuk mengelola produk dan kategori. API ini memungkinkan pengguna untuk mendaftar, masuk, dan mengelola kategori produk serta produk, termasuk menangani unggahan file untuk gambar produk. Otentikasi dilakukan menggunakan JWT (JSON Web Token).

## Fitur

- **Autentikasi Pengguna**:
  - Register: Mendaftar pengguna baru.
  - Login: Masuk menggunakan email dan password untuk mendapatkan token JWT.

- **Manajemen Kategori Produk**:
  - List semua kategori produk.
  - Melihat kategori produk berdasarkan ID.
  - Membuat kategori produk baru.
  - Memperbarui kategori produk berdasarkan ID.
  - Menghapus kategori produk berdasarkan ID.

- **Manajemen Produk**:
  - List semua produk.
  - Melihat produk berdasarkan ID.
  - Membuat produk baru (termasuk unggahan gambar).
  - Memperbarui produk berdasarkan ID (termasuk unggahan gambar).
  - Menghapus produk berdasarkan ID.

## Instalasi

1. Clone repositori ini use SSH:
    ```bash
    git clone git@github.com:randytjioe/technical-test-united-tractor.git
    ```

2. Pindah ke direktori proyek:
    ```bash
    cd technical-test-united-tractor
    ```

3. Install dependencies:
    ```bash
    composer install
    ```

4. Salin file `.env.example` ke `.env` dan konfigurasikan database:
    ```bash
    cp .env.example .env
    ```

5. Generate key aplikasi:
    ```bash
    php artisan key:generate
    ```

6. Jalankan migrasi database dan seeder:
    ```bash
    php artisan migrate --seed
    ```

7. Jalankan server pengembangan lokal:
    ```bash
    php artisan serve
    ```

## Penggunaan

### Autentikasi

- **Register**
  - Endpoint: `/register`
  - Method: `POST`
  - Body:
    ```json
    {
      "email": "tokoweb@gmail.com",
      "password": "tokoweb"
    }
    ```

- **Login**
  - Endpoint: `/login`
  - Method: `POST`
  - Body:
    ```json
    {
      "email": "tokoweb@gmail.com",
      "password": "tokoweb"
    }
    ```

  - Response: Akan mengembalikan token JWT yang digunakan untuk otentikasi pada endpoint lain.

### Manajemen Kategori Produk

- **List Semua Kategori**
  - Endpoint: `/category-products`
  - Method: `GET`

- **Melihat Kategori Berdasarkan ID**
  - Endpoint: `/category-products/{id}`
  - Method: `GET`

- **Membuat Kategori Baru**
  - Endpoint: `/category-products`
  - Method: `POST`
  - Body:
    ```json
    {
      "name": "Nama Kategori"
    }
    ```

- **Memperbarui Kategori Berdasarkan ID**
  - Endpoint: `/category-products/{id}`
  - Method: `PUT`
  - Body:
    ```json
    {
      "name": "Nama Kategori"
    }
    ```

- **Menghapus Kategori Berdasarkan ID**
  - Endpoint: `/category-products/{id}`
  - Method: `DELETE`

### Manajemen Produk

- **List Semua Produk**
  - Endpoint: `/products`
  - Method: `GET`

- **Melihat Produk Berdasarkan ID**
  - Endpoint: `/products/{id}`
  - Method: `GET`

- **Membuat Produk Baru**
  - Endpoint: `/products`
  - Method: `POST`
  - Body:
    ```json
    {
      "product_category_id": 1,
      "name": "Nama Produk",
      "price": 100000,
      "image": "Upload Gambar"
    }
    ```

- **Memperbarui Produk Berdasarkan ID**
  - Endpoint: `/products/{id}`
  - Method: `PUT`
  - Body:
    ```json
    {
      "product_category_id": 1,
      "name": "Nama Produk",
      "price": 100000,
      "image": "Upload Gambar"
    }
    ```

- **Menghapus Produk Berdasarkan ID**
  - Endpoint: `/products/{id}`
  - Method: `DELETE`


