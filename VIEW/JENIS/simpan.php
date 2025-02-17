<?php
include '../../CONFIG/koneksi.php';

$id_jenis = $_POST['id_jenis'];
$nama_jenis= $_POST['nama_jenis'];

$query = mysqli_query($conn, "
INSERT INTO jenis VALUES('$id_jenis','$nama_jenis')
");

echo "<script>
alert('data berhasil disimpan');
window.location.href='index.php';
</script>";