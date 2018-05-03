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
        <title>Enlighten - Professional Bootstrap Template</title>
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
                                            <a href="kontak.php" class="fa-envelope-o">Contact Us</a>
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
                        <div class="container">
                            <div class="row margin-vert-30">
                                <!-- Main Column -->
                                <div class="col-md-9">
                                <?php
                                    //ngecek submit
                                    if(isset ($_POST['submit'])){
                                        require('koneksi.php');
                                        
                                        $nama = $_POST['nama'];
                                        $email = $_POST['email'];
                                        $komentar = $_POST['komentar'];
                                        $tambah = $db->query("INSERT INTO testimoni (nama, email, komentar) VALUES ('$nama', '$email', '$komentar')") or die ($db->error);
                                         if ($tambah!=0) {
                                         ?>
                                        <script type="text/javascript">alert("Komentar sukses dikirim")</script>
                                        <?php
                                        } else {
                                            ?>
                                            <script type="text/javascript">alert("Komentar gagal dikirim")</script>
                                            <?php
                                        }
                                        }
                                 ?>
                                    <!-- Main Content -->
                                    <div class="headline">
                                        <h2>Form Testimoni</h2>
                                    </div>
                                    <p>Kepuasan anda merupakan tujuan kami. Kirim testimoni kamu untuk kemajuan toko ini dalam meningkatkan kualitas pelayanan dan produk.</p>
                                    <br>
                                    <!-- Contact Form -->
                                    <form method="post" enctype="multipart/form-data" action =>
                                        <label>Name</label>
                                        <div class="row margin-bottom-20">
                                            <div class="col-md-6 col-md-offset-0">
                                                <input class="form-control" type="text" name="nama" required>
                                            </div>
                                        </div>
                                        <label>Email
                                            <span class="color-red">*</span>
                                        </label>
                                        <div class="row margin-bottom-20">
                                            <div class="col-md-6 col-md-offset-0">
                                                <input class="form-control" type="text" name="email" required>
                                            </div>
                                        </div>
                                        <label>Komentar</label>
                                        <div class="row margin-bottom-20">
                                            <div class="col-md-8 col-md-offset-0">
                                                <textarea rows="8" class="form-control" name="komentar" required></textarea>
                                            </div>
                                        </div>
                                        <div>
                                            <input class="btn btn-success" type="submit" name="submit" value="KIRIM">
                                            <input class="btn btn-danger" type="reset" value="BATAL"/>
                                        </div>
                                    </form>
                                    <!-- End Contact Form -->
                                    <!-- End Main Content -->
                                </div>
                                <!-- End Main Column -->
                                <!-- Side Column -->
                                <div class="col-md-3">
                                    <!-- Recent Posts -->
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Contact Info</h3>
                                        </div>
                                        <div class="panel-body">
                                            <p>Bisa menghubungi kami untuk melakukan reservasi apabila anda ingin memesan secara langsung.</p>
                                            <ul class="list-unstyled">
                                                <li>
                                                    <i class="fa-phone color-primary"></i>0812-2123-4211</li>
                                                <li>
                                                    <i class="fa-envelope color-primary"></i>ameliaroti@gmail.com</li>
                                                <li>
                                                    <i class="fa-home color-primary"></i>www.ameliaroti.com</li>
                                            </ul>
                                            <ul class="list-unstyled">
                                                <li>
                                                    <strong class="color-primary">Senin - Kamis:</strong>08:00 - 20:00</li>
                                                <li>
                                                    <strong class="color-primary">Jumat:</strong>07:30 - 20:30</li>
                                                <li>
                                                    <strong class="color-primary">Sabtu - Minggu:</strong>09:00 - 17:00</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- End recent Posts -->
                                    <!-- About -->
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">About</h3>
                                        </div>
                                        <div class="panel-body">
                                            Amelia Roti adalah salah satu toko penjualan dan pembuatan segala macam jenis kue, baik itu kue basah, kue basah, kue tart dan berbagai jenis kue lainnya. Toko ini menerima pemesanan untuk ruang lingkup jabodetabek. Dengan memanfaatkan perkembangan teknologi informasi toko Amelia Roti membangun sebuah website untuk memudahkan pembeli untuk melakukan transaksi via online. 
                                        </div>
                                    </div>
                                    <!-- End About -->
                                </div>
                                <!-- End Side Column -->
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