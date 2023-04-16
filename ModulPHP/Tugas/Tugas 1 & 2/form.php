<!DOCTYPE html>
<html>

<head>
    <title>Form</title>
</head>

<body>
    <form method="POST" action="cek.php">
        <table width="400" align="center" cellpadding="2" cellspacing="2">
            <tr>
                <td width="130">Nama : </td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td width="130">Email : </td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td >
                    <input type="submit" name="btnLogin" value="Kirim">
                    <input type="reset" name="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>