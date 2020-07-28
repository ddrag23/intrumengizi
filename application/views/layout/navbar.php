<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="<?= base_url('dashboard'); ?>" class="site_title"><i class="fa fa-paw"></i> <span>Perencaan Diet</span></a>
                    </div>

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_info">
                            <span>Selamat Datang</span>
                            <h2></h2>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>Perencaan</h3>
                            <ul class="nav side-menu">
                                <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="<?= base_url('pasien/tambah'); ?>">Form Perencanaan</a></li>
                                        <li><a href="<?= base_url('pasien'); ?>">List Data Perencaan</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <?php if ($this->session->role == 'admin') : ?>
                            <div class="menu_section">
                                <h3>Setting</h3>
                                <ul class="nav side-menu">
                                    <li><a><i class="fa fa-steam"></i> Setting <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="<?= base_url('user/tambah'); ?>">Tambah Pengguna</a></li>
                                            <li><a href="<?= base_url('user'); ?>">List Pengguna</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        <?php endif; ?>
                    </div>
                    <!-- /sidebar menu -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>
                    <nav class="nav navbar-nav">
                        <ul class=" navbar-right">
                            <li class="nav-item dropdown open" style="padding-left: 15px;">
                                <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                                    <?= $this->session->username; ?>
                                </a>
                                <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?= base_url('login/logout'); ?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->