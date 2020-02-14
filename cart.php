<?
$hostdb = 'localhost';   // MySQl host
$userdb = 'root';    // MySQL username
$passdb = '12345678';    // MySQL password
$namedb = 'gotcha';
$db = new mysqli($hostdb, $userdb, $passdb, $namedb);

$id_pro = $_GET['id_pro'];
$id_cus = $_GET['id_cus'];
$default_total = 1;

$cart = $db->query("SELECT cart.cart_total FROM cart WHERE id_cus=" . $id_cus . " and id_pro=" . $id_pro);
$total_cart = $cart->fetch_assoc();
$sum = intval($total_cart["cart_total"] + $default_total);

$result = $db->query("INSERT INTO cart (id_cus, id_pro, cart_total) values(" . $id_cus . "," . $id_pro . "," . $sum . ")");
if ($result) {
    print_r("success");
} else {
    $alter = $db->query("update cart set cart_total=".$sum." WHERE id_cus=" . $id_cus . " and id_pro=" . $id_pro);
}
?>
