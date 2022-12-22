<?= $this->include('parts/head'); ?>
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
                <li class="breadcrumb-item">Produk</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-sm-4">

                <div class="card" style="width: 18rem;">
                    <img src="https://ae01.alicdn.com/kf/Hb4d06c33cc16498fa9de77d69f4d520fh/Set-Perlengkapan-Balap-Motocross-Celana-Jersey-Rubah-Halus-MX-Combo-BMX-Pakaian-Sepeda-Motor-Trail-Setelan.jpg_Q90.jpg_.webp"
                        class="card-img-top" alt="img">
                    <sdiv class="card-body">
                        <a href="<?= site_url('/detailProduk') ?>">
                            <h5 class="card-title">Set Perlengkapan Balap Motocross Celana Jersey</h5>
                        </a>
                        <p class="card-text">Rp 750.000</p>
                        <a href="#" class="btn btn-primary">Beli sekarang</a>
                    </sdiv>
                </div>

            </div>
            <div class="col-sm-4">

                <div class="card" style="width: 18rem;">
                    <img src="https://ae01.alicdn.com/kf/H7acf0a993bf34451b2a46cc7bd466a17Z/Set-Perlengkapan-Motor-Chaos-MX-BMX-Celana-Jersey-Sepeda-Motor-Trail-Gunung-Willbros-Kit-Balap-Motocross.jpg_Q90.jpg_.webp"
                        class="card-img-top" alt="img">
                    <sdiv class="card-body">
                        <h5 class="card-title">Set Perlengkapan Motor Jersey Sepeda Motor</h5>
                        <p class="card-text">Rp 750.000</p>
                        <a href="#" class="btn btn-primary">Beli sekarang</a>
                    </sdiv>
                </div>

            </div>
            <div class="col-sm-4">

                <div class="card" style="width: 18rem;">
                    <img src="https://ae01.alicdn.com/kf/He8d7b3652b1d4b8586685f9208d414e1F/Jaket-Motor-Wanita-DUHAN-Celana-Wanita-Pakaian-Jaket-Sepeda-Motor-Celana-Panjang-dengan-Perlengkapan-Pelindung-CE.jpg_Q90.jpg_.webp"
                        class="card-img-top" alt="img">
                    <sdiv class="card-body">
                        <h5 class="card-title">Jaket Motor Wanita DUHAN Celana Wanita</h5>
                        <p class="card-text">Rp 750.000</p>
                        <a href="#" class="btn btn-primary">Beli sekarang</a>
                    </sdiv>
                </div>

            </div>
        </div>
    </section>

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<?= $this->include('parts/footer'); ?>