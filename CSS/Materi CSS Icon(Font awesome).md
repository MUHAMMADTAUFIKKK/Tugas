  ## Anggota Kelompok
### -Muh Raihan Al Fazari
### -Muh Taufik
### Kelas (XI RPL 1)
# Pengenalan Font Awesome
Pengenalan Font Awesome
Font Awesome adalah sebuah toolkit ikon yang berbasis font dan CSS yang populer digunakan untuk menambahkan ikon ke dalam website. Ikon-ikon tersebut dapat digunakan dengan mudah hanya dengan menambahkan kelas CSS tertentu ke elemen HTML.
# Fungsi dari Font Awesome
Font Awesome adalah salah satu kumpulan ikon yang dapat diintegrasikan ke dalam proyek web menggunakan CSS. Fungsi utamanya adalah untuk menyediakan beragam ikon yang dapat digunakan untuk meningkatkan tampilan dan fungsionalitas situs web tanpa perlu mengandalkan gambar. Dengan menggunakan CSS, Anda dapat dengan mudah mengatur ukuran, warna, dan gaya ikon Font Awesome sesuai kebutuhan
## Property & value Class Font awesome
class: Properti ini digunakan untuk menentukan kelas-kelas CSS yang diperlukan untuk menampilkan ikon tertentu ini Kelas yang paling umum digunakan adalah fas untuk ikon Solid, far untuk ikon Regular, dan fab untuk ikon Brand. 

Solid Icon (fas):
Icon yang memiliki properti fas adalah ikon solid, yang artinya memiliki penampilan solid tanpa garis tepi. Berikut adalah contoh penggunaannya: 

```html
`<i class="fas fa-heart"></i>`
```

Contoh Hasil:
![[icon fas.jpeg]]

 Regular Icon (far):
Icon yang memiliki properti far adalah ikon regular, yang artinya memiliki penampilan garis tepi (outline). Berikut adalah contoh penggunaannya:
```html
<i class="far fa-heart"></i>
```

Contoh Hasil:
![[icon far.jpeg]]

Brand Icon (fab):
Icon yang memiliki properti fab adalah ikon merek, yang artinya menampilkan logo merek seperti Facebook, Twitter, dll. Berikut adalah contoh penggunaannya: 

```html
`<i class="fab fa-facebook "></i>`
```

Contoh Hasil:
![[icon fab.jpeg]]

(`fa-spin`) 
di Font Awesome digunakan untuk memberi ikon efek putaran (spin) yang berputar secara terus-menerus. Ini berguna ketika Anda ingin menunjukkan bahwa suatu proses sedang berlangsung atau ketika Anda hanya ingin menambahkan sedikit animasi ke halaman web Anda. Misalnya, Anda dapat menggunakan `fa-spin` pada ikon roda gigi untuk menunjukkan bahwa aplikasi sedang memproses atau memuat data.

Saat Anda menambahkan kelas `fa-spin` ke ikon Font Awesome, itu akan mulai berputar dalam siklus tanpa akhir. Anda dapat menggunakan ini untuk memberikan tanda visual kepada pengguna bahwa sesuatu sedang terjadi di latar belakang atau untuk menarik perhatian mereka pada elemen tertentu dalam halaman web Anda. berikut contoh penggunaannya:
```css
<i class="fas fa-cog fa-spin"></i>
```

Contoh Hasilnya:

Before
![[beforo.icon.png]]

After
![[after.icon.png]]

Kode Program
```html
<!DOCTYPE html>

<html>

<head>

<title>Font Awesome</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<style>

​.icon {

font-size: 24px;

margin-right: 10px;

 }

</style>

</head>

<body>

<h1>Contoh Penggunaan Font Awesome</h1>

<i class="fas fa-heart"></i>

<p>ini menggunakan solid icon(fas)</p>

<i class="far fa-heart"></i>

<p>ini menggunakan regular icon(far)</p>

<i class="fab fa-facebook"></i>

<p>ini menggunakan brand icon(fab)</p>

  

<i class="far fa-heart fa-spin"></i>

<p><p>Ini menggunakan untuk berputar (fa-spin)</p>
```

