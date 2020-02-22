<?
include("connect.php");

$id_pro	   = $_POST['id_pro'];
$id_cus	   = $_POST['id_cus'];

$sql="delete from cart where id_pro=$id_pro and id_cus=$id_cus";
$result = $dbcon->query($sql);
if(isset($result)){
    echo 'remove success';
}else{
    echo 'cannot remove';
}
?>




