<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?
session_start();

///////////หาค่า max ของ id

include("connect.php");
//$attribute = $_POST['attribute'];
//$keyword = $_POST['keyword'];
//print_r("SELECT product.*, color.* FROM product INNER JOIN color ON color.id_color = product.color_pro where id_cat like ".$category);
$id_cus = 0;
if (isset($_SESSION["id_cus"])) {
  $id_cus = $_SESSION["id_cus"];
}
?>


<!DOCTYPE html>
<html lang="zxx">

<?php include("h.php"); ?>

<body>
  <?php include("header.php"); ?>
  <!-- //header -->
  <!-- banner -->

  <? if (isset($_GET["category"])) : ?>
    <? $cat = $dbcon->query("select * from category where id_cat=" . $_GET["category"]); ?>
    <? $_cat = mysqli_fetch_assoc($cat); ?>
    <div class="ibanner_w3 pt-sm-5 pt-3">
      <h4 class="head_agileinfo text-center text-capitalize text-center pt-5">
        <? $catstr = explode(" ", $_cat["name_cat"]); ?>
        <span><?= $catstr[0][0] ?></span><?= substr($catstr[0], 1); ?>
        <span><?= $catstr[1][0] ?></span><?= substr($catstr[1], 1); ?></h4>
    </div>
  <? else : ?>
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
                  <div class="d-inline-flex flex-column banner-pos position-absolute text-center">
                    <div class="bg-flex-item">
                    </div>
                  </div>
                  <p class="text-uppercase py-2">on special bags</p>

                </div>
              </div>
            </div>
          </li>


        </ul>
      </div>
    </div>
  <? endif; ?>
  <!-- //banner -->
  <!--services-->

  <!-- //services-->
  <!-- about -->
  <? if (!isset($_GET["category"])) : ?>
    <div class="row no-gutters pb-5">
      <div class="col-sm-4">
        <div class="hovereffect">
          <img class="img-fluid" src="images/home/g1.jpg" alt="">
          <div class="overlay">
            <h5>Wallet</h5>
            <a class="info" href="index.php?category=5">Shop Now</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="hovereffect">
          <img class="img-fluid" src="images/home/g2.jpg" alt="">
          <div class="overlay">
            <h5>Card pocket</h5>
            <a class="info" href="index.php?category=4">Shop Now</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="hovereffect">
          <img class="img-fluid" src="images/home/g3.jpg" alt="">
          <div class="overlay">
            <h5>Small Shoulder Bags</h5>
            <a class="info" href="index.php?category=2">Shop Now</a>
          </div>
        </div>
      </div>
    </div>
  <? endif; ?>
  <!-- //grid left -->
  <!-- grid right -->
  <!-- product -->
  <div class="row">
    <div class="col-lg-3">
      <div class="side-bar col-lg-12">

        <div class="left-side">
          <h3 class="shopf-sear-headits-sear-head">Color</h3>
          <div class="d-flex">
            <ul>
              <li>
                <input type="checkbox" class="checked" name="color1" id="color1">
                <label for="color1">Sugar Brown</label>
              </li>
              <li>
                <input type="checkbox" class="checked" name="color2" id="color2">
                <label for="color2">Blue</label>
              </li>
              <li>
                <input type="checkbox" class="checked" name="color3" id="color3">
                <label for="color3">Black</label>
              </li>
              <li>
                <input type="checkbox" class="checked" name="color4" id="color4">
                <label for="color4">Grey</label>
              </li>
              <li>
                <input type="checkbox" class="checked" name="color5" id="color5">
                <label for="color5">Maroon</label>
              </li>
              <li>
                <input type="checkbox" class="checked" name="color6" id="color6">
                <label for="color6">Mustard</label>
              </li>
              <li>
                <input type="checkbox" class="checked" name="color7" id="color7">
                <label for="color7">Pink</label>
              </li>
              <li>
                <input type="checkbox" class="checked" name="color8" id="color8">
                <label for="color8">Vanilla Cream</label>
              </li>
              <li>
                <input type="checkbox" class="checked" name="color9" id="color9">
                <label for="color9">Beige</label>
              </li>
              <li>
                <input type="checkbox" class="checked" name="color10" id="color10">
                <label for="color10">Red</label>
              </li>
            </ul>

            <ul>
              <li>
                <input type="checkbox" class="checked" name="color11" id="color11">
                <label for="color11">White</label>
              </li>
              <li>
                <input type="checkbox" class="checked" name="color12" id="color12">
                <label for="color12">Yellow</label>
              </li>
              <li>
                <input type="checkbox" class="checked" name="color13" id="color13">
                <label for="color13">Light Nude</label>
              </li>
              <li>
                <input type="checkbox" class="checked" name="color14" id="color14">
                <label for="color14">Cream</label>
              </li>
              <li>
                <input type="checkbox" class="checked" name="color15" id="color15">
                <label for="color15">Khaki</label>
              </li>
              <li>
                <input type="checkbox" class="checked" name="color16" id="color16">
                <label for="color16">Charcoal</label>
              </li>
              <li>
                <input type="checkbox" class="checked" name="color17" id="color17">
                <label for="color17">Plum</label>
              </li>
              <li>
                <input type="checkbox" class="checked" name="color18" id="color18">
                <label for="color18">Navy Blue</label>
              </li>
              <li>
                <input type="checkbox" class="checked" name="color20" id="color20">
                <label for="color20">LightGrey</label>
              </li>


            </ul>
          </div>
        </div>
        <!-- //Binding -->
        <!-- discounts -->
        <div class="left-side">

        </div>
        <!-- //discounts -->
        <!-- reviews -->
        <div class="customer-rev left-side">

        </div>
        <!-- //reviews -->
      </div>
    </div>
    <div class="col-lg-9 mt-lg-7 mt-7 right-product-grid">
      <!-- card group  -->
      <div class="card-group">
        <!-- card -->
        <?
        $category = "'%'";
        if (isset($_GET["category"])) {
          $category = $_GET["category"];
        }
        $result = $dbcon->query("SELECT product.*, color.* FROM product INNER JOIN color ON color.id_color = product.color_pro where id_cat like " . $category);

        ?>
        <? while ($product = mysqli_fetch_array($result)) : ?>

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
                                  <font color="red"><?= $product["name_color"] ?></font>
                                </li>
                                <li><B>Size : </B>
                                  <font color="red"><?= $product["size"] ?></font>
                                </li>
                                <li><B>Material : </B>
                                  <font color="red"><?= $product["material"] ?></font>
                                </li>
                                <li><B>Number of products : </B>
                                  <font color="red"><?= $product["total"] ?></font>
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

                  <!-- <a href="updatecart.php?itemId=<?php echo $meResult['ProductID']; ?>" role="button" class="fa fa-cart-plus" aria-hidden="true">
                </a> -->

                  <button type="button" class="fa fa-cart-plus" onClick="addCart(<?= $id_cus ?>, <?= $product['id_pro'] ?>)"></button>
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
  </div>
  <!--// Shop -->





  <!-- //about -->
  <!-- product tabs -->

  <!-- //product tabs -->
  <!-- insta posts -->
  <section class="py-lg-5">
    <!-- insta posts -->

    <!-- //insta posts -->

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
      function addCart(id_cus = 0, id_pro) {
        console.log(id_cus, id_pro)
        if (id_cus == "") {
          Swal.fire({
            title: "กรุณาเข้าสู่ระบบก่อนทำการสั่งซื้อสินค้า",
            icon: "error"
          })
          return;
        }

        $.get("http://localhost/gotcha/cart.php?id_pro=" + id_pro + "&id_cus=" + id_cus, function(data, status) {
          console.log(data)
          Swal.fire({
            title: 'เพิ่มสินค้าลงตะกร้าสำเร็จ',
            icon: 'success',
            showCloseButton: true,
            showConfirmlButton: true,
            confirmButtonText: "ไปที่ตะกร้า"
          }).then(function(res) {
            if (res.value)
              window.location.assign("http://localhost/gotcha/checkout.php")
          })
        })
      }

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
<?php include("footer.php"); ?>

</html>