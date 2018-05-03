<?php
include "koneksi.php";
/*@session_start();
if (@$_SESSION['user']) {*/
?>
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
                                <a href="index.html" title="">
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
                                            <span class="fa-group">Pages</span>
                                            <ul>
                                                 <li>
                                                    <a href="pages-login.html">Login</a>
                                                </li>
                                                <li>
                                                    <a href="pages-sign-up.html">Sign-Up</a>
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
                        <div class="container">
                       <!-- edit Menu -->
                            <div class="col-md-12">
                            <div class="panel panel-default panel-scope" id="edit_data_produk">
                                <div class="panel-heading"><h3>Detail Pesanan</h3></div>
                                <div class="row margin-vert-30 ">
                                    <!-- Register Box -->
                                            <div class="col-md-8 col-md-offset-3 col-sm-offset-3">
                                            <?php
                                            $id = @$_GET['id'];
                                            $dataproduk = $db->query("SELECT * FROM produk WHERE id='".$id."'") or die ($db->error);
                                            $data = mysqli_fetch_array($dataproduk);
                                            ?>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                <img src="assets/img/produk/<?php echo $data['gambar']; ?>" width="80%">
                                                </div>
                                                <div class="col-sm-8">
                                                <form method="post" enctype="multipart/form-data">
                                                <label>Nama Produk :</label> <?php echo $data['nama'] ;?></br>
                                                <label>Kategori    :</label> <?php echo $data['kategori'] ;?></br>
                                                <label>Harga       :</label> <?php echo $data['harga'] ;?><br>
                                                <label>Jumlah      :</label>
                                                <a href="" class="btn btn-xs btn-warning">-</a> 
                                                <input type="text" name="jumlah" size="2%">
                                                <a href="" class="btn btn-xs btn-success">+</a> 
                                                </div>
                                            </div>
                                                <div class="col-lg-12 text-right">
                                                    <input class="btn btn-danger" type="submit" name="edit" value="Konfirmasi Pembelian">
                                                    <a class="btn btn-success" href="index.php">Batal Belanja</a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                            <!-- End Register Box -->
                                </div>
                            </div>
                        </div>
                    </div>
                            <!-- <?php
                            // }else{
                            // header("location:login_user.php");
                            // }
                            ?> -->