<?= $this->include('parts/head'); ?>
<!-- ======= Header ======= -->
<?= $this->include('parts/header'); ?>

<!-- ======= Sidebar ======= -->
<?= $this->include('parts/sidebar'); ?>


<main id="main" class="main">

    <div class="pagetitle">
        <h1>Klien</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= site_url('/') ?>">Home</a></li>
                <li class="breadcrumb-item">Klien</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section>
        <div class="container" data-aos="fade-in">
            <h2 class="fs-1 fw-bold mb-3 text-center mb-5">Penilaian Produk</h2>
            <div class="row g-3">
                <div class="col-12 col-lg-4" data-aos="fade-left">
                    <div
                        class="bg-light p-4 d-flex h-100 justify-content-start align-items-center flex-column text-center">
                        <p class="fw-bolder lead">Desain Bagus!</p>
                        <p class="mb-3">Saya suka desain produk yang ditawarkan. Bahannya nyaman dan
                            terasa
                            sejuk di kulit. Saya tidak sabar untuk memakainya selama musim panas ini.</p>
                        <small class="text-muted d-block mb-2 fw-bolder">Nurul Usamah, Pasuruan</small>
                        <!-- Review Stars Small-->
                        <div class="rating position-relative d-table">
                            <div class="position-absolute stars" style="width: 75%">
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
                    </div>
                </div>
                <div class="col-12 col-lg-4" data-aos="fade-left" data-aos-delay="150">
                    <div
                        class="bg-light p-4 d-flex h-100 justify-content-start align-items-center flex-column text-center">
                        <p class="fw-bolder lead">Sangat Menyukai</p>
                        <p class="mb-3">Saya sangat menyukai Koleksi produk. Saya pikir itu ide yang fantastis untuk
                            membuat
                            beberapa produk yang bagus dan keren sambil juga membuatnya terjangkau.</p>
                        <small class="text-muted d-block mb-2 fw-bolder">Dewi Rahmawati, Padang</small>
                        <!-- Review Stars Small-->
                        <div class="rating position-relative d-table">
                            <div class="position-absolute stars" style="width: 75%">
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
                    </div>
                </div>
                <div class="col-12 col-lg-4" data-aos="fade-left" data-aos-delay="300">
                    <div
                        class="bg-light p-4 d-flex h-100 justify-content-start align-items-center flex-column text-center">
                        <p class="fw-bolder lead">Bahan Lembut, Bagus dan Ringan</p>
                        <p class="mb-3">Saya baru saja membeli Koleksi produk dan saya sangat senang dengan itu. Terbuat
                            dari
                            bahan yang lembut, bagus dan ringan.</p>
                        <small class="text-muted d-block mb-2 fw-bolder">Shania Nasyidah, Cimahi</small>
                        <!-- Review Stars Small-->
                        <div class="rating position-relative d-table">
                            <div class="position-absolute stars" style="width: 75%">
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
                    </div>
                </div>
            </div>
        </div>
    </section>

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<?= $this->include('parts/footer'); ?>