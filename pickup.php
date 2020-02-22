<?
include("connect.php");
session_start();

include("h.php");
?>

<body>

  <?php
  include("admin_header.php");

  ?>
  <!-- //header -->
  <? if (!isset($_GET['id_po'])) : ?>
    <div class="container fluid">
      <div class="row">
        <div class="col-lg-4">

        </div>
        <div class="col-lg-3">
          <form class="form" method="get" action="pickup.php">
            <input name="id_po" class="form-control" placeholder="รหัสการสั่งซื้อ" />
            <button class="form-control" type="submit">ค้นหา</button>
          </form>
        </div>
        <div class="col-lg-4">

        </div>
      </div>
    </div>

  <? else : ?>

    <?
    include("connect.php");
    $_r = $dbcon->query("select * from purchase_order inner join users on purchase_order.id_user = users.id_cus inner join dealer on dealer.id_dealer = purchase_order.id_dealer where id_po=" . $_GET['id_po']);
    $po = mysqli_fetch_assoc($_r);
    ?>
    <? if(!isset($po)) : ?>
      <script>
        Swal.fire({
            title: "ไม่พบใบรับสินค้า",
            icon: "error"
          }).then(function(res){
            window.location.replace('pickup.php')
          })
      </script>
    <? endif; ?>
    <form id="form1" name="form1" method="post" action="warehouse_updateorder.php">
      <input type="hidden" name="id_po" value="<?=$_GET['id_po']?>" />
      <h1>ใบรับสินค้าเข้าคลัง </h1>
      <table width="89%" border="0">
        <tr>

          <td width="24%">ชื่อผู้จัดจำหน่าย: <?= $po['name_dealer'] ?>
            <label for="textfield2"></label>
          </td> 
        <tr>
          <td>รหัสใบสั่งซื้อ: <?= $po['id_po'] ?> </td>
        </tr>
        <tr>
          <td>วันที่รับสินค้าเข้า: <?= $po['date'] ?>
          </td>
          <td><label for="update"></label>
        <tr>
          <td colspan="2" align="center">
            <table width="100%" border="1" cellspacing="0" cellpadding="0">
              <tr bgcolor="#CCCCCC" align="center">
                <td>
                  <h4>รหัสสินค้า</h4>
                </td>
                <td>
                  <h4>รายการสินค้า</h4>
                </td>
                <td>
                  <h4>จำนวนที่รับสินค้า </h4>
                </td>
                <td>ราคา</td>



              </tr>

              <? $_r = $dbcon->query('select * from purchase_list inner join product on product.id_pro = purchase_list.id_pro where id_po=' . $_GET['id_po']);
              while ($po_list = mysqli_fetch_array($_r)) :
              ?>
                <tr>
                  <td  align="center">
                    <h4><?= $po_list['id_pro'] ?></h4>
                    <input name="id_pro[]" type="hidden" value="<?= $po_list['id_pro'] ?>"/>
                  </td>
                  <td>
                    <h4><?= $po_list['name_pro'] ?></h4>
                  </td>
                  <td  align="center">
                    <input name="total[]" type="number" value="<?= $po_list['po_total'] ?>" max="<?= $po_list['po_total']?>" min="0" />
                  </td>
                  <td><?= $po_list['po_total'] ?></td>
                </tr>

              <? endwhile; ?>
            </table>
          </td>
        </tr>
        <tr>
          <td colspan="2" align="center"><label for="select2"></label>
          <a class="button" href="pickup.php">Reset</a>
          <input type="submit" name="button2" id="button2" value="Submit" /></td>
        </tr>
      </table>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
    </form>
</body>

<? endif; ?>