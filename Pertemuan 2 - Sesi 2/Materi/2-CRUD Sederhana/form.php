<!DOCTYPE html>
<html>
<head>
	<title>Form Tambah</title>
	<style type="text/css">
		label, input, button {
			display:block;
			margin-top: 10px;
		}
	</style>
</head>
<body>
<h1>Form Insert</h1>
	<form method="post" action="insert.php">

    <label for="NPM">NPM : </label>
    <input type="text" name="NPM">

    <label for="nama">Nama : </label>
		<input type="text" name="nama">

		<label for="kelas">Kelas : </label>
		<input type="text" name="kelas">

		<label for="fakultas">Fakultas : </label>
		<input type="text" name="fakultas">

		<button type="submit">Kirim</button>

	</form><br><br>



</body>
</html>
