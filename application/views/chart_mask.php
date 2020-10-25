<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
	<title>Analisa Produk Kecantikan</title>
    <link href="<?php echo base_url('assets/img/make-up.png')?>" rel="icon" type="image/png">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
	<script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- BOOTSTRAP CORE CSS -->
    <link href="<?php echo base_url('assets/css/bootstrap.css')?>" rel="stylesheet" />
    <!-- IONICON STYLE SHEET FOR BEAUTIFUL ICONS -->
    <link href="<?php echo base_url('assets/css/ionicons.css')?>" rel="stylesheet" />
    <!-- STYLE FOR OPENING IMAGE IN POPUP USING FANCYBOX-->
    <link href="<?php echo base_url('assets/js/source/jquery.fancybox.css')?>" rel="stylesheet" />
    <!-- CUSTOM CSS -->
    <link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet" />
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

<script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

    var data = google.visualization.arrayToDataTable([
        ['Brand', 'Jumlah Data'],
        ['Emina',     165],
        ['Freeman',      168],
        ['Mediheal',  171],
        ['Garnier', 53],
        ['Innisfree', 78],
        ['Jafra', 20],
        ['Skin Food', 33],
        ['Lush', 61],
        ['Hanasui', 33],
        ['Nature Republik', 72]
    ]);


    var chart = new google.visualization.PieChart(document.getElementById('piechart'));

    chart.draw(data);
    }
</script>

<script type="text/javascript">
$(function () { 
    var data_freeman = <?php echo $freeman4; ?>;
    var data_mediheal = <?php echo $mediheal4; ?>;
    var data_emina = <?php echo $emina4; ?>;
  
    $('#line').highcharts({
        chart: {
            type: 'line'
        },
        title: {
            text: 'Hasil Perbandingan Sentimen Bernilai Positif'
        },
        xAxis: {
            categories: ['Oktober 2019','November 2019','Desember 2019','Januari 2020','Februari 2020','Maret 2020','April 2020']
        },
        yAxis: {
            title: {
                text: 'Jumlah Data'
            }
        },
        series: [{
            name: 'Freeman',
            data: data_freeman
        }, {
            name: 'Mediheal',
            data: data_mediheal
        }, {
            name: 'Emina',
            data: data_emina
        }]
    });
});
</script>
    
<script type="text/javascript">
$(function () { 
    var data_freeman = <?php echo $freeman5; ?>;
    var data_mediheal = <?php echo $mediheal5; ?>;
    var data_emina = <?php echo $emina5; ?>;
  
    $('#line2').highcharts({
        chart: {
            type: 'line'
        },
        title: {
            text: 'Hasil Perbandingan Sentimen Bernilai Negatif'
        },
        xAxis: {
            categories: ['Oktober 2019','November 2019','Desember 2019','Januari 2020','Februari 2020','Maret 2020','April 2020']
        },
        yAxis: {
            title: {
                text: 'Jumlah Data'
            }
        },
        series: [{
            name: 'Freeman',
            data: data_freeman
        }, {
            name: 'Mediheal',
            data: data_mediheal
        }, {
            name: 'Emina',
            data: data_emina
        }]
    });
});
</script>
    
<script type="text/javascript">
$(function () { 
    var data_freeman = <?php echo $freeman6; ?>;
    var data_mediheal = <?php echo $mediheal6; ?>;
    var data_emina = <?php echo $emina6; ?>;
  
    $('#line3').highcharts({
        chart: {
            type: 'line'
        },
        title: {
            text: 'Hasil Perbandingan Sentimen Bernilai Netral'
        },
        xAxis: {
            categories: ['Oktober 2019','November 2019','Desember 2019','Januari 2020','Februari 2020','Maret 2020','April 2020']
        },
        yAxis: {
            title: {
                text: 'Jumlah Data'
            }
        },
        series: [{
            name: 'Freeman',
            data: data_freeman
        }, {
            name: 'Mediheal',
            data: data_mediheal
        }, {
            name: 'Emina',
            data: data_emina
        }]
    });
});
</script>
  
<script type="text/javascript">
$(function () { 
    var data_freeman = <?php echo $freeman; ?>;
    var data_mediheal = <?php echo $mediheal; ?>;
    var data_emina = <?php echo $emina; ?>;
  
    $('#container').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Hasil Kriteria Penilaian yang Bersifat Positif'
        },
        xAxis: {
            categories: ['Bahan','Efek','Hasil','Kemasan']
        },
        yAxis: {
            title: {
                text: 'Jumlah Data'
            }
        },
        series: [{
            name: 'Freeman',
            data: data_freeman
        }, {
            name: 'Mediheal',
            data: data_mediheal
        }, {
            name: 'Emina',
            data: data_emina
        }]
    });
});
</script>
    
<script type="text/javascript">
$(function () { 
    var data_freeman = <?php echo $freeman2; ?>;
    var data_mediheal = <?php echo $mediheal2; ?>;
    var data_emina = <?php echo $emina2; ?>;
  
    $('#container2').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Hasil Kriteria Penilaian yang Bersifat Negatif'
        },
        xAxis: {
            categories: ['Bahan','Efek','Hasil','Kemasan']
        },
        yAxis: {
            title: {
                text: 'Jumlah Data'
            }
        },
        series: [{
            name: 'Freeman',
            data: data_freeman
        }, {
            name: 'Mediheal',
            data: data_mediheal
        }, {
            name: 'Emina',
            data: data_emina
        }]
    });
});
</script>
    
