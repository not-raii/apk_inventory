

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon">
        <img src="{{ 'assets/images/logo.svg' }}" alt="logo">
        <div class="sidebar-brand-text mx-2">Gudang-IT</div>
    </div>
</a>

<!-- Nav Item - Dashboard -->
<li class="nav-item {{ ($title == "Dashboard") ? 'active' : '' }}">
    <a class="nav-link" href="/">
        <i class="far fa-chart-bar"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Master Data
</div>

<!-- Nav Item - Pages Collapse Menu Users -->
<li class="nav-item">
    <a class="nav-link collapsed" href="/" data-toggle="collapse" data-target="#collapsePageUser"
        aria-expanded="true" aria-controls="collapsePageUser">
        <i class="fas fa-users"></i>
        <span>Data Pengguna</span>
    </a>
    <div id="collapsePageUser" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="register.html">
                <i class="fas fa-user-tie"></i>
                Admin</a>
            <a class="collapse-item" href="forgot-password.html">
                <i class="fas fa-user"></i>
                User</a>
        </div>
    </div>
</li>

<!-- Nav Item - Pages Collapse Menu Users -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePageItems"
        aria-expanded="true" aria-controls="collapsePageItems">
        <i class="fas fa-stream"></i>
        <span>Data Barang</span>
    </a>
    <div id="collapsePageItems" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item {{ ($title == "Kategori") ? 'active' : '' }}" href="/kategori">
                <i class="fas fa-file-alt"></i>
                Kategori</a>
            <a class="collapse-item {{ ($title == "Kode Barang") ? 'active' : '' }}" href="/kode_barang">
                <i class="fas fa-file-code"></i>
                Kode Barang</a>
        </div>
    </div>
</li>



<!-- Nav Item - Barang -->
<li class="nav-item {{ ($title == "Data Barang") ? 'active' : '' }}">
    <a class="nav-link" href="/data_barang">
        <i class="fas fa-boxes"></i>
        <span>Barang</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Heading -->
<div class="sidebar-heading">
    Data Laporan
</div>

<!-- Nav Item - Barang Masuk -->
<li class="nav-item">
    <a class="nav-link" href="tables.html">
        <i class="fas fa-dolly-flatbed"></i>
        <span>Barang Masuk</span></a>
</li>

<!-- Nav Item - Barang Keluar -->
<li class="nav-item">
    <a class="nav-link" href="tables.html">
        <i class="fas fa-dolly-flatbed fa-flip-horizontal"></i>
        <span>Barang Keluar</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Heading -->
<div class="sidebar-heading">
    Pengaturan
</div>

<!-- Nav Item - Manajemen Users -->
<li class="nav-item">
    <a class="nav-link" href="tables.html">
        <i class="fas fa-users-cog"></i>
        <span>Manajemen Pengguna</span></a>
</li>

<!-- Nav Item - Log Out Menu -->
<li class="nav-item">
    <a class="nav-link" href="tables.html">
    <i class="fas fa-sign-out-alt fa-sm fa-fw"></i>
        <span>Keluar</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">


<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>
