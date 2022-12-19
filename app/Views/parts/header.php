<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center">
            <!-- <img src="<?= base_url() ?>/assets/img/logo.png" alt=""> -->
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 194 194" style="width: 30px;">
                <path fill="currentColor" class="svg-logo-white"
                    d="M47.45,60l1.36,27.58,53.41-51.66,50.87,50,3.84-26L194,100.65V31.94A31.94,31.94,0,0,0,162.06,0H31.94A31.94,31.94,0,0,0,0,31.94v82.57Z" />
                <path fill="currentColor" class="svg-logo-dark"
                    d="M178.8,113.19l1,34.41L116.3,85.92l-14.12,15.9L88.07,85.92,24.58,147.53l.93-34.41L0,134.86v27.2A31.94,31.94,0,0,0,31.94,194H162.06A31.94,31.94,0,0,0,194,162.06V125.83Z" />
            </svg>
            <span class="d-none d-lg-block ms-2">Highway Heroes</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">

            <li class="nav-item me-4">
                <a class="nav-link collapsed" href="<?= site_url('/profile') ?>">
                    <span>Profile</span>
                </a>
            </li>
            <li class="nav-item me-4">
                <a class="nav-link collapsed" href="<?= site_url('/visimisi') ?>">
                    <span>Visi dan Misi</span>
                </a>
            </li>
            <li class="nav-item me-4">
                <a class="nav-link collapsed" href="<?= site_url('/produk') ?>">
                    <span>Produk Kami</span>
                </a>
            </li>
            <li class="nav-item me-4">
                <a class="nav-link collapsed" href="<?= site_url('/kontak') ?>">
                    <span>Kontak Kami</span>
                </a>
            </li>
            <li class="nav-item me-4">
                <a class="nav-link collapsed" href="<?= site_url('/about') ?>">
                    <span>About Us</span>
                </a>
            </li>

            <li class="nav-item dropdown pe-3">

                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                    <img src="<?= base_url() ?>/assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                    <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
                </a><!-- End Profile Iamge Icon -->

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                    <li class="dropdown-header">
                        <h6>Kevin Anderson</h6>
                        <span>Web Designer</span>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <i class="bi bi-person"></i>
                            <span>My Profile</span>
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <i class="bi bi-gear"></i>
                            <span>Account Settings</span>
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <i class="bi bi-question-circle"></i>
                            <span>Need Help?</span>
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <i class="bi bi-box-arrow-right"></i>
                            <span>Sign Out</span>
                        </a>
                    </li>

                </ul><!-- End Profile Dropdown Items -->
            </li><!-- End Profile Nav -->

        </ul>
    </nav><!-- End Icons Navigation -->

</header>