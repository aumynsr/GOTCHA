<?
include("Connection_inc3.php"); $link = connectToDB();//ติดต่อฐานข้อมูล

$id_admin   = $_GET['id'];

$save=" delete from admin where id_admin='$id_admin'";
mysql_query("set  names  UTF8");
mysql_query($save);

echo "<script language='javascript'> 
alert('ลบแล้ว'); 
window.location='in_add.php';
 </script>";

?>




