<?php 
include 'db_conn.php';
    if (isset($_POST['submit'])) {
    $namaleng = $_POST['namaleng'];
    $jkelamin = $_POST['jkelamin'];
    $nisn = $_POST['nisn'];
    $nik = $_POST['nik'];
    $tlahir = $_POST['tlahir'];
    $tglahir = $_POST['tglahir'];
    $agama = $_POST['agama'];
    $berkebkhusus = $_POST['berkebkhusus'];
    $alamat = $_POST['alamat'];
    $rt = $_POST['rt'];
    $rw = $_POST['rw'];
    $namadusun = $_POST['namadusun'];
    $namakel = $_POST['namakel'];
    $kec = $_POST['kec'];
    $kodepos = $_POST['kodepos'];
    $ttinggal = $_POST['ttinggal'];
    $transport = $_POST['transport'];
    $nohp = $_POST['nohp'];
    $notelp = $_POST['notelp'];
    $email = $_POST['email'];
    $kpspkh = $_POST['kpspkh'];
    $nokpspkh = $_POST['nokpspkh'];
    $kwn = $_POST['kwn'];
    $namaneg = $_POST['namaneg'];

      // Menyimpan ke database
      $sql = mysqli_query($conn, "INSERT INTO datapribadi (namaleng, jkelamin, nisn, nik, tlahir, tglahir, agama, berkebkhusus, alamat, rt, rw, namadusun, namakel, kec, kodepos, ttinggal, transport, nohp, notelp, email, kpspkh, nokpspkh, kwn, namaneg) VALUES ('$namaleng', '$jkelamin', '$nisn', '$nik', '$tlahir', '$tglahir', '$agama', '$berkebkhusus', '$alamat', '$rt', '$rw', '$namadusun', '$namakel', '$kec', '$kodepos', '$ttinggal', '$transport', '$nohp', '$notelp', '$email', '$kpspkh', '$nokpspkh', '$kwn', '$namaneg')");
      if ($sql) {
          // pesan jika data tersimpan
          echo "<script> window.location.href='home.php'</script>"; 
        } else {
          // pesan jika data gagal disimpan
            echo "alert('Data Diri Gagal Ditambahkan!!');";
        }
      }
?>