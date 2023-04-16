<html>

<body style="margin-top:100px; text-align:center;">

    <?php
    if (empty($_POST['nama'] && $_POST['email'])) {
        header("location:kosong1.php");
    } else {
        echo "<center>Nama :" . $_POST['nama'] . "</center><br>";
        echo "<center>Email :" . $_POST['email'] . "</center><br>";
        echo "<center>Tanggal :" . date("d-m-Y, h:i:s A")  . "</center><br>";
    }
    ?>
    <a href="form.php"><button>Kembali</button></a>
</body>

</html>