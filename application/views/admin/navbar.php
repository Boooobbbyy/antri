    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <img src="<?php echo base_url('assets/img/Lambang_Kabupaten.png') ?>"/>
                </div>
                <div class="sidebar-brand-text mx-3">BPKAD Way Kanan</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                PENGATURAN
            </div>

            <li class="nav-item">
                <a class="nav-link" href="loket">
                    <i class="fas fa-fw fa-inbox"></i>
                    <span>Loket</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="instansi">
                    <i class="fas fa-fw fa-building"></i>
                    <span>Data Instansi</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="karyawan">
                    <i class="fas fa-fw fa-user-tie"></i>
                    <span>Data Karyawan</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="agenda">
                    <i class="fas fa-fw fa-calendar"></i>
                    <span>Agenda</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="teks_jalan">
                    <i class="fas fa-fw fa-sticky-note"></i>
                    <span>Teks Jalan</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <p class="navbar-brand d-flex align-items-center justify-content-center">
                    Sistem Informasi Antrian Ruang Pelayanan Terpadu
                </p>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Mery Stew</span>
                                <img class="img-profile rounded-circle"
                                    src="<?php echo base_url('assets/img/undraw_profile_3.svg') ?>">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="login" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->