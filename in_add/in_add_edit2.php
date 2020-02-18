<p>&nbsp;</p>
<?
include("Connection_inc3.php"); $link = connectToDB();//ติดต่อฐานข้อมูล


$id_admin = $_POST['id_admin'];
$name_admin = $_POST['name_admin'];
$username_admint = $_POST['username_admin'];
$password_admin = $_POST['password_admin'];


$save=" 
UPDATE admin SET
name_admin='$name_admin'

where
id_admin='$id_admin'

";
mysql_query("set  names  utf8");
mysql_query($save);



echo "<script language='javascript'> 
alert('แก้ไขเรียบร้อย'); 
window.location='in_add.php';
 </script>";

?>







