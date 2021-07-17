<style>
    .header {
        background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.5)), url('<?= base_url() ?>public/user/img/background-1.jpg') center center no-repeat;
        background-size: cover;
    }
</style>

<!-- Header -->
<header id="home" class="header">
    <div class="header-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-container">
                        <h1>SIWIKODE</h1>
                        <h3>--- Sistem Informasi Wisata Kota Depok ---</h3>
                        <p class="p-heading p-large">Anda berkunjung, kami tersanjung</p>
                        <a class="btn-solid-lg page-scroll" href="#gallery-wisata">TELUSURI</a>
                    </div>
                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->
    </div>
    <!-- end of header-content -->
</header>
<!-- end of header -->
<!-- end of header -->

<div id="gallery-wisata" class="filter">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">GALLERY SIWIKODE</div>
                <h2>GALLERY WISATA REKREASI & KULINER</h2>
            </div>
            <!-- end of col -->
        </div>
        <!-- end of row -->
        <div class="row">
            <div class="col-lg-12">
                <!-- Filter -->
                <div class="button-group filters-button-group">
                    <a class="button is-checked" data-filter="*"><span>TAMPILKAN SEMUA</span></a>
                    <a class="button" data-filter=".rekreasi"><span>WISATA REKREASI</span></a>
                    <a class="button" data-filter=".kuliner"><span>WISATA KULINER</span></a>
                    <!-- <a class="button" data-filter=".marketing"><span>MARKETING</span></a>
                        <a class="button" data-filter=".seo"><span>SEO</span></a> -->
                </div>
                <!-- end of button group -->
                <div class="grid">
                    <div class="element-item rekreasi">
                        <a class="popup-with-move-anim" href="#project-1">
                            <div class="element-item-overlay"><span>SETU BABAKAN</span></div><img src="<?= base_url(''); ?>public/user/img/rekreasi/rekreasi-6.jpg" alt="alternative">
                        </a>
                    </div>
                    <div class="element-item rekreasi">
                        <a class="popup-with-move-anim" href="#project-2">
                            <div class="element-item-overlay"><span>KUBAH MAS</span></div><img src="<?= base_url(''); ?>public/user/img/rekreasi/rekreasi-7.jpg" alt="alternative">
                        </a>
                    </div>
                    <div class="element-item rekreasi">
                        <a class="popup-with-move-anim" href="#project-3">
                            <div class="element-item-overlay"><span>RAGUNAN</span></div><img src="<?= base_url(''); ?>public/user/img/rekreasi/rekreasi-8.jpg" alt="alternative">
                        </a>
                    </div>
                    <div class="element-item rekreasi">
                        <a class="popup-with-move-anim" href="#project-4">
                            <div class="element-item-overlay"><span>TAMAN REKREASI WILADATIKA</span></div><img src="<?= base_url(''); ?>public/user/img/rekreasi/rekreasi-5.jpg" alt="alternative">
                        </a>
                    </div>
                    <div class="element-item kuliner">
                        <a class="popup-with-move-anim" href="#project-5">
                            <div class="element-item-overlay"><span>WARUNG PASTA</span></div><img src="<?= base_url(''); ?>public/user/img/kuliner/kuliner-6.jpg" alt="alternative">
                        </a>
                    </div>
                    <div class="element-item kuliner">
                        <a class="popup-with-move-anim" href="#project-6">
                            <div class="element-item-overlay"><span>GHAWIL CAFE & COFFE</span></div><img src="<?= base_url(''); ?>public/user/img/kuliner/kuliner-9.jpg" alt="alternative">
                        </a>
                    </div>
                    <div class="element-item kuliner">
                        <a class="popup-with-move-anim" href="#project-7">
                            <div class="element-item-overlay"><span>CAFE N COFFE</span></div><img src="<?= base_url(''); ?>public/user/img/kuliner/kuliner-8.jpeg" alt="alternative">
                        </a>
                    </div>
                    <div class="element-item kuliner">
                        <a class="popup-with-move-anim" href="#project-8">
                            <div class="element-item-overlay"><span>KAFE PANGESTU</span></div><img src="<?= base_url(''); ?>public/user/img/kuliner/kuliner-7.jpeg" alt="alternative">
                        </a>
                    </div>
                </div>
                <!-- end of grid -->
                <!-- end of filter -->

            </div>
            <!-- end of col -->
        </div>
        <!-- end of row -->
    </div>
    <!-- end of container -->
