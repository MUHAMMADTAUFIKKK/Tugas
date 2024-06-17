<?php
include 'koneksi.php';
$query = mysqli_query($koneksi, "SELECT berita.*, admin.nama AS penulis_nama FROM berita INNER JOIN admin ON berita.penulis_id = admin.id ORDER BY berita.id DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="admin.css">
</head>
<body>
    <h2>ADMIN PANEL</h2>
    <p><a href="crud.php">+Tambah Berita Baru</a><br><br></p>
    <p>
    <a href="berita.php">Halaman Berita</a><br><br>
    </p>
    <table border="5">
    <tr>
        <th>thumbnail</th>
        <th>judul</th>
        <th>isi</th>
        <th>penulis</th>
        <th>Tanggal_terbit</th>
        <th>Ubah Berita</th>
        <th>Hapus Berita</th>
    </tr>
    <?php while ($data = mysqli_fetch_array($query)) { ?>
    <tr>
        <td>
            <img src="img/<?= $data['thumbnail'] ?>" width="200">
        </td>
        <td><?php echo $data['judul']; ?></td>
        <td><?php echo $data['isi']; ?></td>
        <td><?php echo $data['penulis_nama']; ?></td>
        <td><?php echo $data['tanggal_terbit']; ?></td>
        <td>
            <a href="update.php?id=<?= $data['id']; ?>">Ubah</a></td> 
            <td><a href="delete.php?id=<?= $data['id']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus berita ini?')">Hapus</a>
        </td>
    </tr>
    <?php 
    }
    ?>
    </table>
</body>
</html>
