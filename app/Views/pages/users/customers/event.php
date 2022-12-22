<?= $this->include('parts/head'); ?>
<!-- ======= Header ======= -->
<?= $this->include('parts/header'); ?>

<!-- ======= Sidebar ======= -->
<?= $this->include('parts/sidebar'); ?>


<main id="main" class="main">

    <div class="pagetitle">
        <h1>Event</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= site_url('/') ?>">Home</a></li>
                <li class="breadcrumb-item">Event</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-4">
                <div class="card" style="width: 18rem;">
                    <a href="<?= site_url('/detailEvent') ?>">
                        <img src="https://cdn-2.tstatic.net/wartakota/foto/bank/images/booth-astra-honda-motor-di-imos-2022-jcc-senayan.jpg"
                            class="card-img-top" alt="img" style="max-height: 160px;">
                        <div class="card-body">
                            <h5 class="card-title">Pameran Sepeda Motor Terbesar IMOS 2022</h5>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card" style="width: 18rem;">
                    <a href="#">
                        <img src="https://www.naikmotor.com/wp-content/uploads/2022/06/WhatsApp-Image-2022-06-15-at-11.34.55-AM.jpeg"
                            class="card-img-top img-fluid img-thumbnail" alt="img" style="max-height: 160px;">
                        <div class="card-body">
                            <h5 class="card-title">Pameran Sepeda Motor Jakarta Fair 2022</h5>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card" style="width: 18rem;">
                    <a href="#">
                        <img src="https://asset.kompas.com/crops/f2xxvZU1vo7EeN1PQ86W9vAtKUA=/0x0:0x0/750x500/data/photo/2022/03/31/6245b999a1a89.jpeg"
                            class="card-img-top" alt="img" style="max-height: 160px;">
                        <div class="card-body">
                            <h5 class="card-title">Pameran Sepeda Motor IIMS Hybrid 2022</h5>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card" style="width: 18rem;">
                    <a href="#">
                        <img src="https://kunoid.s3.ap-southeast-1.amazonaws.com/prod/blog/mKHCDY8uaI.webp"
                            class="card-img-top" alt="img" style="max-height: 160px;">
                        <div class="card-body">
                            <h5 class="card-title">Indonesia Custom Show (ICS) 2022</h5>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<?= $this->include('parts/footer'); ?>