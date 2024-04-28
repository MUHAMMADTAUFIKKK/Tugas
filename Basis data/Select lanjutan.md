## AND
### Struktur query
```mysql
select data 1,data 2 from [nama_tabel] where data 1="nilai 1" AND data 2="nilai 2";
```
### Contoh query
```Mysql
select warna,pemilik from mobil where warna="hitam" AND pemilik="Taufik";
```
### Hasil
![[IMG_20240220_151254.jpg]]
### Analisis
Kode tersebut adalah sebuah perintah SQL yang digunakan untuk mengambil data dari tabel 'mobil'. Perintah SELECT digunakan untuk memilih kolom 'warna' dan 'pemilik'. Klausa WHERE digunakan untuk menetapkan kondisi yang harus dipenuhi oleh baris-baris yang dipilih. Dalam hal ini, hanya baris-baris dengan warna "hitam" dan pemilik "Taufik" yang akan dipilih. Jadi, perintah tersebut akan mengembalikan data warna mobil yang "hitam" dan dimiliki oleh "Taufik".
### Kesimpulan
Kode tersebut digunakan untuk mengambil data dari tabel 'mobil' yang memenuhi dua kondisi: warna mobil harus "hitam" dan pemilik mobil harus "Taufik". Dengan demikian, kesimpulannya adalah bahwa perintah tersebut akan menghasilkan daftar mobil yang berwarna hitam dan dimiliki oleh seseorang dengan nama "Taufik"

