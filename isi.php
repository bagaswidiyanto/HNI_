<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script language="JavaScript" src="validjs.js" type="text/javascript"></script>

    <?php include 'koneksi.php'; ?>
</head>

<body>

    <div class="container" style="margin-left: 450px">
        <h2>Laporan Coaching Program</h2>
        <div class="card" style="max-width: 50rem;">
            <div class="card-header" style="background-color: rgb(103, 58, 183);">
                <?php
                $sql = mysqli_query($konek, "SELECT * FROM murid WHERE id_murid='$_GET[id_murid]'");
                $d = mysqli_fetch_array($sql);
                ?>
                <h3 class="text-white"><?= $d['murid']; ?></h3>

            </div>

            <div class="card-body">

                <form action="" method="post" name="myform">
                    <?php
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                        $idIsi      = $_POST['id_isi'];
                        $tanggal   = $_POST['tanggal'];
                        $sesi      = $_POST['sesi'];
                        $soal1     = $_POST['soal1'];
                        $soal2     = $_POST['soal2'];
                        $soal3     = $_POST['soal3'];
                        $soal4     = $_POST['soal4'];
                        $idMurid    = $_POST['id_murid'];



                        //simpan data
                        $simpan = mysqli_query(
                            $konek,
                            "INSERT INTO `isi` (`id_isi`,`tanggal`, `sesi`, `soal1`, `soal2`, `soal3`, `soal4`,`id_murid`) 
                                                                VALUES ('$idIsi','$tanggal', '$sesi', '$soal1', '$soal2', '$soal3', '$soal4', '$idMurid')"
                        );

                        echo "<script>document.location.href = 'nilai.php?id_coach=$_GET[id_coach]&id_murid=$_GET[id_murid]&id_isi=$idIsi';</script>";
                    }

                    //membuat ID Isi
                    $today           = "";
                    $query           = mysqli_query($konek, "SELECT max(id_isi) AS last FROM isi WHERE id_isi LIKE '$today%'");
                    $data            = mysqli_fetch_array($query);
                    $lastNoBayar     = $data['last'];
                    $lastNoUrut      = substr($lastNoBayar, 0, 1);
                    $nextNoUrut      = $lastNoUrut + 1;
                    $nextNoIsi = $today . sprintf('%01s', $nextNoUrut);
                    ?>
                    <input type="hidden" class="form-control" name="id_murid" value="<?= $d['id_murid']; ?>">
                    <input type="text" class="form-control" name="id_isi" value="<?= $nextNoIsi; ?>">
                    <h4><?php if (isset($rataRata)) {
                            echo ($rataRata);
                        } ?></h4>
                    <div class="form-group">
                        <label>Tanggal:</label>
                        <input type="date" class="form-control" name="tanggal">
                    </div>
                    <div class="form-group">
                        <label>Sesi ke (Isikan Angka) :</label>
                        <input type="number" class="form-control" name="sesi" placeholder="Jawaban Anda">
                    </div>
                    <label for="">Komunikasi dan Respon Sebelum Coaching</label>
                    <br>
                    <label for="" style="margin-right: 20px;">Buruk</label>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="soal1" value="1" readonly>1
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="soal1" value="2" readonly>2
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="soal1" value="3" readonly>3
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="soal1" value="4" readonly>4
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="soal1" value="5" readonly>5
                        </label>
                    </div>
                    <label for="">Benar</label>
                    <br>
                    <label for="">Kehadiran Setiap Sesi </label>
                    <br>
                    <label for="" style="margin-right: 20px;">Buruk</label>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="soal2" value="1" readonly>1
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="soal2" value="2" readonly>2
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="soal2" value="3" readonly>3
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="soal2" value="4" readonly>4
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="soal2" value="5" readonly>5
                        </label>
                    </div>
                    <label for="">Benar</label>
                    <br>
                    <label for="">Effort Proses Coaching (Keseriusan Responsive saat Coaching) </label>
                    <br>
                    <label for="" style="margin-right: 20px;">Buruk</label>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="soal3" value="1" readonly>1
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="soal3" value="2" readonly>2
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="soal3" value="3" readonly>3
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="soal3" value="4" readonly>4
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="soal3" value="5" readonly>5
                        </label>
                    </div>
                    <label for="">Benar</label>
                    <br>
                    <label for="">Komitment melakukan Action Plan</label>
                    <br>
                    <label for="" style="margin-right: 20px;">Buruk</label>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="soal4" value="1" readonly>1
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="soal4" value="2" readonly>2
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="soal4" value="3" readonly>3
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="soal4" value="4" readonly>4
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="soal4" value="5" readonly>5
                        </label>
                    </div>
                    <label for="">Benar</label><br>
                    <a href="murid.php?id_coach=<?= $_GET['id_coach']; ?>" class="btn btn-sm btn-flat btn-warning">Kembali</a>
                    <button type="submit" class="btn btn-sm btn-flat btn-primary">Berikutnya</button>
                </form>
                <div id='myform_errorloc' style='color:red'>
                </div>
            </div>
        </div>
    </div>
    <script language="JavaScript" type="text/javascript">
        //You should create the validator only after the definition of the HTML form
        var frmvalidator = new Validator("myform");
        frmvalidator.EnableOnPageErrorDisplaySingleBox();
        frmvalidator.EnableMsgsTogether();

        frmvalidator.addValidation("sesi", "req", "Sesi belum di isi");



        frmvalidator.addValidation("soal1", "selone", "anda belum memilih Soal 1");
        frmvalidator.addValidation("soal2", "selone", "anda belum memilih Soal 2");
        frmvalidator.addValidation("soal3", "selone", "anda belum memilih Soal 3");
        frmvalidator.addValidation("soal4", "selone", "anda belum memilih Soal 4");
    </script>
</body>

</html>