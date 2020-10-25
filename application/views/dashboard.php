<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Analisa Produk Kecantikan</title>
    <link href="<?php echo base_url('assets/img/make-up.png')?>" rel="icon" type="image/png">
    <!-- BOOTSTRAP CORE CSS -->
    <link href="<?php echo base_url('assets/css/bootstrap.css')?>" rel="stylesheet" />
    <!-- IONICON STYLE SHEET FOR BEAUTIFUL ICONS -->
    <link href="<?php echo base_url('assets/css/ionicons.css')?>" rel="stylesheet" />
    <!-- STYLE FOR OPENING IMAGE IN POPUP USING FANCYBOX-->
    <link href="<?php echo base_url('assets/js/source/jquery.fancybox.css')?>" rel="stylesheet" />
    <!-- CUSTOM CSS -->
    <link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet" />
    <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body data-spy="scroll" data-target=".navbar-fixed-top">

    <div class="navbar navbar-default navbar-fixed-top scroll-me">
        <!-- pass scroll-me class above a tags to starts scrolling -->
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img src="<?php echo base_url('assets/img/make-up.png')?>"  alt=""/>
                </a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#header">HOME</a></li>
                    <li><a href="#services">SERVICES</a></li>
                     <li><a href="#testimonial">DATA</a></li>
                    <li><a href="#categories">CATEGORIES</a></li>
                    <li><a href="#contact">CONTACT</a></li>
                </ul>
            </div>

        </div>
    </div>
    <!-- NAVBAR END  -->
    <div id="header">
        <div class="overlay">
            <div class="container">
                <div class="row scroll-me">
                    <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 text-center ">

                        <h1 data-scroll-reveal="enter from the bottom after 0.2s">ANALISA PRODUK KECANTIKAN
                        </h1>

                        <h4 data-scroll-reveal="enter from the bottom after 0.4s">Aplikasi berbentuk website untuk analisa beberapa produk kecantikan yang ada di Indonesia.

                        </h4>
                        <a data-scroll-reveal="enter from the bottom after 0.6s" href="#categories" class="btn btn-danger set-bk-clr">Analysis Page</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--HEADER SECTION END  -->
    <section id="services">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-6 col-md-offset-3 pad-bottom" data-scroll-reveal="enter from the bottom after 0.2s">
                    <h2><strong>SERVICES</strong></h2>
                    Pada website ini akan tersedia layanan analisa di bawah ini :

                </div>
            </div>
            <div class="row text-center pad-bottom" data-scroll-reveal="enter from the bottom after 0.4s">
                <div class="col-md-3">
                    <i class="ion-ios-home-outline"></i>
                    <h4><strong>Home </strong></h4>
                    Halaman ini adalah halaman awal yang muncul saat pertama kali website diluncurkan, serta menyediakan informasi umum yang berkaitan dengan penelitian ini. 
                </div>
                <div class="col-md-3">
                    <i class="ion-ios-browsers-outline"></i>
                    <h4><strong>Kategori Produk Kecantikan </strong></h4>
                    Bagian ini menyediakan informasi berupa 3 brand pada setiap kategori produk kecantikan yang dipakai pada penelitian ini. Jika kita memilih salah satu dari ketiga brand tersebut, akan diarahkan pada halaman hasil.
                </div>
                <div class="col-md-3">
                    <i class="ion-ios-chatboxes-outline"></i>
                    <h4><strong>Hasil Analisa dan Kriteria Penilian </strong></h4>
                    Halaman ini menyediakan informasi berupa hasil analisa sentimen dan kriteria penilaia pada sebuah review, dimana terdapat score sentimen, hasil akhir sentimen, hasil kriteria penilaian, beserta waktu review tersebut dibuat.
                </div>
                <div class="col-md-3">
                    <i class="ion-ios-pulse-strong"></i>
                    <h4><strong>Visualisasi </strong></h4>
                    Halaman ini menyediakan visualisasi perbandingan hasil sentimen per bulan serta hasil kriteria penilaian dari 3 brand pada setiap kategori dan menampilkan hasil perbandingan brand yang diminati pada setiap kategori.
                </div>
            </div>
        </div>
    </section>
    <!-- SERVICES SECTION END  -->
    <div id="testimonial" data-scroll-reveal="enter from the bottom after 0.2s">
        <div class="overlay">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4">
                        <i class="ion-ios-drag clr-set f-big"></i>
                        <br />
                        <p>
                            Data yang sudah dikumpulkan totalnya adalah 6356 data. Sumber data berasal dari website review produk kecantikan yaitu femaledaily.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CLIENTS SECTION END  -->
    <section id="categories">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-6 col-md-offset-3 pad-bottom" data-scroll-reveal="enter from the bottom after 0.2s">
                    <h2><strong>CATEGORIES</strong></h2>
                    Berikut adalah kategori produk kecantikan yang digunakan dalam penelitian ini :

                </div>
            </div>
            <div class="row pad-bottom" data-scroll-reveal="enter from the bottom after 0.4s">
                <div class="col-md-4">
                    <img src="<?php echo base_url('assets/img/facial.png')?>" alt="" width="70px"/>
                    <h4><strong>Masker </strong></h4>
                    Masker memiliki banyak manfaatnya salah satunya adalah memperbaiki masalah kulit wajah.
                    <ol>
                        <li style="margin-left : -23px">
                            <a href="<?php echo site_url('Freeman_C') ?>" style="color : black">Freeman Beauty</a>
                        </li>
                        <li style="margin-left : -23px">
                            <a href="<?php echo site_url('Mediheal_C') ?>" style="color : black">Mediheal</a>
                        </li>
                        <li style="margin-left : -23px">
                            <a href="<?php echo site_url('Emina_C') ?>" style="color : black">Emina Cosmetics</a>
                        </li>
                        <li style="margin-left : -23px">
                            <a href="<?php echo site_url('ChartMask_C') ?>" style="color : black">Chart Hasil</a>
                        </li>
                    </ol>
                </div>
                <div class="col-md-4">
                    <img src="<?php echo base_url('assets/img/lipstick.png')?>" alt="" width="70px"/>
                    <h4><strong>Lipstick </strong></h4>
                    Lipstick adalah salah satu barang yang sering digunakan untuk menunjang penampilan. 
                    <ol>
                        <li style="margin-left : -23px">
                            <a href="<?php echo site_url('Purbasari_C') ?>" style="color : black">Purbasari</a>
                        </li>
                        <li style="margin-left : -23px">
                            <a href="<?php echo site_url('Maybelline_C') ?>" style="color : black">Maybelline</a>
                        </li>
                        <li style="margin-left : -23px">
                            <a href="<?php echo site_url('Wardah_C') ?>" style="color : black">Wardah Beauty</a>
                        </li>
                        <li style="margin-left : -23px">
                            <a href="<?php echo site_url('ChartLips_C') ?>" style="color : black">Chart Hasil</a>
                        </li>
                    </ol>
                </div>
                <div class="col-md-4">
                    <img src="<?php echo base_url('assets/img/powder.png')?>" alt="" width="70px"/>
                    <h4><strong>Bedak </strong></h4>
                    Bedak merupakan salah satu produk kecantikan yang pasti digunakan setiap harinya.
                    <ol>
                        <li style="margin-left : -23px">
                            <a href="<?php echo site_url('Innisfree_C') ?>" style="color : black">Innisfree</a>
                        </li>
                        <li style="margin-left : -23px">
                            <a href="<?php echo site_url('Marcks_C') ?>" style="color : black">Marcks Bedak</a>
                        </li>
                        <li style="margin-left : -23px">
                            <a href="<?php echo site_url('Ponds_C') ?>" style="color : black">Ponds</a>
                        </li>
                        <li style="margin-left : -23px">
                            <a href="<?php echo site_url('ChartPowder_C') ?>" style="color : black">Chart Hasil</a>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="row pad-bottom" data-scroll-reveal="enter from the bottom after 0.4s">
                <div class="col-md-4">
                    <img src="<?php echo base_url('assets/img/wash.png')?>" alt="" width="70px"/>
                    <h4><strong>Sabun </strong></h4>
                    Agar wajah kita tetap segar dan tidak kusam, tentunya kita harus selalu menggunakan sabun.
                    <ol>
                        <li style="margin-left : -23px">
                            <a href="<?php echo site_url('Acnes_C') ?>" style="color : black">Metholatum Acnes</a>
                        </li>
                        <li style="margin-left : -23px">
                            <a href="<?php echo site_url('CleanClear_C') ?>" style="color : black">Clean and Clear</a>
                        </li>
                        <li style="margin-left : -23px">
                            <a href="<?php echo site_url('Cetaphil_C') ?>" style="color : black">Cetaphil</a>
                        </li>
                        <li style="margin-left : -23px">
                            <a href="<?php echo site_url('ChartSabun_C') ?>" style="color : black">Chart Hasil</a>
                        </li>
                    </ol>
                </div>
                <div class="col-md-4">
                    <img src="<?php echo base_url('assets/img/tube.png')?>" alt="" width="70px"/>
                    <h4><strong>Toner </strong></h4>
                    Toner memiliki banyak kandungan yang sangat bermanfaat bagi kesehatan kulit wajah kita.
                    <ol>
                        <li style="margin-left : -23px">
                            <a href="<?php echo site_url('HadoLabo_C') ?>" style="color : black">Hado Labo</a>
                        </li>
                        <li style="margin-left : -23px">
                            <a href="<?php echo site_url('SomeByMi_C') ?>" style="color : black">Some By Mi</a>
                        </li>
                        <li style="margin-left : -23px">
                            <a href="<?php echo site_url('Viva_C') ?>" style="color : black">Viva</a>
                        </li>
                        <li style="margin-left : -23px">
                            <a href="<?php echo site_url('ChartToner_C') ?>" style="color : black">Chart Hasil</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- WORK SECTION END  -->
    <section id="contact">
        <div class="overlay">
            <div class="container">
                <div class="row text-center" data-scroll-reveal="enter from the bottom after 0.2s">
                    <div class="col-md-6 col-md-offset-3 pad-bottom">
                        <h2><strong>CONTACT </strong></h2>
                        Berikut ini adalah kontak penulis yang bisa dihubungi :

                    </div>
                </div>

                <div class="row text-center" data-scroll-reveal="enter from the bottom after 0.4s">

                    <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                        <h3><strong>Email : </strong></h3>
                        <br />
                        <h4>deyanakusuma@it.student.pens.ac.id</h4>
                        <h4><strong>Telephone : </strong>081331656967</h4>
                    </div>

                </div>



            </div>
        </div>
    </section>
    <!-- CONTACT SECTION END -->
    <footer>
        &copy 2020 PENS  | <a target="_blank">by Deyana Kusuma Wardani</a>
    </footer>
    <!--FOOTER SECTION END  -->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  SCRIPTS -->
    <script src="<?php echo base_url('assets/js/jquery-1.11.1.js')?>"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="<?php echo base_url('assets/js/bootstrap.js')?>"></script>
    <!-- SCROLLING SCRIPTS PLUGIN  -->
    <script src="<?php echo base_url('assets/js/jquery.easing.min.js')?>"></script>
    <!--  FANCYBOX PLUGIN -->
    <script src="<?php echo base_url('assets/js/source/jquery.fancybox.js')?>"></script>
    <!-- ISOTOPE SCRIPTS -->
    <script src="<?php echo base_url('assets/js/jquery.isotope.js')?>"></script>
     <!-- SCROLL ANIMATIONS  -->
    <script src="<?php echo base_url('assets/js/scrollReveal.js')?>"></script>
    <!-- CUSTOM SCRIPTS   -->
    <script src="<?php echo base_url('assets/js/custom.js')?>"></script>

</body>
</html>
