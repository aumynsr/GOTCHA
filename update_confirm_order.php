<?
    include("connect.php");    
    $dbcon->query("update orders set status='".$_POST["status"]."' where id_order=".$_POST["id_order"]);
    if($_POST["status"]=="cancel"){
        $dbcon->query("update orders set remark='".$_POST["remark"]."' where id_order=".$_POST["id_order"]);
    }

    if($_POST["status"] == "cancel"){
        $result = $dbcon->query("select * from order_list where order_id=".$_POST["id_order"]);
        while($order_list = mysqli_fetch_array($result)){
            

            //select total มาจาก product
            $r_total = $dbcon->query("select total from product where id_pro=".$order_list["id_pro"]);
            $total = $r_total->fetch_assoc()["total"];

            // ลบสินค้าออกจากสต๊อก
            $add = $total + $order_list['order_total'];;

            //อัพเดทสต๊อกใหม่ในตราง product
            $dbcon->query("update product set total=".$add." where id_pro=".$order_list["id_pro"]);
        }
    }
    echo $_POST["status"];
