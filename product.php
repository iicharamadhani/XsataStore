<?php 
include 'koneksi.php';
$querytampil = "SELECT * FROM produk";
$tampilkandata = mysqli_query($dbconnect, $querytampil);
?>

<div class="mb-3">
    <h3 class="h2">Data Produk</h3>
    <h6>Selamat Datang di Halaman Produk!</h6>
    <a href="index.php?pages=addproduct" class="btn btn-success btn fs-6 mt-2">Add Product</a>
</div>

<div class="table-responsive small">
    <table class="table table-striped table-hover align-middle">
        <thead class="table-light border-top">
            <tr>
                <th scope="col" style="width: 5%;">Id</th>
                <th scope="col" style="width: 25%;">Nama Produk</th>
                <th scope="col" style="width: 15%;">Harga</th>
                <th scope="col" style="width: 20%;">Gambar</th>
                <th scope="col" style="width: 10%;">Stok</th>
                <th scope="col" style="width: 10%;">Kategori</th>
                <th scope="col" style="width: 15%;">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tampilkandata as $tampil) { ?>
            <tr>
                <td><?= $tampil['id']; ?></td>
                <td><?= $tampil['nama_produk']; ?></td>
                <td>Rp <?= number_format($tampil['harga'], 0, ',', '.'); ?></td>
                <td><?= $tampil['gambar']; ?></td>
                <td><?= $tampil['stok']; ?></td>
                <td><?= $tampil['kategori']; ?></td>
                <td>
                    <a href="index.php?pages=editproduct&id=<?php echo $tampil['id']; ?>" class="btn btn-warning btn-sm">Edit</a> | 
                    <form class="d-inline" action="proseshapus.php?id=<?php echo $tampil['id']; ?>" method="post">
                        <input type="submit" class="btn btn-danger btn-sm" name="hapus" value="hapus"
                        onclick="return confirm('Apakah anda yakin menghapus data ini?')">
                    </form>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>