---
## OR
### Struktur query
```mysql
select data 1,data 2 from [nama_tabel] where data 1="nilai 1" OR data 2="nilai 2";
```
### Contoh query
```mysql
select warna,pemilik from mobil where warna="hitam" OR pemilik="Ahsan";
```
### Hasil
![[IMG_20240220_151319.jpg]]
### Analisis
Kode tersebut adalah sebuah perintah SQL yang digunakan untuk mengambil data dari tabel 'mobil'. Perintah SELECT digunakan untuk memilih kolom 'warna' dan 'pemilik'. Klausa WHERE digunakan untuk menetapkan kondisi yang harus dipenuhi oleh baris-baris yang dipilih. Dalam hal ini, kondisi adalah bahwa warna mobil harus "hitam" ATAU pemilik mobil harus "Ahsan". Jadi, perintah tersebut akan mengembalikan data mobil yang berwarna "hitam" atau dimiliki oleh "Ahsan".
### Kesimpulan
Kode tersebut digunakan untuk mengambil data dari tabel 'mobil' yang memenuhi salah satu dari dua kondisi: warna mobil harus "hitam" atau pemilik mobil harus "Ahsan". Jadi, kesimpulannya adalah bahwa perintah tersebut akan menghasilkan daftar mobil yang berwarna hitam atau dimiliki oleh seseorang dengan nama "Ahsan".

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
Kode tersebut adalah sebuah perintah SQL yang digunakan untuk mengambil data dari tabel 'mobil'. Perintah SELECT * digunakan untuk memilih semua kolom dari tabel 'mobil'. Klausa WHERE digunakan untuk menetapkan kondisi yang harus dipenuhi oleh baris-baris yang dipilih. Dalam hal ini, kondisi adalah bahwa nilai dalam kolom 'harga_rental' harus berada di antara 50000 dan 100000. Jadi, perintah tersebut akan mengembalikan data mobil yang memiliki harga sewa antara 50000 dan 100000.
### Kesimpulan
Kode tersebut digunakan untuk mengambil semua data dari tabel 'mobil' yang memiliki harga sewa (harga_rental) di antara 50000 dan 100000. Jadi, kesimpulannya adalah perintah tersebut akan menghasilkan daftar mobil yang tersedia untuk disewa dengan harga sewa dalam kisaran tersebut.

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
Kode tersebut adalah sebuah perintah SQL yang digunakan untuk mengambil data dari tabel 'mobil'. Perintah SELECT * digunakan untuk memilih semua kolom dari tabel 'mobil'. Klausa WHERE digunakan untuk menetapkan kondisi yang harus dipenuhi oleh baris-baris yang dipilih. Dalam hal ini, kondisi adalah bahwa nilai dalam kolom 'harga_rental' tidak boleh berada di antara 50000 dan 100000.
### Kesimpulan
Kode tersebut digunakan untuk mengambil semua data dari tabel 'mobil' dimana harga sewa (harga_rental) tidak berada di antara 50000 dan 100000. Jadi, kesimpulannya adalah perintah tersebut akan menghasilkan daftar mobil yang tidak termasuk dalam rentang harga sewa tersebut

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
Kode tersebut adalah sebuah perintah SQL yang digunakan untuk mengambil data dari tabel 'mobil'. Perintah SELECT * digunakan untuk memilih semua kolom dari tabel 'mobil'. Klausa WHERE digunakan untuk menetapkan kondisi yang harus dipenuhi oleh baris-baris yang dipilih. Dalam hal ini, kondisi adalah bahwa nilai dalam kolom 'harga_rental' harus kurang dari atau sama dengan 50000.
### Kesimpulan
Kode tersebut digunakan untuk mengambil semua data dari tabel 'mobil' dimana harga sewa (harga_rental) kurang dari atau sama dengan 50000. Jadi, kesimpulannya adalah perintah tersebut akan menghasilkan daftar mobil yang tersedia untuk disewa dengan harga sewa kurang dari atau sama dengan 50000.

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
Kode tersebut adalah sebuah perintah SQL yang digunakan untuk mengambil data dari tabel "mobil" di mana nilai kolom "harga_rental" lebih besar dari atau sama dengan 50000. Dengan kata lain, perintah tersebut akan mengembalikan semua baris dari tabel "mobil" di mana harga rental mobilnya setidaknya 50000
### Kesimpulan
Kesimpulan dari perintah SQL adalah bahwa kita ingin menampilkan semua data mobil yang memiliki harga rental setidaknya 50000.

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
Kode tersebut adalah perintah SQL yang digunakan untuk mengambil data dari tabel "mobil" di mana nilai kolom "harga_rental" tidak sama dengan 50000. Dengan kata lain, perintah tersebut akan mengembalikan semua baris dari tabel "mobil" di mana harga rental mobilnya tidak sama dengan 50000.
### Kesimpulan
Kesimpulan kode perintah SQL adalah bahwa kita ingin menampilkan semua data mobil yang memiliki harga rental yang tidak sama dengan 50000.

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
Kode tersebut adalah perintah SQL yang serupa dengan yang sebelumnya. Ini juga digunakan untuk mengambil data dari tabel "mobil" di mana nilai kolom "harga_rental" tidak sama dengan 50000. Dengan kata lain, perintah tersebut akan mengembalikan semua baris dari tabel "mobil" di mana harga rental mobilnya tidak sama dengan 50000. Pemakaian operator != memiliki makna yang sama dengan <> dalam SQL, yaitu "tidak sama dengan".
### Kesimpulan
Kesimpulan dari kode tersebut adalah bahwa kita ingin menampilkan semua data mobil yang memiliki harga rental yang tidak sama dengan 50000.

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
Kode tersebut adalah perintah SQL yang digunakan untuk mengambil data dari tabel "mobil" di mana nilai kolom "pemilik" adalah "Taufik". Dengan kata lain, perintah tersebut akan mengembalikan semua baris dari tabel "mobil" di mana nama pemilik mobilnya adalah "Taufik"
### Kesimpulan
Kesimpulan dari kode tersebut adalah bahwa kita ingin menampilkan semua data mobil yang dimiliki oleh seseorang dengan nama "Taufik".

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
SELECT * FROM mobil: Ini adalah perintah untuk memilih semua kolom dari tabel "mobil". Tanda asterisk (*) digunakan untuk menunjukkan bahwa kita ingin mengambil semua kolom.

