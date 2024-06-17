# Sejarah
Sejarah terciptanya Web development pada tahun 1990 seorang Insinyur bernama ==Tim Bernes Lee ==yang menciptakan suatu konsep sistem yang memungkinkan sebuah dokumen bisa terhubung satu sama lain yang terkoneksi internet. Ia juga menciptakan Protokol HTTP yang jadi jembatan antara client dan server saling mengirim data.

Karena data yang dikirim merupakan teks mentah dan akan lebih mudah membaca dokumen yang di format maka dia menciptakan HTML sebagai b ahasa untuk markup simpel membuat format teks lebih mudah dan lebih terstruktur. Dan dia menciptakan browser pertama yang di namakan WWW atau ==WORLD WIBE WEB== yang dimana nama ini terus digunakan di setiap website.

Pada tahun 1994, terciptalah CSS oleh Bapak Hakon Wium Lie yang bertujuan agar styling dan struktur HTML terpisah dan menjadi lebih muda untuk pelihara sampai saat ini. Unntuk styling sebenarnya sederhana, hanya perlu memberi identitas tiap komponen HTML yang ingin kita hiasi.

# HTML
Ibarat struktur tubuh manusia, HTML seperti tulang yang mengatur setiap bagian tubuh website yang akan kita buat.
Contoh setiap file HTML di anggap 1 halaman, setiap halaman akan dimulai dengan tag <`html`> dan di akhiri </`html`>
tag tersebut digunakan agar browser dapat mengenali bahwa teks tersebut digunakan agar browser dapat mengenali bahwa teks tersebut merupakan teks HTML dan bukan teks biasa. Kemudian ada yang namanya <`html`> </`head`> yang dimana fungsinya adalah untuk menyimpan informasi yang dibutuhkan website seperti <body> </body> sebagai tempat komponen" website dibuat seperti teks, heading, paragraf, gambar, tabel, link.

___

CONCAT_WS

#### Contoh Query 
```sql
SELECT CONCAT_WS("-",no_plat,no_mesin,id_mobil) FROM mobil;

```
#### Hasil
![Concatws](asets/Concatws.jpg)
#### Analisis 
`SELECT`: Digunakan untuk memilih kolom yang akan ditampilkan dalam hasil query.

`CONCAT_WS("-", no_plat, no_mesin, id_mobil)`: Fungsi CONCAT_WS digunakan untuk menggabungkan nilai dari kolom "no_plat", "no_mesin", dan "id_mobil" dengan menggunakan pemisah "-" (dash) di antara setiap nilai. Hasil penggabungan tersebut akan menjadi satu nilai tunggal.

`FROM mobil`: Menunjukkan bahwa tabel yang digunakan dalam query ini adalah "mobil".

Hasil query ini menghasilkan satu kolom yang berisi nilai-nilai hasil penggabungan antara kolom "no_plat", "no_mesin", dan "id_mobil" dari setiap baris dalam tabel "mobil" dengan pemisah "-" di antara setiap nilai.
#### Kesimpulan 
Kesimpulannya Pada query ini, `SELECT CONCAT_WS("-", no_plat, no_mesin, id_mobil) FROM mobil;`, dilakukan seleksi data dari tabel "mobil" dengan menggabungkan  antara kolom "no_plat", "no_mesin", dan "id_mobil" menggunakan pemisah "-" (dash).

### AS

#### Contoh Query 
```sql
SELECT
CONCAT_WS("+",pemilik,peminjam) AS
COLLAB FROM mobil
```
#### Hasil

![concat_as](asets/Concat_as.jpg)
#### Analisis 
 `SELECT`: Digunakan untuk memilih kolom yang akan ditampilkan dalam hasil query.

`CONCAT_WS("+", pemilik, peminjam) AS COLLAB`: Fungsi CONCAT_WS digunakan untuk menggabungkan nilai dari kolom "pemilik" dan "peminjam" dengan menggunakan pemisah "+" (plus) di antara setiap nilai. Hasil penggabungan tersebut akan menjadi satu nilai . "COLLAB" diberikan pada kolom hasil penggabungan.

`FROM mobil`: Menunjukkan bahwa tabel yang digunakan dalam query ini adalah "mobil".

