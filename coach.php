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
                <h3>Nama Coach</h3>
            </div>

            <div class="card-body">

                <form action="" method="post" name="myform">
                    <div class="form-group">
                        <!-- get id  -->
                        <!-- save form edit method post -->
                        <?php
                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                            //simpan data edit
                            $murid = $_POST["murid"];
                            $sqlEdit = mysqli_query($konek, "SELECT * FROM murid WHERE id_coach='$murid'");
                            $sk = mysqli_fetch_array($sqlEdit);

                            echo "<script>document.location.href = 'murid.php?id_coach=$murid';</script>";
                        }
                        ?>
                        <select class="form-control" id="sel1" name="murid">
                            <option value="0" selected>Pilih</option>
                            <?php

                            $coach = mysqli_query($konek, "SELECT * FROM coach");
                            while ($sql = mysqli_fetch_array($coach)) {
                            ?>
                                <option value="<?= $sql['id_coach']; ?>"><?= $sql['coach']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
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




        frmvalidator.addValidation("murid", "dontselect=0", "Anda belum memilih Coach");
    </script>
</body>

</html>