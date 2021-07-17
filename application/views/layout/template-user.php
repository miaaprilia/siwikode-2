<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Aria is a business focused HTML landing page template built with Bootstrap to help you create lead generation websites for companies and their services.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content="" />
    <!-- website name -->
    <meta property="og:site" content="" />
    <!-- website link -->
    <meta property="og:title" content="" />
    <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" />
    <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" />
    <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" />
    <!-- where do you want your post to link to -->
    <meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>SIWIKODE</title>
    <link href="<?= base_url(''); ?>public/ruangadmin/img/logo/LOGO1-01.png" rel="icon" sizes="32x32" type="image/png" />

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="<?= base_url(''); ?>public/user/css/bootstrap.css" rel="stylesheet">
    <link href="<?= base_url(''); ?>public/user/css/fontawesome-all.css" rel="stylesheet">
    <link href="<?= base_url(''); ?>public/user/css/swiper.css" rel="stylesheet">
    <link href="<?= base_url(''); ?>public/user/css/magnific-popup.css" rel="stylesheet">
    <link href="<?= base_url(''); ?>public/user/css/styles.css" rel="stylesheet">

    <!-- Favicon  -->
    <link rel="icon" href="<?= base_url(''); ?>public/images/favicon.png">
</head>

<body data-spy="scroll" data-target=".fixed-top">

    <!-- Preloader -->
    <div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>

    <nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top">
        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Aria</a> -->

        <!-- Image Logo -->
        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->
        <style>
            h1 {
                color: white;
            }
        </style>
        <h1>SIWIKODE
        </h1>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"> 
                    <a class="nav-link page-scroll" href="<?= base_url() ?>#home">HOME <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="<?= base_url() ?>#gallery-wisata">GALLERY WISATA</a>
                </li>
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle page-scroll" href="#registrasi" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">REGISTRASI</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?= base_url() ?>/registrasi/rekreasi"><span class="item-text">WISATA REKREASI</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="<?= base_url() ?>/registrasi/kuliner"><span class="item-text">WISATA KULINER</span></a>
                    </div>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="<?= base_url() ?>#about">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="<?= base_url() ?>#login">LOGIN</a>
                </li>
            </ul>
    </nav>

    <?php $this->load->view($content); ?>

    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">copyright &copy; <script>
                            document.write(new Date().getFullYear());
                        </script> - developed by
                        <b> SI06 Mahasiswa STT-NF </b>
                    </p>
                </div>
                <!-- end of col -->
            </div>
            <!-- enf of row -->
        </div>
        <!-- end of container -->
    </div>
    <!-- end of copyright -->
    <!-- end of copyright -->


    <!-- Scripts -->

    <!--  <script src="<?= base_url(''); ?>public/user/js/script.js"></script> -->
    <script src="<?= base_url(''); ?>public/user/js/jquery.min.js"></script>
    <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="<?= base_url(''); ?>public/user/js/popper.min.js"></script>
    <!-- Popper tooltip library for Bootstrap -->
    <script src="<?= base_url(''); ?>public/user/js/bootstrap.min.js"></script>
    <!-- Bootstrap framework -->
    <script src="<?= base_url(''); ?>public/user/js/jquery.easing.min.js"></script>
    <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="<?= base_url(''); ?>public/user/js/swiper.min.js"></script>
    <!-- Swiper for image and text sliders -->
    <script src="<?= base_url(''); ?>public/user/js/jquery.magnific-popup.js"></script>
    <!-- Magnific Popup for lightboxes -->
    <script src="<?= base_url(''); ?>public/user/js/morphext.min.js"></script>
    <!-- Morphtext rotating text in the header -->
    <script src="<?= base_url(''); ?>public/user/js/isotope.pkgd.min.js"></script>
    <!-- Isotope for filter -->
    <script src="<?= base_url(''); ?>public/user/js/validator.min.js"></script>
    <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="<?= base_url(''); ?>public/user/js/scripts.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.form-checkbox').click(function() {
                if ($(this).is(':checked')) {
                    $('.form-control-input').attr('type', 'text');
                } else {
                    $('.form-control-input').attr('type', 'password');
                }
            });
        });
    </script>



    <!-- Custom scripts -->
</body>

</html>