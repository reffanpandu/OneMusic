<?php
include 'process/conSQL.php';

session_start();
$username = $_SESSION['username'];
if(isset($_SESSION['username']) and isset($_SESSION['level'])) {
    if($_SESSION['level'] == 2) {
        header("Location: landingUser.php");
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
                        <a href="landingAdmin.php" class="nav-brand"><img src="img/core-img/logo.png" alt=""></a>
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
                                    <li><a href="#komen">Komentar</a></li>
                                    <li><a href="#datatransaksi">Data Transaksi</a></li>
                                </ul>
                                <!-- Login/Register & Cart Button -->
                                <div class="login-register-cart-button d-flex align-items-center">
                                    <!-- Login/Register -->
                                    <div class="classynav mr-50">
                                    <ul>
                                        <li style="list-style-type: none;"><a href="#">Welcome, <?php echo $username; ?></a></li>
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
    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/admin1.jpg);">
        <div class="bradcumbContent">
            <p>See what’s new</p>
            <h2>ADMIN</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Album Catagory Area Start ##### -->
    <section class="album-catagory section-padding-100-0">
    <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="card mb-5 mb-lg-0">
                <div class="card-body">
                  <h6 class="card-price text-center">KOMENTAR</h6>
                  <hr>
                  <table id="komen" class="table table-stripped text-center mt-3" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $query1 = "SELECT * FROM komen where flag = 1";
                    $result = mysqli_query($con, $query1);

                    if (mysqli_num_rows($result) > 0){
                        $index = 1;
                        while($row = mysqli_fetch_assoc($result)){
                            $id = $row["id"];
                            echo "
                            <tr>
                                <td>" . $index++ . "</td>
                                <td>" .$row["nama"]. "</td>
                                <td>" .$row["email"]. "</td>
                                <td>" .$row["subject"]. "</td>
                                <td>" .$row["message"]. "</td>
                                <td>
                                <a href='process/hapusKomen.php?id=$id' class='btn btn-danger'>Delete</a>
                                </td>
                            </tr>
                            ";
                        }
                    }
                    ?>
                    </tbody>
                </table>
                  <hr>
                </div>
              </div>
            </div>
  
        </div>
    </section>
    <br>
    <br>
    <section class="album-catagory section-padding-100-0">
    <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="card mb-5 mb-lg-0">
                <div class="card-body">
                  <h6 class="card-price text-center">TRANSAKSI</h6>
                  <hr>
                  <table id="datatransaksi" class="table table-stripped text-center mt-3" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>ID Transaksi</th>
                            <th>ID User</th>
                            <th>PRODUK</th>
                            <th>Jumlah Order</th>
                            <th>Bayar</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $query2 = "SELECT * FROM transaksi where flag = 1";
                    $result = mysqli_query($con, $query2);

                    if (mysqli_num_rows($result) > 0){
                        $index = 1;
                        while($row = mysqli_fetch_assoc($result)){
                            $id = $row["id"];
                            echo "
                            <tr>
                                <td>" . $index++ . "</td>
                                <td>" .$row["id_transaksi"]. "</td>
                                <td>" .$row["id"]. "</td>
                                <td>" .$row["produk"]. "</td>
                                <td>" .$row["jumlah"]. "</td>
                                <td>" .$row["bayar"]. "</td>
                                <td>
                                <a href='process/hapusTransaksi.php?id=$id' class='btn btn-danger'>Delete</a>
                                </td>
                            </tr>
                            ";
                        }
                    }
                    mysqli_close($con); 
                    ?>
                    </tbody>
                </table>
                  <hr>
                </div>
              </div>
            </div>
  
        </div>
    </section>
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
<?php 
mysqli_close($con); 
?>