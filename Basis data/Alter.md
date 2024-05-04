
# Menambahkan Kolom
## Hasil Sebelum Menambah kolom

![i](Screenshot_2024-04-23-13-45-57-87_84d3000e3f4017145260f7618db1d683.jpg)
## Hasil Sesudah Menambah kolom
![i](Screenshot_2024-04-23-13-46-39-02_84d3000e3f4017145260f7618db1d683.jpg)
## Struktur Query
```mysql
ALTER TABLE nama_tabel ADD batas_peminjaman varchar(10) AFTER nama_kolom;

```
## Contoh Query
```mysql
ALTER TABLE mobil ADD batas_peminjaman varchar(10) AFTER peminjam;
```
### Analisis
1. `ALTER TABLE`: Ini menunjukkan bahwa kita sedang memodifikasi struktur dari tabel yang sudah ada.
2. `mobil`: Ini adalah nama tabel yang akan kita ubah.
3. `ADD batas_peminjam varchar(10)`: Ini berarti kita akan menambahkan kolom baru bernama `batas_peminjam` ke tabel `mobil`, dan kolom tersebut akan memiliki tipe karakter variabel dengan panjang maksimum 10 karakter.
4. `AFTER peminjam`: Ini menunjukkan bahwa kolom baru `batas_peminjam` akan ditambahkan setelah kolom yang sudah ada yaitu `peminjam` di dalam tabel.
### Kesimpulan
Pernyataan SQL tersebut menambahkan kolom baru dengan nama `batas_peminjam` ke tabel `mobil`dengan tipe data karakter variabel dan panjang maksimum 10 karakter, yang akan ditempatkan setelah kolom `peminjam` yang sudah ada di dalam tabel.
___
## Tambahan
### struktur query
```mysql
Update nama_tabel set batas_peminjaman = "2024-04-24" where kolom_tabel = 3;
```
### contoh query
```mysql
Update mobil set batas_peminjaman = "2024-04-24" where id_mobil = 3;
```
![I](Screenshot_2024-04-23-14-19-34-10_84d3000e3f4017145260f7618db1d683.jpg)

____
# Mengubah Nama kolom
## Struktur query
```mysql
ALTER TABLE nama_tabel RENAME COLUMN nama_kolom TO nama_kolom baru;
```
## Contoh Query
```mysql
ALTER TABLE mobil RENAME COLUMN batas_peminjaman to deadline;
```
### Hasil
![s](Screenshot_2024-04-23-14-29-05-62_84d3000e3f4017145260f7618db1d683.jpg)
## analisis
1. `ALTER TABLE`: Ini menunjukkan bahwa kita sedang memodifikasi struktur dari sebuah tabel.
2. `mobil`: Ini adalah nama tabel yang akan kita ubah.
3. `RENAME COLUMN batas_peminjam TO deadline`: Ini berarti kita akan mengubah nama kolom yang sudah ada dari `batas_peminjam` menjadi `deadline` di dalam tabel `mobil`.
## kesimpulan
Pernyataan SQL tersebut mengubah nama kolom yang sudah ada dari `batas_peminjam` menjadi `deadline` di dalam tabel `mobil`.
___
# Mengubah tipe data kolom
### struktur query
```mysql
ALTER TABLE nama_tabel MODIFY deadline DATE;
```
### contoh query
```mysql
ALTER TABLE data_mobil MODIFY deadline DATE;
```
### hasil before
![i](Screenshot_2024-04-23-14-29-05-62_84d3000e3f4017145260f7618db1d683.jpg)
### Hasil after
![](Screenshot_2024-05-03-20-33-37-26_84d3000e3f4017145260f7618db1d683.jpg)

## Analisis
. `ALTER TABLE`: Ini adalah perintah SQL yang digunakan untuk mengubah struktur tabel.
2. `mobil`: Ini adalah nama tabel yang ingin Anda ubah strukturnya.
3. `ALTER deadline SET DEFAULT READY`: Ini adalah bagian yang melakukan perubahan. Perintah ini mengatur nilai default untuk kolom "`deadline`" dalam tabel "`mobil`" menjadi `READY`. PIni berarti bahwa jika baris baru ditambahkan ke tabel tanpa nilai yang ditentukan untuk kolom "`deadline`", maka nilainya akan secara otomatis diatur menjadi '`READY`'.
## kesimpulan
ALTER TABLE mobil MODIFY deadline DATE;` mengubah tipe data kolom "`deadline`" dalam tabel "`mobil`" menjadi DATE`. Ini memastikan bahwa kolom tersebut hanya dapat menyimpan nilai-nilai tanggal yang valid. Pastikan untuk memeriksa kompatibilitas data yang ada dan lakukan pencadangan data sebelum menjalankan perintah tersebut.
___

# menambahkan constraint
## struktur Query
```mysql
ALTER TABLE nama_tabel ALTER deadline SET DEFAULT 'Ready'
```
## contoh query
```mysql
ALTER TABLE data_mobil
   ALTER deadline SET DEFAULT 'Ready'

```

