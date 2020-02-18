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

            <!------------------------------------------------------------->

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
            <li class="nav-item dropdown has-mega-menu" style="center;">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><font size="3"><B>ข้อมูลทั่วไป</font></B></a>
            <div class="dropdown-menu" style="center">
              <div class="px-0 container">
                <div class="row">
                  <div class="col-md-10">
                    <a class="dropdown-item" href="in_product.php"><font size="3">ข้อมูลสินค้า</font></a>
                    <a class="dropdown-item" href="in_cate/in_cate.php"><font size="3">ข้อมูลประเภทสินค้า</font></a>
                    <a class="dropdown-item" href="in_cus/in_cus.php"><font size="3">ข้อมูลลูกค้า</font></a>
                    <a class="dropdown-item" href="in_add/in_add.php"><font size="3">ข้อมูลผู้ดูแลระบบ</font></a>
                    <a class="dropdown-item" href="in_dis/in_dis.php"><font size="3">ข้อมูลผู้จัดจำหน่าย</font></a>
                  </div>


                </div>
              </div>
            </div>
          </li>      
              
              <li class="nav-item">
                <a class="nav-link" href="place.php">
                  <font size="3">สั่งซื้อสินค้าเข้าร้าน</font>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pickup.php">
                  <font size="3">รับสินค้าเข้าคลัง</font>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="checkpay.php">
                  <font size="3">ตรวจสอบการชำระเงิน</font>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="checklogis.php">
                  <font size="3">ยืนยันการจัดส่ง</font>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">
                  <font size="3">ออกรายงาน</font>
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


      <button button type="button" class="btn btn-danger" class="nav-link text-uppercase text-expanded" data-toggle="collapse" data-target="#demo">เพิ่มข้อมูลใหม่</button>
      <div id="demo" class="collapse">
        <p>
          <?php

          ///////////หาค่า max ของ id
          //include("Connection_inct3.php"); $link = connectToDB();//ติดต่อฐานข้อมูล
          $sql_select   = "SELECT max(id_admin) as newID FROM admin"; //คำสั่งคิวรี่
          $query_select = mysql_query($sql_select); //สั่งให้คิวรี่ทำงาน
          $data     = mysql_fetch_array($query_select); //สร้างตัวแปร สำหรับเก็บคำสั่งดึงค่าทีละฟิวล์
          $newID    = $data['newID'];
          $newID += 1;


          ?><form id="form1" name="form1" method="post" action="in_add_new.php" enctype="multipart/from-data">
            <table width="50%" border="1" align="center" cellpadding="0" cellspacing="0">
              <tbody>
                <tr>
                <th width="90" bgcolor="#FFE4C4">
              <p>
                  <font color="#483D8B">id_admin</font>
                </p>
              รหัสแอดมิน</p>
            </th>
                  <th width="50" bgcolor="#FFE4C4">
                    <p>
                      <font color="#483D8B">name_admin</font>
                    </p>
                   ชื่อแอดมิน
                  </th>
                  <th width="50" bgcolor="#FFE4C4">
                    <p>
                      <font color="#483D8B">username_admin</font>
                    </p>
                    ชื่อผู้ใช้
                  </th>
                  <th width="50" bgcolor="#FFE4C4">
                    <p>
                      <font color="#483D8B">password_admin</font>
                    </p>
                    รหัสผ่าน
                  </th>                
        </tr>





        <tr>
          <th align="left">&nbsp;
            <label for="id_admin"></label>
            <input name="id_admin" type="text" readonly="readonly" style="background:#999" id="id_admin" value="<?= $newID ?>" size="5" /></th>
          <th align="left"><input type="text" name="name_admin" /></th>
          <th align="left"><input type="text" name="username_admin" /></th>
          <th align="left"><input type="text" name="password_admin" /></th>         
        </tr>


        <th colspan="11" align="center"><button class="w3-button w3-teal" class="nav-link text-uppercase text-expanded" type="submit" name="button" id="button">บันทึก</button></p>
        </th>
        </tr>
        </tbody>
        </table>
        </form>
        </p>
      </div>



      <p>&nbsp;</p>
      <p> <input class="form-control" id="myInput" type="text" placeholder="Search.."></p>
      <table width="50%" border="1" align="center" cellpadding="0" cellspacing="0">
        <tbody>
          <tr>
            <th width="66" bgcolor="#FFCC99">
              <h5>
                <font color="Indigo">แก้ไข</font>
              </h5>
            </th>
            <th width="43" bgcolor="#FFCC99">
              <h5>
                <font color="Indigo">ลบ</font>
              </h5>
            </th>
            <th width="90" bgcolor="#FFE4C4">
              <p>
                  <font color="#483D8B">id_admin</font>
                </p>
              รหัสแอดมิน</p>
            </th>
            <th width="66" bgcolor="#FFE4C4">
              <p>
                <font color="#483D8B">name_admin</font>
              </p>
              ชื่อแอดมิน
            </th>
            <th width="50" bgcolor="#FFE4C4">
              <p>
                <font color="#483D8B">username_admin</font>
              </p>
              ชื่อผู้ใช้
            </th>
            <th width="70" bgcolor="#FFE4C4">
              <p>
                <font color="#483D8B">password_admin</font>
              </p>
              รหัสผ่าน</p>
            </th>
        





            <?php
            $sortby = $_GET['sortby'];
            if ($sortby == "") {
              $sortby = "id_admin";
            }
            $sql_select = " SELECT * FROM admin order by $sortby "; //คำสั่งคิวรี่
            mysql_query("set names utf8"); //อ่านภาษาไทยจากฐานข้อมูล
            $query_select = mysql_query($sql_select); //สั่งให้คิวรี่ทำงาน
            $numrow = mysql_num_rows($query_select); //นับจ้ำนวนแถวที่มี ตามคำสั่งคิวรี่

            for ($i = 0; $i < $numrow; $i++) { //วนลูปเพื่อดึงค่าจากฐานข้อมูลทีละแถว
              $data = mysql_fetch_array($query_select); //สร้างตัวแปร สำหรับเก็บคำสั่งดึงค่าทีละฟิวล์
              $id_admin   = $data['id_admin'];
              $name_admin  = $data['name_admin'];
              $username_admin   = $data['username_admin'];
              $password_admin   = $data['password_admin'];
          


            ?>
              </h5>
              </th>
          </tr>
        </tbody>
        <tbody id="myTable">
          <tr>
            <th align="center"><a href="in_add_edit.php?id=<?= $id_admin ?>">แก้ไข</a></th>
            <th align="center"><a href="in_add_delete.php?id=<?= $id_admin ?>">ลบ</a></th>
            <th height="52" align="center">
              <p><?php echo $id_admin; ?></p>
            </th>
            <th align="center"><?php echo $name_admin; ?></th>
            <th align="center"><?php echo $username_admin; ?></th>
            <th align="center"><?php echo $password_admin; ?></th>
            
          

          </tr> <? } ?>
        </tbody>
      </table>
      </p>





      <script>
        $(document).ready(function() {
          $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
              $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
          });
        });
      </script>
      </p>

      <!-- //footer -->
      <!-- sign up Modal -->

      <!-- signin Modal -->
      <!-- js -->
      <script src="js/jquery-2.2.3.min.js"></script>
      <!-- //js -->
      <!-- script for show signin and signup modal -->
      <script>
        $(document).ready(function() {
          $("#portfolioModal1").modal();
        });
      </script>
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