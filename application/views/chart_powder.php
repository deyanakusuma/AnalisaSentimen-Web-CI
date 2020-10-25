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
        ['Innisfree',     137],
        ['Marcks',      204],
        ['Ponds',  172],
        ['Wardah', 52],
        ['BLP Beauty', 110],
        ['Etude House', 59],
        ['Make Over', 55],
        ['Emina', 83],
        ['Revlon', 48],
        ['Maybelline', 127]
    ]);

    var chart = new google.visualization.PieChart(document.getElementById('piechart'));

    chart.draw(data);
    }
</script>
    
<script type="text/javascript">
$(function () { 
    var data_innisfree = <?php echo $innisfree4; ?>;
    var data_marcks = <?php echo $marcks4; ?>;
    var data_ponds = <?php echo $ponds4; ?>;
  
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
            name: 'Innisfree',
            data: data_innisfree
        }, {
            name: 'Marcks',
            data: data_marcks
        }, {
            name: 'Ponds',
            data: data_ponds
        }]
    });
});
</script>
    
<script type="text/javascript">
$(function () { 
    var data_innisfree = <?php echo $innisfree5; ?>;
    var data_marcks = <?php echo $marcks5; ?>;
    var data_ponds = <?php echo $ponds5; ?>;
  
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
            name: 'Innisfree',
            data: data_innisfree
        }, {
            name: 'Marcks',
            data: data_marcks
        }, {
            name: 'Ponds',
            data: data_ponds
        }]
    });
});
</script>
    
<script type="text/javascript">
$(function () { 
    var data_innisfree = <?php echo $innisfree6; ?>;
    var data_marcks = <?php echo $marcks6; ?>;
    var data_ponds = <?php echo $ponds6; ?>;
  
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
            name: 'Innisfree',
            data: data_innisfree
        }, {
            name: 'Marcks',
            data: data_marcks
        }, {
            name: 'Ponds',
            data: data_ponds
        }]
    });
});
</script>
  
<script type="text/javascript">
$(function () { 
    var data_innisfree = <?php echo $innisfree; ?>;
    var data_marcks = <?php echo $marcks; ?>;
    var data_ponds = <?php echo $ponds; ?>;
  
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
            name: 'Innisfree',
            data: data_innisfree
        }, {
            name: 'Marcks',
            data: data_marcks
        }, {
            name: 'Ponds',
            data: data_ponds
        }]
    });
});
</script>
    
<script type="text/javascript">
$(function () { 
    var data_innisfree = <?php echo $innisfree2; ?>;
    var data_marcks = <?php echo $marcks2; ?>;
    var data_ponds = <?php echo $ponds2; ?>;
  
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
            name: 'Innisfree',
            data: data_innisfree
        }, {
            name: 'Marcks',
            data: data_marcks
        }, {
            name: 'Ponds',
            data: data_ponds
        }]
    });
});
</script>
    
<script type="text/javascript">
$(function () { 
    var data_innisfree = <?php echo $innisfree3; ?>;
    var data_marcks = <?php echo $marcks3; ?>;
    var data_ponds = <?php echo $ponds3; ?>;
  
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
            name: 'Innisfree',
            data: data_innisfree
        }, {
            name: 'Marcks',
            data: data_marcks
        }, {
            name: 'Ponds',
            data: data_ponds
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
            <h3>Ponds</h3>
        </div>
        <div class="col-md-4">
            <p class="justify">Bedak pada brand ini menggunakan glitter-glitter kecil sebagai salah satu bahan produk mereka yang menarik minat konsumen. Glitter ini membuat wajah tampak glowing, cerah, dan sangat pas jika dipakai pada malam hari. Wangi produk tidak terlalu mengganggu. Tekstur dari partikel bedaknya sendiri lumayan halus.</p>
        </div>
    </div>
    <div class="row pad-bottom" data-scroll-reveal="enter from the bottom after 0.2s">
        <div class="col-md-4">
            <h3><strong>Efek Samping</strong></h3>
        </div>
        <div class="col-md-4">
            <h3>Marcks</h3>
        </div>
        <div class="col-md-4">
            <p class="justify">Walaupun menjadi favorit banyak orang sejak jaman dahulu karena cocok di segala usia, namun masih memiliki beberapa efek samping bagi sebagian konsumen seperti beruntusan. Beruntusan ini sering kali muncul setelah beberapa kali pemakaian. Selain itu, bedak ini juga tidak bisa menahan minyak di wajah terlalu lama, sehingga membuat wajah kusam.</p>
        </div>
    </div>
    <div class="row pad-bottom" data-scroll-reveal="enter from the bottom after 0.4s">
        <div class="col-md-4">
            <h3><strong>Hasil Pemakaian</strong></h3>
        </div>
        <div class="col-md-4">
            <h3>Marcks</h3>
        </div>
        <div class="col-md-4">
            <p class="justify">Bedak ini memang cocok untuk para remaja karena bisa digunakan pada semua kondisi kulit. Coverage pada bedak ini lumayan bisa menutupi bekas jerawat pada wajah. Hasil dari bedak ini natural sehingga cocok digunakan untuk remaja yang masih sekolah.</p>
        </div>
    </div>
    <div class="row pad-bottom" data-scroll-reveal="enter from the bottom after 0.4s">
        <div class="col-md-4">
            <h3><strong>Kemasan Produk</strong></h3>
        </div>
        <div class="col-md-4">
            <h3>Marcks</h3>
        </div>
        <div class="col-md-4">
            <p class="justify">Dengan tersedianya kemasan baru yang lebih kecil, dapat dibawa kemana-mana. Brand ini masih mempertahankan kemasan yang jadul sehingga menjadi identitas untuk brand ini. Sayangnya spons pada bedak masih sedikit kasar bagi sebagian konsumen. </p>
        </div>
    </div>
</div>
  
</body>
</html>
