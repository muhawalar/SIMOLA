<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-icon mx-10">
                    <img src="<?=BASEURL;?>/img/logo-white.png">
                </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-4">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?=BASEURL ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <img src="<?=BASEURL;?>/img/dashboard-icon.png" alt="">
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->

            <li class="nav-item active">
                <a class="nav-link" href="<?=BASEURL ?>/Laporan/index">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <img src="<?=BASEURL;?>/img/report-icon.png" alt="">
                    <span>Laporan</span></a>
            </li>
            <!-- Divider -->
            <li class="nav-item active">
                <?php 
                    if ($_SESSION['role'] == 'admin') : ?>
                        <!-- Divider -->
                        <li class="nav-item active">
                            <a class="nav-link" href="<?=BASEURL ?>/Admin/laporan">
                                <i class="fas fa-fw fa-tachometer-alt"></i>
                                <img src="<?=BASEURL;?>/img/action-icon.png" alt="">
                                <span>Tindakan</span></a>
                        </li>
                        <?php else: ?>
                            <a class="nav-link" href="<?=BASEURL ?>/Tindakan/index">
                                <i class="fas fa-fw fa-tachometer-alt"></i>
                                <img src="<?=BASEURL;?>/img/action-icon.png" alt="">
                                <span>Tindakan</span></a>
                        </li>
                        <?php endif; ?>
            
            <?php 
            if ($_SESSION['role'] == 'admin') : ?>
            <!-- Divider -->
            <li class="nav-item active">
                <a class="nav-link" href="<?=BASEURL ?>/Admin/index">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <img src="<?=BASEURL;?>/img/users-icon.png" alt="">
                    <span>Users</span></a>
            </li>
            <?php endif; ?>






            <!-- Sidebar Message -->
            <!-- Nav Item - Dashboard -->
            <!-- <hr class="sidebar-divider my-10">
            <li class="nav-item active ml-5">
                <a class="nav-link text-rg" href="<?=BASEURL?>/Login/logout">
                    <i class="fas fa-fw fa-tachometer-alt"></i>

                    <span>Logout</span></a>
            </li> -->

            <!-- Divider -->


        </ul>