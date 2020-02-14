<?
$hostdb = 'localhost';   // MySQl host
$userdb = 'root';    // MySQL username
$passdb = '12345678';    // MySQL password
$namedb = 'gotcha';

$db = new mysqli($hostdb, $userdb, $passdb, $namedb);
$result = $db->query("SELECT * FROM cart INNER JOIN product ON product.id_pro = cart.id_pro WHERE id_cus=1");

?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>GOTCHA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="Fashion Hub Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
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
    <link href="css/checkout.css" type="text/css" rel="stylesheet" media="all">
    <!-- easy-responsive-tabs css -->
    <link rel="stylesheet" href="css/easy-responsive-tabs.css" type="text/css" media="all" />

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
                                <option value="Card Pocket">Card Pocket</option>
                                <option value="Wallet Bags">Wallet Bags</option>
                                <option value="Clutch Bags">Clutch Bags</option>
                            </optgroup>
                            
                        </select>
                        <input class="btn btn-outline-secondary  ml-3 my-sm-0" type="submit" value="Search">
                    </form>
                    <!-- search form -->
                    <div class="nav-icon d-flex">
                        <!-- sigin and sign up -->
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal25">
              <div class="portfolio-hover">
              </div>
              <img class="img-fluid" src="images/login.png" style="width:50px;height:50px alt="" >
            </a>
