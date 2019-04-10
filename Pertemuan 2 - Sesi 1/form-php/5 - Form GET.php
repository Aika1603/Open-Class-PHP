<!DOCTYPE html>
<html>
<head>
	<title>Form GET</title>
	<style type="text/css">
		label, input, button {
			display:block;
			margin-top: 10px;
		}
	</style>
</head>
<body>

	<form method="get">

		<label for="nama">Nama : </label>
		<input type="text" name="nama">

		<label for="password">Password : </label>
		<input type="password" name="password">

		<label for="kelas">Kelas : </label>
		<input type="text" name="kelas">

		<label for="fakultas">Fakultas : </label>
		<input type="text" name="fakultas">

		<button type="submit">Kirim</button> 

	</form><br><br>

	<?php var_dump($_GET); ?>

</body>
</html>