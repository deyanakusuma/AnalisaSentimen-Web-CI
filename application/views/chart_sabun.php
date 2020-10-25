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
        ['Acnes',     268],
        ['Cetaphil',      235],
        ['Clean and Clear',  144],
        ['Senka', 138],
        ['Hada Labo', 142],
        ['The Body Shop', 133],
        ['Cosrx', 125],
        ['Wardah', 117],
        ['Himalaya', 110],
        ['Garnier', 97]
    ]);

    var chart = new google.visualization.PieChart(document.getElementById('piechart'));

    chart.draw(data);
    }
</script>    

<script type="text/javascript">
$(function () { 
    var data_acnes = <?php echo $acnes4; ?>;
    var data_cleanclear = <?php echo $cleanclear4; ?>;
    var data_cetaphil = <?php echo $cetaphil4; ?>;
  
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
            name: 'Acnes',
            data: data_acnes
        }, {
            name: 'Clean & Clear',
            data: data_cleanclear
        }, {
            name: 'Cetaphil',
            data: data_cetaphil
        }]
    });
});
</script>
    
<script type="text/javascript">
$(function () { 
    var data_acnes = <?php echo $acnes5; ?>;
    var data_cleanclear = <?php echo $cleanclear5; ?>;
    var data_cetaphil = <?php echo $cetaphil5; ?>;
  
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
            name: 'Acnes',
            data: data_acnes
        }, {
            name: 'Clean & Clear',
            data: data_cleanclear
        }, {
            name: 'Cetaphil',
            data: data_cetaphil
        }]
    });
});
</script>
    
<script type="text/javascript">
$(function () { 
    var data_acnes = <?php echo $acnes6; ?>;
    var data_cleanclear = <?php echo $cleanclear6; ?>;
    var data_cetaphil = <?php echo $cetaphil6; ?>;
  
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
            name: 'Acnes',
            data: data_acnes
        }, {
            name: 'Clean & Clear',
            data: data_cleanclear
        }, {
            name: 'Cetaphil',
            data: data_cetaphil
        }]
    });
});
</script>
  
<script type="text/javascript">
$(function () { 
    var data_acnes = <?php echo $acnes; ?>;
    var data_cleanclear = <?php echo $cleanclear; ?>;
    var data_cetaphil = <?php echo $cetaphil; ?>;
  
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
            name: 'Acnes',
            data: data_acnes
        }, {
            name: 'Clean & Clear',
            data: data_cleanclear
        }, {
            name: 'Cetaphil',
            data: data_cetaphil
        }]
    });
});
</script>
    
<script type="text/javascript">
$(function () { 
    var data_acnes = <?php echo $acnes2; ?>;
    var data_cleanclear = <?php echo $cleanclear2; ?>;
    var data_cetaphil = <?php echo $cetaphil2; ?>;
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
            name: 'Acnes',
            data: data_acnes
        }, {
            name: 'Clean & Clear',
            data: data_cleanclear
        }, {
            name: 'Cetaphil',
            data: data_cetaphil
        }]
    });
});
</script>
    
<script type="text/javascript">
$(function () { 
    var data_acnes = <?php echo $acnes3; ?>;
    var data_cleanclear = <?php echo $cleanclear3; ?>;
    var data_cetaphil = <?php echo $cetaphil3; ?>;
    
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
            name: 'Acnes',
            data: data_acnes
        }, {
            name: 'Clean & Clear',
            data: data_cleanclear
        }, {
            name: 'Cetaphil',
            data: data_cetaphil
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
            <h3>Clean and Clear</h3>
        </div>
        <div class="col-md-4">
            <p class="justify">Bahan pewangi yang digunakan pada sabun ini menurut sebagian konsumen mirip seperti sabun bayi sehingga harum dan tidak menyengat. Teksturnya berbentuk gel cair dan bening dengan busa yang lumayan banyak. Juga terdapat sedikit scrub yang tidak terlalu mengganggu untuk kondisi kulit sensitif.</p>
        </div>
    </div>
    <div class="row pad-bottom" data-scroll-reveal="enter from the bottom after 0.2s">
        <div class="col-md-4">
            <h3><strong>Efek Samping</strong></h3>
        </div>
        <div class="col-md-4">
            <h3>Acnes</h3>
        </div>
        <div class="col-md-4">
            <p class="justify">Sebagian besar konsumen senang dengan hasil pemakaian dari sabun ini untuk mengurangi jerawat. Namun, efek samping setelah pemakaian produk membuat wajah ketarik sehingga tidak nyaman di wajah. Selain itu juga membuat wajah kering. Jika wajah sedang breakout, brand ini kurang begitu bagus walaupun bisa meredakan jerawat.</p>
        </div>
    </div>
    <div class="row pad-bottom" data-scroll-reveal="enter from the bottom after 0.4s">
        <div class="col-md-4">
            <h3><strong>Hasil Pemakaian</strong></h3>
        </div>
        <div class="col-md-4">
            <h3>Cetaphil</h3>
        </div>
        <div class="col-md-4">
            <p class="justify">Sabun wajah pada brand ini dapat meredakan beruntusan maupun jerawat yang muncul pada wajah. Setelah memakai sabun ini, wajah juga menjadi lembut, lembab, dan bersih. Selain untuk wajah, beberapa konsumen juga menggunakan produk ini untuk menyembuhkan jerawat pada punggung.</p>
        </div>
    </div>
    <div class="row pad-bottom" data-scroll-reveal="enter from the bottom after 0.4s">
        <div class="col-md-4">
            <h3><strong>Kemasan Produk</strong></h3>
        </div>
        <div class="col-md-4">
            <h3>Clean and Clear</h3>
        </div>
        <div class="col-md-4">
            <p class="justify">Kemasan yang unik dan lucu dengan menampilkan warna bening pada sabun. Berbentuk botol fliptop sehingga mudah untuk menuang produk. Serta lumayan kecil sehingga mudah dibawa kemana saja.</p>
        </div>
    </div>
</div>
  
</body>
</html>
