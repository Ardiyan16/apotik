<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <header class="main-header">
            <!-- Logo -->
            <a href="<?= base_url('admin') ?>" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>A</b>K</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>Apotek</b>Kita</span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li class="dropdown notifications-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-bell-o"></i>
                                <span class="label label-warning">10</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">Anda memiliki 10 notifikasi</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-user text-red"></i> You changed your username
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?= base_url() ?>assets/dist/img/admin.png" class="user-image" alt="User Image">
                                <span class="hidden-xs"><?= $this->session->userdata('username') ?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="<?= base_url() ?>assets/dist/img/admin.png" class="img-circle" alt="User Image">
                                    <p>
                                        <?= $this->session->userdata('username') ?>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <li class="user-body">
                                    <div class="row">
                                        <!-- <div class="col-xs-4 text-center">
                                            <a href="#">Followers</a>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <a href="#">Sales</a>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <a href="#">Friends</a>
                                        </div> -->
                                    </div>
                                    <!-- /.row -->
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <!-- <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div> -->
                                    <div class="text-center">
                                        <a href="<?= base_url('auth/logout') ?>" class="btn btn-danger btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- Control Sidebar Toggle Button -->
                        <li>
                            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="<?= base_url() ?>assets/dist/img/admin.png" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p><?= $this->session->userdata('username') ?></p>
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">Menu Obat dan Keuangan</li>
                    <li><a href="<?= base_url('admin') ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-product-hunt"></i>
                            <span>Produk Obat</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> Master Obat</a></li>
                            <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Kategori Obat</a></li>
                        </ul>
                    </li>
                    <li class="header">Menu Laporan dan Penjualan</li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-money"></i> <span>Keuangan Apotek</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> Keuangan</a></li>
                            <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Kebutuhan Keuangan</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-book"></i> <span>Laporan Apotek</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> Laporan Penjualan</a></li>
                            <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Laporan Pendapatan</a></li>
                            <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Laporan Laba Rugi</a></li>
                            <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Laporan Laba Rugi Tahunan</a></li>
                            <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Laporan Pembukuan</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-book"></i> <span>Tranasksi</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> History Transaksi</a></li>
                            <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> History Detail Transaksi</a></li>
                        </ul>
                    </li>
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>