# Menambahkan Kolom
## Hasil Sebelum Menambah kolom

![[Screenshot_2024-04-23-13-45-57-87_84d3000e3f4017145260f7618db1d683.jpg]]
## Hasil Sesudah Menambah kolom
![[Screenshot_2024-04-23-13-46-39-02_84d3000e3f4017145260f7618db1d683.jpg]]
## Struktur Query
```mysql
ALTER TABLE nama_tabel ADD batas_peminjaman varchar(10) AFTER nama_kolom;

```
## Contoh Query
```mysql
ALTER TABLE mobil ADD batas_peminjaman varchar(10) AFTER peminjam;
```
### Analisis
### Kesimpulan
### Tambahan
![[Screenshot_2024-04-23-14-19-34-10_84d3000e3f4017145260f7618db1d683.jpg]]
# Mengubah Nama kolom
## Struktur query
```mysql
ALTER TABLE nama_tabel RENAME COLUMN nama_kolom TO nama_kolom baru;
```
## Contoh Query
```mysql
ALTER TABLE mobil RENAME COLUMN batas_peminjaman to deadline;
```
### Hasil![[Screenshot_2024-04-23-14-29-05-62_84d3000e3f4017145260f7618db1d683.jpg]]