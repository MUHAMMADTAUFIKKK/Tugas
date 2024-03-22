## AND
### Struktur query
```mysql
select data 1,data 2 from [nama_tabel] where data 1="nilai 1" AND data 2="nilai 2";
```
### Contoh query
```Mysql
select warna,pemilik from [nama_tabel] where warna="hitam" AND pemilik="Taufik";
```
### Hasil
![[IMG_20240220_151254.jpg]]
### Analisis
### Kesimpulan

---
## OR
### Struktur query
```mysql
select data 1,data 2 from [nama_tabel] where data 1="nilai 1" OR data 2="nilai 2";
```
### Contoh query
```mysql
select warna,pemilik from [nama_tabel] where warna="hitam" OR pemilik="Ahsan";
```
### Hasil
![[IMG_20240220_151319.jpg]]
### Analisis
### Kesimpulan

---
## BETWEEN
### Struktur query
```mysql
select * from [nama_tabel] where data 1 BETWEEN nilai 1 AND nilai 2;
```
### Contoh query
```mysql
select * from mobil where harga_rental BETWEEN 50000 AND 100000;
```
### Hasil
![[IMG_20240220_151349.jpg]]
### Analisis
### Kesimpulan

---
## NOT BETWEEN
### Struktur query
```mysql
select * from [nama_tabel] where data 1 NOT BETWEEN nilai 1 AND nilai 2;
```
### Contoh query
```mysql
select * from mobil where harga_rental NOT BETWEEN 50000 AND 100000;
```
### Hasil
![[IMG_20240220_151522.jpg]]
### Analisis
### Kesimpulan

---
## <=
### Struktur query
```mysql
select * from [nama_tabel] where data 1 <= nilai 1;
```
### Contoh query
```mysql
select * from mobil where harga_rental <= 50000;
```
### Hasil
![[IMG_20240220_151548.jpg]]
### Analisis
### Kesimpulan

---
## >=
### Struktur query
```mysql
select * from [nama_tabel] where data 1 >= nilai 1;
```
### Contoh query
```mysql
select * from mobil where harga_rental >= 50000;
```
### Hasil
![[IMG_20240220_151601.jpg]]
### Analisis
### Kesimpulan

---
## <>
### Struktur query
```mysql
select * from [nama_tabel] where data 1 <> nilai 1;
```
### Contoh query
```mysql
select * from mobil where harga_rental <> 50000;
```
### Hasil
![[IMG_20240220_151624.jpg]]
### Analisis
### Kesimpulan

---
## !=
### Struktur query
```mysql
select * from [nama_tabel] where data 1 != nilai 1;
```
### Contoh query
```mysql
select * from mobil where harga_rental != 50000;
```
### Hasil
![[Screenshot_2024-02-20-15-21-42-68_84d3000e3f4017145260f7618db1d683.jpg]]
### Analisis
### Kesimpulan

---
## TANTANGAN LOGIN
### Struktur query
```mysql
select data from [nama_tabel] where data ="nilai";
```
### Contoh query
```mysql
select pemilik from mobil where pemilik ="Taufik";
```
### Hasil
![[Screenshot_2024-02-20-15-23-09-49_84d3000e3f4017145260f7618db1d683.jpg]]
### Analisis
### Kesimpulan

---
# Materi IN
## IN
### Struktur Query
```mysql
select * from nama_tabel where data IN('nilai 1','nilai 2');
```
### Contoh Query
```mysql
select * from mobil where warna IN('Hijau','Biru');
```
### Hasil
![[Screenshot_2024-02-27-14-20-32-37_84d3000e3f4017145260f7618db1d683.jpg]]
### Analisis

___
## IN/AND
### Struktur Query
```mysql
select * from nama_tabel where data IN('nilai 1','nilai 2')AND data 2=nilai 1;
```
### Contoh Query
```mysql
select * from mobil where warna IN('Hijau','Hitam')AND harga_rental=50000;
```
### Hasil
![[Screenshot_2024-02-27-14-33-04-23_84d3000e3f4017145260f7618db1d683.jpg]]
### Analisis
### Kesimpulan
---
## IN/OR
### Struktur query
```mysql
select * from nama_tabel where data IN('nilai 1','nilai 2')OR data 2=nilai 1;
```
### Contoh query
```mysql
select * from mobil where warna IN('Hijau','Biru')OR harga_rental=50000;
```
### Hasil
![[Screenshot_2024-02-27-14-36-53-79_84d3000e3f4017145260f7618db1d683.jpg]]
### Analisis
### Kesimpulan

___
## IN/AND/OPERATOR
### Struktur query
```mysql
select * from nama_tabel where data IN('nilai 1','nilai 2')AND data 2<nilai 1;
```
### Contoh query
```mysql
 select * from mobil where warna IN('Hijau','Biru')AND harga_rental<100000;
```
### Hasil
![[Screenshot_2024-02-27-14-40-40-63_84d3000e3f4017145260f7618db1d683.jpg]]
### Analisis
### Kesimpulan

___
# Materi LIKE
## LIKE(mencari awalan)
### Struktur query
```mysql
select * from nama_tabel where data LIKE 'n%';
```
### Contoh query
```mysql
select * from mobil where pemilik LIKE 'Ta%';
```
### Hasil
![[Screenshot_2024-02-27-14-57-24-79_84d3000e3f4017145260f7618db1d683.jpg]]
### Analisis
### Kesimpulan
___
## LIKE(mencari akhir)
### Struktur query
```mysql
select * from nama_tabel where data LIKE '%n';
```
### Contoh query
```mysql
select * from mobil where pemilik LIKE '%n';

```
### Hasil
![[Screenshot_2024-02-27-14-59-01-70_84d3000e3f4017145260f7618db1d683.jpg]]
### Analisis
### Kesimpulan
___
## LIKE(mencari awalan/akhir)
### Struktur query
```mysql
select * from nama_tabel where data LIKE 'a%n';
```
### Contoh query
```mysql
select * from mobil where pemilik LIKE 'a%n';
```
### Hasil
![[Screenshot_2024-02-27-15-01-46-75_84d3000e3f4017145260f7618db1d683.jpg]]
### Analisis
### Kesimpulan

____
## LIKE(mencari total karakter)
### Struktur query
```mysql
select * from nama_tabel where data LIKE 'n';
```
### Contoh query
```mysql
select * from mobil where pemilik LIKE 'Taufik';
```
### Hasil
![[Screenshot_2024-02-27-15-12-39-52_84d3000e3f4017145260f7618db1d683 1.jpg]]
### Analisis
### Kesimpulan

____
## LIKE(Kombinasi)
### Struktur query
```mysql
select * from nama_tabel where data LIKE '_%';
```
### Contoh query
```mysql
select * from mobil where pemilik LIKE 'ahsan%';
```
### Hasil
![[Screenshot_2024-02-27-15-21-32-12_84d3000e3f4017145260f7618db1d683.jpg]]
### Analisis
### Kesimpulan

___

## NOT LIKE
### Struktur query
```mysql
select * from nama_tabel where data NOT LIKE '_%';
```
### Contoh query
```mysql
select * from mobil where peminjam NOT LIKE 'A%';
```
### Hasil
![[Screenshot_2024-02-27-15-24-03-24_84d3000e3f4017145260f7618db1d683.jpg]]
### Analisis
### Kesimpulan