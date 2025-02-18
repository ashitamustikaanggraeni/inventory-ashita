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

    <h1>Halaman Tambah Data Jenis</h1>
    <form action="simpan.php" method="POST">
        <label for="">id_jenis</label>
        <input type="text" name="id_jenis">
        <br>
        <label for="">nama_jenis</label>
        <input type="text" name="nama_jenis">
        <br>
        <button type="submit" class="btn btn-success"><i class="fa-solid fa-bookmark"></i>Simpan</button>
    </form>
</body>
</html>