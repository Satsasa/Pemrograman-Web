<?php 
include 'koneksipegawai.php';
 
//Mengambil data yang dikirim user
$id = $_POST['id'];
$nama = $_POST['nama'];
$no_telp = $_POST['no_telp'];
$email = $_POST['email'];
$divisi = $_POST['divisi'];
echo $id;
 
//Update data ke database
mysqli_query($koneksi, "UPDATE `pegawai` SET `nama` = '$nama', 
`email` = '$email', 
`divisi` = '$divisi', 
`no_telp` = '$no_telp' 
WHERE `pegawai`.`id` = $id;"); 

//Kembali ke halaman utama
header("location:index.php");

?>