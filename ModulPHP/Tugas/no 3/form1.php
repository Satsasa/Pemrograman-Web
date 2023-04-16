<!DOCTYPE html>
<html>
<head>
    <title>Biodata</title>
</head>
<body>
    <P>BIODATA DIRI</P>
    <form method = "post" action = "proses.php">
        <table>
            <tr>
                <td>Nama : </td>
                <td><input type = "text" name = "nama" required></td>
            </tr>
            <tr>
                <td>Usia : </td>
                <td><input type = "number" name = "usia" required></td>
            </tr>
            <tr>
                <td>Jenis Kelamin : </td>
                <td>
                    <input type = "radio" name = "kelamin" value = "Laki-laki" required>Laki-laki
                    <input type = "radio" name = "kelamin" value = "Perempuan" required>Perempuan
                </td>
            </tr>
            <tr>
                <td>Instansi : </td>
                <td><input type = "text" name = "instansi"required></textarea></td>
            <tr>
            <tr>
                <td>Alamat : </td>
                <td><textarea name = "alamat" required></textarea></td>
            </tr>
            
                <td></td>
                <td></td>
                <td><input type = "submit" name = "submit" value = "Simpan"></td>
            </tr>
        </table>
    </form>
</body>

</html>