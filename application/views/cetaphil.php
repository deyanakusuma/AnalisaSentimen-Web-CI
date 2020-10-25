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
        .justify { text-align: justify;}
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
                    <img src="<?php echo base_url('assets/img/cetaphil.png')?>" alt="" width="650px" height="500px"/>
                </div>
                <div class="col-md-4">
                    <h1><strong>CETAPHIL </strong></h1>
                    <br>
                    <p class="justify">Cetaphil adalah sebuah merek perawatan kulit yang telah teruji secara dermatologi selama lebih dari 70 tahun dan digunakan oleh jutaan wanita di seluruh dunia dengan jenis kulit sensitif hingga sekarang. Sekarang Cetaphil telah memiliki rangkaian produk perawatan kulit mulai dari pelembap wajah dan tubuh, pembersih, produk untuk kulit bayi, tabir surya hingga produk yang dibuat untuk masalah kulit pada umumnya.</p> 
                    <br>
                    <h4 style="color:Gray;">Harga</h4>
                    <p>Rp. 65.000,- s/d Rp. 418.500,-</p>
                    <br>
                    <h4 style="color:Gray;">Batas Usia</h4>
                    <p>Remaja hingga Dewasa (Beberapa produk bisa untuk bayi)</p>
                    <br>
                    <h4 style="color:Gray;">Hasil Respon Customer</h4>
                    <p style="color:Green;">Positif: <?php echo $positif ?></p> 
                    <p style="color:Red;">Negatif: <?php echo $negatif ?></p>
                    <p style="color:Blue;">Negatif: <?php echo $netral ?></p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row text-center">
                <div class="col-md-6 col-md-offset-3 pad-bottom" data-scroll-reveal="enter from the bottom after 0.2s">
                    <h2><strong>Review Konsumen</strong></h2>
                </div>
            </div>
            <div class="table100 ver4 m-b-110">
					<div class="table100-head">
						<table>
							<thead>
								<tr class="row100 head">
									<th class="cell100 column1"><center>Review</center></th>
									<th class="cell100 column1"></th>
								</tr>
							</thead>
						</table>
					</div>

					<div class="table100-body js-pscroll">
						<table>
							<tbody>
                                <?php foreach ($opinis as $opini): ?>
								<tr class="row100 body">
                                    <td class="cell100 column1"><p class="justify"><?php echo $opini->review ?></p></td>
                                    <td class="cell100 column5"></td>
									<td class="cell100 column5">
                                        <a class="btn btn-success" href="<?php echo site_url('Cetaphil_C/edit/'.$opini->id) ?>" class="edit">Hasil Sentimen</a>
                                    </td>
                                    
								</tr>
                                <?php endforeach; ?>
							</tbody>
						</table>
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