## hasil
![](Screenshot_2024-05-04-11-52-13-53_84d3000e3f4017145260f7618db1d683.jpg)
## analisis
1. `ALTER TABLE`: Ini adalah perintah SQL yang digunakan untuk mengubah struktur tabel.
2. `mobil`: Ini adalah nama tabel yang ingin Anda ubah strukturnya.
3. `ALTER deadline SET DEFAULT READY`: Ini adalah bagian yang melakukan perubahan. Perintah ini mengatur nilai default untuk kolom "`deadline`" dalam tabel "`mobil`" menjadi `READY`. PIni berarti bahwa jika baris baru ditambahkan ke tabel tanpa nilai yang ditentukan untuk kolom "`deadline`", maka nilainya akan secara otomatis diatur menjadi '`READY`'.
## kesimpulan
Perintah `ALTER TABLE mobil ALTER deadline SET DEFAULT 'READY';` mengatur nilai default untuk kolom "`deadline`" dalam tabel "`mobil`" menjadi '`READY`'. Ini akan membuat '`READY`' menjadi nilai default untuk kolom "`deadline`" jika tidak ada nilai yang ditentukan saat penambahan baris baru. Pastikan nilai default tersebut sesuai dengan kebutuhan aplikasi Anda sebelum menjalankan perintah ini.
___
# menghapus constraint
## struktur query
```mysql
ALTER TABLE nama_tabel
ALTER nama_kolom DROP DEFAULT;
```
## contoh query
```mysql
ALTER TABLE mobil
ALTER deadline DROP DEFAULT;
```
## hasil
![](Screenshot_2024-05-04-12-08-19-21_84d3000e3f4017145260f7618db1d683.jpg)
## analisis
1. `ALTER TABLE`: Ini adalah perintah SQL yang digunakan untuk mengubah struktur tabel.
2. `mobil`: Ini adalah nama tabel yang ingin Anda ubah strukturnya.
3. `ALTER deadline DROP DEFAULT`: Ini adalah bagian yang melakukan perubahan. Perintah ini menghapus nilai default dari kolom "`deadline`" dalam tabel "`mobil`". Ini berarti bahwa setelah perintah ini dijalankan, jika baris baru ditambahkan ke tabel tanpa nilai yang ditentukan untuk kolom "`deadline`", kolom tersebut tidak akan memiliki nilai default.
## kesimpulan
Perintah `ALTER TABLE mobil ALTER deadline DROP DEFAULT;` menghapus nilai default dari kolom "`deadline`" dalam tabel "`mobil`". Setelah perintah ini dijalankan, kolom tersebut tidak akan memiliki nilai `default`. Pastikan hal ini sesuai dengan kebutuhan aplikasi Anda sebelum menjalankan perintah tersebut.
___
# menghapus kolom
## struktur query
```mysql
ALTER TABLE nama_tabel DROP COLUMN ;
```
## contoh query
```mysql
ALTER TABLE nama_tabel DROP COLUMN deadline;
```
## Hasil before 
![ll](Screenshot_2024-05-03-20-33-37-26_84d3000e3f4017145260f7618db1d683.jpg)
## hasil after
![](Screenshot_2024-05-04-12-32-03-70_84d3000e3f4017145260f7618db1d683.jpg)
## analisis
1. `ALTER TABLE`: Ini adalah perintah SQL yang digunakan untuk mengubah struktur tabel.
2. `mobil`: Ini adalah nama tabel yang ingin Anda ubah strukturnya.
3. `DROP COLUMN deadline`: Ini adalah bagian yang melakukan perubahan. Perintah ini menghapus kolom "`deadline`" dari tabel "`mobil`". Ini berarti bahwa setelah perintah ini dijalankan, kolom "`deadline`" beserta semua data yang ada di dalamnya akan dihapus dari tabel "`mobil`".
## kesimpulan
Perintah `ALTER TABLE mobil DROP COLUMN deadline;` menghapus kolom "`deadline`" dari tabel "`mobil`". Ini akan menghapus semua data yang terkait dengan kolom tersebut. Pastikan untuk membuat pencadangan data sebelum menjalankan perintah ini dan pastikan bahwa penghapusan kolom tersebut sesuai dengan kebutuhan apk anda.
___
# mengubah nama tabel
## struktur query
```mysql
ALTER TABLE nama_tabel RENAME TO nama_kolom;
```
## contoh query
```mysql
ALTER TABLE mobil RENAME TO data_mobil;
```
## hasil 
![](Screenshot_2024-04-23-15-32-15-56_84d3000e3f4017145260f7618db1d683.jpg)

## Analisis
1. `ALTER TABLE`: Ini adalah perintah SQL yang digunakan untuk mengubah struktur tabel.
2. `mobil`: Ini adalah nama tabel yang ingin Anda ubah.
3. `RENAME TO data_mobil`: Ini adalah bagian yang melakukan perubahan. Perintah ini mengubah nama tabel "`mobil`" menjadi "`data_mobil`"..
## kesimpulan
Perintah `ALTER TABLE mobil RENAME TO data_mobil;` mengubah nama tabel "`mobil`" menjadi "`data_mobil`". Pastikan untuk memperbarui kode atau query yang menggunakan nama tabel lama setelah menjalankan perintah ini.
### Referensi ALTER
https://www.techonthenet.com/mysql/tables/alter_table.php
