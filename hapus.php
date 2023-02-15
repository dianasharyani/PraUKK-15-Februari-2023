<?php
include("koneksi.php");
$kode = $_GET['id_penyewa'];

$sql= "DELETE FROM tb_penyewa where id_penyewa='$kode'";
$query = mysqli_query($koneksi, $sql);

$sql= "DELETE FROM tb_dvd where id_dvd='$kode'";
$query = mysqli_query($koneksi, $sql);

if($query){
    header("location:tampil.php?status=sukses");
}else{
    die("akses dilarang");  
}
?>