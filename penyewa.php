<?php
include 'model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">

<<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="join.php">Data Rental MPV<span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="mpv.php">Data MPV</a>
      <a class="nav-item nav-link active" href="penyewa.php">Data Penyewa</a>
    </div>
  </div>
</nav>

<head>
<title>Data Penyewa</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<h1>Penyewa</h1>
<a href="penyewa_create.php">Tambah Data</a>
<br><br>
<table border="1">
  <thead>
    <tr bgcolor="aqua">
      <th>No.</th>
      <th>Id Penyewa</th>
      <th>Id MPV</th>
      <th>Nama Penyewa</th>
      <th>Telp</th>
      <th>Alamat</th>
      <th>Aksi</th>
    </tr>
  </thead>
<tbody>

<?php
$result = $model->tampil_data_penyewa();
if ( !empty($result) ) {
  foreach ($result as $data): ?>
    <tr>
      <td><?=$index++ ?></td>
      <td><?=$data->id_penyewa ?></td>
      <td><?=$data->id_mpv ?></td>
      <td><?=$data->nama_penyewa ?></td>
      <td><?=$data->telp ?></td>
      <td><?=$data->alamat ?></td>
      <td><a name="edit_penyewa" id="edit_penyewa" href="penyewa_edit.php?id=<?=$data->id_penyewa ?>"><input type="button" value="Edit"></a>
      <a name="hapus_penyewa" id="hapus_penyewa" href="proses.php?id_mpv=<?=$data->id_penyewa ?>"><input type="button" value="Delete"></a>
      </td>
    </tr>
<?php 
endforeach;
}else{ 

?>
<tr>
<td colspan="9">Maaf Data Belum Dimasukan.</td>
</tr>
<?php 

} 

?>
</tbody>
</table>
</div>
</body>
</html>