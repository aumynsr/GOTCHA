<?php
session_start();
/* $formid = isset($_SESSION['formid']) ? $_SESSION['formid'] : "";
if ($formid != $_POST['formid']) {
	echo "E00001!! SESSION ERROR RETRY AGAINT.";
} else {
	unset($_SESSION['formid']); */
	
$dateInput	=  $_POST['dateInput'];//รับค่าจากการ post

	if ($_POST) {
		require 'connect.php'; 
		$order_fullname = mysql_real_escape_string($_POST['order_fullname']);
		$order_address = mysql_real_escape_string($_POST['order_address']);
		$order_phone = mysql_real_escape_string($_POST['order_phone']);
		$CustomerID = mysql_real_escape_string($_POST['CustomerID']);
		$total =$_SESSION['order']['totalPrice'];
		$meSql2 = "INSERT INTO fc_orders 
		( CustomerID, OrderDate, EmployeeID, RequiredDate) VALUES 
		('$CustomerID',NOW(), '1', '$dateInput') ";
		$meQeury2 = mysql_query($meSql2);
		
			if ($meQeury2) {
			$OrderID = mysql_insert_id();//รับตัวเลข ID ล่าสุดจากการบันทึก query ด้านบน
			for ($i = 0; $i < count($_POST['qty']); $i++) {
				$Quantity = mysql_real_escape_string($_POST['qty'][$i]);
				$UnitPrice = mysql_real_escape_string($_POST['product_price'][$i]);
				$ProductID = mysql_real_escape_string($_POST['product_id'][$i]);
				$lineSql = "INSERT INTO fc_orderdetails (OrderID, ProductID, UnitPrice, Quantity) ";
				$lineSql .= "VALUES (";
				$lineSql .= "'{$OrderID}',";
				$lineSql .= "'{$ProductID}',";
				$lineSql .= "'{$UnitPrice}',";
				$lineSql .= "'{$Quantity}'";
				$lineSql .= ") ";
				mysql_query($lineSql);
			}
			
			}
			
		/*  ส่งเมลล์ให้ลูกค้า ชำระเงิน 	
		$header.= "Content-type: text/html; charset=windows-620\n";
$header.="from: shop.cpc-is22.com E-mail :m.paranan@gmail.com"; //ชื่อและอีเมลผู้ส่ง
			mail($_SESSION['customer']['Email'],"กรุณาโอนเงินเข้าบัญชี 999-999 เพื่อชำระเงินตามเลขที่ใบสั่งซื้อ $order_id","จำนวนเงินทั้งสิ้น ". $_SESSION['order']['totalPriceVat']."บาท",$header); */
			mysql_close();
			
			unset($_SESSION['cart']);
			unset($_SESSION['qty']);
			unset($_SESSION['meQty']);
			unset($_SESSION['order']['totalPrice']);
			unset($_SESSION['order']['totalPriceVat']);
	    $total=$_POST['total'];
		echo "<script language='javascript'>
		alert('บันทึกการสั่งซื้อของท่านแล้ว <br> กรุณาชำระเงินที่บัญชี scb 999-999-99 จำนวนเงินรวม  $total บาท'); window.location='index.php'; </script>";
		
		}else{
			mysql_close();
			//header('location:index.php?a=orderfail');
		}
	
//}