WHERE warna IN('Hijau','Biru'): Ini adalah klausa WHERE yang digunakan untuk memfilter baris-baris dari tabel. Di sini, hanya baris-baris yang memiliki nilai kolom "warna" sama dengan 'Hijau' atau 'Biru' yang akan dipilih.
### Kesimpulan
kode SQL ini akan mengembalikan semua baris dari tabel "mobil" di mana warnanya adalah 'Hijau' atau 'Biru'. Ini bermanfaat jika Anda ingin melihat daftar mobil yang memiliki warna tertentu atau melakukan analisis berdasarkan warna.
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
SELECT * FROM mobil: Seperti sebelumnya, ini adalah perintah untuk memilih semua kolom dari tabel "mobil".

WHERE warna IN('Hijau','Hitam'): Ini adalah klausa WHERE yang digunakan untuk memfilter baris-baris dari tabel. Di sini, hanya baris-baris yang memiliki nilai kolom "warna" sama dengan 'Hijau' atau 'Hitam' yang akan dipilih.

AND harga_rental=50000: Ini adalah tambahan pada klausa WHERE yang sebelumnya, yang berarti hanya baris-baris dengan harga_rental sebesar 50000 yang akan dipilih
### Kesimpulan
kode SQL ini akan mengembalikan semua baris dari tabel "mobil" di mana warnanya adalah 'Hijau' atau 'Hitam', dan harga rentalnya adalah 50000. Ini berguna jika Anda ingin melihat daftar mobil dengan kriteria spesifik tersebut atau melakukan analisis berdasarkan warna dan harga rental.

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
WHERE warna IN ('Hijau', 'Biru') OR harga_rental = 50000: Ini adalah klausa WHERE yang digunakan untuk memfilter baris-baris dari tabel. Di sini, kita memilih baris-baris yang memenuhi salah satu dari dua kondisi:

warna IN ('Hijau', 'Biru'): Baris-baris dengan warna 'Hijau' atau 'Biru' akan dipilih.
harga_rental = 50000: Baris-baris dengan harga rental sebesar 50000 akan dipilih.
### Kesimpulan
kode SQL ini adalah untuk mengambil semua baris dari tabel "mobil" di mana warnanya adalah 'Hijau' atau 'Biru', atau harga rentalnya adalah 50000. Ini berguna jika Anda ingin melihat daftar mobil dengan kriteria spesifik tersebut atau melakukan analisis berdasarkan warna dan harga rental.
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
SELECT * FROM mobil: Ini memilih semua kolom dari tabel "mobil".

WHERE warna IN ('Hijau', 'Biru') AND harga_rental < 100000: Ini adalah klausa WHERE yang digunakan untuk memfilter baris-baris dari tabel. Di sini, kita memilih baris-baris yang memenuhi kedua kondisi:

warna IN ('Hijau', 'Biru'): Baris-baris dengan warna 'Hijau' atau 'Biru' akan dipilih.
harga_rental < 100000: Baris-baris dengan harga rental kurang dari 100000 akan dipilih.
### Kesimpulan
kode SQL ini adalah untuk mengambil semua baris dari tabel "mobil" di mana warnanya adalah 'Hijau' atau 'Biru', dan harga rentalnya kurang dari 100000. Ini berguna jika Anda ingin melihat daftar mobil dengan kriteria spesifik tersebut atau melakukan analisis berdasarkan warna dan harga rental.
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
SELECT * FROM mobil: Ini memilih semua kolom dari tabel "mobil".

WHERE pemilik LIKE 'Ta%': Ini adalah klausa WHERE yang digunakan untuk memfilter baris-baris dari tabel. Di sini, kita memilih baris-baris di mana nilai kolom "pemilik" dimulai dengan huruf 'Ta'. Operator LIKE digunakan untuk mencocokkan pola teks, dan '%' adalah wildcard yang cocok dengan nol atau lebih karakter apa pun.
### Kesimpulan
kode SQL ini adalah untuk mengambil semua baris dari tabel "mobil" di mana nama pemiliknya dimulai dengan 'Ta'. Ini berguna jika Anda ingin mencari mobil yang dimiliki oleh seseorang dengan awalan nama tersebut.
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
SELECT * FROM mobil: Ini memilih semua kolom dari tabel "mobil".

