<?php
$host       = "localhost";
$user       = "root";
$pass       = "";
$db         = "kickfest";

$koneksi    = mysqli_connect($host, $user, $pass, $db);


if ($koneksi) {
    echo "";
}else{ //cek koneksi
    echo ("Tidak bisa terkoneksi ke database");
}