<?php
session_start();
require 'connect.php';
$cus_id=$_SESSION['customer']['CustomerID'];
$AmountOrder=mysql_num_rows(mysql_query("select * from fc_orders where CustomerID='$cus_id' and  SaleOrderStatus='รอการชำระเงิน'   "));
$meSql = "SELECT * FROM fc_orders where CustomerID='$cus_id' order by OrderID desc ";
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
<html lang="en">
    <head>
	
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	
        <link rel="stylesheet" media="all" type="text/css" href="calendar/jquery-ui.css" />
		<link rel="stylesheet" media="all" type="text/css" href="calendar/jquery-ui-timepicker-addon.css" />
		<script type="text/javascript" src="calendar/jquery-1.10.2.min.js"></script>
		<script type="text/javascript" src="calendar/jquery-ui.min.js"></script>
		<script type="text/javascript" src="calendar/jquery-ui-timepicker-addon.js"></script>
		<script type="text/javascript" src="calendar/jquery-ui-sliderAccess.js"></script>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>shopping pay</title>

        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="bootstrap/css/nava.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
		<script language="JavaScript" type="text/JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>


    </head>
    <body>
        <div class="container">

            <!-- Static navbar -->
            <div class="navbar navbar-default" role="navigation">
                <div class="container-fluid">
                    
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <? if($_SESSION['customer']['CustomerID']!=""){echo $_SESSION['customer']['CustomerID']." กำลังออนไลน์"." [ <a href='logout.php'>ออกจากระบบ</a> ]";} else {?>
                    <form name="form1" method="post" action="login2.php">
                      Username
                      <label for="Username"></label>
                      <input type="text" name="Username" id="Username">
                      Password
  <input type="text" name="Password" id="Password">
  <input type="submit" name="button2" id="button2" value="Login">
                      [<a href="regis.php">สมัครสมาชิกใหม่</a>]
                    </form><? }?>
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="index.php">หน้าแรกสินค้า</a></li>
                            <li><a href="cart.php">ตะกร้าสินค้าของฉัน <span class="badge"><?php echo $meQty; ?></span></a></li>
                        	<li class="active"><a href="pay.php">จำนวนออเดอร์ที่รอการชำระเงิน <?=$AmountOrder?> ใบ</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div><!--/.container-fluid -->
            </div>

            <!-- Main component for a primary marketing message or call to action -->
            <form action="updatepay.php" method="post" enctype="multipart/form-data" name="form2">
              <p>
                <label for="filUpload3"></label>
              </p>
              <table width="100%" border="0">
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
              </table>
			<h4>  กรุณาเลือกออเดอร์ที่จะแจ้งชำระเงิน
			  <select class="form-control" style="width:300px" name="select2" id="select2" onChange="MM_jumpMenu('parent',this,0)" >
                  <option value="0">กรุณาเลือก OrderID</option>
                  <? 
		  
				  $queryOrder=mysql_query("select * from fc_orders where CustomerID='$cus_id'  and  SaleOrderStatus='รอการชำระเงิน' ");
					$numRowOrder=mysql_num_rows($queryOrder);
					for($n=0; $n<$numRowOrder; $n++){
						$data=mysql_fetch_array($queryOrder);
						$oID=$data['OrderID']; 
						$oDate=$data['OrderDate'];
						$q=mysql_fetch_assoc(mysql_query("SELECT sum(UnitPrice*Quantity-(UnitPrice*Quantity*Discount)) as total 
FROM fc_orderdetails  WHERE OrderID=$oID"));	
						$sum=$q['total'];
						echo "<option value='pay.php?OrderID=$oID&sum=$sum'>$oID:$oDate</option>";
						}
					?>
                </select></h4>
<div class="row" > 
  <div class="col-sm-6"> <div class="panel panel-warning"><div class="panel-body">
  <button type="button" class="btn btn-warning btn-lg" >อัปโหลดหลักฐานการชำระเงิน</button>
<br>
              <p>OrderID 
                <label for="select"></label> 
				<input style="background-color:LightGray" readonly type='text' id='select' name="select" value="<?=$_GET['OrderID']?>" >
              </p>
              <div id="startDate">
                <script type="text/javascript">

$(function(){
	$("#DateInput").datepicker({
		dateFormat: 'yy-mm-dd',
		numberOfMonths: 2,
	});
});

                          </script>
                DatePay
                <input type="text"  required name="DateInput"  id="DateInput" value="" />
				</div>
                เวลา
                <label for="select2"></label>
                <select name="select2" id="select2">
                  <? for($t=0; $t<=23; $t++)
				{echo "<option value='$t'>$t</option>";}?>
                </select>
                :
                <select name="select3" id="select3">
                  <? for($t=0; $t<=59; $t++){echo "<option value='$t'>$t</option>";}?>
                </select>
                :
                <label for="select4"></label>
                <select name="select4" id="select4">
                  <? 
			   for($i=0;   $i<=59;  $i++)
			   { echo  "<option value='$i'>$i</option>"; }  
			  ?>
                </select>
                <label for="select5"></label>
              
              <p>ToBank
                <label>
                  <input type="radio" name="ToBank" value="SCB" id="ToBank_0">
                  SCB 9999-999-9</label>
                <label>
                  <input type="radio" name="ToBank" value="TMB" id="ToBank_1">
                  TMB 111-1-111</label>
                <label>
                  <input type="radio" name="ToBank" value="KTC" id="ToBank_2">
                  KTC 444-444-4-4</label>
              </p>
              <p>TotalPrice <span id="sprytextfield1">
                <label for="TotalPrice"></label>
                <input required type="number"  value="<?=$_GET['sum']?>"  name="TotalPrice" id="TotalPrice">
                <label for="textfield3"></label>
                <input name="t" style="border:#FFF; color:#F00" type="text"   readonly id="t"   >
              </span></p>
              <p><span id="sprytextfield1">FromBank
                <input name="FromBank" type="text" required id="FromBank" maxlength="10" onKeyUp="if(this.value*1==this.value){FromBank2.value=(TotalPrice.value-(FromBank.value*-1));}">
                <br>
              </span></p>
              <p><span id="sprytextfield1">File
                <input required type="file" name="File" id="filUpload3">
              </span></p>
              <p>&nbsp; </p>
              <p> <span id="sprytextfield1">
                <input type="submit" name="button3" id="button3" value="upload">
              </span></p>
            </form>
</div></div></div>
<div class="col-sm-4" >	  	<div class="panel-body"  >
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">จ่ายเงินผ่านบัตรเครดิต</button>
	<br>OrderID:<?=$_GET['OrderID']?> ฿ total :<?=$_GET['sum']?> 

  <br><img src="images/credit.jpg" width="250">
  </div></div></div>
</div>
  <div class="container">
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">กรุณากรอกข้อมูลบัตรเครดิตของคุณ
        <img src="images/credit.jpg" width="40"></h4>
		</div>
        <div class="modal-body">
  <p>
  <form action="pay_credit.php" method="post">
  <p>OrderID <input required style="background-color:gray" readonly  value="<?=$_GET['OrderID']?>" type="text" name="OrderID_">
		ยอดเงินที่ต้องชำระ <input required style="background-color:gray" readonly value="<?=$_GET['sum']?>"  type="text" name="total" ></p>
  <p>หมายเลขบัตร <input required type="text" name="input1"> 
  ชื่อบนบัตร <input required type="text" name="input2"> </p>
  <p>วันหมดอายุ (เดือน) <input required type="number" name="input3"> 
  วันหมดอายุ (ปี) <input required type="number" name="input4"> </p>
  <p>รหัสหลังบัตร (ccv/cvc) <input required type="password" name="input5"> </p>
  <p> <input class="btn btn-success" type="submit" name="input6" value="จ่ายเงิน"> </p>
  </form>	  
  </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
            <h3>&nbsp;</h3>
            <h3>ใบสั่งซื้อสินค้าที่รอการชำระเงินของคุณ</h3>
<?php
if($action == 'exists'){
    echo "<div class=\"alert alert-warning\">เพิ่มจำนวนสินค้าแล้ว</div>";
}
if($action == 'add'){
    echo "<div class=\"alert alert-success\">เพิ่มสินค้าลงในตะกร้าเรียบร้อยแล้ว</div>";
}
if($action == 'order'){
	echo "<div class=\"alert alert-success\">สั่งซื้อสินค้าเรียบร้อยแล้ว</div>";
}
if($action == 'orderfail'){
	echo "<div class=\"alert alert-warning\">สั่งซื้อสินค้าไม่สำเร็จ มีข้อผิดพลาดเกิดขึ้นกรุณาลองใหม่อีกครั้ง</div>";
}
?>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th width="14%" bgcolor="#CCCCCC">รหัสใบออเดอร์</th>
                        <th width="19%" bgcolor="#CCCCCC">วันที่สั่งซื้อ</th>
                        <th width="24%" bgcolor="#CCCCCC">รายละเอียด</th>
                        <th width="16%" bgcolor="#CCCCCC">ราคารวม</th>
                        <th width="27%" bgcolor="#CCCCCC">อัปโหลดหลักฐานการชำระเงิน</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
					
                    while ($meResult = mysql_fetch_assoc($meQuery))
                    {
                        ?>
                        <tr>
                            <td><?php  $id=$meResult['OrderID'];
										echo $id; 
										echo "<br>".$meResult['SaleOrderStatus'];
									if($meResult['SaleOrderStatus']=="completed"){	
										echo "<br><img width='50' src='images/completed.png'>";
									}elseif($meResult['SaleOrderStatus']=="แจ้งชำระเงิน")
									{
										echo "<br><img width='50' src='images/check.png'>";
									}elseif($meResult['SaleOrderStatus']=="logis")
									{
										echo "<br><img width='50' src='images/logis.png'>";
									}
								?></td>
                            <td><?php echo $meResult['OrderDate']; ?></td>
                            <td><?php 
							$q=mysql_query("SELECT *,od.UnitPrice as Price 
							FROM fc_orderdetails as od, fc_products as p 
							where od.ProductID=p.ProductID and od.OrderID='$id'");
							$num=mysql_num_rows($q); 
							$total=0;
							for($i=0;$i<$num;$i++){
								$d=mysql_fetch_array($q); 
								echo $d['ProductName']."<br> จำนวน ".
								$d['Quantity']." ราคาต่อหน่วย ".$d['Price'].
								"<br> รวมราคา ".($d['Price']*$d['Quantity'])."<hr>";
								
								$total=$total+ ($d['Price']*$d['Quantity']);
								}
							 ?></td>
                            <td><?php    echo $total; ?></td>
                            <td> <? $picfile='payment/'.$id.'.jpg'; if(file_exists($picfile)){?><img width='120' height='150' src="payment/<?=$id?>.jpg"><? } else ?> </td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
            <hr>
            <h3>&nbsp;</h3>
          <p>&nbsp;</p>


        </div> <!-- /container -->

    </body>
</html>
<?php
mysql_close();
?>