<?php
$id = $_GET['id'];
include 'model.php';
$model = new Model();
$data = $model->edit_penyewa($id_penyewa);
?>

<!doctype html>
<html lang="en">

<head>
	<title>Edit Penyewa</title>
</head>

<body>
	<h1>Edit Data Penyewa</h1>
	<a href="penyewa.php">Kembali</a>
	<br><br>
	<form action="proses.php" method="post">
		<label>Id Penyewa</label>
		<br>
		<input type="text" name="id_penyewa" value="<?php echo $data->id_penyewa ?>">
		<br>
		<label>Id MPV</label>
		<br>
		<input type="text" name="id_mpv" value="<?php echo $data->id_mpv ?>">
		<br>
		<label>Nama Penyewa</label>
		<br>
		<input type="text" name="nama_penyewa" value="<?php echo $data->nama_penyewa ?>">
		<br>
		<label>Telp</label>
		<br>
		<input type="number" name="telp" value="<?php echo $data->telp ?>">
		<br>
		<label>Alamat</label>
		<br>
		<input type="text" name="alamat" value="<?php echo $data->alamat ?>">
		<br><br>
		<button type="submit" name="submit_edit_penyewa">Submit</button>
	</form>
</body>
</html>