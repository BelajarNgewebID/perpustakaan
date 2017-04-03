<?php
$id = $_GET['id'];
include 'konfig.php';
$sql = mysqli_query($konek, "SELECT * FROM buku WHERE idbuku = '$id'");
$row = mysqli_fetch_array($sql);
echo $row['judul'];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale = 1">
    <title><?php echo $row['judul']." | ".$konfig['nama_perpus']; ?></title>
    <script type=" text/javascript" src="../js/jquery-3.1.1.js"></script>
    <style type="text/css">
      body { background-color:#ecf0f1; }
    </style>
  </head>
<body>
  
  </body>
</html>
