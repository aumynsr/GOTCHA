<?
include("Connection_inc3.php"); $link =connectToDB();//ติดต่อฐานข้อมูล
				$$id_admin	 	= $_POST['id_admin'];
				$name_admin	 = $_POST['name_admin'];
				$username_admin	 = $_POST['username_admin'];
				$password_admin	 = $_POST['password_admin'];

$save=" INSERT  INTO   admin ()
values ('$id_admin', '$name_admin','$username_admin','$password_admin')";
mysql_query("set  names  UTF8");
mysql_query($save);

echo $save;

/*
echo "<script language='javascript'> 

alert('บันทึกเรียบร้อย'); 
window.location='in_add.php';
 </script>";
*/

?>