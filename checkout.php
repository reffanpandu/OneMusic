<?php
include 'process/conSQL.php';

    session_start();
    $username = $_SESSION['username'];

    $query = "SELECT * FROM regist WHERE username = '$username'";
    $result = mysqli_fetch_array(mysqli_query($con, $query));
    $id = $result['id'];
    $nama = $result['nama_lengkap'];
    $email = $result['email'];
    $no_telp = $result['no_telp'];
    $alamat = $result['alamat'];
    $query = "SELECT * FROM transaksi WHERE id = $id";
    $result = mysqli_fetch_array(mysqli_query($con, $query));
    $id_transaksi = $result['id_transaksi'];
    $produk = $result['produk'];
    $jumlah = $result['jumlah'];
    $bayar = $result['bayar'];
    if(isset($_SESSION['username']) and isset($_SESSION['level'])) {
        if($_SESSION['level'] == 1) {
            header("Location: landingAdmin.php");
        }
      }
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>One Music</title>
    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

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

    <!-- #### Modal #### -->
    <div id="login" class="modal fade">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Login</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="POST" action="process/loginUsr.php">
              <div class="form-group">
                <input type="text" class="form-control" name="username" placeholder="Username">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password">
              </div>
              <div class="text-left">
                <a href="register.php">Already have account?</a>
              </div>
              <div class="text-center">
                <button type="submit" class="btn">Login</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/breadcumb3.jpg);">
        <div class="bradcumbContent">
            <p>Lets Get Started!</p>
            <h2>Register</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Login Area Start ##### -->
    <section class="login-area section-padding-100">
    <section id="buy-tickets" class="section-with-bg wow fadeInUp">
      
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="card mb-5 mb-lg-0">
              <div class="card-body">
                <h6 class="card-price text-center">Order History</h6>
                <hr>
                <table id="transaksi" class="table table-stripped  mt-3" style="width:100%">
                <tr>
                    <td> Nama :</td>
                    <td><?php echo $nama ?></td>
                </tr>
                <tr>
                    <td> Email :</td>
                    <td> <?php echo $email ?></td>
                </tr>
                <tr>
                    <td> No. Telp :</td>
                    <td> <?php echo $no_telp ?></td>
                </tr>
                <tr>
                    <td> Alamat :</td>
                    <td> <?php echo $alamat ?></td>
                </tr>
              </table>
              <hr>
                <table id="transaksi" class="table table-stripped text-center mt-3" style="width:100%">
                  <thead>
                      <tr>
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
                  $query = "SELECT * FROM transaksi where flag = 1 and id = $id";
                  $result = mysqli_query($con, $query);

                  if (mysqli_num_rows($result) > 0){
                      $index = 1;
                      while($row = mysqli_fetch_assoc($result)){
                          $id_transaksi = $row["id_transaksi"];
                          echo "
                          <tr>
                              <td>" .$row["id_transaksi"]. "</td>
                              <td>" .$row["id"]. "</td>
                              <td>" .$row["produk"]. "</td>
                              <td>" .$row["jumlah"]. "</td>
                              <td>" .$row["bayar"]. "</td>
                              <td>
                              <a href='shop2.php?id=$id_transaksi' class='btn' data-toggle='modal' data-target='#item1".$row["id"]."' >Edit</a>
                              </td>
                          </tr>
                          ";
                          ?>
                          <div id="item1<?=$row["id"]?>" class="modal fade">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Buy Album</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="process/editTransaksi.php">
                                    <div>
                                    <input type="hidden" class="form-control" name="id" value="<?php echo $id_transaksi ?>">
                                    </div>

                                    <div class="form-group text-center">
                                        <label for="jml_kursi" class="col-md-4">Jumlah Order :</label>
                                        <input type="number" name="jumlah" id="jumlah" value="<?=$row["jumlah"]?>" class="form-control col-md-12">
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
                          <?php
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
    <!-- ##### Login Area End ##### -->

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