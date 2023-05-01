<?php
include 'koneksipegawai.php';

//Mengambil data yang dikirim user
$nama = $_POST['nama'];
$email = $_POST['email'];
$divisi = $_POST['divisi'];
$no_telp = $_POST['no_telp'];

//Input data ke database
mysqli_query($koneksi,"INSERT INTO `pegawai` (`id`, `nama`, `email`, `divisi`, `no_telp`) 
VALUES (NULL, '$nama', '$email', '$divisi', '$no_telp')");

//Kembali ke halaman awal
header("location:index.php");
?>