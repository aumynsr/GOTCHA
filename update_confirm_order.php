<?
    include("connect.php");    

    if($_POST["status"] == "cancel"){
        $dbcon->query("update orders set remark='".$_POST["remark"]."', status='".$_POST["status"]."' where id_order=".$_POST["id_order"]);
       
        $result = $dbcon->query("select * from order_list where order_id=".$_POST["id_order"]);
        while($order_list = mysqli_fetch_array($result)){
            

            //select total มาจาก product
            $r_total = $dbcon->query("select total from product where id_pro=".$order_list["id_pro"]);
            $total = $r_total->fetch_assoc()["total"];

            // คืนสต็อก
            $add = $total + $order_list['order_total'];;

            //อัพเดทสต๊อกใหม่ในตราง product
            $dbcon->query("update product set total=".$add." where id_pro=".$order_list["id_pro"]);
        }
    }else if($_POST["status"] == "delivery"){
        $result = $dbcon->query("select * from orders where id_order=".$_POST["id_order"]);
        $address_id = mysqli_fetch_assoc($result)['address'];
        $dbcon->query("update orders set status='".$_POST["status"]."' where id_order=".$_POST["id_order"]);
        $dbcon->query("update delivery set ems='".$_POST["ems"]."' where id_delivery=".$address_id);
    }
    echo $_POST["status"];
