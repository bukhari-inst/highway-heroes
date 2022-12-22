<?= $this->include('parts/head'); ?>
<!-- ======= Header ======= -->
<?= $this->include('parts/header'); ?>

<!-- ======= Sidebar ======= -->
<?= $this->include('parts/sidebar'); ?>


<main id="main" class="main">

    <div class="pagetitle">
        <h1>Detail Event</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= site_url('/') ?>">Home</a></li>
                <li class="breadcrumb-item">Detail Event</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
        <div class="row">
            <div class="col-xl-4">

                <div class="card">
                    <div class="card-body pt-4 d-flex flex-column align-items-center">

                        <img src="https://cdn-2.tstatic.net/wartakota/foto/bank/images/booth-astra-honda-motor-di-imos-2022-jcc-senayan.jpg"
                            class="card-img-top" alt="img"">
                        <div class=" card-body">
                        <h5 class="card-title">Pameran Sepeda Motor Terbesar IMOS 2022</h5>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-xl-8">

            <div class="card">
                <div class="card-body pt-3">
                    <!-- Bordered Tabs -->
                    <div class="tab-content pt-2">

                        <div class="tab-pane fade show active profile-overview" id="profile-overview">
                            <h5 class="card-title" style="text-decoration: none;">Tentang</h5>
                            <p class="small">Pameran otomotif Indonesia Motorcycle Show (IMOS) 2022 resmi
                                dibuka. Pameran ini diinisiasi Asosiasi Industri Sepedamotor Indonesia (AISI) dan
                                berlangsung pada 2-6 November di Jakarta Convention Center (JCC), Senayan, Jakarta. Pada
                                IMOS kali ini banyak merek motor listrik dihadirkan.</p>

                            <h5 class="card-title" style="text-decoration: none;">Event Details</h5>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label " style="text-decoration: none;">Nama Event</div>
                                <div class="col-lg-9 col-md-8" style="text-decoration: none;">Pameran otomotif Indonesia
                                    Motorcycle Show (IMOS) 2022</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label" style="text-decoration: none;">Tanggal</div>
                                <div class="col-lg-9 col-md-8" style="text-decoration: none;">2-6 November 2022</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label" style="text-decoration: none;">Event</div>
                                <div class="col-lg-9 col-md-8" style="text-decoration: none;">Pameran Motor</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label" style="text-decoration: none;">Alamat</div>
                                <div class="col-lg-9 col-md-8" style="text-decoration: none;">Jakarta Convention Center
                                    (JCC), Senayan, Jakarta</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label" style="text-decoration: none;">Phone</div>
                                <div class="col-lg-9 col-md-8" style="text-decoration: none;">(021) 486-3538
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label" style="text-decoration: none;">Email</div>
                                <div class="col-lg-9 col-md-8" style="text-decoration: none;">anderson@gmail.com
                                </div>
                            </div>

                        </div>

                    </div><!-- End Bordered Tabs -->

                </div>
            </div>

        </div>
        </div>
    </section>

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<?= $this->include('parts/footer'); ?>