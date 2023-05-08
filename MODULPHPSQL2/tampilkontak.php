<h2>List Kontak</h2>
<table border="1">
    <tr>
        <th>NO</th>
        <th>NAMA</th>
        <th>GENDER</th>
        <th>EMAIL</th>
        <th>ALAMAT</th>
        <th>KOTA</th>
        <th>PESAN</th>
    </tr>
    <?php
    include 'koneksi.php';
    $kontak = mysqli_query($koneksi, "SELECT * FROM kontak");
    $no=1;
    foreach ($kontak as $row){
        echo "<tr>
            <td>$no</td>
            <td>".$row['nama']."</td>
            <td>".$row['jkel']."</td>
            <td>".$row['email']."</td>
            <td>".$row['alamat']."</td>
            <td>".$row['kota']."</td>
            <td>".$row['pesan']."</td>
            <tr>";
        $no++;
    }?>
</table>