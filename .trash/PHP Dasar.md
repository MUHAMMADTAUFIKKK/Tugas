

# Apa itu web dinamis dan PHP?
>[!info] Web dinamis merujuk pada jenis situs web yang menggunakan teknologi untuk menghasilkan konten yang berubah secara dinamis berdasarkan interaksi pengguna, data dari database, atau faktor-faktor lainnya. 

>[!info] PHP (Hypertext Preprocessor) adalah bahasa pemrograman yang sering digunakan untuk membuat situs web dinamis. Dengan PHP, pengembang dapat membuat halaman web yang dapat berinteraksi dengan database, menghasilkan konten berdasarkan input pengguna, dan melakukan berbagai tugas pemrosesan data lainnya secara dinamis.

# PHP Dasar
## 1. Echo & comentar
Echo adalah sebuah perintah dalam bahasa pemrograman PHP yang digunakan untuk menampilkan teks atau nilai variabel ke dalam halaman web. Ini memungkinkan pengembang untuk menghasilkan output langsung di dalam kode PHP.
```php
// Menampilkan teks menggunakan echo
echo "Halo, dunia!";

// Menampilkan nilai variabel menggunakan echo
$nama = "John";
echo "Halo, " . $nama . "!"; // Output: Halo, John!
?>
```

Komentar dalam PHP adalah bagian dari kode yang tidak dieksekusi oleh server web. Mereka digunakan untuk memberikan dokumentasi atau penjelasan tentang kode kepada pengembang atau orang lain yang membaca kode tersebut. Komentar tidak memengaruhi perilaku program dan biasanya dimulai dengan tanda // untuk komentar satu baris atau /* untuk komentar blok.
```php
<?php
// Ini adalah contoh komentar satu baris
/*
Ini adalah contoh
komentar blok
*/
```
## 2. Variabel dan konstanta
`Variabel` digunakan untuk menyimpan data. Anda bisa mendefinisikan variabel menggunakan tanda dollar ==($)== diikuti dengan nama variabelnya, misalnya $nama_variabel.
Contohnya:
```php
//Variabel
$meja = 30;
$tk_kelas = "XI";
$ketua_kelas = "July";
$wali_kelas = "Saleh";
$ketua_gank = "Rahmat";
```

`Konstanta` didefinisikan dengan menggunakan fungsi define() dan tidak dapat diubah nilainya setelah didefinisikan.
Contohnya:
```Php
//Konstanta
const KEPSEK = "Herwelis";
define('Kelas', 'RPL 1');
```

___
# Php Dasar
# 3. Operator
## Aritmatika
### Penjelasan
### Struktur
### Program
### Hasil
### Analisis
### Kesimpulan Program


## Perbandingan
### Penjelasan
### Struktur
### Program
### Hasil
### Analisis
### Kesimpulan Program


## Logika
### Penjelasan
### Struktur
### Program
### Hasil
### Analisis
### Kesimpulan Program
___
# 4. Conditional Statement
## IF
### Penjelasan
 If digunakan untuk mengeksekusi blok kode jika kondisi tertentu benar.
### Struktur
```php
if (kondisi) {
    // kode yang akan dieksekusi jika kondisi benar
```
### Program
```php
$umur = 18;
if ($umur >= 18) {
    echo "Anda sudah dewasa";
}
```
### Hasil

### Analisis
Jika umur lebih besar atau sama dengan 18, pesan "Anda sudah dewasa" akan dicetak.
Kesimpulan: If digunakan untuk mengambil keputusan sederhana berdasarkan kondisi tertentu.
### Kesimpulan Program
Digunakan untuk mengambil keputusan sederhana berdasarkan kondisi tertentu. Cocok digunakan ketika hanya ada satu kondisi yang perlu dievaluasi.

## IF-ELSE
### Penjelasan
 If else digunakan untuk mengeksekusi blok kode jika kondisi benar, dan blok kode lain jika kondisi salah.
### Struktur
```php
if (kondisi) {
    // kode yang akan dieksekusi jika kondisi benar
} else {
    // kode yang akan dieksekusi jika kondisi salah
}
```
### Program
```php
$umur = 15;
if ($umur >= 18) {
    echo "Anda sudah dewasa";
} else {
    echo "Anda masih di bawah umur";
}
```
### Hasil
### Analisis
Jika umur lebih besar atau sama dengan 18, pesan "Anda sudah dewasa" akan dicetak. Jika tidak, pesan "Anda masih di bawah umur" akan dicetak.
Kesimpulan: If else digunakan untuk mengambil keputusan alternatif berdasarkan kondisi.
### Kesimpulan Program
Digunakan untuk mengambil keputusan alternatif berdasarkan kondisi tertentu. Memberikan kemungkinan eksekusi kode lain jika kondisi pertama tidak terpenuhi.

