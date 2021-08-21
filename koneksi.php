<?php
//variabel koneksi
$konek = mysqli_connect("localhost", "root", "", "coaching");

if (!$konek) {
    echo "Koneksi Database Gagal...!!!";
}
