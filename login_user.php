<?php
$db = new mysqli("localhost", "root", "", "skripsi");
@session_start();
if (@$_SESSION['user']) {
    header("location:index.php");
} else {
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
            <div id="pre_header" class="container">
                <div class="row margin-top-10 visible-lg">
                    <div class="col-md-6">
                        <p>
                            <strong>Phone:</strong>&nbsp;1-800-123-4567</p>
                    </div>
                    <div class="col-md-6 text-right">
                        <p>
                            <strong>Email:</strong>info@example.com</p>
                    </div>
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
                                <a href="index.html" title="">
                                    <img src="assets/img/logo.png" alt="Logo" />
                                </a>
                            </div>
                            <!-- End Logo -->
                            <ul class="social-icons pull-right hidden-xs">
                                <li class="social-rss">
                                    <a href="#" target="_blank" title="RSS"></a>
                                </li>
                                <li class="social-twitter">
                                    <a href="#" target="_blank" title="Twitter"></a>
                                </li>
                                <li class="social-facebook">
                                    <a href="#" target="_blank" title="Facebook"></a>
                                </li>
                                <li class="social-googleplus">
                                    <a href="#" target="_blank" title="GooglePlus"></a>
                                </li>
                            </ul>
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
                            <div class="container">
                                <div class="row margin-vert-30">
                                    <!-- Login Box -->
                                    <div class="col-md-6 col-md-offset-3 col-sm-offset-3">
                                        <form class="login-page" method="post">
                                            <div class="login-header margin-bottom-30">
                                                <h2>Silahkan Login</h2>
                                            </div>
                                            <div class="input-group margin-bottom-20">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-user"></i>
                                                </span>
                                                <input placeholder="Username" class="form-control" type="text" name="username">
                                            </div>
                                            <div class="input-group margin-bottom-20">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-lock"></i>
                                                </span>
                                                <input placeholder="Password" class="form-control" type="password" name="pass">
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label class="checkbox">
                                                        <input type="checkbox">Stay signed in</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="submit" name="login" class="btn btn-primary pull-right" value="Login"></input>
                                                </div>
                                            </div>
                                            <hr>
                                            <h4>Belum Daftar Member?</h4>
                                            <p>
                                                <a href="signup.php">Click here</a> to join.</p>
                                        </form>
                                        <?php
                                            if (@$_POST['login']) {
                                                $user = @$_POST['username'];
                                                $pass = @$_POST['pass'];
                                                if($user == '' || $pass == '') {
                                                    ?>
                                                    <script type="text/javascript">alert("Username / Password tidak boleh kosong")</script>
                                                    <?php
                                                } else {
                                                    $log = $db->prepare("SELECT * FROM user WHERE username = ? and pass = ?") or die ($db->error);
                                                    $log->bind_param('ss', $user, $pass);
                                                    $log->execute();
                                                    $log->store_result();
                                                    $cek = $log->num_rows;
                                                    $log->bind_result($id_user, $nama, $username, $pass, $nope, $email, $alamat, $provinsi, $kabupaten, $kecamatan, $bank, $norek, $nama_rek);
                                                    $log->fetch();
                                                    if ($cek > 0) {
                                                        @$_SESSION['user'] = $id;
                                                        ?>
                                                        <script type="text/javascript">alert("Login Sukses")
                                                         document.location= "index.php"
                                                         </script>
                                                        <?php
                                                    } else {
                                                        ?>
                                                        <script type="text/javascript">alert("Login Gagal")</script>
                                                        <?php
                                                    }
                                                }
                                            }
                                        ?>
                                    </div>
                                    <!-- End Login Box -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- === END CONTENT === -->
            <!-- === BEGIN FOOTER === -->
            <div id="base">
                <div class="container padding-vert-30 margin-top-40">
                    <div class="row">
                        <!-- Sample Menu -->
                        <div class="col-md-3 margin-bottom-20">
                            <h3 class="margin-bottom-10">Sample Menu</h3>
                            <ul class="menu">
                                <li>
                                    <a class="fa-tasks" href="#">Placerat facer possim</a>
                                </li>
                                <li>
                                    <a class="fa-users" href="#">Quam nunc putamus</a>
                                </li>
                                <li>
                                    <a class="fa-signal" href="#">Velit esse molestie</a>
                                </li>
                                <li>
                                    <a class="fa-coffee" href="#">Nam liber tempor</a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <!-- End Sample Menu -->
                        <!-- Contact Details -->
                        <div class="col-md-3 margin-bottom-20">
                            <h3 class="margin-bottom-10">Contact Details</h3>
                            <p>
                                <span class="fa-phone">Telephone:</span>(212)888-77-88
                                <br>
                                <span class="fa-envelope">Email:</span>
                                <a href="mailto:info@joomla51.com">info@joomla51.com</a>
                                <br>
                                <span class="fa-link">Website:</span>
                                <a href="http://www.joomla51.com">www.joomla51.com</a>
                            </p>
                            <p>The Dunes, Top Road,
                                <br>Strandhill,
                                <br>Co. Sligo,
                                <br>Ireland</p>
                        </div>
                        <!-- End Contact Details -->
                        <!-- Thumbs Gallery -->
                        <div class="col-md-3 margin-bottom-20">
                            <h3 class="margin-bottom-10">Portfolio Highlights</h3>
                            <div class="thumbs-gallery">
                                <a class="thumbBox" rel="lightbox-thumbs" href="assets/img/thumbsgallery/image01.jpg">
                                    <img src="assets/img/thumbsgallery/thumbs/image01.jpg" alt="image1.jpg">
                                    <i></i>
                                </a>
                                <a class="thumbBox" rel="lightbox-thumbs" href="assets/img/thumbsgallery/image02.jpg">
                                    <img src="assets/img/thumbsgallery/thumbs/image02.jpg" alt="image2.jpg">
                                    <i></i>
                                </a>
                                <a class="thumbBox" rel="lightbox-thumbs" href="assets/img/thumbsgallery/image03.jpg">
                                    <img src="assets/img/thumbsgallery/thumbs/image03.jpg" alt="image3.jpg">
                                    <i></i>
                                </a>
                                <a class="thumbBox" rel="lightbox-thumbs" href="assets/img/thumbsgallery/image04.jpg">
                                    <img src="assets/img/thumbsgallery/thumbs/image04.jpg" alt="image4.jpg">
                                    <i></i>
                                </a>
                                <a class="thumbBox" rel="lightbox-thumbs" href="assets/img/thumbsgallery/image04.jpg">
                                    <img src="assets/img/thumbsgallery/thumbs/image05.jpg" alt="image5.jpg">
                                    <i></i>
                                </a>
                                <a class="thumbBox" rel="lightbox-thumbs" href="assets/img/thumbsgallery/image06.jpg">
                                    <img src="assets/img/thumbsgallery/thumbs/image06.jpg" alt="image6.jpg">
                                    <i></i>
                                </a>
                                <a class="thumbBox" rel="lightbox-thumbs" href="assets/img/thumbsgallery/image07.jpg">
                                    <img src="assets/img/thumbsgallery/thumbs/image07.jpg" alt="image7.jpg">
                                    <i></i>
                                </a>
                                <a class="thumbBox" rel="lightbox-thumbs" href="assets/img/thumbsgallery/image08.jpg">
                                    <img src="assets/img/thumbsgallery/thumbs/image08.jpg" alt="image8.jpg">
                                    <i></i>
                                </a>
                                <a class="thumbBox" rel="lightbox-thumbs" href="assets/img/thumbsgallery/image09.jpg">
                                    <img src="assets/img/thumbsgallery/thumbs/image09.jpg" alt="image9.jpg">
                                    <i></i>
                                </a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <!-- End Thumbs Gallery -->
                        <!-- Disclaimer -->
                        <div class="col-md-3 margin-bottom-20">
                            <h3 class="margin-bottom-10">Disclaimer</h3>
                            <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit
                                augue duis dolore te feugait nulla facilisi.</p>
                            <div class="clearfix"></div>
                        </div>
                        <!-- End Disclaimer -->
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- Footer Menu -->
            <div id="footer">
                <div class="container">
                    <div class="row">
                        <div id="copyright" class="col-md-4">
                            <p>(c) 2014 Your Copyright Info</p>
                        </div>
                        <div id="footermenu" class="col-md-8">
                            <ul class="list-unstyled list-inline pull-right">
                                <li>
                                    <a href="#" target="_blank">Sample Link</a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">Sample Link</a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">Sample Link</a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">Sample Link</a>
                                </li>
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
<?php
}
?>