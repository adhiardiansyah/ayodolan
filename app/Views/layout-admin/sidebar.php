<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin'); ?>">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-map-marker-alt"></i>
        </div>
        <div class="sidebar-brand-text mx-3">AyoDolan</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item <?= ($title == "Dashboard Admin" || $title == "Edit Pemesanan" ? 'active' : ''); ?>">
        <a class="nav-link" href="<?= base_url('admin'); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Akun
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item <?= ($title == "Daftar Akun" || $title == "Detail Akun" ? 'active' : ''); ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-user"></i>
            <span>Pengelola Akun</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Pengelola Akun:</h6>
                <a class="collapse-item <?= ($title == "Daftar Akun" || $title == "Detail Akun" ? 'active' : ''); ?>" href="<?= base_url('admin/akun'); ?>">Daftar Akun</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Paket Wisata
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item <?= ($title == "Daftar Paket Wisata" || $title == "Detail Paket Wisata" || $title == "Edit Paket Wisata" || $title == "Tambah Paket Wisata" ? 'active' : ''); ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-thumbtack"></i>
            <span>Pengelola Paket Wisata</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Pengelola Paket Wisata:</h6>
                <a class="collapse-item <?= ($title == "Daftar Paket Wisata" || $title == "Detail Paket Wisata" || $title == "Edit Paket Wisata" ? 'active' : ''); ?>" href="<?= base_url('admin/wisata'); ?>">Daftar Paket Wisata</a>
                <a class="collapse-item <?= ($title == "Tambah Paket Wisata" ? 'active' : ''); ?>" href="<?= base_url('admin/tambahwisata'); ?>">Tambahkan Paket Wisata</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Nav Item - Logout -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('logout'); ?>">
            <i class="fas fa-sign-out-alt"></i>
            <span>Logout</span>
        </a>


        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

</ul>