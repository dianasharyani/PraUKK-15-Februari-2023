<?php
include("koneksi.php");
if(!isset($_GET['id_penyewa'])){
    header("location:tampil.php?");
}
$kode=$_GET['id_penyewa'];
$sql=("SELECT * FROM tb_penyewa INNER JOIN tb_dvd ON tb_penyewa.id_dvd = tb_dvd.id_dvd  where tb_penyewa.id_penyewa='$kode'");
$query = mysqli_query($koneksi,$sql);
$data = mysqli_fetch_assoc($query);

?>
<html>
    <head>
</head>
<body>
    <h1>Form Edit</h1>
    <a href="tampil.php"><input type="button" value="kembali"></a>
    <form action="proses_edit.php" method="POST">
    <fieldset>
        <input type="hidden" name="id_penyewa" value="<?php echo $data['id_penyewa']?>" />
            <p>
                <label for="nama_penyewa">Nama Penyewa :</label>
                <input type="text" name="nama_penyewa"  value="<?php echo $data['nama_penyewa']?>" />
            </p>

            <p>
                <label for="alamat">Alamat :</label>
                <input type="text" name="alamat"  value="<?php echo $data['alamat']?>" />
            </p>
            <p>
                <label for="genre_film">Genre Film:</label>
                <input type="text" name="genre_film"  value="<?php echo $data['genre_film']?>"/>
            </p>
            <p>
                <label for="judul_film">Judul Film : </label>
                <input type="text" name="judul_film" value="<?php echo $data['judul_film']?>" />
            </p>
            <p>
                <label for="tahun_film">Tahun Film : </label>
                <input type="number" name="tahun_film" value="<?php echo $data['tahun_film']?>" />
            </p>
            <p>
                <label for="tanggal_sewa">Tanggal Sewa : </label>
                <input type="date" name="tanggal_sewa" value="<?php echo $data['tanggal_sewa']?>" />
            </p>
            <p>
                <label for="tanggal_kembali">Tanggal Kembali : </label>
                <input type="date" name="tanggal_kembali" value="<?php echo $data['tanggal_kembali']?>" />
            </p>
            <p>
                <label for="harga">Harga : </label>
                <input type="number" name="harga" value="<?php echo $data['harga']?>" />
            </p>
            
            <p>
                <input type="submit" value="kirim" name="edit" />
            </p>
        </fieldset>
</form>
</body>
</html>