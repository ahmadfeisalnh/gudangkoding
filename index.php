<?php
include "koneksi.php";
?>
<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <head>
        <!-- Title -->
        <title>Amelia Roti </title>
        <!-- Meta -->
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <!-- Favicon -->
        <link href="favicon.ico" rel="shortcut icon">
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.css" rel="stylesheet">
        <!-- Template CSS -->
        <link rel="stylesheet" href="assets/css/animate.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/nexus.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/responsive.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/custom.css" rel="stylesheet">
         <link rel="stylesheet" href="assets/css/style.css" rel="stylesheet">
        <!-- Google Fonts-->
        <link href="http://fonts.googleapis.com/css?family=Roboto:400,300" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="body_bg">
        <div id="pre_header" class="container">
                <div class="row margin-top-10 visible-lg">
                </div>
            </div>
            <div class="primary-container-group">
                <!-- Background -->
                <div class="primary-container-background">
                    <div class="primary-container"></div>
                    <div class="clearfix"></div>
                </div>
                <!--End Background -->
                <div class="primary-container">
                    <div id="header" class="container">
                        <div class="row">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="index.php" title="">
                                    <img src="assets/img/logo.png" alt="Logo" />
                                </a>
                                
                            </ul>
                            </div>
                            <!-- End Logo -->
                        </div>
                    </div>
                    <!-- Top Menu -->
                    <div id="hornav" class="container no-padding">
                        <div class="row">
                            <div class="col-md-12 no-padding">
                                <div class="pull-right visible-lg">
                                    <ul id="hornavmenu" class="nav navbar-nav">
                                        <li>
                                            <a href="index.php" class="fa-home">Home</a>
                                        </li>
                                        <li>
                                            <span class="fa-apple">Product</span>
                                            <ul>
                                                 <li>
                                                    <a href="tradisional.php">Tradisional</a>
                                                </li>
                                                <li>
                                                    <a href="cookies.php">Cookies</a>
                                                </li>
                                                <li>
                                                    <a href="bakery.php">Bakery</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                        <span class="fa-info-circle">Info Pesanan</span>
                                            <ul>
                                                <li>
                                                    <a href="konfirmasi_pembayaran.php" class="fa-shopping-cart">Keranjang Belanja</a>
                                                </li>
                                                <li>
                                                    <a class="fa fa-dropbox fa-2x" href="cek_status.php">Status Pesanan</a>
                                                </li>
                                            </ul>
                                        </li>
                                        
                                        <li>
                                            <a href="testimoni.php" class="fa-comments">Testimonials</a>                                           
                                        </li>
                                        <li>
                                            <a href="kontak.php"  class="fa-envelope-o">Contact Us</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Top Menu -->
                    <!-- === END HEADER === -->
                    <!-- === BEGIN CONTENT === -->
                    <div id="content">
                        <div class="container no-padding">
                            <div class="row">
                                <!-- Carousel Slideshow -->
                                <div id="carousel-example" class="carousel slide" data-ride="carousel">
                                    <!-- Carousel Indicators -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                                        <li data-target="#carousel-example" data-slide-to="1"></li>
                                        <li data-target="#carousel-example" data-slide-to="2"></li>
                                    </ol>
                                    <div class="clearfix"></div>
                                    <!-- End Carousel Indicators -->
                                    <!-- Carousel Images -->
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <img src="assets/img/slideshow/amelia roti.jpg">
                                        </div>
                                        <div class="item">
                                            <img src="assets/img/slideshow/3.jpg">
                                        </div>
                                        <div class="item">
                                            <img src="assets/img/slideshow/2.jpg">
                                        </div>
                                        <div class="item">
                                            <img src="assets/img/slideshow/amelia roti 2.jpg">
                                        </div>
                                    </div>
                                    <!-- End Carousel Images -->
                                    <!-- Carousel Controls -->
                                    <a class="left carousel-control" href="#carousel-example" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                    </a>
                                    <a class="right carousel-control" href="#carousel-example" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                    </a>
                                    <!-- End Carousel Controls -->
                                </div>
                                <!-- End Carousel Slideshow -->
                            </div>
                        </div>
                        <div class="container background-gray-lighter">
                            <div class="row">
                                <h2 class="animate fadeIn text-center margin-top-50">Selamat Datang di Amelia Roti</h2>
                                <hr class="margin-top-15">
                                <p class="animate fadeIn text-center">Rumah Kue yang melayani penjualan berbagai macam kue untuk wilayah jabodetabek
                                    <br>Kualitas cita rasa yang mewah dengan harga terjangkau</p>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row margin-vert-30">
                                <!-- Main Text -->
                                <h1>Best Seller!</h1>
                                    <div class="row">
                                <div class="col-md-9">
                                                <?php

                                                $tampil = $db->query("SELECT * from `detailpembelian` inner join `produk` on `detailpembelian`.`id`=`produk`.`id` GROUP BY `detailpembelian`.`id` Limit 8") or die ($db->error);
                                                while($data = mysqli_fetch_array($tampil)){
                                                ?>
                                                <div class="col-md-3 margin-bottom-20 code">
                                                    <div>
                                                        <img src="assets/img/produk/<?php echo $data['gambar']; ?>" width="100%" />
                                                            <b><h4><?php echo $data['nama'];?></h4></b>
                                                        <hr>
                                                    </div>
                                                </div>
                                                <?php
                                                }
                                                ?>
                                            </div>
                                <!-- End Main Text -->
                                <!-- Side Column -->
                                <div class="col-md-3">
                                    <h3 class="title">Opening hours</h3>
                                    <h6 style="margin: 0;">Senin - Kamis</h6>
                                    <h4 style="margin: 0;">08:00 - 20:00</h4>
                                    <hr>
                                    <h6 style="margin: 0;">Jumat</h6>
                                    <h4 style="margin: 0;">07:30 - 20:30</h4>
                                    <p>
                                        <small>* Jam 11:30 - 13:00 tutup</small>
                                    </p>
                                    <hr>
                                    <h6 style="margin: 0;">Sabtu - Minggu</h6>
                                    <h4 style="margin: 0;">09:00 - 17:00</h4>
                                    <hr>
                                    <h6 style="margin: 0;">Hari Besar/Tanggal Merah</h6>
                                    <h4 style="margin: 0;">TUTUP</h4>
                                    <p>
                                    <hr>
                                </div>
                                <!-- End Side Column -->
                            </div>
                        </div>
                        <div class="container background-gray-lighter">
                        </div>
                    </div>
                </div>
            </div>
            </div>        
            <!-- === END CONTENT === -->
            <!-- Footer Menu -->
            <div id="footer">
                <div class="container">
                    <div class="row">
                        <div id="copyright" class="col-md-4">
                            <p>(c) 2016 Copyright Amelia Roti</p>
                        </div>
                        <div id="footermenu" class="col-md-8">
                            <ul class="list-unstyled list-inline pull-right">
                               <p>Ruko Merpati Residence Jl. Merpati Raya no.25 Sawah Baru Ciputat </p>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Footer Menu -->
            <!-- JS -->
            <script type="text/javascript" src="assets/js/jquery.min.js" type="text/javascript"></script>
            <script type="text/javascript" src="assets/js/bootstrap.min.js" type="text/javascript"></script>
            <script type="text/javascript" src="assets/js/scripts.js"></script>
            <!-- Isotope - Portfolio Sorting -->
            <script type="text/javascript" src="assets/js/jquery.isotope.js" type="text/javascript"></script>
            <!-- Mobile Menu - Slicknav -->
            <script type="text/javascript" src="assets/js/jquery.slicknav.js" type="text/javascript"></script>
            <!-- Animate on Scroll-->
            <script type="text/javascript" src="assets/js/jquery.visible.js" charset="utf-8"></script>
            <!-- Sticky Div -->
            <script type="text/javascript" src="assets/js/jquery.sticky.js" charset="utf-8"></script>
            <!-- Slimbox2-->
            <script type="text/javascript" src="assets/js/slimbox2.js" charset="utf-8"></script>
            <!-- Modernizr -->
            <script src="assets/js/modernizr.custom.js" type="text/javascript"></script>
            <!-- End JS -->
    </body>
</html>
<!-- === END FOOTER === -->
