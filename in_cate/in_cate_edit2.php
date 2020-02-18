<p>&nbsp;</p>
<?
include("Connection_inc1.php"); $link = connectToDB();//ติดต่อฐานข้อมูล


$id_cat = $_POST['id_cat'];
$name_cat = $_POST['name_cat'];


$save=" 
UPDATE category SET
name_cat='$name_cat'

where
id_cat='$id_cat'

";
mysql_query("set  names  utf8");
mysql_query($save);



echo "<script language='javascript'> 
alert('แก้ไขเรียบร้อย'); 
window.location='in_cate.php';
 </script>";

?>







