<p>&nbsp;</p>
<?
include("Connection_inc4.php"); $link = connectToDB();//ติดต่อฐานข้อมูล


$id_dealer	 = $_POST['id_dealer'];
$name_dealer = $_POST['name_dealer'];
$address = $_POST['address'];



$save=" 
UPDATE dealer SET
name_dealer='$name_dealer',
address='$address'
where
id_dealer='$id_dealer'

";
mysql_query("set  names  utf8");
mysql_query($save);



echo "<script language='javascript'> 
alert('แก้ไขเรียบร้อย'); 
window.location='in_dealer.php';
 </script>";

?>







