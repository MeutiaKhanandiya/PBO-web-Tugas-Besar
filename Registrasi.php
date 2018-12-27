<?php
 require 'functions.php';

if(isset($_POST["submit"]))
{
    if(registrasi($_POST)>0)
    {
        echo "
        <script>
        alert('data berhasil disimpan');
        document.location.href = 'login.php';
        </script>
        ";
    }else
    
    {
        echo mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en" id="home">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>PERPUSTAKAAN</title>

  <!-- Favicons -->
  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">

</head>
<section class="about" id="about" method="post">
    <div class="container">
          <form class="form-login"  method="post">
        <h2 class="form-login-heading">Daftar Akun</h2>
        <div class="login-wrap">
          <input name="Nama" type="Nama" id="Nama" class="form-control" placeholder="Nama" autofocus>
          <br>
          <input name="Username" type="Username" id="Username" class="form-control" placeholder="Username">
           <br>
          <input name="Password" type="Password" id="Password" class="form-control" placeholder="Password">
          <br>
          <input name="Hak_akses" type="Hak_akses" id="Hak_akses" class="form-control" placeholder="Mahasiswa/Admin">
          <label class="checkbox">
            </label>
          <button class="btn btn-theme btn-block" name="submit" type="submit" ></i>Daftar</button>
          
      </div>
    </form>
  </div>
</section>
    
    
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
  <script type="text/javascript" src="lib/jquery.backstretch.min.js"></script>
  <script>
    $.backstretch("img/login.jpg", {
      speed: 500
    });
  </script>
</body>

</html>
