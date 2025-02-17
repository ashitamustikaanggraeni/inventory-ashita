<?php
include '../../CONFIG/koneksi.php';

$id_barang = $_POST['id_barang'];
$nama_barang = $_POST['nama_barang'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$id_jenis = $_POST['id_jenis'];

$query = mysqli_query($conn, "
INSERT INTO barang VALUES('$id_barang','$nama_barang','$harga','$stok','$id_jenis')");

echo "<script>
alert('data berhasil disimpan');
window.location.href='index.php';
</script>";