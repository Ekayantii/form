<?php
 include("koneksi.php");

 $id_pengguna= $_POST['id_pengguna'];
 $nama = $_POST['nama'];
 $noktp = $_POST['noktp'];
 $alamat = $_POST['alamat'];
 $notlpn = $_POST['notlpn'];
 $id_kapal = $_POST['id_kapal'];
 $jumlah_kapal = $_POST['jumlah_kapal'];
 $nama_kapal = $_POST['nama_kapal'];

 echo $nama;
 echo $noktp;
 echo $alamat;
 echo $notlpn;
 echo $id_kapal;
 echo $jumlah_kapal;
 echo $nama_kapal;

 $query ="update identitas set nama= '$nama', noktp= '$noktp', alamat ='$alamat', notlpn='$notlpn', id_kapal='$id_kapal', jumlah_kapal= '$jumlah_kapal', nama_kapal='$nama_kapal' where 
 id_pengguna = $id_pengguna";

 if (mysqli_query($koneksi, $query)){
     header("Location: index.php");

 }else{
    header("Location: edit.php?id_pengguna= $id_pengguna");
     echo "gagal";
 }