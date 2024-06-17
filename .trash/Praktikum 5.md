
# Tabel Pegawai
![tabel](Basis%20data/asetPHP/Tabel.jpg)

# 8
## Query
```mysql
SELECT noCab, SUM(Gaji) AS Total_Gaji from pegawai GROUP BY noCab HAVING SUM(Gaji) >= 8000000;
```
## Hasil
![8.](Basis%20data/asetPHP/8.jpg)
## Analisis
`select` = untuk memilih kolom mana saja yang dipilih untuk di tampilkan atau di jumlah.
`noCab` = nama kolom yang dipilih untuk ditampilkan.
``SUM(Gaji)`` = untuk menghitung jumlah data (Khusus Angka) pada kolom yang dipilih.``Gaji`` adalah nama kolom yang dipilih untuk dijumlahkan isi datanya.
``AS`` = untuk mengganti nama dari SUM(Gaji) untuk sementara.
``Total Gaji`` = adalah nama sementara dari perintah ``AS``.
`From Pegawai` = untuk memilih dari tabel mana yang data kolomnya akan di gunakan, ``Pegawai`` Adalah Nama Tabel Yang akan di pilih
``GROUP BY`` = untuk mengelompokkan data berdasarkan nilai data Yang telah ditentukan Pada kolom yang dipilih.
``Nocab`` = nama kolom Yang dipilih untuk datanya dikelompokkan.
``Having`` = kondisi yang harus dipenuhi oleh suatu kelompok data agar bisa ditampilkan. 
``(Sum (Gaji) >= 800000)``= kondisi dari HAVING, Hasil dari Penjumlahan Gai yang hanya bisa ditampilkan adalah Hasil yang lebih dari atau sama dengan 8000000.
``Hasilnya`` = Sama seperti sebelumnya, tetapi Nocab Yang memenuhi kondisi tersebut hanyalah C102 dan C103 karena hasil Jumlah kolom Gaji nya lebih dari atau sama dengan 8000000. Adapun hasil kolom Sum(Gaji) diganti Jadi Total-Gaji.

___

# 9
## Query

```mysql
SELECT AVG(Gaji) AS rata_rata from pegawai;
```
## Hasil
![9.](Basis%20data/asetPHP/9.jpg)
## Analisis
`Select` = untuk memilih kolom mana data Yang dipilih untuk ditampilkan.
``AVG (Gaji)`` = untuk menghitung rata-rata dari data yang ada Pada kolom Yang dipilih. 
Gaji adalah nama kolom Yang dipilih untuk dihitung rata-ratanya.
`As` = untuk mengganti nama dari kolom hasil AVG (Gaji) untuk sementara.
`Rata-rata` =nama sementara dari Perintah AS.
`From Pegawai` = untuk memilih dari tabel mana Yang data kolomnya ingin digunakan
`Pegawai` = adalah nama dari tabel yang dipilih.
``Hasilnya`` = 3397222.2222 merupakan hasil rata-rata dari semua 9 barisan data Pada kolom Gaji. Adapun nama kolom hasil dari AVG (Gaji) Yaitu Rata-rata
___

# 10
## Query
```Mysql
SELECT AVG(Gaji) AS GajiRataManager FROM pegawai WHERE Jabatan = "Manager";
```
## Hasil
![10.](Basis%20data/asetPHP/10.jpg)
## Analisis
`SELECT` = untuk memilih kolom mana saja yang dipilih untuk ditampilkan.
`AVG (Gaji)` = untuk menghitung rata-rata dari data yang ada pada kolom Yang dipilih. Gaji adalah nama kolom Yang dipilih untuk dihitung rata-ratanya.
`AS` = untuk mengganti nama dari kolom hasil AVG (Gaji) untuk sementara.
``GajiRataManager`` = nama sementara dari Perintah AS.
``FROM pegawai`` = untuk memilih dari tabel mana Yang data kolomnya ingin Pegawai adalah nama dari tabel Yang diingin digunakan.
`WHERE` = Kondisi yang harus dipenuhi oleh suatu kolom agar datanya bisa dihitung rata-ratanya
`(Jabatan = 'Manajer')` = kondisi dari WHERE. Barisan data yang kolom Jabatannya Manajer akan dihitung rata-rata kolom Gaji nya.
`Hasilnya` = 5750000.0000 merupakan hasil hitung rata-rata dari barisan data yang memiliki manajer di kolom Jabatan nya,dari situ kolom Gajinya di hitung.