</div>
		  
		   <div class="portfolio-modal modal fade" id="portfolioModal25" tabindex="-1" role="dialog" aria-hidden="true">
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
				  
                  <h2 class="text-uppercase">Register Now</h2>
				  <br>
				  <img class="img-fluid" src="images/p3.png" alt="">
                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Username</label>
                                    <input type="name" class="form-control" placeholder=" " name="name" id="recipient-name" required="">
                                </div>
								<div class="form-group">
                                    <label for="password1" class="col-form-label">Password</label>
                                    <input type="password" class="form-control" placeholder=" " name="Password" id="password1" required="">
                                </div>
								<div class="form-group">
                                    <label for="recipient-Email" class="col-form-label">Email</label>
                                    <input type="Email" class="form-control" placeholder=" " name="Email" id="recipient-Email" required="">
                                </div>
								<div class="form-group">
                                    <label for="recipient-Phone" class="col-form-label">Phone number</label>
                                    <input type="Phone" class="form-control" placeholder=" " name="Phone" id="recipient-Phone" required="">
                                </div>
								
								 <div class="sub-w3l">
                                    <div class="sub-agile">
                                        <input type="checkbox" id="brand2" value="">
                                        <label for="brand2" class="mb-3">
                                            <span></span>ฉันยอมรับข้อกำหนดและเงื่อนไข</label>
                                    </div>
                                </div>
                                
                                
                               
                                <div class="sub-w3l">
                                    
                                <div class="right-w3l">
                                    <input type="submit" class="form-control" value="สมัครสมาชิก">
                                </div>
                            </form>
                            <p class="text-center mt-3">คุณเป็นสมาชิกอยู่แล้ว?
                                <a href="myModal_btn1" data-toggle="modal" data-target="#portfolioModal26" class="text-dark login_btn">
                                    Login Now</a>
                  
				 
				 
                  </ul>
				  <br>
				 
					
					</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
	</div>

	<!------------------------------------------------------------->
	
	<a class="portfolio-link" data-toggle="modal" href="#portfolioModal26">
              <div class="portfolio-hover">
              </div>
              <img class="img-fluid" src="images/login1.png" style="width:150px;height:150px alt="" >
            </a>
	
	 <div class="portfolio-modal modal fade" id="portfolioModal26" tabindex="-1" role="dialog" aria-hidden="true">
       <div class="agilemodal-dialog modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body  pt-3 pb-5 px-sm-5">
                    <div class="row">
                        <div class="col-md-6 align-self-center">
                            <img src="images/p3.png" class="img-fluid" alt="login_image" />
                        </div>
                        <div class="col-md-6">
                            <form action="#" method="post">
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Your Name</label>
                                    <input type="text" class="form-control" placeholder=" " name="Name" id="recipient-name" required="">
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Password</label>
                                    <input type="password" class="form-control" placeholder=" " name="Password" required="">
                                </div>
                                <div class="right-w3l">
                                    <input type="submit" class="form-control" value="Login">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
	
								
							</div>
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
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
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
                                            <a class="dropdown-item" href="shopbagket.html">Bagket Bags</a>
                                            <a class="dropdown-item" href="shopshoulder.html">Shoulder Bags</a>											
                                            <a class="dropdown-item" href="shopcard.html">Card Pocket</a>
                                            <a class="dropdown-item" href="shopwallet.html">Wallet Bags</a>
											<a class="dropdown-item" href="shopclutch.html">Clutch Bags</a>	
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- //bottom nav -->
        </div>
        <!-- //header container -->
    </header>
    <!-- //header -->
	<!-- inner banner -->
	<div class="ibanner_w3 pt-sm-5 pt-3">
		<h4 class="head_agileinfo text-center text-capitalize text-center pt-5">
			<span>P</span>ay
			<span>M</span>ent</h4>
	</div>
	<!-- //inner banner -->
    <!-- breadcrumbs -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Payment</li>
        </ol>
    </nav>
    <!-- //breadcrumbs -->
    <!--Payment-->
    <section class="payment_w3ls py-5">
        <div class="container">
            <div class="privacy about">
                <h5 class="head_agileinfo text-center text-capitalize pb-5">
                    <span>P</span>ayment Details</h5>
                <!--/tabs-->
                <div class="responsive_tabs innfpage-tabs">
                    <div id="horizontalTab">
                        <ul class="resp-tabs-list">
                            
                            <li>Net Banking</li>
                            
                        </ul>
                        <div class="resp-tabs-container">
                            
                           
                            <div class="tab3">

                                <div class="pay_info">
                                    <div class="vertical_post">
                                        <form action="summary.php" method="post">										
                                        <h5>รายการที่ต้องชำระสินค้า</h5>
                                        <table class="table table-striped table-bordered">
                <thead>
                    <tr>

                        <!-- <th>รูปสินค้า </th> -->
                        <th>รหัสสินค้า</th>
                        <th>ชื่อสินค้า</th>
                        <th>จำนวนที่ซื้อ</th>
                        <th>ราคา/ชิ้น</th>
                        <th>รวม</th>
                      
                    </tr>
                </thead>
                <tbody>
                    <? $sum=0;
                    ?>
                    <? while ($product = mysqli_fetch_array($result)) : ?>
                        <tr>
                            <!-- <td class="product-thumbnail">
                                <img src="images/<?=$product["pic"]?>" alt="Image" class="img-fluid" style="width:200px;height:200px">
                            </td> -->

                            <td class="product-id">
                                <h2 class="h5 text-black"><?=$product["id_pro"]?></h2>
                                <input type="hidden" value="<?=$product["id_pro"]?>" id="id_pro"/>
                            </td>


                            <td class="product-id">
                                <h2 class="h5 text-black"><?=$product["name_pro"]?></h2>
                                <input type="hidden" value="<?=$product["name_pro"]?>" id="name_pro"/>
                            </td>

                            <td class="product-id">
                                <?=$product["cart_total"]?>
                                <input type="hidden" value="<?=$product["cart_total"]?>" id="cart_total"/>
                            </td>

                            <td class="product-id">
                                <h2 class="h5 text-black"><?=$product["price"]?></h2>
                                <input type="hidden" value="<?=$product["price"]?>" id="price"/>                               
                            </td>

                            <td class="product-id">
                                <h2 class="h5 text-black"><?=$product["price"]*$product["cart_total"]?></h2>
                                <input type="hidden" value="<?=$product["price"]*$product["cart_total"]?>" id="total"/>
                            
                                <? $sum+=$product["price"]*$product["cart_total"]?>                              
                            </td>








                        </tr>
                    <? endwhile; ?>
                    <tr>
                        <td colspan="8" style="text-align: right;">
                        <h2 class="h5 text-black">ราคารวม <?=$sum?></h2>
                           
                    
                        </td>
                    </tr>



                </tbody>
            </table>

                                        <br>
                                            <h5>Select From Popular Banks</h5>
                                            <div class="swit-radio">
                                                <div class="check_box_one">
                                                    <div class="radio_one">
                                                        <label>
                                                            <input type="radio" name="radio" checked="">
                                                            <i></i>Scbbusinessnet</label>
                                                    </div>
                                                </div>
                                                <div class="check_box_one">
                                                    <div class="radio_one">
                                                        <label>
                                                            <input type="radio" name="radio">
                                                            <i></i>Kasikorn Bank</label>
                                                    </div>
                                                </div>
                                                <div class="check_box_one">
                                                    <div class="radio_one">
                                                        <label>
                                                            <input type="radio" name="radio">
                                                            <i></i>Bangkok Bank</label>
                                                    </div>
                                                </div>
                                                <div class="check_box_one">
                                                    <div class="radio_one">
                                                        <label>
                                                            <input type="radio" name="radio">
                                                            <i></i>Krungsri Bank</label>
                                                    </div>
                                                </div>
                                                
                                                <div class="clearfix"></div>
                                            </div>
                                            <h5>iBanking/Mobile banking</h5>
                                            <div class="section_room_pay">
                                                <select class="year">
                                                    <option value="">=== Other Banks ===</option>
                                                    <option value="ALB-NA">Scbbusinessnet</option>
                                                    <option value="ADB-NA">Kasikorn Bank</option>
                                                    <option value="BBK-NA">Bangkok Bank</option>
                                                    <option value="BBC-NA">Government Savings Bank</option>
                                                    <option value="BBR-NA">Krungsri Bank</option>  
													<option value="BBR-NA">Krungthai Bank</option>  													
                                                </select>
                                            </div>
											
											<p><span id="sprytextfield1">File
                <p><input type="file"  id="filUpload3">
              </span>
											<p><input type="submit" class="btn btn-sm height-auto px-4 py-3 btn-primary" value="Pay Now"/></p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
				
                <!--//tabs-->
            </div>

        </div>
    </section>
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
    <div class="modal fade" id="myModal_btn" tabindex="-1" role="dialog" aria-labelledby="myModal_btn" aria-hidden="true">
        <div class="agilemodal-dialog modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Register Now</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body pt-3 pb-5 px-sm-5">
                    <div class="row">
                        <div class="col-md-6 align-self-center">
                            <img src="images/p3.png" class="img-fluid" alt="login_image" />
                        </div>
                        <div class="col-md-6">
                            <form action="#" method="post">
                                <div class="form-group">
                                    <label for="recipient-name1" class="col-form-label">Your Name</label>
                                    <input type="text" class="form-control" placeholder=" " name="Name" id="recipient-name1" required="">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-email" class="col-form-label">Email</label>
                                    <input type="email" class="form-control" placeholder=" " name="Email" id="recipient-email" required="">
                                </div>
                                <div class="form-group">
                                    <label for="password1" class="col-form-label">Password</label>
                                    <input type="password" class="form-control" placeholder=" " name="Password" id="password1" required="">
                                </div>
                                <div class="form-group">
                                    <label for="password2" class="col-form-label">Confirm Password</label>
                                    <input type="password" class="form-control" placeholder=" " name="Confirm Password" id="password2" required="">
                                </div>
                                <div class="sub-w3l">
                                    <div class="sub-agile">
                                        <input type="checkbox" id="brand2" value="">
                                        <label for="brand2" class="mb-3">
                                            <span></span>I Accept to the Terms & Conditions</label>
                                    </div>
                                </div>
                                <div class="right-w3l">
                                    <input type="submit" class="form-control" value="Register">
                                </div>
                            </form>
                            <p class="text-center mt-3">Already a member?
                                <a href="#" data-toggle="modal" data-target="#exampleModal1" class="text-dark login_btn">
                                    Login Now</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //signup modal -->
    <!-- signin Modal -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModal1" aria-hidden="true">
        <div class="agilemodal-dialog modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body  pt-3 pb-5 px-sm-5">
                    <div class="row">
                        <div class="col-md-6 align-self-center">
                            <img src="images/p3.png" class="img-fluid" alt="login_image" />
                        </div>
                        <div class="col-md-6">
                            <form action="#" method="post">
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Your Name</label>
                                    <input type="text" class="form-control" placeholder=" " name="Name" id="recipient-name" required="">
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Password</label>
                                    <input type="password" class="form-control" placeholder=" " name="Password" required="">
                                </div>
                                <div class="right-w3l">
                                    <input type="submit" class="form-control" value="Login">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- signin Modal -->
    <!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
    <!-- smooth dropdown -->
    <script>
        $(document).ready(function () {
            $('ul li.dropdown').hover(function () {
                $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(200);
            }, function () {
                $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(200);
            });
        });
    </script>
    <!-- //smooth dropdown -->
    <!-- script for password match -->
    <script>
        window.onload = function () {
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

        hub.cart.on('new_checkout', function (evt) {
            var items, len, i;

            if (this.subtotal() > 0) {
                items = this.items();

                for (i = 0, len = items.length; i < len; i++) {}
            }
        });
    </script>
    <!-- //cart-js -->
    <!-- easy-responsive-tabs -->
    <script src="js/easy-responsive-tabs.js"></script>
    <script>
        $(document).ready(function () {
            $('#horizontalTab').easyResponsiveTabs({
                type: 'default', //Types: default, vertical, accordion           
                width: 'auto', //auto or any width like 600px
                fit: true, // 100% fit in a container
                closed: 'accordion', // Start closed if in accordion view
                activate: function (event) { // Callback function if tab is switched
                    var $tab = $(this);
                    var $info = $('#tabInfo');
                    var $name = $('span', $info);
                    $name.text($tab.text());
                    $info.show();
                }
            });
        });
    </script>
    <!-- //easy-responsive-tabs -->

    <!-- credit-card -->
    <script src="js/creditly.js"></script>
    <link rel="stylesheet" href="css/creditly.css" type="text/css" media="all" />

    <script>
        $(function () {
            var creditly = Creditly.initialize(
                '.creditly-wrapper .expiration-month-and-year',
                '.creditly-wrapper .credit-card-number',
                '.creditly-wrapper .security-code',
                '.creditly-wrapper .card-type');

            $(".creditly-card-form .submit").click(function (e) {
                e.preventDefault();
                var output = creditly.validate();
                if (output) {
                    // Your validated credit card output
                    console.log(output);
                }
            });
        });
    </script>
    <!-- //credit-card -->
    <!-- start-smooth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
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
        $(document).ready(function () {
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