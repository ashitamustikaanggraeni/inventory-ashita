<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "db_inventorybarang"
);

//cek koneksi
if(!$conn){
    die("Connection is fail" . mysqli_connect_error());
}