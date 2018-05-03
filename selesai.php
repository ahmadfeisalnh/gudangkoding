<?php 
@session_start();
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
                            <div class="row margin-vert-30">
                                <!-- Register Box -->
            <?php
            $nama = $_POST['nama'];
            $nope = $_POST['nope'];
            $email = $_POST['email'];
            $alamat = $_POST['alamat'];
            $provinsi = $_POST['provinsi'];
            $kabupaten = $_POST['kabupaten'];
            $kecamatan = $_POST['kecamatan'];
            $bank = $_POST['bank'];
            $norek = $_POST['norek'];
            $nama_rek = $_POST['nama_rek'];

            echo "<h3>Terima Kasih Telah Berbelanja $nama ...</h3><br>";
            echo "Segera kirimkan bukti pembayaran melalui email kami: ameliaroti@gmail.com <br>*catatan: Harap mengirim bukti pembayaran kurang dari 2 jam apabila melewati batas waktu pesanan kami anggap batal.";
            echo "Berikut ini daftar belanjaan Anda :";
            include('koneksi.php');
            $today = date("Y-m-d");                 
            $hasil=$db->query("INSERT INTO user (id_beli,tanggal, namapembeli,nope,email,alamat,provinsi,kabupaten,kecamatan,bank,norek,nama_rek)  
            VALUES('".$_SESSION['beli']."','$today','$nama','$nope','$email','$alamat','$provinsi','$kabupaten','$kecamatan','$bank','$norek', '$nama_rek')") or die($db->error); 

            
            $_db = mysqli_connect("localhost", "root", "", "sms") or die($db->error);
            $pesan = "Terima kasih telah berbelanja di Amelia Roti $nama. Biaya dapat dikirimkan ke rekening kami Bank BRI dengan nomer rekening 123-234-56347-8 a.n Amelia Roti.";
            $sms=$_db->query("INSERT INTO outbox (DestinationNumber, TextDecoded) VALUES('$nope','$pesan')") or die($_db->error); 
            if($sms!=0){
            ?>
                <script type="text/javascript">alert("Harap Tunggu SMS Konfirmasi Dari Kami")</script>
            <?php
            }else{
            echo "Gagal";
            }

            $querypembelian=$db->query("SELECT * FROM temppembelian, tempdetailpembelian, produk where 
            temppembelian.idbeli=tempdetailpembelian.idbeli and 
            tempdetailpembelian.id=produk.id and temppembelian.idbeli='".$_SESSION['beli']."'");
            echo"<table border='0' class='table table-striped'>
            <tr>
            <th>No</th>

            <th>Nama</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Total</th>
            </tr>";
            $no=0;
            $total=0;
            while($datapembelian=mysqli_fetch_array($querypembelian)){
            $no++;
            echo"
            <tr>
            <td>$no</td>

            <td>".$datapembelian['nama']."</td>
            <td>".$datapembelian['harga']."</td>
            <td>".$datapembelian['jumlah']."</td>
            <td>".$datapembelian['harga']*$datapembelian['jumlah']."</td>
            </tr>";
            $total=$total+($datapembelian['harga']*$datapembelian['jumlah']);

            $hasil=$db->query("INSERT INTO detailpembelian (idbeli, id,jumlah)   
            VALUES('".$_SESSION['beli']."','".$datapembelian['id']."','".$datapembelian['jumlah']."')"); 
            }
            echo"
            <tr>
            <th colspan='4'>Total</th>
            <th>$total</th>
            </tr>";
            echo"</table>";

            $hasil=$db->query("DELETE FROM tempdetailpembelian WHERE idbeli ='".$_SESSION['beli']."'");
            $hasil=$db->query("DELETE FROM temppembelian WHERE idbeli ='".$_SESSION['beli']."'");
            unset($_SESSION['beli']);
            ?>
            <table></br></br>
            </form>
            <form  action="index.php" method='post'>
            <td>
            <input name='tombol' type='submit' class="btn btn-primary" value='selesai'>
            </td>
            </form>
            </tr>
            </table>  
                   </div>
                    </div>
                </div>
            </div>
            <!-- === END CONTENT === -->
            <!-- === BEGIN FOOTER === -->
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
            <script type="text/javascript" src="assets/js/jquery-1.10.2.min.js"></script>
            <script type="text/javascript" src="assets/js/jquery.chained.min.js"></script>
            <script>
            </script>
    </body>
</html>