<?php
if( empty( $_SESSION['id_user'] ) ){

	$_SESSION['err'] = '<strong>ERROR!</strong> Anda harus login terlebih dahulu.';
	die();
} else {
	if( isset( $_REQUEST['aksi'] )){
		$aksi = $_REQUEST['aksi'];
		switch($aksi){
			case 'baru':
				include 'about.php';
				break;
			case 'baru':
				include 'music.php';
				break;
			case 'baru':
				include 'index.php';
				break;
			case 'baru':
				include 'store.php';
				break;
		}
	} else {

		echo '

			<div class="container">
				<h3 style="margin-bottom: -20px;">Daftar Transaksi</h3>
					<a href="./admin.php?hlm=transaksi&aksi=baru" class="btn btn-success btn-s pull-right">Tambah Data</a>
				<br/><hr/>

				<table class="table table-bordered">
				 <thead>
				   <tr class="info">
					 <th width="5%">Number</th>
					 <th width="10%">Number Music</th>
					 <th width="20%">Code Music</th>
					 <th width="20%">Judul Music</th>
					 <th width="10%">Harga VVIP</th>
					 <th width="10%">Tanggal</th>
					 <th width="20%">Tindakan</th>
				   </tr>
				 </thead>
				 <tbody>';

			//skrip untuk menampilkan data dari database
		 	$sql = mysqli_query($koneksi, "SELECT * FROM transaksi");
		 	if(mysqli_num_rows($sql) > 0){
		 		$no = 0;

				 while($row = mysqli_fetch_array($sql)){
	 				$no++;
	 			echo '

				   <tr>
					 <td>'.$no.'</td>
					 <td>'.$row['Code_Music'].'</td>
					 <td>'.$row['Judul Music'].'</td>
					 <td>'.$row['Generate'].'</td>
					 <td>RP. '.number_format($row['total']).'</td>
					 <td>'.date("d M Y", strtotime($row['tanggal'])).'</td>
					 <td>

					<script type="text/javascript" language="JavaScript">
					  	function konfirmasi(){
						  	tanya = confirm("Anda yakin akan menghapus data ini?");
						  	if (tanya == true) return true;
						  	else return false;
						}
					</script>


					 <a href="?hlm=transaksi&aksi=edit&id_transaksi='.$row['id_transaksi'].'" class="btn btn-warning btn-s">Edit</a>

					 <a href="?hlm=transaksi&aksi=hapus&submit=yes&id_transaksi='.$row['id_transaksi'].'" onclick="return konfirmasi()" class="btn btn-danger btn-s">Hapus</a>

					 </td>';
				}
			} else {
				 echo '<td colspan="8"><center><p class="add">Tidak ada data untuk ditampilkan. <u><a href="?hlm=transaksi&aksi=baru">Tambah data baru</a></u> </p></center></td></tr>';
			}
			echo '
			 	</tbody>
			</table>
		</div>';
	}
}
?>