Contoh Hasil
![[eksplorasi.png]]
### Cara menggunakan secara online dan offline
#### Secara online
1. Persiapkan Font Awesome:
Pertama, pastikan Anda memiliki akses ke Font Awesome. Anda dapat memilih untuk mengunduhnya dan menyimpannya di server Anda, atau menggunakan tautan CDN untuk memuatnya secara eksternal.

2. Tambahkan Tautan CSS: Di bagian 
<==head==> dari dokumen HTML Anda, tambahkan tautan ke file CSS Font Awesome menggunakan tag <==Link==>. Ini memungkinkan Anda untuk mengakses seluruh koleksi ikon Font Awesome.

```html
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

```

3. Gunakan Ikon di HTML: Di dalam
elemen HTML yang sesuai, tambahkan elemen <==i==> (atau <==span==>) dan berikan kelas ikon Font Awesome yang sesuai, seperti fas fa-home untuk ikon rumah.
*Contoh*
```html
<i class="fas fa-home"></i>
```

4. Atur Gaya Ikon: Jika diperlukan,
Anda juga dapat menyesuaikan gaya ikon menggunakan CSS. Anda dapat menetapkan ukuran, warna, margin, dan properti lain sesuai kebutuhan Misalnya.

```css
icon {
    font-size: 24px;
    margin-right: 10px;
}

```

5. Terapkan di Seluruh Halaman:
Gunakan ikon Font Awesome di seluruh halaman web Anda sesuai kebutuhan. Anda juga dapat menggunakan berbagai ikon dari koleksi Font Awesome untuk berbagai tujuan.

Link berbagai icon font awesome:
https://fontawesome.com/v4/icons 

#### Secara Offline
1. pertama-tama kita membuka web browser
    ![[tutorial1.png]]

2.  kemudian kita sercing ke browser pencarian download font awesome 5, kemudian kita scroll kebawah klik yang berada di baris kedua.
    ![[tutorial2.png]]

3. Lalu kita pilih version yang berada di samping kanan kemudian kita pilih yang bisa di gunakan oleh device anda seperti contoh saya yang menggunakan version 5
 

4. kemudian kita download yang free for web 
    ![[tutorial4.png]]

5. setelah selesai di download kita Extrack file yang telah kita download
    ![[tutorial5.png]]

6. Kemudian kita copy file yang telah kita extrack lalu kita memasukan file tersebut ke file teks editor kita
    ![[tutorial6.png]]

7. Setelah kita telah memasukkan file font awesome kita jadinya akan seperti ini
    ![[tutorial7.png]]

8. kemudian kita buka teks editor lalu kita buat struktur html setelah itu kita memanggil font awesome dengan menggunakan ` <link rel="stylesheet" href=""` lalu kita masukan file font awesome kita.
    ![[tutorial8.png]]

9. setelah itu kita di pilih css seperti gambar di bawah
    ![[tutorial9.png]]

10. lalu kemudian kita pilih # all.min.css
    ![[tutorial10.png]]

11. setelah itu kita telah bisa memanggil icon yang ingin kita pilih dengan menggunakan perintah `<i class="fas fa-home"></i>`
    ![[tutorial12.png]]

12. selesai

#### Contoh Program
```html
<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="fontawesome-free-5.15.4-web (1)/fontawesome-free-5.15.4-web/css/all.min.css">

    <title>Font Awesome</title>

  

</head>

<body>

    <i class="fas fa-home"></i>

    <i class="fas fa-user"></i>  

</body>

</html>
```

#### Hasil
![[tutorial11.png]]

### Implementasi
```html
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kontainer dengan Foto Profil dan Font Awesome Icon</title>
  <!-- Tambahkan Font Awesome CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="sylesheet" href="syles.css">
</head>
<body>
  <div class="container">
    <div>
      <span>
      <h2>Temukan Kami di Media Sosial</h2>
   <img src="gambar/walpaper.jpg" alt="Your Profile Picture" class="profile-pic">
      </span>
      <div class="social-icons">
        <a href="#"><i class="fab fa-instagram icon"></i></a>
        <br>
        <a href="http://instagram.com/reyhanz_aja"> reyhanz_aja</a><br>
        <a href="#"><i class="fab fa-facebook icon"></i></a><br>
        <a href="https://www.facebook.com/muh.alfazari?mibextid=ZbWKw">Muh Raihan Al Fazari</a><br>
        <a href="#"><i class="fab fa-twitter icon"></i></a><br>
        <a href="https://x.com/Raihan190877?t=O582kiYQrvj9uARSRlagOw&s=09">Raihan</a><br>
      </div>
    </div>
  </div>
</body>
</html>
```
#### index.html

