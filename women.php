<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
session_start();
$search=$_POST['search'];
require 'connect.php';
$cus_id=$_SESSION['customer']['CustomerID'];
$AmountOrder=mysql_num_rows(mysql_query("select * from fc_orders where CustomerID='$cus_id'  and  SaleOrderStatus='รอการชำระเงิน'     "));
$NextCusID=mysql_num_rows(mysql_query("select * from fc_customers"))+1;

if($_GET['c']=="")
$meSql = "SELECT * FROM fc_products as t1, fc_categories as t2  where t1.CategoryID=t2.CategoryID";
else 
$meSql = "SELECT * FROM fc_products as t1, fc_categories as t2  where t1.CategoryID=t2.CategoryID and t2.CategoryID=".$_GET['c'];

	
$meQuery = mysql_query($meSql);

$action = isset($_GET['a']) ? $_GET['a'] : "";
$itemCount = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;
if(isset($_SESSION['qty'])){
    $meQty = 0;
    foreach($_SESSION['qty'] as $meItem){
        $meQty = $meQty + $meItem;
    }
}else{
    $meQty=0;
}
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
	<!-- Range-slider-css -->
	<link rel="stylesheet" type="text/css" href="css/jquery-ui1.css">
	<!-- flexslider-css -->
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
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
                    <a class="navbar-brand" href="index.html">Gotcha
                    </a>
                </h1>
                <!-- //logo -->
                <div class="w3ls_right_nav ml-auto d-flex">
                    <!-- search form -->
                    <form class="nav-search form-inline my-0 form-control" action="#" method="post">
                        <select class="form-control input-lg" name="category">
                            <option value="all">Search our store</option>
                            <optgroup label="Mens">
                                <option value="T-Shirts">T-Shirts</option>
                                <option value="coats-jackets">Coats & Jackets</option>
                                <option value="Shirts">Shirts</option>
                                <option value="Suits & Blazers">Suits & Blazers</option>
                                <option value="Jackets">Jackets</option>
                                <option value="Sweat Shirts">Trousers</option>
                            </optgroup>
                            <optgroup label="Womens">
                                <option value="Dresses">Dresses</option>
                                <option value="T-shirts">T-shirts</option>
                                <option value="skirts">Skirts</option>
                                <option value="jeans">Jeans</option>
                                <option value="Tunics">Tunics</option>
                            </optgroup>
                            <optgroup label="Girls">
                                <option value="Dresses">Dresses</option>
                                <option value="T-shirts">T-shirts</option>
                                <option value="skirts">Skirts</option>
                                <option value="jeans">Jeans</option>
                                <option value="Tops">Tops</option>
                            </optgroup>
                            <optgroup label="Boys">
                                <option value="T-Shirts">T-Shirts</option>
                                <option value="coats-jackets">Coats & Jackets</option>
                                <option value="Shirts">Shirts</option>
                                <option value="Suits & Blazers">Suits & Blazers</option>
                                <option value="Jackets">Jackets</option>
                                <option value="Sweat Shirts">Sweat Shirts</option>
                            </optgroup>
                        </select>
                        <input class="btn btn-outline-secondary  ml-3 my-sm-0" type="submit" value="Search">
                    </form>
                    <!-- search form -->
                    <div class="nav-icon d-flex">
                        <!-- sigin and sign up -->
                        <a class="text-dark login_btn align-self-center mx-3" href="#myModal_btn" data-toggle="modal" data-target="#myModal_btn">
                            <i class="far fa-user"></i>
                        </a>
                        <!-- sigin and sign up -->
                        <!-- shopping cart -->
                        <div class="cart-mainf">
                            <div class="hubcart hubcart2 cart cart box_1">
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="display" value="1">
                                    <button class="btn top_hub_cart mt-1" type="submit" name="submit" value="" title="Cart">
                                        <i class="fas fa-shopping-bag"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <!-- //shopping cart ends here -->
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
                            <a class="nav-link" href="index.html">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown has-mega-menu" style="position:static;">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Men's clothing</a>
                            <div class="dropdown-menu" style="width:100%">
                                <div class="px-0 container">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <a class="dropdown-item" href="men.html">T-Shirts</a>
                                            <a class="dropdown-item" href="men.html">Coats</a>
                                            <a class="dropdown-item" href="men.html">Shirts</a>
                                            <a class="dropdown-item" href="men.html">Suits & Blazers</a>
                                            <a class="dropdown-item" href="men.html">Jackets</a>
                                            <a class="dropdown-item" href="men.html">Trousers</a>
                                        </div>
                                        <div class="col-md-4">
                                            <a class="dropdown-item" href="men.html">T-Shirts</a>
                                            <a class="dropdown-item" href="men.html">Trousers</a>
                                            <a class="dropdown-item" href="men.html">Shirts</a>
                                            <a class="dropdown-item" href="men.html">Suits & Blazers</a>
                                            <a class="dropdown-item" href="men.html">Coats & Jackets</a>
                                            <a class="dropdown-item" href="men.html">Jackets</a>
                                        </div>
                                        <div class="col-md-4">
                                            <a class="dropdown-item" href="men.html">T-Shirts</a>
                                            <a class="dropdown-item" href="men.html">Coats</a>
                                            <a class="dropdown-item" href="men.html">Shirts</a>
                                            <a class="dropdown-item" href="men.html">Suits & Blazers</a>
                                            <a class="dropdown-item" href="men.html">Jackets</a>
                                            <a class="dropdown-item" href="men.html">Trousers</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown has-mega-menu" style="position:static;">
                            <a class="nav-link dropdown-toggle active" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Women's clothing</a>
                            <div class="dropdown-menu" style="width:100%">
                                <div class="px-0 container">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <a class="dropdown-item" href="women.html">Dresses</a>
                                            <a class="dropdown-item" href="women.html">T-shirts</a>
                                            <a class="dropdown-item" href="women.html">Skirts</a>
                                            <a class="dropdown-item" href="women.html">Jeans</a>
                                            <a class="dropdown-item" href="women.html">Tunics</a>
                                        </div>
                                        <div class="col-md-4">
                                            <a class="dropdown-item" href="women.html">T-shirts</a>
                                            <a class="dropdown-item" href="women.html">Dresses</a>
                                            <a class="dropdown-item" href="women.html">Tunics</a>
                                            <a class="dropdown-item" href="women.html">Skirts</a>
                                            <a class="dropdown-item" href="women.html">Jeans</a>
                                        </div>
                                        <div class="col-md-4">
                                            <a class="dropdown-item" href="women.html">Dresses</a>
                                            <a class="dropdown-item" href="women.html">T-shirts</a>
                                            <a class="dropdown-item" href="women.html">Skirts</a>
                                            <a class="dropdown-item" href="women.html">Jeans</a>
                                            <a class="dropdown-item" href="women.html">Tunics</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown has-mega-menu" style="position:static;">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Kids Clothing</a>
                            <div class="dropdown-menu" style="width:100%">
                                <div class="container">
                                    <div class="row w3_kids  py-3">
                                        <div class="col-md-3 ">
                                            <span class="bg-light">Boy's Clothing</span>
                                            <a class="dropdown-item" href="boys.html">T-Shirts</a>
                                            <a class="dropdown-item" href="boys.html">Coats</a>
                                            <a class="dropdown-item" href="boys.html">Shirts</a>
                                            <a class="dropdown-item" href="boys.html">Suits & Blazers</a>
                                            <a class="dropdown-item" href="boys.html">Jackets</a>
                                            <a class="dropdown-item" href="boys.html">Trousers</a>
                                        </div>
                                        <div class="col-md-3">
                                            <a class="dropdown-item mt-4" href="boys.html">T-Shirts</a>
                                            <a class="dropdown-item" href="boys.html">Coats</a>
                                            <a class="dropdown-item" href="boys.html">Shirts</a>
                                            <a class="dropdown-item" href="boys.html">Suits & Blazers</a>
                                            <a class="dropdown-item" href="boys.html">Jackets</a>
                                            <a class="dropdown-item" href="boys.html">Trousers</a>
                                        </div>
                                        <div class="col-md-3">
                                            <span>Girl's Clothing</span>
                                            <a class="dropdown-item" href="girls.html">T-shirts</a>
                                            <a class="dropdown-item" href="girls.html">Dresses</a>
                                            <a class="dropdown-item" href="girls.html">Tunics</a>
                                            <a class="dropdown-item" href="girls.html">Skirts</a>
                                            <a class="dropdown-item" href="girls.html">Jeans</a>
                                            <a class="dropdown-item" href="girls.html">Midi</a>
                                        </div>
                                        <div class="col-md-3">
                                            <a class="dropdown-item  mt-4" href="girls.html">Tunics</a>
                                            <a class="dropdown-item" href="girls.html">Skirts</a>
                                            <a class="dropdown-item" href="girls.html">T-shirts</a>
                                            <a class="dropdown-item" href="girls.html">Dresses</a>
                                            <a class="dropdown-item" href="girls.html">Jeans</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blog.html">Blog</a>
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
			<span>W</span>allet
			<span>B</span>ags</h4>
	</div>
	<!-- //inner banner -->
	<!-- breadcrumbs -->
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.html">Home</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">Bags</li>
		</ol>
	</nav>
	<!-- //breadcrumbs -->
	<!-- Shop -->
	<div class="innerf-pages section">
		<div class="fh-container mx-auto">
			<div class="row my-lg-5 mb-5">
				<!-- grid left -->
				<div class="side-bar col-lg-3">
					<!--preference -->
					<div class="left-side">
						<h3 class="shopf-sear-headits-sear-head">
							Categories</h3>
						<ul>
							<li>
								<input type="checkbox" class="checked" name="cat1" id="cat1">
								<label for="cat1">Fashion</label>
							</li>
							<li>
								<input type="checkbox" class="checked" name="cat2" id="cat2">
								<label for="cat2">Popular</label>
							</li>
							<li>
								<input type="checkbox" class="checked" name="cat3" id="cat3">
								<label for="cat3">Trending</label>
							</li>
							<li>
								<input type="checkbox" class="checked" name="cat4" id="cat4">
								<label for="cat4">Sort by popularity</label>
							</li>

						</ul>
					</div>
					<!-- // preference -->
					<div class="search-hotel">
						<h3 class="shopf-sear-headits-sear-head">
							<span>Brand</span> in focus</h3>
						<form action="#" method="post">
							<input type="search" placeholder="search here" name="search" required="">
							<input type="submit" value="Search">
						</form>
					</div>
					<!-- price range -->
					<div class="range">
						<h3 class="shopf-sear-headits-sear-head">
							<span>Price</span> range</h3>
						<ul class="dropdown-menu6">
							<li>

								<div id="slider-range"></div>
								<input type="text" id="amount" style="border: 0; color: #ffffff; font-weight: normal;" />
							</li>
						</ul>
					</div>
					<!-- //price range -->
					<!--preference -->
					<div class="left-side">
						<h3 class="shopf-sear-headits-sear-head">
							<span>latest</span> arrivals</h3>
						<ul>
							<li>
								<input type="checkbox" class="checked" name="arr1" id="arr1">
								<label for="arr1">last 30 days</label>
							</li>
							<li>
								<input type="checkbox" class="checked" name="arr2" id="arr2">
								<label for="arr2">last 90 days</label>
							</li>
							<li>
								<input type="checkbox" class="checked" name="arr3" id="arr3">
								<label for="arr3">last 150 days</label>
							</li>

						</ul>
					</div>
					<!-- // preference -->
					<!-- discounts -->
					<div class="left-side">
						<h3 class="shopf-sear-headits-sear-head">Sizes</h3>
						<ul>
							<li>
								<input type="checkbox" class="checked" name="size1" id="size1">
								<label for="size1">XS</label>
							</li>
							<li>
								<input type="checkbox" class="checked" name="size2" id="size2">
								<label for="size2">S</label>
							</li>
							<li>
								<input type="checkbox" class="checked" name="size3" id="size3">
								<label for="size3">M</label>
							</li>
							<li>
								<input type="checkbox" class="checked" name="size4" id="size4">
								<label for="size4">L</label>
							</li>
							<li>
								<input type="checkbox" class="checked" name="size5" id="size5">
								<label for="size5">XL</label>
							</li>
							<li>
								<input type="checkbox" class="checked" name="size6" id="size6">
								<label for="size6">XXL</label>
							</li>
							<li>
								<input type="checkbox" class="checked" name="size7" id="size7">
								<label for="size7">XXXL</label>
							</li>
						</ul>
					</div>
					<!-- //discounts -->
					<!-- Binding -->
					<div class="left-side">
						<h3 class="shopf-sear-headits-sear-head">Color</h3>
						<div class="d-flex">
							<ul>
								<li>
									<input type="checkbox" class="checked" name="color1" id="color1">
									<label for="color1">Black</label>
								</li>
								<li>
									<input type="checkbox" class="checked" name="color2" id="color2">
									<label for="color2">Blue</label>
								</li>
								<li>
									<input type="checkbox" class="checked" name="color3" id="color3">
									<label for="color3">Red</label>
								</li>
								<li>
									<input type="checkbox" class="checked" name="color4" id="color4">
									<label for="color4">Yellow</label>
								</li>
								<li>
									<input type="checkbox" class="checked" name="color5" id="color5">
									<label for="color5">White</label>
								</li>
							</ul>
							<ul>
								<li>
									<input type="checkbox" class="checked" name="color6" id="color6">
									<label for="color6">Green</label>
								</li>
								<li>
									<input type="checkbox" class="checked" name="color7" id="color7">
									<label for="color7">Multi</label>
								</li>
								<li>
									<input type="checkbox" class="checked" name="color8" id="color8">
									<label for="color8">Purple</label>
								</li>
								<li>
									<input type="checkbox" class="checked" name="color9" id="color9">
									<label for="color9">Gold</label>
								</li>
								<li>
									<input type="checkbox" class="checked" name="color10" id="color10">
									<label for="color10">Orange</label>
								</li>
							</ul>
						</div>
					</div>
					<!-- //Binding -->
					<!-- discounts -->
					<div class="left-side">
						<h3 class="shopf-sear-headits-sear-head">Discount</h3>
						<ul>
							<li>
								<input type="checkbox" class="checked" name="dis1" id="dis1">
								<label for="dis1">5% - 20%</label>
							</li>
							<li>
								<input type="checkbox" class="checked" name="dis2" id="dis2">
								<label for="dis2">20% - 40%</label>
							</li>
							<li>
								<input type="checkbox" class="dis3" name="dis3" id="dis3">
								<label for="dis3">40% - 60%</label>
							</li>
							<li>
								<input type="checkbox" class="checked" name="dis4" id="dis4">
								<label for="dis4">60% or more</label>
							</li>
						</ul>
					</div>
					<!-- //discounts -->
					<!-- reviews -->
					<div class="customer-rev left-side">
						<h3 class="shopf-sear-headits-sear-head">Customer Review</h3>
						<ul>
							<li>
								<a href="#">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<span>5.0</span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star-o" aria-hidden="true"></i>
									<span>4.0</span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star-half-o" aria-hidden="true"></i>
									<i class="fa fa-star-o" aria-hidden="true"></i>
									<span>3.5</span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star-o" aria-hidden="true"></i>
									<i class="fa fa-star-o" aria-hidden="true"></i>
									<span>3.0</span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star-half-o" aria-hidden="true"></i>
									<i class="fa fa-star-o" aria-hidden="true"></i>
									<i class="fa fa-star-o" aria-hidden="true"></i>
									<span>2.5</span>
								</a>
							</li>
						</ul>
					</div>
					<!-- //reviews -->
				</div>
				
				<!-- //grid left -->
				<!-- grid right -->
				<div class="col-lg-9 mt-lg-0 mt-5 right-product-grid">
					<!-- card group  -->
					<div class="card-group">
						<!-- card -->
						<div class="col-lg-3 col-sm-6 p-0">
						
							<div class="card product-men p-3">
								<div class="men-thumb-item">
									
						<a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
              <div class="portfolio-hover">
              </div>
              <img class="img-fluid" src="images/wallet/w1.jpg" alt="">
            </a>

		  
		   <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
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
                  <h2 class="text-uppercase">Gotcha Kew Zipper Wallet Printed Sugar Brown</h2>
                  <p class="item-intro text-muted">WOMEN กระเป๋าสตางค์</p>
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
                            ฿375.00</h6>
                    </div>
                  <img class="img-fluid d-block mx-auto" src="images/wallet/w1.jpg" alt="">
				  <h6>
				  	<br>
                            The description</h6>
					
                  <p>กระเป๋าของเราใช้ได้ทุกเพศทุกวัย เหมาะกับวันสบายๆหรือทางการก็ดี มีรูปแบบที่ทันสมัยและไม่ซ้ำใคร ตอบโจทย์ไลฟ์สไตล์วัยรุ่นยุคใหม่ และวัยทำงาน แมทต์กับการแต่งตัวได้ง่ายสีสันไม่ฉูดฉาด</p>
					<br>
					
				  <ul class="list-inline">
				 <li>Brand :  <font color="red">Gotcha(ก๊อตช่า)</font></li>
                    <li>Color :  <font color="red">Sugar Brown </font></li>
                    <li>Size :  <font color="red">mini</font></li>
                    <li>Material :  <font color="red">Pu leather</font></li>
					<li>Use :  <font color="red">Official</font></li>
					<li>Number of products :  <font color="red">15</font></li>
					<br>Details

