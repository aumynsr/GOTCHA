<?
    include("connect.php");    
    $dbcon->query("update orders set status='".$_POST["status"]."' where id_order=".$_POST["id_order"]);
    if($_POST["status"]=="cancel"){
        $dbcon->query("update orders set remark='".$_POST["remark"]."' where id_order=".$_POST["id_order"]);
    }
    echo $_POST["status"];
?>