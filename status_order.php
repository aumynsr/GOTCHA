<!DOCTYPE html>
<html lang="zxx">

<?php 
session_start();
include("h.php");
include("connect.php");

?>

<body>
    <?php include("header.php"); ?>
    <!-- sigin and sign up -->

    <!-- //header -->
    <!-- inner banner -->

    <!-- //inner banner -->
    <!-- breadcrumbs -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Status Order</li>
        </ol>
    </nav>

    <div class="container">
    
    <?$sql="select *, orders.status as o_status from orders join delivery on delivery.id_delivery = orders.address where id_cus=".$_SESSION['id_cus']." order by id_order DESC"; 
    $r_order=$dbcon->query($sql) ;
    while($order=mysqli_fetch_array($r_order)): ?>
        <div class="container mb-5">
        <div class="row">
            <div class="col">
                ID Order <?=$order["id_order"] ?>
            </div>
        </div>
        <div class="row">
            <div class="col">
                date <?=$order["createDate"] ?>
            </div>
            <div class="col">
                address <?=$order["address"] ?>
            </div>
            <div class="col">
                Status:  <?=$order["o_status"] ?><br />
                <? if($order["o_status"] == 'cancel'): ?>
                    Remark:  <?=$order["remark"] ?><br />
                <? elseif($order["o_status"] == 'delivery'): ?>
                    EMS TRACK No. <?=$order["ems"] ?> 
                <? endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="col">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>

                        <th>รูปสินค้า </th>
                        <th>รหัสสินค้า</th>
                        <th>ชื่อสินค้า</th>
                        <th>จำนวนที่ซื้อ</th>
                        <th>ราคา/ชิ้น</th>
                        <th>รวม</th>
                 
                    </tr>
                </thead>
                <tbody>
                    <? 
                    $result = $dbcon->query('select * from order_list join product on order_list.id_pro = product.id_pro where order_id='.$order["id_order"]);
                    while ($product = mysqli_fetch_array($result)) : ?>
                        <tr>
                            <td class="product-thumbnail">
                                <img src="images/<?=$product["pic"]?>" alt="Image" class="img-fluid" style="width:200px;height:200px">
                            </td>

                            <td class="product-id">
                                <h2 class="h5 text-black"><?=$product["id_pro"]?></h2>
                                <input type="hidden" value="<?=$product["id_pro"]?>" id="id_pro"/>
                            </td>


                            <td class="product-id">
                                <h2 class="h5 text-black"><?=$product["name_pro"]?></h2>
                                <input type="hidden" value="<?=$product["name_pro"]?>" id="name_pro"/>
                            </td>

                            <td class="product-id">
                                <?=$product["order_total"]     ?>
                               
                            </td>

                            <td class="product-id">
                                <h2 class="h5 text-black"><?=$product["price"]?></h2>
                                <input type="hidden" value="<?=$product["price"]?>" id="price"/>                               
                            </td>

                            <td class="product-id">
                                <h2 class="h5 text-black"><?=$product["price"]*$product["order_total"]+50?></h2>
                                      
                            </td>



                            <!-- <td class="product-id">
                                <a class="btn btn-danger btn-lg" href="shop.html" role="button">
                                    <span class="glyphicon glyphicon-trash"></span>
                                    ลบทิ้ง</a> </td> -->





                        </tr>
                    <? endwhile; ?>
                    <!-- <tr>
                        <td colspan="8" style="text-align: right;">

                            <a href="index.php" type="button" class="btn btn-danger btn-lg">ย้อนกลับ</a>
                            <a href="payment.php"class="btn btn-primary btn-lg">สั่งซื้อสินค้า<a>
                        </td>
                    </tr> -->


                </tbody>
            </table>
            </div>
        </div>
    </div>
  <? endwhile; ?>
    </div> 
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
</html>