<br>
				 <p>กระเป๋าตังค์เล็กรูดซิป ใส่บัตรได้เหรียญได้</p>
				 
				 
                  </ul>
				  <br>
				 <p>
                  <p>
					<p> <h3 align = 'center'><button class="btn btn-primary" data-dismiss="modal" type="button">
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
									<h5 class="card-title text-capitalize">Gotcha Kew Zipper Wallet Printed Sugar Brown</h5>
									<div class="card-text d-flex justify-content-between">
										<p class="text-dark font-weight-bold">฿375.00</p>
										<p class="line-through">฿395.00</p>
									</div>
								</div>
								<!-- card footer -->
								
								
								
								
								
								
								<div class="card-footer d-flex justify-content-end">
								
									<form action="#" method="post">
											
										<a  href="updatecart.php?itemId=<?php echo $meResult['ProductID']; ?>" role="button" class="fa fa-cart-plus" aria-hidden="true">
                                 </a>
								
									</form>
								</div>
							</div>
						</div>
						
						
						
                   
            
		
						<!-------------------------------------------------------------------------------->
						
						
						<!-- card -->
						<div class="col-lg-3 col-sm-6 p-0">
						
							<div class="card product-men p-3">
								<div class="men-thumb-item">
									
						<a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
              <div class="portfolio-hover">
              </div>
              <img class="img-fluid" src="images/wallet/w2.jpg" alt="">
            </a>

		  
		   <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
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
                  <h2 class="text-uppercase">Gotcha Kew Zipper Wallet Printed Blue</h2>
                  <p class="item-intro text-muted">WOMEN กระเป๋าสตางค์</p>
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
                            ฿375.00</h6>
                    </div>
                  <img class="img-fluid d-block mx-auto" src="images/wallet/w2.jpg" alt="">
				  <h6>
				  	<br>
                            The description</h6>
					
                  <p>กระเป๋าของเราใช้ได้ทุกเพศทุกวัย เหมาะกับวันสบายๆหรือทางการก็ดี มีรูปแบบที่ทันสมัยและไม่ซ้ำใคร ตอบโจทย์ไลฟ์สไตล์วัยรุ่นยุคใหม่ และวัยทำงาน แมทต์กับการแต่งตัวได้ง่ายสีสันไม่ฉูดฉาด</p>
					<br>
					
				  <ul class="list-inline">
				 <li>Brand :  <font color="red">Gotcha(ก๊อตช่า)</font></li>
                    <li>Color :  <font color="red">Blue</font></li>
                    <li>Size :  <font color="red">mini</font></li>
                    <li>Material :  <font color="red">Pu leather</font></li>
					<li>Use :  <font color="red">Official</font></li>
					<li>Number of products :  <font color="red">20</font></li>
					<br>Details

