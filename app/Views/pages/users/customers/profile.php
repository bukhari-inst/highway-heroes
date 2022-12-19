<?= $this->include('parts/head'); ?>
<!-- ======= Header ======= -->
<?= $this->include('parts/header'); ?>

<!-- ======= Sidebar ======= -->
<?= $this->include('parts/sidebar'); ?>


<main id="main" class="main">

    <div class="pagetitle">
        <h1>Profile</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= site_url('/') ?>">Home</a></li>
                <li class="breadcrumb-item">Profile</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-6">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Kami menjual pakaian motor</h5>
                        <p>Highway Heroes menjual berbagai macam pakaian motor baik untuk pria maupun wanita. Dengan
                            merek-merek seperti Dainese, Icon, Alpinestars, dan Bell, kami memiliki semua yang Anda
                            butuhkan untuk terlihat bagus di atas motor.
                        </p>
                    </div>
                </div>

            </div>

            <div class="col-lg-6">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Layanan pelanggan pemenang penghargaan</h5>
                        <p>Kami selalu berusaha untuk melayani pelanggan kami dengan lebih baik. Highway Heroes telah
                            memenangkan banyak penghargaan untuk layanan pelanggan kami - termasuk penghargaan MTA untuk
                            tahun 2018.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<?= $this->include('parts/footer'); ?>