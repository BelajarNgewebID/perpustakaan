<?php
include 'konfig.php';
error_reporting(1);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale = 1">
	<meta name="description" content="<?php echo $konfig['deskripsi']; ?>">
	<title><?php echo $konfig['nama_perpus']; ?></title>
	<link href="../css/style.anggota.css" rel="stylesheet">
	<script type="text/javascript" src="../js/jquery-3.1.1.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$("#username").click(function() {
				$("#isiUsername").css({"font-size":"17px"});
				$("#username").css({"background":"none"});
				$("#isiUsername").animate({top: "21.5%"});
			});
			$("#password").click(function() {
				$("#isiPassword").css({"font-size":"17px"});
				$("#password").css({"background":"none"})
				$("#isiPassword").animate({top: "40%"});
			});
			$(".tblLoginAnggota").click(function() {
				var username = $("#username").val();
				var password = $("#password").val();
				var dataString = 'username='+username+'&password='+password;
				if(username == '') {
					$("#username").css({"background-color":"#e74c3c"});
					return false;
				}else if(password == '') {
					$("#password").css({"background-color":"#e74c3c"});
					return false;
				}else {
					$.ajax({
						type: "POST",
						url: "../aksi/aksi_loginAnggota.php",
						data: dataString,
						success: function(html) {
							document.location = './'+username;
						}
					});
					return false;
				}
			});
			$("#notif,#bgNotif").click(function() {
				$("#notif,#bgNotif").fadeOut(290);
			});
		});
	</script>
</head>
<body>

<div class="kontainerLogin">
	<h1>Login</h1>
	<form>
		<div id="isiUsername">Username...</div>
		<input type="text" name="username" id="username" class="logBox">
		<div id="isiPassword">Password...</div>
		<input type="password" name="password" id="password" class="logBox">
		<button class="tblLoginAnggota">LOGIN</button>
	</form>
</div>

<?php
$notif = $_COOKIE['notifLogin'];
$awaljs = '<script type="text/javascript">$("document").ready(function() {';
$akirjs = '});</script>';
if($notif != NULL) {
	echo $awaljs.'$("#notif,#bgNotif").fadeIn(1200);$("#isiNotif").html("'.$notif.'");'.$akirjs;
}
?>

<div id="bgNotif"></div>
<div id="notif">
	<h3>Notif</h3>
	<div id="isiNotif"></div>
</div>

</body>
</html>