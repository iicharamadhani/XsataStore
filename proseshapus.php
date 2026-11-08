<?php 

if (isset($_POST['hapus'])) {
    $id = $_GET['id'];
    include 'koneksi.php';
    $query = "DELETE FROM produk WHERE `produk` . `id` = $id";

    mysqli_query($dbconnect, $query);
    header('Location:index.php?pages=produk');
}

?>