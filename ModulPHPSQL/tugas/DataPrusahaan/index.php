<!DOCTYPE html>
<head>
    <title> Data Pegawai</title>
</head>
<body>
    <center>
        <h1> Data Pegawai </h1>
        <br>
        <table border = "2">
            <tr style="background-color : grey; color: black; ">
                <th> No </th>
                <th> Id Pegawai </th>
                <th> Nama Pegawai </th>
                <th> No. Telepon </th>
                <th> Email </th>
                <th> Divisi </th>
            <tr>

            <?php
            include 'koneksipegawai.php';
            $no = 1;
            $data = mysqli_query($koneksi, "SELECT * FROM pegawai ");
            while ($d = mysqli_fetch_array($data)) {
                ?>
                <tr>
                    <td> <?php echo $no++; ?></td>
                    <td width = "300" align = "center"> <?php echo $d ['id']; ?> </td>
                    <td width = "300" align = "center"> <?php echo $d ['nama']; ?> </td>
                    <td width = "300" align = "center"> <?php echo $d ['no_telp']; ?> </td>
                    <td width = "300" align = "center"> <?php echo $d ['email']; ?> </td>
                    <td width = "300" align = "center"> <?php echo $d ['divisi']; ?> </td>
                </tr>
                <?php
                }
                ?>
        </table>
        <br>
        <table border="2" cellpadding="5">
            <th><a href="add.php" style="background-color: lightgreen;" >Tambah</a></th>
            <th><a href="edit.php" style="background-color: lightblue;" >Edit</a></th>
            <th><a href="delete.php" style="background-color: red">Hapus</a></th>
        </table>  
    </center>  
</body>
</html>