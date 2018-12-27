<?php 
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['Hak_akses']==""){
		header("location:login.php?pesan=gagal");
	}

  ?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Business Casual - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/business-casual.min.css" rel="stylesheet">

  </head>

  <body>

    <h1 class="site-heading text-center text-white d-none d-lg-block">
      <span class="site-heading-upper text-primary mb-3">HALO MAHASISWA!!</span>
      <span class="site-heading-lower">WELCOME TO MEUTIA MUSIC</span>
    </h1>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
      <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item active px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="about.php">About</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="music.php">MUSIC</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="store.php">Store</a>
              </li>
            
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    

    <section class="page-section about-heading">
      <div class="container">
        <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="img/22.jpg" alt="">
        <div class="about-heading-content">
          <div class="row">
            <div class="col-xl-9 col-lg-10 mx-auto">
              <div class="bg-faded rounded p-5">
                <h2 class="section-heading mb-4">
                
<script>
function validateForm() {
    var nama = document.forms["form"]["nama"].value;
    var email = document.forms["form"]["email"].value;    
    var nomor = document.forms["form"]["nomor"].value;    
    var pesan = document.forms["form"]["pesan"].value;
    if (nama == "") {
        alert("nama Tidak Boleh Kosong");
        return false;
    }
    if (email == "") {
        alert("email Tidak Boleh Kosong");
        return false;
    }
    if (nomor == "") {
        alert("nomor Tidak Boleh Kosong");
        return false;
    }
    if (pesan == "") {
        alert("pesan Tidak Boleh Kosong");
        return false;
    }    

}
</script>
<div class="container">
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
            

               
                <div class="clearfix"></div>
            </div>
        </div>
		<div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
            
                    <h2 class="intro-text text-center">
                        <strong> Lokasi Kami</strong>
                    </h2>
                   
                    <hr>
                </div>
                <div class="col-md-8">
                    <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! --><div style="width: 100%"><iframe width="100%" height="600" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=Jl.%20Raden%20Panji%20Suroso%20Purwodadi%20Blimbing%20Kota%20Malang%2C%20Jawa%20Timur%2065126%2C%20Indonesia+(Cinema%20XXI%20Plaza%20Araya)&amp;ie=UTF8&amp;t=&amp;z=16&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/create-google-map/">Google map generator</a></iframe></div><br />
                </div>
                <div class="col-md-4">
                    <p>Phone:
                        <strong>+6282246619492</strong>
                    </p>
                    <p>Email:
                        <strong><a href="mailto:name@example.com">MEUTIA MUSIC</a></strong>
                    
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>Kritik Dan Saran</strong>
                    </h2>
                    <hr>

                    <form role="form" action="KonfirmA.php" id="form_validation" method="POST" name="form" onsubmit="return validateForm()">
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label>Name</label>
                                <input type="text" class="form-control" name="nama">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Email </label>
                                <input type="email" class="form-control" name="email">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Nomor Telepon</label>
                                <input type="number" class="form-control" name="nomor">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label>Pesan</label>
                                <textarea class="form-control" rows="6" name="pesan"></textarea>
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="hidden" name="save" value="contact">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>
 
    <footer class="footer text-faded text-center py-5">
      <div class="container">
        <p class="m-0 small">Copyright &copy; Your Website 2018</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
