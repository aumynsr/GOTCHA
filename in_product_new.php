<?
include("Connection_inc.php"); $link =connectToDB();//ติดต่อฐานข้อมูล
				$$id_pro	 = $_POST['$id_pro'];
				$name_pro	= $_POST['name_pro'];
				$price 		= $_POST['price'];
				$id_cat	 	= $_POST['id_cat'];
				$name_cat	 = $_POST['name_cat'];
				$color_pro	 = $_POST['color_pro'];
				$total 		= $_POST['total'];

$save=" INSERT  INTO   product ()
values ('$id_pro', '$name_pro', '$price','$id_cat', '$name_cat','$color_pro','$total')";
mysql_query("set  names  UTF8");
mysql_query($save);

echo $save;

/*
echo "<script language='javascript'> 

alert('บันทึกเรียบร้อย'); 
window.location='in_product.php';
 </script>";
*/



?>







