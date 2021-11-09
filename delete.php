<?php
 include("koneksi.php");

 $id_pengguna= $_GET['id_pengguna'];

 $query ="delete from identitas where id_pengguna= $id_pengguna"; 


 if (mysqli_query($koneksi, $query)){
     header("Location: index.php");

 }else{
    header("Location: edit.php?id_pengguna= $id_pengguna");
     echo "gagal";
 }
 ?>