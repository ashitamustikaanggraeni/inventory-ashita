<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

</head>
<body>
    <?php
     $id=$_GET['id'];
    ?>
    <h1>Halaman Edit Data Barang</h1>
    <form action="upedate.php?id=<?php echo $id?>" method="POST">
    <?php
            include '../../CONFIG/koneksi.php';
            $query=mysqli_query($conn, "SELECT * FROM barang where id_barang=$id");
            $result=mysqli_fetch_array($query);
            ?>
        <label for="">id_barang</label>
        <input type="text" name="id_barang" value="<?php echo $result['id_barang']?>">
        <br>
        <label for="">nama_barang</label>
        <input type="text" name="nama_barang" value="<?php echo $result['nama_barang']?>">
        <br>
        <label for="">harga</label>
        <input type="text" name="harga" value="<?php echo $result['harga']?>">
        <br>
        <label for="">stok</label>
        <input type="text" name="stok" value="<?php echo $result['stok']?>">
        <br>
        <label for="">id_jenis</label>
        <input type="text" name="id_jenis" value="<?php echo $result['id_jenis']?>">
        <br>
        <button type="submit" class="btn btn-warning"><i class="fa-solid fa-share-from-square"></i>Simpan</button>
    </form>
</body>
</html>