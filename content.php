<?php 

if(isset($_GET['pages'])){
    $page = $_GET['pages'];
} else {
    $page="dashboard";
}
$halaman = [
    "dashboard" => "pages/dashboard.php",
    "produk" => "pages/product.php",
    "orders" => "pages/order.php",
    "customers" => "pages/customers.php",
    "reports" => "pages/reports.php",
    "integrations" => "pages/integrations.php",
    "addproduct" => "pages/tambah.php",
    "editproduct" => "pages/editdata.php"
];
if(isset($halaman[$page])){
    require $halaman[$page];
}else{
    echo "<h2>Halaman tidak ditemukan</h2>";
}

?>