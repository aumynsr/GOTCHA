<?
include("connect.php");
session_start();

?>

<html lang="en">
<?
include("admin_head.php")
?>

<body>

  <?
  include("admin_header.php")
  ?>

  <head>



    <form id="form1" name="form1" method="post" action="purchase_order.php">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <div class="form-group">
              <select class="form-control form-control-lg mb-5" style="height: 50px;" id="cars" name="dealer">
                <option value="1">vatinee</option>
              </select>
            </div>
          </div>
        </div>
      </div>

      <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <th> </th>
            <th>ชื่อสินค้า</th>
            <th>จำนวนที่เหลือ</th>
            <th>จำนวนที่ซื้อ</th>
            <th>&nbsp;</th>
          </tr>
        </thead>
        <tbody>
          <?
          $result = $dbcon->query('SELECT * FROM product order by total asc');
          while ($product = mysqli_fetch_array($result)) : ?>
            <tr>
              <td>
                <input type="checkbox" onclick='checkProd(event, <?= $product["id_pro"] ?>)' id="check_prod<?= $product["id_pro"] ?>" name="check_prod[]" value="<?= $product["id_pro"] ?>">
              </td>
              <td class="product-id">
                <h2 class="h5 text-black"><?= $product["name_pro"] ?></h2>
                <input type="hidden" value="<?= $product["name_pro"] ?>" id="name_pro" />
              </td>
              <td class="product-id">
                <? if ($product["total"] <= 10) : ?>
                  <h2 class="h5 text-red" style="color:red"><?= $product["total"] ?></h2>
                <? else : ?>
                  <h2 class="h5 text-black"><?= $product["total"] ?></h2>
                <? endif; ?>
              </td>
              <td class="product-id">
                <input type="number" id="num-<?= $product["id_pro"] ?>" name="prod_query[]" value="0" min="0" id="cart_total" disabled />
              </td>
            </tr>
          <? endwhile; ?>
          <tr>
            <td colspan="8" style="text-align: right;">

              <button type="submit" class="btn btn-primary btn-lg">สั่งซื้อสินค้า</button>
              <a href="index.php" class="btn btn-danger btn-lg">ย้อนกลับ<a>
            </td>
          </tr>
        </tbody>
      </table>
    </form>

    <script>
      function checkProd(e, id) {
        let isCheck = jQuery("#check_prod" + id).is(':checked')
        if (isCheck) {
          $("#num-" + id).removeAttr("disabled")
        } else {
          $("#num-" + id).attr("disabled", true)
        }

        //console.log(e, id);
      }
    </script>
</body>