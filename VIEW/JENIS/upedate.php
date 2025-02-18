<?php
include '../../CONFIG/koneksi.php';
$id=$_GET['id'];
$id_jenis = $_POST['id_jenis'];
$nama_jenis = $_POST['nama_jenis'];

$query = mysqli_query($conn, 
"update jenis set nama_jenis='$nama_jenis' 
where id_jenis='$id'");

echo "<script>
alert('data berhasil disimpan');
window.location.href='index.php';
</script>";