</div>
<!-- end of filter -->
<!-- end of projects -->


<!-- Project Lightboxes -->
<!-- Lightbox -->
<div id="project-1" class="lightbox-basic zoom-anim-dialog mfp-hide">
    <div class="row">
        <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
        <div class="col-lg-8">
            <img class="img-fluid" src="<?= base_url(''); ?>public/user/img/rekreasi/rekreasi-6.jpg" alt="alternative">
        </div>
        <!-- end of col -->
        <div class="col-lg-4">
            <h4>SETU BABAKAN</h4>
            <hr class="line-heading">
            <p>Situ Babakan merupakan kawasan kampung cagar budaya Betawi yang terletak di Jakarta Selatan. Di sini, terdapat banyak kegiatan budaya dan penjaja kuliner yang bisa dieksplor bersama anak-anak. </p><br />
            <p>Di Srengseng Sawah, Kecamatan Jagakarsa, Jakarta Selatan, terdapat sebuah perkampungan Betawi yang masih dijaga kelestariannya. Perkampungan budaya Betawi lengkap dengan rumah-rumah tradisional Betawi ini dikelilingi dua buah danau buatan,
                yaitu Setu Babakan dan Situ Mangga Bolong. Setu Babakan memiliki luas sekitar 30 hektare dengan kedalaman sekitar 1-5 meter. </p><br />
            <a class="btn-solid-reg" href="<?php echo base_url() ?>admin/detail_testimoni">DETAILS</a> <a class="btn-outline-reg mfp-close as-button" href="#gallery-wisata">BACK</a>
        </div>
        <!-- end of col -->
    </div>
    <!-- end of row -->
</div>
<!-- end of lightbox-basic -->
<!-- end of lightbox -->

<!-- Lightbox -->
<div id="project-2" class="lightbox-basic zoom-anim-dialog mfp-hide">
    <div class="row">
        <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
        <div class="col-lg-8">
            <img class="img-fluid" src="<?= base_url(''); ?>public/user/img/rekreasi/rekreasi-7.jpg" alt="alternative">
        </div>
        <!-- end of col -->
        <div class="col-lg-4">
            <h4>KUBAH MAS</h4>
            <hr class="line-heading">
            <p>Masjid Kubah Mas merupakan Masjid yang dibangun oleh Hj. Dian Djuriah Maimun Al Rasyid, pengusaha asal Banten, yang telah memiliki tanah ini sejak tahun 1996. Masjid ini mulai dibangun sejak tahun 2001 dan selesai akhir tahun 2006.</p><br />
            <p>Sebuah masjid yang dibangun di tepi jalan Raya Meruyung, Limo, Depok di Kecamatan Limo, Depok. Masjid ini selain sebagai menjadi tempat ibadah salat bagi umat muslim sehari-hari, kompleks masjid ini juga menjadi kawasan wisata keluarga
                dan menarik perhatian banyak orang karena kubah-kubahnya yang dibuat dari emas. Selain itu karena luasnya area yang ada dan bebas diakses untuk umum, sehingga tempat ini sering menjadi tujuan liburan keluarga atau hanya sekadar dijadikan
                tempat beristirahat.</p><br />
            <a class="btn-solid-reg" href="<?php echo base_url() ?>admin/detail_testimoni2">DETAILS</a> <a class="btn-outline-reg mfp-close as-button" href="#gallery-wisata">BACK</a>
        </div>
        <!-- end of col -->
    </div>
    <!-- end of row -->
</div>
<!-- end of lightbox-basic -->
<!-- end of lightbox -->

<!-- Lightbox -->
<div id="project-3" class="lightbox-basic zoom-anim-dialog mfp-hide">
    <div class="row">
        <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
        <div class="col-lg-8">
            <img class="img-fluid" src="<?= base_url(''); ?>public/user/img/rekreasi/rekreasi-8.jpg" alt="alternative">
        </div>
        <!-- end of col -->
        <div class="col-lg-4">
            <h4>RAGUNAN</h4>
            <hr class="line-heading">
            <p>Ragunan merupakan taman hutan hujan besar dengan pusat primata, gajah, dan harimau Sumatra, serta jalan setapak teduh yang populer di kalangan para pelari. Di dekatnya, terdapat Taman Anggrek Ragunan yang merupakan area terbuka hijau publik
                dengan taman anggrek.</p><br />
            <p>Taman Margasatwa Ragunan didirikan pada tanggal 19 September tahun 1864 di Batavia (kini Jakarta) dengan nama “Planten en Dierentuin” ini pertama kali di kelola oleh perhimpunan penyayang Flora dan Fauna Batavia (Culture Vereniging Planten
                en Dierentuin at Batavia).</p><br />
            <a class="btn-solid-reg" href="<?php echo base_url() ?>admin/detail_testimoni3">DETAILS</a><a class="btn-outline-reg mfp-close as-button" href="#gallery-wisata">BACK</a>
        </div>
        <!-- end of col -->
    </div>
    <!-- end of row -->
