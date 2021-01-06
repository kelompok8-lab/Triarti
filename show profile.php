<?php

include "koneksi.php";

$sql = "SELECT * FROM profil";
$result = $connect->query($sql);

foreach ($result as $result) {
	$nama=$result["nama"];
	$username=$result["username"];
	$alamat=$result["alamat"];
	$profesi=$result["profesi"];
	$no_telp=$result["no_telp"];
	$email=$result["email"];
}
?>