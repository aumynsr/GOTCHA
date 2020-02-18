<?
include("Connection_inc4.php"); $link =connectToDB();//ติดต่อฐานข้อมูล
				$$id_dealer	 = $_POST['id_dealer'];
				$name_dealer = $_POST['name_dealer'];
				$address 	= $_POST['address'];
				

$save=" INSERT  INTO   dealer ()
values ('$id_dealer', '$name_dealer', '$address')";
mysql_query("set  names  UTF8");
mysql_query($save);

echo $save;

/*
echo "<script language='javascript'> 

alert('บันทึกเรียบร้อย'); 
window.location='in_dealer.php';
 </script>";
*/

?>









