<!doctype html>
<html lang="en">
<head>
	<title>Tambah MPV</title>
</head>

<body>
	<h1>Tambah Stok MPV</h1>
	<a href="mpv.php">Kembali</a>
	<br><br>
	<form action="proses.php" method="post">
		<label>Id MPV</label>
		<br>
		<input type="text" name="id_mpv">
		<br>
		<label>Nama MPV</label>
		<br>
		<input type="text" name="nama_mpv"><br>
		<label>Merk MPV</label>
		<br>
		<input type="text" name="merk_mpv">
		<br>
		<label>Tahun Pembuatan</label>
		<br>
		<input type="number" name="thn_pembuatan">
		<br>
		<br>
		<button type="submit" name="submit_simpan_mpv">Submit</button>
		<button type="reset">Reset</button>
	</form>
</body>
</html>