## IF-ELSE IF-ELSE
### Penjelasan

```If else if else``` digunakan untuk mengeksekusi salah satu blok kode dari beberapa blok kode alternatif, tergantung pada kondisi yang memenuhi syarat pertama
### Struktur
```php
if (kondisi1) {
    // kode yang akan dieksekusi jika kondisi1 benar
} elseif (kondisi2) {
    // kode yang akan dieksekusi jika kondisi1 salah dan kondisi2 benar
} else {
    // kode yang akan dieksekusi jika semua kondisi salah
}
```
### Program
```php
$nilai = 75;
if ($nilai >= 80) {
    echo "Nilai Anda A";
} elseif ($nilai >= 70) {
    echo "Nilai Anda B";
} else {
    echo "Nilai Anda C";
}
```
### Hasil
### Analisis
Jika nilai lebih besar atau sama dengan 80, pesan "Nilai Anda A" akan dicetak. Jika tidak, jika nilai lebih besar atau sama dengan 70, pesan "Nilai Anda B" akan dicetak. Jika tidak memenuhi kedua kondisi tersebut, pesan "Nilai Anda C" akan dicetak.
Kesimpulan: If else if else digunakan untuk mengambil keputusan alternatif berdasarkan beberapa kondisi.
### Kesimpulan Program
Digunakan untuk mengambil keputusan alternatif berdasarkan beberapa kondisi yang berbeda. Cocok digunakan ketika terdapat beberapa kemungkinan hasil yang bisa terjadi.

## SWITCH CASE
### Penjelasan
Switch case digunakan untuk mengevaluasi ekspresi yang mungkin memiliki beberapa nilai dan menjalankan blok kode yang sesuai dengan nilai yang cocok.
### Struktur
```php
switch (ekspresi) {
    case nilai1:
        // kode yang akan dieksekusi jika ekspresi == nilai1
        break;
    case nilai2:
        // kode yang akan dieksekusi jika ekspresi == nilai2
        break;
    ...
    default:
        // kode yang akan dieksekusi jika ekspresi tidak cocok dengan nilai apapun
}
```
### Program
```php
$hari = "Senin";
switch ($hari) {
    case "Senin":
        echo "Hari ini adalah Senin";
        break;
    case "Selasa":
        echo "Hari ini adalah Selasa";
        break;
    default:
        echo "Hari ini adalah hari lainnya";
}
```
### Hasil
### Analisis
Switch case memberikan kejelasan dalam menyatakan serangkaian pilihan.
Kesimpulan: Switch case berguna dalam membuat kode yang mudah dibaca dan dapat digunakan dalam PHP untuk mengevaluasi ekspresi dengan beberapa kemungkinan nilai.
### Kesimpulan Program
Memberikan kejelasan dalam menyatakan serangkaian pilihan dan memungkinkan eksekusi kode yang berbeda berdasarkan nilai dari sebuah ekspresi. Namun, perlu diingat bahwa struktur ini tidak tersedia secara bawaan dalam PHP, namun dapat disimulasikan dengan menggunakan if else.

___
# 5. Array
## Array 1 dimensi
### Penjelasan
Array 1 dimensi adalah kumpulan nilai yang disimpan dalam satu variabel. Setiap nilai di dalam array diakses menggunakan indeks numerik yang dimulai dari 0.
### Struktur
```php
$array = [nilai1, nilai2, nilai3, ];

```
### Program
```php
$buah = ["apel", "pisang", "jeruk"];
echo $buah[0]; // Output: apel

```
### Hasil
### Analisis
Array 1 dimensi cocok digunakan ketika data yang akan disimpan adalah kumpulan nilai tunggal dan mudah diindeks.
### Kesimpulan Program
Array 1 dimensi cocok digunakan untuk menyimpan kumpulan nilai tunggal yang diakses menggunakan indeks numerik.

## Array Asosiatif
### Penjelasan
Array asosiatif adalah kumpulan pasangan kunci-nilai, di mana setiap nilai diakses menggunakan kunci yang ditetapkan pengguna.
### Struktur
```php
$array = ["kunci1" => nilai1, "kunci2" => nilai2, "kunci3" => nilai3, ...];

```
### Program
```php
$umur = ["Taufik" => 25, "Jordan" => 30, "Fatur" => 35];
echo $umur["Jordan"]; // Output: 30

```
### Hasil
### Analisis
Array asosiatif memungkinkan penggunaan kunci yang diberikan pengguna untuk mengakses nilai, cocok untuk data yang memiliki hubungan pasangan kunci-nilai yang unik.
### Kesimpulan Program
Array asosiatif cocok digunakan ketika data yang akan disimpan memiliki hubungan pasangan kunci-nilai dan kunci unik.

