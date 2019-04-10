<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Aplikasi CRUD</title>
  </head>
  <body>
    <h1>Formulir Data Mahasiswa</h1>
    <form class="" action="insert.php" method="post">
      <label>NPM :</label><br/>
      <input type="text" name="npm" required placeholder="">
      <br/>
      <label>Nama :</label><br/>
      <input type="text" name="nama" required placeholder="">
      <br/>
      <label>Kelas :</label><br/>
      <input type="text" name="kelas" required placeholder="">
      <br/>
      <label>Fakultas :</label><br/>
      <input type="text" name="fakultas" required placeholder="">

      <br/><hr/>
      <button type="submit">Simpan</button><br/>
      <a href="index.php">Lihat Semua Data </a>
    </form>
  </body>
</html>
