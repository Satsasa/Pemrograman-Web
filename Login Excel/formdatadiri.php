<?php
    include 'db_conn.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULIR PESERTA DIDIK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        .warning {color: #FF0000;}
    </style>
</head>
<body>

<?php
    $error_namaleng = "";
    $error_jkelamin = "";
    $error_nisn = "";
    $error_nik = "";
    $error_tlahir = "";
    $error_tglahir = "";
    $error_agama = "";
    $error_berkebkhusus = "";
    $error_alamat = "";
    $error_rt = "";
    $error_rw = "";
    $error_namadusun = "";
    $error_namakel = "";
    $error_kec = "";
    $error_kodepos = "";
    $error_ttinggal = "";
    $error_transport = "";
    $error_nohp = "";
    $error_notelp = "";
    $error_email = "";
    $error_kpspkh = "";
    $error_nokpspkh = "";
    $error_kwn = "";
    $error_namaneg = "";

    $namaleng = "";
    $jkelamin = "";
    $nisn = "";
    $nik = "";
    $tlahir = "";
    $tglahir = "";
    $agama = "";
    $berkebkhusus = "";
    $alamat = "";
    $rt = "";
    $rw = "";
    $namadusun = "";
    $namakel = "";
    $kec = "";
    $kodepos = "";
    $ttinggal = "";
    $transport = "";
    $nohp = "";
    $notelp = "";
    $email = "";
    $kpspkh = "";
    $nokpspkh = "";
    $kwn = "";
    $namaneg = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["nisn"])) {
            $error_nisn = "NISN Tidak Boleh Kosong";
        } else {
            $nisn = cek_input($_POST["nisn"]);
            if (!is_numeric($nisn)) {
                $error_nisn = "NISN Hanya Boleh Angka";
            }
        }

        if (empty($_POST["nik"])) {
            $error_nik = "NIK Tidak Boleh Kosong";
        } else {
            $nik = cek_input($_POST["nik"]);
            if (!is_numeric($nik)) {
                $error_nik = "NIK Hanya Boleh Angka";
            }
        }

        if (empty($_POST["nohp"])) {
            $error_nohp = "Nomor HP Tidak Boleh Kosong";
        } else {
            $nohp = cek_input($_POST["nohp"]);
            if (!is_numeric($nohp)) {
                $error_nohp = "Nomor HP Hanya Boleh Angka";
            }
        }

        if (empty($_POST["email"])) {
            $error_email = "Email Tidak Boleh Kosong";
        } else {
            $email = cek_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $error_email = "Format Email Invalid";
            }
        }

    }

    function cek_input($data) {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
    
<div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                FORMULIR PESERTA DIDIK
                </div>
                <div class="card-footer">
                    2. FORM DATA DIRI
                </div>
                <div class="card-body">
                    <form method="post" action="datadiri.php">

                    <div class="form-group row">
                        <label for="namaleng" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                            <input type="text" name="namaleng" id="namaleng" class="form-control" <?php echo ($error_namaleng !="" ? "is-invalid" : ""); ?>" placeholder="" value="<?php echo $namaleng; ?>"> <span class="warning"><?php echo $error_namaleng ?></span>
                        </div>
                    </div>
                    
                    <br>
                    <div class="form-group row">
                        <label for="jkelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                            <input type="radio" name="jkelamin" value="Laki Laki">Laki-Laki</label>
                            <input type="radio" name="jkelamin" value="Perempuan">Perempuan</label> 
                            <span class="warning" ><?php echo $error_jkelamin; ?></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nisn" class="col-sm-2 col-form-label">NISN</label>
                        <div class="col-sm-10">
                            <input type="text" name="nisn" id="nisn" class="form-control" <?php echo ($error_nisn !="" ? "is-invalid" : ""); ?>" placeholder="" value="<?php echo $nisn; ?>"> <span class="warning"><?php echo $error_nisn ?></span>
                        </div>
                    </div> <br>

                    <div class="form-group row">
                        <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                        <div class="col-sm-10">
                            <input type="text" name="nik" id="nopesunikjian" class="form-control" <?php echo ($error_nik !="" ? "is-invalid" : ""); ?>" placeholder="3524xxxxxxxx" value="<?php echo $nik; ?>"> <span class="warning"><?php echo $error_nik ?></span>
                        </div>
                    </div> <br>

                    <div class="form-group row">
                        <label for="tlahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                        <div class="col-sm-10">
                            <input type="text" name="tlahir" id="tlahir" class="form-control" <?php echo ($error_tlahir !="" ? "is-invalid" : ""); ?>" placeholder="" value="<?php echo $tlahir; ?>"> <span class="warning"><?php echo $error_tlahir ?></span>
                        </div>
                    </div> <br>

                    <div class="form-group row">
                        <label for="tglahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-10">
                            <input type="text" name="tglahir" id="tglahir" class="form-control" <?php echo ($error_tglahir !="" ? "is-invalid" : ""); ?>" placeholder="XX-Bulan-XXXX" value="<?php echo $tglahir; ?>"> <span class="warning"><?php echo $error_tglahir ?></span>
                        </div>
                    </div> <br>

                    <div class="form-group row">
                        <label for="agama" class="col-sm-2 col-form-label "> Agama </label>
                        <div class="col-sm-10">
                            <select class="col-sm-2 form-select" name="agama">
                            <option value=""></option>
                            <option value="Islam"> Islam </option>
                            <option value="Kristen/Protestan"> Kristen/Protestan </option>
                            <option value="Katholik"> Katholik </option>
                            <option value="Hindu"> Hindu </option>
                            <option value="Budha"> Budha </option>
                            <option value="Konghucu"> Konghucu </option>
                            <option value="Lainnya"> Lainnya </option>
                            </select>
                            <span class="warning" ><?php echo $error_agama; ?></span>
                        </div>
                    </div> <br>

                    <div class="form-group row">
                        <label for="berkebkhusus" class="col-sm-2 col-form-label "> Berkebutuhan Khusus </label>
                        <div class="col-sm-10">
                            <select class="col-sm-2 form-select" name="berkebkhusus">
                            <option value=""></option>
                            <option value="Tidak"> Tidak </option>
                            <option value="Netra (A)"> Netra (A) </option>
                            <option value="Rungu (B)"> Rungu (B) </option>
                            <option value="Grahita Ringan (C)"> Grahita Ringan (C) </option>
                            <option value="Grahita Sedang (C1)"> Grahita Sedang (C1) </option>
                            <option value="Daksa Ringan (D)"> Daksa Ringan (D) </option>
                            <option value="Laras (E)"> Laras (E) </option>
                            <option value="Wicara (F)"> Wicara (F) </option>
                            <option value="Tuna Ganda (G)"> Tuna Ganda (G) </option>
                            <option value="Hiper Aktif (H)"> Hiper Aktif (H) </option>
                            <option value="Cerdas Istimewa (I)"> Cerdas Istimewa (I) </option>
                            <option value="Bakat Istimewa (J)"> Bakat Istimewa (J) </option>
                            <option value="Kesulitan Belajar (K)"> Kesulitan Belajar (K) </option>
                            <option value="Narkoba (N)"> Narkoba (N) </option>
                            <option value="Indigo (O)"> Indigo (O) </option>
                            <option value="Down Syndrom (P)"> Down Syndrom (P) </option>
                            <option value="Autis (Q)"> Autis (Q) </option>
                            <option value="Lainnya"> Lainnya </option>
                            </select>
                            <span class="warning" ><?php echo $error_berkebkhusus; ?></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" name="alamat" id="alamat" class="form-control" <?php echo ($error_alamat !="" ? "is-invalid" : ""); ?>" placeholder="" value="<?php echo $alamat; ?>"> <span class="warning"><?php echo $error_alamat ?></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="rt" class="col-sm-2 col-form-label">RT</label>
                        <div class="col-sm-10">
                            <input type="text" name="rt" id="rt" class="form-control" <?php echo ($error_rt !="" ? "is-invalid" : ""); ?>" placeholder="XX" value="<?php echo $rt; ?>"> <span class="warning"><?php echo $error_rt ?></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="rw" class="col-sm-2 col-form-label">RW</label>
                        <div class="col-sm-10">
                            <input type="text" name="rw" id="rw" class="form-control" <?php echo ($error_rw !="" ? "is-invalid" : ""); ?>" placeholder="XX" value="<?php echo $rw; ?>"> <span class="warning"><?php echo $error_rw ?></span>
                        </div>
                    </div>

                    <br>
                    <div class="form-group row">
                        <label for="namadusun" class="col-sm-2 col-form-label">Nama Kelurahan/Desa</label>
                        <div class="col-sm-10">
                            <input type="text" name="namadusun" id="namadusun" class="form-control" <?php echo ($error_namadusun !="" ? "is-invalid" : ""); ?>" placeholder="" value="<?php echo $namadusun; ?>"> <span class="warning"><?php echo $error_namadusun ?></span>
                        </div>
                    </div> <br>

                    
                    <div class="form-group row">
                        <label for="namakel" class="col-sm-2 col-form-label">Nama Kelurahan</label>
                        <div class="col-sm-10">
                            <input type="text" name="namakel" id="namakel" class="form-control" <?php echo ($error_namakel !="" ? "is-invalid" : ""); ?>" placeholder="" value="<?php echo $namakel; ?>"> <span class="warning"><?php echo $error_namakel ?></span>
                        </div>
                    </div> <br>

                    
                    <div class="form-group row">
                        <label for="kec" class="col-sm-2 col-form-label">Kecamatan</label>
                        <div class="col-sm-10">
                            <input type="text" name="kec" id="kec" class="form-control" <?php echo ($error_kec !="" ? "is-invalid" : ""); ?>" placeholder="" value="<?php echo $kec; ?>"> <span class="warning"><?php echo $error_kec ?></span>
                        </div>
                    </div> <br>

                    
                    <div class="form-group row">
                        <label for="kodepos" class="col-sm-2 col-form-label">Kode Pos</label>
                        <div class="col-sm-10">
                            <input type="text" name="kodepos" id="kodepos" class="form-control" <?php echo ($error_kodepos !="" ? "is-invalid" : ""); ?>" placeholder="xxxxxx" value="<?php echo $kodepos; ?>"> <span class="warning"><?php echo $error_kodepos ?></span>
                        </div>
                    </div> <br>

                    <div class="form-group row">
                        <label for="ttinggal" class="col-sm-2 col-form-label "> Tempat Tinggal </label>
                        <div class="col-sm-10">
                            <select class="col-sm-2 form-select" name="ttinggal">
                            <option value=""></option>
                            <option value="Bersama Orang Tua"> Bersama Orang Tua </option>
                            <option value="Wali"> Wali </option>
                            <option value="Kos"> Kos </option>
                            <option value="Asrama"> Asrama </option>
                            <option value="Panti Asuhan"> Panti Asuhan </option>
                            <option value="Lainnya"> Lainnya </option>
                            </select>
                            <span class="warning" ><?php echo $error_agama; ?></span>
                        </div>
                    </div> <br>

                    <div class="form-group row">
                        <label for="transport" class="col-sm-2 col-form-label "> Moda Transportasi </label>
                        <div class="col-sm-10">
                            <select class="col-sm-2 form-select" name="transport">
                            <option value=""></option>
                            <option value="Jalan Kaki"> Jalan Kaki </option>
                            <option value="Kendaraan Pribadi"> Kendaraan Pribadi </option>
                            <option value="Kendaraan Umum/Angkot/Pete-Pete"> Kendaraan Umum/Angkot/Pete-Pete </option>
                            <option value="Jemputan Sekolah"> Jemputan Sekolah </option>
                            <option value="Kereta Api"> Kereta Api </option>
                            <option value="Ojek"> Ojek </option>
                            <option value="Andong/Bedi/Sado/Dokar/Delman/Becak"> Andong/Bedi/Sado/Dokar/Delman/Becak </option>
                            <option value="Perahu Penyebrangan/Rakit/Getek"> Perahu Penyebrangan/Rakit/Getek </option>
                            <option value="Lainnya"> Lainnya </option>
                            </select>
                            <span class="warning" ><?php echo $error_agama; ?></span>
                        </div>
                    </div> <br>
                    
                    <div class="form-group row">
                        <label for="nohp" class="col-sm-2 col-form-label">Nomor HP</label>
                        <div class="col-sm-10">
                            <input type="text" name="nohp" id="nohp" class="form-control" <?php echo ($error_nohp !="" ? "is-invalid" : ""); ?>" placeholder="XX" value="<?php echo $nohp; ?>"> <span class="warning"><?php echo $error_nohp ?></span>
                        </div>
                    </div> <br>

                    <div class="form-group row">
                        <label for="notelp" class="col-sm-2 col-form-label">Nomor Telp</label>
                        <div class="col-sm-10">
                            <input type="text" name="notelp" id="notelp" class="form-control" <?php echo ($error_notelp !="" ? "is-invalid" : ""); ?>" placeholder="XX" value="<?php echo $notelp; ?>"> <span class="warning"><?php echo $error_notelp ?></span>
                        </div>
                    </div> <br>

                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email Pribadi</label>
                        <div class="col-sm-10">
                            <input type="text" name="email" id="email" class="form-control" <?php echo ($error_email !="" ? "is-invalid" : ""); ?>" placeholder="XX" value="<?php echo $email; ?>"> <span class="warning"><?php echo $error_email ?></span>
                        </div>
                    </div> <br>

                    <div class="form-group row">
                        <label for="kpspkh" class="col-sm-2 col-form-label">Penerima KPS/PKH/KIP</label>
                        <div class="col-sm-10">
                            <input type="radio" name="kpspkh" value="Ya">Ya</label>
                            <input type="radio" name="kpspkh" value="Tidak">Tidak</label> 
                            <span class="warning" ><?php echo $error_kpspkh; ?></span>
                        </div>
                    </div> <br>

                    <div class="form-group row">
                        <label for="nokpspkh" class="col-sm-2 col-form-label">Nomor KPS/PKH/KIP</label>
                        <div class="col-sm-10">
                            <input type="text" name="nokpspkh" id="nokpspkh" class="form-control" <?php echo ($error_nokpspkh !="" ? "is-invalid" : ""); ?>" placeholder="XX" value="<?php echo $nokpspkh; ?>"> <span class="warning"><?php echo $error_nokpspkh ?></span>
                        </div>
                    </div> <br>

                    <div class="form-group row">
                        <label for="appaud" class="col-sm-2 col-form-label">Kewarganegaraan</label>
                        <div class="col-sm-10">
                            <input type="radio" name="kwn" value="Indonesia (WNI)">Indonesia (WNI)</label>
                            <input type="radio" name="kwn" value="Asing (WNA)">Asing (WNA)</label> 
                            <span class="warning" ><?php echo $error_kwn; ?></span>
                        </div>
                    </div> <br>

                    <div class="form-group row">
                        <label for="namaneg" class="col-sm-2 col-form-label">Nama Negara</label>
                        <div class="col-sm-10">
                            <input type="text" name="namaneg" id="namaneg" class="form-control" <?php echo ($error_namaneg !="" ? "is-invalid" : ""); ?>" placeholder="" value="<?php echo $namaneg; ?>"> <span class="warning"><?php echo $error_namaneg ?></span>
                        </div>
                    </div>

                    <br>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" name="submit" class="btn btn-primary" >Submit</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>