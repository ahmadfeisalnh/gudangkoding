<?php
$db = new mysqli("localhost", "root", "", "skripsi");
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
                            <div class="row margin-vert-30">
                                <!-- Register Box -->
                                
                                <div class="col-md-6 col-md-offset-3 col-sm-offset-3">
                                    <form class="signup-page" method="post" action="selesai.php" id="formku">
                                        <div class="signup-header">
                                        <h3 align="center">Form Ceckout</h3>
                                        <hr>
                                            <p>Harap isi form dibawah ini dengan lengkap dan benar sesuai idenditas anda!</p>
                                            
                                        </div>
                                        <label>Nama</label>
                                        <input name="nama" class="form-control margin-bottom-20" type="text" required>
                                        <label>Nomor Handphone</label>
                                        <input name="nope" class="form-control margin-bottom-20" pattern="^0[\d]{10,13}" type="text" required>
                                        <label>Alamat Email
                                        </label>
                                        <input name="email" class="form-control margin-bottom-20" type="email" required>
                                        <label>Alamat
                                        </label>
                                        <textarea name="alamat" class="form-control margin-bottom-20" row="8"></textarea>
                                         <div class="row">
                                            <div class="col-sm-4">
                                            <label>Provinsi
                                                <span>
                                                    <select class="form-control margin-bottom-20" id="provinsi" name="provinsi" required>
                                                        <option value="">Please Select</option>
                                                        <?php
                                                        $query = $db->query("SELECT * FROM provinsi ORDER BY nama_provinsi");
                                                        while ($row = mysqli_fetch_array($query)) {
                                                        ?>
                                                            <option value="<?php echo $row['id_provinsi']; ?>">
                                                                <?php echo $row['nama_provinsi']; ?>
                                                            </option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </span>
                                             </label>
                                             </div> 
                                             <div class="col-sm-4">
                                             <label>Kabupaten
                                                <span>      
                                                    <!--kota-->
                                                    <select class="form-control margin-bottom-20" id="kabupaten" name="kabupaten" required>
                                                        <option value="">Please Select</option>
                                                        <?php
                                                        $query = $db->query("SELECT
                                                                            *
                                                                          FROM
                                                                            kabupaten
                                                                            INNER JOIN provinsi ON kabupaten.id_prov_fk = provinsi.id_provinsi ORDER BY nama_kab");
                                                        while ($row = mysqli_fetch_array($query)) {
                                                        ?>
                                                            <option id="kabupaten" class="<?php echo $row['id_provinsi']; ?>" value="<?php echo $row['id_kab']; ?>">
                                                                <?php echo $row['nama_kab']; ?>
                                                            </option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </span>
                                                </label>
                                            </div>
                                            <div class="col-sm-4">
                                                <label>Kecamatan
                                                    <span>
                                                        <!--kecamatan-->
                                                        <select class="form-control margin-bottom-20" id="kecamatan" name="kecamatan" required>
                                                            <option value="">Please Select</option>
                                                            <?php
                                                            $query = $db->query("SELECT
                                                                                    *
                                                                                  FROM
                                                                                    kecamatan
                                                                                    INNER JOIN kabupaten ON kecamatan.id_kota_fk = kabupaten.id_kab ORDER BY nama_kecamatan");
                                                            while ($row = mysqli_fetch_array($query)) {
                                                            ?>
                                                                <option id="kecamatan" class="<?php echo $row['id_kab']; ?>" value="<?php echo $row['id_kecamatan']; ?>">
                                                                    <?php echo $row['nama_kecamatan']; ?>
                                                                </option>
                                                            <?php
                                                            }
                                                            ?>
                                                        </select>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                        <label>Bank</label>
                                        <select class="form-control margin-bottom-10" name="bank" required>
                                            <option value="0">--pilih--</option>
                                            <option value="Mandiri">Mandiri</option>
                                            <option value="BNI">BNI</option>
                                            <option value="CIMB">CIMB</option>
                                            <option value="BCA">BCA</option>
                                            <option value="Bank Jabar">Bank Jabar</option>
                                            <option value="Danamon">Danamon</option>
                                            <option value="BRI">BRI</option>
                                            <option value="Permata">Permata</option>
                                        </select>
                                        <label>No. Rekening</label>
                                        <input name="norek" class="form-control margin-bottom-20" type="text" required>
                                        <label>Nama Rekening</label>
                                        <input name="nama_rek" class="form-control margin-bottom-20" type="text" required>
                                        <hr>
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <!-- <label class="checkbox">
                                                    <input type="checkbox">I read the
                                                    <a href="#">Terms and Conditions</a>
                                                </label> -->
                                            </div>
                                            <div class="col-lg-4 text-right">
                                                <button class="btn btn-primary" type="submit" name="submit">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- End Register Box -->
                            </div>
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
                $("#kabupaten").chained("#provinsi");
                $("#kecamatan").chained("#kabupaten");
            </script>
    </body>
</html>