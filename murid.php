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
                $sql = mysqli_query($konek, "SELECT * FROM coach WHERE id_coach='$_GET[id_coach]'");
                $d = mysqli_fetch_array($sql);
                ?>
                <h3 class="text-white"><?= $d['coach']; ?></h3>
            </div>

            <div class="card-body">

                <form action="" method="post" name="myform">
                    <div class="form-group">
                        <!-- get id  -->
                        <!-- save form edit method post -->
                        <?php
                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                            //simpan data edit
                            $idMurid = $_POST["id_murid"];
                            $idCoach = $_GET["id_coach"];
                            $sqlEdit = mysqli_query($konek, "SELECT * FROM murid WHERE id_murid='$idMurid'");
                            $sk = mysqli_fetch_array($sqlEdit);

                            echo "<script>document.location.href = 'isi.php?id_coach=$idCoach&id_murid=$idMurid';</script>";
                            // echo $sk['murid'];
                        }
                        ?>
                        <select class="form-control" id="sel1" name="id_murid">
                            <option value="0">Pilih</option>
                            <?php
                            $murid = $_POST["murid"];
                            $coach = mysqli_query($konek, "SELECT * FROM murid WHERE id_coach='$_GET[id_coach]'");
                            while ($sql = mysqli_fetch_array($coach)) {
                            ?>
                                <option value="<?= $sql['id_murid']; ?>"><?= $sql['murid']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <a href="coach.php" class="btn btn-sm btn-flat btn-warning">Kembali</a>
                    <button type="submit" class="btn btn-sm btn-flat btn-primary">Berikutnya</button>
                </form>
                <div id='myform_errorloc' style='color:red'>

                </div>
            </div>
        </div>
        <script language="JavaScript" type="text/javascript">
            //You should create the validator only after the definition of the HTML form
            var frmvalidator = new Validator("myform");
            frmvalidator.EnableOnPageErrorDisplaySingleBox();
            frmvalidator.EnableMsgsTogether();




            frmvalidator.addValidation("id_murid", "dontselect=0", "Anda belum memilih Murid");
        </script>
</body>

</html>