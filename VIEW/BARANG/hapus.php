<?php

$id_barang = $_GET['id'];

include '../../CONFIG/koneksi.php';

$query = mysqli_query($conn, "DELETE FROM barang WHERE id_barang='$id_barang'");

if($query){
    echo "<script>alert('Data berhasil di hapus')</script>";
    echo "<script>(window.location.href='index.php')</script>";
}else{
    echo "<script>alert('Data gagal di hapus')</script>";
    echo "<script>(window.location.href='index.php')</script>";
}
