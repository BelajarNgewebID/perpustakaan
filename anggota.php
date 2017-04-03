<?php
session_start();
$sesi = $_SESSION['sesiperpus'];
if(empty($sesi)) {
	header("location: ./login");
}
include 'konfig.php';
$sql = mysqli_query($konek, "SELECT * FROM anggota WHERE username = '$sesi'");
$row = mysqli_fetch_array($sql);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale = 1">
	<meta name="description" content="<?php echo $konfig['deskripsi']; ?>">
	<title><?php echo $row['nama']." | ".$konfig['nama_perpus']; ?></title>
	<link href="../css/style.anggota.css" rel="stylesheet">
	<script type="text/javascript" src="../js/jquery-3.1.1.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			var username = $("#hiddenUsername").val();
			$("#kontenDasbor").load("../inc/pinjaman_saya.php");
			$("#tbl1").click(function() {
				$("#kontenDasbor").load("../inc/edit_akun.php");
			});
		});
	</script>
</head>
<body>
<input type="hidden" id="hiddenUsername" value="<?php echo $row['username']; ?>">

<div class="atas">
	<div class="judul"><?php echo $row['nama']; ?></div>
</div>
<div class="menuKiri">
	<li id="tbl1">Edit Akun</li>
	<li>Pinjaman Saya</li>
	<li>Lihat Katalog</li>
	<li>Keluar</li>
</div>

<div id="kontenDasbor"></div>

</body>
</html>