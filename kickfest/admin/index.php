<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <link href="../style.css" rel="stylesheet" type="text/css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KICKFEST</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
        crossorigin="anonymous"
    />
    <link
      rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>  
  </head>
  <style>
    body{
      background-color: black;
    }
  </style>

  <body>
  <nav
      class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">KICKFEST.</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarText"
          aria-controls="navbarText"
          aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-right" id="navbarText">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#datatiket">Data Tiket</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../admin/tambah.php">Tambah</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../admin/cari.php">Cari Tiket</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../logout.php">Logout</a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>
     
  
  <div class="container-fluid banner">
      <div class="container text-center">
        <a href="#datatiket">
          <button type="button" class="btn btn-danger btn-lg">
            Cek Layanan
          </button>
        </a>
      </div>
  </div>

  <div class="container-tiket text-center">
        <h2 class="display-3" id="datatiket">DATA TIKET</h2>
          <div class="container text-center">
          <table class="table table-striped-columns">
          <tr>
            <th><p>No</p></th>
            <th><p>kode</p></th>
            <th><p>Nama</p></th>
            <th><p>Aksi</p></th>
          </tr>
          <tr>
            <?php
              include '../koneksi.php';
               
              $no=1;
              $ambildata=mysqli_query($koneksi,"SELECT *FROM tiket");
              while($tampil=mysqli_fetch_array($ambildata)){
                  $kode = $tampil['kode'];
                  $nama = $tampil['nama'];

            ?>
            <td><p><?php echo $no++ ?></p></td>
            <td><p><?php echo $kode?></p></td>
            <td><p><?php echo $nama?><p></td>
            <td scope="row">
              <a href='edit.php?kode=<?php echo $tampil['kode'];?>'><button type="button" class="btn btn-warning">Edit</button></a>
              <a href="delete.php?kode=<?php echo $tampil['kode']?>" onclick="return confirm('Yakin mau delete data?')"><button type="button" class="btn btn-danger">Delete</button></a>            
            </td>
          </tr>
          <?php
              };
           ?>
        </table>
          </div>
  </div>
   
  <div class="container-tiket text-center pt-5 pb-5">
      <p>All Rights Reserved &copy; 2021
    </div>
            </body>

    

</html>

