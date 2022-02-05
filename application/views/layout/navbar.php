             <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo site_url()?>/Dasboard">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Petugas <sup>Laundry</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo site_url()?>/Dasboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Menu
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Pages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-box"></i>
                    <span>Pesanan</span>
                </a>
                <div id="Pages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Page Menu:</h6>
                        <!-- admin dan kasir -->
                        <?php if ($_SESSION['level'] == 'A' or $_SESSION['level'] == 'K' or $_SESSION['level'] == 'O' ){?>
                        <a class="collapse-item" href="<?php echo site_url()?>/Pesanan/index">Antrean Pesanan</a>
                        <a class="collapse-item" href="<?php echo site_url()?>/Pesanan/status/selesai">Pesanan Selesai</a>
                        <?php    
                            }
                        ?>
                    </div>
                </div>
            </li>
            
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Toko"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Toko</span>
                </a>
                <div id="Toko" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                    <?php if ($_SESSION['level'] == 'A' or $_SESSION['level'] == 'K' or $_SESSION['level'] == 'O'){?>
                        <h6 class="collapse-header">Page Menu:</h6>
                        <!-- admin dan kasir -->
                        <a class="collapse-item" href="<?php echo site_url()?>/Paket/index">Paket</a>
                        <a class="collapse-item" href="<?php echo site_url()?>/Pelanggan/index">Pelanggan</a>
                        <?php    
                            }
                        ?>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Manage</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Page:</h6>
                        <?php if ($_SESSION['level'] == 'A' or $_SESSION['level'] == 'O'){?>
                        <a class="collapse-item" href="<?php echo site_url()?>/Petugas/index">Petugas</a>
                        <?php    
                        }
                        ?>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="<?php echo base_url()?>assets/admin/img/undraw_rocket.svg" alt="...">
                <p class="text-center mb-2">Tanyakan pada Admin Jika Ada kendala</p>
                <a class="btn btn-success btn-sm" href="#">Support</a>
            </div>

            </ul>
            <!-- End of Sidebar -->
