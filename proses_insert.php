<?php
 include("koneksi.php");

 $nama= $_POST['nama'];
 $noktp=$_POST['noktp'];
 $alamat= $_POST['alamat'];
 $notlpn=$_POST['notlpn'];
 $id_kapal=$_POST['id_kapal'];
 $jumlah_kapal=$_POST['jumlah_kapal'];
 $nama_kapal=$_POST['nama_kapal'];
 $id_user= $_POST['id_user'];

 $query ="insert into identitas values ('', '$nama', '$noktp', '$alamat', '$notlpn', '$id_kapal', '$jumlah_kapal, '$nama_kapal, '$id_user')";


 if (mysqli_query($koneksi, $query)){
     header("Location: index.php");

 }else{
    header("Location: edit.php?id_pengguna= $id_pengguna");
     echo "gagal";
 }
 ?>