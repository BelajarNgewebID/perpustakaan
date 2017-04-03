<?php
include 'konfig.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale = 1">
	<meta name="description" content="<?php echo $konfig['deskripsi']; ?>">
	<title><?php echo $konfig['nama_perpus']; ?></title>
	<link href="css/style.index.css" rel="stylesheet">
	<script type="text/javascript" src="js/jquery-3.1.1.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
</head>
<body>

<div class="konten">
	<h1>Perpustakaan "<?php echo $konfig['nama_perpus']; ?>"</h1>
	<button class="tblAnggota">Saya Anggota</button>
	<button class="tblPetugas">Saya Petugas</button>
</div>

</body>
</html>