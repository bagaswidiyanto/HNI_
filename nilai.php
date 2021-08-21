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
    <?php include 'koneksi.php'; ?>
</head>

<body>



    <div class="container">
        <h3>Nilai Rata-Rata</h3>
        <div class="card" style="max-width: 50rem;">
            <div class="card-header" style="background-color: rgb(103, 58, 183);">
                <?php
                $sql = mysqli_query($konek, "SELECT * FROM isi INNER JOIN murid USING(id_murid)  WHERE id_isi = '$_GET[id_isi]' AND id_murid='$_GET[id_murid]'");
                $r = mysqli_fetch_array($sql);
                ?>
                <h3 class="text-white"><?= $r['murid']; ?></h3>

            </div>
            <div class="card-body">

                <table>
                    <thead>
                        <tr>
                            <th>Soal 1</th>
                            <th>=</th>
                            <th width="30px"><?= $r['soal1']; ?></th>
                            <th rowspan="2" width="200px">
                                <?php
                                $s1 = $r['soal1'];
                                $s2 = $r['soal2'];
                                $s3 = $r['soal3'];
                                $s4 = $r['soal4'];

                                $total = $s1 + $s2 + $s3 + $s4;
                                $rata = $total / 4;
                                echo 'Rata-Rata = ' . $rata;

                                ?>
                            </th>
                        </tr>
                        <tr>
                            <th>Soal 2</th>
                            <th>=</th>
                            <th><?= $r['soal2']; ?></th>
                        </tr>
                    </thead>
                    <tr>
                        <th>Soal 3</th>
                        <th>=</th>
                        <th><?= $r['soal3']; ?></th>
                        <th rowspan="2">
                            Status =
                            <?php
                            if ($rata >= 3.1) {
                                echo "Lulus";
                            } elseif ($rata < 3.1 && $rata >= 3) {
                                echo "Pendampingan";
                            } elseif ($rata < 3 && $rata >= 1) {
                                echo "Tidak Lulus";
                            }
                            ?>
                        </th>
                    </tr>
                    <tr>
                        <th>Soal 4</th>
                        <th>=</th>
                        <th><?= $r['soal4']; ?></th>
                    </tr>
                </table>
            </div>
        </div>
        <a href="isi.php?id_coach=<?= $_GET['id_coach']; ?>&id_murid=<?= $_GET['id_murid']; ?>" class="btn btn-sm btn-flat btn-warning">Kembali</a>
    </div>

</body>

</html>