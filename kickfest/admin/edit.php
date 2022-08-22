<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
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
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../style.css">

    <style>
      body{
        background-color: black;
      }
    </style>
  </head>

 <body>
    
    <!-- navigasi -->
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
              <a class="nav-link" href="../admin/index.php">Data Tiket</a>
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
    <?php
        include '../koneksi.php';
        
        $id = $_GET['kode'];
        $ambildata = mysqli_query($koneksi,"select *from tiket where kode='$id'");
        $data = mysqli_fetch_array($ambildata);     

    ?>
    <div class="container" style="padding-top: 70px;">
      <div class="card" style="width: 40rem;">
        <h2 class="card-header" >Edit Tiket</h2>
          <div class="card-body">
          <form method="POST" action="">
              <div class="mb-3 row">
                  <label for="kode" class="form-label">Kode</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="kode" name="kode" value="<?php echo $data['kode'];?>">
                  </div>
              </div>
              <div class="mb-3 row">
                  <label for="nama" class="form-label">Nama</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data['nama'];?>">
                  </div>
              </div>
              <button type="submit" class="btn btn-primary" name="simpan">SIMPAN</button>
          </form>
          </div>
      </div>
    </div>
  

    <div class="container-tiket text-center pt-5 pb-5">
        <p>All Rights Reserved &copy; 2021
    </div>
      

  </body>
</html>

<?php
    $id=$_GET['kode'];
   if(isset($_POST['simpan'])){
    $kode1 = $_POST['kode'];
    $nama1 = $_POST['nama'];
    
    mysqli_query($koneksi,"Update tiket set kode='$kode1' , nama='$nama1' where kode='$id'");

  

    header("Location:../admin/index.php");
  }



?>