Kode HTML di atas adalah sebuah dokumen HTML sederhana yang membuat sebuah halaman web dengan kontainer yang menampilkan profil sosial media. Berikut adalah deskripsi dari setiap bagian kode:

1. **Deklarasi HTML5**:
   ```html
   <!DOCTYPE html>
   ```
   Ini adalah deklarasi untuk menunjukkan bahwa dokumen adalah dokumen HTML5.

2. **Elemen `<html>`**:
   ```html
   <html lang="en">
   ```
   Ini adalah elemen root yang menandakan awal dari dokumen HTML, dengan atribut `lang` yang menentukan bahasa dokumen (dalam hal ini, bahasa Inggris).

3. **Elemen `<head>`**:
   ```html
   <head>
       <!-- Meta tags dan judul halaman -->
   </head>
   ```
   Bagian kepala dokumen yang biasanya berisi meta tag, tautan ke file eksternal, dan elemen judul halaman.

4. **Meta Tag dan Judul**:
   ```html
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Kontainer dengan Foto Profil dan Font Awesome Icon</title>
   ```
   Meta tag untuk mengatur set karakter dan tampilan halaman, serta judul halaman web.

5. **Link ke Font Awesome CSS**:
   ```html
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   ```
   Ini adalah tautan ke file CSS eksternal dari Font Awesome yang menyediakan ikon-ikon yang digunakan dalam halaman web.

6. **Link ke File CSS Lokal**:
   ```html
   <link rel="stylesheet" href="styless.css">
   ```
   Ini adalah tautan ke file CSS lokal bernama "styless.css". Ini mungkin berisi gaya tambahan yang ingin Anda terapkan pada halaman web Anda.

7. **Elemen `<body>`**:
   ```html
   <body>
       <!-- Konten halaman web -->
   </body>
   ```
   Bagian tubuh dokumen yang berisi konten yang akan ditampilkan di browser.

8. **Elemen Kontainer dengan Profil Sosial**:
   ```html
   <div class="container">
       <!-- Konten profil sosial -->
   </div>
   ```
   Ini adalah kontainer utama yang akan menampilkan profil sosial media. Kelompok konten ini menggunakan kelas CSS bernama "container".

9. **Judul dan Profil Sosial**:
   ```html
   <h2>Temukan Kami di Media Sosial</h2>
   <img src="- ⩇⩇_⩇⩇.jpeg" alt="Your Profile Picture" class="profile-pic">
   <div class="social-icons">
       <!-- Tautan media sosial -->
   </div>
   ```
   Ini adalah judul halaman dan konten profil sosial. Ini termasuk gambar profil, judul, dan tautan-tautan ke media sosial dengan ikon-ikon Font Awesome.

Dengan menggunakan kode ini, Anda membuat halaman web sederhana yang menampilkan profil sosial media dengan ikon-ikon media sosial dan foto profil.
#### Styles.css
```css
body{

    padding: 0;

    margin: 0;

}

    .icon {

      font-size: 30px;

      margin-right: 10px;

      color :blue;

    }

  

    /* Gaya untuk kontainer */

    .container {

      width: 600px;

      background-color: #f4f4f4;

      border-radius: 10px;

      display: flex;

      align-items: center;

    }

  

    /* Gaya untuk foto profil */

    .profile-pic {

      width: 100px;

      height: 100px;

      border-radius: 50%;

      float: right; /* Menggeser gambar ke samping kanan */

      margin-left: 20px; /* Memberikan ruang antara gambar dan teks */

    }

  

    /* Gaya untuk judul */

    h2 {

      font-family: Arial, sans-serif;

      color: #333;

      margin-top: 20px;

      margin-bottom: 10px;

    }

  

    /* Gaya untuk ikon */

    .social-icons {

      margin-top: 10px;

      display: flex;

      flex-direction: column;

      align-items: center;

  

    }

  

    .social-icons a {

      display: inline-block;

      margin-bottom: 5px;

      color: #333;

      text-decoration: none;

    }

    img{

    margin-top:100px;

    margin-right:50px;

    border:solid yellow 5px;

    }
```