WHERE pemilik LIKE '%n': Ini adalah klausa WHERE yang digunakan untuk memfilter baris-baris dari tabel. Di sini, kita memilih baris-baris di mana nilai kolom "pemilik" berakhir dengan huruf 'n'. Operator LIKE digunakan untuk mencocokkan pola teks, dan '%' adalah wildcard yang cocok dengan nol atau lebih karakter apa pun sebelum karakter 'n'.
### Kesimpulan
kode SQL ini adalah untuk mengambil semua baris dari tabel "mobil" di mana nama pemiliknya berakhir dengan huruf 'n'. Ini berguna jika Anda ingin mencari mobil yang dimiliki oleh seseorang dengan akhiran nama tersebut.
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
SELECT * FROM mobil: Ini memilih semua kolom dari tabel "mobil".

WHERE pemilik LIKE 'a%n': Ini adalah klausa WHERE yang digunakan untuk memfilter baris-baris dari tabel. Di sini, kita memilih baris-baris di mana nilai kolom "pemilik" dimulai dengan huruf 'a' dan diikuti oleh nol atau lebih karakter apa pun sebelum karakter 'n'. Operator LIKE digunakan untuk mencocokkan pola teks, dan '%' adalah wildcard yang cocok dengan nol atau lebih karakter apa pun.
### Kesimpulan
kode SQL ini adalah untuk mengambil semua baris dari tabel "mobil" di mana nama pemiliknya dimulai dengan huruf 'a' dan diikuti oleh karakter apa pun sebelum karakter 'n'. Ini berguna jika Anda ingin mencari mobil yang dimiliki oleh seseorang dengan awalan 'a' dan diikuti oleh karakter apa pun sebelum 'n'.
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
SELECT * FROM mobil: Ini memilih semua kolom dari tabel "mobil".

WHERE pemilik LIKE 'Taufik': Ini adalah klausa WHERE yang digunakan untuk memfilter baris-baris dari tabel. Di sini, kita mencari baris-baris di mana nilai kolom "pemilik" cocok secara tepat dengan string 'Taufik'. Operator LIKE digunakan untuk mencocokkan pola teks, tetapi dalam kasus ini, karena tidak ada wildcard yang digunakan seperti '%', itu hanya mencari string yang persis sama dengan 'Taufik'.
### Kesimpulan
kode SQL ini adalah untuk mengambil semua baris dari tabel "mobil" di mana nama pemiliknya adalah 'Taufik'. Ini akan mengembalikan baris yang memiliki pemilik dengan nama 'Taufik' secara tepat, tanpa memperhitungkan karakter lain sebelum atau sesudahnya.
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
SELECT * FROM mobil: Ini memilih semua kolom dari tabel "mobil".

WHERE pemilik LIKE 'ahsan%': Ini adalah klausa WHERE yang digunakan untuk memfilter baris-baris dari tabel. Di sini, kita memilih baris-baris di mana nilai kolom "pemilik" dimulai dengan string 'ahsan' dan diikuti oleh nol atau lebih karakter apa pun. Operator LIKE digunakan untuk mencocokkan pola teks, dan '%' adalah wildcard yang cocok dengan nol atau lebih karakter apa pun setelah 'ahsan'.
### Kesimpulan
kode SQL ini adalah untuk mengambil semua baris dari tabel "mobil" di mana nama pemiliknya dimulai dengan 'ahsan'. Ini berguna jika Anda ingin mencari mobil yang dimiliki oleh seseorang dengan awalan 'ahsan'.
___
# Materi Not Like
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
SELECT * FROM mobil: Ini memilih semua kolom dari tabel "mobil".

