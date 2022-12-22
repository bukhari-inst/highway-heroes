<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicons -->
    <link rel="icon" type="image/png" sizes="32x32"
        href="<?= base_url() ?>/assets/dist/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16"
        href="<?= base_url() ?>/assets/dist/assets/favicon/favicon-16x16.png">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/dist/assets/css/libs.bundle.css" />

    <!-- Main CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/dist/assets/css/theme.bundle.css" />

    <!-- Vendor CSS Files -->
    <link href="<?= base_url() ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url() ?>/assets/css/style.css" rel="stylesheet">

    <!-- ======= Header ======= -->
    <?= $this->include('parts/header'); ?>

    <!-- ======= Sidebar ======= -->
    <?= $this->include('parts/sidebar'); ?>


    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Produk</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= site_url('/') ?>">Home</a></li>
                    <li class="breadcrumb-item">Produk detail</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="mt-5">
            <!-- Page Content Goes Here -->

            <!-- Product Top-->
            <section class="container">

                <div class="row g-5">
                    <!-- Images Section-->
                    <div class="col-12 col-lg-7">
                        <div class="row g-1">
                            <div class="swiper-container gallery-thumbs-vertical col-2 pb-4">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide bg-light bg-light h-auto">
                                        <picture>
                                            <img class="img-fluid mx-auto d-table"
                                                src="<?= base_url() ?>/assets/images/products/product-5d.jpg"
                                                alt="img" />
                                        </picture>
                                    </div>
                                    <div class="swiper-slide bg-light bg-light h-auto">
                                        <picture>
                                            <img class="img-fluid mx-auto d-table"
                                                src="<?= base_url() ?>/assets/images/products/product-5.jpg"
                                                alt="img" />
                                        </picture>
                                    </div>
                                    <div class="swiper-slide bg-light bg-light h-auto">
                                        <picture>
                                            <img class="img-fluid mx-auto d-table"
                                                src="<?= base_url() ?>/assets/images/products/product-5b.jpg"
                                                alt="img" />
                                        </picture>
                                    </div>
                                    <div class="swiper-slide bg-light bg-light h-auto">
                                        <picture>
                                            <img class="img-fluid mx-auto d-table"
                                                src="<?= base_url() ?>/assets/images/products/product-5c.jpg"
                                                alt="img" />
                                        </picture>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-container gallery-top-vertical col-10">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide bg-white h-auto">
                                        <picture>
                                            <img class="img-fluid d-table mx-auto"
                                                src="<?= base_url() ?>/assets/images/products/product-5d.jpg" alt="img"
                                                data-zoomable />
                                        </picture>
                                    </div>
                                    <div class="swiper-slide bg-white h-auto">
                                        <picture>
                                            <img class="img-fluid d-table mx-auto"
                                                src="<?= base_url() ?>/assets/images/products/product-5.jpg" alt="img"
                                                data-zoomable />
                                        </picture>
                                    </div>
                                    <div class="swiper-slide bg-white h-auto">
                                        <picture>
                                            <img class="img-fluid d-table mx-auto"
                                                src="<?= base_url() ?>/assets/images/products/product-5b.jpg" alt="img"
                                                data-zoomable />
                                        </picture>
                                    </div>
                                    <div class="swiper-slide bg-white h-auto">
                                        <picture>
                                            <img class="img-fluid d-table mx-auto"
                                                src="<?= base_url() ?>/assets/images/products/product-5c.jpg" alt="img"
                                                data-zoomable />
                                        </picture>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Images Section-->

                    <!-- Product Info Section-->
                    <div class="col-12 col-lg-5">
                        <div class="pb-3">
                            <!-- Product Name, Review, Brand, Price-->
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <p class="small fw-bolder text-uppercase tracking-wider text-muted mb-0 lh-1">
                                    Fox
                                </p>
                                <div class="d-flex justify-content-start align-items-center">
                                    <!-- Review Stars Small-->
                                    <div class="rating position-relative d-table">
                                        <div class="position-absolute stars" style="width: 80%">
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                        </div>
                                        <div class="stars">
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                        </div>
                                    </div>
                                    <small class="text-muted d-inline-block ms-2 fs-bolder">(1288)</small>
                                </div>
                            </div>
                            <h1 class="mb-2 fs-2 fw-bold">
                                Set Perlengkapan Balap Motocross Celana Jersey
                            </h1>
                            <div class="d-flex justify-content-start align-items-center">
                                <p class="lead fw-bolder m-0 fs-3 lh-1 text-danger me-2">
                                    Rp 750.000
                                </p>
                                <!-- <s class="lh-1 me-2"><span class="fw-bolder m-0">$94.99</span></s>
                                <p class="lead fw-bolder m-0 fs-6 lh-1 text-success">
                                    Save $10.00
                                </p> -->
                            </div>
                            <!-- /Product Name, Review, Brand, Price-->

                            <!-- Product Options-->
                            <div class="border-top mt-4 mb-3">
                                <div class="product-option mb-4 mt-4">
                                    <small class="text-uppercase d-block fw-bolder mb-2">
                                        Warna :
                                        <span class="selected-option fw-bold">Biru</span>
                                    </small>
                                    <div class="d-flex justify-content-start">
                                        <div
                                            class="form-group d-inline-block mr-1 mb-1 form-check-solid-bg-checkmark form-check-custom">
                                            <input type="radio" class="form-check-color-input" id="option-colour-1"
                                                name="option-colour" value="Hitam" />
                                            <label class="form-check-label" for="option-colour-1"></label>
                                        </div>
                                        <div
                                            class="form-group d-inline-block mr-1 mb-1 form-check-solid-bg-checkmark form-check-custom form-check-warning">
                                            <input type="radio" class="form-check-color-input" id="option-colour-2"
                                                name="option-colour" value="Kuning" />
                                            <label class="form-check-label" for="option-colour-2"></label>
                                        </div>
                                        <div
                                            class="form-group d-inline-block mr-1 mb-1 form-check-solid-bg-checkmark form-check-custom form-check-info">
                                            <input type="radio" class="form-check-color-input" id="option-colour-3"
                                                name="option-colour" value="Biru" checked />
                                            <label class="form-check-label" for="option-colour-3"></label>
                                        </div>
                                        <div
                                            class="form-group d-inline-block mr-1 mb-1 form-check-solid-bg-checkmark form-check-custom form-check-danger">
                                            <input type="radio" class="form-check-color-input" id="option-colour-4"
                                                name="option-colour" value="Merah" />
                                            <label class="form-check-label" for="option-colour-4"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-option">
                                    <small class="text-uppercase d-block fw-bolder mb-2">
                                        Ukuran : <span class="selected-option fw-bold"></span>
                                    </small>
                                    <div class="form-group">
                                        <select name="selectSize" class="form-control" data-choices>
                                            <option value="">Pilih ukuran</option>
                                            <option value="Extra Small">XS</option>
                                            <option value="Medium">M</option>
                                            <option value="Large">L</option>
                                            <option value="Extra Large">XL</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- /Product Options-->

                            <!-- Add To Cart-->
                            <div class="d-flex justify-content-between mt-3">
                                <button class="btn btn-dark btn-dark-chunky flex-grow-1 me-2 text-white">
                                    Beli sekarang
                                </button>
                            </div>
                            <!-- /Add To Cart-->

                            <!-- Socials-->
                            <div class="my-4">
                                <div class="d-flex justify-content-start align-items-center">
                                    <p class="fw-bolder lh-1 mb-0 me-3">Share</p>
                                    <ul
                                        class="list-unstyled p-0 m-0 d-flex justify-content-start lh-1 align-items-center mt-1">
                                        <li class="me-2">
                                            <a class="text-decoration-none" href="#" role="button"><i
                                                    class="ri-facebook-box-fill"></i></a>
                                        </li>
                                        <li class="me-2">
                                            <a class="text-decoration-none" href="#" role="button"><i
                                                    class="ri-instagram-fill"></i></a>
                                        </li>
                                        <li class="me-2">
                                            <a class="text-decoration-none" href="#" role="button"><i
                                                    class="ri-pinterest-fill"></i></a>
                                        </li>
                                        <li class="me-2">
                                            <a class="text-decoration-none" href="#" role="button"><i
                                                    class="ri-twitter-fill"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Socials-->

                        </div>
                    </div>
                    <!-- / Product Info Section-->
                </div>
            </section>
            <!-- / Product Top-->

            <!-- /Page Content -->
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <?= $this->include('parts/footer'); ?>