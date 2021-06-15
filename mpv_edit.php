<?php
$id = $_GET['id'];
include 'model.php';
$model = new Model();
$data = $model->edit_mpv($id_mpv);
?>

<!doctype html>
<html lang="en">

<head>
	<title>Edit Absen Mahasiswa</title>
</head>

<body>
	<h1>Edit Absen Mahasiswa</h1>
	<a href="mpv.php">Kembali</a>
	<br><br>
	<form action="proses.php" method="post">
		<label>Id MPV</label>
		<br>
		<input type="text" name="id" value="<?php echo $data->id_mpv ?>">
		<br>
		<label>Nama MPV</label>
		<br>
		<input type="text" name="mhs_id" value="<?php echo $data->nama_mpv ?>">
		<br>
		<label>Merk MPV</label>
		<br>
		<input type="text" name="matkul_id" value="<?php echo $data->merk_mpv ?>">
		<br><label>Tahun Pembuatan</label>
		<br>
		<input type="time" name="waktu_absen" value="<?php echo $data->thn_pembuatan ?>">
		<br><br>
		<button type="submit" name="submit_edit_mpv">Submit</button>
	</form>
</body>
</html>