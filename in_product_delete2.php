<?
include("Connection_inc.php"); $link = connectToDB();//ติดต่อฐานข้อมูล

$id_pro	   = $_GET['id'];

$save=" delete from product where id_pro='$id_pro'";
mysql_query("set  names  UTF8");
mysql_query($save);

echo "<script language='javascript'> 
alert('ลบแล้ว'); 
window.location='in_product.php';
 </script>";

?>




