<!doctype html>
<html lang="en">

<!-- Head -->

<head>
    <!-- Page Meta Tags-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180"
        href="<?= base_url() ?>/assets/dist/assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32"
        href="<?= base_url() ?>/assets/dist/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16"
        href="<?= base_url() ?>/assets/dist/assets/favicon/favicon-16x16.png">
    <link rel="mask-icon" href="<?= base_url() ?>/assets/dist/assets/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/dist/assets/css/libs.bundle.css" />

    <!-- Main CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/dist/assets/css/theme.bundle.css" />

    <!-- Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Fix for custom scrollbar if JS is disabled-->
    <noscript>
        <style>
        /**
          * Reinstate scrolling for non-JS clients
          */
        .simplebar-content-wrapper {
            overflow: auto;
        }
        </style>
    </noscript>

    <!-- Page Title -->
    <title>Highway Heroes</title>

</head>

<body class="">

    <!-- Navbar -->
    <div class="position-relative z-index-30">
        <!-- Navbar -->
        <nav
            class="navbar navbar-expand-lg navbar-light bg-white border-bottom mx-0 p-0 flex-column  border-0 position-absolute w-100 z-index-30 bg-transparent navbar-dark navbar-transparent bg-white-hover transition-all">
            <div class="w-100 pb-lg-0 pt-lg-0 pt-4 pb-3">
                <div class="container-fluid d-flex justify-content-between align-items-center flex-wrap">

                    <!-- Logo-->
                    <a class="navbar-brand fw-bold fs-3 m-0 p-0 flex-shrink-0" href="<?= site_url('/') ?>">
                        <!-- Start of Logo-->
                        <div class="d-flex align-items-center">
                            <div class="f-w-6 d-flex align-items-center me-2 lh-1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 194 194">
                                    <path fill="currentColor" class="svg-logo-white"
                                        d="M47.45,60l1.36,27.58,53.41-51.66,50.87,50,3.84-26L194,100.65V31.94A31.94,31.94,0,0,0,162.06,0H31.94A31.94,31.94,0,0,0,0,31.94v82.57Z" />
                                    <path fill="currentColor" class="svg-logo-dark"
                                        d="M178.8,113.19l1,34.41L116.3,85.92l-14.12,15.9L88.07,85.92,24.58,147.53l.93-34.41L0,134.86v27.2A31.94,31.94,0,0,0,31.94,194H162.06A31.94,31.94,0,0,0,194,162.06V125.83Z" />
                                </svg>
                            </div> <span class="fs-5">Highway Heroes</span>
                        </div>
                        <!-- / Logo-->

                    </a>
                    <!-- / Logo-->

                    <!-- Main Navigation-->
                    <div class="ms-5 flex-shrink-0 collapse navbar-collapse navbar-collapse-light w-auto flex-grow-1"
                        id="navbarNavDropdown">

                        <!-- Mobile Nav Toggler-->
                        <button
                            class="btn btn-link px-2 text-decoration-none navbar-toggler border-0 position-absolute top-0 end-0 mt-3 me-2"
                            data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="ri-close-circle-line ri-2x"></i>
                        </button>
                        <!-- / Mobile Nav Toggler-->

                        <ul class="navbar-nav py-lg-2 mx-auto">
                            <li class="nav-item me-lg-4">
                                <a class="nav-link fw-bolder py-lg-4" href="<?= site_url('/login') ?>">
                                    Sign In
                                </a>
                            </li>
                            <li class="nav-item me-lg-4">
                                <a class="nav-link fw-bolder py-lg-4" href="<?= site_url('/register') ?>">
                                    Sign Up
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- / Main Navigation-->

                    <!-- Navbar Icons-->
                    <ul class="list-unstyled mb-0 d-flex align-items-center">

                        <!-- Navbar Toggle Icon-->
                        <li class="d-inline-block d-lg-none">
                            <button
                                class="btn btn-link px-2 text-decoration-none navbar-toggler border-0 d-flex align-items-center"
                                data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                <i class="ri-menu-line ri-lg align-middle"></i>
                            </button>
                        </li>
                        <!-- /Navbar Toggle Icon-->

                        <!-- Navbar Search-->
                        <li class="ms-1 d-inline-block">
                            <button class="btn btn-link px-2 text-decoration-none d-flex align-items-center"
                                data-pr-search>
                                <i class="ri-search-2-line ri-lg align-middle"></i>
                            </button>
                        </li>
                        <!-- /Navbar Search-->

                        <!-- Navbar Wishlist-->
                        <li class="ms-1 d-none d-lg-inline-block">
                            <a class="btn btn-link px-2 py-0 text-decoration-none d-flex align-items-center" href="#">
                                <i class="ri-heart-line ri-lg align-middle"></i>
                            </a>
                        </li>
                        <!-- /Navbar Wishlist-->

                        <!-- Navbar Login-->
                        <li class="ms-1 d-none d-lg-inline-block">
                            <a class="btn btn-link px-2 text-decoration-none d-flex align-items-center" href="#">
                                <i class="ri-user-line ri-lg align-middle"></i>
                            </a>
                        </li>
                        <!-- /Navbar Login-->

                        <!-- Navbar Cart-->
                        <li class="ms-1 d-inline-block position-relative">
                            <button
                                class="btn btn-link px-2 text-decoration-none d-flex align-items-center disable-child-pointer"
                                data-bs-toggle="offcanvas" data-bs-target="#offcanvasCart"
                                aria-controls="offcanvasCart">
                                <i class="ri-shopping-cart-2-line ri-lg align-middle position-relative z-index-10"></i>
                                <span
                                    class="fs-xs fw-bolder f-w-5 f-h-5 bg-orange rounded-lg d-block lh-1 pt-1 position-absolute top-0 end-0 z-index-20 mt-2 text-white">2</span>
                            </button>
                        </li>
                        <!-- /Navbar Cart-->

                    </ul>
                    <!-- Navbar Icons-->

                </div>
            </div>
        </nav>
        <!-- / Navbar-->
    </div>
    <!-- / Navbar-->

    <!-- Main Section-->
    <section class="mt-0 ">
        <!-- Page Content Goes Here -->

        <!-- / Hero Section -->
        <section class="vh-100 position-relative bg-overlay-dark ">
            <div class="container d-flex h-100 justify-content-center align-items-center position-relative z-index-10">
                <div
                    class="d-flex justify-content-center align-items-center h-100 position-relative z-index-10 text-white">
                    <div>
                        <h1 class="display-1 fw-bold px-2 px-md-5 text-center mx-auto col-lg-8 mt-md-0"
                            data-aos="fade-up" data-aos-delay="1000">Bersiaplah untuk perjalanan Anda!</h1>
                        <p class="px-2 px-md-5 text-center mx-auto col-lg-8 mt-md-0" data-aos="fade-up"
                            data-aos-delay="1500">Highway Heroes menjual berbagai
                            macam pakaian motor baik untuk pria maupun wanita. Dengan
                            merek-merek seperti Dainese, Icon, Alpinestars, dan Bell, kami memiliki semua yang Anda
                            butuhkan untuk terlihat bagus di atas motor.</p>
                        <div data-aos="fade-in" data-aos-delay="2000">
                            <div class="d-md-flex justify-content-center mt-4 mb-3 my-md-5">
                                <a href="<?= site_url('/login') ?>"
                                    class="btn btn-skew-left btn-orange btn-orange-chunky text-white mx-1 w-100 w-md-auto mb-2 mb-md-0"><span>
                                        Get started <i class="ri-arrow-right-line align-middle fw-bold"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="position-absolute z-index-1 top-0 bottom-0 start-0 end-0">
                <!-- Swiper Info -->
                <div class="swiper-container overflow-hidden bg-light w-100 h-100" data-swiper data-options='{
                    "slidesPerView": 1,
                    "speed": 1500,
                    "loop": true,
                    "effect": "fade",
                    "autoplay": {
                      "delay": 5000
                    }
                  }'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide position-relative">
                            <div class="w-100 h-100 bg-img-cover animation-move bg-pos-center-center"
                                style="background-image: url(<?= base_url() ?>/assets/dist/assets/images/slideshows/slideshow-1.jpg);">
                            </div>
                        </div>
                        <div class="swiper-slide position-relative">
                            <div class="w-100 h-100 bg-img-cover animation-move bg-pos-center-center"
                                style="background-image: url(<?= base_url() ?>/assets/dist/assets/images/slideshows/slideshow-2.jpg);">
                            </div>
                        </div>
                        <div class="swiper-slide position-relative">
                            <div class="w-100 h-100 bg-img-cover animation-move bg-pos-center-center"
                                style="background-image: url(<?= base_url() ?>/assets/dist/assets/images/slideshows/slideshow-3.jpg);">
                            </div>
                        </div>
                    </div>

                </div>
                <!-- / Swiper Info-->
            </div>
        </section>
        <!--/ Hero Section-->

        <!-- Featured Brands-->
        <div class="mb-lg-7 bg-light py-4" data-aos="fade-in">
            <div class="container">
                <div class="row gx-3 align-items-center">
                    <div
                        class="col-12 justify-content-center justify-content-md-between align-items-center d-flex flex-wrap">
                        <div class="me-2 f-w-20 m-4 ms-md-0 mt-md-0 mb-md-0">
                            <a class="d-block" href="./category.html" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Shop Kathmandu">
                                <img class="img-fluid d-table mx-auto"
                                    src="<?= base_url() ?>/assets/dist/assets/images/logos/logo-1.svg" alt="img">
                            </a>
                        </div>
                        <div class="me-2 f-w-20 m-4 ms-md-0 mt-md-0 mb-md-0">
                            <a class="d-block" href="./category.html" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Shop Billabong">
                                <img class="img-fluid d-table mx-auto"
                                    src="<?= base_url() ?>/assets/dist/assets/images/logos/logo-2.svg" alt="img">
                            </a>
                        </div>
                        <div class="me-2 f-w-20 m-4 ms-md-0 mt-md-0 mb-md-0">
                            <a class="d-block" href="./category.html" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Shop Oakley">
                                <img class="img-fluid d-table mx-auto"
                                    src="<?= base_url() ?>/assets/dist/assets/images/logos/logo-9.svg" alt="img">
                            </a>
                        </div>
                        <div class="me-2 f-w-20 m-4 ms-md-0 mt-md-0 mb-md-0">
                            <a class="d-block" href="./category.html" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Shop Patagonia">
                                <img class="img-fluid d-table mx-auto"
                                    src="<?= base_url() ?>/assets/dist/assets/images/logos/logo-4.svg" alt="img">
                            </a>
                        </div>
                        <div class="me-2 f-w-20 m-4 ms-md-0 mt-md-0 mb-md-0">
                            <a class="d-block" href="./category.html" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Shop North Face">
                                <img class="img-fluid d-table mx-auto"
                                    src="<?= base_url() ?>/assets/dist/assets/images/logos/logo-5.svg" alt="img">
                            </a>
                        </div>
                        <div class="me-2 f-w-20 m-4 ms-md-0 mt-md-0 mb-md-0">
                            <a class="d-block" href="./category.html" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Shop Salomon">
                                <img class="img-fluid d-table mx-auto"
                                    src="<?= base_url() ?>/assets/dist/assets/images/logos/logo-7.svg" alt="img">
                            </a>
                        </div>
                        <a href="./category.html" class="btn btn-link fw-bolder">Explore All Brands <i
                                class="ri-arrow-right-line align-bottom fw-bold"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Featured Brands-->

        <!-- Theme JS -->
        <!-- Vendor JS -->
        <script src="<?= base_url() ?>/assets/dist/assets/js/vendor.bundle.js"></script>

        <!-- Theme JS -->
        <script src="<?= base_url() ?>/assets/dist/assets/js/theme.bundle.js"></script>
</body>

</html>