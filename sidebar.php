<style>
   
.main-sidebar .nav-link:hover {
    background-color: #e2e6ea; 
    color: #007bff; 
}

.main-sidebar .nav-link:hover .nav-icon {
    color: #007bff;
}


.main-sidebar .nav-link {
    transition: background-color 0.3s, color 0.3s;
}

</style>

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
        <img src="node_modules/admin-lte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight-light">LYR DASHBOARD</span>
    </a>

    <div class="sidebar">
        <!-- User Panel -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="node_modules/admin-lte/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Admin User</a>
            </div>
        </div>
      

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Dashboard Link -->
                <li class="nav-item">
                    <a href="index.php" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <!-- External Links -->
                <li class="nav-item">
                    <a href="https://adminlte.io/" class="nav-link" target="_blank">
                        <i class="fa-solid fa-file"></i>
                        <p>Documentation</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="includes/aboutUs.php" class="nav-link" target="_blank">
                        <i class="nav-icon fas fa-book"></i>
                        <p>About us</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="https://www.facebook.com/lyrbislig" class="nav-link" target="_blank">
                        <i class="fa-solid fa-house"></i>
                        <p>Our Facebook page</p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="development.php" class="nav-link">
                    <i class="fa-sharp-duotone fa-solid fa-screwdriver-wrench"></i>
                        <p>Development Team</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="https://www.facebook.com/" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- jQuery -->
<!-- <script src="/node_modules/admin-lte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<!-- <script src="/node_modules/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script> -->
<!-- AdminLTE App -->
<!-- <script src="/node_modules/admin-lte/dist/js/adminlte.min.js"></script> --> 
    </div>
</aside>