Kode CSS di atas mengatur gaya dan tata letak untuk elemen-elemen HTML dalam halaman web yang menampilkan profil sosial media. Mari deskripsikan setiap bagian:

1. **Resetting Margin dan Padding untuk Body**:
   ```css
   body {
       padding: 0;
       margin: 0;
   }
   ```
   Ini mengatur padding dan margin dari elemen `<body>` menjadi 0, yang merupakan praktik umum untuk menghindari margin dan padding bawaan dari browser.

2. **Gaya untuk Ikon**:
   ```css
   .icon {
       font-size: 30px;
       margin-right: 10px;
       color: blue;
   }
   ```
   Menetapkan ukuran font, margin kanan, dan warna teks untuk elemen dengan kelas `.icon`, yang pada halaman ini mungkin digunakan untuk ikon-ikon media sosial.

3. **Gaya untuk Kontainer**:
   ```css
   .container {
       width: 600px;
       background-color: #f4f4f4;
       border-radius: 10px;
       display: flex;
       align-items: center;
   }
   ```
   Mengatur gaya untuk kontainer utama yang berisi profil sosial media. Kontainer ini memiliki lebar 600px, latar belakang berwarna abu-abu muda, dan memiliki sudut yang dibulatkan. Selain itu, kontainer ini menggunakan tata letak flexbox untuk memastikan konten di tengah secara vertikal.

4. **Gaya untuk Foto Profil**:
   ```css
   .profile-pic {
       width: 100px;
       height: 100px;
       border-radius: 50%;
       float: right;
       margin-left: 20px;
   }
   ```
   Mengatur gaya untuk foto profil, memberikan dimensi 100x100px dan membuat sudutnya bulat. Selain itu, gambar diletakkan di sebelah kanan kontainer dan diberi jarak kiri sebesar 20px.

5. **Gaya untuk Judul**:
   ```css
   h2 {
       font-family: Arial, sans-serif;
       color: #333;
       margin-top: 20px;
       margin-bottom: 10px;
   }
   ```
   Mengatur gaya untuk judul "Temukan Kami di Media Sosial". Font yang digunakan adalah Arial atau fallback sans-serif, warna teksnya adalah abu-abu tua (#333), dan diberi margin di atas dan di bawah.

6. **Gaya untuk Ikon Media Sosial**:
   ```css
   .social-icons {
       margin-top: 10px;
       display: flex;
       flex-direction: column;
       align-items: center;
   }
   ```
   Mengatur tata letak dan penempatan ikon-ikon media sosial. Ikon-ikon tersebut akan ditampilkan dalam kolom vertikal tengah halaman, dengan margin atas 10px.

7. **Gaya untuk Tautan Media Sosial**:
   ```css
   .social-icons a {
       display: inline-block;
       margin-bottom: 5px;
       color: #333;
       text-decoration: none;
   }
   ```
   Mengatur tata letak dan penampilan tautan media sosial. Tautan- tautan ini ditampilkan sebagai blok inline dengan jarak bawah 5px, menggunakan warna teks abu-abu tua (#333), dan tanpa dekorasi tautan (underline).

8. **Gaya untuk Gambar**:
   ```css
   img {
       margin-top: 100px;
       margin-right: 50px;
       border: solid yellow 5px;
   }
   ```
   Memberikan gaya khusus untuk semua elemen gambar (`

img`) dalam halaman. Di sini, gambar diberi margin atas sebesar 100px dan margin kanan sebesar 50px. Selain itu, gambar diberi border dengan warna solid kuning sebesar 5px.

#### Hasil pengerjaan
![Img](IMG-20240428-WA0076.jpg)