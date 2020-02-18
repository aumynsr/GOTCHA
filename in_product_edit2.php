<p>&nbsp;</p>
<?
include("Connection_inc.php"); $link = connectToDB();//ติดต่อฐานข้อมูล


$id_pro	 = $_POST['id_pro'];
$name_pro = $_POST['name_pro'];
$price = $_POST['price'];
$id_cat = $_POST['id_cat'];
$name_cat = $_POST['name_cat'];
$color_pro = $_POST['color_pro'];
$total = $_POST['total'];
$pic 		= $_POST['pic'];
$detail 	= $_POST['detail'];
$size		= $_POST['size'];
$material 	= $_POST['material'];



$save=" 
UPDATE product SET
name_pro='$name_pro',
price='$price',
id_cat='$id_cat',
name_cat='$name_cat',
color_pro='$color_pro',
total='$total',
pic='$pic',
detail='$detail',
size='$size',
material='$material'
where
id_pro='$id_pro'

";
mysql_query("set  names  utf8");
mysql_query($save);



echo "<script language='javascript'> 
alert('แก้ไขเรียบร้อย'); 
window.location='in_product.php';
 </script>";

?>







