<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <head>
        <!-- Title -->
        <title>AMELIA ROTI </title>
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
<div class="panel panel-default panel-scope">
<div class="panel-heading"><h3>Halaman Data Produk</h3></div>
<div class="row">
<div class="row show-grid">
<?php

$tampil = $db->query("SELECT * From produk ORDER BY nama ASC");
while($data = mysqli_fetch_array($tampil)){
?>
<div class="col-md-3">
<span class="show-grid-block">

<tr>
<td><img src="assets/img/produk/<?php echo $data['gambar']; ?>" width="120px" /></td>
<td></br>
<td><?php echo $data['nama'];?></td></br>
<td>Rp.<?php echo $data['harga'];?></td>


</tr>


</span>
</div>
<?php
}
?>
</div>
</div>
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