<?php
    include "koneksi.php";

    $koneksi    = mysqli_connect($host, $user, $pass, $db);

    if(isset($_POST['login'])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        $query    = mysqli_query($koneksi,"SELECT * FROM user WHERE username = '$username' AND password = '$password'");
            if(mysqli_num_rows($query)!==0){
                $get=mysqli_fetch_array($query);
                $level= $get['hak_akses'];
                  
                    if($level=="admin"){
                        header("Location:../kickfest/admin/index.php");
                    } 
                    elseif($level=="user"){
                        header("Location:../kickfest/user/user-index.php");
                    }
            }else{
                echo"tidak ada";
            }

        }else{
    }

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <title>KICKFEST</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body background="background.jfif">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <div class="container-login">
        <div class="card" style="width: 20rem;">
            <div class="card-body">
                <h5 class="card-title">LOGIN</h5>
                <form method="POST" action="">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="username" class="form-control" id="username" name="username">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary" name="login">LOGIN</button>
                </form>
            </div>
        </div>
    </div>
 </body>
</html>