WHERE peminjam NOT LIKE 'A%': Ini adalah klausa WHERE yang digunakan untuk memfilter baris-baris dari tabel. Di sini, kita memilih baris-baris di mana nilai kolom "peminjam" tidak dimulai dengan huruf 'A'. Operator LIKE digunakan untuk mencocokkan pola teks, dan '%' adalah wildcard yang cocok dengan nol atau lebih karakter apa pun setelah 'A'.
### Kesimpulan
kode SQL ini adalah untuk mengambil semua baris dari tabel "mobil" di mana nilai kolom "peminjam" tidak dimulai dengan huruf 'A'. Ini berguna jika Anda ingin mencari mobil yang belum dipinjam oleh seseorang dengan awalan 'A'.
___
# Materi NULL & NOTNULL
## NULL
### Struktur query
```mysql
select * from mobil where peminjam IS NULL;
```
### Hasil
![Gambar](Asset/Screenshot_2024-03-26-12-00-54-53_84d3000e3f4017145260f7618db1d683.jpg)
### Analisis
SELECT * FROM mobil: Ini memilih semua kolom dari tabel "mobil".

WHERE peminjam IS NULL: Ini adalah klausa WHERE yang digunakan untuk memfilter baris-baris dari tabel. Di sini, kita memilih baris-baris di mana nilai kolom "peminjam" kosong atau NULL.
### Kesimpulan
kode SQL ini adalah untuk mengambil semua baris dari tabel "mobil" di mana nilai kolom "peminjam" tidak diisi atau kosong. Ini berguna jika Anda ingin mencari mobil yang belum dipinjam oleh siapapun.
___
## NOT NULL
### Struktur query
```Mysql
select * from nama_tabel where kolom_tabel IS NOT NULL;
```
### contoh query
```mysql
select * from mobil where peminjam IS NOT NULL;
```

### Hasil
![gambar](Asset/Screenshot_2024-03-26-12-05-10-42_84d3000e3f4017145260f7618db1d683.jpg)
### Analisis
SELECT * FROM mobil WHERE peminjam IS NOT NULL; digunakan untuk mengambil semua baris dari tabel mobil di mana kolom peminjam tidak kosong atau memiliki nilai. Ini berarti query tersebut akan mengembalikan semua data tentang mobil yang sedang dipinjam.
### Kesimpulan
kode SQL ini adalah bahwa kita ingin melihat data tentang mobil yang sedang dipinjamkan atau sedang digunakan, dan mungkin akan menggunakan informasi tersebut untuk pengelolaan inventaris atau analisis penggunaan mobil dalam suatu periode waktu tertentu.
___
## ORDER BY
### Struktur query
```mysql
select * from nama_tabel ORDER BY kolom_tabel ASC;
```
### Contoh Query
```mysql
select * from mobil ORDER BY pemilik ASC
```
### Hasil
![gambar](Asset/Screenshot_2024-03-26-12-06-56-58_84d3000e3f4017145260f7618db1d683.jpg)
### Analisis
Perintah SQL SELECT * FROM mobil ORDER BY pemilik ASC; digunakan untuk mengambil semua baris dari tabel mobil dan mengurutkannya berdasarkan kolom pemilik secara ascending (dari yang terkecil hingga yang terbesar).
### Kesimpulan
kode SQL ini adalah bahwa kita ingin melihat data tentang mobil berdasarkan pemiliknya dan mengurutkannya secara alfabetis berdasarkan nama pemilik. Ini mungkin digunakan untuk melihat distribusi mobil antara berbagai pemilik atau untuk melakukan analisis berdasarkan kepemilikan mobil.
___
## DISTINCT
### Struktur query
```mysql
select distinct (pemilik) from mobil;
```
### contoh query
```mysql
Select DISTINCT (kolom_tabel) from nama_tabel;
```

### Hasil
![gambar](Asset/Screenshot_2024-03-26-12-09-17-56_84d3000e3f4017145260f7618db1d683.jpg)
### Analisis
### Kesimpulan
___
# Concat & Concat_WS,AS
## Concat

### Struktur query
### Hasil
### Analisis
### Kesimpulan
___
## View
### Struktur query
### Hasil
### Analisis
### Kesimpulan

## Tantangan

___

## Agregasi
### Sum
### Struktur query
### Hasil
### Analisis
### Kesimpulan

