<?php include 'Head.php'; ?>
<?php include 'array.php'; ?>
	<?php

$nama = $_POST['nama'];
$email = $_POST['email'];
$nomor = $_POST['nomor'];
$pesan = $_POST['pesan'];


?>
	<div class="container">
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>Kritik dan Saran Anda Telah Terkirim</strong>
                    </h2>
                    <hr>
                    <h4 style="font-size: 15px;">Kritik Dan Saran Dari : <?php echo $nama;?></h4>
                    <h4 style="font-size: 15px;"><?php echo $pesan;?></h4>
                </div>
            </div>
        </div>
    </div>  
<?php include 'Footer.php'; ?>
