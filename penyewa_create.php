<!doctype html>
<html lang="en">
<head>
	<title>Tambah Penyewa</title>
</head>

<body>
	<h1>Tambah Data Penyewa</h1>
	<a href="penyewa.php">Kembali</a>
	<br><br>
	<form action="proses.php" method="post">
		<label>Id Penyewa</label>
		<br>
		<input type="text" name="id_penyewa">
		<br>
		<label>Id MPV</label>
		<br>
		<input type="text" name="id_mpv">
		<br>
		<label>Nama Penyewa</label>
		<br>
		<input type="text" name="nama_penyewa">
		<br>
		<label>Telp</label>
		<br>
		<input type="number" name="telp">
		<br>
		<label>Alamat</label>
		<br>
		<input type="text" name="alamat">
		<br><br>
		<button type="submit" name="submit_simpan_penyewa">Submit</button>
		<button type="reset">Reset</button>
	</form>
</body>
</html>