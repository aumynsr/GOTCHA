<!DOCTYPE html>
<html lang="zxx">

<?php include("h.php");
include("connect.php");
?>
<?
include("admin_head.php")
?>

<body>

  <?
  include("admin_header.php")
  ?>

<body>
    
    <!-- sigin and sign up -->

    <!-- //header -->
    <!-- inner banner -->

    <!-- //inner banner -->
    <!-- breadcrumbs -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page"><font size="4"><B>ยืนยันการจัดส่ง</font></B></li>
        </ol>
    </nav>
    <!-- //breadcrumbs -->
    <!--checkout-->
    <section class="page-section cta">
        <?
        $g_status = 'paid';
        $sql = "select *, orders.status as o_status from orders inner join payment on payment.id_payment = orders.id_payment inner join users on users.id_cus = orders.id_cus inner join delivery on orders.address = delivery.id_delivery where orders.status like '%' and id_order=" . $_GET["id_order"];
        $result = $dbcon->query($sql);
        $detail = mysqli_fetch_assoc($result);
        if (!isset($detail)) {
            //header("Location:../comfirmorder.php");
        }
        ?>
        <div class="container">
            <div class="row">
                <div class="col">
                <font size="3">ชื่อผู้สั่ง</font>
                </div>
                <div class="col">
                <font size="3"><?= $detail["name_cus"] ?></font>
                </div>
            </div>
            <div class="row">
                <div class="col">
                <font size="3">ชื่อผู้รับ</font>
                </div>
                <div class="col">
                <font size="3"><?= $detail["name_delivery"] ?></font>
                </div>
            </div>
            <div class="row">
                <div class="col">
                <font size="3">หลักฐานการโอนเงิน</font>
                </div>
                <div class="col">
                    <button onclick="check_slip('<?= $detail['slip'] ?>')"><font size="2">คลิกเพื่อดูหลักฐานการโอนเงิน</font></button>
                </div>
            </div>
            <div class="row">
                <div class="col">
                <font size="3">ธนาคาร</font>
                </div>
                <div class="col">
                  
                   <font size="3">  <?= $detail['bank'] ?></font>
                </div>
            </div>
            <div class="row">
                <div class="col">
                <font size="3">สถานที่จัดส่ง</font>
                </div>
                <div class="col">
                <font size="3">  <?= $detail["address"] ?></font>
                </div>
            </div>
            <div class="row">
                <div class="col">
                <font size="3">วันที่สั่งสินค้า</font>
                </div>
                <div class="col">
                <font size="3">  <?= $detail["createDate"] ?></font>
                </div>
            </div>
            <div class="row">
                <div class="col">
                <font size="3">รหัสไปรษณีย์</font>
                </div>
                <div class="col">
                <font size="3"> <?= $detail["zip"] ?></font>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                <font size="3">สถานะ</font>
                </div>
                <div class="col" id="o_status">
                <font size="3"> <?= $detail["o_status"];
                    $g_status = $detail["o_status"]; ?></font>
                </div>
            </div>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th><font size="2">ชื่อสินค้า</font></th>
                        <th><font size="2">ราคา</font></th>
                        <th><font size="2">จำนวน</font></th>
                        <th><font size="2">รวม</font></th>
                    </tr>
                </thead>
                <tbody>
                    <?
                    $result = $dbcon->query("SELECT * FROM product JOIN order_list ON order_list.id_pro = product.id_pro where order_list.order_id=" . $_GET["id_order"]);
                    $sum = 0;
                    while ($order = mysqli_fetch_array($result)) : ?>
                        <tr>
                            <td><font size="2"><?= $order ["name_pro"] ?></font></td>
                            <td><font size="2"><?= $order["price"] ?></font></td>
                            <td><font size="2"><?= $order["order_total"] ?></font></td>
                            <td><font size="2"><?= $order["order_total"] * $order["price"] ?></font></td>
                            <? $sum += $order["order_total"] * $order["price"] ?>
                        </tr>
                    <? endwhile; ?>
                    <tr>
                        <td colspan="4" style="text-align: right;">
                        <font size="3"> ราคารวม <?= $sum+50 ?> บาท</font>
                        </td>
                    </tr>
                    <tr>
                    </tr>
                </tbody>
            </table>
            <div class="row mb-5">
                <div class="col">
                <font size="3"> รหัสไปรษณีย์</font>
                </div>
                <div class="col">
                    <input id="ems" oninput="check_ems(event)" class="form-control" placeholder="หมายเลขสิ่งของ 13 หลัก" />
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">

                <button  onclick='confirm(<?= $_GET["id_order"]; ?>, "delivery")' id="confirm" name="confirm" type="submit" class="btn btn-success" disabled><font size="3">ยืนยัน</font></button>
                <? if ($g_status != "delivery" && $g_status != "cancel")  : ?>
                    <button onclick='cancel(<?= $_GET["id_order"]; ?>, "cancel")' class="btn btn-danger" type="submit"><font size="3">ไม่ยืนยัน</font></button>
                <? endif; ?>
            </div>
        </div>
    </section>
<br>
    <script>
        var data = {
            ems: '',
        }

        function check_slip(img_name) {

            Swal.fire({
                title: 'หลักฐานการโอนเงิน',
                icon: 'info',
                html: `<img width="230" src="images/slip/${img_name}"/>`,
                showCloseButton: true,
                showCancelButton: true,
                focusConfirm: false,
                confirmButtonText: '<i class="fa fa-thumbs-up"></i> Great!',
                confirmButtonAriaLabel: 'Thumbs up, great!',
                cancelButtonText: '<i class="fa fa-thumbs-down"></i>',
                cancelButtonAriaLabel: 'Thumbs down'
            })
        }

        function check_ems(e) {
            data.ems = jQuery("#ems").val();
            console.log(/\w{2}\d{9}\w{2}/.test(data.ems))
            if (/\w{2}\d{9}\w{2}/.test(data.ems)) {
                jQuery("#confirm").removeAttr("disabled");
            } else {
                jQuery("#confirm").attr("disabled", true);
            }
        }

        function confirm(order_id, status) {
            console.log(order_id, status)
            $.post("update_confirm_order.php", {
                id_order: order_id,
                status: status,
                ems: jQuery("#ems").val()
            }).then(function(res) {
                $("#o_status").html(res);
                Swal.fire({
                    title: "การบันทึกเสร็จสิ้น",
                    icon: "success"
                })
            })
        }

        function cancel(order_id, status) {
            Swal.fire({
                title: 'ระบุเหตุผล',
                input: 'text',
                inputAttributes: {
                    autocapitalize: 'off'
                },
                showCancelButton: true,
                confirmButtonText: 'ยืนยันการ "ยกเลิก"',
                showLoaderOnConfirm: true,
                preConfirm: (remark) => {
                    console.log(order_id, status, remark)
                    return $.post("update_confirm_order.php", {
                        id_order: order_id,
                        status: status,
                        remark: remark
                    }).then(function(res) {
                        if (!res) {
                            throw new Error(response.statusText)
                        }
                        return res
                    }).catch(function(error) {
                        Swal.showValidationMessage(
                            `Request failed: ${error}`
                        )
                    })
                },
                allowOutsideClick: () => !Swal.isLoading()
            }).then((result) => {
                console.log(result)
                if (result.value) {
                    Swal.fire({
                        title: "บันทึกการยกเลิกเสร็จสิ้น",
                        icon: "success"
                    })
                    $("#o_status").html(result.value);
                }
            })
        }
    </script>