Hasil query tersebut akan menghasilkan satu kolom tunggal dengan nama "COLLAB" yang berisi nilai-nilai hasil penggabungan antara kolom "pemilik" dan "peminjam" dari setiap baris dalam tabel "mobil" dengan pemisah "+" di antara setiap nilai.
#### Kesimpulan 
Pada query SQL ini, `SELECT CONCAT_WS("+", pemilik, peminjam) AS COLLAB FROM mobil;`untuk menyeleksi data dari tabel "mobil" dengan melakukan penggabungan antara kolom "pemilik" dan "peminjam" menggunakan pemisah "+" (plus) sebagai CONCAT_WS. Hasil penggabungan diberi alias "COLLAB" pada hasil query.
## View
## Tantangan 
### 1. Buatkan tabel virtual dan tampilkan datanya yang mana peminjamannya itu tidak ada (NULL)

#### Contoh Query 
```sql
CREATE VIEW peminjam NULL AS SELECT id_mobil,no plat, peminjam, harga_rental FROM mobil WHERE peminjam IS NULL;
```

#### Hasil
![Tantangan1](asets/Tantangan1.jpg)

### 2. update atau ganti salah satu data peminjam dari tabel mobil dengan nilai NULL, tampilkan isi data pada tabel 

#### Contoh Query 
```Sql
Update mobil SET peminjam=NULL WHERE id_mobil=3;
```

#### Hasil
![Tantangan2](asets/Tantangan2.jpg)



### 3. Berikan Kesimpulan mengapa tabel virtual ini dibuat


## AGREGASI
### Sum
#### struktur query 
```
SELECT SUM(nama_kolom) AS total FROM nama_tabel
WHERE kondisi_opsional;
```
#### Contoh Query 
```sql
SELECT SUM(harga_rental) FROM mobil;
```

#### Hasil
![Sum](asets/SUM.jpg)
#### Analisis 

`SELECT SUM(harga_rental)`: Ini adalah bagian dari pernyataan SELECT yang mengambil nilai total dari kolom "harga_rental". SUM digunakan untuk menjumlahkan nilai-nilai dalam kolom tertentu.

`FROM mobil`: Ini menunjukkan bahwa tabel yang digunakan dalam query ini adalah "mobil". Anda mengambil nilai dari kolom "harga_rental" di dalam tabel ini.
#### Kesimpulan 
Kesimpulannya,`SUM` ini akan menampilkan hasil penjumlahan dari seluruh penjumlahan `harga_rental` dari tabel mobil.

### Count
#### Struktur Query 
```
SELECT COUNT(*) AS jumlah FROM nama_tabel WHERE kondisi_opsional;
```
#### Contoh Query 
```sql
SELECT COUNT(pemilik) FROM mobil;
```

#### Hasil
![count](asets/Count.jpg)
#### Contoh Query 
```sql
SELECT COUNT(peminjam) FROM mobil;
```

#### Hasil
![Count2](asets/Count2.jpg)
#### analisis 

#### Kesimpulan 
 


### Min
#### Struktur Query 
```Mysql
SELECT MIN(nama_kolom) AS nilai_minimum FROM nama_tabel

WHERE kondisi_opsional;
```
#### Contoh Query 
```sql
SELECT MIN(harga_rental) AS MINIMAL FROM mobil;
```

#### Hasil
![Min](asets/Min.jpg)
#### analisis 
#### Kesimpulan 

### Max
#### Struktur Query 
```
SELECT MAX(nama_kolom) AS nilai_maksimum FROM nama tabel
WHERE kondisi_opsional;
```
#### Contoh Query 
```sql
SELECT MAX(harga_rental) AS MAXIMAL FROM mobil;
```

#### Hasil
![Max](asets/Max.jpg)
#### analisis 
#### Kesimpulan 
 

### AVG
#### Struktur Query 
```
SELECT AVG(nama_kolom) AS rata_rata FROM nama_tabel
WHERE kondisi_opsional;
```
#### Contoh Query 
```sql
SELECT AVG(harga_rental) AS RATA_RATA FROM mobil;
```

#### Hasil
![Avg](asets/AVG.jpg)
#### analisis 
#### Kesimpulan