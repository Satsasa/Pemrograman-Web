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
    $error_nopendaftaran = "";
    $error_jenispend = "";
    $error_tglmsksklh = "";
    $error_nis = "";
    $error_nopesujian = "";
    $error_appaud = "";
    $error_aptk = "";
    $error_noserskhun = "";
    $error_noserijazah = "";
    $error_hobi = "";
    $error_citacita = "";

    $nopendaftaran = "";
    $jenispend = "";
    $tglmsksklh = "";
    $nis = "";
    $nopesujian = "";
    $appaud = "";
    $aptk = "";
    $noserskhun = "";
    $noserijazah = "";
    $hobi = "";
    $citacita = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["nis"])) {
            $error_nis = "NIS Tidak Boleh Kosong";
        } else {
            $nis = cek_input($_POST["nis"]);
            if (!is_numeric($nis)) {
                $error_nis = "NIS Hanya Boleh Angka";
            }
        }

        if (empty($_POST["nopesujian"])) {
            $error_nopesujian = "No Peserta Ujian Tidak Boleh Kosong";
        } else {
            $nopesujian = cek_input($_POST["nopesujian"]);
            if (!is_numeric($nopesujian)) {
                $error_nopesujian = "Nomor Peserta Ujian Hanya Boleh Angka";
            }
        }

        if (empty($_POST["noserskhun"])) {
            $error_noserskhun = "Nomor Seri SKHUN Tidak Boleh Kosong";
        } else {
            $noserskhun = cek_input($_POST["noserskhun"]);
            if (!is_numeric($noserskhun)) {
                $error_noserskhun = "Nomor Seri SKHUN Hanya Boleh Angka";
            }
        }

        if (empty($_POST["noserijazah"])) {
            $error_noserijazah = "No Seri Ijazah Tidak Boleh Kosong";
        } else {
            $noserijazah = cek_input($_POST["noserijazah"]);
            if (!is_numeric($noserijazah)) {
                $error_noserijazah = "Nomor Seri Ijazah Hanya Boleh Angka";
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
                    1. FORM REGISTRASI
                </div>
                <div class="card-body">
                    <form method="post" action="registrasi.php">

                    <div class="form-group row">
                        <label for="namanopendaftaran" class="col-sm-2 col-form-label">No. Pendaftaran</label>
                        <div class="col-sm-10">
                            <input type="text" name="nopendaftaran" id="nopendaftaran" class="form-control <?php echo ($error_nopendaftaran !="" ? "is-invalid" : ""); ?>" placeholder="" value="<?php echo $nopendaftaran; ?>"> <span class="warning"><?php echo $error_nopendaftaran ?></span>
                        </div>
                    </div>
                    
                    <br>
                    <div class="form-group row">
                        <label for="jenispend" class="col-sm-2 col-form-label">Jenis Pendaftaran</label>
                        <div class="col-sm-10">
                            <input type="radio" name="jenispend" value="Siswa Baru">Siswa Baru</label>
                            <input type="radio" name="jenispend" value="Pindahan">Pindahan</label> 
                            <span class="warning" ><?php echo $error_jenispend; ?></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="web" class="col-sm-2 col-form-label">Tanggal Masuk Sekolah</label>
                        <div class="col-sm-10">
                            <input type="text" name="tglmsksklh" id="tglmsksklh" class="form-control <?php echo ($error_tglmsksklh !="" ? "is-invalid" : ""); ?>" placeholder="XX - Bulan - XXXX" value="<?php echo $tglmsksklh; ?>"> <span class="warning"><?php echo $error_tglmsksklh ?></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nis" class="col-sm-2 col-form-label">NIS</label>
                        <div class="col-sm-10">
                            <input type="text" name="nis" id="nis" class="form-control <?php echo ($error_nis !="" ? "is-invalid" : ""); ?>" placeholder="Nomor Induk Siswa" value="<?php echo $nis; ?>"> <span class="warning"><?php echo $error_nis ?></span>
                        </div>
                    </div> <br>

                    <div class="form-group row">
                        <label for="nopesujian" class="col-sm-2 col-form-label">Nomor Peserta Ujian</label>
                        <div class="col-sm-10">
                            <input type="text" name="nopesujian" id="nopesujian" class="form-control <?php echo ($error_nopesujian !="" ? "is-invalid" : ""); ?>" placeholder="No Peserta Ujian" value="<?php echo $nopesujian; ?>"> <span class="warning"><?php echo $error_nopesujian ?></span>
                        </div>
                    </div>
                    
                    <br>
                    <div class="form-group row">
                        <label for="appaud" class="col-sm-2 col-form-label">Apakah Pernah Paud</label>
                        <div class="col-sm-10">
                            <input type="radio" name="appaud" value="Ya">Ya</label>
                            <input type="radio" name="appaud" value="Tidak">Tidak</label> 
                            <span class="warning" ><?php echo $error_appaud; ?></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="aptk" class="col-sm-2 col-form-label">Apakah Pernah TK</label>
                        <div class="col-sm-10">
                            <input type="radio" name="aptk" value="Ya">Ya</label>
                            <input type="radio" name="aptk" value="Tidak">Tidak</label> 
                            <span class="warning" ><?php echo $error_aptk; ?></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="noserskhun" class="col-sm-2 col-form-label">No. Seri SKHUN Sebelumnya</label>
                        <div class="col-sm-10">
                            <input type="text" name="noserskhun" id="noserskhun" class="form-control <?php echo ($error_noserskhun !="" ? "is-invalid" : ""); ?>" placeholder="SKHUN Sebelumnya" value="<?php echo $noserskhun; ?>"> <span class="warning"><?php echo $error_noserskhun ?></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="noserijazah" class="col-sm-2 col-form-label">No. Seri Ijazah Sebelumnya</label>
                        <div class="col-sm-10">
                            <input type="text" name="noserijazah" id="noserijazah" class="form-control <?php echo ($error_noserijazah !="" ? "is-invalid" : ""); ?>" placeholder="Seri Ijazah Sebelumnya" value="<?php echo $noserijazah; ?>"> <span class="warning"><?php echo $error_noserijazah ?></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="hobi" class="col-sm-2 col-form-label "> Hobi </label>
                        <div class="col-sm-10">
                            <select class="col-sm-2 form-select" name="hobi">
                            <option value=""></option>
                            <option value="Olahraga"> Olahraga </option>
                            <option value="Kesenian"> Kesenian</option>
                            <option value="Membaca"> Membaca</option>
                            <option value="Menulis"> Menulis </option>
                            <option value="Traveling"> Traveling </option>
                            <option value="Lainnya"> Lainnya </option>
                            </select>
                            <span class="warning" ><?php echo $error_hobi; ?></span>
                        </div>
                    </div>

                    <br>
                    <div class="form-group row">
                        <label for="citacita" class="col-sm-2 col-form-label "> Cita Cita </label>
                        <div class="col-sm-10">
                            <select class="col-sm-2 form-select" name="citacita">
                            <option value=""></option>
                            <option value="PNS"> PNS </option>
                            <option value="TNI/POLRI"> TNI/POLRI</option>
                            <option value="Guru/Dosen"> Guru/Dosen</option>
                            <option value="Dokter"> Dokter </option>
                            <option value="Politikus"> Politikus </option>
                            <option value="Wiraswasta"> Wiraswasta </option>
                            <option value="Seni/Lukis/Artis/Sejenis"> Seni/Lukis/Artis/Sejenis </option>
                            <option value="Lainnya"> Lainnya </option>
                            </select>
                            <span class="warning" ><?php echo $error_citacita; ?></span>
                        </div>
                    </div>

                    <br>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" name="submit" class="btn btn-primary" class = "btn">Next</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>