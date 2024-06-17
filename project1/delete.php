<?php
include('koneksi.php');
if(isset($_GET['id'])){
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM berita WHERE id = '$id'");
if($query) {
echo "<script>
alert('Hapus data Berhasil')
window.location.href='admin_panel.php'
</script>";
}else {
echo '<script>alert("Hapus data gagal")</script>';
} }
?>