<script type="text/javascript">
$(function () { 
    var data_freeman = <?php echo $freeman3; ?>;
    var data_mediheal = <?php echo $mediheal3; ?>;
    var data_emina = <?php echo $emina3; ?>;
  
    $('#container3').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Hasil Kriteria Penilaian yang Bersifat Netral'
        },
        xAxis: {
            categories: ['Bahan','Efek','Hasil','Kemasan']
        },
        yAxis: {
            title: {
                text: 'Jumlah Data'
            }
        },
        series: [{
            name: 'Freeman',
            data: data_freeman
        }, {
            name: 'Mediheal',
            data: data_mediheal
        }, {
            name: 'Emina',
            data: data_emina
        }]
    });
});
</script>
  
<div class="container">
	<br>
    <br>
    <div class="row">
        <div class="col-md-12 col-md-offset-4">
            <br>
            <h2><strong>Chart 10 Brand yang Diminati</strong></h2>
        </div>
        <div class="col-md-12">
            <div class="col-xs-3">
            </div>
            <div class="col-xs-6">
                <div id="piechart" style="height:400px;"></div>
            </div>
            <div class="col-xs-3">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-md-offset-4 pad-bottom" data-scroll-reveal="enter from the bottom after 0.2s">
            <br>
            <h2><strong>Chart Hasil Sentimen Perbulan</strong></h2>
        </div>
        <div class="col-md-12">
            <div class="col-xs-6">
                <div id="line" style="height:400px;"></div>
            </div>
            <div class="col-xs-6">
                <div id="line2" style="height:400px;"></div>
            </div>
            <div class="col-xs-6">
                <div id="line3" style="height:400px;"></div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-12 col-md-offset-4 pad-bottom" data-scroll-reveal="enter from the bottom after 0.2s">
                <br>
                <h2><strong>Chart Kriteria Penilaian</strong></h2>
            </div>
            <div class="col-xs-4">
                <div id="container" style="height:400px;"></div>
            </div>
            <div class="col-xs-4">
                <div id="container2" style="height:400px;"></div>
            </div>
            <div class="col-xs-4">
                <div id="container3" style="height:400px;"></div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="row text-center">
        <div class="col-md-6 col-md-offset-3 pad-bottom" data-scroll-reveal="enter from the bottom after 0.2s">
            <br>
            <h2><strong>Rekomendasi Brand Berdasarkan Hasil Kriteria Penilaian</strong></h2>
        </div>
    </div>
    <div class="row pad-bottom" data-scroll-reveal="enter from the bottom after 0.2s">
        <div class="col-md-4">
            <h3><strong>Bahan Produk</strong></h3>
        </div>
        <div class="col-md-4">
            <h3>Freeman</h3>
        </div>
        <div class="col-md-4">
            <p class="justify">Wangi pada produk fresh, enak, dan tidak menyengat. Tektur produk creamy, halus, dan walaupun padat mudah diaplikasikan. Warna pada masker tergantung varian brand. Kandungan pada masker beragam seperti active charcoal dan mint. Sensasi masker saat dipakai adalah dingin karena ada mint. </p>
        </div>
    </div>
    <div class="row pad-bottom" data-scroll-reveal="enter from the bottom after 0.2s">
        <div class="col-md-4">
            <h3><strong>Efek Samping</strong></h3>
        </div>
        <div class="col-md-4">
            <h3>Freeman</h3>
        </div>
        <div class="col-md-4">
            <p class="justify">Brand ini lebih cocok digunakan pada muka yang berminyak dan berjerawat, karena efek samping pada pemakaian produk ini membuat wajah kering sehingga tidak cocok jika dipakai terlalu lama terutama bagi yang memiliki kondisi kulit kering dan ada efek sedikit perih untuk kulit sensitif. Walaupun begitu brand ini ampuh dalam mengecilkan jerawat dan buat wajah lebih kencang setelah pemakaian.</p>
        </div>
    </div>
    <div class="row pad-bottom" data-scroll-reveal="enter from the bottom after 0.4s">
        <div class="col-md-4">
            <h3><strong>Hasil Pemakaian</strong></h3>
        </div>
        <div class="col-md-4">
            <h3>Emina</h3>
        </div>
        <div class="col-md-4">
            <p class="justify">Masker di brand ini dapat membuat wajah bersih dan halus setelah pemakaian. Selain itu, juga dapat melembabkan wajah. Karena masker ini diperuntukkan untuk remaja, sehingga ringan dipakai dan cocok bagi yang memiliki kulit sensitif.</p>
        </div>
    </div>
    <div class="row pad-bottom" data-scroll-reveal="enter from the bottom after 0.4s">
        <div class="col-md-4">
            <h3><strong>Kemasan Produk</strong></h3>
        </div>
        <div class="col-md-4">
            <h3>Emina</h3>
        </div>
        <div class="col-md-4">
            <p class="justify">Kemasan pada brand ini terkenal dengan lucu, unik, dan simple sehingga membuat orang tertarik untuk membeli. Dan juga tersedia spatula kecil pada sleeping mask sehingga higienis. Cocok dibawa untuk travel. </p>
        </div>
    </div>
</div>
  
</body>
</html>
