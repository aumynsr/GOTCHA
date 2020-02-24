<?
include("connect.php");

$id_pro	   = $_POST['id_pro'];
$id_cus	   = $_POST['id_cus'];
$new_total = $_POST['cart_total'];

$product = $dbcon->query("SELECT product.total from cart where id_pro=$id_pro");
$total_p = mysqli_fetch_assoc($product)['total'];
if(!($new_total <= $total_p)){
    echo "fail";
    exit(0);
}

$sql="update cart set cart_total=$new_total WHERE id_pro=$id_pro and id_cus=$id_cus";
$result = $dbcon->query($sql);
if(isset($result)){
    echo 'edit success';
}else{
    echo 'cannot edit';
}
?>
