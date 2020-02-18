<?
include("Connection_inc1.php"); $link =connectToDB();//ติดต่อฐานข้อมูล
				$$id_cat	 	= $_POST['id_cat'];
				$name_cat	 = $_POST['name_cat'];

$save=" INSERT  INTO   category ()
values ('$id_cat', '$name_cat')";
mysql_query("set  names  UTF8");
mysql_query($save);

echo $save;

/*
echo "<script language='javascript'> 

alert('บันทึกเรียบร้อย'); 
window.location='in_cate.php';
 </script>";
*/

?>