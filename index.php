<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?
session_start();

///////////หาค่า max ของ id

$hostdb = 'localhost';   // MySQl host
$userdb = 'root';    // MySQL username
$passdb = '12345678';    // MySQL password
$namedb = 'gotcha';   // MySQL database name
mysql_connect($hostdb, $userdb, $passdb);
mysql_select_db($namedb);
mysql_set_charset("utf8");
$attribute = $_POST['attribute'];
$keyword = $_POST['keyword'];
$db = new mysqli($hostdb, $userdb, $passdb, $namedb);
$result = $db->query("SELECT product.*, color.* FROM product INNER JOIN color ON color.id_color = product.color_pro");

// while ($product = mysqli_fetch_array($result)){
//   print_r($product);
// }
?>


<!DOCTYPE html>
<html lang="zxx">

<head>


  <a class="btn btn-warning" data-toggle="modal" data-target="#myModal2">For Login</a>


  <!-- Modal -->
  <div id="myModal2" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"> หน้าล็อกอิน</h4>
        </div>
        <div class="modal-body">
          <form name="form1" method="post" action="check_login.php">
            <B>Login</B><br>
            <table border="2" style="width: 200px">
              <tbody>
                <tr>
                  <td> &nbsp;Username</td>
                  <td>
                    <input name="txtUsername" type="text" id="txtUsername">
                  </td>
                </tr>
                <tr>
                  <td> &nbsp;Password</td>
                  <td><input name="txtPassword" type="password" id="txtPassword">
                  </td>
                </tr>
              </tbody>
            </table>

            <input type="submit" name="Submit" value="Login">
          </form>
          <br>
        </div>
      </div>

    </div>
  </div>
  <title>GOTCHA |</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8" />
  <meta name="keywords" content="Fashion Hub Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
  <script>
    addEventListener("load", function() {
      setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
      window.scrollTo(0, 1);
    }
  </script>
  <!-- Custom Theme files -->
  <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
  <!-- shop css -->
  <link href="css/shop.css" type="text/css" rel="stylesheet" media="all">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <!-- Owl-Carousel-CSS -->
  <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
  <!-- font-awesome icons -->
  <link href="css/fontawesome-all.min.css" rel="stylesheet">
  <!-- //Custom Theme files -->
  <!-- online-fonts -->
  <link href="//fonts.googleapis.com/css?family=Elsie+Swash+Caps:400,900" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
  <!-- //online-fonts -->
</head>

<body>
  <!-- header -->
  <header>
    <div class="container">
      <!-- top nav -->
      <nav class="top_nav d-flex pt-3 pb-1">
        <!-- logo -->
        <h1>
          <a class="navbar-brand" href="index.html">GOTCHA
          </a>
        </h1>
        <!-- //logo -->
        <div class="w3ls_right_nav ml-auto d-flex">
          <!-- search form -->
          <form class="nav-search form-inline my-0 form-control" action="#" method="post">
            <select class="form-control input-lg" name="category">
              <option value="all">Search our store</option>
              <optgroup label="Bags">
                <option value="Bagket Bags">Bagket Bags</option>
                <option value="Shoulder Bags">Shoulder Bags</option>
                <option value="Shoulder Bags">Small Shoulder Bags</option>
                <option value="Card Pocket">Card Pocket</option>
                <option value="Wallet Bags">Wallet Bags</option>
                <option value="Clutch Bags">Clutch Bags</option>


              </optgroup>


            </select>
            <input class="btn btn-outline-secondary  ml-3 my-sm-0" type="submit" value="Search">
          </form>
          <!-- search form -->
          <div class="nav-icon d-flex">

            <a class="portfolio-link" data-toggle="modal" href="">
              <div class="portfolio-hover">
              </div>

              <a href="login/login.php" class="btn btn-outline-secondary  ml-3 my-sm-0">Login</a>
          </div>

          <!-- sigin and sign up -->
          <!-- shopping cart -->

          <!-- //shopping cart ends here -->
        </div>
    </div>
    </div>
    </nav>
    <!-- //top nav -->
    <!-- bottom nav -->
    <nav class="navbar navbar-expand-lg navbar-light justify-content-center">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto text-center">
          <li class="nav-item">
            <a class="nav-link  active" href="index.html">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item dropdown has-mega-menu" style="center;">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Bags</a>
            <div class="dropdown-menu" style="center">
              <div class="px-0 container">
                <div class="row">
                  <div class="col-md-10">
                    <a class="dropdown-item" href="shopbagket.php">Bagket Bags</a>
                    <a class="dropdown-item" href="shopshoulder.php">Shoulder Bags</a>
                    <a class="dropdown-item" href="shouderbag.php">Small Shoulder Bags</a>
                    <a class="dropdown-item" href="shopcard.php">Card Pocket</a>
                    <a class="dropdown-item" href="shopwallet.php">Wallet Bags</a>
                    <a class="dropdown-item" href="shopclutch.php">Clutch Bags</a>
                  </div>


                </div>
              </div>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="about.html">About</a>
          </li>
          <!-- <li class="nav-item">
                            <a class="nav-link" href="blog.html">Blog</a>
                        </li> -->
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="checkout.html">Cart</a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- //bottom nav -->
    </div>
    <!-- //header container -->
  </header>
  <!-- //header -->
  <!-- banner -->
  <div class="banner-text">
    <div class="callbacks_container">
      <ul class="rslides" id="slider3">
        <li class="banner">
          <div class="container">
            <h3 class="agile_btxt">
              <span>G</span>OT
              <span>C</span>HA
            </h3>
            <h4 class="w3_bbot">shop exclusive Bags</h4>
            <div class="slider-info mt-sm-5">
              <h4 class="bn_right">
                <span>B</span>ags
                <span>f</span>ashion</h4>
              <div class="bnr_clip position-relative">
                <h4>get up to
                  <span class="px-2">45% </span>
                </h4>
                <div class="d-inline-flex flex-column banner-pos position-absolute text-center">
                  <div class="bg-flex-item">
                    <span>O</span>
                  </div>
                  <div class="bg-flex-item">
                    <span>F</span>
                  </div>
                  <div class="bg-flex-item">
                    <span>F
                    </span>
                  </div>
                </div>
                <p class="text-uppercase py-2">on special sale</p>
                <a class="btn btn-primary mt-3 text-capitalize" href="" role="button">shop now</a>
              </div>
            </div>
          </div>
        </li>


      </ul>
    </div>
  </div>
  <!-- //banner -->
  <!--services-->

  <!-- //services-->
  <!-- about -->
  <div class="row no-gutters pb-5">
    <div class="col-sm-4">
      <div class="hovereffect">
        <img class="img-fluid" src="images/home/g1.jpg" alt="">
        <div class="overlay">
          <h5>Wallet</h5>
          <a class="info" href="shopwallet.html">Shop Now</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="hovereffect">
        <img class="img-fluid" src="images/home/g2.jpg" alt="">
        <div class="overlay">
          <h5>Card pocket</h5>
          <a class="info" href="shopcard">Shop Now</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="hovereffect">
        <img class="img-fluid" src="images/home/g3.jpg" alt="">
        <div class="overlay">
          <h5>Small Shoulder Bags</h5>
          <a class="info" href="shouderbag.html">Shop Now</a>
        </div>
      </div>
    </div>
  </div>
  <!-- //grid left -->
  <!-- grid right -->
  <!-- product -->




  <div class="col-lg-12 mt-lg-7 mt-7 right-product-grid">
    <!-- card group  -->
    <div class="card-group">
      <!-- card -->
      <? while($product = mysqli_fetch_array($result)) : ?>
        
        <div class="col-lg-3 col-sm-6 p-0">

          <div class="card product-men p-3">
            <div class="men-thumb-item">

              <a class="portfolio-link" data-toggle="modal" href="#portfolioModal<? echo $product["id_pro"]; ?>">
                <div class="portfolio-hover">
                </div>
                <img class="img-fluid" src="<?php echo "images/" . $product["pic"]; ?>" alt="">
              </a>

              
              <div class="portfolio-modal modal fade" id="portfolioModal<? echo $product["id_pro"]; ?>" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                      <div class="lr">
                        <div class="rl"></div>
                      </div>
                    </div>
                    <div class="container">
                      <div class="row">
                        <div class="col-lg-8 mx-auto">
                          <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2 class="text-uppercase"><? echo $product["name_pro"]; ?></h2>
                            <p class="item-intro text-muted">WOMEN กระเป๋าสะพาย</p>
                            <div class="caption">

                              <ul class="rating-single">
                                <li>
                                  <a href="#">
                                    <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                                  </a>
                                </li>
                                <li>
                                  <a href="#">
                                    <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                                  </a>
                                </li>
                                <li>
                                  <a href="#">
                                    <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                                  </a>
                                </li>
                                <li>
                                  <a href="#">
                                    <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                                  </a>
                                </li>
                                <li>
                                  <a href="#">
                                    <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                                  </a>
                                </li>
                              </ul>
                              <div class="clearfix"> </div>
                              <h6>
                                ฿1,900.00</h6>
                            </div>
                            <img class="img-fluid d-block mx-auto" src="images/<?php echo $product["pic"]; ?>" alt="">
                            <br>

                            <B>Details</B>

                            <br>
                            <p><? echo $product["detail"]; ?></p><br>

                            <ul class="list-inline">
                              <li><B>Brand : </B>
                                <font color="red">Gotcha(ก๊อตช่า)</font>
                              </li>
                              <li><B>Color : </B>
                                <font color="red"><?=$product["name_color"] ?></font>
                              </li>
                              <li><B>Size : </B>
                                <font color="red"><?=$product["size"] ?></font>
                              </li>
                              <li><B>Material : </B>
                                <font color="red"><?=$product["material"] ?></font>
                              </li>                            
                              <li><B>Number of products : </B>
                                <font color="red"><?=$product["total"]?></font>
                              </li>
                            </ul>
                            <br>
                            <p>
                              <h3 align='center'><button class="btn btn-primary" data-dismiss="modal" type="button">
                                  <i class="fas fa-times"></i>ปิด</button>


                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <!-- card body -->
            <div class="card-body  py-3 px-2">
              <h5 class="card-title text-capitalize"><? echo $product["name_pro"]; ?></h5>
              <div class="">
                <!-- <p class="text-dark font-weight-bold"></p> -->
                <p class="line-through">฿<? echo $product["price"]; ?></p>
              </div>
            </div>
            <!-- card footer -->
            <div class="card-footer d-flex justify-content-end">

              <form action="" method="post">

                <a href="updatecart.php?itemId=<?php echo $meResult['ProductID']; ?>" role="button" class="fa fa-cart-plus" aria-hidden="true">
                </a>

              </form>
            </div>
          </div>
        </div>
      <? endwhile; ?>
      <!-- product >
      <!-------------------------------------------------------------------------------->
      <!-- //card -->
      <!-- //row  -->
    </div>
    <!-- //card group -->
  </div>
  </div>
  </div>
  </div>
  <!--// Shop -->





  <!-- //about -->
  <!-- product tabs -->

  <!-- //product tabs -->
  <!-- insta posts -->
  <section class="py-lg-5">
    <!-- insta posts -->

    <!-- //insta posts -->
    <!-- footer -->
    <footer>
      <div class="footerv2-w3ls">
        <div class="footer-w3lagile-innerr">
          <!-- footer-top -->
          <div class="container-fluid">
            <div class="row  footer-v2grids w3-agileits">


              <footer class="site-footer custom-border-top">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-2 col-sm-6 footer-v2grid">
                      <h4>Support</h4>
                      <ul>

                        <li>
                          <a href="payment.html">Payment</a>
                        </li>
                        <li>
                          <a href="#">Shipping</a>
                        </li>
                        <li>
                          <a href="#">Cancellation & Returns</a>
                        </li>
                        <li>
                          <a href="faq.html">FAQ</a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-lg-5 ml-auto mb-5 mb-lg-0">
                      <div class="row">
                        <div class="col-md-12">
                          <h3 class="footer-heading mb-4">Follow Us</h3>
                        </div>


                        <ul class="social-iconsv2 agileinfo">
                          <li>
                            <a href="https://web.facebook.com/gotchaofficials/">
                              <i class="fab fa-facebook-f"></i>
                            </a>
                          </li>
                          <li>
                            <a href="https://twitter.com/?lang=th">
                              <i class="fab fa-twitter"></i>
                            </a>
                          </li>

                          <li>
                            <a href="https://www.youtube.com/">
                              <i class="fab fa-youtube"></i>
                            </a>
                          </li>
                          <li>
                            <a href="https://www.instagram.com/gotcha_official/">
                              <i class="fab fa-linkedin-in"></i>
                            </a>
                          </li>
                          <li>
                            <a href="https://mail.google.com/">
                              <i class="fab fa-google-plus-g"></i>
                            </a>
                          </li>
                        </ul>



                      </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                      <div class="block-5 mb-5">
                        <h3 class="footer-heading mb-4">Address</h3>
                        <ul class="list-unstyled">
                          <li class="address">Rajamangala University of Technology Tawan-Ok : Chakrabongse Bhuvanarth Campus

                            122 Vibhavadi Rangsit Road, Din Daeng Subdistrict, Din Daeng District, Bangkok 10400</li>
                          <br>
                          <li class="phone"><a href="tel://25932358">02-593-2358</a></li>
                          <li class="email">gotchaofficial@gmail.com</li>
                        </ul>
                      </div>


                    </div>
                  </div>
                  <br><B>ADMINISTRATOR</B>
                  <br>YANISA,VATINEE,PATTARAT

                </div>


            </div>
          </div>
        </div>

    </footer>
    <!-- //footer -->
    <!-- sign up Modal -->

    <!-- signin Modal -->
    <!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
    <!-- script for show signin and signup modal -->

    <!-- //script for show signin and signup modal -->
    <!-- smooth dropdown -->
    <script>
      $(document).ready(function() {
        $('ul li.dropdown').hover(function() {
          $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(200);
        }, function() {
          $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(200);
        });
      });
    </script>
    <!-- //smooth dropdown -->
    <!-- script for password match -->
    <script>
      window.onload = function() {
        document.getElementById("password1").onchange = validatePassword;
        document.getElementById("password2").onchange = validatePassword;
      }

      function validatePassword() {
        var pass2 = document.getElementById("password2").value;
        var pass1 = document.getElementById("password1").value;
        if (pass1 != pass2)
          document.getElementById("password2").setCustomValidity("Passwords Don't Match");
        else
          document.getElementById("password2").setCustomValidity('');
        //empty string means no validation error
      }
    </script>
    <!-- script for password match -->
    <!-- Banner Responsiveslides -->
    <script src="js/responsiveslides.min.js"></script>
    <script>
      // You can also use "$(window).load(function() {"
      $(function() {
        // Slideshow 4
        $("#slider3").responsiveSlides({
          auto: false,
          pager: true,
          nav: false,
          speed: 500,
          namespace: "callbacks",
          before: function() {
            $('.events').append("<li>before event fired.</li>");
          },
          after: function() {
            $('.events').append("<li>after event fired.</li>");
          }
        });

      });
    </script>
    <!-- // Banner Responsiveslides -->
    <!-- Product slider Owl-Carousel-JavaScript -->
    <script src="js/owl.carousel.js"></script>
    <script>
      var owl = $('.owl-carousel');
      owl.owlCarousel({
        items: 4,
        loop: false,
        margin: 10,
        autoplay: false,
        autoplayTimeout: 5000,
        autoplayHoverPause: false,
        responsive: {
          320: {
            items: 1,
          },
          568: {
            items: 2,
          },
          991: {
            items: 3,
          },
          1050: {
            items: 4
          }
        }
      });
    </script>
    <!-- //Product slider Owl-Carousel-JavaScript -->
    <!-- cart-js -->
    <script src="js/minicart.js">
    </script>
    <script>
      hub.render();

      hub.cart.on('new_checkout', function(evt) {
        var items, len, i;

        if (this.subtotal() > 0) {
          items = this.items();

          for (i = 0, len = items.length; i < len; i++) {}
        }
      });
    </script>
    <!-- //cart-js -->
    <!-- start-smooth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
      jQuery(document).ready(function($) {
        $(".scroll").click(function(event) {
          event.preventDefault();

          $('html,body').animate({
            scrollTop: $(this.hash).offset().top
          }, 1000);
        });
      });
    </script>
    <!-- //end-smooth-scrolling -->
    <!-- smooth-scrolling-of-move-up -->
    <script>
      $(document).ready(function() {
        /*
        var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear' 
        };
        */

        $().UItoTop({
          easingType: 'easeOutQuart'
        });

      });
    </script>
    <script src="js/SmoothScroll.min.js"></script>
    <!-- //smooth-scrolling-of-move-up -->
    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>

</html>