</div>
<!-- end of lightbox-basic -->
<!-- end of lightbox -->

<!-- Lightbox -->
<div id="project-4" class="lightbox-basic zoom-anim-dialog mfp-hide">
    <div class="row">
        <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
        <div class="col-lg-8">
            <img class="img-fluid" src="<?= base_url(''); ?>public/user/img/rekreasi/rekreasi-5.jpg" alt="alternative">
        </div>
        <!-- end of col -->
        <div class="col-lg-4">
            <h4>TAMAN REKREASI WILADATIKA</h4>
            <hr class="line-heading">
            <p>Taman Rekreasi Wiladatika merupakan taman yang diresmikan oleh Presiden Soeharto pada 29 Juni 1980, Taman Rekreasi Wiladatika menjadi salah satu referensi wisata warga Depok dan sekitarnya..</p><br />
            <p>Taman Rekreasi Wiladatika dibangun di lahan luas dan dilengkapi beragam fasilitas. Fasilitas tersebut di antaranya bermacam-macam taman, gedung serbaguna, gazebo, hingga kolam renang dan wahana permainan. Tempatnya terawat, nyaman, dan
                asri, membuat wisatawan betah menjadikan Taman Rekreasi Wiladatika sebagai tujuan berlibur, salah satunya liburan keluarga.</p><br />
            <a class="btn-solid-reg" href="<?php echo base_url() ?>admin/detail_testimoni4">DETAILS</a> <a class="btn-outline-reg mfp-close as-button" href="#gallery-wisata">BACK</a>
        </div>
        <!-- end of col -->
    </div>
    <!-- end of row -->
</div>
<!-- end of lightbox-basic -->
<!-- end of lightbox -->

<!-- Lightbox -->
<div id="project-5" class="lightbox-basic zoom-anim-dialog mfp-hide">
    <div class="row">
        <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
        <div class="col-lg-8">
            <img class="img-fluid" src="<?= base_url(''); ?>public/user/img/kuliner/kuliner-6.jpg" alt="alternative">
        </div>
        <!-- end of col -->
        <div class="col-lg-4">
            <h4>WARUNG PASTA</h4>
            <hr class="line-heading">
            <p>Salah satu tempat makan yang cukup rame di Margonda. Harganya affordable buat mahasiswa / anak sekolah jadi sering rame dipakai nongkrong atau nugas kalau sore atau weekend. Pastanya ada macam-macam dan minuman disini juga ada yang refillable.</p><br />
            <p>Warung Pasta Depok bertempat di pinggir jalan raya margonda. Kalo dari arah pasar minggu berada di sebelah kiri. Petama masuk tempatnya itu dominasi tembok kaca.</p><br />
            <a class="btn-solid-reg" href="<?php echo base_url() ?>admin/detail_testimoni5">DETAILS</a> <a class="btn-outline-reg mfp-close as-button" href="#gallery-wisata">BACK</a>
        </div>
        <!-- end of col -->
    </div>
    <!-- end of row -->
</div>
<!-- end of lightbox-basic -->
<!-- end of lightbox -->

<!-- Lightbox -->
<div id="project-6" class="lightbox-basic zoom-anim-dialog mfp-hide">
    <div class="row">
        <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
        <div class="col-lg-8">
            <img class="img-fluid" src="<?= base_url(''); ?>public/user/img/kuliner/kuliner-9.jpg" alt="alternative">
        </div>
        <!-- end of col -->
        <div class="col-lg-4">
            <h4>GHAWIL CAFE & COFFE</h4>
            <hr class="line-heading">
            <p>Ghawil Cafe & Coffe merupakan tempat makan atau nongkrong yang sering dikunjungi oleh kalangan anak muda maupun orang tua sekalipun karena tempatnya terjangkau dan nyaman.</p><br />
            <p>Daerah Grand Depok City merupakan wilayah perumahan yang menjadi salah satu akses warga Depok untuk menuju ke Bogor, tak heran jalurnya cukup ramai dengan lalu lalang kendaraan. Hal inilah yang dimanfaatkan oleh Ghawil Cafe & Coffee. Berlokasi
                di jl. Boulevard GDC, tepatnya bersebrangan dengan Depok Fantasi</p><br />
            <a class="btn-solid-reg" href="<?php echo base_url() ?>admin/detail_testimoni6">DETAILS</a> <a class="btn-outline-reg mfp-close as-button" href="#gallery-wisata">BACK</a>
        </div>
        <!-- end of col -->
    </div>
    <!-- end of row -->
