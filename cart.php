<?
session_start();
include('connect.php')

$id_pro = $_GET['id_pro'];
$id_cus = $_SESSION["id_cus"];
$default_total = 1;
print_r("userid ".$id_cus);
$cart = $dbcon->query("SELECT cart.cart_total FROM cart WHERE id_cus=" . $id_cus . " and id_pro=" . $id_pro);
$total_cart = $cart->fetch_assoc();
$sum = intval($total_cart["cart_total"] + $default_total);

$product = $dbcon->query("SELECT product.total from cart where id_pro=$id_pro");
$total_p = mysqli_fetch_assoc($product)['total'];
if(!($sum <= $total_p)){
    echo "fail";
    exit(0);
}

$result = $dbcon->query("INSERT INTO cart (id_cus, id_pro, cart_total) values(" . $id_cus . "," . $id_pro . "," . $sum . ")");
if ($result) {
    print_r("success");
} else {
    $alter = $dbcon->query("update cart set cart_total=".$sum." WHERE id_cus=" . $id_cus . " and id_pro=" . $id_pro);
}
?>