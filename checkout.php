<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?
session_start();
include("connect.php");
$id_cus=0;
if(isset($_SESSION["id_cus"])){
    $id_cus=$_SESSION["id_cus"];
}
?>
<!DOCTYPE html>
<html lang="zxx">


<!DOCTYPE html>
<html lang="zxx">

<?php include("h.php"); ?>

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
            <li class="breadcrumb-item active" aria-current="page">Check Out</li>
        </ol>
    </nav>
    <!-- //breadcrumbs -->
    <!--checkout-->
    <section class="page-section cta">
        <div class="container">

            <table class="table table-striped table-bordered">
                <thead>
                    <tr>

                        <th>รูปสินค้า </th>
                        <th>รหัสสินค้า</th>
                        <th>ชื่อสินค้า</th>
                        <th>จำนวนที่ซื้อ</th>
                        <th>ราคา/ชิ้น</th>
                        <th>รวม</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    <? 
                    $result = $dbcon->query('SELECT * FROM cart INNER JOIN product ON product.id_pro = cart.id_pro WHERE id_cus='.$id_cus);
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
                                <input type="text" value="<?=$product["cart_total"]?>" id="cart_total"/>
                            </td>

                            <td class="product-id">
                                <h2 class="h5 text-black"><?=$product["price"]?></h2>
                                <input type="hidden" value="<?=$product["price"]?>" id="price"/>                               
                            </td>

                            <td class="product-id">
                                <h2 class="h5 text-black"><?=$product["price"]*$product["cart_total"]?></h2>
                                <input type="hidden" value="<?=$product["price"]*$product["cart_total"]?>" id="total"/>                               
                            </td>



                            <td class="product-id">
                                <button type="button" class="btn btn-danger btn-lg" onclick="removeCart(<?=$product['id_pro']?>, <?=$_SESSION['id_cus'] ?>)">ลบทิ้ง</button>
                                </td>





                        </tr>
                    <? endwhile; ?>
                    <tr>
                        <td colspan="8" style="text-align: right;">

                            <a href="index.php" type="button" class="btn btn-danger btn-lg">ย้อนกลับ</a>
                            <a href="payment.php"class="btn btn-primary btn-lg">สั่งซื้อสินค้า<a>
                        </td>
                    </tr>


                </tbody>
            </table>


        </div>
    </section>







    </div>
    </div>
    </div>
    </div>
    </section>

    <!--//checkout-->
    <!-- //footer -->
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
    <!-- signin Modal -->
    <!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
    <!-- smooth dropdown -->
    <script>
        $(document).ready(function() {
            $('ul li.dropdown').hover(function() {
                $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(200);
            }, function() {
                $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(200);
            });
        });

        function removeCart(id_pro, id_cus){
            console.log(id_pro, id_cus)
            //console.log($)
            jQuery.post('http://localhost/GOTCHA/checkoutdelete.php', {
                id_pro:id_pro,
                id_cus:id_cus
            }, function(data, status){
                console.log(data, status)
                window.location.reload();
            })
        }
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
    <!-- cart-js -->
    <script src="js/minicart.js"></script>
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
    <!--quantity-->
    <script>
        $('.value-plus').on('click', function() {
            var divUpd = $(this).parent().find('.value'),
                newVal = parseInt(divUpd.text(), 10) + 1;
            divUpd.text(newVal);
        });

        $('.value-minus').on('click', function() {
            var divUpd = $(this).parent().find('.value'),
                newVal = parseInt(divUpd.text(), 10) - 1;
            if (newVal >= 1) divUpd.text(newVal);
        });
    </script>
    <!--quantity-->
    <!-- FadeOut-Script -->
    <script>
        $(document).ready(function(c) {
            $('.close1').on('click', function(c) {
                $('.rem1').fadeOut('slow', function(c) {
                    $('.rem1').remove();
                });
            });
        });
    </script>
    <script>
        $(document).ready(function(c) {
            $('.close2').on('click', function(c) {
                $('.rem2').fadeOut('slow', function(c) {
                    $('.rem2').remove();
                });
            });
        });
    </script>
    <script>
        $(document).ready(function(c) {
            $('.close3').on('click', function(c) {
                $('.rem3').fadeOut('slow', function(c) {
                    $('.rem3').remove();
                });
            });
        });
    </script>
    <!--// FadeOut-Script -->

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

</html>