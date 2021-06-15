<?php
include 'model.php';

//tabel mpv
if (isset($_POST['submit_simpan_mpv'])) {
$id_mpv = $_POST['id_mpv']; 
$nama_mpv = $_POST['nama_mpv'];
$merk_mpv = $_POST['merk_mpv'];
$thn_pembuatan = $_POST['thn_pembuatan'];
$model = new Model();
$model->insert($id_mpv, $nama_mpv,  $merk_mpv, $thn_pembuatan);
header('location:mpv.php');
}
if (isset($_POST['submit_edit_mpv'])) {
$id_mpv = $_POST['id_mpv']; 
$nama_mpv = $_POST['nama_mpv'];
$merk_mpv = $_POST['merk_mpv'];
$thn_pembuatan = $_POST['thn_pembuatan'];
$model = new Model();
$model->update($id_mpv, $nama_mpv,  $merk_mpv, $thn_pembuatan);
header('location:mpv.php');
}
if (isset($_GET['mpv_id'])) {
$id = $_GET['mpv_id'];
$model = new Model();
$model->delete($id_mpv);
header('location:mpv.php');
}

//tabel penyewa
if (isset($_POST['submit_simpan_penyewa'])) {
    $id_penyewa = $_POST['id_penyewa'];
    $id_mpv = $_POST['id_mpv'];
    $nama_penyewa = $_POST['nama_penyewa'];
    $tlp = $_POST['tlp'];
    $alamat = $_POST['alamat'];
    $model = new Model();
    $model->insert_penyewa($id_penyewa, $id_mpv, $nama, $tlp, $alamat);
    header('location:penyewa.php');
   }
   if (isset($_POST['submit_edit_penyewa'])) {
    $id_penyewa = $_POST['id_penyewa'];
    $id_mpv = $_POST['id_mpv'];
    $nama_penyewa = $_POST['nama_penyewa'];
    $tlp = $_POST['tlp'];
    $alamat = $_POST['alamat'];
    $model = new Model();
    $model->update_penyewa($id_penyewa, $id_mpv, $nama, $tlp, $alamat);
    header('location:penyewa.php');
   }
   if (isset($_GET['penyewa_id'])) {
    $id = $_GET['penyewa_id'];
    $model = new Model();
    $model->delete_penyewa($id);
    header('location:penyewa.php');
   }
   
   //tabel join
   if (isset($_POST['submit_simpan_penyewa'])) {
    $id_penyewa = $_POST['id_penyewa'];
    $id_mpv = $_POST['id_mpv'];
    $nama_penyewa = $_POST['nama_penyewa'];
    $tlp = $_POST['tlp'];
    $alamat = $_POST['alamat'];
    $model = new Model();
    $model->insert_penyewa($id_penyewa, $id_mpv, $nama, $tlp, $alamat);
    header('location:penyewa.php');
   }
   if (isset($_POST['submit_edit_penyewa'])) {
    $id_penyewa = $_POST['id_penyewa'];
    $id_mpv = $_POST['id_mpv'];
    $nama_penyewa = $_POST['nama_penyewa'];
    $tlp = $_POST['tlp'];
    $alamat = $_POST['alamat'];
    $model = new Model();
    $model->update_penyewa($id_penyewa, $id_mpv, $nama, $tlp, $alamat);
    header('location:penyewa.php');
   }
   if (isset($_GET['penyewa_id'])) {
    $id = $_GET['penyewa_id'];
    $model = new Model();
    $model->delete_penyewa($id);
    header('location:penyewa.php');
}