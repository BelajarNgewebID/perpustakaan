<?php

$host_db = "localhost";
$user_db = "root";
$pass_db = "";
$nama_db = "perpus";

$konek = mysqli_connect($host_db,$user_db,$pass_db,$nama_db);
if(!$konek) {
	die('Gagal konek');
}

/* konfigurasi perpus */
$konfig['status'] = "dibuka";
/* Jika mau nutup perpus ganti saja menjadi "ditutup" */
$konfig['nama_perpus'] = "Asa Cendekia";
$konfig['deskripsi'] = "Perpustakaan yang khusus menyewakan buku porno";

if($konfig['status'] == "ditutup") {
	die('Perpustakaan tutup');
}

?>