<?php
include 'koneksipegawai.php';

//Mengambil data yang dikirim user
$id = $_POST['id'];

//Delete data yang ada pada database
mysqli_query($koneksi, "DELETE  FROM `pegawai` WHERE `id` = $id");

//Kembali ke halaman utama
header("location: index.php");
?>