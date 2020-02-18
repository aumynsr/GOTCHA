<?
session_start();
$hostdb = 'localhost';   // MySQl host
$userdb = 'root';    // MySQL username
$passdb = '12345678';    // MySQL password
$namedb = 'gotcha';
$db = new mysqli($hostdb, $userdb, $passdb, $namedb);
// print_r(
//     $_POST["name_delivery"].
//     $_POST["phone"].
//     $_POST["address"].
//     $_POST["zip"].
//     $_POST["bank"].
//     $_POST["total"]);
$id_cus=0;
if(isset($_SESSION["id_cus"])){
  $id_cus = $_SESSION["id_cus"];  
}

$bank=$_POST["bank"]; 
$address=$_POST["address"];
$status="paid";
$total=$_POST["total"];
$default_total = 1;
$slip = $_FILES["slip"]["name"];
if(move_uploaded_file($_FILES["slip"]["tmp_name"],"images/slip/".$_FILES["slip"]["name"]))
{
	//echo "Copy/Upload Complete";
}

$orders=$db->query("insert into orders (id_cus,address,status,id_payment,total) values ('".$id_cus."','".$address."','".$status."','".$id_payment."','".$total."')");
$order_id=$db->insert_id;
$payment=$db->query("insert into payment (bank,slip,order_id) values ('".$bank."','".$slip."','".$order_id."')");
$id_payment=$db->insert_id;
$delivery=$db->query("insert into delivery (name_delivery, phone, address, zip, status) values ('".$_POST["name_delivery"]."','".$_POST["phone"]."','".$_POST["address"]."','".$_POST["zip"]."','packing')");
$id_delivery=$db->insert_id;
$orders=$db->query("update orders set id_payment=".$id_payment.", address=".$id_delivery." where id_order=".$order_id) ;
$cart=$db->query("select * from cart where id_cus=".$id_cus);
while ($_cart = mysqli_fetch_array($cart)){
    $db->query("insert into order_list (id_pro,order_id,order_total) values (".$_cart["id_pro"].",".$order_id.",".$_cart["cart_total"].")") ;
    $db->query("delete from cart where id_cus=".$id_cus);
}
?>

ยืนยันคำสั่งซื้อ