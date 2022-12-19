<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link collapsed" href="#">
                <i class="bi bi-grid"></i>
                <span>Artikel</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="#">
                <i class="bi bi-menu-button-wide"></i>
                <span>Event</span>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="#">
                <i class="bi bi-question-circle"></i>
                <span>Galery Foto</span>
            </a>
        </li><!-- End F.A.Q Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="#">
                <i class="bi bi-envelope"></i>
                <span>Klien Kami</span>
            </a>
        </li><!-- End Contact Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-person"></i><span>Login</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?= site_url('/login') ?>">
                        <i class="bi bi-circle"></i><span>Sign In</span>
                    </a>
                </li>
                <li>
                    <a href="<?= site_url('/register') ?>">
                        <i class="bi bi-circle"></i><span>Sign Up</span>
                    </a>
            </ul>
        </li><!-- End Components Nav -->

    </ul>

</aside>