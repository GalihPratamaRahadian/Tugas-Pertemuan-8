<?php
    include 'Connection.php';
    class Model extends Connection
{

    public function __construct()
{
    $this->conn = $this->get_connection();
}
    
//tabel mpv
    public function insert_mpv($id_mpv, $nama_mpv, $merk_mpv, $thn_pembuatan)
{
    $sql = "INSERT INTO tb_mpv (id_mpv, nama_mpv, merk_mpv, thn_pembuatan) 
    VALUES ('$id_mpv', '$nama_mpv', '$merk_mpv', '$thn_pembuatan')";
    $this->conn->query($sql);
}

    public function tampil_data_mpv()
{
    $sql = "SELECT * FROM tb_mpv";
    $bind = $this->conn->query($sql);
    while ($obj = $bind->fetch_object()) { 
    $baris[] = $obj;
}
    if(!empty($baris)){
    return $baris;
}
}


    public function edit_mpv($id)
{
    $sql = "SELECT * FROM tb_mpv WHERE id_mpv='$id'";
    $bind = $this->conn->query($sql);
    while ($obj = $bind->fetch_object()) {
    $baris = $obj;
}
    return $baris;
}

    
    public function update_mpv($id_mpv, $nama_mpv, $merk_mpv, $thn_pembuatan)
{
    $sql = "UPDATE tb_mpv SET nama_mpv='$nama_mpv', merk_mpv='$merk_mpv', thn_pembuatan='$thn_pembuatan' WHERE id_mpv='$id_mpv'";
    $this->conn->query($sql);
}
    public function delete_mpv($mpv_id)
{ 
    $sql = "DELETE FROM tb_mpv WHERE id_mpv='$mpv_id'";
    $this->conn->query($sql);
}


//tabel penyewa

public function insert_penyewa($id_penyewa, $id_mpv, $nama_penyewa, $telp, $alamat)
{
	$sql = "INSERT INTO tbl_penyewa (id_penyewa, id_mpv, nama_penyewa, telp, alamat) 
	VALUES ('$id_penyewa', '$id_mpv','$nama_penyewa', '$email', '$telp')";
	$this->conn->query($sql);
}
public function tampil_data_penyewa()
{
	 $sql = "SELECT * FROM tbl_penyewa";
	 $bind = $this->conn->query($sql);
	 while ($obj = $bind->fetch_object()) { 
	 	$baris[] = $obj;
	 }
	 if(!empty($baris)){
	 	return $baris;
	 }
}
public function edit_penyewa($id)
{
	 $sql = "SELECT * FROM tbl_penyewa WHERE id_penyewa='$id'";
	 $bind = $this->conn->query($sql);
	 while ($obj = $bind->fetch_object()) {
		 $baris = $obj;
	 }
	 return $baris;
}
public function update_penyewa($id_penyewa, $id_mpv, $nama_penyewa, $telp, $alamat)
{
	 $sql = "UPDATE tbl_penyewa SET id_mpv='$id_mpv', nama_penyewa='$nama_penyewa', telp='$telp', alamat='$alamat' WHERE id_penyewa='$id_penyewa'";
	 $this->conn->query($sql);
}
public function delete_penyewa($penyewa_id)
{ 
	$sql = "DELETE FROM tbl_penyewa WHERE id_penyewa='$penyewa_id'";
	$this->conn->query($sql);
}

//tabel join
public function tampil_data()
{
    $sql="SELECT tbl_penyewa.*, nama_penyewa, telp, alamat FROM tbl_penyewa INNER JOIN tb_mpv ON tbl_penyewa.id_mpv = tb_mpv.id_mpv";
    $bind = $this->conn->query($sql);
    while ($obj = $bind->fetch_object()) {
        $baris = $obj;
    }
    if(!empty($baris)){
    return $baris;
}
}
}