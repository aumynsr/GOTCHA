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

?>

<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <title>GOTCHA</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">


  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">


</head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



<style>
  body {
    background-color: rgba(255, 99, 71, 0.2);
  }
</style>

<script type="text/javascript">
  function MM_preloadImages() { //v3.0
    var d = document;
    if (d.images) {
      if (!d.MM_p) d.MM_p = new Array();
      var i, j = d.MM_p.length,
        a = MM_preloadImages.arguments;
      for (i = 0; i < a.length; i++)
        if (a[i].indexOf("#") != 0) {
          d.MM_p[j] = new Image;
          d.MM_p[j++].src = a[i];
        }
    }
  }
</script>
<style type="text/css">
  #apDiv1 {
    position: absolute;
    left: 65px;
    top: 26px;
    width: 1585px;
    height: 340px;
    z-index: 1;
    background-color: #FFCC33;
    visibility: hidden;
  }

  #apDiv2 {
    position: absolute;
    left: 56px;
    top: 46px;
    width: 1540px;
    height: 441px;
    z-index: 1;
    background-color: #666666;
    visibility: hidden;
  }

  #apDiv3 {
    position: absolute;
    left: 62px;
    top: 53px;
    width: 1516px;
    height: 360px;
    z-index: 1;
    background-color: #000000;
    visibility: hidden;
  }

  #apDiv4 {
    position: absolute;
    left: 41px;
    top: 115px;
    width: 1534px;
    height: 293px;
    z-index: 1;
    background-color: #333333;
    visibility: hidden;
  }

  #apDiv5 {
    position: absolute;
    left: 80px;
    top: 25px;
    width: 1296px;
    height: 48px;
    z-index: 2;
    background-color: #D6D6D6;
  }
</style>
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
<a button type="button" class="btn btn-info" href="admin.html">Sign out</a>

<body>

  <body background="logo.jpt">

    <body background="https://cf.shopee.co.th/file/0ee9093d87a503e31aa42ad31165030c">
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

              <div class="nav-icon d-flex">
                <!-- sigin and sign up -->

                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal25">
                  <div class="portfolio-hover">
                  </div>

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
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
                       <!-- //shopping cart ends here -->
        </div>
        </div>
        </div>
        </nav>

<body>
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
                <a class="nav-link" href="in_product.php">
                  <font size="2">ข้อมูลสินค้า</font>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href=".php">
                  <font size="2">ข้อมูลประเภทสินค้า</font>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="place.php">
                  <font size="2">สั่งซื้อสินค้าเข้าร้าน</font>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pickup.php">
                  <font size="2">รับสินค้าเข้าคลัง</font>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="checkpay.php">
                  <font size="2">ตรวจสอบการชำระเงิน</font>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="checklogis.php">
                  <font size="2">ยืนยันการจัดส่ง</font>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href=".php">
                  <font size="2">ออกรายงาน</font>
                </a>
              </li>

            </ul>
          </div>
        </nav>
        <!-- //bottom nav -->
        </div>
        <!-- //header container -->
      </header>
      <!-- //header -->
        <div class="container">

            <!-- Static navbar --><!-- Main component for a primary marketing message or call to action -->
            <form action="checkpay2.php" method="post" enctype="multipart/form-data" name="form2">
              <p>
                <label for="filUpload3"></label>
              </p>
              <table width="100%" border="0">
                <tr>
                  <td width="45%"></td>
                  <td width="55%">ภาพหลักฐานการชำระเงิน</td>
                </tr>
                <tr>
                  <td><p>OrderID
                    <label for="select"></label>
    <select name="select" id="select"   
    onChange="if(this.value*1!=0){pic.src=this.value;}
    else{ pic.src='payment/picIcon.png';}"   >
        <option value="0">กรุณาเลือก OrderID</option>
    
    </select>
                    <label for="picName"></label>
                
                    </p>
                    <p>สถานะ
                      <label>
                        <input required type="radio" name="StatusValidate" value="1" id="ToBank_0">
                        ใบชำระเงินจริง</label>
                      <label>
                        <input type="radio" name="StatusValidate" value="0" id="ToBank_1">
                        ใบปลอม</label>
                    </p>
                    <div id="startDate">
                      <script type="text/javascript">

$(function(){
	$("#DateInput").datepicker({
		dateFormat: 'yy-mm-dd',
		numberOfMonths: 2,
	});
});

                          </script>วันที่ตรวจสอบการชำระเงิน
                          <input type="text"  required name="DateInput"  id="DateInput" value="" />
                    </div>
                    <p>&nbsp;</p>
                    <p>
                      <input type="submit" name="button3" id="button3" value="บันทึก">
                  </p></td>
                  <td><img src="payment/picIcon.png" name="pic" width="300" height="238" id="pic"></td>
                </tr>
                 <td width="45%"> หากไม่ชำระเงินภายใน 3 วันระบบจะทำการยกเลิกคำสั่งซื้อสินค้าของลูกค้าทันที</td>
              </table>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
            </form>
            <h3>&nbsp;</h3>
        </div>
    </body>