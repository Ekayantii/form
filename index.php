<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include ("koneksi.php");

$query = "select * from identitas";
$hasil = mysqli_query($koneksi, $query);
?>

<h1> Tambah Identitas</h1>
<form action="proses_insert.php" method="POST">
    Nama: <input type="text" name="nama" value=""><br/>
    No.KTP: <input type="text" name="noktp" value=""><br/>
    Alamat: <textarea name="alamat"></textarea><br/>
    No.Telepon : <input type="text" name="notlpn" value=""><br/>
    Id Kapal : <input type="text" name="id_kapal" value=""><br/>
    Jumlah kapal : <input type="text" name="jumlah_kapal" value=""><br/>
    Nama Kapal : <input Type="text" name="nama_kapal" value=""><br/>
    ID User: <input type="text" name="id_user" value=""><br/>
    <input type="submit" value="simpan">
</form>
<br>


<h1> Table identitas</h1>


<table border="1">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>No.KTP</th>
        <th>Alamat</th>
        <th>No.Telepon</th>
        <th>Id kapal</th>
        <th>Jumlah Kapal</th>
        <th>Nama Kapal</th>
        <th colspan="2">Aksi</th>
    </tr>
        

<?php
while($row = mysqli_fetch_array($hasil)){
    echo"<tr>";
    echo"<td> ".$row['id_pengguna']."</td>";
    echo"<td> ".$row['nama']."</td>";
    echo"<td> ".$row['noktp']."</td>";
    echo"<td> ".$row['alamat']."</td>";
    echo"<td> ".$row['notlpn']."</td>";
    echo"<td> ".$row['id_kapal']."</td>";
    echo"<td> ".$row['jumlah_kapal']."</td>";
    echo"<td> ".$row['nama_kapal']."</td>";
    echo"<td><a href='edit.php?id_pengguna=".$row['id_pengguna']."'>edit</a></td>";
    echo"<td><a href='delete.php?id_pengguna=".$row['id_pengguna']."'>delete</a></td>";
    echo"</tr>";
}


?>  
</body>
</html>

