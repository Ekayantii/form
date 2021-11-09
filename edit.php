<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>

<?php
include ("koneksi.php");
$id_pengguna = $_GET['id_pengguna'];

$query = "select * from identitas where id_pengguna = $id_pengguna";
$hasil = mysqli_query($koneksi, $query);
$row = mysqli_fetch_assoc($hasil);
?>
    <h1> Edit Data</h1>
    <form action="proses_edit.php" method="POST">
        <input type="hidden" name="id_pengguna" value="<?php echo $row['id_pengguna'];?>">
        Nama : <input type="text" name="nama" value="<?php echo $row['nama'];?>"></br>
        No.KTP : <input type="text" name="noktp" value="<?php echo $row['noktp'];?>"><br>
        Alamat : <textarea name="alamat"><?php echo $row['alamat']; ?></textarea></br>
        No.Telepon : <input type="text" name="notlpn" value="<?php echo $row['notlpn'];?>"><br>
        Id Kapal : <input type="text" name="id_kapal" value="<?php echo $row['id_kapal'];?>"><br>
        Jumlah Kapal : <input type="text" name="jumlah_kapal" value="<?php echo $row['jumlah_kapal'];?>"><br>
        Nama Kapal : <input type="text" name="nama_kapal" value="<?php echo $row['nama_kapal'];?>"><br>
        <input type="submit" value="simpan">
    </form>
</body>
</html>