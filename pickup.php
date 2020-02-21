<?
include("connect.php");
session_start();


?>



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

<?php 
include("admin_header.php");

?>
      <!-- //header -->

      <form id="form1" name="form1" method="post" action="warehouse_updateorder.php">
        <h1>ใบรับสินค้าเข้าคลัง </h1>
        <table width="89%" border="0">
          <tr>
            
          <td width="24%">ชื่อผู้จัดจำหน่าย
            <label for="textfield2"></label>
          </td>


          <tr>
            <td>รหัสใบสั่งซื้อ </td>
          
          </tr>
          <tr>
            <td>วันที่รับสินค้าเข้า
            </td>
            <td><label for="update"></label>
            


          <tr>
            <td colspan="2" align="center">
              <table width="100%" border="1" cellspacing="0" cellpadding="0">
                <tr bgcolor="#CCCCCC" align="center">
                  <td>
                    <h4>รหัสสินค้า</h4>
                  </td>
                  <td>
                    <h4>รายการสินค้า</h4>
                  </td>
                  <td>
                    <h4>จำนวนที่รับสินค้า </h4>
                  </td>
                  <td>ราคา</td>



                </tr>
              </table>
            </td>
          </tr>
          <tr>
            <td colspan="2" align="center"><label for="select2"></label><input type="reset" name="Reset" id="button" value="Reset" />
              <input type="submit" name="button2" id="button2" value="Submit" /></td>
          </tr>
        </table>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
      </form>
    </body>