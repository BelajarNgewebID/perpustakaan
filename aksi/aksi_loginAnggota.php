<?php

include '../konfig.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = mysqli_query($konek, "SELECT * FROM anggota WHERE username = '$username' AND password = '$password'");
$login = mysqli_num_rows($sql);
if($login != 0) {
	session_start();
	$_SESSION['sesiperpus']=$username;
	header("location: ../anggota/$username");
}else {
	setcookie('notifLogin','Username / Passsword Salah!',time() + 65, "/");
}

?>
