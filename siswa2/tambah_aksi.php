<?php 

include 'koneksi.php';

$nama = $_POST['nama'];
$nipd = $_POST['nipd'];
$kelas = $_POST['kelas'];
$proli = $_POST['proli'];

mysqli_query($koneksi,"insert into tb_siswa SET nama='$nama', nipd='$nipd', kelas='$kelas', proli='$proli'");
header("location:tampil.php");

 ?>