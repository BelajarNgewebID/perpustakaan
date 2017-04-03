<?php
$id = $_GET['id'];
include 'konfig.php';
$sql = mysqli_query($konek, "SELECT * FROM buku WHERE idbuku = '$id'");
$row = mysqli_fetch_array($sql);
echo $row['judul'];
?>