<style type="text/css">
	tr:nth-child(odd) {
		background: #3498db;
	}
	tr:nth-child(even) {
		background: #2980b9;
	}
	tr a { color: #fff; }
	td { height: 36px; }
	tr { height: 48px;color: #fff; }
	th {
		background: #ecf0f1;
		color: #666;
	}
</style>
<div class="boxKonten" id="pinjaman" style="oveflow-x:auto;">
<h1>Pinjaman Saya</h1>

<?php
include '../konfig.php';
function kembali($waktu) {
	$hitung = $waktu / 60 / 60 / 24;
	$pecah = explode(".", $hitung);
	return $pecah[0];
}
session_start();
$sesi = $_SESSION['sesiperpus'];

$sql = mysqli_query($konek, "SELECT * FROM anggota WHERE username = '$sesi'");
$row = mysqli_fetch_array($sql);

$query = mysqli_query($konek, "SELECT * FROM pinjam WHERE idanggota = '{$row['idanggota']}'");
if(mysqli_num_rows($query) == 0) {
	echo "Anda tidak meminjam buku apapun. <a href='katalog.php'>Pinjam Sekarang!</a>";
}else { ?>
	<table>
		<tr>
			<th id="idpin">ID Pinjam</th><th id="buk">Buku</th><th id="tglpin">Tgl Pinjam</th><th id="tglkem">Tgl Kembali</th>
			<th id="dl">Kembali</th>
		</tr>
		<?php
		while($pinjam = mysqli_fetch_array($query)) {
			$s = mysqli_query($konek, "SELECT * FROM buku WHERE idbuku = '{$pinjam['idbuku']}'");
			$buku = mysqli_fetch_array($s);
			$dl = $pinjam['kembali_int'] - $pinjam['pinjam_int'];
			echo "<tr>".
				 "<td>{$pinjam['idpinjam']}</td>".
				 "<td><a href='../buku/{$buku['idbuku']}'>{$buku['judul']}</a></td>".
				 "<td>{$pinjam['tgl_pinjam']}</td>".
				 "<td>{$pinjam['tgl_kembali']}</td>".
				 "<td>".kembali($dl)." hari</td>".
				 "</tr>";
		}
		?>
	</table>
<?php }
?>

</div>