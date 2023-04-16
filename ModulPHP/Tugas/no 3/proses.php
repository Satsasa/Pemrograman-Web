<!DOCTYPE html>
<html>

<head>
    <title>Biodata</title>
</head>

<body>
    <p>BIODATA DIRI</p>
    <?php
    if (isset($_POST['submit'])) {
        // pengambilan data 
        $nama = $_POST['nama'];
        $umur = $_POST['usia'];
        $kelamin = $_POST['kelamin'];
        $instansi = $_POST['instansi'];
        $alamat = $_POST['alamat'];
        //penarikan data
        echo "<p>Nama : $nama</p>";
        echo "<p>Umur : $umur</p>";
        echo "<p>Jenis Kelamin : $kelamin</p>";
        echo "<p>Instansi : $instansi</p>";
        echo "<p>Alamat : $alamat</p>";
    }
    ?>
</body>

</html>