# Tugas 5 - Aplikasi To-Do List Berbasis PHP

## Deskripsi
Angela natasya (235314031)

---

```

## Screenshots

Berikut adalah beberapa Screenshot dari aplikasi:

![Screenshot 1](platform/login.png)
![Screenshot 2](platform/pass.png)
![Screenshot 3](platform/1.png)
![Screenshot 4](platform/2.png)
![Screenshot 5](platform/selesai.png)
![Screenshot 6](platform/database.png)
![Screenshot 7](platform/tabel.png)

## Skema Database

File `platform.sql` di folder `Db_schema/` berisi dump database `Platform`, terdiri dari dua tabel:

### Tabel `users`
- `id` INT PRIMARY KEY AUTO_INCREMENT
- `username` VARCHAR(50)
- `password` VARCHAR(255) (dalam format hash MD5)

### Tabel `todos`
- `id` INT PRIMARY KEY AUTO_INCREMENT
- `task` VARCHAR(255)
- `status` enum(30) DEFAULT 'pending'
- `username` VARCHAR


## Cara Menjalankan

1. Import `platform.sql` ke MySQL melalui phpMyAdmin.
2. Tempatkan semua file PHP ke dalam folder `htdocs/` jika menggunakan XAMPP.
3. Jalankan Apache dan MySQL.
4. Akses aplikasi melalui `http://localhost/php_files/login.php`.
5. Login dengan akun yang tersedia atau tambahkan sendiri melalui database.

---

## Catatan

- Password disimpan dalam format MD5.
- Session digunakan untuk menjaga autentikasi user.