<br>
				 <p>กระเป๋าตังค์เล็กรูดซิป ใส่บัตรได้เหรียญได้</p>
				 
				 
                  </ul>
				  <br>
				 <p>
                  <a button class="btn btn-primary"  href="man.html" type="button"  style="width:130px;height:70px">
					เพิ่มไปยังรถเข็น<img class="img-fluid d-block mx-auto" src="images/gotcha/gg.png" alt="" style="width:50px;height:30px"></a>
					
					<a button class="btn btn-primary"  type="button" href="Order.html"style="width:130px;height:70px">
						ซื้อสินค้า<img class="img-fluid d-block mx-auto" src="images/gotcha/gh.png" alt="" style="width:50px;height:30px"></a><p>
					<p> <h3 align = 'center'><button class="btn btn-primary" data-dismiss="modal" type="button">
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
									<h5 class="card-title text-capitalize">Gotcha Kew Zipper Wallet Printed Blue</h5>
									<div class="card-text d-flex justify-content-between">
										<p class="text-dark font-weight-bold">฿375.00</p>
										<p class="line-through">฿395.00</p>
									</div>
								</div>
								<!-- card footer -->
								<div class="card-footer d-flex justify-content-end">
									<form action="#" method="post">
											
										<a  href="updatecart.php?itemId=<?php echo $meResult['ProductID']; ?>" role="button" class="fa fa-cart-plus" aria-hidden="true">
                                 </a>
								 
									
									</form>
								</div>
							</div>
						</div>
		
						<!-------------------------------------------------------------------------------->
						
	
						
						<!-- card -->
						<div class="col-lg-3 col-sm-6 p-0">
						
							<div class="card product-men p-3">
								<div class="men-thumb-item">
									
						<a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
              <div class="portfolio-hover">
              </div>
              <img class="img-fluid" src="images/wallet/w3.jpg" alt="">
            </a>

		  
		   <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
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
                  <h2 class="text-uppercase">Gotcha Kew Zipper Wallet Printed Black</h2>
                  <p class="item-intro text-muted">WOMEN กระเป๋าสตางค์</p>
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
                            ฿375.00</h6>
                    </div>
                  <img class="img-fluid d-block mx-auto" src="images/wallet/w3.jpg" alt="">
				  <h6>
				  	<br>
                            The description</h6>
					
                  <p>กระเป๋าของเราใช้ได้ทุกเพศทุกวัย เหมาะกับวันสบายๆหรือทางการก็ดี มีรูปแบบที่ทันสมัยและไม่ซ้ำใคร ตอบโจทย์ไลฟ์สไตล์วัยรุ่นยุคใหม่ และวัยทำงาน แมทต์กับการแต่งตัวได้ง่ายสีสันไม่ฉูดฉาด</p>
					<br>
					
				  <ul class="list-inline">
				 <li>Brand :  <font color="red">Gotcha(ก๊อตช่า)</font></li>
                    <li>Color :  <font color="red">Black</font></li>
                    <li>Size :  <font color="red">mini</font></li>
                    <li>Material :  <font color="red">Pu leather</font></li>
					<li>Use :  <font color="red">Official</font></li>
					<li>Number of products :  <font color="red">10</font></li>
					<br>Details
				<br>
				 <p>กระเป๋าตังค์เล็กรูดซิป ใส่บัตรได้เหรียญได้</p>
				 
				 
                  </ul>
				  <br>
				 <p>
                  <a button class="btn btn-primary"  href="checkout.html" type="button"  style="width:130px;height:70px">
					เพิ่มไปยังรถเข็น<img class="img-fluid d-block mx-auto" src="images/gotcha/gg.png" alt="" style="width:50px;height:30px"></a>
					
					<a button class="btn btn-primary"  type="button" href="checkout.html"style="width:130px;height:70px">
						ซื้อสินค้า<img class="img-fluid d-block mx-auto" src="images/gotcha/gh.png" alt="" style="width:50px;height:30px"></a><p>
					<p> <h3 align = 'center'><button class="btn btn-primary" data-dismiss="modal" type="button">
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
									<h5 class="card-title text-capitalize">Gotcha Kew Zipper Wallet Printed Black</h5>
									<div class="card-text d-flex justify-content-between">
										<p class="text-dark font-weight-bold">฿375.00</p>
										<p class="line-through">฿395.00</p>
									</div>
								</div>
								<!-- card footer -->
								<!-- card footer -->
								<div class="card-footer d-flex justify-content-end">
									<form action="#" method="post">
											
										<a  href="updatecart.php?itemId=<?php echo $meResult['ProductID']; ?>" role="button" class="fa fa-cart-plus" aria-hidden="true">
                                 </a>
								 
									
									</form>
								</div>
							</div>
						</div>
		
						<!-------------------------------------------------------------------------------->
		
						<!-- card -->
						<div class="col-lg-3 col-sm-6 p-0">
						
							<div class="card product-men p-3">
								<div class="men-thumb-item">
									
						<a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
              <div class="portfolio-hover">
              </div>
              <img class="img-fluid" src="images/wallet/w4.jpg" alt="">
            </a>

		  
		   <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
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
                  <h2 class="text-uppercase">Gotcha Kew Zipper Wallet Printed Grey</h2>
                  <p class="item-intro text-muted">WOMEN กระเป๋าสตางค์</p>
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
                            ฿375.00</h6>
                    </div>
                  <img class="img-fluid d-block mx-auto" src="images/wallet/w4.jpg" alt="">
				  <h6>
				  	<br>
                            The description</h6>
					
                  <p>กระเป๋าของเราใช้ได้ทุกเพศทุกวัย เหมาะกับวันสบายๆหรือทางการก็ดี มีรูปแบบที่ทันสมัยและไม่ซ้ำใคร ตอบโจทย์ไลฟ์สไตล์วัยรุ่นยุคใหม่ และวัยทำงาน แมทต์กับการแต่งตัวได้ง่ายสีสันไม่ฉูดฉาด</p>
					<br>
					
				  <ul class="list-inline">
				 <li>Brand :  <font color="red">Gotcha(ก๊อตช่า)</font></li>
                    <li>Color :  <font color="red">Grey</font></li>
                    <li>Size :  <font color="red">mini</font></li>
                    <li>Material :  <font color="red">Pu leather</font></li>
					<li>Use :  <font color="red">Official</font></li>
					<li>Number of products :  <font color="red">12</font></li>
					<br>Details

