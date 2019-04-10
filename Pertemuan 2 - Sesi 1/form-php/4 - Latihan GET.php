<?php 

$mahasiswa = [
	[
		"npm" => "16235",
		"nama" => "Budhi",
		"kelas" => "e",
		"fakultas" => "ilmu komputer"

	],
	[
		"npm" => "16000",
		"nama" => "Diki",
		"kelas" => "b",
		"fakultas" => "teknik industri"
	]
];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Daftar mahasiswa</title>
</head>
<body>

	
	<ol>
		<?php foreach ($mahasiswa as $mhs): ?>
			<li>
				<a href="4 - Latihan GET.php?
				npm=<?= $mhs["npm"] ?>&
				nama=<?= $mhs["nama"] ?>&
				kelas=<?= $mhs["kelas"] ?>&
				fakultas=<?= $mhs["fakultas"] ?>&
				">
					<?= $mhs["nama"] ?>
				</a>
			</li>
		<?php endforeach ?>
	</ol>

	<ul>
		<li><?= $_GET["npm"] ?></li>
		<li><?= $_GET["nama"] ?></li>
		<li><?= $_GET["kelas"] ?></li>
		<li><?= $_GET["fakultas"] ?></li>
	</ul>


</body>
</html>