</div>
<!-- end of lightbox-basic -->
<!-- end of lightbox -->

<!-- Lightbox -->
<div id="project-7" class="lightbox-basic zoom-anim-dialog mfp-hide">
    <div class="row">
        <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
        <div class="col-lg-8">
            <img class="img-fluid" src="<?= base_url(''); ?>public/user/img/kuliner/kuliner-8.jpeg" alt="alternative">
        </div>
        <!-- end of col -->
        <div class="col-lg-4">
            <h4>CAFE N COFFE</h4>
            <hr class="line-heading">
            <p>Cafe N Coffe merupakan sebuah usaha keluarga yang memanfaatkan bangunan pendopo dihalaman depan.</p><br />
            <p>Cafe yang baru aja dibuka ini, lokasinya bersebelahan banget sama garage motor, atau usaha bengkel motor & custom, tempatnya cukup sederhana, tapi cukup oke juga buat santai-santai. Ada area indoor dan outdoornya juga.</p><br />
            <a class="btn-solid-reg" href="<?php echo base_url() ?>admin/detail_testimoni7">DETAILS</a> <a class="btn-outline-reg mfp-close as-button" href="#gallery-wisata">BACK</a>
        </div>
        <!-- end of col -->
    </div>
    <!-- end of row -->
</div>
<!-- end of lightbox-basic -->
<!-- end of lightbox -->

<!-- Lightbox -->
<div id="project-8" class="lightbox-basic zoom-anim-dialog mfp-hide">
    <div class="row">
        <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
        <div class="col-lg-8">
            <img class="img-fluid" src="<?= base_url(''); ?>public/user/img/kuliner/kuliner-7.jpeg" alt="alternative">
        </div>
        <!-- end of col -->
        <div class="col-lg-4">
            <h4>KAFE PANGESTU</h4>
            <hr class="line-heading">
            <p>Kafe Pangestu merupakan tempat makan yg lebih berkesan mature namun tetep santai, dengan konsep minimalis dan edgy.</p><br />
            <p>The Newest at Margonda Raya, tepat di sebrang kober. Kafe yg menyajikan menu campuran antara western dan eastern ini juga memanjakan para pengunjung dengan menyediakan fasilitas wi fi yg oke lengkap dan dari segi makanannya sangat enak</p><br />
            <a class="btn-solid-reg" href="<?php echo base_url() ?>admin/detail_testimoni8">DETAILS</a> <a class="btn-outline-reg mfp-close as-button" href="#gallery-wisata">BACK</a>
        </div>
        <!-- end of col -->
    </div>
    <!-- end of row -->
</div>
<!-- end of lightbox-basic -->
<!-- end of lightbox -->
<!-- end of project lightboxes -->


<!-- Intro -->