<br>
				 <p>กระเป๋าตังค์เล็กรูดซิป ใส่บัตรได้เหรียญได้</p>
				 
				 
                  </ul>
				  <br>
				 <p>
                  <a button class="btn btn-primary"  href="checkout.html" type="button"  style="width:130px;height:70px">
					เพิ่มไปยังรถเข็น<img class="img-fluid d-block mx-auto" src="images/gotcha/gg.png" alt="" style="width:50px;height:30px"></a>
					
					<a button class="btn btn-primary"  type="button" href="checkout.html"style="width:130px;height:70px">
						ซื้อสินค้า<img class="img-fluid d-block mx-auto" src="images/gotcha/gh.png" alt="" style="width:50px;height:30px"></a><p>
					<p> <h3 align = 'center'><button class="btn btn-primary" data-dismiss="modal" type="button">
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
									<h5 class="card-title text-capitalize">Gotcha Kew Zipper Wallet Printed Grey</h5>
									<div class="card-text d-flex justify-content-between">
										<p class="text-dark font-weight-bold">฿375.00</p>
										<p class="line-through">฿395.00</p>
									</div>
								</div>
								<!-- card footer -->
									<div class="card-footer d-flex justify-content-end">
								
									<form action="#" method="post">
											
										<a  href="updatecart.php?itemId=<?php echo $meResult['ProductID']; ?>" role="button" class="fa fa-cart-plus" aria-hidden="true">
                                 </a>
								
									</form>
								</div>
							</div>
						</div>
						<!-------------------------------------------------------------------------------->
		
						<!-- card -->
						<div class="col-lg-3 col-sm-6 p-0">
						
							<div class="card product-men p-3">
								<div class="men-thumb-item">
									
						<a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
              <div class="portfolio-hover">
              </div>
              <img class="img-fluid" src="images/wallet/w5.jpg" alt="">
            </a>

		  
		   <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
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
                  <h2 class="text-uppercase">Gotcha Huncha Cardholder Fur Black</h2>
                  <p class="item-intro text-muted">WOMEN กระเป๋าสตางค์</p>
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
                            ฿375.00</h6>
                    </div>
                  <img class="img-fluid d-block mx-auto" src="images/wallet/w5.jpg" alt="">
				  <h6>
				  	<br>
                            The description</h6>
					
                  <p>กระเป๋าของเราใช้ได้ทุกเพศทุกวัย เหมาะกับวันสบายๆหรือทางการก็ดี มีรูปแบบที่ทันสมัยและไม่ซ้ำใคร ตอบโจทย์ไลฟ์สไตล์วัยรุ่นยุคใหม่ และวัยทำงาน แมทต์กับการแต่งตัวได้ง่ายสีสันไม่ฉูดฉาด</p>
					<br>
					
				  <ul class="list-inline">
				 <li>Brand :  <font color="red">Gotcha(ก๊อตช่า)</font></li>
                    <li>Color :  <font color="red">Black</font></li>
                    <li>Size :  <font color="red">mini</font></li>
                    <li>Material :  <font color="red">Pu leather</font></li>
					<li>Use :  <font color="red">Official</font></li>
					<li>Number of products :  <font color="red">12</font></li>
					<br>Details
				<br>
				 <p>กระเป๋าสตางค์ขน กระเป๋าใส่การ์ด</p>
				 
				 
                  </ul>
				  <br>
				 <p>
                  <a button class="btn btn-primary"  href="man.html" type="button"  style="width:130px;height:70px">
					เพิ่มไปยังรถเข็น<img class="img-fluid d-block mx-auto" src="images/gotcha/gg.png" alt="" style="width:50px;height:30px"></a>
					
					<a button class="btn btn-primary"  type="button" href="Order.html"style="width:130px;height:70px">
						ซื้อสินค้า<img class="img-fluid d-block mx-auto" src="images/gotcha/gh.png" alt="" style="width:50px;height:30px"></a><p>
					<p> <h3 align = 'center'><button class="btn btn-primary" data-dismiss="modal" type="button">
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
									<h5 class="card-title text-capitalize">GGotcha Huncha Cardholder Fur Black</h5>
									<div class="card-text d-flex justify-content-between">
										<p class="text-dark font-weight-bold">฿350.00</p>
										<p class="line-through">฿375.00</p>
									</div>
								</div>
								<!-- card footer -->
									<div class="card-footer d-flex justify-content-end">
								
									<form action="#" method="post">
											
										<a  href="updatecart.php?itemId=<?php echo $meResult['ProductID']; ?>" role="button" class="fa fa-cart-plus" aria-hidden="true">
                                 </a>
								
									</form>
								</div>
							</div>
						</div>
		
						<!-------------------------------------------------------------------------------->
					
					<!-- card -->
						<div class="col-lg-3 col-sm-6 p-0">
						
							<div class="card product-men p-3">
								<div class="men-thumb-item">
									
						<a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
              <div class="portfolio-hover">
              </div>
              <img class="img-fluid" src="images/wallet/w6.jpg" alt="">
            </a>

		  
		   <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
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
                  <h2 class="text-uppercase">Gotcha Huncha Cardholder Fur Grey</h2>
                  <p class="item-intro text-muted">WOMEN กระเป๋าสตางค์</p>
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
                            ฿350.00</h6>
                    </div>
                  <img class="img-fluid d-block mx-auto" src="images/wallet/w6.jpg" alt="">
				  <h6>
				  	<br>
                            The description</h6>
					
                  <p>กระเป๋าของเราใช้ได้ทุกเพศทุกวัย เหมาะกับวันสบายๆหรือทางการก็ดี มีรูปแบบที่ทันสมัยและไม่ซ้ำใคร ตอบโจทย์ไลฟ์สไตล์วัยรุ่นยุคใหม่ และวัยทำงาน แมทต์กับการแต่งตัวได้ง่ายสีสันไม่ฉูดฉาด</p>
					<br>
					
				  <ul class="list-inline">
				 <li>Brand :  <font color="red">Gotcha(ก๊อตช่า)</font></li>
                    <li>Color :  <font color="red">Grey</font></li>
                    <li>Size :  <font color="red">mini</font></li>
                    <li>Material :  <font color="red">Pu leather</font></li>
					<li>Use :  <font color="red">Official</font></li>
					<li>Number of products :  <font color="red">15</font></li>
					<br>Details
				<br>
				 <p>กระเป๋าสตางค์ขน กระเป๋าใส่การ์ด</p>
				 
				 
                  </ul>
				  <br>
				 <p>
                  <a button class="btn btn-primary"  href="man.html" type="button"  style="width:130px;height:70px">
					เพิ่มไปยังรถเข็น<img class="img-fluid d-block mx-auto" src="images/gotcha/gg.png" alt="" style="width:50px;height:30px"></a>
					
					<a button class="btn btn-primary"  type="button" href="Order.html"style="width:130px;height:70px">
						ซื้อสินค้า<img class="img-fluid d-block mx-auto" src="images/gotcha/gh.png" alt="" style="width:50px;height:30px"></a><p>
					<p> <h3 align = 'center'><button class="btn btn-primary" data-dismiss="modal" type="button">
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
									<h5 class="card-title text-capitalize">Gotcha Huncha Cardholder Fur Grey</h5>
									<div class="card-text d-flex justify-content-between">
										<p class="text-dark font-weight-bold">฿350.00</p>
										<p class="line-through">฿375.00</p>
									</div>
								</div>
								<!-- card footer -->
									<div class="card-footer d-flex justify-content-end">
								
									<form action="#" method="post">
											
										<a  href="updatecart.php?itemId=<?php echo $meResult['ProductID']; ?>" role="button" class="fa fa-cart-plus" aria-hidden="true">
                                 </a>
								
									</form>
								</div>
							</div>
						</div>
		
						<!-------------------------------------------------------------------------------->
					
										
					<!-- card -->
						<div class="col-lg-3 col-sm-6 p-0">
						
							<div class="card product-men p-3">
								<div class="men-thumb-item">
									
						<a class="portfolio-link" data-toggle="modal" href="#portfolioModal7">
              <div class="portfolio-hover">
              </div>
              <img class="img-fluid" src="images/wallet/w7.jpg" alt="">
            </a>

		  
		   <div class="portfolio-modal modal fade" id="portfolioModal7" tabindex="-1" role="dialog" aria-hidden="true">
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
                  <h2 class="text-uppercase">Gotcha Huncha Cardholder Fur Maroon</h2>
                  <p class="item-intro text-muted">WOMEN กระเป๋าสตางค์</p>
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
                            ฿350.00</h6>
                    </div>
                  <img class="img-fluid d-block mx-auto" src="images/wallet/w7.jpg" alt="">
				  <h6>
				  	<br>
                            The description</h6>
					
                  <p>กระเป๋าของเราใช้ได้ทุกเพศทุกวัย เหมาะกับวันสบายๆหรือทางการก็ดี มีรูปแบบที่ทันสมัยและไม่ซ้ำใคร ตอบโจทย์ไลฟ์สไตล์วัยรุ่นยุคใหม่ และวัยทำงาน แมทต์กับการแต่งตัวได้ง่ายสีสันไม่ฉูดฉาด</p>
					<br>
					
				  <ul class="list-inline">
				 <li>Brand :  <font color="red">Gotcha(ก๊อตช่า)</font></li>
                    <li>Color :  <font color="red">Maroon</font></li>
                    <li>Size :  <font color="red">mini</font></li>
                    <li>Material :  <font color="red">Pu leather</font></li>
					<li>Use :  <font color="red">Official</font></li>
					<li>Number of products :  <font color="red">18</font></li>
					<br>Details
				<br>
				 <p>กระเป๋าสตางค์ขน กระเป๋าใส่การ์ด</p>
				 
				 
                  </ul>
				  <br>
				 <p>
                  <a button class="btn btn-primary"  href="man.html" type="button"  style="width:130px;height:70px">
					เพิ่มไปยังรถเข็น<img class="img-fluid d-block mx-auto" src="images/gotcha/gg.png" alt="" style="width:50px;height:30px"></a>
					
					<a button class="btn btn-primary"  type="button" href="Order.html"style="width:130px;height:70px">
						ซื้อสินค้า<img class="img-fluid d-block mx-auto" src="images/gotcha/gh.png" alt="" style="width:50px;height:30px"></a><p>
					<p> <h3 align = 'center'><button class="btn btn-primary" data-dismiss="modal" type="button">
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
									<h5 class="card-title text-capitalize">Gotcha Huncha Cardholder Fur Maroon</h5>
									<div class="card-text d-flex justify-content-between">
										<p class="text-dark font-weight-bold">฿350.00</p>
										<p class="line-through">฿375.00</p>
									</div>
								</div>
								<!-- card footer -->
									<div class="card-footer d-flex justify-content-end">
								
									<form action="#" method="post">
											
										<a  href="updatecart.php?itemId=<?php echo $meResult['ProductID']; ?>" role="button" class="fa fa-cart-plus" aria-hidden="true">
                                 </a>
								
									</form>
								</div>
							</div>
						</div>
		
						<!-------------------------------------------------------------------------------->
						
					<!-- card -->
						<div class="col-lg-3 col-sm-6 p-0">
						
							<div class="card product-men p-3">
								<div class="men-thumb-item">
									
						<a class="portfolio-link" data-toggle="modal" href="#portfolioModal8">
              <div class="portfolio-hover">
              </div>
              <img class="img-fluid" src="images/wallet/w8.jpg" alt="">
            </a>

		  
		   <div class="portfolio-modal modal fade" id="portfolioModal8" tabindex="-1" role="dialog" aria-hidden="true">
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
                  <h2 class="text-uppercase">Gotcha Huncha Cardholder Fur Navy Blue</h2>
                  <p class="item-intro text-muted">WOMEN กระเป๋าสตางค์</p>
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
                            ฿350.00</h6>
                    </div>
                  <img class="img-fluid d-block mx-auto" src="images/wallet/w8.jpg" alt="">
				  <h6>
				  	<br>
                            The description</h6>
					
                  <p>กระเป๋าของเราใช้ได้ทุกเพศทุกวัย เหมาะกับวันสบายๆหรือทางการก็ดี มีรูปแบบที่ทันสมัยและไม่ซ้ำใคร ตอบโจทย์ไลฟ์สไตล์วัยรุ่นยุคใหม่ และวัยทำงาน แมทต์กับการแต่งตัวได้ง่ายสีสันไม่ฉูดฉาด</p>
					<br>
					
				  <ul class="list-inline">
				 <li>Brand :  <font color="red">Gotcha(ก๊อตช่า)</font></li>
                    <li>Color :  <font color="red">Navy Blue </font></li>
                    <li>Size :  <font color="red">mini</font></li>
                    <li>Material :  <font color="red">Pu leather</font></li>
					<li>Use :  <font color="red">Official</font></li>
					<li>Number of products :  <font color="red">13</font></li>
					<br>Details
				<br>
				 <p>กระเป๋าสตางค์ขน กระเป๋าใส่การ์ด</p>
				 
				 
                  </ul>
				  <br>
				 <p>
                  <a button class="btn btn-primary"  href="man.html" type="button"  style="width:130px;height:70px">
					เพิ่มไปยังรถเข็น<img class="img-fluid d-block mx-auto" src="images/gotcha/gg.png" alt="" style="width:50px;height:30px"></a>
					
					<a button class="btn btn-primary"  type="button" href="Order.html"style="width:130px;height:70px">
						ซื้อสินค้า<img class="img-fluid d-block mx-auto" src="images/gotcha/gh.png" alt="" style="width:50px;height:30px"></a><p>
					<p> <h3 align = 'center'><button class="btn btn-primary" data-dismiss="modal" type="button">
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
									<h5 class="card-title text-capitalize">Gotcha Huncha Cardholder Fur Navy Blu</h5>
									<div class="card-text d-flex justify-content-between">
										<p class="text-dark font-weight-bold">฿350.00</p>
										<p class="line-through">฿375.00</p>
									</div>
								</div>
								<!-- card footer -->
									<div class="card-footer d-flex justify-content-end">
								
									<form action="#" method="post">
											
										<a  href="updatecart.php?itemId=<?php echo $meResult['ProductID']; ?>" role="button" class="fa fa-cart-plus" aria-hidden="true">
                                 </a>
								
									</form>
								</div>
							</div>
						</div>
		
						<!-------------------------------------------------------------------------------->
						
									
					<!-- card -->
						<div class="col-lg-3 col-sm-6 p-0">
						
							<div class="card product-men p-3">
								<div class="men-thumb-item">
									
						<a class="portfolio-link" data-toggle="modal" href="#portfolioModal9">
              <div class="portfolio-hover">
              </div>
              <img class="img-fluid" src="images/wallet/w9.jpg" alt="">
            </a>

		  
		   <div class="portfolio-modal modal fade" id="portfolioModal9" tabindex="-1" role="dialog" aria-hidden="true">
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
                  <h2 class="text-uppercase">Gotcha Rom mini wallet with chain LightGrey</h2>
                  <p class="item-intro text-muted">WOMEN กระเป๋าสตางค์</p>
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
                            ฿675.00</h6>
                    </div>
                  <img class="img-fluid d-block mx-auto" src="images/wallet/w9.jpg" alt="">
				  <h6>
				  	<br>
                            The description</h6>
					
                  <p>กระเป๋าของเราใช้ได้ทุกเพศทุกวัย เหมาะกับวันสบายๆหรือทางการก็ดี มีรูปแบบที่ทันสมัยและไม่ซ้ำใคร ตอบโจทย์ไลฟ์สไตล์วัยรุ่นยุคใหม่ และวัยทำงาน แมทต์กับการแต่งตัวได้ง่ายสีสันไม่ฉูดฉาด</p>
					<br>
					
				  <ul class="list-inline">
				 <li>Brand :  <font color="red">Gotcha(ก๊อตช่า)</font></li>
                    <li>Color :  <font color="red">LightGrey</font></li>
                    <li>Size :  <font color="red">mini</font></li>
                    <li>Material :  <font color="red">Pu leather</font></li>
					<li>Use :  <font color="red">Official</font></li>
					<li>Number of products :  <font color="red">13</font></li>
					<br>Details
				<br>
				 <p>กระเป๋าสตางค์ใบเล็กสามารถถอดหรือใส่สายโซ่ได้ ใส่พาสปอร์ตได้</p>
				 
				 
                  </ul>
				  <br>
				 <p>
                  <a button class="btn btn-primary"  href="man.html" type="button"  style="width:130px;height:70px">
					เพิ่มไปยังรถเข็น<img class="img-fluid d-block mx-auto" src="images/gotcha/gg.png" alt="" style="width:50px;height:30px"></a>
					
					<a button class="btn btn-primary"  type="button" href="Order.html"style="width:130px;height:70px">
						ซื้อสินค้า<img class="img-fluid d-block mx-auto" src="images/gotcha/gh.png" alt="" style="width:50px;height:30px"></a><p>
					<p> <h3 align = 'center'><button class="btn btn-primary" data-dismiss="modal" type="button">
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
									<h5 class="card-title text-capitalize">Gotcha Rom mini wallet with chain LightGrey</h5>
									<div class="card-text d-flex justify-content-between">
										<p class="text-dark font-weight-bold">฿675.00</p>
										<p class="line-through">฿690.00</p>
									</div>
								</div>
								<!-- card footer -->
									<div class="card-footer d-flex justify-content-end">
								
									<form action="#" method="post">
											
										<a  href="updatecart.php?itemId=<?php echo $meResult['ProductID']; ?>" role="button" class="fa fa-cart-plus" aria-hidden="true">
                                 </a>
								
									</form>
								</div>
							</div>
						</div>
		
						<!-------------------------------------------------------------------------------->
						
					<!-- card -->
						<div class="col-lg-3 col-sm-6 p-0">
						
							<div class="card product-men p-3">
								<div class="men-thumb-item">
									
						<a class="portfolio-link" data-toggle="modal" href="#portfolioModal10">
              <div class="portfolio-hover">
              </div>
              <img class="img-fluid" src="images/wallet/w10.jpg" alt="">
            </a>

		  
		   <div class="portfolio-modal modal fade" id="portfolioModal10" tabindex="-1" role="dialog" aria-hidden="true">
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
                  <h2 class="text-uppercase">Gotcha Rom mini wallet with chain Black</h2>
                  <p class="item-intro text-muted">WOMEN กระเป๋าสตางค์</p>
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
                            ฿675.00</h6>
                    </div>
                  <img class="img-fluid d-block mx-auto" src="images/wallet/w10.jpg" alt="">
				  <h6>
				  	<br>
                            The description</h6>
					
                  <p>กระเป๋าของเราใช้ได้ทุกเพศทุกวัย เหมาะกับวันสบายๆหรือทางการก็ดี มีรูปแบบที่ทันสมัยและไม่ซ้ำใคร ตอบโจทย์ไลฟ์สไตล์วัยรุ่นยุคใหม่ และวัยทำงาน แมทต์กับการแต่งตัวได้ง่ายสีสันไม่ฉูดฉาด</p>
					<br>
					
				  <ul class="list-inline">
				 <li>Brand :  <font color="red">Gotcha(ก๊อตช่า)</font></li>
                    <li>Color :  <font color="red">Black</font></li>
                    <li>Size :  <font color="red">mini</font></li>
                    <li>Material :  <font color="red">Pu leather</font></li>
					<li>Use :  <font color="red">Official</font></li>
					<li>Number of products :  <font color="red">13</font></li>
					<br>Details
				<br>
				 <p>กระเป๋าสตางค์ใบเล็กสามารถถอดหรือใส่สายโซ่ได้ ใส่พาสปอร์ตได้</p>
				 
				 
                  </ul>
				  <br>
				 <p>
                  <a button class="btn btn-primary"  href="man.html" type="button"  style="width:130px;height:70px">
					เพิ่มไปยังรถเข็น<img class="img-fluid d-block mx-auto" src="images/gotcha/gg.png" alt="" style="width:50px;height:30px"></a>
					
					<a button class="btn btn-primary"  type="button" href="Order.html"style="width:130px;height:70px">
						ซื้อสินค้า<img class="img-fluid d-block mx-auto" src="images/gotcha/gh.png" alt="" style="width:50px;height:30px"></a><p>
					<p> <h3 align = 'center'><button class="btn btn-primary" data-dismiss="modal" type="button">
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
									<h5 class="card-title text-capitalize">Gotcha Rom mini wallet with chain Black</h5>
									<div class="card-text d-flex justify-content-between">
										<p class="text-dark font-weight-bold">฿675.00</p>
										<p class="line-through">฿690.00</p>
									</div>
								</div>
								<!-- card footer -->
									<div class="card-footer d-flex justify-content-end">
								
									<form action="#" method="post">
											
										<a  href="updatecart.php?itemId=<?php echo $meResult['ProductID']; ?>" role="button" class="fa fa-cart-plus" aria-hidden="true">
                                 </a>
								
									</form>
								</div>
							</div>
						</div>
		
						<!-------------------------------------------------------------------------------->
					
					
					<!-- card -->
						<div class="col-lg-3 col-sm-6 p-0">
						
							<div class="card product-men p-3">
								<div class="men-thumb-item">
									
						<a class="portfolio-link" data-toggle="modal" href="#portfolioModal11">
              <div class="portfolio-hover">
              </div>
              <img class="img-fluid" src="images/wallet/w11.jpg" alt="">
            </a>

		  
		   <div class="portfolio-modal modal fade" id="portfolioModal11" tabindex="-1" role="dialog" aria-hidden="true">
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
                  <h2 class="text-uppercase">Gotcha Rom mini wallet with chain pink</h2>
                  <p class="item-intro text-muted">WOMEN กระเป๋าสตางค์</p>
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
                            ฿675.00</h6>
                    </div>
                  <img class="img-fluid d-block mx-auto" src="images/wallet/w11.jpg" alt="">
				  <h6>
				  	<br>
                            The description</h6>
					
                  <p>กระเป๋าของเราใช้ได้ทุกเพศทุกวัย เหมาะกับวันสบายๆหรือทางการก็ดี มีรูปแบบที่ทันสมัยและไม่ซ้ำใคร ตอบโจทย์ไลฟ์สไตล์วัยรุ่นยุคใหม่ และวัยทำงาน แมทต์กับการแต่งตัวได้ง่ายสีสันไม่ฉูดฉาด</p>
					<br>
					
				  <ul class="list-inline">
				 <li>Brand :  <font color="red">Gotcha(ก๊อตช่า)</font></li>
                    <li>Color :  <font color="red">Pink</font></li>
                    <li>Size :  <font color="red">mini</font></li>
                    <li>Material :  <font color="red">Pu leather</font></li>
					<li>Use :  <font color="red">Official</font></li>
					<li>Number of products :  <font color="red">12</font></li>
					<br>Details
				<br>
				 <p>กระเป๋าสตางค์ใบเล็กสามารถถอดหรือใส่สายโซ่ได้ ใส่พาสปอร์ตได้</p>
				 
				 
                  </ul>
				  <br>
				 <p>
                  <a button class="btn btn-primary"  href="man.html" type="button"  style="width:130px;height:70px">
					เพิ่มไปยังรถเข็น<img class="img-fluid d-block mx-auto" src="images/gotcha/gg.png" alt="" style="width:50px;height:30px"></a>
					
					<a button class="btn btn-primary"  type="button" href="Order.html"style="width:130px;height:70px">
						ซื้อสินค้า<img class="img-fluid d-block mx-auto" src="images/gotcha/gh.png" alt="" style="width:50px;height:30px"></a><p>
					<p> <h3 align = 'center'><button class="btn btn-primary" data-dismiss="modal" type="button">
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
									<h5 class="card-title text-capitalize">Gotcha Rom mini wallet with chain pink</h5>
									<div class="card-text d-flex justify-content-between">
										<p class="text-dark font-weight-bold">฿675.00</p>
										<p class="line-through">฿690.00</p>
									</div>
								</div>
								<!-- card footer -->
									<div class="card-footer d-flex justify-content-end">
								
									<form action="#" method="post">
											
										<a  href="updatecart.php?itemId=<?php echo $meResult['ProductID']; ?>" role="button" class="fa fa-cart-plus" aria-hidden="true">
                                 </a>
								
									</form>
								</div>
							</div>
						</div>
		
						<!-------------------------------------------------------------------------------->
					
					<!-- card -->
						<div class="col-lg-3 col-sm-6 p-0">
						
							<div class="card product-men p-3">
								<div class="men-thumb-item">
									
						<a class="portfolio-link" data-toggle="modal" href="#portfolioModal12">
              <div class="portfolio-hover">
              </div>
              <img class="img-fluid" src="images/wallet/w12.jpg" alt="">
            </a>

		  
		   <div class="portfolio-modal modal fade" id="portfolioModal12" tabindex="-1" role="dialog" aria-hidden="true">
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
                  <h2 class="text-uppercase">Gotcha Rom mini wallet with chain Mustard</h2>
                  <p class="item-intro text-muted">WOMEN กระเป๋าสตางค์</p>
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
                            ฿675.00</h6>
                    </div>
                  <img class="img-fluid d-block mx-auto" src="images/wallet/w12.jpg" alt="">
				  <h6>
				  	<br>
                            The description</h6>
					
                  <p>กระเป๋าของเราใช้ได้ทุกเพศทุกวัย เหมาะกับวันสบายๆหรือทางการก็ดี มีรูปแบบที่ทันสมัยและไม่ซ้ำใคร ตอบโจทย์ไลฟ์สไตล์วัยรุ่นยุคใหม่ และวัยทำงาน แมทต์กับการแต่งตัวได้ง่ายสีสันไม่ฉูดฉาด</p>
					<br>
					
				  <ul class="list-inline">
				 <li>Brand :  <font color="red">Gotcha(ก๊อตช่า)</font></li>
                    <li>Color :  <font color="red">Mustard</font></li>
                    <li>Size :  <font color="red">mini</font></li>
                    <li>Material :  <font color="red">Pu leather</font></li>
					<li>Use :  <font color="red">Official</font></li>
					<li>Number of products :  <font color="red">15</font></li>
					<br>Details
				<br>
				 <p>กระเป๋าสตางค์ใบเล็กสามารถถอดหรือใส่สายโซ่ได้ ใส่พาสปอร์ตได้</p>
				 
				 
                  </ul>
				  <br>
				 <p>
                  <a button class="btn btn-primary"  href="man.html" type="button"  style="width:130px;height:70px">
					เพิ่มไปยังรถเข็น<img class="img-fluid d-block mx-auto" src="images/gotcha/gg.png" alt="" style="width:50px;height:30px"></a>
					
					<a button class="btn btn-primary"  type="button" href="Order.html"style="width:130px;height:70px">
						ซื้อสินค้า<img class="img-fluid d-block mx-auto" src="images/gotcha/gh.png" alt="" style="width:50px;height:30px"></a><p>
					<p> <h3 align = 'center'><button class="btn btn-primary" data-dismiss="modal" type="button">
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
									<h5 class="card-title text-capitalize">Gotcha Rom mini wallet with chain Mustard</h5>
									<div class="card-text d-flex justify-content-between">
										<p class="text-dark font-weight-bold">฿675.00</p>
										<p class="line-through">฿690.00</p>
									</div>
								</div>
								<!-- card footer -->
									<div class="card-footer d-flex justify-content-end">
								
									<form action="#" method="post">
											
										<a  href="updatecart.php?itemId=<?php echo $meResult['ProductID']; ?>" role="button" class="fa fa-cart-plus" aria-hidden="true">
                                 </a>
								
									</form>
								</div>
							</div>
						</div>
		
						<!-------------------------------------------------------------------------------->
					
							
					<!-- card -->
						<div class="col-lg-3 col-sm-6 p-0">
						
							<div class="card product-men p-3">
								<div class="men-thumb-item">
									
						<a class="portfolio-link" data-toggle="modal" href="#portfolioModal13">
              <div class="portfolio-hover">
              </div>
              <img class="img-fluid" src="images/wallet/w13.jpg" alt="">
            </a>

		  
		   <div class="portfolio-modal modal fade" id="portfolioModal13" tabindex="-1" role="dialog" aria-hidden="true">
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
                  <h2 class="text-uppercase">Gotcha Rom Mini Wallet With Chain Maroon</h2>
                  <p class="item-intro text-muted">WOMEN กระเป๋าสตางค์</p>
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
                            ฿675.00</h6>
                    </div>
                  <img class="img-fluid d-block mx-auto" src="images/wallet/w13.jpg" alt="">
				  <h6>
				  	<br>
                            The description</h6>
					
                  <p>กระเป๋าของเราใช้ได้ทุกเพศทุกวัย เหมาะกับวันสบายๆหรือทางการก็ดี มีรูปแบบที่ทันสมัยและไม่ซ้ำใคร ตอบโจทย์ไลฟ์สไตล์วัยรุ่นยุคใหม่ และวัยทำงาน แมทต์กับการแต่งตัวได้ง่ายสีสันไม่ฉูดฉาด</p>
					<br>
					
				  <ul class="list-inline">
				 <li>Brand :  <font color="red">Gotcha(ก๊อตช่า)</font></li>
                    <li>Color :  <font color="red">Maroon</font></li>
                    <li>Size :  <font color="red">mini</font></li>
                    <li>Material :  <font color="red">Pu leather</font></li>
					<li>Use :  <font color="red">Official</font></li>
					<li>Number of products :  <font color="red">17</font></li>
					<br>Details
				<br>
				 <p>กระเป๋าสตางค์ใบเล็กสามารถถอดหรือใส่สายโซ่ได้ ใส่พาสปอร์ตได้</p>
				 
				 
                  </ul>
				  <br>
				 <p>
                  <a button class="btn btn-primary"  href="man.html" type="button"  style="width:130px;height:70px">
					เพิ่มไปยังรถเข็น<img class="img-fluid d-block mx-auto" src="images/gotcha/gg.png" alt="" style="width:50px;height:30px"></a>
					
					<a button class="btn btn-primary"  type="button" href="Order.html"style="width:130px;height:70px">
						ซื้อสินค้า<img class="img-fluid d-block mx-auto" src="images/gotcha/gh.png" alt="" style="width:50px;height:30px"></a><p>
					<p> <h3 align = 'center'><button class="btn btn-primary" data-dismiss="modal" type="button">
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
									<h5 class="card-title text-capitalize">Gotcha Rom mini wallet with chain Maroon</h5>
									<div class="card-text d-flex justify-content-between">
										<p class="text-dark font-weight-bold">฿675.00</p>
										<p class="line-through">฿690.00</p>
									</div>
								</div>
								<!-- card footer -->
									<div class="card-footer d-flex justify-content-end">
								
									<form action="#" method="post">
											
										<a  href="updatecart.php?itemId=<?php echo $meResult['ProductID']; ?>" role="button" class="fa fa-cart-plus" aria-hidden="true">
                                 </a>
								
									</form>
								</div>
							</div>
						</div>
		
						<!-------------------------------------------------------------------------------->
					
					<!-- card -->
						<div class="col-lg-3 col-sm-6 p-0">
						
							<div class="card product-men p-3">
								<div class="men-thumb-item">
									
						<a class="portfolio-link" data-toggle="modal" href="#portfolioModal14">
              <div class="portfolio-hover">
              </div>
              <img class="img-fluid" src="images/wallet/w14.jpg" alt="">
            </a>

		  
		   <div class="portfolio-modal modal fade" id="portfolioModal14" tabindex="-1" role="dialog" aria-hidden="true">
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
                  <h2 class="text-uppercase">Gotcha Cheni Grey Wallet </h2>
                  <p class="item-intro text-muted">WOMEN กระเป๋าสตางค์</p>
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
                            ฿975.00</h6>
                    </div>
                  <img class="img-fluid d-block mx-auto" src="images/wallet/w14.jpg" alt="">
				  <h6>
				  	<br>
                            The description</h6>
					
                  <p>กระเป๋าของเราใช้ได้ทุกเพศทุกวัย เหมาะกับวันสบายๆหรือทางการก็ดี มีรูปแบบที่ทันสมัยและไม่ซ้ำใคร ตอบโจทย์ไลฟ์สไตล์วัยรุ่นยุคใหม่ และวัยทำงาน แมทต์กับการแต่งตัวได้ง่ายสีสันไม่ฉูดฉาด</p>
					<br>
					
				  <ul class="list-inline">
				 <li>Brand :  <font color="red">Gotcha(ก๊อตช่า)</font></li>
                    <li>Color :  <font color="red">Grey </font></li>
                    <li>Size :  <font color="red">mini</font></li>
                    <li>Material :  <font color="red">Pu leather</font></li>
					<li>Use :  <font color="red">Official</font></li>
					<li>Number of products :  <font color="red">18</font></li>
					<br>Details
				<br>
				 <p>ใส่บัตรได้ 8-10ใบ สามารถใส่เหรียญๆได้ ใช้งานง่ายและสะดวก</p>
				 
				 
                  </ul>
				  <br>
				 <p>
                  <a button class="btn btn-primary"  href="man.html" type="button"  style="width:130px;height:70px">
					เพิ่มไปยังรถเข็น<img class="img-fluid d-block mx-auto" src="images/gotcha/gg.png" alt="" style="width:50px;height:30px"></a>
					
					<a button class="btn btn-primary"  type="button" href="Order.html"style="width:130px;height:70px">
						ซื้อสินค้า<img class="img-fluid d-block mx-auto" src="images/gotcha/gh.png" alt="" style="width:50px;height:30px"></a><p>
					<p> <h3 align = 'center'><button class="btn btn-primary" data-dismiss="modal" type="button">
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
									<h5 class="card-title text-capitalize">Gotcha Cheni Grey <br>Wallet</h5>
									<div class="card-text d-flex justify-content-between">
										<p class="text-dark font-weight-bold">฿975.00</p>
										<p class="line-through">฿990.00</p>
									</div>
								</div>
								<!-- card footer -->
								<div class="card-footer d-flex justify-content-end">
								
									<form action="#" method="post">
											
										<a  href="updatecart.php?itemId=<?php echo $meResult['ProductID']; ?>" role="button" class="fa fa-cart-plus" aria-hidden="true">
                                 </a>
								
									</form>
								</div>
							</div>
						</div>
		
						<!-------------------------------------------------------------------------------->
				
					
					<!-- card -->
						<div class="col-lg-3 col-sm-6 p-0">
						
							<div class="card product-men p-3">
								<div class="men-thumb-item">
									
						<a class="portfolio-link" data-toggle="modal" href="#portfolioModal15">
              <div class="portfolio-hover">
              </div>
              <img class="img-fluid" src="images/wallet/w15.jpg" alt="">
            </a>

		  
		   <div class="portfolio-modal modal fade" id="portfolioModal15" tabindex="-1" role="dialog" aria-hidden="true">
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
                  <h2 class="text-uppercase">Gotcha Cheni Black Wallet</h2>
                  <p class="item-intro text-muted">WOMEN กระเป๋าสตางค์</p>
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
                            ฿975.00</h6>
                    </div>
                  <img class="img-fluid d-block mx-auto" src="images/wallet/w15.jpg" alt="">
				  <h6>
				  	<br>
                            The description</h6>
					
                  <p>กระเป๋าของเราใช้ได้ทุกเพศทุกวัย เหมาะกับวันสบายๆหรือทางการก็ดี มีรูปแบบที่ทันสมัยและไม่ซ้ำใคร ตอบโจทย์ไลฟ์สไตล์วัยรุ่นยุคใหม่ และวัยทำงาน แมทต์กับการแต่งตัวได้ง่ายสีสันไม่ฉูดฉาด</p>
					<br>
					
				  <ul class="list-inline">
				 <li>Brand :  <font color="red">Gotcha(ก๊อตช่า)</font></li>
                    <li>Color :  <font color="red">Black </font></li>
                    <li>Size :  <font color="red">mini</font></li>
                    <li>Material :  <font color="red">Pu leather</font></li>
					<li>Use :  <font color="red">Official</font></li>
					<li>Number of products :  <font color="red">19</font></li>
					<br>Details
				<br>
				 <p>ใส่บัตรได้ 8-10ใบ สามารถใส่เหรียญๆได้ ใช้งานง่ายและสะดวก</p>
				 
				 
                  </ul>
				  <br>
				 <p>
                  <a button class="btn btn-primary"  href="man.html" type="button"  style="width:130px;height:70px">
					เพิ่มไปยังรถเข็น<img class="img-fluid d-block mx-auto" src="images/gotcha/gg.png" alt="" style="width:50px;height:30px"></a>
					
					<a button class="btn btn-primary"  type="button" href="Order.html"style="width:130px;height:70px">
						ซื้อสินค้า<img class="img-fluid d-block mx-auto" src="images/gotcha/gh.png" alt="" style="width:50px;height:30px"></a><p>
					<p> <h3 align = 'center'><button class="btn btn-primary" data-dismiss="modal" type="button">
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
									<h5 class="card-title text-capitalize">Gotcha Cheni Black <br>Wallet</h5>
									<div class="card-text d-flex justify-content-between">
										<p class="text-dark font-weight-bold">฿975.00</p>
										<p class="line-through">฿990.00</p>
									</div>
								</div>
								<!-- card footer -->
									<div class="card-footer d-flex justify-content-end">
								
									<form action="#" method="post">
											
										<a  href="updatecart.php?itemId=<?php echo $meResult['ProductID']; ?>" role="button" class="fa fa-cart-plus" aria-hidden="true">
                                 </a>
								
									</form>
								</div>
							</div>
						</div>
		
						<!-------------------------------------------------------------------------------->
					
					
							<!-- card -->
						<div class="col-lg-3 col-sm-6 p-0">
						
							<div class="card product-men p-3">
								<div class="men-thumb-item">
									
						<a class="portfolio-link" data-toggle="modal" href="#portfolioModal16">
              <div class="portfolio-hover">
              </div>
              <img class="img-fluid" src="images/wallet/w16.jpg" alt="">
            </a>

		  
		   <div class="portfolio-modal modal fade" id="portfolioModal16" tabindex="-1" role="dialog" aria-hidden="true">
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
                  <h2 class="text-uppercase">Gotcha Cheni Vanilla Cream Wallet </h2>
                  <p class="item-intro text-muted">WOMEN กระเป๋าสตางค์</p>
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
                            ฿975.00</h6>
                    </div>
                  <img class="img-fluid d-block mx-auto" src="images/wallet/w16.jpg" alt="">
				  <h6>
				  	<br>
                            The description</h6>
					
                  <p>กระเป๋าของเราใช้ได้ทุกเพศทุกวัย เหมาะกับวันสบายๆหรือทางการก็ดี มีรูปแบบที่ทันสมัยและไม่ซ้ำใคร ตอบโจทย์ไลฟ์สไตล์วัยรุ่นยุคใหม่ และวัยทำงาน แมทต์กับการแต่งตัวได้ง่ายสีสันไม่ฉูดฉาด</p>
					<br>
					
				  <ul class="list-inline">
				 <li>Brand :  <font color="red">Gotcha(ก๊อตช่า)</font></li>
                    <li>Color :  <font color="red">Vanilla Cream</font></li>
                    <li>Size :  <font color="red">mini</font></li>
                    <li>Material :  <font color="red">Pu leather</font></li>
					<li>Use :  <font color="red">Official</font></li>
					<li>Number of products :  <font color="red">15</font></li>
					<br>Details
				<br>
				 <p>ใส่บัตรได้ 8-10ใบ สามารถใส่เหรียญๆได้ ใช้งานง่ายและสะดวก</p>
				 
				 
                  </ul>
				  <br>
				 <p>
                  <a button class="btn btn-primary"  href="man.html" type="button"  style="width:130px;height:70px">
					เพิ่มไปยังรถเข็น<img class="img-fluid d-block mx-auto" src="images/gotcha/gg.png" alt="" style="width:50px;height:30px"></a>
					
					<a button class="btn btn-primary"  type="button" href="Order.html"style="width:130px;height:70px">
						ซื้อสินค้า<img class="img-fluid d-block mx-auto" src="images/gotcha/gh.png" alt="" style="width:50px;height:30px"></a><p>
					<p> <h3 align = 'center'><button class="btn btn-primary" data-dismiss="modal" type="button">
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
									<h5 class="card-title text-capitalize">Gotcha Cheni Vanilla Cream Wallet</h5>
									<div class="card-text d-flex justify-content-between">
										<p class="text-dark font-weight-bold">฿975.00</p>
										<p class="line-through">฿990.00</p>
									</div>
								</div>
								<!-- card footer -->
								<div class="card-footer d-flex justify-content-end">
								
									<form action="#" method="post">
											
										<a  href="updatecart.php?itemId=<?php echo $meResult['ProductID']; ?>" role="button" class="fa fa-cart-plus" aria-hidden="true">
                                 </a>
								
									</form>
								</div>
							</div>
						</div>
		
						<!-------------------------------------------------------------------------------->
					
					
					<!-- card -->
						<div class="col-lg-3 col-sm-6 p-0">
						
							<div class="card product-men p-3">
								<div class="men-thumb-item">
									
						<a class="portfolio-link" data-toggle="modal" href="#portfolioModal17">
              <div class="portfolio-hover">
              </div>
              <img class="img-fluid" src="images/wallet/w17.jpg" alt="">
            </a>

		  
		   <div class="portfolio-modal modal fade" id="portfolioModal17" tabindex="-1" role="dialog" aria-hidden="true">
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
                  <h2 class="text-uppercase">Gotcha Huncha Cardholder Printed</h2>
                  <p class="item-intro text-muted">WOMEN กระเป๋าสตางค์</p>
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
                            ฿350.00</h6>
                    </div>
                  <img class="img-fluid d-block mx-auto" src="images/wallet/w17.jpg" alt="">
				  <h6>
				  	<br>
                            The description</h6>
					
                  <p>กระเป๋าของเราใช้ได้ทุกเพศทุกวัย เหมาะกับวันสบายๆหรือทางการก็ดี มีรูปแบบที่ทันสมัยและไม่ซ้ำใคร ตอบโจทย์ไลฟ์สไตล์วัยรุ่นยุคใหม่ และวัยทำงาน แมทต์กับการแต่งตัวได้ง่ายสีสันไม่ฉูดฉาด</p>
					<br>
					
				  <ul class="list-inline">
				 <li>Brand :  <font color="red">Gotcha(ก๊อตช่า)</font></li>
                    <li>Color :  <font color="red">Black</font></li>
                    <li>Size :  <font color="red">mini</font></li>
                    <li>Material :  <font color="red">Pu leather</font></li>
					<li>Use :  <font color="red">Official</font></li>
					<li>Number of products :  <font color="red">12</font></li>
					<br>Details
				<br>
				 <p>กระเป๋าสตางค์ปั๊มลาย ใส่แบงค์แบบพับครึ่งได้ กระเป๋าใส่การ์ดได้ 8 ใบ </p>
				 
				 
                  </ul>
				  <br>
				 <p>
                  <a button class="btn btn-primary"  href="man.html" type="button"  style="width:130px;height:70px">
					เพิ่มไปยังรถเข็น<img class="img-fluid d-block mx-auto" src="images/gotcha/gg.png" alt="" style="width:50px;height:30px"></a>
					
					<a button class="btn btn-primary"  type="button" href="Order.html"style="width:130px;height:70px">
						ซื้อสินค้า<img class="img-fluid d-block mx-auto" src="images/gotcha/gh.png" alt="" style="width:50px;height:30px"></a><p>
					<p> <h3 align = 'center'><button class="btn btn-primary" data-dismiss="modal" type="button">
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
									<h5 class="card-title text-capitalize">Gotcha Huncha Cardholder Printed </h5>
									<div class="card-text d-flex justify-content-between">
										<p class="text-dark font-weight-bold">฿350.00</p>
										<p class="line-through">฿375.00</p>
									</div>
								</div>
								<!-- card footer -->
									<div class="card-footer d-flex justify-content-end">
								
									<form action="#" method="post">
											
										<a  href="updatecart.php?itemId=<?php echo $meResult['ProductID']; ?>" role="button" class="fa fa-cart-plus" aria-hidden="true">
                                 </a>
								
									</form>
								</div>
							</div>
						</div>
		
						<!-------------------------------------------------------------------------------->
					
					<!-- card -->
						<div class="col-lg-3 col-sm-6 p-0">
						
							<div class="card product-men p-3">
								<div class="men-thumb-item">
									
						<a class="portfolio-link" data-toggle="modal" href="#portfolioModal18">
              <div class="portfolio-hover">
              </div>
              <img class="img-fluid" src="images/wallet/w18.jpg" alt="">
            </a>

		  
		   <div class="portfolio-modal modal fade" id="portfolioModal18" tabindex="-1" role="dialog" aria-hidden="true">
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
                  <h2 class="text-uppercase">Gotcha Huncha Cardholder Printed Grey</h2>
                  <p class="item-intro text-muted">WOMEN กระเป๋าสตางค์</p>
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
                            ฿350.00</h6>
                    </div>
                  <img class="img-fluid d-block mx-auto" src="images/wallet/w18.jpg" alt="">
				  <h6>
				  	<br>
                            The description</h6>
					
                  <p>กระเป๋าของเราใช้ได้ทุกเพศทุกวัย เหมาะกับวันสบายๆหรือทางการก็ดี มีรูปแบบที่ทันสมัยและไม่ซ้ำใคร ตอบโจทย์ไลฟ์สไตล์วัยรุ่นยุคใหม่ และวัยทำงาน แมทต์กับการแต่งตัวได้ง่ายสีสันไม่ฉูดฉาด</p>
					<br>
					
				  <ul class="list-inline">
				 <li>Brand :  <font color="red">Gotcha(ก๊อตช่า)</font></li>
                    <li>Color :  <font color="red">Grey</font></li>
                    <li>Size :  <font color="red">mini</font></li>
                    <li>Material :  <font color="red">Pu leather</font></li>
					<li>Use :  <font color="red">Official</font></li>
					<li>Number of products :  <font color="red">11</font></li>
					<br>Details
				<br>
				 <p>กระเป๋าสตางค์ปั๊มลาย ใส่แบงค์แบบพับครึ่งได้ กระเป๋าใส่การ์ดได้ 8 ใบ </p>
				 
				 
                  </ul>
				  <br>
				 <p>
                  <a button class="btn btn-primary"  href="man.html" type="button"  style="width:130px;height:70px">
					เพิ่มไปยังรถเข็น<img class="img-fluid d-block mx-auto" src="images/gotcha/gg.png" alt="" style="width:50px;height:30px"></a>
					
					<a button class="btn btn-primary"  type="button" href="Order.html"style="width:130px;height:70px">
						ซื้อสินค้า<img class="img-fluid d-block mx-auto" src="images/gotcha/gh.png" alt="" style="width:50px;height:30px"></a><p>
					<p> <h3 align = 'center'><button class="btn btn-primary" data-dismiss="modal" type="button">
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
									<h5 class="card-title text-capitalize">Gotcha Huncha Cardholder Printed Grey</h5>
									<div class="card-text d-flex justify-content-between">
										<p class="text-dark font-weight-bold">฿350.00</p>
										<p class="line-through">฿375.00</p>
									</div>
								</div>
								<!-- card footer -->
									<div class="card-footer d-flex justify-content-end">
								
									<form action="#" method="post">
											
										<a  href="updatecart.php?itemId=<?php echo $meResult['ProductID']; ?>" role="button" class="fa fa-cart-plus" aria-hidden="true">
                                 </a>
								
									</form>
								</div>
							</div>
						</div>
		
						<!-------------------------------------------------------------------------------->
					
					
					<!-- card -->
						<div class="col-lg-3 col-sm-6 p-0">
						
							<div class="card product-men p-3">
								<div class="men-thumb-item">
									
						<a class="portfolio-link" data-toggle="modal" href="#portfolioModal19">
              <div class="portfolio-hover">
              </div>
              <img class="img-fluid" src="images/wallet/w19.jpg" alt="">
            </a>

		  
		   <div class="portfolio-modal modal fade" id="portfolioModal19" tabindex="-1" role="dialog" aria-hidden="true">
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
                  <h2 class="text-uppercase">Gotcha Huncha Cardholder Printed Maroon</h2>
                  <p class="item-intro text-muted">WOMEN กระเป๋าสตางค์</p>
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
                            ฿350.00</h6>
                    </div>
                  <img class="img-fluid d-block mx-auto" src="images/wallet/w19.jpg" alt="">
				  <h6>
				  	<br>
                            The description</h6>
					
                  <p>กระเป๋าของเราใช้ได้ทุกเพศทุกวัย เหมาะกับวันสบายๆหรือทางการก็ดี มีรูปแบบที่ทันสมัยและไม่ซ้ำใคร ตอบโจทย์ไลฟ์สไตล์วัยรุ่นยุคใหม่ และวัยทำงาน แมทต์กับการแต่งตัวได้ง่ายสีสันไม่ฉูดฉาด</p>
					<br>
					
				  <ul class="list-inline">
				 <li>Brand :  <font color="red">Gotcha(ก๊อตช่า)</font></li>
                    <li>Color :  <font color="red">Maroon</font></li>
                    <li>Size :  <font color="red">mini</font></li>
                    <li>Material :  <font color="red">Pu leather</font></li>
					<li>Use :  <font color="red">Official</font></li>
					<li>Number of products :  <font color="red">13</font></li>
					<br>Details
				<br>
				 <p>กระเป๋าสตางค์ปั๊มลาย ใส่แบงค์แบบพับครึ่งได้ กระเป๋าใส่การ์ดได้ 8 ใบ </p>
				 
				 
                  </ul>
				  <br>
				 <p>
                  <a button class="btn btn-primary"  href="man.html" type="button"  style="width:130px;height:70px">
					เพิ่มไปยังรถเข็น<img class="img-fluid d-block mx-auto" src="images/gotcha/gg.png" alt="" style="width:50px;height:30px"></a>
					
					<a button class="btn btn-primary"  type="button" href="Order.html"style="width:130px;height:70px">
						ซื้อสินค้า<img class="img-fluid d-block mx-auto" src="images/gotcha/gh.png" alt="" style="width:50px;height:30px"></a><p>
					<p> <h3 align = 'center'><button class="btn btn-primary" data-dismiss="modal" type="button">
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
									<h5 class="card-title text-capitalize">Gotcha Huncha Cardholder Printed Maroon</h5>
									<div class="card-text d-flex justify-content-between">
										<p class="text-dark font-weight-bold">฿350.00</p>
										<p class="line-through">฿375.00</p>
									</div>
								</div>
								<!-- card footer -->
									<div class="card-footer d-flex justify-content-end">
								
									<form action="#" method="post">
											
										<a  href="updatecart.php?itemId=<?php echo $meResult['ProductID']; ?>" role="button" class="fa fa-cart-plus" aria-hidden="true">
                                 </a>
								
									</form>
								</div>
							</div>
						</div>
		
						<!-------------------------------------------------------------------------------->
						
						<!-- card -->
						<div class="col-lg-3 col-sm-6 p-0">
						
							<div class="card product-men p-3">
								<div class="men-thumb-item">
									
						<a class="portfolio-link" data-toggle="modal" href="#portfolioModal20">
              <div class="portfolio-hover">
              </div>
              <img class="img-fluid" src="images/wallet/w20.jpg" alt="">
            </a>

		  
		   <div class="portfolio-modal modal fade" id="portfolioModal20" tabindex="-1" role="dialog" aria-hidden="true">
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
                  <h2 class="text-uppercase">Gotcha Salis Folder Printed Pink</h2>
                  <p class="item-intro text-muted">WOMEN แฟ้ม คลัช กระเป๋า</p>
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
                            ฿575.00</h6>
                    </div>
                  <img class="img-fluid d-block mx-auto" src="images/wallet/w20.jpg" alt="">
				  <h6>
				  	<br>
                            The description</h6>
					
                  <p>กระเป๋าของเราใช้ได้ทุกเพศทุกวัย เหมาะกับวันสบายๆหรือทางการก็ดี มีรูปแบบที่ทันสมัยและไม่ซ้ำใคร ตอบโจทย์ไลฟ์สไตล์วัยรุ่นยุคใหม่ และวัยทำงาน แมทต์กับการแต่งตัวได้ง่ายสีสันไม่ฉูดฉาด</p>
					<br>
					
				  <ul class="list-inline">
				 <li>Brand :  <font color="red">Gotcha(ก๊อตช่า)</font></li>
                    <li>Color :  <font color="red">Pink</font></li>
                    <li>Size :  <font color="red">Big</font></li>
                    <li>Material :  <font color="red">Pu leather</font></li>
					<li>Use :  <font color="red">Official</font></li>
					<li>Number of products :  <font color="red">13</font></li>
					<br>Details
				<br>
				 <p>แฟ้ม gotcha สามารถใส่ A4  , คอม ใหญ่ถึง 14 นิ้ว มีบุกันกระแทก สามารภใส่ชีทได้สองชั้นด้วยกัน ข้างในมีซับใน</p>
				 
				 
                  </ul>
				  <br>
				 <p>
                  <a button class="btn btn-primary"  href="man.html" type="button"  style="width:130px;height:70px">
					เพิ่มไปยังรถเข็น<img class="img-fluid d-block mx-auto" src="images/gotcha/gg.png" alt="" style="width:50px;height:30px"></a>
					
					<a button class="btn btn-primary"  type="button" href="Order.html"style="width:130px;height:70px">
						ซื้อสินค้า<img class="img-fluid d-block mx-auto" src="images/gotcha/gh.png" alt="" style="width:50px;height:30px"></a><p>
					<p> <h3 align = 'center'><button class="btn btn-primary" data-dismiss="modal" type="button">
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
									<h5 class="card-title text-capitalize">Gotcha Salis Folder Printed Pink</h5>
									<div class="card-text d-flex justify-content-between">
										<p class="text-dark font-weight-bold">฿575.00</p>
										<p class="line-through">฿595.00</p>
									</div>
								</div>
								<!-- card footer -->
								<div class="card-footer d-flex justify-content-end">
								
									<form action="#" method="post">
											
										<a  href="updatecart.php?itemId=<?php echo $meResult['ProductID']; ?>" role="button" class="fa fa-cart-plus" aria-hidden="true">
                                 </a>
								
									</form>
								</div>
							</div>
						</div>
		
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
 <footer>
        <div class="footerv2-w3ls">
            <div class="footer-w3lagile-innerr">
                <!-- footer-top -->
                <div class="container-fluid">
                    <div class="row  footer-v2grids w3-agileits">
                        <!-- services -->
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
                        <!-- //services -->
                        <!-- latest posts -->
                        <div class="col-lg-3 col-sm-6 footer-v2grid mt-sm-0 mt-5">
                            <h4>Latest Blog</h4>
                            <div class="footer-v2grid1 row">
                                <div class="col-4 footer-v2grid1-left">
                                    <a href="blog.html">
                                        <img src="images/bl2.jpg" alt=" " class="img-fluid">
                                    </a>
                                </div>
                                <div class="col-8 footer-v2grid1-right p-0">
                                    <a href="blog.html">eveniie arcet ut moles morbi dapiti</a>
                                </div>
                            </div>
                            <div class="footer-v2grid1 row my-2">
                                <div class="col-4 footer-v2grid1-left">
                                    <a href="blog.html">
                                        <img src="images/bl1.jpg" alt=" " class="img-fluid">
                                    </a>
                                </div>
                                <div class="col-8 footer-v2grid1-right p-0">
                                    <a href="blog.html">earum rerum tenmorbi dapiti et</a>
                                </div>
                            </div>
                            <div class="footer-v2grid1 row">
                                <div class="col-4 footer-v2grid1-left">
                                    <a href="blog.html">
                                        <img src="images/bl3.jpg" alt=" " class="img-fluid">
                                    </a>
                                </div>
                                <div class="col-8 footer-v2grid1-right p-0">
                                    <a href="blog.html">morbi dapiti eveniet ut molesti</a>
                                </div>
                            </div>
                        </div>
                        <!-- //latest posts -->
                        <!-- locations -->
                        <div class="col-lg-2 col-sm-6 footer-v2grid my-lg-0 my-5">
                            <h4>office locations</h4>
                            <ul>
                                <li>
                                    <a href="#">new jersey</a>
                                </li>
                                <li>
                                    <a href="#">texas</a>
                                </li>
                                <li>
                                    <a href="#">michigan</a>
                                </li>
                                <li>
                                    <a href="#">cannada</a>
                                </li>
                                <li>
                                    <a href="#">brazil</a>
                                </li>
                                <li>
                                    <a href="#">california</a>
                                </li>
                            </ul>
                        </div>
                        <!-- //locations -->
                        <!-- flickr posts -->
                        <div class="col-lg-3 col-sm-6 footer-v2grid my-lg-0 my-sm-5">
                            <h4 class="b-log">
                                flickr posts
                            </h4>
                            <div class="footer-v2grid-instagram">
                                <a href="#">
                                    <img src="images/bl4.jpg" alt=" " class="img-fluid">
                                </a>
                            </div>
                            <div class="footer-v2grid-instagram">
                                <a href="#">
                                    <img src="images/bl1.jpg" alt=" " class="img-fluid">
                                </a>
                            </div>
                            <div class="footer-v2grid-instagram">
                                <a href="#">
                                    <img src="images/bl6.jpg" alt=" " class="img-fluid">
                                </a>
                            </div>
                            <div class="footer-v2grid-instagram">
                                <a href="#">
                                    <img src="images/bl5.jpg" alt=" " class="img-fluid">
                                </a>
                            </div>

                            <div class="footer-v2grid-instagram">
                                <a href="#">
                                    <img src="images/bl2.jpg" alt=" " class="img-fluid">
                                </a>
                            </div>
                            <div class="footer-v2grid-instagram">
                                <a href="#">
                                    <img src="images/bl3.jpg" alt=" " class="img-fluid">
                                </a>
                            </div>
                            <div class="footer-v2grid-instagram">
                                <a href="#">
                                    <img src="images/bl6.jpg" alt=" " class="img-fluid">
                                </a>
                            </div>
                            <div class="footer-v2grid-instagram">
                                <a href="#">
                                    <img src="images/bl4.jpg" alt=" " class="img-fluid">
                                </a>
                            </div>
                            <div class="footer-v2grid-instagram">
                                <a href="#">
                                    <img src="images/bl5.jpg" alt=" " class="img-fluid">
                                </a>
                            </div>
                        </div>
                        <!-- //flickr posts -->
                        <!-- popular tags -->
                        <div class="col-lg-2  footer-v2grid mt-sm-0 mt-5">
                            <h4>popular tags</h4>
                            <ul class="w3-tag2">
                                <li>
                                    <a href="shop.html">amet</a>
                                </li>
                                <li>
                                    <a href="men.html">placerat</a>
                                </li>
                                <li>
                                    <a href="shop.html">Proin </a>
                                </li>
                                <li>
                                    <a href="boys.html">vehicula</a>
                                </li>
                                <li>
                                    <a href="shop.html">diam</a>
                                </li>
                                <li>
                                    <a href="women.html">velit</a>
                                </li>
                                <li>
                                    <a href="shop.html">felis</a>
                                </li>
                                <li>
                                    <a href="shop.html">mauris</a>
                                </li>
                                <li>
                                    <a href="girls.html">amet</a>
                                </li>
                                <li>
                                    <a href="shop.html">placerat</a>
                                </li>
                                <li>
                                    <a href="shop.html">Proin </a>
                                </li>
                                <li>
                                    <a href="index.html">vehicula</a>
                                </li>
                                <li>
                                    <a href="shop.html">diam</a>
                                </li>
                                <li>
                                    <a href="men.html">velit</a>
                                </li>
                                <li>
                                    <a href="shop.html">felis</a>
                                </li>
                                <li>
                                    <a href="women.html">mauris</a>
                                </li>
                            </ul>
                        </div>
                        <!-- //popular tags -->
                    </div>
                </div>
                <!-- //footer-top -->
                <div class="footer-bottomv2 py-5">
                    <div class="container">
                        <ul class="bottom-links-agile">
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li>
                                <a href="about.html">About Us</a>
                            </li>
                            <li>
                                <a href="shop.html">Shop</a>
                            </li>
                            <li>
                                <a href="contact.html">Contact</a>
                            </li>

                        </ul>
                        <h3 class="text-center follow">Follow Us</h3>
                        <ul class="social-iconsv2 agileinfo">
                            <li>
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-google-plus-g"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container-fluid py-5 footer-copy_w3ls">
                <div class="d-lg-flex justify-content-between">
                    <div class="mt-2 sub-some align-self-lg-center">
                        <h5>Payment Method</h5>
                        <ul class="mt-4">
                            <li class="list-inline-item">
                                <img src="images/pay2.png" alt="">
                            </li>
                            <li class="list-inline-item">
                                <img src="images/pay5.png" alt="">
                            </li>
                            <li class="list-inline-item">
                                <img src="images/pay3.png" alt="">
                            </li>
                            <li class="list-inline-item">
                                <img src="images/pay7.png" alt="">
                            </li>
                            <li class="list-inline-item">
                                <img src="images/pay8.png" alt="">
                            </li>
                            <li class="list-inline-item ">
                                <img src="images/pay9.png" alt="">
                            </li>
                        </ul>
                    </div>
                    <div class="cpy-right align-self-center">
                        <h2 class="agile_btxt">
                            <a href="index.html">
                                <span>G</span>otcha
                                <span>B</span>ags</a>
                        </h2>
                        <p>© 2018 Fashion Hub. All rights reserved | Design by
                            <a href="http://w3layouts.com" class="text-secondary"> W3layouts.</a>
                        </p>
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
	<!-- price range (top products) -->
	<script src="js/jquery-ui.js"></script>
	<script>
		//<![CDATA[ 
		$(window).load(function () {
			$("#slider-range").slider({
				range: true,
				min: 0,
				max: 9000,
				values: [50, 6000],
				slide: function (event, ui) {
					$("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
				}
			});
			$("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

		}); //]]>
	</script>
	<!-- //price range (top products) -->
	<script src="js/bootstrap.js"></script>
	<!-- start-smoth-scrolling -->
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
	<!-- start-smoth-scrolling -->
	<!-- here stars scrolling icon -->
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
	<!-- //here ends scrolling icon -->
	<!-- smoothscroll -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- //smoothscroll -->

</body>

</html>