<?
include("Connection_inc1.php"); $link = connectToDB();//ติดต่อฐานข้อมูล

$id_cat	   = $_GET['id'];

$save=" delete from category where id_cat='$id_cat'";
mysql_query("set  names  UTF8");
mysql_query($save);

echo "<script language='javascript'> 
alert('ลบแล้ว'); 
window.location='in_cate.php';
 </script>";

?>