<?php 

if (isset($_POST['simpan'])) {
    $produk = $_POST["produk"];
    $harga = $_POST["harga"];
    $stok = $_POST["stok"];
    $gambar = $_POST["gambar"];
    $kategori = $_POST["kategori"];

    include 'koneksi.php';
    $query = "INSERT INTO `produk`
    (`id`, `nama_produk`, `harga`, `gambar`, `stok`, `kategori`) 
    VALUES (NULL, '$produk', '$harga', '$gambar', '$stok', '$kategori'); ";

    mysqli_query($dbconnect, $query);
    header('Location:index.php?pages=produk');
}

?>