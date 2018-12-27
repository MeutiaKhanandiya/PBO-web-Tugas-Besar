<?php
$music = mysqli_connect("localhost", "root", "", "users");

function query($sql){
	global $music;
	$exe = mysqli_query($music ,$sql);

	while($data = mysqli_fetch_array($exe)) {
		$row[]=$data;
	}
	return $row;
}

function cari($keyboard){
	$sql="SELECT * FROM about WHERE 
		  codemusic LIKE '%$keyboard%' OR
		  judulmusic LIKE '%$keyboard%' OR 
		  deskripsi LIKE '%$keyboard%' OR 
		  generate LIKE '%$keyboard%' OR 
		  gambar LIKE '%$keyboard%'
		  ";  
	return query($sql); 
}
?>