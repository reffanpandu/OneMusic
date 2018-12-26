<?php
include 'process/conSQL.php';

    session_start();
    $username = $_SESSION['username'];

    $query = "SELECT * FROM regist WHERE username = '$username'";
    $result = mysqli_fetch_array(mysqli_query($con, $query));
    $id = $result['id'];
        if(isset($_SESSION['username']) and isset($_SESSION['level'])) {
        if($_SESSION['level'] == 1) {
            header("Location: landingAdmin.php");
        } 
    }
    else {
      header("Location: index.php");
    } 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>One Music</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
<!-- ##### Header Area Start ##### -->
<header class="header-area">
        <!-- Navbar Area -->
        <div class="oneMusic-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="oneMusicNav">
                        <!-- Nav brand -->
                        <a href="index.html" class="nav-brand"><img src="img/core-img/logo.png" alt=""></a>
                        <!-- Navbar Toggler -->
                        <!-- Menu -->
                        <div class="classy-menu">
                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="landingUser.php">Home</a></li>
                                    <li><a href="shop.php">Shop</a></li>
                                    <li><a href="#contact">Contact</a></li>
                                </ul>
                                <!-- Login/Register & Cart Button -->
                                <div class="login-register-cart-button d-flex align-items-center">
                                    <!-- Login/Register -->
                                    <div class="classynav mr-50">
                                    <ul>
                                        <li style="list-style-type: none;"><a href="checkout.php">Welcome, <?php echo $username; ?></a></li>
                                        <li style="list-style-type: none;"><a href="process/logout.php">Logout</a></li>
                                    </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/breadcumb3.jpg);">
        <div class="bradcumbContent">
            <h2>SHOP</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Album Catagory Area Start ##### -->
    <section class="album-catagory section-padding-100-0">
    <div class="container">

<!-- Portfolio Item Row -->
<div class="row">

  <div class="col-md-8">
        <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/bg-img/jejak1.jpg" alt="Los Angeles">
        </div>
        <div class="carousel-item">
            <img src="img/bg-img/jejak2.jpg" alt="Chicago">
        </div>
        <div class="carousel-item">
            <img src="img/bg-img/jejak3.jpg" alt="New York">
        </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
        </a>

        </div>
  </div>

  <div class="col-md-4">
    <h3 class="my-3 text-center">RIZKY FEBIAN EXCLUSIVE BOXSET MUSIC ALBUM JEJAK</h3>
    <h4 class="text-center">Rp.470.000</h4>
    <p>BOXSET EXCLUSIVE ALBUM PERDANA RIZKY FEBIAN TELAH RILIS.
    <br>
    Boxset ini berisi collectible items yang membuat kita bisa kenal Rizky Febian lebih jauh.
    <br>
    <br>
    • Bluetooth Speaker.
    <br>
    Keistimewaan Bluetooth speaker ini, sudah ditanam lagu-lagu yang terdapat di album Jejak. Nyalakan, dan Rizky Febian akan langsung berdendang.
    <br>
    <br>
    • Board Game.
    <br>
    Berisikan 3 bidak dan sebuah dadu, permainan board game ini akan berisikan berbagai. Tantangan untuk menyanyikan lagu-lagu Rizky Febian. Board game ini juga menggambarkan pentingnya arti teman dalam perjalanan hidup Rizky Febian. Kita butuh sahabat untuk menikmati bersenang senang. Dan lagu-lagu Rizky Febian akan lebih. Nikmat saat dengar bersama sahabat.
    <br>
    <br>
    • T-Shirt Album Jejak.
    <br>
    T-Shirt ini hanya bisa didapatkan di Boxset ini.
    <br>
    <br>
    • Sertifikat Kepemilikan.
    <br>
    <br>
    TERIMAKASIH TELAH MEMBELI KARYA ORIGINAL DARI ARTIST FAVORIT KAMU.</p>
    <br>
    <br>
    <button type="submit" name="buy" class="btn" data-toggle="modal" data-target="#item1" >Buy!</button>
</div>
<div id="item1" class="modal fade">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Buy Album</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="POST" action="process/addTransaksi.php">
                <div>
                  <input type="hidden" class="form-control" name="id" value="<?php echo $id ?>">
                </div>
                <div>
                  <input type="hidden" class="form-control" name="id_produk" value="1">
                </div>
                <div>
                  <input type="hidden" class="form-control" name="produk" value="RIZKY FEBIAN - JEJAK">
                </div>
                <div class="form-group text-center">
                    <label for="jml_kursi" class="col-md-4">Jumlah Order :</label>
                    <input type="number" name="jumlah" id="jumlah" class="form-control col-md-12">
                  </div>
                  <div>
                  <input type="hidden" class="form-control" name="bayar" value="470000">
                </div>
                  <div class="text-center">
                    <button type="submit" class="btn" name="transaksi">Buy Now</button>
                  </div>
                </form>
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

    
<!-- /.row -->

</div>
    </section>
    <br>
    <br>
    <!-- ##### Album Catagory Area End ##### -->
    <!-- ##### Contact Area Start ##### -->
    <section id="contact" class="contact-area section-padding-100 bg-img bg-overlay bg-fixed has-bg-img" style="background-image: url(img/bg-img/bg-2.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading white wow fadeInUp" data-wow-delay="100ms">
                        <p>See what’s new</p>
                        <h2>Get In Touch</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <!-- Contact Form Area -->
                    <div class="contact-form-area">
                        <form action="process/komen.php" method="post">
                            <div class="row">
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group wow fadeInUp" data-wow-delay="100ms">
                                        <input type="text" class="form-control" name="nama" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group wow fadeInUp" data-wow-delay="200ms">
                                        <input type="email" class="form-control" name="email" placeholder="E-mail">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group wow fadeInUp" data-wow-delay="300ms">
                                        <input type="text" class="form-control" name="subject" placeholder="Subject">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group wow fadeInUp" data-wow-delay="400ms">
                                        <textarea name="message" class="form-control" name="message" cols="30" rows="10" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-12 text-center wow fadeInUp" data-wow-delay="500ms">
                                    <button name="send" class="btn oneMusic-btn mt-30" type="submit">Send <i class="fa fa-angle-double-right"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="container">
            <div class="row d-flex flex-wrap align-items-center">
                <div class="col-12 col-md-6">
                    <a href="#"><img src="img/core-img/logo.png" alt=""></a>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>