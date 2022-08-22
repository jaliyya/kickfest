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

  </head>
<body>    
  <link rel="stylesheet" href="../style.css" />
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

    <div class="container" style="padding-top:70px ;">
    <form class="d-flex" method="POST" action="">
      <input class="form-control me-2" type="text" placeholder="Search" name="query" aria-label="Search">
      <button class="btn btn-outline-success" type="submit" name="cari">Search</button>
    </form>
    

    <div class="container-tiket text-center">
        <h2 class="display-3" id="datatiket">CARI DATA TIKET</h2>
          <div class="container text-center">
          <table class="table table-striped-columns">
          <tr>
            <th><p>No</p></th>
            <th><p>kode</p></th>
            <th><p>Nama</p></th>
           
          </tr>
          <tr>
            <?php
              include '../koneksi.php';
                error_reporting(0);
              $cari=$_POST['query'];
              if($cari != ''){
                $ambildata=mysqli_query($koneksi,"select *from tiket where kode like '".$cari."' or nama like '".$cari."' ");
              }else{
                $ambildata=mysqli_query($koneksi,"select *from tiket");
              }
              $no=1;
              
              if(mysqli_num_rows($ambildata)){
              while($tampil=mysqli_fetch_array($ambildata)){

            ?>
            <td><p><?php echo $no++ ?></p></td>
            <td><p><?php echo $tampil['kode']?></p></td>
            <td><p><?php echo $tampil['nama']?><p></td>
          </tr>
          <?php
              }}else{
                echo'
                <td colspan="3"><p>TIDAK ADA DATA</p></td>';
              };
           ?>
        </table>
          </div>
  </div>
    </div>




</body>
</html>