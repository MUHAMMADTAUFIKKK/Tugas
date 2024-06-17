<!DOCTYPE html>
<html lang="en">

<head>
    <title> Berita</title>
    <link rel="stylesheet" href="stylecrud.css">
</head>
<body>
    <h2>Tambah Berita</h2>
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

    if (isset($_POST['simpan'])) {
        $judul = $_POST['judul'];
        $isi = $_POST['isi'];
        $penulis_id = $_SESSION['id'];
        $tanggal_terbit = $_POST['tanggal_terbit'];



        $thumbnail = upload();
        if (!$thumbnail) {
            return false;
        }
        // * true / false
        $query = mysqli_query($koneksi, "INSERT INTO berita(thumbnail,judul,isi,penulis_id,tanggal_terbit) 
        VALUES ('$thumbnail', '$judul', '$isi', '$penulis_id', '$tanggal_terbit')");

        if ($query == true) {
            echo "<script>
            alert('Tambah data Berhasil');
            window.location.href='admin_panel.php';
            </script>";
        } else {
            echo '<script>alert("Tambah data gagal")</script>';
        }
    }
    ?>
    <form method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Judul</td>
                <td><input type="text" name="judul" required></td>
            </tr>
            <tr>
                <td>Isi</td>
                <td><textarea name="isi" required></textarea></td>
            </tr>
          
            <tr>
                <td>Tanggal Terbit</td>
                <td><input type="date" name="tanggal_terbit" required></td>
            </tr>
            <tr>
                <td>Thumbnail</td>
                <td><input type="file" name="thumbnail" required></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button name="simpan" type="submit">Simpan</button>
                    <button type="reset">Reset</button>
                    <button type="submit" class="logout-button" onclick="logout()">LogOut</button>
    <script>
        function logout() {
            window.location.href = 'login.php'; // Mengarahkan ke halaman login.php
        }
    </script>
                </td>
            </tr>
        </table>
    </form>

</body>

</html>