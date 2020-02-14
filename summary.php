<?
$hostdb = 'localhost';   // MySQl host
$userdb = 'root';    // MySQL username
$passdb = '12345678';    // MySQL password
$namedb = 'gotcha';
$db = new mysqli($hostdb, $userdb, $passdb, $namedb);

$id_pro = $_GET['id_pro'];
$id_cus = 1;
$bank="kasikornbank"; 
$slip="abc.jpg";
$address="lp";
$status="paid";
$total=2555;
$default_total = 1;



$orders=$db->query("insert into orders (id_cus,address,status,id_payment,total) values ('".$id_cus."','".$address."','".$status."','".$id_payment."','".$total."')");
$order_id=$db->insert_id;
$payment=$db->query("insert into payment (bank,slip,order_id) values ('".$bank."','".$slip."','".$order_id."')");
$id_payment=$db->insert_id;
$orders=$db->query("update orders set id_payment=".$id_payment." where id_order=".$order_id) ;
$cart=$db->query("select * from cart where id_cus=".$id_cus);
while ($_cart = mysqli_fetch_array($cart)){
    $db->query("insert into order_list (id_pro,order_id,order_total) values (".$_cart["id_pro"].",".$order_id.",".$_cart["cart_total"].")") ;
    $db->query("delete from cart where id_cus=".$id_cus);
}
?>

ยืนยันคำสั่งซื้อ