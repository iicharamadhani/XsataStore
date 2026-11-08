<h2>Edit Produk</h2>

<?php 
include 'koneksi.php';

$id = $_GET['id'];
$query = mysqli_query($dbconnect, "SELECT * FROM `produk` WHERE id = $id ");
$tampil = mysqli_fetch_assoc($query);
?>

<form action="prosesedit.php" method="post">
    <div class="mb-3">
        
        <label class="form-label mt-2">ID Produk</label>
        <input name="id" type="text" class="form-control shadow-sm" value="<?php echo $tampil['id']; ?>" readonly>
        
        <label class="form-label mt-2">Nama Produk</label>
        <input name="produk" type="text" class="form-control shadow-sm" value="<?php echo $tampil['nama_produk']; ?>" required>
        
        <label class="form-label mt-2">Harga</label>
        <input name="harga" type="number" class="form-control shadow-sm" value="<?php echo $tampil['harga']; ?>" required>
        
        <label class="form-label mt-2">Gambar</label>
        <input name="gambar" type="text" class="form-control shadow-sm" value="<?php echo $tampil['gambar']; ?>" required>

        <label class="form-label mt-2">Stok</label>
        <input name="stok" type="number" class="form-control shadow-sm" value="<?php echo $tampil['stok']; ?>" required>
        
        
        <label class="form-label mt-2">Kategori</label>
        <input name="kategori" type="text" class="form-control shadow-sm" value="<?php echo $tampil['kategori']; ?>" required>

        <input name="simpan" class="btn btn-primary shadow-sm mt-4" type="submit" value="Simpan">
    </div>
</form>