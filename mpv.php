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
      <a class="nav-item nav-link active" href="mpv.php">Data MPV</a>
      <a class="nav-item nav-link" href="penyewa.php">Data Penyewa</a>
    </div>
  </div>
</nav>

<head>
<title>Data MPV</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<h1>DATA MPV</h1>
<a href="mpv_create.php">Tambah Data</a>
<br>
<br><br>
<table border="1">
  <thead>
    <tr bgcolor="aqua">
      <th>ID MPV</th>
      <th>Nama MPV</th>
      <th>Merk MPV</th>
      <th>Tahun Pembuatan</th>
      <th>Aksi</th>
    </tr>
  </thead>
<tbody>

<?php
$result = $model->tampil_data_mpv();
if ( !empty($result) ) {
  foreach ($result as $data): ?>
    <tr>
      <td><?=$index++ ?></td>
      <td><?=$data->id_mpv ?></td>
      <td><?=$data->nama_mpv ?></td>
      <td><?=$data->merk_mpv ?></td>
      <td><?=$data->thn_pembuatan ?></td>
      <td><a name="edit_mpv" id="edit_mpv" href="mpv_edit.php?id=<?=$data->id_mpv ?>"><input type="button" value="Edit"></a>
      <a name="hapus_mpv" id="hapus_mpv" href="proses.php?id_mpv=<?=$data->id_mpv ?>"><input type="button" value="Delete"></a>
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