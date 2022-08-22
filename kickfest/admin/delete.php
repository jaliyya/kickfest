<?php
    include '../koneksi.php';
  if(isset($_GET['kode'])){
    mysqli_query($koneksi,"DELETE from tiket where kode='$_GET[kode]'");

    header("Location:../admin/index.php");
  }
  ?>