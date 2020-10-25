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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/main.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/util.css')?>">
    <style type="text/css">
        .justify { 
            text-align: justify;
            width: 500px;
        }
    </style>
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
                    <li><a href="<?php echo site_url('Dashboard_c') ?>">HOME</a></li>
                </ul>
            </div>

        </div>
    </div>
    <!-- NAVBAR END  -->
    <section id="categories">
        <div class="container">
            <div class="row pad-bottom" data-scroll-reveal="enter from the bottom after 0.4s">
                <div class="col-md-7">
                    <img src="<?php echo base_url('assets/img/somebymi.jpg')?>" alt="" width="650px" height="500px"/>
                </div>
                <div class="col-md-4">
                    <h1><strong>SOME BY MI </strong></h1>
                    <br>
                    <h4 style="color:Gray;">Review</h4>
                    <p class="justify"><?php echo $review ?></p> 
                    <br>
                    <h4 style="color:Gray;">Pre Processing</h4>
                    <p class="justify"><?php echo $prepro ?></p> 
                    <br>
                    <h4 style="color:Gray;">Kata-kata Sentimen</h4>
                    <?php for($i=0;$i<count($arr_prepro);$i++) { ?>
                        <?php if($arr_prepro[$i]['value'] == 1){ ?>
                            <span><font color="#008000"><?= $arr_prepro[$i]['word'] ?> </font></span>
                        <?php } ?>
                        <?php if($arr_prepro[$i]['value'] == -1){ ?>
                            <span><font color="#FB275A"><?= $arr_prepro[$i]['word'] ?></font></span>
                        <?php } ?>
                        <?php if($arr_prepro[$i]['value'] == 0){ ?>
                            <span><font color="#848482"><?= $arr_prepro[$i]['word'] ?></font></span>
                        <?php } ?>
                    <?php } ?>
                    <br>
                    <br>
                    <h4 style="color:Gray;">Score</h4>
                    <p class="justify"><?php echo $score ?></p> 
                    <br>
                    <h4 style="color:Gray;">Kategori</h4>
                    <p class="justify"><?php echo $kategori ?></p>
                    <br>
                    <h4 style="color:Gray;">Waktu Review</h4>
                    <p class="justify"><?php echo $data_time ?></p> 
                    <br>
                    <h4 style="color:Gray;">Hasil Sentiment</h4>
                    <p class="justify"><?php echo $result ?></p> 
                </div>
            </div>
        </div>
    </section>
    <!-- SERVICES SECTION END  -->
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
