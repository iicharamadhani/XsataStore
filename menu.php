<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link <?= ($_GET['pages'] ?? 'dashboard') == 'dashboard' ? 'active' : '' ?>" href="index.php?pages=dashboard">
                            <i class="bi bi-house-door me-2"></i>Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= ($_GET['pages'] ?? '') == 'orders' ? 'active' : '' ?>" href="index.php?pages=orders">
                            <i class="bi bi-file-earmark me-2"></i>Orders</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= ($_GET['pages'] ?? '') == 'produk' ? 'active' : '' ?>" href="index.php?pages=produk">
                            <i class="bi bi-cart me-2"></i>Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= ($_GET['pages'] ?? '') == 'costumers' ? 'active' : '' ?>" href="index.php?pages=costumers">
                            <i class="bi bi-people me-2"></i>Customers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= ($_GET['pages'] ?? '') == 'reports' ? 'active' : '' ?>" href="index.php?pages=reports">
                            <i class="bi bi-bar-chart-line me-2"></i>Reports</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= ($_GET['pages'] ?? '') == 'integrations' ? 'active' : '' ?>" href="index.php?pages=integrations">
                            <i class="bi bi-layers me-2"></i>Integrations</a>
                        </li>
                    </ul>
                    <hr>
                    <ul class="nav flex-column mb-2">
                        <li class="nav-item">
                            <a class="nav-link text-danger" href="#">
                                <i class="bi bi-box-arrow-right me-2"></i>Sign out
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>