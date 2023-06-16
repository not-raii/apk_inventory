

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon">
        <img src="{{ 'assets/images/logo.svg' }}" alt="logo">
        <div class="sidebar-brand-text mx-2">Gudang-IT</div>
    </div>
</a>

<!-- Nav Item - Dashboard -->
<li class="nav-item {{ ($title == "Dashboard User") ? 'active' : '' }}">
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


<!-- Nav Item - Pages Collapse Menu Users -->



<!-- Nav Item - Barang -->
<li class="nav-item {{ ($title == "Data Barang") ? 'active' : '' }}">
    <a class="nav-link" href="/data_barang">
        <i class="fas fa-boxes"></i>
        <span>Barang</span></a>
</li>

<!-- Divider -->

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