## Array Multidimensi 
### Penjelasan
Array multidimensi adalah array yang memiliki array di dalamnya. Ini digunakan untuk menyimpan data dalam bentuk tabel atau matriks.
### Struktur
```php
$array = [
    [nilai1, nilai2, nilai3, ...],
    [nilai4, nilai5, nilai6, ...],
    ...
];

```
### Program
```php
$matriks = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];
echo $matriks[1][2]; // Output: 6

```
### Hasil
### Analisis
Array multidimensi cocok digunakan untuk menyimpan data dalam bentuk tabel atau matriks, di mana setiap elemen memiliki indeks dua dimensi.
### Kesimpulan Program
Array multidimensi digunakan untuk menyimpan data dalam bentuk tabel atau matriks dengan menggunakan indeks dua dimensi.

___
# 6. Var_dump

___
# 7. Looping (Perulangan)
## For
### Penjelasan
For loop digunakan untuk mengeksekusi blok kode sejumlah iterasi tertentu.
### Struktur
```php
for ($i = nilai_awal; $i < batas; $i++) {
    // kode yang akan diulang
}

```
### Program
```php
for ($i = 1; $i <= 5; $i++) {
    echo $i . " ";
}
// Outputnya: 1 2 3 4 5

```
### Hasil
### Analisis
For loop cocok digunakan ketika jumlah iterasi sudah diketahui sebelumnya atau ketika perlu melakukan iterasi dalam rentang nilai tertentu.
### Kesimpulan Program
For loop digunakan untuk melakukan iterasi sejumlah iterasi tertentu berdasarkan nilai awal, batas, dan increment yang ditentukan sebelumnya.

## While 
### Penjelasan
While loop digunakan untuk mengeksekusi blok kode selama kondisi tertentu benar.
### Struktur
```php
while (kondisi) {
    // kode yang akan diulang
}

```
### Program
```php
$n = 1;
while ($n <= 5) {
    echo $n . " ";
    $n++;
}
// Output: 1 2 3 4 5

```
### Hasil
### Analisis
While loop cocok digunakan ketika jumlah iterasi tidak diketahui sebelumnya dan perlu dilakukan iterasi selama kondisi tertentu benar.
### Kesimpulan Program
While loop digunakan untuk melakukan iterasi selama kondisi tertentu benar.

## Do-while
### Penjelasan
Do-while loop mirip dengan while loop, namun blok kode dieksekusi setidaknya satu kali, bahkan jika kondisi awalnya salah.
### Struktur
```php
do {
    // kode yang akan diulang
} while (kondisi);

```
### Program
```php
$n = 1;
do {
    echo $n . " ";
    $n++;
} while ($n <= 5);
// Output: 1 2 3 4 5

```
### Hasil
### Analisis
Do-while loop cocok digunakan ketika ingin memastikan blok kode dieksekusi setidaknya sekali sebelum mengevaluasi kondisi.
### Kesimpulan Program
Do-while loop digunakan untuk melakukan iterasi setidaknya satu kali, bahkan jika kondisi awalnya salah, dan kemudian iterasi dilakukan selama kondisi tetap benar.

## Foreach
### Penjelasan
Foreach loop digunakan untuk mengulangi setiap elemen dalam array atau objek.
### Struktur
```php
foreach ($array as $nilai) {
    // kode yang akan diulang
}

```
### Program
```php
$buah = ["apel", "pisang", "jeruk"];
foreach ($buah as $item) {
    echo $item . " ";
}
// Output: apel pisang jeruk

```
### Hasil
### Analisis
Foreach loop sangat berguna ketika ingin melakukan iterasi melalui setiap elemen dalam array atau objek tanpa harus memikirkan indeks atau kondisi.
### Kesimpulan Program
Foreach loop digunakan untuk mengulangi setiap elemen dalam array atau objek tanpa harus memikirkan indeks atau kondisi.

---
# 8. Function
___
# 9. PHPForm
## GET Method
### Penjelasan
### Struktur
### Program
### Hasil
### Analisis
### Kesimpulan Program


## POST Method
### Penjelasan
### Struktur
### Program
### Hasil
### Analisis
### Kesimpulan Program
