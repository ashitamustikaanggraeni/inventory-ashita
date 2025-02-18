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
    <h1>Halaman Tambah Data Barang</h1>
    <form action="simpan.php" method="POST">
        <label for="">id_barang</label>
        <input type="text" name="id_barang">
        <br>
        <label for="">nama_barang</label>
        <input type="text" name="nama_barang">
        <br>
        <label for="">harga</label>
        <input type="text" name="harga">
        <br>
        <label for="">stok</label>
        <input type="text" name="stok">
        <br>
        <label for="">id_jenis</label>
        <input type="text" name="id_jenis">
        <br>
        <button type="submit" class="btn btn-success"><i class="fa-solid fa-cart-arrow-down"></i>Simpan</button>
    </form>
</body>
</html>