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
        ['Maybelline',     172],
        ['Purbasari',      176],
        ['Wardah',  180],
        ['Emina', 129],
        ['NYX', 76],
        ['Pixy', 152],
        ['BLP Beauty', 85],
        ['Make Over', 143],
        ['Implora', 137],
        ['Bourjois', 12]
    ]);

    var chart = new google.visualization.PieChart(document.getElementById('piechart'));

    chart.draw(data);
    }
</script>

<script type="text/javascript">
$(function () { 
    var data_purbasari = <?php echo $purbasari4; ?>;
    var data_maybelline = <?php echo $maybelline4; ?>;
    var data_wardah = <?php echo $wardah4; ?>;
  
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
            name: 'Purbasari',
            data: data_purbasari
        }, {
            name: 'Maybelline',
            data: data_maybelline
        }, {
            name: 'Wardah',
            data: data_wardah
        }]
    });
});
</script>
    
<script type="text/javascript">
$(function () { 
    var data_purbasari = <?php echo $purbasari5; ?>;
    var data_maybelline = <?php echo $maybelline5; ?>;
    var data_wardah = <?php echo $wardah5; ?>;
  
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
            name: 'Purbasari',
            data: data_purbasari
        }, {
            name: 'Maybelline',
            data: data_maybelline
        }, {
            name: 'Wardah',
            data: data_wardah
        }]
    });
});
</script>
    
<script type="text/javascript">
$(function () { 
    var data_purbasari = <?php echo $purbasari6; ?>;
    var data_maybelline = <?php echo $maybelline6; ?>;
    var data_wardah = <?php echo $wardah6; ?>;
  
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
            name: 'Purbasari',
            data: data_purbasari
        }, {
            name: 'Maybelline',
            data: data_maybelline
        }, {
            name: 'Wardah',
            data: data_wardah
        }]
    });
});
</script>
  
<script type="text/javascript">
$(function () { 
    var data_purbasari = <?php echo $purbasari; ?>;
    var data_maybelline = <?php echo $maybelline; ?>;
    var data_wardah = <?php echo $wardah; ?>;
  
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
            name: 'Purbasari',
            data: data_purbasari
        }, {
            name: 'Maybelline',
            data: data_maybelline
        }, {
            name: 'Wardah',
            data: data_wardah
        }]
    });
});
</script>
    
<script type="text/javascript">
$(function () { 
    var data_purbasari = <?php echo $purbasari2; ?>;
    var data_maybelline = <?php echo $maybelline2; ?>;
    var data_wardah = <?php echo $wardah2; ?>;
  
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
            name: 'Purbasari',
            data: data_purbasari
        }, {
            name: 'Maybelline',
            data: data_maybelline
        }, {
            name: 'Wardah',
            data: data_wardah
        }]
    });
});
</script>
    
<script type="text/javascript">
$(function () { 
    var data_purbasari = <?php echo $purbasari3; ?>;
    var data_maybelline = <?php echo $maybelline3; ?>;
    var data_wardah = <?php echo $wardah3; ?>;
  
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
            name: 'Purbasari',
            data: data_purbasari
        }, {
            name: 'Maybelline',
            data: data_maybelline
        }, {
            name: 'Wardah',
            data: data_wardah
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
            <h3>Maybelline</h3>
        </div>
        <div class="col-md-4">
            <p class="justify">Warna-warna lipstick yang ditawarkan brand ini sesuai dengan skintone kulit orang Indonesia. Teksturnya juga creamy dan powdery sehingga mudah untuk di apply pada bibir. Ada sedikit wangi vanilla namun tidak mengganggu konsumen. Walau hasilnya matte tapi tidak membuat bibir kering.</p>
        </div>
    </div>
    <div class="row pad-bottom" data-scroll-reveal="enter from the bottom after 0.2s">
        <div class="col-md-4">
            <h3><strong>Efek Samping</strong></h3>
        </div>
        <div class="col-md-4">
            <h3>Wardah</h3>
        </div>
        <div class="col-md-4">
            <p class="justify">Efek samping yang sering dikomplein oleh konsumen adalah membuat bibir kering. Sehingga banyak konsumen yang hanya menggunakan lipstick ini untuk ombre atau memakai lipblam sebelum memakai lipstick ini. Dan juga ada beberapa konsumen yang merasa lipstick ini membuat bibir menghitam. Namun, kebanyakan hasil dari lipstick ini nude sehingga menutupi kekurangan dari efek samping tersebut.</p>
        </div>
    </div>
    <div class="row pad-bottom" data-scroll-reveal="enter from the bottom after 0.4s">
        <div class="col-md-4">
            <h3><strong>Hasil Pemakaian</strong></h3>
        </div>
        <div class="col-md-4">
            <h3>Purbasari</h3>
        </div>
        <div class="col-md-4">
            <p class="justify">Karena brand ini adalah salah satu produk dalam negeri, sehingga hasil pemakaian dari lipstick ini natural dan cocok untuk sehari-hari. Selain itu, lipstick ini sangat ringin dan nyaman saat dipakai. Coverage warna yang ditawarkan brand ini sangat bagus. Ketahanan pada produk ini masih standar. Serta tingkat melembabkan juga masih oke walaupun tidak terlalu bagus.</p>
        </div>
    </div>
    <div class="row pad-bottom" data-scroll-reveal="enter from the bottom after 0.4s">
        <div class="col-md-4">
            <h3><strong>Kemasan Produk</strong></h3>
        </div>
        <div class="col-md-4">
            <h3>Maybelline</h3>
        </div>
        <div class="col-md-4">
            <p class="justify">Kemasan pada lipstick di brand ini kecil, simple sehingga tidak memakan tempat. Selain itu, kemasan juga berbeda dibandingkan brand lainnya. Aplikator pada lipstick yang berbahan cair nyaman dan mudah dipakai. Walaupun berbahan plastik, namun cukup tebal. </p>
        </div>
    </div>
</div>
  
</body>
</html>