<!-- end of call me -->
<div id="login" class="form-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">

                <div class="text-container">
                    <!-- <div class="section-title">CONTACT</div>
                         -->
                    <img src="<?= base_url(''); ?>public/user/img/background.jpg" alt="" width="530px" height="360px">
                </div>

                <!-- end of text-container -->
            </div>
            <!-- end of col -->

            <div class="col-lg-6">
                <br />
                <center>
                    <h2>LOGIN</h2>
                </center>
                <br />
                <!-- Contact Form -->
                <form action="<?php echo base_url('auth/check_login') ?>" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control-input" id="username" name="username" required>
                        <label class="label-control" for="cname">Username</label>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control-input" id="password" name="password" required>
                        <label class="label-control" for="cemail">Password</label>
                        <div class="help-block with-errors"></div>
                    </div>

                    <div class="form-group">
                        <button type="submit" id="submit-btn" class="form-control-submit-button">SIGN IN</button>
                    </div>
                    <div class="form-message">
                        <div id="cmsgSubmit" class="h3 text-center hidden"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<div id="about" class="container">
    <div class="row">
        <div class="col-lg-12">
            <!-- Testimonials -->
            <div class="slider">
                <div class="container">
                    <!-- end of row -->
                    <div class="row">
                        <div class="col-lg-12">

                            <!-- Card Slider -->
                            <div class="slider-container">
                                <div class="swiper-container card-slider">
                                    <div class="swiper-wrapper">

                                        <!-- Slide -->
                                        <div class="swiper-slide">
                                            <div class="card">
                                                <img class="card-image" src="<?= base_url(''); ?>public/user/img/team/team-1.jpg" alt="alternative">
                                                <div class="card-body">
                                                    <div class="testimonial-text">"Berbuat baiklah tanpa perlu alasan"</div>
                                                    <div class="testimonial-author">MIA APRILIA SATYA</div>
                                                    <div class="testimonial-author">(0110120010)</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end of swiper-slide -->
                                        <!-- end of slide -->

                                        <!-- Slide -->
                                        <div class="swiper-slide">
                                            <div class="card">
                                                <img class="card-image" src="<?= base_url(''); ?>public/user/img/team/team-2.jpeg" alt="alternative">
                                                <div class="card-body">
                                                    <div class="testimonial-text">“Dream Belive And Make It Happend”</div>
                                                    <div class="testimonial-author">MUHAMMAD NUR RAFIQ</div>
                                                    <div class="testimonial-author">(0110120120)</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end of swiper-slide -->
                                        <!-- end of slide -->

                                        <!-- Slide -->
                                        <div class="swiper-slide">
                                            <div class="card">
                                                <img class="card-image" src="<?= base_url(''); ?>public/user/img/team/team-3.jpeg" alt="alternative">
                                                <div class="card-body">
                                                    <div class="testimonial-text">"Perhaps you hate a thing but it's good for you; perhaps you love a thing but it's bad for you"</div>
                                                    <div class="testimonial-author">AFRA AFIAH AYYASY</div>
                                                    <div class="testimonial-author">(0110120156)</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end of swiper-slide -->
                                        <!-- end of slide -->

                                        <!-- Slide -->
                                        <div class="swiper-slide">
                                            <div class="card">
                                                <img class="card-image" src="<?= base_url(''); ?>public/user/img/team/team-4.jpeg" alt="alternative">
                                                <div class="card-body">
                                                    <div class="testimonial-text">"Money can make you happy, but money can't make you stop being sad"</div>
                                                    <div class="testimonial-author">ZULLIA TRI LESTARI</div>
                                                    <div class="testimonial-author">(0110120136)</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end of swiper-slide -->
                                        <!-- end of slide -->
                                        <!-- end of swiper-slide -->
                                        <!-- end of slide -->

                                    </div>
                                    <!-- end of swiper-wrapper -->

                                    <!-- Add Arrows -->
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
</div>
</div>
</div>
<div class="row">
    <style>
        .btn-group-sm>.btn,
        .btn-sm {
            padding: .25rem .5rem;
            font-size: .875rem;
            line-height: 1.5;
            border-radius: .2rem;
        }

        .btn-primary {
            color: #fff;
            background-color: #6777ef;
            border-color: #6777ef;
            -webkit-box-shadow: 0 .125rem .25rem 0 rgba(58, 59, 69, .2) !important;
            box-shadow: 0 .125rem .25rem 0 rgba(58, 59, 69, .2) !important;
            border-radius: .25rem;
        }

        .fab {
            font-family: "Font Awesome 5 Brands";
        }

        .fa-fw {
            text-align: center;
            width: 1.25em;
        }

        .fa,
        .fab,
        .fal,
        .far,
        .fas {
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            display: inline-block;
            font-style: normal;
            font-variant: normal;
            text-rendering: auto;
            line-height: 1;
        }

        .btn-primary:not(:disabled):not(.disabled).active,
        .btn-primary:not(:disabled):not(.disabled):active,
        .show>.btn-primary.dropdown-toggle {
            color: #fff;
            background-color: #394eea;
            border-color: #394eea;
        }

        .btn-primary:hover {
            color: #fff;
            background-color: #394eea;
            border-color: #394eea;
        }
    </style>
    <div class="col-lg-12 text-center">
        <p>Do you like this template ? you can download from <a href="https://github.com/miaaprilia/SIWIKODE" class="btn btn-primary btn-sm" target="_blank"><i class="fab fa-fw fa-github"></i>&nbsp;GitHub</a></p>
    </div>
</div>