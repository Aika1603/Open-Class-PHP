<?php

require_once 'config/database.php'; //memanggil konfigurasi db

//select data
  $result = $mysqli->query("SELECT * FROM mahasiswa WHERE NPM='".$_GET["NPM"]."'");
  $row = $result->fetch_assoc();
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Form Update</title>
	<style type="text/css">
		label, input, button {
			display:block;
			margin-top: 10px;
		}
	</style>
</head>
<body>
  <h1>Form Update</h1>
	<form method="post" action="update.php">


    <label for="NPM">NPM : </label>
    <input type="text" name="NPM" value="<?php echo $row['NPM'];?>">

    <label for="nama">Nama : </label>
		<input type="text" name="nama" value="<?php echo $row['nama'];?>">

		<label for="kelas">Kelas : </label>
		<input type="text" name="kelas" value="<?php echo $row['kelas'];?>">

		<label for="fakultas">Fakultas : </label>
		<input type="text" name="fakultas" value="<?php echo $row['fakultas'];?>">

		<button type="submit">Kirim</button>

	</form><br><br>



</body>
</html>
