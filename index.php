<?php
include 'koneksi.php'; 
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XsataStore - admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body { font-size: 16px; }
        .sidebar { min-height: 100vh; background-color: #f8f9fa; border-right: 1px solid #dee2e6; }
        .sidebar .nav-link { color: #333; font-weight: 500; }
        .sidebar .nav-link.active { color: #0d6efd; }
    </style>
</head>
<body>

    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-2 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-3 fw-bold" href="#">XsataStore</a>
    </header>

    <div class="container-fluid">
        <div class="row">
            
                <?php require "menu.php"; ?>
            
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 pt-3">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center 
                pt-2 pb-2 mb-3 border-bottom">
                    <h1 class="h3">XsataStore</h1>
                </div>
            
                <?php require "content.php"?>
            
                </div>
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>