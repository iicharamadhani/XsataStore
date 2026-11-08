<?php 
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $id       = $_POST['id'];
    $produk   = mysqli_real_escape_string($dbconnect, $_POST['produk']);
    $harga    = $_POST['harga'];
    $stok     = $_POST['stok'];
    $gambar   = mysqli_real_escape_string($dbconnect, $_POST['gambar']);
    $kategori = mysqli_real_escape_string($dbconnect, $_POST['kategori']);

    $query = "UPDATE `produk` SET 
                `nama_produk` = '$produk', 
                `harga`       = '$harga', 
                `stok`        = '$stok', 
                `gambar`      = '$gambar', 
                `kategori`    = '$kategori' 
              WHERE `id` = '$id'";

    mysqli_query($dbconnect, $query);

    header('Location: index.php?pages=produk');
    exit();
}
?>