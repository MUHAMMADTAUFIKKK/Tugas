<!DOCTYPE html>
<html lang="en">

<head>
    <title> Berita</title>
    <link rel="stylesheet" href="stylecrud.css">
</head>
<body>
    <h2>Ubah Berita</h2>
    <?php
    session_start();
    include "koneksi.php";
    function upload(): string
    {
        $nameImage = $_FILES['thumbnail']['name'];
        $directoryFile = $_FILES['thumbnail']['tmp_name'];
        $errorImage = intval($_FILES['thumbnail']['error']);
        $sizeFile = $_FILES['thumbnail']['size'];

        // cek apakah gambar ada
        if ($errorImage === 4) {
            echo "<script>alert('Anda Belum Upload Gambar')</script>";
            return false;
        }

        // mengambil ekstensi file
        $validType = ['svg', 'jpg', 'png', 'jpeg', 'webp'];
        $extensionFile = explode(".", $nameImage);
        $extensionValid = strtolower(end($extensionFile));

        // cek apakah yang diupload gambar atau bukan
        if (!in_array($extensionValid, $validType)) {
            echo "<script>alert('yang anda Upload bukan gambar')</script>";
            return false;
        }

        // cek size file
        if ($sizeFile > 3_000_000) {
            echo "<script>alert('Ukuran File Terlalu Besar!!(Maks 3MB)')</script>";
            return false;
        }

        // upload file
        $nameImage = uniqid() . "." . $extensionValid;
        move_uploaded_file($directoryFile, "img/{$nameImage}");

        // mengembalikan namafile yg sudah divalidasi
        return $nameImage;
    }
    $id = $_GET['id'];
     if(isset($_POST['s'])) {
      // Ambil data dari form
      $judul  = $_POST['judul'];
      $isi  = $_POST['isi'];
      $thumbnail = $_POST['thumbnail'];
      $tanggal_terbit = $_POST['tanggal_terbit'];
      // Query untuk update data siswa
      $query = mysqli_query($koneksi, "UPDATE berita SET thumbnail='$thumbnail',judul='$judul',isi='$isi',tanggal_terbit='$tanggal_terbit' WHERE id='$id'");
      // Cek apakah query berhasil dijalankan
      if($query) {
       echo "<script>
       alert('Ubah data Berhasil')
       window.location.href='admin_panel.php'
       </script>";
      } else {
       echo '<script>alert("Ubah data gagal")</script>';
      }
     }
     // Query untuk mendapatkan data siswa berdasarkan id
     $query = mysqli_query($koneksi, "SELECT * FROM berita WHERE id='$id'");
     $data = mysqli_fetch_array($query);

    ?>
    <form method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Judul</td>
                <td><input type="text" name="judul" value="<?php echo $data['judul']; ?>" required></td>
            </tr>
            <tr>
                <td>Isi</td>
                <td><textarea name="isi" value="<?php echo $data['isi']; ?>" required></textarea></td>
            </tr>
          
            <tr>
                <td>Tanggal Terbit</td>
                <td><input type="date" name="tanggal_terbit"  value="<?php echo $data['tanggal_terbit']; ?>" required></td>
            </tr>
            <tr>
                <td>Thumbnail</td>
                <td><input type="file" name="thumbnail" value="<?php echo $data['thumbnail']; ?>" required></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button name="s" type="submit">Simpan</button>
                    <button type="reset">Reset</button>
                </td>
            </tr>
        </table>
    </form>

</body>

</html>