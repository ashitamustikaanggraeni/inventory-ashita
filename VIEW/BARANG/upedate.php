<?php
include '../../CONFIG/koneksi.php';
$id=$_GET['id'];
$id_barang = $_POST['id_barang'];
$nama_barang = $_POST['nama_barang'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$id_jenis = $_POST['id_jenis'];

$query = mysqli_query($conn, 
"update barang set nama_barang='$nama_barang',harga='$harga',stok='$stok',id_jenis='$id_jenis' 
where id_barang='$id'");

echo "<script>
alert('data berhasil disimpan');
window.location.href='index.php';
</script>";