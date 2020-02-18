<?
include("Connection_inc4.php"); $link = connectToDB();//ติดต่อฐานข้อมูล

$id_dealer	   = $_GET['id'];

$save=" delete from dealer where id_dealer='$id_dealer'";
mysql_query("set  names  UTF8");
mysql_query($save);

echo "<script language='javascript'> 
alert('ลบแล้ว'); 
window.location='in_dealer.php';
 </script>";

?>




