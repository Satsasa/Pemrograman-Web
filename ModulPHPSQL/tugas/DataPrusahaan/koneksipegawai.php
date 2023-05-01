<?php
$koneksi = mysqli_connect("localhost", "root", "", "data_pegawai");
if(!$koneksi){
    die("connection failed : " . mysqli_connect_error()); 
}
?>