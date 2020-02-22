<?
  $id_pro = $_POST['id_pro'];
  $totals = $_POST['total'];
  include('connect.php');

  $_r = $dbcon->query("select * from purchase_order where id_po=".$_POST['id_po']);
  if(mysqli_fetch_assoc($_r)['status'] == 'success'){
      echo 'การสั่งซื้อถูกรับแล้ว'; 
      exit(0);
  }
  for($i=0; $i<count($id_pro); $i++){
      //select total มาจาก product
      $r_total = $dbcon->query("select total from product where id_pro=".$id_pro[$i]);
      $total = $r_total->fetch_assoc()["total"];

      // ลบสินค้าออกจากสต๊อก
      $add = $total + $totals[$i];

      //อัพเดทสต๊อกใหม่ในตราง product
      $dbcon->query("update product set total=".$add." where id_pro=".$id_pro[$i]);
      $dbcon->query("update purchase_order set status='success' where id_po=".$_POST['id_po']);
  }
?>

รับสินค้าสำเร็จ