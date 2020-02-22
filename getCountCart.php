<?
    include("connect.php");
    $_r = $dbcon->query("select sum(cart_total) as sum_cart from cart where id_cus=".$_GET['id_cus']);
   //print_r("select sum(cart_total) as sum_cart from cart where id_cus=".$_SESSION['id_cus']);
    echo mysqli_fetch_assoc($_r)["sum_cart"];
?>